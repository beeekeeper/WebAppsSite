<?php
ini_set('display_errors', 1);
// add your includes for connections and functions
require('../includes/conn.inc.php');  // ../../ instead of ../ as I am a folder deeper than the edit.php
require('../includes/functions.inc.php');
// make sure the path is correct
// sanitize user variables
$srecID = safeInt($_POST['recID']);
//$srecName = safeString($_POST['recName']); 
//$srecDescription = safeString($_POST['recDescription']); 
//$srecImage = safeString($_POST['recImage']); 
//$srecImageDesc = safeString($_POST['recImageDesc']); 
//$srecIngredients = safeString($_POST['recIngredients']); 
//$srecMethod = safeString($_POST['recMethod']); 
//$srecType = safeString($_POST['recType']); 
//$srecDiet = safeString($_POST['recDiet']); 

// prepare statement

$sql = "DELETE * FROM recipes WHERE recID = :recID";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':recID', $srecID, PDO::PARAM_INT);
//$stmt->bindParam(':recName', $srecName, PDO::PARAM_STR);
//$stmt->bindParam(':recDescription', $srecDescription, PDO::PARAM_STR);
//$stmt->bindParam(':recImage', $srecImage, PDO::PARAM_STR); //use str even if number
//$stmt->bindParam(':recImageDesc', $srecImageDesc, PDO::PARAM_STR);
//$stmt->bindParam(':recIngredients', $srecIngredients, PDO::PARAM_STR);
//$stmt->bindParam(':recMethod', $srecMethod, PDO::PARAM_STR);
//$stmt->bindParam(':recType', $srecType, PDO::PARAM_STR);
//$stmt->bindParam(':recDiet', $srecDiet, PDO::PARAM_STR);

$stmt->execute();

// redirect browser
header("Location: ../pages/recipes.php");

// make sure no other code executed
exit;
?>
