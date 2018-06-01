
<head>
<link rel="stylesheet" href="book.css" />
<script src="book.js"></script>
</head>
<form action="#" id="booking-form">
		
		<div class="tab-content">
			<div class="tab-pane" id="step1">
				<ul>
					<li>
            <label>How many guests in your group?</label>
            <div class="errorTxt"></div>
            <select name="bf_totalGuests" required>
              <option value="">Select</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="More">More</option>
					</select>
				 </li>
				 <li style="list-style: none; display: inline">
						<button class="next-btn next-btn1" type="button">Next</button>
					</li>
				</ul>
			</div>
			<div class="tab-pane" id="step2">
				<ul>
					<li>
						<label>Which date and time are you looking to book on?</label>
            <div class="errorTxt"></div>
						<input type="text" class="datepicker" name="bf_date">
					</li>
					<li>
            <label>Which time of day?</label>
            <div class="errorTxt"></div>
            <select name="bf_time">
              <option value="">Select</option>
              <option value="Morning">Morning</option>
              <option value="Midday">Midday</option>
              <option value="Late afternoon, ending with a sunset">Late afternoon, ending with a sunset</option>
					  </select>
				  </li>
					<li>
            <label>How many hours would you like to charter for?</label>
            <div class="errorTxt"></div>
            <select name="bf_hours">
              <option value="">Select</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="Overnight (24 hours)">Overnight (24 hours)</option>
					  </select>
					</li>
					<li>
						<button class="next-btn next-btn2" type="button">Next</button>
					</li>
				</ul>
			</div>
			<div class="tab-pane" id="step3">
				<ul>
					<li>
            <label>What is your first and last name?</label>
            <div class="errorTxt"></div>
            <input type="text" name="bf_fullname">
          </li>
					<li>
            <label>Which email address should we send your free estimate to?</label>
            <div class="errorTxt"></div>
            <input type="email" name="bf_email">
          </li>
					<li>
            <label>Do you have any questions or a message? (Optional)</label>
					  <textarea name="bf_message"></textarea>
					</li>
					<li>
						<button class="submit-btn" type="submit">Request My Free Estimate</button>
					</li>
				</ul>
			</div>
		</div>
  
		<div class="progress-wrap">
			<div class="line-progress-bar">
				<div class="line"></div>
				<ul class="checkout-bar">
					<li class="progressbar-dots active"><span>step 1</span></li>
					<li class="progressbar-dots"><span>step 2</span></li>
					<li class="progressbar-dots"><span>Final step</span></li>
				</ul>
			</div>
		</div>
	
		<div id="loader" style="display: none;">
			<img src="//d2erq0e4xljvr7.cloudfront.net/assets/img/ring.svg">
		</div>
	</form>