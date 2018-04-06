<?php 

/*
//echo $_POST['url'];
$codesource = file_get_contents($_POST['url']);
//echo $codesource;
preg_match_all("#<h5 class=\"titre clearfix\">(.+)</h5>#", $codesource, $tableau_resultat);
//preg_match_all("#<div class=\"coordonnees col-md-9\"><a href=\"mailto:.+\"><span class=\"glyphicon glyphicon-envelope\"></span>(.+)</a></div>#iU", $codesource, $tableau_resultat);
echo "<pre>";
print_r($tableau_resultat[0]);
echo "</pre>";

?>

<div class="tel pull-right">
	<span class="glyphicon glyphicon-phone-alt"></span>
        Téléphone : <strong>00 1 514 903 6246</strong>
</div>
*/

$html = file_get_contents($_POST['url']); //récupère le html renvoyé par l'url

$doc = new DOMDocument();

libxml_use_internal_errors(TRUE); //desactive les erreurs libxml

if(!empty($html)){ // Si un html est retourné

	$doc->loadHTML($html);
	libxml_clear_errors(); //supprime les erreur pour yucky html
	
	$xpath = new DOMXPath($doc);

	
/*
	//obtient tous les h5 avec une classe
	$rows = $xpath->query('//'.$_POST['selecteur'].'[@'.$_POST['class_id'].']');

	if($rows->length > 0){

		echo "<table class='table'>";
		foreach($rows as $row){
			echo "<tr><td>". $row->nodeValue . "</td></tr>";
		};
		echo "</table>";
	}
	
	if($rows->length = 0){

		echo "<div class='alert alert-danger' role='alert'>
  This is a danger alert—check it out!
</div>";
		
	}*/

	//obtient tous les h5 avec une classe
	if ($_POST['class'] == "" &&  $_POST['id'] == "") {
		$tab2 = $xpath->query('//'.$_POST['selecteur'].'[@'.$_POST['class_id'].']');	
		if($tab2->length > 0){
			foreach($tab2 as $row){
				echo $row->nodeValue . "<br/>";
			}
		}
	} 

	if (!empty($_POST['class'])) {
		echo "Bonjour";
	 	$tab2 = $xpath->query("//".$_POST['selecteur']."[@".$_POST['class_id']."='".$_POST['class']."']");	
		if($tab2->length > 0){
			foreach($tab2 as $row){
				echo $row->nodeValue . "<br/>";
			}
		}
	 } 

	if (!empty($_POST['id'])) {
	 	$tab2 = $xpath->query('//'.$_POST['selecteur'].'[@'.$_POST['class_id'].'="'.$_POST['id'].'""]');	
		if($tab2->length > 0){
			foreach($tab2 as $row){
				echo $row->nodeValue . "<br/>";
			}
		}
	 } 
/*
	$pokemon_row = $xpath->query('//'.$_POST['selecteur'].'[@'.$_POST['class_id']);

	if($pokemon_row->length > 0){
		foreach($pokemon_row as $row){
			echo $row->nodeValue . "<br/>";
		}
	}*/
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Resultat scraper</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="margin: 10px;">
</body>
</html>