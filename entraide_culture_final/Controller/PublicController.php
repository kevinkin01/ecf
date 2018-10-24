<?php

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

} elseif(isset($_GET['m'])){
    $recup = $ArticleM->listArticle();

    // if 1 or more article(s)
    if ($recup) {

        # aaa052 list and create table with object Article
        foreach ($recup as $item) {
            $listView[] = new Article($item);
        }
    } else { // if false
        $listView = "Il n'y a pas encore d'article.";
    }
    switch($_GET['m']){
        case 'accueil':
            require_once "View/m.accueil.view.php";
            break;
        case 'presentation':
            require_once "View/m.presentation.view.php";
            break;
        case 'culture':
            require_once "View/m.culture.view.php";
            break;
        case 'entraide':
            require_once "View/m.entraide.view.php";
            break;
        case 'asbl':
            require_once "View/m.asbl.view.php";
            break;
        case 'ancrage':
            require_once "View/m.ancrage.view.php";
            break;
        case 'infos':
            require_once "View/m.infos.view.php";
            break;
        default:
            require_once "View/m.accueil.view.php";
            break;

    }

}
else {

    $recup = $ArticleM->listArticle();

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
}
