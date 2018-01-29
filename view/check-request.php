<?php
	if(isset($_POST['eaction'])){
		include('../../../../wp-load.php');
		$email = trim($_POST['your-email']);
		if($email != ""){
			global $wpdb;
			$check_qry = "SELECT * FROM `".$wpdb->prefix."progress_forms` WHERE `email`='$email'";
			$checkResults = $wpdb->get_results($check_qry);			
			if($wpdb->num_rows > 0){				
				$request_id = $checkResults[0]->id;
				$request_date = $checkResults[0]->created_date;
				$date = date_create($request_date);
				$str = '<p>It appears you have already submitted a quote request for PEO - Employee Leasing.</p>
					<ul>
						<li>Your original request ID is: <strong>'.$request_id.'</strong></li>						
						<li>Submitted on: <strong>'.date_format($date,"M d, Y").'</strong></li>
					</ul><p>You should have received an email from us after your original request with more information on what happens next. If you did not receive this email, or have questions about your original request, please contact our Customer Care team at (123) 456-7890 or info@peoconnection.com</p>';
				echo json_encode(array('status'=>1,'msg'=>$str));
				die();
			}else{
				echo json_encode(array('status'=>0,'msg'=>''));
				die();
			}
		}else{
			echo json_encode(array('status'=>2,'msg'=>'Email is required field'));
			die();
		}
	}


?>