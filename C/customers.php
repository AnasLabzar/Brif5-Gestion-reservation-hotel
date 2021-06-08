<?php

include '../M/connect.php';

class Customers extends Db
{

	// Insert customer data into customer table
	public function insertData()
	{

		if (isset($_POST["submit"])) {
			$d_d = $_POST['date_d'];
			$d_f = $_POST['date_f'];
			$query = "INSERT INTO hotel.stay (date_d,date_f) VALUES ('$d_d','$d_f')";
			if($this->db->query($query)){
				$query = "SELECT MAX(id) as id FROM hotel.stay";
				$stmt = $this->db->query($query);
				$id = $stmt->fetch(PDO::FETCH_ASSOC);
				$_SESSION['curr_reservation'] = $id['id'];
			}
			header("Location:reser1.php");
		}
	}
	// 	Update customer data into customer table
	// Update type chamber simple/double
	public function updateRecord()
	{
		$select=$_POST['selectCh'];
		$select1=$_POST['selectvue'];
		$select2=$_POST['selectlit'];
		$selectt=$_POST['selectpen'];
		$selecttt=$_POST['selectdej'];

	  if (!empty($_SESSION['curr_reservation']) && isset($_POST["submitt"])) {
		  if($select == "Simple"){
		    $query = "UPDATE hotel.stay SET ty_chamber = '$select' WHERE id =". $_SESSION['curr_reservation'];
		    $sql = $this->db->query($query);
		    if ($sql==true) {
			    header("Location:reser2.php");
		    }else{
			    echo "Registration updated failed try again!";
		    }
		   }
		
		else if($select == "Double"){
			$query = "UPDATE hotel.stay SET ty_chamber = '$select' WHERE id =". $_SESSION['curr_reservation'];
		$sql = $this->db->query($query);
		if ($sql==true) {
			header("Location:reser2.php");
		}else{
			echo "Registration updated failed try again!";

		}
	}
    
	//Update type vue

	if($select1 == "inter"){
		$query = "UPDATE hotel.stay SET ty_vue = '$select1' WHERE id =". $_SESSION['curr_reservation'];
	    $sql = $this->db->query($query);
	       if ($sql==true) {
		    header("Location:reser2.php");
	       }else{
		     echo "Registration updated failed try again!";

	       }
    }
    else if ($select1 == "exter"){
		$query = "UPDATE hotel.stay SET ty_vue = '$select1' WHERE id =". $_SESSION['curr_reservation'];
	    $sql = $this->db->query($query);
	    if ($sql==true) {
		   header("Location:reser2.php");
	    }else{
		echo "Registration updated failed try again!";

	    }
	}
        
	    }

		// Update lit

		if($select2 == "lit1"){
			$query = "UPDATE hotel.stay SET ty_lit = '$select2' WHERE id =". $_SESSION['curr_reservation'];
			$sql = $this->db->query($query);
			   if ($sql==true) {
				header("Location:reser2.php");
			   }else{
				 echo "Registration updated failed try again!";
	
			   }
		}
		else if ($select2 == "lit2"){
			$query = "UPDATE hotel.stay SET ty_lit = '$select2' WHERE id =". $_SESSION['curr_reservation'];
			$sql = $this->db->query($query);
			if ($sql==true) {
			   header("Location:reser2.php");
			}else{
			echo "Registration updated failed try again!";
	
			}
		}
	

	

	// update pension

	if($selectt == "sans"){
		$query = "UPDATE hotel.stay SET ty_pension = '$selectt' WHERE id =". $_SESSION['curr_reservation'];
	    $sql = $this->db->query($query);
	    if ($sql==true) {
		   header("Location:reser3.php");
	    }else{
		echo "Registration updated failed try again!";

	    }

	}else if($selectt == "demi"){
		$query = "UPDATE hotel.stay SET ty_pension = '$selectt' WHERE id =". $_SESSION['curr_reservation'];
	    $sql = $this->db->query($query);
	    if ($sql==true) {
		   header("Location:reser3.php");
	    }else{
		echo "Registration updated failed try again!";

	    }

	}else if($selectt == "complete"){
		$query = "UPDATE hotel.stay SET ty_pension = '$selectt' WHERE id =". $_SESSION['curr_reservation'];
	    $sql = $this->db->query($query);
	    if ($sql==true) {
		   header("Location:reser3.php");
	    }else{
		echo "Registration updated failed try again!";

	    }
	}

	//Update dej
	if($selecttt == "dej"){
		$query = "UPDATE hotel.stay SET ty_demi = '$selecttt' WHERE id =". $_SESSION['curr_reservation'];
	    $sql = $this->db->query($query);
	    if ($sql==true) {
		   header("Location:reser3.html");
	    }else{
		echo "Registration updated failed try again!";

	    }
	}else if($selecttt = "din"){
		$query = "UPDATE hotel.stay SET ty_demi = '$selecttt' WHERE id =". $_SESSION['curr_reservation'];
	    $sql = $this->db->query($query);
	    if ($sql==true) {
		   header("Location:reser3.html");
	    }else{
		echo "Registration updated failed try again!";

	    }

	}

	}
	// ************************* sign up *************************
	// inserer first step (signup)
	public function insertDataUp(){
		if (isset($_POST["submit_up"])) {
			$name=htmlspecialchars(strtolower(trim($_POST['name'])));
			$email=htmlspecialchars(strtolower(trim($_POST['email'])));
            $password=htmlspecialchars(trim($_POST['password']));

			// $phone = $_POST['phone'];
			// $date_ann = $_POST['date_ann'];
			// $country = $_POST['country'];
			// $gender = $_POST['gender'];
			$query = "INSERT INTO hotel.customers (name, email, password)VALUES('$name','$email','$password')";
			
			if($this->db->query($query)){
				$query = "SELECT MAX(id) as id FROM hotel.customers";
				$stmt = $this->db->query($query);
				$id = $stmt->fetch(PDO::FETCH_ASSOC);
				$_SESSION['curr_signup'] = $id['id'];
			}
			header("Location:_siUP1.php");
		}else {
			header("#");
		}

		
	}


