<?php 
require_once("conn.php") ;
if(isset($_GET['idCat'])){
  $idCat = $_GET['idCat'];
}else{
  $idCat = 1 ;
}


$query = $bdd->query(" SELECT * FROM  produits WHERE ID_CAT = $idCat ;");
$rs = $query -> fetchAll();

 ?>
   

    <table border="1">
      <tr>
        <th>ID</th><th>DES</th><th>PRIX</th><th>QUANTITE</th> <th>PROMO</th>
      </tr>
    
    <?php foreach ($rs as $value) { ?>
       <tr>
        <td> <?php echo ($value['ID_PROD'])?></td>
        <td> <?php echo ($value['DESIGNATION'])?></td>
        <td> <?php echo ($value['PRIX'])?></td>
        <td> <?php echo ($value['QUANTITE'])?></td>
        <td> <?php echo ($value['PROMO'])?></td>
       </tr>
       <?php } ?>
       </table>
      



