<?php
    Abstract class Model{
		//private $db_host = "localhost";
		private $db_host = "localhost:8081";
		//private $db_host = "localhost:80";
		//private $db_host = "172.18.0.5:80"; // with http://localhost:2020/phpinfo(), environment, $_SERVER['SERVER_ADDR'], $_SERVER['SERVER_PORT']
		//private $db_host = "172.18.0.1:39228";
        private $db_name = "COGIP";
        private $db_user = "root";
		//private $db_pass =  "";
		private $db_pass =  "root";

        public $id;
        public $table;
        public $content;
        
        protected $bdd;

        public function dbConnect(){
             $this->bdd = NULL;
                try{
					//$this->bdd = new PDO('mysql:host='.$this->db_host.':3307;dbname='.$this->db_name,$this->db_user,$this->db_pass);
			echo '<br>Connection string : mysql:host='.$this->db_host.';dbname='.$this->db_name.','.$this->db_user.','.$this->db_pass;
					echo '<br>create PDO';
					//$this->bdd = new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name,$this->db_user,$this->db_pass);
					$this->bdd = new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name,$this->db_user,$this->db_pass, 
						array(PDO::ATTR_PERSISTENT => true ));
					//PHPAdmin URL  = http://localhost:8081/db_structure.php?server=1&db=COGIP
					echo '<br>setAttribute';
					$this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					echo '<br>Exec';
                    $this->bdd->exec('set names utf8');
                        return $this->bdd;
                }catch(PDOException $e){
                    echo '<br>There is a connection Error : ' .$e->getMessage();
                }
        }

        public function securisation($donnees){
            $donnees = htmlspecialchars($donnees); 
            $donnees = trim($donnees); 
            $donnees = stripcslashes($donnees); 
            $donnees = strip_tags($donnees); 
            return $donnees; 
		}
		
        public function SelectAll(){
            $sql = "SELECT * FROM ".$this->table;
            $query = $this->bdd->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);    
        }
        
    
    }
?>