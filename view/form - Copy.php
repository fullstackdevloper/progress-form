
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
						<img width="80" src="<?php echo plugin_dir_url( __FILE__ ).'/img/step1-img1.svg'; ?>"/>
						<input type="radio" name="forklift">
						<label class="radio-inline">Sit-down rider truck</label>
					</div>
					<div class="img-container">
						<img width="80" src="<?php echo plugin_dir_url( __FILE__ ).'/img/step1-img1.svg'; ?>"/>
						<input type="radio" name="forklift">
						<label class="radio-inline">Reach truck</label>
					</div>
					<div class="img-container">
						<img width="80" src="<?php echo plugin_dir_url( __FILE__ ).'/img/step1-img1.svg'; ?>"/>
						<input type="radio" name="forklift">
						<label class="radio-inline">Order picker</label>
					</div>
					<div class="img-container">
						<img width="80" src="<?php echo plugin_dir_url( __FILE__ ).'/img/step1-img1.svg'; ?>"/>
						<input type="radio" name="forklift">
						<label class="radio-inline">Pallet jack</label>
					</div>
					<div class="img-container">
						<img width="80" src="<?php echo plugin_dir_url( __FILE__ ).'/img/step1-img1.svg'; ?>"/>
						<input type="radio" name="forklift">
						<label class="radio-inline">Rough terrain</label>
					</div>
					<div class="img-container">
						<img width="80" src="<?php echo plugin_dir_url( __FILE__ ).'/img/step1-img1.svg'; ?>"/>
						<input type="radio" name="forklift">
						<label class="radio-inline">Other</label>
					</div>						
				</div>
			</div>
			<div class="step well">
				<div class="form-group">
					<h3>Are you considering a new or used forklift?</h3>					
					<div class="img-container">
						<img width="80" src="<?php echo plugin_dir_url( __FILE__ ).'/img/step1-img1.svg'; ?>"/>
						<input type="radio" name="forklift">
						<label class="radio-inline">Sit-down rider truck</label>
					</div>
					<div class="img-container">
						<img width="80" src="<?php echo plugin_dir_url( __FILE__ ).'/img/step1-img1.svg'; ?>"/>
						<input type="radio" name="forklift">
						<label class="radio-inline">Reach truck</label>
					</div>
					<div class="img-container">
						<img width="80" src="<?php echo plugin_dir_url( __FILE__ ).'/img/step1-img1.svg'; ?>"/>
						<input type="radio" name="forklift">
						<label class="radio-inline">Order picker</label>
					</div>
				</div>
			</div>
			<div class="step well">
				<label for="usr">Mobile Number:</label>
				<input type="text" class="form-control" id="usr">
			</div>
			<div class="step well">				
				<div class="form-group">
					<label for="email">Email address:</label>
					<input type="email" class="form-control" id="email">
				</div>
				
			</div>
			<div class="step well">
				
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="pwd">
				</div>
				<div class="form-group">
					<label for="pwd">Retype Password:</label>
					<input type="password" class="form-control" id="pwd">
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