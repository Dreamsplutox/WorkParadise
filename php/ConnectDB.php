<?php
	class ConnectDB{
		private $hostName;
		private $dbName;
		private $charset;
		private $userName;
		private $pwd;

		public function __construct($hostNameE, $dbNameE, $charsetE, $userNameE, $pwdE){
			if(is_string($hostNameE))
				this->hostName = $hostNameE;
			if(is_string($dbNameE))
				this->dbName = $dbNameE;
			if(is_string($charsetE))
				this->charset = $charsetE;
			if(is_string($userNameE))
				this->userName = $userNameE;
			if(is_string($pwdE))
				this->pwd = $pwdE;
			else{
				print("Erreur Une des données n'est pas une chaine de caractère ! ");
			}
		}

		// Getter
		public function getHostName(){
			return this->hostName;
		}

		public function getDBName(){
			return this->dbName;
		}

		public function getCharset(){
			return this->charset;
		}

		public function getUserName(){
			return this->userName;
		}

		public function getPwd(){
			return this->pwd;
		}

		// Setter
		public function setHostName($hostNameE){
			this->hostName = $hostNameE;
		}

		public function setDBName($dbNameE){
			this->dbName = $dbNameE;
		}

		public function setCharset($charsetE){
			this->charset = $charsetE;
		}

		public function setUserName($userNameE){
			this->userName = $userNameE;
		}

		public function setPwd($pwdE){
			this->pwd = $pwdE;
		}

		// Les méthodes
		public function connectToDB(){
			try{
				$db = new PDO('mysql:host='.this->hostName.';dbname='.this->dbname.';charset='.this->charset.'', this->userName, this->pwd);

			}catch(Exception $e){
				die('Erreur : ' . e->getMessage());
			
			}
		}

		// Retour affichage

		public function to_string(){
			return "Le host : ".this->hostName." le nom de la base de données : ".this->dbName." le type d'encodage : ".this->charset." le nom de l'utilisateur : ".this->userName." le mot de passe : ".this->pwd;
		}


	}
?>