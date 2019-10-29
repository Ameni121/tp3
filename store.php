<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<table border="1">
      <tr>
          <th>ID</th>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Email</th>
          <th>Phone</th>
          <th>OpÃ©rations</th>
          <th><a href="edit.php">Editer</a></th>
      </tr>
<?php
include 'dbconnexion.php' ;

$rep= $bdd->query('SELECT * FROM students');
 while($data=$rep->fetch()){
    echo'<tr>';
    echo'<td>'.$data['id'].'</td>';
    echo'<td>'.$data['firstname'].'</td>';
    echo'<td>'.$data['lastname'].'</td>';
    echo'<td>'.$data['email'].'</td>';
    echo'<td>'.$data['phone'].'</td>';
    echo'</tr>';
}
?>
</table>
<br>
<button type="submit" class="btn btn-primary"><a href="create.php">Nouvel Ã©tudiant</a></button>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
