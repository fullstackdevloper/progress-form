<?php
	$request_id = "";
	$request_date = "";
	if(isset($_POST['services'])){		
		global $wpdb;
		$services = trim($_POST['services']);
		$no_of_employees = trim($_POST['no_of_employees']);
		$additional_benfits = "";
		if(isset($_POST['additional-benfits'])){
			$additional_benfits =  maybe_serialize($_POST['additional-benfits']);
		}		
		$anticipate = trim($_POST['anticipate']);
		$zip = trim($_POST['zip']);
		$email = trim($_POST['email']);
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$company = trim($_POST['company']);
		$phone = trim($_POST['phone']);
		$job_title = trim($_POST['job_title']);
		$companyIndustry = trim($_POST['companyIndustry']);
		$news = isset($_POST['terms']) ? "yes" : "no";
		$form_id = "peo-employee-leasing";
		$created_date = date("Y-m-d h:i:s");
		$check_qry = "SELECT * FROM `".$wpdb->prefix."progress_forms` WHERE `email`='$email'";
		$checkResults = $wpdb->get_results($check_qry);
		
		if($wpdb->num_rows > 0){			
			$request_id = $checkResults[0]->id;
			$request_date = $checkResults[0]->created_date;			
		}else{			
			$qry = "INSERT INTO `".$wpdb->prefix."progress_forms`(`id`, `form_id`, `fname`, `lname`, `email`, `company`, `phone`, `zip`, `services`, `no_of_employees`, `additional_benfits`, `anticipate`, `job_title`, `companyIndustry`, `news`, `created_date`) VALUES";
			$qry .= "(null,'$form_id','$fname','$lname','$email','$company','$phone','$zip','$services','$no_of_employees','$additional_benfits','$anticipate','$job_title','$companyIndustry','$news','$created_date')";			
			$res = $wpdb->query($qry);
			if($res){
				$req_ID = $wpdb->insert_id;
				$_SESSION['req_ID'] = $req_ID;
				$redirectURL = site_url('thank-you');
		?>		
			<script type="text/javascript">document.location.href = '<?php echo $redirectURL; ?>';</script>
		<?php
			}else{
				echo 'Error';
			}
		}
	}
