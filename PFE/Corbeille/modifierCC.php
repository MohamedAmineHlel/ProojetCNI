<?php
include('../config.php');
$postdata = file_get_contents("php://input"); 
    if (isset($postdata)) {
        $request = json_decode($postdata);
	
		$id_contratClient = $_GET['id_contratClient'] ; 
		$sql =  " UPDATE `contrat_client` SET `supprimer`='0' WHERE `id_contratClient`='$id_contratClient' " ; 
        $result = mysqli_query($conn, $sql);
		if ($result===true) {	
	         echo json_encode(array( 'RESPONSE'=> 'modifiee' )); 




		}else { 
			echo json_encode(array( 'RESPONSE'=>'Erreur modification' )); 
		}
    }
    else {
		echo json_encode(array( 'RESPONSE'=>'Erreur reception parametres' ));  
    }
 
?> 
   