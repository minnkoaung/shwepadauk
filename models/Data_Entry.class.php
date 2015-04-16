<?php 
	class Data_Entry{
		private $db;

		public function __construct($db){
			$this->db = $db;
		}

		public function saveData($name, $file_type, $file_description, $file_url){
			$entrySql= "INSERT INTO job_data(name, file_type, file_description, file_url, created_date) VALUES(?, ?, ?, ?, now())";
			$entryStatement = $this->db->prepare($entrySql);
			$formData = array($name, $file_type, $file_description, $file_url);
			try{
				$entryStatement->execute($formData);
			}
			catch(Expection $e){
					$msg = "<p>You tried to run this sql: $entrySQL<p> <p>Exception: $e</p>";
					trigger_error($msg);
			}
		}

        public function displayJobData(){
            $sql = "SELECT * From job_data";
            $statement = $this->db->prepare($sql);
            try{
                $statement->execute();
            }catch(Exception $e){
                $exceptionMessage = "<p>You tried to run this sql: $sql</p><p>Exception: $e</p>";
                trigger_error($exceptionMessage);
            }
            return $statement;
        }
	}


 ?>