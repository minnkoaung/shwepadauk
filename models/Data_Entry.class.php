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
            $sql = "SELECT * From job_data ORDER BY id DESC";
            $statement = $this->db->prepare($sql);
            try{
                $statement->execute();
            }catch(Exception $e){
                $exceptionMessage = "<p>You tried to run this sql: $sql</p><p>Exception: $e</p>";
                trigger_error($exceptionMessage);
            }
            return $statement;
        }

        public function deleteJobData($id){
        	$sql = "DELETE FROM job_data WHERE id=$id";
        	$statement = $this->db->prepare($sql);
        	try{
        		$statement->execute();
        	}catch(Exception $e){
        		 $exceptionMessage = "<p>You tried to run this sql: $sql</p><p>Exception: $e</p>";
                trigger_error($exceptionMessage);	
        	}
        	return $statement;
        }
		
		 public function editJobData($id){
            $sql = "SELECT * FROM job_data WHERE id=$id";
            $statement = $this->db->prepare($sql);
            try{
                $statement->execute();
            }catch(Exception $e){
                $exceptionMessage = "<p>You tried to run this sql: $sql</p><p>Exception: $e</p>";
                trigger_error($exceptionMessage);
            }
            return $statement;
        }

          public function updateJobData($name, $file_type, $file_description, $file_url){
            $id = $_POST['id'];
            $sql = "UPDATE job_data SET name='$name', file_type='$file_type', file_url='$file_url', file_description='$file_description', modified_date=now() WHERE id=$id";
            $statement = $this->db->prepare($sql);
            try{
                $statement->execute();
            }catch(Exception $e){
                $exceptionMessage = "<p>You tried to run this sql: $sql</p><p>Exception: $e</p>";
                trigger_error($exceptionMessage);
            }
            return $statement;
        }

         public function detailJobData($id){
            $sql = "SELECT * FROM job_data WHERE id=$id";
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