<?php

class AccueilManager
{
    private $db;

    public function __construct(PDO $connect)
    {

        $this->db = $connect;
    }

    public function listSlider(){

        # aaa038 - recup all articles without author at the moment
        // $get = $this->db->query("SELECT a.* FROM article a ORDER BY a.thedate DESC;");

        # aaa060 - replace a38 recup all articles with JOIN author
        $get = $this->db->query("SELECT * FROM 	accueil_image ");

        # aaa039 => one or more result
        if($get->rowCount()){

            # aaa041 - return array assoc's in array index
            
            return $get->fetchAll(PDO::FETCH_ASSOC);

        }else{
            # aaa040 => no result => return false
            return false;
        }
    }
    public function presentation(){

        # aaa038 - recup all articles without author at the moment
        // $get = $this->db->query("SELECT a.* FROM article a ORDER BY a.thedate DESC;");

        # aaa060 - replace a38 recup all articles with JOIN author
        $get = $this->db->query("SELECT * FROM 	accueil_image where id <6 ");

        # aaa039 => one or more result
        if($get->rowCount()){

            # aaa041 - return array assoc's in array index

            return $get->fetchAll(PDO::FETCH_ASSOC);

        }else{
            # aaa040 => no result => return false
            return false;
        }
    }
    public function entraide(){

    # aaa038 - recup all articles without author at the moment
    // $get = $this->db->query("SELECT a.* FROM article a ORDER BY a.thedate DESC;");

    # aaa060 - replace a38 recup all articles with JOIN author
    $get = $this->db->query("SELECT * FROM 	accueil_image where id BETWEEN 6 and 10");

    # aaa039 => one or more result
    if($get->rowCount()){

        # aaa041 - return array assoc's in array index

        return $get->fetchAll(PDO::FETCH_ASSOC);

    }else{
        # aaa040 => no result => return false
        return false;
    }
}
    public function culture(){

        # aaa038 - recup all articles without author at the moment
        // $get = $this->db->query("SELECT a.* FROM article a ORDER BY a.thedate DESC;");

        # aaa060 - replace a38 recup all articles with JOIN author
        $get = $this->db->query("SELECT * FROM 	accueil_image where id BETWEEN 11 and 15");

        # aaa039 => one or more result
        if($get->rowCount()){

            # aaa041 - return array assoc's in array index

            return $get->fetchAll(PDO::FETCH_ASSOC);

        }else{
            # aaa040 => no result => return false
            return false;
        }
    }
    public function ancrage(){

        # aaa038 - recup all articles without author at the moment
        // $get = $this->db->query("SELECT a.* FROM article a ORDER BY a.thedate DESC;");

        # aaa060 - replace a38 recup all articles with JOIN author
        $get = $this->db->query("SELECT * FROM 	accueil_image where id BETWEEN 16 and 20");

        # aaa039 => one or more result
        if($get->rowCount()){

            # aaa041 - return array assoc's in array index

            return $get->fetchAll(PDO::FETCH_ASSOC);

        }else{
            # aaa040 => no result => return false
            return false;
        }
    }
    public function oneSlider(int $id){
        $sql = "SELECT * FROM accueil_image WHERE id = ?";
        $request = $this->db->prepare($sql);
        $request->bindValue(1,$id,PDO::PARAM_INT);
        $request->execute();
        if($request->rowCount()){
            return $request->fetch(PDO::FETCH_ASSOC);
        }else{
            return false;
        }
    }
    public function updateSlider($argument, int $getIdArticle){
                echo "<pre>";
                var_dump($argument);
                var_dump($_FILES);
                echo "</pre>";

                if(empty($_FILES['uploaded_file'])){
                    echo "errreur";
                    exit();
                }
                $temp = explode(".", $_FILES["uploaded_file"]["name"]);
                $newfilename = round(microtime(true)) . '.' . end($temp);
        $destinationFilePath = 'img-upload/'.$newfilename ;

        if(!move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $destinationFilePath)){
                    echo "erreur";
                }
                else{
                    echo $destinationFilePath;
                }
 
                
                $sql = "UPDATE accueil_image SET titre=:titre, image=:image WHERE id=:id";
                $update = $this->db->prepare($sql);
                # aaa123 execute with array for replace bindValue or bindParam without type verification
                $update->execute(array(
                    ':titre' => $argument["thetitle"],
                    ':image' => $destinationFilePath,
                    ':id' => $argument["idarticle"],
                    
             ));

                # aaa124 if update ok
                if($update->rowCount()){
                    return true;
                }else{
                    return false;
                }

    
    }

   

}