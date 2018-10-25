<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Admin - Modifier un slider</title>
    <script src="Asset/js/myJs.min.js"></script>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
 
<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>


</head>

<body>
    <div class="container mt-3">

            <center>
                <h1>Modifier un slider</h1></center>
            <?php
# aaa113 article doesn't exist
if(!$recup){
echo "<h3>Cet article n'existe plus</h3>";
}else {

?>

                <form name="oneName2" action="" method="post" enctype="multipart/form-data">

                    <div class="form-group row">
                        <label for="lthetitle" class="col-sm-2 col-form-label">Titre</label>
                        <div class="col-sm-10">
                            <input type="text" name="thetitle" class="form-control" id="lthetitle" placeholder="Entrez le titre de l'article" value="<?=$recup['titre'];?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="lthetitle" class="col-sm-2 col-form-label">Ajouter l'image</label>
                        <div class="col-sm-10">
                            <input type="file" name="uploaded_file" class="form-control" id="lthetitle" accept="image/*">
                        </div>
                    </div>



                    <input type="hidden" name="idarticle" value="<?=$recup['id'];?>">

                    <center>
                        <button type="submit" class="btn btn-primary">Modifier le slider</button>
                    </center>
                </form>

                <?php } ?>
                    <footer>
                        <center>Copyright CF2M 2018</center>
                    </footer>
    </div>
</body>

</html>