?>
<form id="peo-form" name="peo-form" method="post" />
	<div class="row">			
		<div class="col-md-12">
		<?php if($request_id != ""){ ?>
			<h3 align="center">Sorry, we cannot process your request at this time.</h3>
			<p>It appears you have already submitted a quote request for PEO - Employee Leasing.</p>
			<ul>
				<li>Your original request ID is: <strong><?php echo $request_id; ?></strong></li>
				<?php $date = date_create($request_date);	?>
				<li>Submitted on: <strong><?php echo date_format($date,"M d, Y"); ?></strong></li>
			</ul>
			<p>You should have received an email from us after your original request with more information on what happens next. If you did not receive this email, or have questions about your original request, please contact our Customer Care team at (123) 456-7890 or info@peoconnection.com</p>	
		<?php }else{ ?>
			<div class="step well">
				<p>Share a few details to compare multiple quotes so you know you're getting the best deal.</p>
				<div class="form-group">										
					<div class="fields-container">	
						<h3 class="employees no-padding">What type of service are you interested in?</h3>
						<p class="note">Note: A Professional Employer Organization (PEO) is able to cost-effectively manage all HR-related functions by acting as a co-employer of your staff; this allows your business to focus resources in other areas. If you are seeking separate, unbundled HR outsourcing services, please choose HR outsourcing.</p>						
						<div class="btn-group btn-group-vertical" data-toggle="buttons">
							<div class="arrow_box" id="service-info" style="display:none"></div>
							<label class="btn">
								<input type="radio" name="services" value="PEO" id="services" required>
								<i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i>
								<span>Professional Employer Organization (PEO)</span>
							</label>
							<label class="btn">
								<input type="radio" name="services" id="services" value="HR outsourcing" required>
								<i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i>
								<span>HR outsourcing</span>							
							</label>
						</div>	
					</div>							
				</div>
			</div>
			<div class="step well">
				<div class="fields-container">	
					<h3>How many employees do you currently have?</h3>					
					<div class="btn-group btn-group-horizontal" data-toggle="buttons">
						<div class="arrow_box" id="employees-info" style="display:none"></div>					
						<label class="btn">
							<input type="radio" name="no_of_employees" value="1-4">
							<i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i>
							<span>1-4</span>
						</label>
						<label class="btn">
							<input type="radio" name="no_of_employees" value="5-9">
							<i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i>
							<span>5-9</span>
						</label>
						<label class="btn">
							<input type="radio" name="no_of_employees" value="5-9">
							<i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i>
							<span>10-19</span>
						</label>
						<label class="btn">
							<input type="radio" name="no_of_employees" value="5-9">
							<i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i>
							<span>20-49</span>
						</label>
						<label class="btn">
							<input type="radio" name="no_of_employees" value="5-9">
							<i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i>
							<span>50-99</span>
						</label>
						<label class="btn">
							<input type="radio" name="no_of_employees" value="100+">
							<i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i>
							<span>100+</span>
						</label>
					</div>	
				</div>
			</div>
			<div class="step well">
				<h3>What additional benefits (if any) would like to provide through the PEO?</h3>
				<p>(optional)</p>
				<div class="btn-group btn-group-horizontal" data-toggle="buttons">
					<div class="arrow_box" id="additional-info" style="display:none"></div>
					<label class="btn">
						<input type="checkbox" name='additional-benfits[]' value="Group life insurance"><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i> <span> Group life insurance</span>
					</label>
					<label class="btn">
						<input type="checkbox" name='additional-benfits[]' value="401(k) programs"><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i> <span> 401(k) programs</span>
					</label>
					<label class="btn">
						<input type="checkbox" name='additional-benfits[]' value="Group medical/dental/vision insurance"><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i> <span> Group medical/ dental/<br/>vision insurance</span>
					</label>
					<label class="btn">
						<input type="checkbox" name='additional-benfits[]' value="Flexible spending plans"><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i> <span> Flexible spending plan</span>
					</label>
					<label class="btn">
						<input type="checkbox" name='additional-benfits[]' value="Short and long-term disability"><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i> <span> Short and long-term disability</span>
					</label>
					<label class="btn">
						<input type="checkbox" name='additional-benfits[]' value="Other"><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i> <span> Other</span>
					</label>
				</div>
			</div>
			<div class="step well">				
				<div class="fields-container">	
					<h3>When do you anticipate making a decision?</h3>					
					<div class="btn-group btn-group-horizontal" data-toggle="buttons">
						<div class="arrow_box" id="anticipate-info" style="display:none"></div>
						<label class="btn one_third_img">
							<input type="radio" name="anticipate" value="ASAP">
							<i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i>
							<span>ASAP</span>
						</label>
						<label class="btn one_third_img">
							<input type="radio" name="anticipate" value="In one month">
							<i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i>
							<span>In one month</span>
						</label>
						<label class="btn one_third_img">
							<input type="radio" name="anticipate" value="In two months or more">
							<i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i>
							<span>In two months or more</span>
						</label>						
					</div>	
				</div>
				
			</div>
			<div class="step well">				
				<div class="fields-container form-group">	
					<h3>What's your zip code?</h3>
					<p>(Your zip ensures quotes are as accurate as possible for your area. We only serve U.S. businesses at this time.)</p>
					<div class="arrow_box" id="zip-info" style="display:none"></div>
					<input type="text" name="zip" id="zip" class="form-control" />	
				</div>	
			</div>			
			<div class="step well">
				<div class="fields-container form-group">
					<h3>What's your email address? <a href="javascript:void(0);" id="show_email_info"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></a></h3>
					<div id="email-information" style="display:none;">
						<h5>Why We Need Your Email Address</h5>
						<span><p>We require an email address so our suppliers can send you your price quotes quickly and easily. For more information, please consult our <a rel="noopener noreferrer nofollow" target="_blank" href="#">Privacy Policy</a>.</p></span>
					</div>
					<p>(This will only be used to provide you your price quotes.)</p>
					<div class="arrow_box" id="email-info" style="display:none"></div>
					<input type="text" class="form-control" id="email" name="email" />
				</div>
			</div>			
			<div class="step well">				
				<h4>Let's finish up! Who do we have the pleasure of working with on this quote request?</h4>
				<div class="arrow_box" id="address-info" style="display:none"></div>
				<div class="row">
					<div class="form-group col-md-6">
						<label for="fname"><span>First Name:</span></label>
						<input type="text" class="form-control" id="fname" name="fname" placeholder="Your First Name" />
					</div>
					<div class="form-group col-md-6">
						<label for="lname"><span>Last Name:</span></label>
						<input type="text" class="form-control" id="lname" name="lname" placeholder="Your Last Name" />
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-6">
						<label for="company"><span>Company Name:</span></label>
						<input type="text" class="form-control" id="company" name="company" placeholder="Your Company's Name">	
					</div>
					<div class="form-group col-md-6">
						<label for="phone"><span>Your Phone Number:</span></label>
						<input type="text" class="form-control" id="phone" name="phone" placeholder="555-555-5555">	
					</div>
				</div>
				<div class="row">	
					<div class="form-group col-md-6">
						<label for="job_title"><span>Your Job Title:</span></label>
						<select id="job_title" name="job_title" class="form-control">
							<option value="">Choose Below...</option>
							<option value="Accounting/Finance">Accounting/Finance</option>
							<option value="Admin. Assistant">Admin. Assistant</option>
							<option value="Attorney">Attorney</option>
							<option value="CEO/President/Owner">CEO/President/Owner</option>
							<option value="CFO">CFO</option>
							<option value="CIO">CIO</option>
							<option value="Consultant">Consultant</option>
							<option value="Dentist/Physician">Dentist/Physician</option>
							<option value="Designer/Writer/Producer">Designer/Writer/Producer</option>
							<option value="Educator">Educator</option>
							<option value="Engineer/Programmer">Engineer/Programmer</option>
							<option value="Facilities/Operations">Facilities/Operations</option>
							<option value="General Manager">General Manager</option>
							<option value="Human Resources">Human Resources</option>
							<option value="Manufacturing">Manufacturing</option>
							<option value="Marketing/Public Relations">Marketing/Public Relations</option>
							<option value="MIS/IT">MIS/IT</option>
							<option value="Office Manager">Office Manager</option>
							<option value="Other">Other</option>
							<option value="Partner/Principal">Partner/Principal</option>
							<option value="Purchasing Manager">Purchasing Manager</option>
							<option value="R&amp;D">R&amp;D</option>
							<option value="Receptionist">Receptionist</option>
							<option value="Sales/Business Devt.">Sales/Business Devt.</option>
						</select>
					</div>
					<div class="form-group col-md-6">
						<label for="companyIndustry"><span>Industry you work in:</span></label>
						<select id="companyIndustry" name="companyIndustry" class="form-control">
							<option value="" >Choose Below...</option>
							<option value="Advertising/Marketing/PR" >Advertising/Marketing/PR</option>
							<option value="Agriculture" >Agriculture</option>
							<option value="Biotech/Pharmaceuticals">Biotech/Pharmaceuticals</option>
							<option value="Computers - Hardware">Computers - Hardware</option>
							<option value="Computers - Software<">Computers - Software</option>
							<option value="Construction/General Contracting">Construction/General Contracting</option>
							<option value="Consulting">Consulting</option>
							<option value="Education">Education</option>
							<option value="Equipment Sales &amp; Service">Equipment Sales &amp; Service</option>
							<option value="Financial Services">Financial Services</option>
							<option value="Government">Government</option>
							<option value="Healthcare">Healthcare</option>
							<option value="Information Services">Information Services</option>
							<option value="Insurance">Insurance</option>
							<option value="Legal">Legal</option>
							<option value="Manufacturing">Manufacturing</option>
							<option value="Media/Entertainment/Publishing">Media/Entertainment/Publishing</option>
							<option value="Non-Profit">Non-Profit</option>
							<option value="Other Services">Other Services</option>
							<option value="Real Estate">Real Estate</option>
							<option value="Restaurant">Restaurant</option>
							<option value="Retail">Retail</option>
							<option value="Telecom/Utilities">Telecom/Utilities</option>
							<option value="Transportation/Logistics">Transportation/Logistics</option>
							<option value="Travel/Hospitality">Travel/Hospitality</option>
							<option value="Wholesale">Wholesale</option>
						</select>	
					</div>					
				</div>
				<div class="row">
					<div class="btn-group btn-group-horizontal" data-toggle="buttons">
						<label class="btn">
							<input type="checkbox" value="terms" id="terms" name="terms"><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i> <span> Help me buy smarter for my business with occasional<br/>emails featuring useful buying advice.</span>
						</label>
					</div>					
				</div>	
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
				<div class="next-pre">
					<span>
						&nbsp;<a href="" class="action back"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Previous</a>
					</span>
					<span class="text-next">
						<a href="" class="action next">Next <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						<button class="action submit">Submit <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
					</span>
					
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="progress">
			  <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
		<?php } ?>	
		</div> 
	</div>
