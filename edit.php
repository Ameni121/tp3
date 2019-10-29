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
<div class="container">
        <fieldset>
            <form action="update.php" method="post">
                <h1>Editer etudiant</h1>
                <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <input type="text" name="firstname" id="fn" class="form-control">
                </div>
                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" id="ln" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" name="email" id="en" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" name="phone" id="pn" class="form-control">
                </div>
               <input type="button" value="Enregistrer" class="btn btn-primary">
                <input type="button" value="Annuler" class="btn btn-primary">
            </form>
        </fieldset>
    </div>
    <?php
      $nb_supp = $cnx->exec("DELETE FROM students WHERE  ");
     echo $nb_supp . ' etudiant supprimees !' ;
     ?>
    
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
</body>
</html>