    // Update next step (signUp)
	public function updateRecordUp()
	{
	  

	  if (!empty($_SESSION['curr_signup']) && isset($_POST["submit_up1"])) {

		$phone=$_POST['phone'];
		$date_ann=$_POST['date_ann'];
		$country=$_POST['country'];
		$gender=$_POST['gender'];

		    

		    $query = "UPDATE hotel.customers SET phone = '$phone', date_ann = '$date_ann' , country = '$country' , gender = '$gender' WHERE id =". $_SESSION['curr_signup'];
		    $sql = $this->db->query($query);
		    if ($sql==true) {
			    header("Location: _login.html");
		    }else{
			    header("Location: index.html");
		    }

	}
    }   
}





	// public function updateRecord1()
	// {
	// 	$select=$_POST['selectvue'];
	// if (!empty($_SESSION['curr_reservation']) && isset($_POST["submittt"])) {
	// 	if($select == "Simple"){
	// 	$query = "UPDATE hotel.stay SET ty_chamber = '$select' WHERE id =". $_SESSION['curr_reservation'];
	// 	$sql = $this->db->query($query);
	// 	if ($sql==true) {
	// 		header("Location:index.php?msg2=update");
	// 	}else{
	// 		echo "Registration updated failed try again!";
	// 	}
	// 	}
		
	// 	else if($select == "Double"){
	// 		$query = "UPDATE hotel.stay SET ty_chamber = '$select' WHERE id =". $_SESSION['curr_reservation'];
	// 	$sql = $this->db->query($query);
	// 	if ($sql==true) {
	// 		header("Location:reser2.html");
	// 	}else{
	// 		echo "Registration updated failed try again!";

	// 	}
	// }
	// }

	// }

	// public function updatetData()
	// {

	// 	if (isset($_POST["submit"])) {
	// 		$d_d = $_POST['date_d'];
	// 		$d_f = $_POST['date_f'];
	// 		$query = "UPDATE INTO hotel.stay (date_d,date_f) VALUES ('$d_d','$d_f')";
	// 		$sql = $this->db->query($query);
	// 	}
	// }

	// 	Fetch customer records for show listing
	// 	public function displayData()
	// 	{
	// 	    $query = "SELECT * FROM customers";
	// 	    $result = $this->con->query($query);
	// 	if ($result->num_rows > 0) {
	// 	    $data = array();
	// 	    while ($row = $result->fetch_assoc()) {
	// 	           $data[] = $row;
	// 	    }
	// 		 return $data;
	// 	    }else{
	// 		 echo "No found records";
	// 	    }
	// 	}

		// Fetch single data for edit from customer table
		// public function displyaRecordById($id)
		// {
		//     $query = "SELECT * FROM customers WHERE id = '$id'";
		//     $result = $this->con->query($query);
		// if ($result->num_rows > 0) {
		// 	$row = $result->fetch_assoc();
		// 	return $row;
		//     }else{
		// 	echo "Record not found";
		//     }
		// }

	


	// 	Delete customer data from customer table
	// 	public function deleteRecord($id)
	// 	{
	// 	    $query = "DELETE FROM customers WHERE id = '$id'";
	// 	    $sql = $this->con->query($query);
	// 	if ($sql==true) {
	// 		header("Location:index.php?msg3=delete");
	// 	}else{
	// 		echo "Record does not delete try again";
	// 	    }
	// }