</div>
</form>
<script type="text/javascript">
	jQuery(document).ready(function(){
		
		jQuery('#show_email_info').click(function(){
			console.log('testing');
			jQuery('#email-information').toggle('slow','linear');
		});
		
		
		var current = 1;
		
		widget      = jQuery(".step");
		btnnext     = jQuery(".next");
		btnback     = jQuery(".back"); 
		btnsubmit   = jQuery(".submit");

		// Init buttons and UI
		widget.not(':eq(0)').hide();
		hideButtons(current);
		setProgress(current);

		// Next button click action
		btnnext.click(function(){
			if(validateFields(current)){
				if(current < widget.length){
					widget.show();
					widget.not(':eq('+(current++)+')').hide();
					setProgress(current);
				}
				hideButtons(current);
			}			
			return false;
		})

		// Back button click action
		btnback.click(function(){
			if(current > 1){
				current = current - 2;
				btnnext.trigger('click');
			}
			hideButtons(current);
			return false;
		});
		function validateFields(step){
			switch(step) {
				case 1:					
					if(jQuery('input[name=services]:checked').length <= 0){						
						jQuery('#service-info').html('Please provide an answer.');
						jQuery('#service-info').show();
						return false;
					}
					jQuery('#service-info').hide();
					return true;
				break;
				
				case 2:					
					if(jQuery('input[name=no_of_employees]:checked').length <= 0){						
						jQuery('#employees-info').html('Please provide an answer.');
						jQuery('#employees-info').show();
						return false;
					}
					jQuery('#employees-info').hide();
					return true;
				break;
				case 4:					
					if(jQuery('input[name=anticipate]:checked').length <= 0){						
						jQuery('#anticipate-info').html('Please provide an answer.');
						jQuery('#anticipate-info').show();
						return false;
					}
					jQuery('#anticipate-info').hide();
					return true;
				break;
				case 5:					
					if(jQuery('#zip').val().trim() == ''){						
						jQuery('#zip-info').html('Please use a valid 5 digit US zip code.');
						jQuery('#zip-info').show();
						return false;
					}
					jQuery('#zip-info').hide();
					return true;
				break;
				case 6:
					var email = jQuery('#email').val().trim();
					if(email == ''){						
						jQuery('#email-info').html('Please enter email address.');
						jQuery('#email-info').show();
						return false;
					}else{						
						var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
						if (!filter.test(email)) {
							jQuery('#email-info').html('Please enter valid email address.');
							jQuery('#email-info').show();
							return false;
						}
					}
					jQuery.ajax({
						url: "<?php echo plugins_url().'/progress-form/view/check-request.php' ?>",
						type: 'POST',
						data:{							
							'your-email': email,							
							'eaction' : 'qwertyu'
						},
						success: function(result){
							var jsonData = jQuery.parseJSON(result);
							if(jsonData.status == 1){
								jQuery(".form-mein").html(jsonData.msg);
								return false;								
							}else if(jsonData.status == 2){
								jQuery('#email-info').html('Please enter valid email address.');
								jQuery('#email-info').show();
								return false;					
							}				
						}
					});
					jQuery('#email-info').hide();
					return true;
				break;				
				
				default:
					return true;
				break;
			}	
		}	
	});

	// Change progress bar action
	setProgress = function(currstep){
		var percent = parseFloat(100 / widget.length) * currstep;
		percent = percent.toFixed();
		console.log('percent: '+percent);
		jQuery(".progress-bar").css("width",percent+"%").html(percent+"%");		
	}

	// Hide buttons according to the current step
	hideButtons = function(current){
		var limit = parseInt(widget.length);
		jQuery(".action").hide();
		if(current < limit) btnnext.show();
		if(current > 1) btnback.show();
		if (current == limit) { btnnext.hide(); btnsubmit.show(); }
	}
	
	jQuery('#peo-form .submit').click(function(){
		if(jQuery('#fname').val().trim() == ''){						
			jQuery('#address-info').html('Please enter your first name.');
			jQuery('#address-info').show();
			return false;
		}
		if(jQuery('#lname').val().trim() == ''){						
			jQuery('#address-info').html('Please enter your last name.');
			jQuery('#address-info').show();
			return false;
		}
		if(jQuery('#company').val().trim() == ''){						
			jQuery('#address-info').html('Please enter company name.');
			jQuery('#address-info').show();
			return false;
		}
		if(jQuery('#phone').val().trim() == ''){						
			jQuery('#address-info').html('Please enter phone number.');
			jQuery('#address-info').show();
			return false;
		}else{
			var ph = jQuery('#phone').val().trim();
			var filter = /^[0-9-+]+$/;
			if(!filter.test(ph)) {
				jQuery('#address-info').html('Please enter valid phone number.');	
				return false;
			}
		}
		if(jQuery('#job_title').val().trim() == ''){						
			jQuery('#address-info').html('Please select job title.');
			jQuery('#address-info').show();
			return false;
		}
		if(jQuery('#companyIndustry').val().trim() == ''){						
			jQuery('#address-info').html('Please select Industry.');
			jQuery('#address-info').show();
			return false;
		}
		
		jQuery('#address-info').hide();
		jQuery('#peo-form').submit();
		
		
	});

</script>