<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Scrapper</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 <script type="text/javascript">
	 	$(document).ready(function(){
    		$("#form").change(function(){
        		$("#form2").load("showForm2.php");
    		});
		});
	 </script>
</head>
<body style="margin: 10px;">
	<h1>Outil de scrapping</h1>
	<form method="POST" action="scraping.php"> 
		<div class="form-group mb-2">
		    <input type="text" class="form-control" id="url" name="url" placeholder="Entrez l'url à scrapper">
	  	</div>
	  	<div class="form-group mb-2">
		    <input type="text" class="form-control" id="selecteur" name="selecteur" placeholder="Entrez le selecteur">
	  	</div>
	  	<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="class_id" id="class" value="class">
			<label class="form-check-label" for="class">class</label>
		</div>
  		<div class="form-group mb-2">
		    <input type="text" class="form-control" id="class" name="class" placeholder="Entrez la classe de l'élément">
	  	</div>
	  	<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="class_id" id="id" value="id">
			<label class="form-check-label" for="id">id</label>
		</div>
  		<div class="form-group mb-2">
		    <input type="text" class="form-control" id="id" name="id" placeholder="Entrez l'id de l'élément">
	  	</div>
	  	
		

	  <button type="submit" class="btn btn-primary mb-2">Rechercher</button>
	</form>

</body>
</html>