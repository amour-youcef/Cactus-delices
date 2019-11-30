<?php 
require_once("conn.php") ;

$query = $bdd->query(" SELECT * FROM  CATEGORIES ");
$rs = $query -> fetchAll(); ?>

 <select>

   <?php foreach ($rs as $value) { ?>
    <option value="<?php echo ($value['ID_CAT'])?>">
               <?php echo ($value['NOM_CAT'])?>
            </option>
   <?php } ?>

 </select>


