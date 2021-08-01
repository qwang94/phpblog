<?php
namespace OpenClassrooms\Blog\Model;

require_once("Model/Manager.php");

class CommentManager extends Manager 
{
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr, validated FROM comments WHERE post_id = ? AND validated = 1 ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    public function getAllComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr, validated FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    public function getComment($commentId) {
        $db = $this->dbConnect();
        $comment = $db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE id = ? ');
        $comment->execute(array($commentId));

        return $comment;
    }

    public function postComment($postId, $author, $comment, $validated)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date, validated) VALUES(?, ?, ?, NOW(), ?)');
        $affectedLines = $comments->execute(array($postId, $author, $comment, $validated));

        return $affectedLines;
    }

    public function validateComment($id)
    {
        $db = $this->dbConnect();
        $validated_comment_pre = $db->prepare("UPDATE comments SET validated = 1 WHERE id = ? ");
        $validated_comment = $validated_comment_pre->execute(array($id));

        return $validated_comment;
    }

    public function invalidateComment($id)
    {
        $db = $this->dbConnect();
        $invalidated_comment_pre = $db->prepare("UPDATE comments SET validated = 0 WHERE id = ?");
        $invalidated_comment = $invalidated_comment_pre->execute(array($id));

        return $invalidated_comment;
    }

    public function deleteComment($id)
    {
        $db = $this->dbConnect();
        $deleted_comment_pre = $db->prepare("DELETE FROM comments WHERE id = ? ");
        $deleted_comment = $deleted_comment_pre->execute(array($id));

        return $deleted_comment;
    }
}