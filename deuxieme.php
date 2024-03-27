<h1>Il y a tout nos contact</h1>




<div class="card">
    
    <div class="card-body">
        <p class="card-text">nom : <?php echo $_POST['nom']; ?></p>
        <p class="card-text">prenom : <?php echo $_POST['prenom']; ?></p>
        <p class="card-text">age : <?php echo $_POST['age']; ?></p>
        <p class="card-text">email : <?php echo $_POST['Email']; ?></p>
        


 
        <?php
        try{
            $mysqlClient = new PDO("mysql:host=localhost;dbname=redirection;charest=utf8","root","");
        }
        catch (Exeption $e)
        {
            die("Erreur : ".$e->getMessage());
        }
        $sqlQuery = "INSERT INTO maquette_html(nom,prenom,email) values (:nom, :prenom, :email)";

        $insertRecipe = $mysqlClient->prepare($sqlQuery);

        $insertRecipe->execute([
            'nom' => $_POST['nom'],
            'prenom' => $_POST['prenom'],
            'email' => $_POST['Email'],
        ]);

        
        ?>