<?php
# aaa097 - create Article view form
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Ajouter un article</title>
    <script src="Asset/js/myJs.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="Asset/ckeditor/ckeditor.js"></script>

</head>
<body>
<div class="container mt-3">
<?php
include "View/menu.view.php";
?>
<center><h1>Ajouter un article</h1></center>
<?php
# aaa102 if create error
if(isset($error)) echo "<h3>$error</h3>";

?>

<form name="oneName2" action="" method="post">

<div class="form-group row">
    <label for="lthetitle" class="col-sm-2 col-form-label">Titre</label>
    <div class="col-sm-10">
      <input type="text" name="thetitle" class="form-control" id="lthetitle" placeholder="Entrez le titre de l'article">

    </div>
</div>
<div class="form-group row">
    <label for="lthedate" class="col-sm-2 col-form-label">Date</label>
    <div class="col-sm-10">
      <input type="datetime-local" name="thedate" class="form-control" id="lthedate" value="<?=date("Y-m-d H:i:s")?>">
    </div>
</div>
<div class="form-group row">
    <label for="lthetitle" class="col-sm-2 col-form-label">Catégorie</label>
    <div class="col-sm-10">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="categoryidcategory" id="inlineRadio1" value="1" <?=@$x1;?>>
            <label class="form-check-label" for="inlineRadio1">Présentation</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="categoryidcategory" id="inlineRadio2" value="2" <?=@$x2;?>>
            <label class="form-check-label" for="inlineRadio2">"ASBL MAPPING"</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="categoryidcategory" id="inlineRadio3" value="3" <?=@$x3;?>>
            <label class="form-check-label" for="inlineRadio3">Entraide</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="categoryidcategory" id="inlineRadio4" value="4" <?=@$x4;?>>
            <label class="form-check-label" for="inlineRadio4">Culture</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="categoryidcategory" id="inlineRadio4" value="4" <?=@$x4;?>>
            <label class="form-check-label" for="inlineRadio4">Ancrage Locale</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="categoryidcategory" id="inlineRadio4" value="4" <?=@$x4;?>>
            <label class="form-check-label" for="inlineRadio4">Infos Pratique</label>
        </div>
    </div>
</div>
<div class="form-group">

            <label for="exampleTextarea">Texte</label>
            <textarea name="thetext" id="editor1" rows="10" cols="80">
            </textarea>


    <script>

        CKEDITOR.replace( 'editor1' );
    </script>
  </div>
<input type="hidden" name="authoridauthor" value="<?=$_SESSION['idauthor']?>">


<center><button type="submit" class="btn btn-primary">Ajouter l'article</button></center>
</form>
<footer><center>Copyright </center></footer>

</body>
</html>
