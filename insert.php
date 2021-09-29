<?php

    include('connection.php');

//insert form2
    if(isset($_POST['VERIFICA'])){
        $name = $_POST['name'];
        $cogname = $_POST['cogname'];
        $codiceFiscale = $_POST['codiceFiscale'];
        $email = $_POST['email'];
        $indirizzo = $_POST['indirizzo'];
        $citta = $_POST['citta'];
        $cap = $_POST['cap'];
        $provinzia = $_POST['provinzia'];
        $nazione = $_POST['nazione'];
    }

    $insertReserve_query = "INSERT INTO reserve (`name`, cogname, codiceFiscale, email, indirizzo, citta, cap, provinzia, nazione) 
    VALUE ('$name', '$cogname', '$codiceFiscale', '$email', '$indirizzo', '$citta', '$cap', '$provinzia', '$nazione')";

    $resReserve_insert = mysqli_query($conn, $insertReserve_query) or die (mysqli_error($conn));



?>