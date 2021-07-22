<?php
namespace OpenClassrooms\Blog\Model;

use Exception;

require_once("Manager.php");

class PostManager extends Manager
{
    public function getAllPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, subtitle, content, author, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC');

        return $req;
    }
    
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, subtitle, content, author, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

        return $req;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, subtitle, content, author, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

    public function addPost($title, $subtitle, $content, $author)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO posts(title, subtitle, content, author, creation_date) VALUES(?, ?, ?, ?, NOW())');
        $post = [];
        $post['content'] = $req->execute(array($title, $subtitle, $content, $author));
        /**Last insertedId */
        $post['id'] = $db->lastInsertId();

        return $post;
    }

    public function getMyPosts($user)
    {
        $db = $this->dbConnect();
        $sql = $db->prepare('SELECT id, title, subtitle, content, author, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE author = ?');
        $sql->execute(array($user));
        return $sql;
    }

    public function editPost($title, $subtitle, $content, $author, $post_id)
    {
        $db = $this->dbConnect();
        $sql = $db->prepare('UPDATE posts SET title = ?, subtitle = ?, content = ?, author = ?, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') = NOW() WHERE id = ?');
        $new_post = $sql->execute(array($title, $subtitle, $content, $author, $post_id));

        return $new_post;
    }
}