<?php
use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\RFCValidation;

$ArticleM = new ArticleManager($pdo);

$UtilM = new AuthorManager($pdo);

if(isset($_GET['login'])) {

    if(empty($_POST)){
        require_once "View/connect.view.php";
    }else{
        # aaa075
        $ident = new Author($_POST);

        # aaa083 - verification
        $connect = $UtilM->identUtil($ident);

        # aaa084
        if($connect){
            // if true
            header("Location: ./");
        }else{
            // if false
            
            $error = "Login et/ou mot de passe incorrect";
            require_once "View/connect.view.php";
        }

    }

}elseif (empty($_POST)){
    $recup = $ArticleM->listArticle();
    $validation="";

    // if 1 or more article(s)
    if ($recup) {

        # aaa052 list and create table with object Article
        foreach ($recup as $item) {
            $listView[] = new Article($item);
        }
    } else { // if false
        $listView = "Il n'y a pas encore d'article.";
    }
    //require_once "View/index.view.php";

    require_once "View/index.php";
}else {


        $validator = new EmailValidator();
        $a = $validator->isValid($_POST['email'], new RFCValidation()); //true
// Create the Transport
        if ($a) {
            $transport = (new Swift_SmtpTransport('relay.skynet.be', 25))
                ->setUsername('your username')
                ->setPassword('your password');
            $mail = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
            $thetext = htmlentities(strip_tags($_POST['message']), ENT_QUOTES);
            $aqui = "kevinkinanga41@gmail.com";
// Create the Mailer using your created Transport
            $mailer = new Swift_Mailer($transport);

// Create a message
            $message = (new Swift_Message('Wonderful Subject'))
                ->setFrom([$mail])
                ->setTo([$aqui])
                ->setBody($thetext);

// Send the message
            $result = $mailer->send($message);
            header("Location: ?page=info");
        }

}

