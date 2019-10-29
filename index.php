<!Doctype html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<title>exercice1</title>

</head>

<body>
<div class="container">
<h1> Les etudiants d'iset Bizerte </h1>
<a href="create.php"> <input class="btn btn-primary" type="submit"> Nouvel etudiant</a>
<table class="table table-hover"> 
  <tr>
  <th> Identifiant</th>
  <th>firstname</th>
  <th>lastname</th>
  <th>email</th>
  <th>phone</th>
  <th>Operations</th>
  </tr>
<?php
 include'dbconnexion.php';
 $reponse= $bdd->query('SELECT * FROM students ');
 while($donnees = $reponse->fetch()){
	echo'<tr>';
	echo'<td>'.$donnees['id'].'</td>';
	 echo'<td>'.$donnees['firstname'].'</td>';
	 echo'<td>'.$donnees['lastname'].'</td>';
	 echo'<td>'.$donnees['email'].'</td>';
	 echo'<td>'.$donnees['phone'].'</td>';
	echo'</tr>';
 }


?>
</table>


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	</body>
</html>
