<?php
	class MainModel extends CI_Model{
		
		function createUsersTable(){
			$sql = "CREATE TABLE IF NOT EXISTS `users` (
				`fullname` varchar(50),			
				`username` varchar(50) NOT NULL UNIQUE,
				`password` varchar(255) NOT NULL,			
				`email` varchar(100) NOT NULL UNIQUE,					
				PRIMARY KEY (`username`)
			)";
			$this->db->query($sql);	
		}


		function storeDataToDB(){
			$fullname = $this->input->post('fullname');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$email = $this->input->post('email');			

			$sql = "INSERT INTO users (fullname, username, password, email) VALUES('$fullname', '$username', '$password', '$email')";

			//$msn= "select username from users where username like '%$username';"
			
					$this->db->query($sql);

		}

		function storeContact(){
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$location = $this->input->post('location');
			$package = $this->input->post('package');	
			$message = $this->input->post('message');		

			$sql = "INSERT INTO contact (name, email, location, package, message) VALUES('$name', '$email', '$location', '$package','$message')";

			//$msn= "select username from users where username like '%$username';"
			
					$this->db->query($sql);

		}



		function storePicnic(){
			$pcode = $this->input->post('pcode');
			$pname = $this->input->post('pname');
			$description = $this->input->post('description');
			$location = $this->input->post('location');	
			$distance = $this->input->post('distance');	
			$placecode = $this->input->post('placecode');			
		

			//$sql = "INSERT INTO picnic (place_code, place_name, description,location, distance) VALUES('$pcode', '$pname', '$description', '$location','$distance')";

			//$maxN = "SELECT MAX('place_code') from places GROUP BY place_code";


				$sql=  "INSERT INTO picnic( place_code, place_name, description,location, distance,places_place_code ) VALUES( '$pcode', '$pname', '$description',
			   '$location','$distance', '$placecode')";

			
				$this->db->query($sql);

		}

			function storeHistoric(){
			$pcode = $this->input->post('pcode');
			$pname = $this->input->post('pname');
			$description = $this->input->post('description');
			$location = $this->input->post('location');	
			$distance = $this->input->post('distance');	
			$placecode = $this->input->post('placecode');
			$image = $this->input->post('img');			

				$sql=  "INSERT INTO historic( place_code, place_name, description,location, distance,places_place_code,img) VALUES( '$pcode', '$pname','$description','$location','$distance', '$placecode','$image')";

				$this->db->query($sql);

		}

			function storePopular(){
			$pcode = $this->input->post('pcode');
			$pname = $this->input->post('pname');
			$description = $this->input->post('description');
			$location = $this->input->post('location');	
			$distance = $this->input->post('distance');	
			$placecode = $this->input->post('placecode');
			

			$sql=  "INSERT INTO popular( place_code, place_name, description,location, distance,places_place_code ) VALUES( '$pcode', '$pname','$description','$location','$distance', '$placecode')";

				$this->db->query($sql);

				//$sql=  "INSERT INTO popular( place_code, place_name, description,location, distance,places_place_code ) VALUES( '$pcode', '$pname','$description','$location','$distance', '$placecode')";

				//$this->db->query($sql);

		}



			function storeAccomodation(){
			$aid = $this->input->post('aid');
			$room = $this->input->post('room');
			$package = $this->input->post('package');
			$upcoming = $this->input->post('upcoming');		
			$pcode = $this->input->post('pcode');			

				$sql=  "INSERT INTO accomodation(a_id, room_services, packages,upcoming,places_place_code ) VALUES( '$aid', '$room','$package',
				'$upcoming','$pcode')";

				$this->db->query($sql);

		}

			function storeAdventure(){
			$pcode = $this->input->post('pcode');
			$pname = $this->input->post('pname');
			$description = $this->input->post('description');
			$location = $this->input->post('location');	
			$distance = $this->input->post('distance');	
			$placecode = $this->input->post('placecode');			

				$sql=  "INSERT INTO adventure( place_code, place_name, description,location, distance,places_place_code ) VALUES( '$pcode', '$pname','$description','$location','$distance', '$placecode')";

				$this->db->query($sql);

		}

		function storeGiven(){
			$sid = $this->input->post('sid');
			$pname = $this->input->post('pname');
			$cost = $this->input->post('cost');
			$date= $this->input->post('date');		
			$pcode = $this->input->post('pcode');			

				$sql=  "INSERT INTO given_tour(sl_id, place, cost,date,places_place_code ) VALUES( '$sid', '$pname','$cost',
				'$date','$pcode')";

				$this->db->query($sql);

		}

		function storeNews(){
			$nid = $this->input->post('nid');
			$upcoming = $this->input->post('upcoming');
			$cost = $this->input->post('cost');
			$date= $this->input->post('date');		
			$pcode = $this->input->post('pcode');			

				$sql=  "INSERT INTO news(n_id, upcoming, cost,date,places_place_code ) VALUES( '$nid', '$upcoming','$cost',
				'$date','$pcode')";

				$this->db->query($sql);

		}


			function storePlace(){
			$pcode = $this->input->post('pcode');
			$pname = $this->input->post('pname');
			$type = $this->input->post('type');	
			$sql = "INSERT INTO places ( place_name, place_code, type) VALUES( '$pname','$pcode', '$type')";
			
			$this->db->query($sql);

		}
		

		function checkLogin(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$sql = "SELECT * FROM users WHERE username = '$username' AND password ='$password'";
			if(($this->db->query($sql)->num_rows())>0){
				return true;
			}else {
				return false;
			}
		}

		function getAdmin(){
			  $this->db->select("fullname,username,email");
			  $this->db->from('users');
			  $query = $this->db->get();
			  return $query->result();
		 }

		function getHistoric(){

			//$placename= $this->input->post('pname');
			$sql= "SELECT * from historic";
			//$sql1= "SELECT * from historic WHERE place_code = 4";
			return $this->db->query($sql)->result_array();
			//return $this->db->query($sql1)->result_array();
		}


		function getPopular(){

			//$placename= $this->input->post('pname');
			$sql= "SELECT * from popular";
			//$sql1= "SELECT * from historic WHERE place_code = 4";
			return $this->db->query($sql)->result_array();
			//return $this->db->query($sql1)->result_array();
		}

			function getPicnic(){

			//$placename= $this->input->post('pname');
			$sql= "SELECT * from picnic";
			//$sql1= "SELECT * from historic WHERE place_code = 4";
			return $this->db->query($sql)->result_array();
			//return $this->db->query($sql1)->result_array();
		}


			function getAdventure(){

			//$placename= $this->input->post('pname');
			$sql= "SELECT * from adventure";
			//$sql1= "SELECT * from historic WHERE place_code = 4";
			return $this->db->query($sql)->result_array();
			//return $this->db->query($sql1)->result_array();
		}



			function getNews(){

			//$placename= $this->input->post('pname');
			$sql= "SELECT * from news";
			//$sql1= "SELECT * from historic WHERE place_code = 4";
			return $this->db->query($sql)->result_array();
			//return $this->db->query($sql1)->result_array();
		}

			function getGiven(){

			//$placename= $this->input->post('pname');
			$sql= "SELECT * from given_tour";
			//$sql1= "SELECT * from historic WHERE place_code = 4";
			return $this->db->query($sql)->result_array();
			//return $this->db->query($sql1)->result_array();
		}


			function getAbout(){

			//$placename= $this->input->post('pname');
			$sql= "SELECT * from about";
			//$sql1= "SELECT * from historic WHERE place_code = 4";
			return $this->db->query($sql)->result_array();
			//return $this->db->query($sql1)->result_array();
		}


		function getProfile(){
			
			$sql = "SELECT * FROM contact";
			return $this->db->query($sql)->result_array();
		}

		function getAdminprofile(){
			$username = $this->input->post('username');
			$sql = "SELECT * FROM users WHERE username = '$username'";
			return $this->db->query($sql)->result_array();
		}

			function search(){
			return $this->input->post('search');
			
		}




	}
?>