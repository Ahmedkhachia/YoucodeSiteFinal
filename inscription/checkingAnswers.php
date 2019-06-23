<?php 
    session_start();
?>
<?php
			$connection = mysqli_connect('localhost','root','','youcode');
			if(!$connection){
				die("Database connection failed");
			}
?>
<?php
    $query = "SELECT * FROM answers";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die('Query FAILED' . mysqli_error('error'));
    }
        $i=1;
        $note = 0;
        while($fetched = mysqli_fetch_row($result)){
            $a = $_POST["question".$i];
            if($a == $fetched[1]){
                $note++;
            }
            $i++;
        }
    $youcoderCIN = $_SESSION['CIN'];
    $query = "UPDATE  youcoders SET note = '$note' WHERE CIN = '$youcoderCIN' ;";
    mysqli_query($connection, $query);
    echo ($youcoderCIN);

?>