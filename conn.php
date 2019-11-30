
<?php 
try{
    $bdd = new PDO("mysql:host=localhost;dbname=DB_CAT_DWM;charset=utf8" , "root" ,"");
}catch (PDOException $e){
    echo " errer connexion base de donne";
};
?>

