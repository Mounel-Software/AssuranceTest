<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataRepository
 *
 * @author ousmane Daff
 */
namespace app\Modele;
use app\Modele\ConnexionDb;
use \Datetime;
class DataRepository{
    
    private $_db;
    public function  __Construct()
    {
     $this->_db = new ConnexionDb("asso");  
      
    }
          
    
	
	//Insert data client: soumission assurance	
	public  function   SaveDataClient($data)
	{
	  $req = $this->_db->InsertData('INSERT INTO  tclient(Prenom ,Nom,Sexe ,DateNaissance,Province,Ville,Telephone,Codepostal,Adresse,Email,Password,Tpermis,NumPermis,Nexperience,Prevoque,Pcontravention,kilometrage,Marque,Model )
	  VALUES (:Prenom ,:Nom,:Sexe ,:DateNaissance,:Province,:Ville,:Telephone,:Codepostal,:Adresse,:Email ,:Password,:Tpermis,:NumPermis,:Nexperience,:Prevoque,:Pcontravention,:kilometrage,:Marque,:Model)');  
	  
        $req->execute($data);
		return $this->_db->lastId('app\Tables\Tclient');	   
	}
	
	
	// Get AllDataClient
	public function GetDataClientByID($IDC)
	{
		$data = $this->_db->Preparer("SELECT * FROM tclient WHERE IDC = ?",[$IDC],'app\Tables\tclient');
        return $data;
	}
	
	//CaLcul montant de soumission selon l'expérience du client
	public function GetMontantFinal($nexp)
	{
		$montant=0;
		if($nexp>0 and $nexp<=5)
		{
			$montant=140;
		}
		elseif($nexp>5 and $nexp<=10)
		{
		 $montant=80;	
		}
		else
		{
		  $montant=40;
		}
		
		return $montant;
		
	}
	
	
	
	
	
    // fonction permettant de mettre à jour les données
	public  function UpdateData($sql,$data)
	{
		$req= $this->_db->InsertData($sql); 
		return $req->execute($data); 
	}
	
	public function UpdatGenerique($datas,$table,$idchamp,$IDC)
	{
		
		foreach($datas as $champ=>$value)
		{
			if(!empty($value)) 
			{
				$sql="UPDATE  $table  SET  $champ=:$champ  WHERE  $idchamp=:$idchamp";
				//fonction update
			return $r=$this->UpdateData($sql,array($champ=>$value,$idchamp=>$IDC));
						
			}
		}  
	}
	
	
}


