<?php

    include("db.php");

    if (isset($_POST)){

        $nombre             =   $_POST['name_txt'];
        $primer_apellido    =   $_POST['last_name_1'];
        $segundo_apellido   =   $_POST['last_name_2'];
        $sexo               =   $_POST['gender_id'];
        $id_numero          =   $_POST['identification_id'];
        $fecha_nacimiento   =   date("Y-m-d", strtotime($_POST['dob_dtm']));
        $nacionalidad       =   $_POST['nationality_id'];
        $raza               =   $_POST['race_id'];
        $lengua_materna     =   $_POST['language_id'];
        $estado_marital     =   $_POST['marital_id'];
        $telefono           =   $_POST['phone_nbr'];
        $celular            =   $_POST['mobile_nbr'];
        $email              =   $_POST['email'];
        $empleo             =   $_POST['employee_txt'];

        $query = "INSERT INTO contact_form(nombre, primer_apellido, segundo_apellido, sexo, id_numero, fecha_nacimiento, nacionalidad, raza, lengua_materna, estado_marital, telefono, celular, email, empleo) VALUES ('$nombre', '$primer_apellido', '$segundo_apellido', '$sexo', '$id_numero', '$fecha_nacimiento', '$nacionalidad', '$raza', '$lengua_materna', '$estado_marital', '$telefono', '$celular', '$email', '$empleo')";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query Failed");
        }

        $response = [ "response" => "contact added"]
        echo json_encode($response);
        
    }

?>