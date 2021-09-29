<?php

include('connection.php');

//insert form1
    if(isset($_POST['avanti'])){
        var_dump( $_POST);
        $location = $_POST['location'];
        $tampon_nr_Antigenico = $_POST['tampon_nr_Antigenico'];
        $tampon_nr_PCR = $_POST['tampon_nr_PCR'];
        $name = $_POST['name'];
        $form1_cogname = $_POST['form1_cogname'];
        $form1_email = $_POST['form1_email'];
        $form1_cellulare = $_POST['form1_cellulare'];
        $form1_nazionalita = $_POST['form1_nazionalita'];
        $form1_code = $_POST['form1_code'];
        $form1_data = $_POST['form1_data'];
        $form1_gender = $_POST['form1_gender'];
        $form1_comune = $_POST['form1_comune'];
        $form1_cap = $_POST['form1_cap'];
        $form1_indirizzo = $_POST['form1_indirizzo'];
        $discriptionCheck = $_POST['form1_check'];

        $insertUsers_query = "INSERT INTO users (tampon_PCR, tampon_Antigenico, `location`, `name`, cogname, email, cellulare, nazionalita, codeFiscale, `data`, gender, comune, cap, indirizzo, discriptionCheck) VALUE ('$tampon_nr_PCR', '$tampon_nr_Antigenico', '$location', '$name', '$form1_cogname', '$form1_email', '$form1_cellulare', '$form1_nazionalita', '$form1_code', '$form1_data', '$form1_gender', '$form1_comune', '$form1_cap', '$form1_indirizzo', '$discriptionCheck' ) ";
        $resUsers_insert = mysqli_query($conn, $insertUsers_query) or die (mysqli_error($conn));
       
    }    


    if (isset($_POST["time"]) && isset($_POST['date'])) {
      
        $date = $_POST['date'];
        $time = $_POST['time'];

        $sql = "INSERT INTO date_time (`Date`, `Time`) VALUE ('".$date."', '".$time."')";
        $result = mysqli_query($conn, $sql) or die (mysqli_error($conn));

    }


    //get id_user
    $getID_quey = "SELECT id_user FROM users WHERE email = '$form1_email'";
    $getID_result = mysqli_query($conn, $getID_quey) or die (mysqli_error($conn));

    if (mysqli_num_rows($getID_result) > 0) {
		while($row = mysqli_fetch_assoc($getID_result)) {
			$id_user = $row['id_user'];
           // echo $id_user; 
		}
	}else {
		$conn->close();
	}

?>

