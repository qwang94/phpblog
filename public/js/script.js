$(function(){
    $(".navbar-nav .nav-link").click(function(){
        $(".navbar-nav .nav-link").removeClass("active");
        $(this).addClass("active");
    });
    
    
    $('#contact-form').submit(function(e){
        e.preventDefault();
        $('.comments').empty();
        var postdata = $('#contact-form').serialize();

    $.ajax({
        type: 'POST',
        url: 'View/frontend/contact.php',
        data: postdata,
        dataType: 'json',
        success: function(result) {

            if(result.isSuccess){
                $("#contact-form").append("<p class='thank-you'>Votre message a bien été envoyé. Merci de m'avoir contacté !</p>");
                $("#contact-form")[0].reset();
            } else {
                $("#firstname + .comments").html(result.firstnameError);
                $("#name + .comments").html(result.nameError);
                $("#email + .comments").html(result.emailError);
                $("#phone + .comments").html(result.phoneError);
                $("#message + .comments").html(result.messageError);
            }
        } 
    });
});
});