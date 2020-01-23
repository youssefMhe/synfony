<?PHP
include "../config.php";
class MarqueC{
	/*function afficherEmploye ($employe){
		echo "Cin: ".$employe->getCin()."<br>";
		echo "Nom: ".$employe->getNom()."<br>";
		echo "Prénom: ".$employe->getPrenom()."<br>";
		echo "tarif heure: ".$employe->getTarifHoraire()."<br>";
		echo "nb heures: ".$employe->getNbHeures()."<br>";
	}
	function calculerSalaire($employe){
		echo $employe->getNbHeures() * $employe->getTarifHoraire();
	}	*/

	/*function modifierProduit($produit,$id_pdt){
		$sql="UPDATE produit SET reference=:reference, qte=:qte,prix=:prix,description=:description,attribuer=:attribuer,idCat=:idCat,
		idMar=:idMar,idCou=:idCou,largeurBranche=:largeurBranche,hauteurBranche=:hauteurBranche,largeurVerre=:largeurVerre,
		hauteurVerre=:hauteurVerre,typeSolution=:typeSolution,idTai=:idTai,idSty=:idSty,idFor=:idFor,imageFront=:imageFront,
		imageBack=:imageBack,imageLeft=:imageLeft,imageRight=:imageRight,date_expiration=:date_expiration WHERE id_pdt=:id_pdt";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		try{		
	        $req=$db->prepare($sql);

	        
			$reference=$produit->getReference();
	        $qte=$produit->getQte();
	        $prix=$produit->getPrix();
			$description=$produit->getDescription();
	        $attribuer=$produit->getAttribuer();
	        $idCat=$produit->getIdCategorie();
			$idMar=$produit->getIdMarque();
	        $idCou=$produit->getIdCouleur();
	        $largeurBranche=$produit->getLargeurBranche();
			$hauteurBranche=$produit->getHauteurBranche();
	        $largeurVerre=$produit->getLargeurVerre();
	        $hauteurVerre=$produit->getHauteurVerre();
			$typeSolution=$produit->getTypeSolution();
	        $idTai=$produit->getIdTaille();
	        $idSty=$produit->getIdStyle();
			$idFor=$produit->getIdForme();
	        $imageFront=$produit->getImageFront();
	        $imageBack=$produit->getImageBack();
			$imageLeft=$produit->getImageLeft();
	        $imageRight=$produit->getImageRight();
	        $date_expiration=$produit->getdate_expiration();
			$datas = array(':id_pdt'=>$id_pdt, ':reference'=>$reference, ':qte'=>$qte,':prix'=>$prix,':description'=>$description, ':attribuer'=>$attribuer,
						   ':idCat'=>$idCat,':idMar'=>$idMar, ':idCou'=>$idCou, ':largeurBranche'=>$largeurBranche,':hauteurBranche'=>$hauteurBranche,
						   ':largeurVerre'=>$largeurVerre,':hauteurVerre'=>$hauteurVerre, ':typeSolution'=>$typeSolution, ':idTai'=>$idTai,
						   ':idSty'=>$idSty,':idFor'=>$idFor, ':imageFront'=>$imageFront, ':imageBack'=>$imageBack,':imageLeft'=>$imageLeft, 
						   ':imageRight'=>$imageRight,':date_expiration'=>$date_expiration
					);
			$req->bindValue(':reference',$reference);
			$req->bindValue(':qte',$qte);
			$req->bindValue(':prix',$prix);
			$req->bindValue(':description',$description);
			$req->bindValue(':attribuer',$attribuer);
			$req->bindValue(':idCat',$idCat);
			$req->bindValue(':idMar',$idMar);
			$req->bindValue(':idCou',$idCou);
			$req->bindValue(':largeurBranche',$largeurBranche);
			$req->bindValue(':hauteurBranche',$hauteurBranche);
			$req->bindValue(':largeurVerre',$largeurVerre);
			$req->bindValue(':hauteurVerre',$hauteurVerre);
			$req->bindValue(':typeSolution',$typeSolution);
			$req->bindValue(':idTai',$idTai);
			$req->bindValue(':idSty',$idSty);
			$req->bindValue(':idFor',$idFor);
			$req->bindValue(':imageFront',$imageFront);
			$req->bindValue(':imageBack',$imageBack);
			$req->bindValue(':imageLeft',$imageLeft);
			$req->bindValue(':imageRight',$imageRight);
			$req->bindValue(':date_expiration',$date_expiration);
			$req->bindValue(':id_pdt',$id_pdt);

	        $s=$req->execute();
				
	           // header('Location: index.php');
        }
        catch (Exception $e){
			echo " Erreur ! ".$e->getMessage();
			echo " Les datas : " ;
			print_r($datas);
        }
		
	}
*/


	function recupererMarque($idMarque){
		$sql="SELECT * from marque where idMarque=$idMarque";
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function supprimerMarque($idMarque){
		$sql="DELETE FROM marque where idMarque= :idMarque";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idMarque',$idMarque);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



	function ajouterMarque($marque){
		$sql="insert into marque (NomMarque,email,tel,adresse,imageMarque) values (:NomMarque,:email,:tel,:adresse,:imageMarque)";
		$db = config::getConnexion();
		try{
			/*LA PREPARATION DU REQUETTE */
	        $req=$db->prepare($sql);
	        /*L ' AFFECTATION DES A DES ATTRIBUTS */
	        $NomMarque=$marque->getNomMarque();
	        $email=$marque->getEmail();
	        $tel=$marque->getTel();
	        $adresse=$marque->getAdresse();
	        $imageMarque=$marque->getImageMarque();
	        
	        /////////////////////////////////////////////////

	        /*Le BINDVALUE*/
			$req->bindValue(':NomMarque',$NomMarque);
			$req->bindValue(':email',$email);
			$req->bindValue(':tel',$tel);
			$req->bindValue(':adresse',$adresse);
			$req->bindValue(':imageMarque',$imageMarque);
			//////////////////////////////////////
			/*L' EXECUTION DU REQUETTE */
	        $req->execute();	           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }		
	}
	
	function afficherMarques(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From marque order by idMarque desc";
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


/*


	function supprimerEmploye($cin){
		$sql="DELETE FROM employe where cin= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/
	function modifierMarque($marque1,$idMarque){
		$sql="UPDATE marque SET nomMarque=:nomMarque, email=:email,tel=:tel,adresse=:adresse,imageMarque=:imageMarque WHERE idMarque=:idMarque";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	try{		
        $req=$db->prepare($sql);

        
		$nomMarque=$marque1->getNomMarque();
        $email=$marque1->getEmail();
        $tel=$marque1->getTel();
        $adresse=$marque1->getAdresse();
        $imageMarque=$marque1->getImageMarque();



		$datas = array(':nomMarque'=>$nomMarque, ':email'=>$email, ':tel'=>$tel,':adresse'=>$adresse,':imageMarque'=>$imageMarque,':idMarque'=>$idMarque);
		

		$req->bindValue(':nomMarque',$nomMarque);
		$req->bindValue(':email',$email);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':imageMarque',$imageMarque);
		$req->bindValue(':idMarque',$idMarque);
		
		
            $s=$req->execute();
            echo "<br> <br> avec suceeess"  ;
			
           // header('Location: index.php');
        }
        catch (Exception $e){
			echo " Erreur ! ".$e->getMessage();
			echo " Les datas : " ;
			print_r($datas);
        }
		
	}


	/*
	function recupererEmploye($cin){
		$sql="SELECT * from employe where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeEmployes($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}*/
}
?>