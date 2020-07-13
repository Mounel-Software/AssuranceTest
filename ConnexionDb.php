<?php


/**
* Description of ConnexionDb
*
* @author ousmane Daff
*/
namespace app\Modele;
use \PDO;

class ConnexionDb {
  //put your code here

  private $db_name;
  private $db_user;
  private $db_pass;
  private $db_host;
  private $pdo;

	// constructeur
	public  function __construct($db_name,$db_user="root",$db_pass='',$db_host='localhost') {

		$this->db_name=$db_name;
		$this->db_user=$db_user;
		$this->db_pass=$db_pass;
		$this->db_host=$db_host;
	}

	//  recuperation de la connexion
	private function GetPDO(){

		if($this->pdo===null)
		{
		  $pdo = new PDO("mysql:dbname=$this->db_name;host=$this->db_host",$this->db_user,$this->db_pass);
		  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $pdo->exec('SET NAMES utf8');
		  $this->pdo =$pdo;
		}
		return $this->pdo;
	}

	//  creation de query de donnée
	public   function Query($statement,$class_name){
		$req = $this->GetPDO()->query($statement);
		$data = $req->fetchAll(PDO::FETCH_CLASS,$class_name);
		return $data;
	}

	//  get last id
	public function lastId($class_name){
		$sql="SELECT LAST_INSERT_ID()";
		$res = $this->GetPDO()->prepare($sql);
		$res->execute();
		$last_id = $res->fetchColumn();
		return $last_id;
	}

    // Recuperer  fetch ou fetchAll Data
	public function Preparer($statement,$attributes,$class_name,$one=FALSE){
		$req  = $this->GetPDO()->prepare($statement);
		$req->execute($attributes);
		$data=$req->setFetchMode(PDO::FETCH_CLASS,$class_name);

		if($one)
		{
		  $data= $req->fetch();
		}
		else
		{
		  $data = $req->fetchAll();
		}
		return $data;
	}
    //Sauvegarde data  ds la BD
	public  function InsertData($statement){
		return $req  = $this->GetPDO()->prepare($statement);
	}

	//Supprimer données
	public  function DeleteData($sql){
		$deleted = $this->GetPDO()->exec($sql);
		//var_dump($deleted);
		return $deleted;
	}

	//Modifier données
	public  function UpdateData($sql){
		$modified = $this->GetPDO()->exec($sql);
		//var_dump($deleted);
		return $modified;
	}
	
	
	// this function is  generique, param:sql, $data
	public function GeneriquFunction($sql,$data)
	{
	   $req= $this->InsertData($sql); 
		return $req->execute($data); 
	
	}

}
