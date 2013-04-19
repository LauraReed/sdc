<?php

	
	function get_entries() {
		$mysqli = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE);
		
		if ($result = $mysqli->query("SELECT * FROM petition_entries")) {
			while ($row = $result->fetch_assoc()) 
				{
					echo '<div class="petition_entry">';
					echo $row['petition_id'] ."<br />";
					echo $row['petition_author'] ."<br />";
					echo $row['petition_body'] ."<br />";
					echo '</div>';
				}

		}
			
		$mysqli->close();
	}
	
	
	function insert_petition_entries() {
		$mysqli = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE);
		$post = $mysqli->real_escape_string(strip_tags($_POST['name']));
		$body = $mysqli->real_escape_string(strip_tags($_POST['body']));
		$ip = $mysqli->real_escape_string($_SERVER['REMOTE_ADDR']);
		
		if(validate_body($body) == FALSE) {
			echo "Unable to process comment - Please shorten your comment.";
			}
		
		else {
			if(validate_name($name) == FALSE) {
				echo "Unable to process name - Please shorten your name.";
			}
			
			else{
				if ($ip_result = $mysqli->query("SELECT petition_ip_address FROM petition_entries WHERE petition_ip_address = '$ip'")) {
					
					if ($row = $ip_result->fetch_assoc()) { 
						echo "Do Not Process Form";
					}

					else { $mysqli->query("INSERT INTO drtred_sdc.petition_entries (petition_id, petition_author, petition_body, petition_date_created, petition_is_approved, petition_ip_address) VALUES ('', '$post', '$body', CURRENT_TIMESTAMP, '1', '$ip')");
					}
					
				}
			}
		}
	}
	
	
	function get_ip() {
		$mysqli = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE);
		$ip = $mysqli->real_escape_string($_SERVER['REMOTE_ADDR']);
		
		if ($ip_result = $mysqli->query("SELECT petition_ip_address FROM petition_entries WHERE petition_ip_address = '$ip'")) {
			if ($row = $ip_result->fetch_assoc()) { 
				echo "Thank you for signing our petition for Jagex to continue development on Stellar Dawn.";
			}
				
			else {
				include('/home/drtred/public_html/stellardawncentral/petition/includes/form.php');
			}
		}
			
		$mysqli->close();
		
		}
		
		
?>