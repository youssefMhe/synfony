<?PHP
include "../config.php";
class ProduitC{
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

	function modifierProduit($produit,$id_pdt){
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



	function recupererProduit($id_pdt){
		$sql="SELECT * from produit where id_pdt=$id_pdt";
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recupererMarque($idmar){
		$sql="SELECT nomMarque from marque where idMarque=$idmar";
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function recupererCategorieParId($idcat){
		$sql="SELECT nomCategorie from categorie where idCategorie=$idcat";
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function supprimerProduit($id_Produit){
		$sql="DELETE FROM produit where id_pdt= :idP";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idP',$id_Produit);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



	function ajouterProduit($produit){
		$sql="insert into produit (reference,qte,prix,description,attribuer,idCat,idMar,idCou,idSty,idTai,idFor,largeurBranche,hauteurBranche,
		largeurVerre,hauteurVerre,imageFront,imageBack,imageLeft,imageRight,date_expiration) values
		 (:reference,:qte,:prix,:description,:attribuer,:idCategorie,:idMarque,:idCouleur,:idStyle,:idTaille,:idForme,:largeurBranche,:hauteurBranche,:largeurVerre,:hauteurVerre,:imageFront,:imageBack,:imageLeft,:imageRight,:date_expiration)";
		$db = config::getConnexion();
		try{
			/*LA PREPARATION DU REQUETTE */
	        $req=$db->prepare($sql);
	        /*L ' AFFECTATION DES A DES ATTRIBUTS */
	        $reference=$produit->getReference();
	        $qte=$produit->getQte();
	        $prix=$produit->getPrix();
	        $description=$produit->getDescription();
	        $attribuer=$produit->getAttribuer();	        
	        $idCategorie=$produit->getIdCategorie();
	        $idMarque=$produit->getIdMarque();   
	        $idCouleur=$produit->getIdCouleur();
	        ////////////////////////////////////////////////

	        $idStyle=$produit->getIdStyle();
	        $idTaille=$produit->getIdTaille();	        
	        $idForme=$produit->getIdForme();
	        $largeurBranche=$produit->getLargeurBranche();
	        $hauteurBranche=$produit->getHauteurBranche();

	        $largeurVerre=$produit->getLargeurVerre();
	        $hauteurVerre=$produit->getHauteurVerre();
	        //////////////////////////////////////////
	        $imageFront=$produit->getImageFront();
	        $imageBack=$produit->getImageBack();

	        $imageLeft=$produit->getImageLeft();
	        $imageRight=$produit->getImageRight();


	        $date_expiration=$produit->getdate_expiration();
	        /////////////////////////////////////////////////

	        /*Le BINDVALUE*/
			$req->bindValue(':reference',$reference);
			$req->bindValue(':qte',$qte);
			$req->bindValue(':prix',$prix);
			$req->bindValue(':description',$description);
			$req->bindValue(':attribuer',$attribuer);
			$req->bindValue(':idCategorie',$idCategorie);
			$req->bindValue(':idMarque',$idMarque);
			$req->bindValue(':idCouleur',$idCouleur);
			//////////////////////////////////////
			$req->bindValue(':idStyle',$idStyle);
			$req->bindValue(':idTaille',$idTaille);
			$req->bindValue(':idForme',$idForme);
			$req->bindValue(':largeurBranche',$largeurBranche);
			$req->bindValue(':hauteurBranche',$hauteurBranche);

			$req->bindValue(':largeurVerre',$largeurVerre);
			$req->bindValue(':hauteurVerre',$hauteurVerre);

			$req->bindValue(':imageFront',$imageFront);
			$req->bindValue(':imageBack',$imageBack);

			$req->bindValue(':imageLeft',$imageLeft);
			$req->bindValue(':imageRight',$imageRight);
			$req->bindValue(':date_expiration',$date_expiration);

			//////////////////////////////////////
			/*L' EXECUTION DU REQUETTE */
	        $req->execute();	           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }		
	}
	
	function afficherProduits(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT id_pdt,reference,qte,prix,description,attribuer, nomCategorie as 'idCat',
				NomMarque as 'idMar',nomCouleur as 'idCou',note,date_expiration,imageFront
				From produit P,categorie Cat,couleur Cou,marque Mar 
				where P.idCat = Cat.idCategorie and P.idCou = Cou.idCouleur and P.idMar=Mar.idMarque
				order by id_pdt desc";
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function afficherCategorie(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="select nomCategorie,idCategorie from categorie order by idCategorie asc";
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherMarque(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="select nomMarque,idMarque from marque";
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherProduits_categorie($categorie){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT id_pdt,reference,qte,prix,description,attribuer, nomCategorie as 'idCat',
				NomMarque as 'idMar',nomCouleur as 'idCou',note,date_expiration,imageFront
				From produit P,categorie Cat,couleur Cou,marque Mar 
				where P.idCat = Cat.idCategorie and P.idCou = Cou.idCouleur and P.idMar=Mar.idMarque
				and Cat.nomCategorie = '$categorie' " ;
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherProduits_Marque($marque){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT id_pdt,reference,qte,prix,description,attribuer, nomCategorie as 'idCat',
				NomMarque as 'idMar',nomCouleur as 'idCou',note,date_expiration,imageFront
				From produit P,categorie Cat,couleur Cou,marque Mar 
				where P.idCat = Cat.idCategorie and P.idCou = Cou.idCouleur and P.idMar=Mar.idMarque
				and Mar.nomMarque = '$marque' " ;
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function GetNombreDeLigneMarque($idDeLaMarque){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT count(*) as 'compter'
				From produit 
				where idMar='$idDeLaMarque' " ;
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function GetNombreDeLigneCategorie($idDeLaCategorie){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT count(*) as 'compter'
				From produit 
				where idCat='$idDeLaCategorie' " ;
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherProduitSimilaire($idDeLaCategorie){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT *
				From produit 
				where idCat='$idDeLaCategorie' " ;
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function Recuperer_client($email,$mdp){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT *
				From inscription 
				where email='$email' and mdp='$mdp' " ;
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	/******************************************************************************/
	function ajouterCommentaire($idClient_C,$id_pdt_C,$commentaire){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="insert into commentaire (id_pdt_C,idClient_C,commentaire,Date_comm) values
		($id_pdt_C,$idClient_C,'$commentaire',sysdate())" ;
		$db = config::getConnexion();
		try{
			/*LA PREPARATION DU REQUETTE */
			$req=$db->prepare($sql);
			/*L ' AFFECTATION DES A DES ATTRIBUTS Mr*/
			/*$req->bindValue(':id_pdt_C',$id_pdt_C);
			$req->bindValue(':idClient_C',$idClient_C);
			$req->bindValue(':commentaire',$commentaire);*/
			$req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherCommentaire($idPorduit){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT C.commentaire , I.nom , I.prenom , C.Date_comm , C.idClient_C , C.id_comment
				from commentaire C , inscription I 
				where C.idClient_C=I.id and  C.id_pdt_C='$idPorduit' 
				";
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function ModifiersCommentaire($cmnt,$icmnt){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="update commentaire set commentaire=:cmnt where id_comment=:icmnt";		
		$db = config::getConnexion();
		try{
			/*LA PREPARATION DU REQUETTE */
			$req=$db->prepare($sql);
			/*L ' AFFECTATION DES A DES ATTRIBUTS */
			$req->bindValue(':cmnt',$cmnt);
			$req->bindValue(':icmnt',$icmnt);
			$req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function SupprimersCommentaire($icmnt){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="delete from commentaire where id_comment=:icmnt";
		
		$db = config::getConnexion();
		try{
			/*LA PREPARATION DU REQUETTE */
			$req=$db->prepare($sql);
			$req->bindValue(':icmnt',$icmnt);
			/*L ' AFFECTATION DES A DES ATTRIBUTS */
			$req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function Nombre_De_Ligne($idClient,$ref_prod){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="select count(*) as Nb from commentaire where id_pdt_C=$ref_prod and idClient_C=$idClient";
		
		$db = config::getConnexion();
		try{
			/*LA PREPARATION DU REQUETTE */

			/*L ' AFFECTATION DES A DES ATTRIBUTS */
			$liste=$db->query($sql);
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function Nombre_De_Ligne_jaime($idClient,$ref_prod){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="select count(*) as Nb from jaime where id_pdt_C=$ref_prod and idClient_C=$idClient";
		
		$db = config::getConnexion();
		try{
			/*LA PREPARATION DU REQUETTE */

			/*L ' AFFECTATION DES A DES ATTRIBUTS */
			$liste=$db->query($sql);
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function ajouterJaime($idClient_C,$id_pdt_C){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="insert into jaime (id_pdt_C,idClient_C) values ($id_pdt_C,$idClient_C)" ;
		$db = config::getConnexion();
		try{
			/*LA PREPARATION DU REQUETTE */
			$req=$db->prepare($sql);
			/*L ' AFFECTATION DES A DES ATTRIBUTS */
			/*$req->bindValue(':id_pdt_C',$id_pdt_C);
			$req->bindValue(':idClient_C',$idClient_C);*/
			$req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimer_jaime($idClient_C,$id_pdt_C){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="delete from jaime where idClient_C=$idClient_C and  id_pdt_C=$id_pdt_C" ;
		$db = config::getConnexion();
		try{
			/*LA PREPARATION DU REQUETTE */
			$req=$db->prepare($sql);
			/*L ' AFFECTATION DES A DES ATTRIBUTS */
			/*$req->bindValue(':id_pdt_C',$id_pdt_C);
			$req->bindValue(':idClient_C',$idClient_C);*/
			$req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function NbreLigneJaimeParProduit($ref_prod){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="select count(*) as Nb from jaime where id_pdt_C=$ref_prod";
		
		$db = config::getConnexion();
		try{
			/*LA PREPARATION DU REQUETTE */

			/*L ' AFFECTATION DES A DES ATTRIBUTS */
			$liste=$db->query($sql);
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherProduitRecommender(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="
			select id_produit,AVG(note) as note
			from noteproduit
			GROUP by id_produit
			order by AVG(note) desc
		";
		
		$db = config::getConnexion();
		try{
			/*LA PREPARATION DU REQUETTE */

			/*L ' AFFECTATION DES A DES ATTRIBUTS */
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
	}
	function modifierEmploye($employe,$cin){
		$sql="UPDATE employe SET cin=:cinn, nom=:nom,prenom=:prenom,nbHeures=:nbH,tarifHoraire=:tarifH WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);

        
		$cinn=$employe->getCin();
        $nom=$employe->getNom();
        $prenom=$employe->getPrenom();
        $nb=$employe->getNbHeures();
        $tarif=$employe->getTarifHoraire();
		$datas = array(':cinn'=>$cinn, ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':nbH'=>$nb,':tarifH'=>$tarif);
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':nbH',$nb);
		$req->bindValue(':tarifH',$tarif);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
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