
    <?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "", "colyseum");



    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }



    // Escape user inputs for security

    $prenom = mysqli_real_escape_string($link, $_REQUEST['prenom']);

    $nom = mysqli_real_escape_string($link, $_REQUEST['nom']);


    // attempt insert query execution

    $sql = "INSERT INTO clients (firstname, lastname) VALUES ('$prenom', '$nom')";

    if(mysqli_query($link, $sql)){

        echo "Records added successfully.";

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }



    // close connection

    mysqli_close($link);

    ?>
