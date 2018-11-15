<?php
# aaa112 - update Article view form
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Modifier un article</title>
    <script src="Asset/js/myJs.min.js"></script>
    <link type="text/css" rel="stylesheet" href="Asset/css/jquery-ui.css" />
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
</head>
<body>
<script src="Asset/js/jquery-ui.js"></script>
<script src="Asset/js/datepicker-fr.js"></script>


    <div class="container mt-3">
<?php
include "View/menu.view.php";
?>
<center><h1>Modifier un article</h1></center>
<?php
# aaa113 article doesn't exist
if(!$recup){
    echo "<h3>Cet article n'existe plus</h3>";
}else {

  switch ($recup2->getCategoryidcategory()) {
        case 1:
            $x1 = "checked";
            break;
        case 2:
            $x2 = "checked";
            break;
        case 3:
            $x3 = "checked";
            break;
        case 4:
            $x4 = "checked";
            break;

            case 5:
          $x4 = "checked";
          break;
      case 6:
          $x4 = "checked";
          break;
    }
?>


<form name="oneName2" action="" method="post">

<div class="form-group row">
        <label for="lthetitle" class="col-sm-2 col-form-label">Titre</label>
        <div class="col-sm-10">
            <input type="text" name="thetitle" class="form-control" id="lthetitle" placeholder="Entrez le titre de l'article" value="<?=$recup2->getThetitle()?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="lthetitle" class="col-sm-2 col-form-label">Sous-titre</label>
        <div class="col-sm-10">
            <input type="text" name="soustitre" class="form-control" id="lthetitle" placeholder="Entrez le soustitre de l'article" value="<?=$recup2->getSoustitre()?>">
        </div>
    </div>
<div class="form-group row">
    <label for="lthedate" class="col-sm-2 col-form-label">Date</label>
    <div class="col-sm-10">
      <input type="date" name="thedate" class="form-control" id="aujourdhui" value="<?= $recup2->getThedate() ?>">
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
    <textarea name="thetext" id="summernote"><?=$recup2->getThetext()?></textarea>
    <script>$(document).ready(function() {
            $("#summernote").summernote({
                placeholder: 'enter directions here...',
                height: 300,
                callbacks: {
                    onImageUpload : function(files, editor, welEditable) {

                        for(var i = files.length - 1; i >= 0; i--) {
                            sendFile(files[i], this);
                        }
                    }
                }
            });
        });
        function sendFile(file, el) {
            var form_data = new FormData();
            form_data.append('file', file);
            $.ajax({
                data: form_data,
                type: "POST",
                url: 'editor-upload.php',
                cache: false,
                contentType: false,
                processData: false,
                success: function(url) {
                    $(el).summernote('editor.insertImage', url);
                }
            });
        }
    </script>
  </div>

<input type="hidden" name="idarticle" value="<?=$recup2->getIdarticle()?>">
<input type="hidden" name="Authoridauthor" value="<?=$recup2->getAuthoridauthor()?>">

<center><button type="submit" class="btn btn-success">Modifier l'article</button></center>
</form>
    <script type="text/javascript">
        $("#aujourdhui").datepicker( $.datepicker.regional[	"fr" ] );
    </script>

    <?php
}
?>
<footer><center>Copyright </center></footer>
</div>
</body>
</html>
