<?php
include('../config.php');
$postdata = file_get_contents("php://input"); 
    if (isset($postdata)) {
        $request = json_decode($postdata);
		$id_contratClient=$request->id_contratClient;
		$duree=$request->duree;
		$renouvele=$request->renouvele;
		$date_debut=$request->date_debut;
		$date_fin=$request->date_fin;
		$date_de_preavis=$request->date_de_preavis;
		$date_de_facturation=$request->date_de_facturation;

		echo($ref_contrat);
		$sql =  " UPDATE `contrat_client` SET `id_contratClient`='$id_contratClient',`duree`='$duree',`date_debut`='$date_debut',`date_fin`='$date_fin',
		`renouvele`='$renouvele',`date_de_preavis`='$date_de_preavis',`date_de_facturation`='$date_de_facturation'WHERE `id_contratClient`='$id_contratClient'" ; 
        $result = mysqli_query($conn, $sql);
		if ($result===true) {	
	         echo json_encode(array( 'RESPONSE'=> 'Contrat Client modifiee' )); 




		}else { 
			echo json_encode(array( 'RESPONSE'=>'Erreur modification' )); 
		}
    }
    else {
		echo json_encode(array( 'RESPONSE'=>'Erreur reception parametres' ));  
    }
 
?> 
   