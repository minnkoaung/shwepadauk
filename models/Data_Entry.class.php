<?php 
	class Data_Entry{
		private $db;

		public function __construct($db){
			$this->db = $db;
		}
        //to save job data to mysql database
		public function saveData($name, $file_type, $file_description, $file_url){
			$entrySql= "INSERT INTO job_data(name, file_type, file_description, file_url, created_date) VALUES(?, ?, ?, ?, now())";
			$entryStatement = $this->db->prepare($entrySql);
			$formData = array($name, $file_type, $file_description, $file_url);
			try{
				$entryStatement->execute($formData);
			}
			catch(Expection $e){
					$msg = "<p>You tried to run this sql: $entrySql<p> <p>Exception: $e</p>";
					trigger_error($msg);
			}
		}
        //to display job data on Front-End
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

        //to save Card data to mysql database
        public function saveCardData($item_code, $item_name, $year, $product_no, $product_of, $color, $type, $price_300, $price_300_500, $price_above_500, $card_image, $contact){
            $entrySql= "INSERT INTO data_keep(item_code, item_name, year, product_no, product_of, color, type, price_300, price_300_500, price_above_500, card_image, contact, created_date) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, now())";
            $entryStatement = $this->db->prepare($entrySql);
            $formData = array($item_code, $item_name, $year, $product_no, $product_of, $color, $type, $price_300, $price_300_500, $price_above_500, $card_image, $contact);
            try{
                $entryStatement->execute($formData);
            }
            catch(Expection $e){
                    $msg = "<p>You tried to run this sql: $entrySql<p> <p>Exception: $e</p>";
                    trigger_error($msg);
            }
        }
        // to display Card data on Front-end
        public function displayCardData(){
            $sql = "SELECT * From data_keep ORDER BY id DESC";
            $statement = $this->db->prepare($sql);
            try{
                $statement->execute();
            }catch(Exception $e){
                $exceptionMessage = "<p>You tried to run this sql: $sql</p><p>Exception: $e</p>";
                trigger_error($exceptionMessage);
            }
            return $statement;
        }

        public function detailCardData($id){
            $id = $_GET['id'];
            $sql = "SELECT * FROM data_keep WHERE id='$id'";
            $statement = $this->db->prepare($sql);
            try{
                $statement->execute();
            }catch(Exception $e){
                 $exceptionMessage = "<p>You tried to run this sql: $sql</p><p>Exception: $e</p>";
                trigger_error($exceptionMessage);   
            }
            return $statement;
        }

        public function deleteCardData($id){
            $sql = "DELETE FROM data_keep WHERE id=$id";
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

        /**
         * @param $id
         * @return mixed
         */
        public function editCardData($id){
            $sql = "SELECT * FROM data_keep WHERE id=$id";
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

          public function updateCardData($item_code, $item_name, $year, $product_no, $product_of, $color, $type, $price_300, $price_300_500, $price_above_500, $card_image, $contact){
            $id = $_POST['id'];
            $sql = "UPDATE data_keep SET item_code='$item_code', item_name='$item_name', year='$year', product_no='$product_no', product_of='$product_of', color='$color', type='$type', price_300='$price_300', price_300_500='$price_300_500', price_above_500='$price_above_500', card_image='$card_image', contact='$contact', modified_date=now() WHERE id=$id";
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
            $id = $_GET['id'];
            $sql = "SELECT * FROM job_data WHERE id='$id'";
            $statement = $this->db->prepare($sql);
            try{
                $statement->execute();
            }catch(Exception $e){
                 $exceptionMessage = "<p>You tried to run this sql: $sql</p><p>Exception: $e</p>";
                trigger_error($exceptionMessage);   
            }
            return $statement;
        }

         public function auth(){
            $sql = "SELECT * From auth";
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