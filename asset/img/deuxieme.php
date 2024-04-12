
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
    

        <div class="card-body">
            <p >nom : <?php echo $_POST['nom']; ?></p>
            <p >prenom : <?php echo $_POST['prenom']; ?></p>
            <p >telephone : <?php echo $_POST['telephone']; ?></p>
            <p >email : <?php echo $_POST['email']; ?></p>
    
        </div>
    </body>
</html>


        


 
        <?php
        try{
            $mysqlClient = new PDO("mysql:host=localhost;dbname=ben;charest=utf8","root","");
        }
        catch (Exeption $e)
        {
            die("Erreur : ".$e->getMessage());
        }
        $sqlQuery = "INSERT INTO formulaire(nom,prenom,email,telephone) values (:nom, :prenom, :email, :telephone)";

        $insertRecipe = $mysqlClient->prepare($sqlQuery);

        $insertRecipe->execute([
            'nom' => $_POST['nom'],
            'prenom' => $_POST['prenom'],
            'email' => $_POST['email'],
            'telephone'=> $_POST['telephone'],
        ]);

        
        ?>