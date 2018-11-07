<?php

$ArticleM = new ArticleManager($pdo);
$UtilM = new AuthorManager($pdo);
$AccueilM = new AccueilManager($pdo);

# aaa087 deconnect
if (isset($_GET['deconnect'])) {
    $UtilM->deconnect();

# aaa095 create article
} elseif (isset($_GET['post'])) {

    # aaa096 form not submitted
    if (empty($_POST)) {
        # aaa097 - view form
        require "View/createArticleAdmin.view.php";
    } else {
        var_dump($_POST);
        $newArticle = new Article($_POST);
        # aaa101 - insert into DB
        $succes = $ArticleM->createArticle($newArticle);
        if ($succes) {
            header("Location: ./");
        } else {
            # aaa102 - view form with error
            $error = "Article non inséré, veuillez recommencer";
            require "View/createArticleAdmin.view.php";
        }
    }
# aaa109 update an article
} elseif (isset($_GET['update']) && ctype_digit($_GET['update'])) {

    $idarticle = (int)$_GET['update'];

    # aaa114 form not submitted
    if (empty($_POST)) {
        # aaa110 get one article by idarticle
        $recup = $ArticleM->oneArticle($idarticle);
        if ($recup) {
            $recup2 = new Article($recup);

        }

        # aaa111 view
        require_once "View/updateArticleAdmin.view.php";
        # aaa115 form submit
    } else {
        # aaa116 create article object with $_POST hydrate
        $update = new Article($_POST);
        # aaa118 update Article
        $change = $ArticleM->updateArticle($update, $idarticle);
        # aaa125 if update ok
        if ($change) {
            header("Location: ./");
        } else {
            $UtilM->deconnect();
        }
    }
}elseif (isset($_GET['updateSlider']) && ctype_digit($_GET['updateSlider'])) {
    $idarticle = (int)$_GET['updateSlider'];
    # aaa114 form not submitted
    if (empty($_POST)) {
        # aaa110 get one article by idarticle
        $recup = $AccueilM->oneSlider($idarticle);
        if ($recup) {

        }
        # aaa111 view
        require_once "View/updateSlider.view.php";
        # aaa115 form submit

    } else {
        # aaa116 create article object with $_POST hydrate
        $update = $_POST;

        # aaa118 update Article
        $change = $AccueilM->updateSlider($update, $idarticle);
        # aaa125 if update ok
        if ($change) {
            header("Location: ./?hautpage");
        }
    }
# aaa125 delete an article
}elseif(isset($_GET['delete'])&& ctype_digit($_GET['delete'])){
    $deleteId = (int) $_GET['delete'];
    # aaa128 use setter of Article
    $article = new Article(["idarticle"=>$deleteId]);
    
    # aaa131 delete article
    $del = $ArticleM->deleteArticle($article);
    if($del){
        header("Location: ./");
    }else{
        $UtilM->deconnect();
    }
    
    
# aaa089 homepage admin
}elseif (isset($_GET['hautpage'])) {
    $recup = $AccueilM->listSlider();
    echo "<pre>";
    //var_dump($recup);
    echo "</pre>";
    if (!$recup) {
        $affiche = "Vous n'avez pas encore écris d'articles";
    } else {

    }

    require_once "View/hautpage.view.php";

} else {
    # aaa107
    $idauthor = (int) $_SESSION['idauthor'];
    $recup = $ArticleM->listArticleAuthor($idauthor);
    if (!$recup) {
        $affiche = "Vous n'avez pas encore écris d'articles";
    } else {
        foreach ($recup AS $item) {
            $affiche[] = new Article($item);
        }
    }
    # aaa091
    require_once "View/indexAdmin.view.php";
}