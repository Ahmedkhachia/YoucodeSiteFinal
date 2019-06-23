<?php
			$connection = mysqli_connect('localhost','root','','youcode');
			if(!$connection){
				die("Database connection failed");
			}
?>
<?php 
	session_start();
    $_SESSION['CIN'] = $_POST['cin'];
?>

<?php   
        header("Content-type:application/json;charset=utf-8");
        $error = false;
        $lastname = $_POST['lastname'];
        $lastname = mysqli_real_escape_string($connection, $lastname);
        $firstname = $_POST['firstname'];
        $firstname = mysqli_real_escape_string($connection, $firstname);
        $mail = $_POST['mail'];
        $mail = mysqli_real_escape_string($connection, $mail);
        $cin = $_POST['cin'];
        $cin = mysqli_real_escape_string($connection, $cin);
        $phone = $_POST['phone']; 
        $phone = mysqli_real_escape_string($connection, $phone);
        $birth = $_POST['birth'];
        $birth = mysqli_real_escape_string($connection, $birth);
        $city = $_POST['city'];
        $city = mysqli_real_escape_string($connection, $city);
        // $homme = $_POST['homme'];
        // $homme = mysqli_real_escape_string($connection, $homme);
        // $femme = $_POST['femme'];
        // $femme = mysqli_real_escape_string($connection, $femme);
        // if ($homme == 'homme'){
        //     $sexe = $homme;
        // }
        // elseif($femme == 'femme'){
        //     $sexe = $femme;
        // }
        $query = "INSERT INTO youcoders(LastName,FirstName,Mail,CIN,Password,Birth,city) VALUES('$lastname','$firstname','$mail','$cin','$phone','$birth','$city')";
        $querySent = mysqli_query($connection, $query);
        if(!$querySent){
            $error = true;
        }
        if($error==false){
            $data['response'] = 'success';
            $data['content'] = 'thank you!!';
        }
        else{
            $data['response'] = 'error';
            $data['content'] = 'CIN deja Utilisé';
            // $date['script'] = 'none';
        }
        echo json_encode($data);

        
    // }
?>