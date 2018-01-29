
<form name="forklift-form" method="post" onsubmit="return false">
	<div class="row">			
		<div class="col-md-8 col-md-offset-2">   	
			<div class="progress">
			  <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
			</div>

			<div class="step well">
				<div class="form-group">
					<h3>What type of forklift do you need?</h3>					
					<div class="img-container">						
						<input type="radio" name="forklift">
						<label class="radio-inline">Sit-down rider truck</label>
					</div>
					<div class="img-container">						
						<input type="radio" name="forklift">
						<label class="radio-inline">Reach truck</label>
					</div>
					<div class="img-container">						
						<input type="radio" name="forklift">
						<label class="radio-inline">Order picker</label>
					</div>
					<div class="img-container">						
						<input type="radio" name="forklift">
						<label class="radio-inline">Pallet jack</label>
					</div>
					<div class="img-container">						
						<input type="radio" name="forklift">
						<label class="radio-inline">Rough terrain</label>
					</div>
					<div class="img-container">						
						<input type="radio" name="forklift">
						<label class="radio-inline">Other</label>
					</div>						
				</div>
			</div>
			<div class="step well">
				<div class="form-group">
					<h3>Are you considering a new or used forklift?</h3>					
					<div class="img-container">						
						<label class="radio-inline"><input type="radio" name="forklift" value="new">New</label>
					</div>
					<div class="img-container">						
						<label class="radio-inline"><input type="radio" name="forklift" value="used">Used</label>
					</div>
					<div class="img-container">						
						<label class="radio-inline"><input type="radio" name="forklift" value="not-sure">Not Sure</label>
					</div>
				</div>
			</div>
			<div class="step well">
				<h3>What engine type are you interested in?</h3>
				<label class="radio-inline"><input type="radio" name="engine_type" value="lpg">Liquid Propane Gas (LPG) </label>
				<label class="radio-inline"><input type="radio" name="engine_type" value="electric">Electric</label>
				<label class="radio-inline"><input type="radio" name="engine_type" value="diesel">Diesel</label>
				<label class="radio-inline"><input type="radio" name="engine_type" value="gasoline">Gasoline</label>
				<label class="radio-inline"><input type="radio" name="engine_type" value="other">Other or not sure</label>
			</div>
			<div class="step well">				
				<div class="form-group">
					<h3>Approximately how much weight do you need to lift?</h3>
					<label class="radio-inline"><input type="radio" name="engine_type" value="diesel">Diesel</label>
					<label class="radio-inline"><input type="radio" name="engine_type" value="gasoline">Gasoline</label>
					<label class="radio-inline"><input type="radio" name="engine_type" value="other">Other or not sure</label>
				</div>
				
			</div>
			<div class="step well">				
				<h3>What is your preferred financing method?</h3>
				<label class="radio-inline"><input type="radio" name="engine_type" value="diesel">Diesel</label>
				<label class="radio-inline"><input type="radio" name="engine_type" value="gasoline">Gasoline</label>
				<label class="radio-inline"><input type="radio" name="engine_type" value="other">Other or not sure</label>
			</div>
			<div class="step well">				
				<h3>When do you anticipate making a decision?</h3>
				<label class="radio-inline"><input type="radio" name="engine_type" value="diesel">Diesel</label>
				<label class="radio-inline"><input type="radio" name="engine_type" value="gasoline">Gasoline</label>
				<label class="radio-inline"><input type="radio" name="engine_type" value="other">Other or not sure</label>
			</div>
			<div class="step well">				
				<h3>What's the zip code where this forklift will primarily be used?</h3>
				<input type="text" class="form-control" id="zip" name="zip" />
			</div>
			<div class="step well">				
				<h3>What's your email address?</h3>
				<input type="text" class="form-control" id="email" name="email" />
			</div>
			<div class="step well">				
				<h3>Please share any additional information about your needs.</h3>
				(optional)
				<p>NOTE: There is a 1,000 character limit for this answer.</p>
				<textarea class="form-control" rows="5" id="info" name="info"></textarea>
			</div>
			<div class="step well">				
				<h3>Let's finish up! Tell us about yourself:</h3>
				<div class="form-group">
					<label for="fname">First Name:</label>
					<input type="text" class="form-control" id="fname" name="fname" />
				</div>
				<div class="form-group">
					<label for="lname">Last Name:</label>
					<input type="text" class="form-control" id="lname" name="lname" />
				</div>
				<div class="form-group">
					<label for="usr">Your Job Title:</label>
					<select id="select_input_title">
						<option value="">Choose Below...</option>
						<option value="">Accounting/Finance</option>
						<option value="">Admin. Assistant</option>
						<option value="">Attorney</option>
						<option value="">CEO/President/Owner</option>
						<option value="">CFO</option>
						<option value="10-12-12-14-37">CIO</option>
						<option value="10-12-12-14-38">Consultant</option>
						<option value="10-12-12-14-39">Dentist/Physician</option>
						<option value="10-12-12-14-40">Designer/Writer/Producer</option>
						<option value="10-12-12-14-41">Educator</option>
						<option value="10-12-12-14-42">Engineer/Programmer</option>
						<option value="10-12-12-14-43">Facilities/Operations</option>
						<option value="10-12-12-14-44">General Manager</option>
						<option value="10-12-12-14-45">Human Resources</option>
						<option value="10-12-12-14-46">Manufacturing</option>
						<option value="10-12-12-14-47">Marketing/Public Relations</option>
						<option value="10-12-12-14-48">MIS/IT</option>
						<option value="10-12-12-14-49">Office Manager</option>
						<option value="10-12-12-14-50">Other</option>
						<option value="10-12-12-14-51">Partner/Principal</option>
						<option value="10-12-12-14-52">Purchasing Manager</option>
						<option value="10-12-12-14-53">R&amp;D</option>
						<option value="10-12-12-14-54">Receptionist</option>
						<option value="10-12-12-14-55">Sales/Business Devt.</option>
					</select>
				</div>
			</div>
			<div class="step well">				
				<h3>Tell us about your company:</h3>
				<div class="form-group">
					<label for="company">Company Name:</label>
					<input type="text" class="form-control" id="company" name="company" placeholder="Your Company's Name">	
				</div>
				<div class="form-group">
					<label for="phone">Your Phone Number:</label>
					<input type="text" class="form-control" id="phone" name="phone" placeholder="555-555-5555">	
				</div>
				<div class="form-group">
					<label for="companyIndustry">Industry you work in:</label>
					<select id="companyIndustry" name="companyIndustry" class="form-control">
						<option value="11-15-15-17-58" id="-1">Choose Below...</option>
						<option value="11-15-15-17-59" id="1607">Advertising/Marketing/PR</option>
						<option value="11-15-15-17-60" id="1608">Agriculture</option>
						<option value="11-15-15-17-61" id="1609">Biotech/Pharmaceuticals</option>
						<option value="11-15-15-17-62" id="1610">Computers - Hardware</option>
						<option value="11-15-15-17-63" id="1611">Computers - Software</option>
						<option value="11-15-15-17-64" id="1612">Construction/General Contracting</option>
						<option value="11-15-15-17-65" id="1613">Consulting</option>
						<option value="11-15-15-17-66" id="1614">Education</option>
						<option value="11-15-15-17-67" id="1615">Equipment Sales &amp; Service</option>
						<option value="11-15-15-17-68" id="1616">Financial Services</option>
						<option value="11-15-15-17-69" id="1617">Government</option>
						<option value="11-15-15-17-70" id="1618">Healthcare</option>
						<option value="11-15-15-17-71" id="1619">Information Services</option>
						<option value="11-15-15-17-72" id="1620">Insurance</option>
						<option value="11-15-15-17-73" id="1621">Legal</option>
						<option value="11-15-15-17-74" id="1622">Manufacturing</option>
						<option value="11-15-15-17-75" id="1623">Media/Entertainment/Publishing</option>
						<option value="11-15-15-17-76" id="1624">Non-Profit</option>
						<option value="11-15-15-17-77" id="1606">Other Services</option>
						<option value="11-15-15-17-78" id="1625">Real Estate</option>
						<option value="11-15-15-17-79" id="1626">Restaurant</option>
						<option value="11-15-15-17-80" id="1627">Retail</option>
						<option value="11-15-15-17-81" id="1628">Telecom/Utilities</option>
						<option value="11-15-15-17-82" id="1629">Transportation/Logistics</option>
						<option value="11-15-15-17-83" id="1630">Travel/Hospitality</option>
						<option value="11-15-15-17-84" id="1631">Wholesale</option>
					</select>	
				</div>
			</div>
			<div class="step well">				
				<h3>Last step! Tell us where you're located:</h3>
				<div class="form-group">
					<label for="address">Street Address:</label>
					<input type="text" class="form-control" id="address" name="address" placeholder="Your Street Address"/>	
				</div>
				<div class="form-group">
					<label for="city">City:</label>
					<input type="text" class="form-control" id="city" name="city" placeholder="Your City"/>	
				</div>
				<div class="form-group">
					<label for="state">State:</label>
					<select id="select_input_stateId" class="_2iSUS _3fNq6 _1lGzY _3Pjnx bz__FormText" tabindex="1"><option value="12-19-19-21-88" id="-1">Choose Below...</option><option value="12-19-19-21-89" id="AL">Alabama</option><option value="12-19-19-21-90" id="AK">Alaska</option><option value="12-19-19-21-91" id="AZ">Arizona</option><option value="12-19-19-21-92" id="AR">Arkansas</option><option value="12-19-19-21-93" id="CA">California</option><option value="12-19-19-21-94" id="CO">Colorado</option><option value="12-19-19-21-95" id="CT">Connecticut</option><option value="12-19-19-21-96" id="DE">Delaware</option><option value="12-19-19-21-97" id="DC">District of Columbia</option><option value="12-19-19-21-98" id="FL">Florida</option><option value="12-19-19-21-99" id="GA">Georgia</option><option value="12-19-19-21-100" id="GU">Guam</option><option value="12-19-19-21-101" id="HI">Hawaii</option><option value="12-19-19-21-102" id="ID">Idaho</option><option value="12-19-19-21-103" id="IL">Illinois</option><option value="12-19-19-21-104" id="IN">Indiana</option><option value="12-19-19-21-105" id="IA">Iowa</option><option value="12-19-19-21-106" id="KS">Kansas</option><option value="12-19-19-21-107" id="KY">Kentucky</option><option value="12-19-19-21-108" id="LA">Louisiana</option><option value="12-19-19-21-109" id="ME">Maine</option><option value="12-19-19-21-110" id="MD">Maryland</option><option value="12-19-19-21-111" id="MA">Massachusetts</option><option value="12-19-19-21-112" id="MI">Michigan</option><option value="12-19-19-21-113" id="MN">Minnesota</option><option value="12-19-19-21-114" id="MS">Mississippi</option><option value="12-19-19-21-115" id="MO">Missouri</option><option value="12-19-19-21-116" id="MT">Montana</option><option value="12-19-19-21-117" id="NE">Nebraska</option><option value="12-19-19-21-118" id="NV">Nevada</option><option value="12-19-19-21-119" id="NH">New Hampshire</option><option value="12-19-19-21-120" id="NJ">New Jersey</option><option value="12-19-19-21-121" id="NM">New Mexico</option><option value="12-19-19-21-122" id="NY">New York</option><option value="12-19-19-21-123" id="NC">North Carolina</option><option value="12-19-19-21-124" id="ND">North Dakota</option><option value="12-19-19-21-125" id="OH">Ohio</option><option value="12-19-19-21-126" id="OK">Oklahoma</option><option value="12-19-19-21-127" id="OR">Oregon</option><option value="12-19-19-21-128" id="PA">Pennsylvania</option><option value="12-19-19-21-129" id="PR">Puerto Rico</option><option value="12-19-19-21-130" id="RI">Rhode Island</option><option value="12-19-19-21-131" id="SC">South Carolina</option><option value="12-19-19-21-132" id="SD">South Dakota</option><option value="12-19-19-21-133" id="TN">Tennessee</option><option value="12-19-19-21-134" id="TX">Texas</option><option value="12-19-19-21-135" id="UT">Utah</option><option value="12-19-19-21-136" id="VT">Vermont</option><option value="12-19-19-21-137" id="VI">Virgin Islands</option><option value="12-19-19-21-138" id="VA">Virginia</option><option value="12-19-19-21-139" id="WA">Washington</option><option value="12-19-19-21-140" id="WV">West Virginia</option><option value="12-19-19-21-141" id="WI">Wisconsin</option><option value="12-19-19-21-142" id="WY">Wyoming</option>
					</select>					
				</div>
				<div class="form-group">
					<label for="zipcode">Zip Code:</label>
					<input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Your Zip Code" value=""/>	
				</div>
				<div class="form-group">
					<label class="checkbox-inline"><input type="checkbox" value="terms" id="terms"/>Help me buy smarter for my business with occasional emails featuring useful buying advice.</label>
				</div>
			</div>	
			<button class="action back btn btn-info">Back</button>
			<button class="action next btn btn-info">Next</button>
			<button class="action submit btn btn-success">Submit</button>
		</div> 
	</div>
</div>
</form>
<script type="text/javascript">
	jQuery(document).ready(function(){
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
			if(current < widget.length){
				widget.show();
				widget.not(':eq('+(current++)+')').hide();
				setProgress(current);
			}
			hideButtons(current);
		})

		// Back button click action
		btnback.click(function(){
			if(current > 1){
				current = current - 2;
				btnnext.trigger('click');
			}
			hideButtons(current);
		})			
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

</script>