<?php
	class User{
		private $firstname;
		private $lastname;
		private $email;
		private $pwd

		public function __construct(array $data){
			hydrate($data);
		}

		public function __destruct(){
			$this->firstname;
			$this->lastname;
			$this->email;
			$this->pwd;
		}

		// Getter
		public function getFirstname(){
			return $this->firstname;
		}

		public function getLastname(){
			return $this->lastname;
		}

		public function getEmail(){
			return $this->email;
		}

		public function getPwd(){
			return $this->pwd;
		}

		public function __get($name){
			echo 'Impossible d\'accèder à : '.$name.' sois il n\'existe pas, sois il est innacessible !';
		}

		// Setter
		public function setFirstname($_firstname){
			$this->firstname = $_firstname;
		}

		public function setLastname($_lastname){
			$this->lastname = $_lastname;
		}

		public function setEmail($_email){
			$this->email = $_email;
		}

		public function setPwd($_pwd){
			$this->pwd = $_pwd;
		}

		public function __set($name, $value){
			echo 'Erreur vous avez tentez d\'entrer une donnée dans une proprièté qui n\'existe pas ! ';
			echo 'L\'attribut invalide est : '.$name.' et la valeur est : '.$value;			
		}

		public function hydrate(array $data{
			foreach ($data as $key => $value) {
				$method = 'set'.ucfirst($key);
			}

			if(method_exists($this, $method)){
				$this->$method($value);
			}
		}

	}

?>