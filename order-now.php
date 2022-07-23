<?php session_start(); ?>

<!doctype html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title> Order Now</title>

	<?php include_once("assests_links.php"); ?>


</head>

<body>

	<?php include_once("navbar_for_custom_pages.php"); ?>

	<h1 class="order_now_heading"> PLACE YOUR ORDER HERE </h1>


	<!-- Forms main container -->
	<div class="forms-main-container">
		<!-- User Order form -->
		<form id="User_Order_Form" onsubmit="return false;">
			<!-- Container for user price form -->
			<div class="container">

				<div>

					<div class="form-row">
						<label for="user-email-price-form">Email address:</label> &nbsp; &nbsp;

						<div class="form-group col-md-6">

							<input type="email" class="form-control" id="user-email-price-form" name="user-email-price-form" aria-describedby="emailHelp" placeholder="Enter email" onkeypress="cal_price()">

						</div>

					</div>

					<div class="form-row">

						<label for="user-document-type-price-form">Document type:</label>

						<div class="form-group col-md-6">
							<select id="user-document-type-price-form" name="user-document-type-price-form" class="form-control" onchange="cal_price()">
								<option selected>Select your document type..</option>
								<option value="Admission Essay">Admission Essay</option>
								<option value="Analytical Essay">Analytical Essay</option>
								<option value="Annotated Bibliography">Annotated Bibliography</option>
								<option value="Application Letter">Application Letter</option>
								<option value="Argumentative Essay">Argumentative Essay</option>
								<option value="Assessment">Assessment</option>
								<option value="Assignment ">Assignment </option>
								<option value="Biography">Biography</option>
								<option value="Book Reports ">Book Reports </option>
								<option value="Book Reviews ">Book Reviews </option>
								<option value="Brief Overview">Brief Overview</option>
								<option value="Business Plan">Business Plan</option>
								<option value="Case Study">Case Study </option>
								<option value="College Paper">College Paper </option>
								<option value="Contrast Essay">Contrast Essay</option>
								<option value="Coursework ">Coursework </option>
								<option value="Cover Letter">Cover Letter</option>
								<option value="Creative Writing">Creative Writing</option>
								<option value="Critical analysis">Critical analysis</option>
								<option value="Critical Thinking">Critical Thinking</option>
								<option value="Dissertation">Dissertation</option>
								<option value="eBooks ">eBooks </option>
								<option value="Essay">Essay</option>
								<option value="Exposition Writing">Exposition Writing</option>
								<option value="Homework ">Homework </option>
								<option value="Lab Report ">Lab Report </option>
								<option value="Literature Review">Literature Review</option>
								<option value="Movie Review ">Movie Review </option>
								<option value="News Release ">News Release </option>
								<option value="Online assignment">Online assignment</option>
								<option value="Personal Statement">Personal Statement</option>
								<option value="Powerpoint Presentation (with speaker notes)">Powerpoint Presentation (with speaker notes)</option>
								<option value="Powerpoint Presentation (without speaker notes)">Powerpoint Presentation (without speaker notes)</option>
								<option value="Quiz">Quiz</option>
								<option value="Reflection paper">Reflection paper</option>
								<option value="Reflective Essay">Reflective Essay</option>
								<option value="Report">Report</option>
								<option value="Research Essay">Research Essay</option>
								<option value="Research Paper">Research Paper</option>
								<option value="Research proposal ">Research proposal </option>
								<option value="Response Essay">Response Essay</option>
								<option value="Response paper">Response paper</option>
								<option value="Scholarship Essay">Scholarship Essay</option>
								<option value="School Paper ">School Paper </option>
								<option value="Speech ">Speech </option>
								<option value="Term Paper">Term Paper</option>
								<option value="Thesis">Thesis</option>
								<option value="Thesis Proposal">Thesis Proposal</option>
								<option value="other">Other</option>
							</select>

						</div>

					</div>

					<div class="form-row">

						<label for="user-academic-level-price-form">Academic Level:</label>

						<div class="form-group col-md-6">
							<select id="user-academic-level-price-form" name="user-academic-level-price-form" class="form-control" onchange="cal_price()">
								<option selected>Select your academic level?</option>
								<option value="High school">High school</option>
								<option value="college-undergraduate">College-undergraduate</option>
								<option value="Master">Master</option>
								<option value="Doctoral">Doctoral</option>
							</select>
						</div>

					</div>

					<div class="form-row">

						<label for="user-number-of-pages-price-form">Enter No of Pages:</label>

						<div class="form-group col-md-6">
							<select id="user-number-of-pages-price-form" name="user-number-of-pages-price-form" class="form-control" onchange="cal_price()">
								<option value="1" selected>1 Page - 300 Words</option>
								<option value="2">2 Pages ~ 600 Words</option>
								<option value="3">3 Pages ~ 900 Words</option>
								<option value="4">4 Pages ~ 1200 Words</option>
								<option value="5">5 Pages ~ 1500 Words</option>
								<option value="6">6 Pages ~ 1800 Words</option>
								<option value="7">7 Pages ~ 2100 Words</option>
								<option value="8">8 Pages ~ 2400 Words</option>
								<option value="9">9 Pages ~ 2700 Words</option>
								<option value="10">10 Pages ~ 3000 Words</option>
								<option value="11">11 Pages ~ 3300 Words</option>
								<option value="12">12 Pages ~ 3600 Words</option>
								<option value="13">13 Pages ~ 3900 Words</option>
								<option value="14">14 Pages ~ 4200 Words</option>
								<option value="15">15 Pages ~ 4500 Words</option>
								<option value="16">16 Pages ~ 4800 Words</option>
								<option value="17">17 Pages ~ 5100 Words</option>
								<option value="18">18 Pages ~ 5400 Words</option>
								<option value="19">19 Pages ~ 5700 Words</option>
								<option value="20">20 Pages ~ 6000 Words</option>
								<option value="21">21 Pages ~ 6300 Words</option>
								<option value="22">22 Pages ~ 6600 Words</option>
								<option value="23">23 Pages ~ 6900 Words</option>
								<option value="24">24 Pages ~ 7200 Words</option>
								<option value="25">25 Pages ~ 7500 Words</option>
								<option value="26">26 Pages ~ 7800 Words</option>
								<option value="27">27 Pages ~ 8100 Words</option>
								<option value="28">28 Pages ~ 8400 Words</option>
								<option value="29">29 Pages ~ 8700 Words</option>
								<option value="30">30 Pages ~ 9000 Words</option>
								<option value="31">31 Pages ~ 9300 Words</option>
								<option value="32">32 Pages ~ 9600 Words</option>
								<option value="33">33 Pages ~ 9900 Words</option>
								<option value="34">34 Pages ~ 10200 Words</option>
								<option value="35">35 Pages ~ 10500 Words</option>
								<option value="36">36 Pages ~ 10800 Words</option>
								<option value="37">37 Pages ~ 11100 Words</option>
								<option value="38">38 Pages ~ 11400 Words</option>
								<option value="39">39 Pages ~ 11700 Words</option>
								<option value="40">40 Pages ~ 12000 Words</option>
								<option value="41">41 Pages ~ 12300 Words</option>
								<option value="42">42 Pages ~ 12600 Words</option>
								<option value="43">43 Pages ~ 12900 Words</option>
								<option value="44">44 Pages ~ 13200 Words</option>
								<option value="45">45 Pages ~ 13500 Words</option>
								<option value="46">46 Pages ~ 13800 Words</option>
								<option value="47">47 Pages ~ 14100 Words</option>
								<option value="48">48 Pages ~ 14400 Words</option>
								<option value="49">49 Pages ~ 14700 Words</option>
								<option value="50">50 Pages ~ 15000 Words</option>
								<option value="51">51 Pages ~ 15300 Words</option>
								<option value="52">52 Pages ~ 15600 Words</option>
								<option value="53">53 Pages ~ 15900 Words</option>
								<option value="54">54 Pages ~ 16200 Words</option>
								<option value="55">55 Pages ~ 16500 Words</option>
								<option value="56">56 Pages ~ 16800 Words</option>
								<option value="57">57 Pages ~ 17100 Words</option>
								<option value="58">58 Pages ~ 17400 Words</option>
								<option value="59">59 Pages ~ 17700 Words</option>
								<option value="60">60 Pages ~ 18000 Words</option>
								<option value="61">61 Pages ~ 18300 Words</option>
								<option value="62">62 Pages ~ 18600 Words</option>
								<option value="63">63 Pages ~ 18900 Words</option>
								<option value="64">64 Pages ~ 19200 Words</option>
								<option value="65">65 Pages ~ 19500 Words</option>
								<option value="66">66 Pages ~ 19800 Words</option>
								<option value="67">67 Pages ~ 20100 Words</option>
								<option value="68">68 Pages ~ 20400 Words</option>
								<option value="69">69 Pages ~ 20700 Words</option>
								<option value="70">70 Pages ~ 21000 Words</option>
								<option value="71">71 Pages ~ 21300 Words</option>
								<option value="72">72 Pages ~ 21600 Words</option>
								<option value="73">73 Pages ~ 21900 Words</option>
								<option value="74">74 Pages ~ 22200 Words</option>
								<option value="75">75 Pages ~ 22500 Words</option>
								<option value="76">76 Pages ~ 22800 Words</option>
								<option value="77">77 Pages ~ 23100 Words</option>
								<option value="78">78 Pages ~ 23400 Words</option>
								<option value="79">79 Pages ~ 23700 Words</option>
								<option value="80">80 Pages ~ 24000 Words</option>
								<option value="81">81 Pages ~ 24300 Words</option>
								<option value="82">82 Pages ~ 24600 Words</option>
								<option value="83">83 Pages ~ 24900 Words</option>
								<option value="84">84 Pages ~ 25200 Words</option>
								<option value="85">85 Pages ~ 25500 Words</option>
								<option value="86">86 Pages ~ 25800 Words</option>
								<option value="87">87 Pages ~ 26100 Words</option>
								<option value="88">88 Pages ~ 26400 Words</option>
								<option value="89">89 Pages ~ 26700 Words</option>
								<option value="90">90 Pages ~ 27000 Words</option>
								<option value="91">91 Pages ~ 27300 Words</option>
								<option value="92">92 Pages ~ 27600 Words</option>
								<option value="93">93 Pages ~ 27900 Words</option>
								<option value="94">94 Pages ~ 28200 Words</option>
								<option value="95">95 Pages ~ 28500 Words</option>
								<option value="96">96 Pages ~ 28800 Words</option>
								<option value="97">97 Pages ~ 29100 Words</option>
								<option value="98">98 Pages ~ 29400 Words</option>
								<option value="99">99 Pages ~ 29700 Words</option>
								<option value="100">100 Pages ~ 30000 Words</option>
							</select>
						</div>

					</div>


					<div class="form-row">

						<label for="user-deadline-time-price-form">Deadline:</label>

						<div class="form-group col-md-2">

							<select id="user-deadline-time-price-form" name="user-deadline-time-price-form" class="form-control" onchange="cal_price()">
								<option value="0">00:00</option>
								<option value="1">01:00</option>
								<option value="2">02:00</option>
								<option value="3">03:00</option>
								<option value="4">04:00</option>
								<option value="5">05:00</option>
								<option value="6">06:00</option>
								<option value="7">07:00</option>
								<option value="8">08:00</option>
								<option value="9">09:00</option>
								<option value="10">10:00</option>
								<option value="11">11:00</option>
								<option selected value="12">12:00</option>
								<option value="13">13:00</option>
								<option value="14">14:00</option>
								<option value="15">15:00</option>
								<option value="16">16:00</option>
								<option value="17">17:00</option>
								<option value="18">18:00</option>
								<option value="19">19:00</option>
								<option value="20">20:00</option>
								<option value="21">21:00</option>
								<option value="22">22:00</option>
								<option value="23">23:00</option>
							</select>

						</div>

						<div class="form-group col-md-5">
							<input type="date" class="form-control" id="user-deadline-date-price-form" name="user-deadline-date-price-form" onchange="cal_price()">
						</div>

					</div>

					<div class="form-row">

						<label for="user-contact-code-price-form">Contact:</label> &nbsp;

						<div class="form-group col-md-2">
							<input type="text" class="form-control" id="user-contact-code-price-form" name="user-contact-code-price-form" placeholder="code" value="+1">
						</div>

						<div class="form-group col-md-5">
							<input type="number" class="form-control" id="user-contact-price-form" name="user-contact-price-form" placeholder="(XXX)(XXX)(XXXX)" onKeyPress="if(this.value.length==10){return false;}" onKeyUp="cal_price()">
						</div>

					</div>

					<div>

						<div class="" id="">

							<h5> Total Price: </h5>

							<h1>$<span id="user-tp" onch>0</span></h1>
							<!--because php cannot read the paragraphs or span tags it can only read input field therefore we added input field in here!-->
							<input type="hidden" id="user-tp-inputField" name="user-tp-inputField">
							<input type="checkbox" id="user-tp-chk-bx" name="user-tp-chk-bx"> Upfront Plan

						</div>

						<div class="" id="">

							<h5> Price after Upfront plan: </h5>
							<h1>$<span id="user-ptp">0</span></h1>

						</div>

						<p class="text-muted"> You have to provide all of the information above for price calculation </p>
					</div>

					<button id="next-btn" name="next-btn" class="next-btn">Next</button> <br>
					<span style="color:red;" id="price-form-error"> </span>
					<span id="show-date"></span>
				</div>
				<!--// User price form -->

			</div>
			<!--// Container for user price form -->


			<!-- Container for user details form -->
			<div class="container">

				<div id="user-details-form-div">

					<div class="form-row">
						<label for="user-assignment-title">Title:</label> &nbsp; &nbsp; &nbsp;

						<div class="form-group col-md-6">

							<input type="text" class="form-control" id="user-assignment-title" name="user-assignment-title" placeholder="Enter your assignment title">

						</div>

					</div>

					<div class="form-row">

						<label for="user-document-type">Subject:</label>

						<div class="form-group col-md-6">

							<select id="user-document-type" name="user-document-type" class="form-control">
								<option value="" selected>Select the subject of your course</option>
								<option value="Biology and Life Sciences">Biology and Life Sciences</option>
								<option value="Business and Management">Business and Management</option>
								<option value="Chemistry">Chemistry</option>
								<option value="Culture">Culture</option>
								<option value="Economics">Economics</option>
								<option value="Education">Education</option>
								<option value="English">English</option>
								<option value="Environmental Science">Environmental Science</option>
								<option value="Finance, Accounting and Banking">Finance, Accounting and Banking</option>
								<option value="Geography">Geography</option>
								<option value="Project Management">Project Management</option>
								<option value="Operational Plan">Operational Plan</option>
								<option value="Critical review">Critical review</option>
								<option value="Critical Appraisal">Critical Appraisal</option>
								<option value="Capstone">Capstone</option>
								<option value="Reflective Thinking">Reflective Thinking</option>
								<option value="Healthcare and Nursing">Healthcare and Nursing</option>
								<option value="History and Anthropology">History and Anthropology</option>
								<option value="HRM">HRM</option>
								<option value="International Relations">International Relations</option>
								<option value="IT">IT</option>
								<option value="Law and International Law">Law and International Law</option>
								<option value="Linguistics">Linguistics</option>
								<option value="Literature">Literature</option>
								<option value="Marketing and PR">Marketing and PR</option>
								<option value="Maths">Maths</option>
								<option value="Philosophy">Philosophy</option>
								<option value="Physics">Physics</option>
								<option value="Political Science">Political Science</option>
								<option value="Psychology">Psychology</option>
								<option value="Sociology">Sociology</option>
								<option value="Statistics">Statistics</option>
								<option value="Other">Other</option>
							</select>

						</div>

					</div>

					<div class="form-row">

						<label for="user-citation-style">Citation Style:</label>
						&nbsp;
						<div class="form-group col-md-6">

							<select id="user-citation-style" name="user-citation-style" class="form-control">
								<option value="" selected>Select a citation style</option>
								<option value="AMA">AMA</option>
								<option value="APA">APA</option>
								<option value="AMS">AMS</option>
								<option value="Chicago">Chicago</option>
								<option value="MLA">MLA</option>
								<option value="Turbian">Turbian</option>
								<option value="other">Other</option>
							</select>

						</div>

					</div>

					<div class="form-row">
						<label for="user-sources">No of Sources:</label>

						<div class="form-group col-md-6">

							<input type="text" class="form-control" id="user-sources" name="user-sources" placeholder="No# of sources">

						</div>

					</div>


					<div class="form-row">
						<label for="user-assignment-description">Description:</label> &nbsp; &nbsp; &nbsp;

						<div class="form-group col-md-6">

							<textarea rows="9" class="form-control" id="user-assignment-description" name="user-assignment-description" placeholder="Describe your assignment in detail or you can also upload original file with teachers instructions...">
	</textarea>

						</div>

					</div>

					<div class="form-row">
						<label>Attach File:</label> &nbsp; &nbsp; &nbsp; &nbsp;

						<div class="form-group col-md-6">

							<div class="custom-file">
								<input type="file" class="custom-file-input" id="customFile" name="customFile" multiple>
								<label class="custom-file-label" for="customFile">Choose file</label>
							</div>

							<span class="text-muted"> In case of multiple attachments only single file name is displayed </span>

						</div>

					</div>

					<button type="submit" id="checkout-btn" name="checkout-btn" class="checkout-btn" onclick="check_user_sign_up()">Review Order Details</button>

					<span id="user-assignment-details-err" style="color:red; display: block;"> </span>
				</div>
			</div>
			<!--// Container for user details form -->

		</form>
	</div>
	<!--// Forms main container -->



	<!-- ****************************User Sign Up Modal********************************* -->
	<div class="modal fade" id="user_sign_up_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Sign Up Form</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">
					<div class="form-center-for-signup-modal">

						<form method="post" enctype="multipart/form-data" action="includes/operations_user.php">
							<div class="form-group col-md-12">
								<span id="signup_error" style="display:block; color:red;"> </span>
								<label for="user_name"> Name </label>
								<input type="text" class="form-control custom_form_control" id="user_name" name="user_name" placeholder="Name...">
							</div>


							<div class="form-group col-md-12">

								<label for="user_contact" id="contact_error">Phone </label>
								<input type="text" class="form-control custom_form_control" id="user_contact" name="user_contact" placeholder="Phone number..." onkeypress="if(this.value.length==10){return false;}">
							</div>


							<div class="form-group col-md-12">

								<label for="user_email" id="email_error">Email address</label>
								<input type="email" class="form-control custom_form_control" id="user_email" name="user_email" aria-describedby="emailHelp" placeholder="Enter your email here...">
								<small id="emailHelp" class="form-text text-muted">We will keep everything confidential. </small>
							</div>
							<div class="form-group col-md-12">
								<label for="user_password">Password</label>
								<input type="password" class="form-control custom_form_control" id="user_password" name="user_password" placeholder="Enter the correct Password">
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="user_remember_me" name="user_remember_me">
								<label class="form-check-label" for="user_remember_me">Remember me!</label>
							</div>
							<input type="submit" class="form-btn" value="Signup" id="order_now_signup_btn" name="order_now_signup_btn"> <br>
							<span class="text-muted"> Already Signed Up! </span> <a href="#" id="close_signup_modal"> Login </a>
						</form>
					</div>

				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- *********************************   //User Sign Up Modal   ******************************** -->




	<!-- ****************************User Login Modal********************************* -->
	<div class="modal fade" id="user_login_modal" tabindex="-1" role="dialog" aria-labelledby="user_login_modal" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Login Form</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">
					<div class="form-center-for-signup-modal">

						<form method="post" enctype="multipart/form-data" action="includes/operations_user.php">
							<div class="form-group col-md-12">
								<label for="user_email" id="email_error">Email address</label>
								<input type="email" class="form-control custom_form_control" id="user_email" name="user_email" aria-describedby="emailHelp" placeholder="Enter your email here...">
								<small id="emailHelp" class="form-text text-muted">We will keep everything confidential. </small>
							</div>

							<div class="form-group col-md-12">
								<label for="user_password">Password</label>
								<input type="password" class="form-control custom_form_control" id="user_password" name="user_password" placeholder="Enter the correct Password">
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="user_login_remember_me" name="user_login_remember_me">
								<label class="form-check-label" for="user_login_remember_me"> Remember me! </label>
							</div>
							<input type="submit" class="form-btn" value="Login" name="order_now_login_btn" id="order_now_login_btn"> <br>
							<span class="text-muted"> New on PerfectaPapers! </span> <a href="#" id="close_login_modal"> Sign Up </a>
						</form>
					</div>

				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- *********************************   //User Login Modal   ******************************** -->


	<?php include_once("footer_for_custom_pages.php"); ?>
	<?php include_once("tawkTo.php"); ?>

</body>

</html>

<script>
	$("#btn_signup").click(
		function() {
			$("#signup_error").html("");
			$("#email_error").html("");
			$("#contact_error").html("");

			var name = $("#user_name").val();
			var phone = $("#user_contact").val();
			var email = $("#user_email").val();
			var pass = $("#user_password").val();

			if (name == "" || phone == "" || email == "" || pass == "") {
				$("#signup_error").html("Please fill all of the given fields to Signup!");
				return false;
			} else {

				if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
					$("#email_error").css("color", "red");
					$("#email_error").html("Please enter a valid Email");
					return false;
				}

				if (phone.length > 10) {
					$("#contact_error").css("color", "red");
					$("#contact_error").html("Please enter a valid contact number");
					return false;
				}

			}
		}

	);

	function fetch_price_form() {
		//To remove previous error message from the price-form-error span
		var price_err = $("#price-form-error");
		if (price_err.html() != "") {
			price_err.html("");
		}
		//Variables to take all data from price form input fields
		window.email = $("#user-email-price-form").val();
		window.doctype = $("#user-document-type-price-form").val();
		window.academic = $("#user-academic-level-price-form").val();
		window.pages = $("#user-number-of-pages-price-form").val();
		window.contact_code = $("#user-contact-code-price-form").val();
		window.contact_number = $("#user-contact-price-form").va
		window.deadline_time = $("#user-deadline-time-price-form").val();
		window.deadline_date = $("#user-deadline-date-price-form").val();
	}

	//For Checking that either this user is already signed up??
	function check_user_sign_up() {
		//To remove previous error message from the price-form-error span
		var details_err = $("#user-assignment-details-err");
		if (details_err.html() != "") details_err.html("");

		//Before checking User Signup must check that either he/she have filled all the details!!
		var assignment_title = $("#user-assignment-title").val();
		var doc_type = $("#user-document-type").val();
		var citation_style = $("#user-citation-style").val();
		var user_sources = $("#user-sources").val();

		if (assignment_title != "" && doc_type != "" && citation_style != "" && user_sources != "") {
			//alert($("#User_Order_Form").serialize());
			$.ajax({
				url: "check_sign_up_for_order_pg.php",
				type: "POST",
				data: $("#User_Order_Form").serialize(),
				success: function(r) {
					//alert(r);
					if ($.trim(r) == "redirect") {
						//alert(r);
						window.location.replace("review_order_pg.php");
					} else if ($.trim(r) == "NotSignedUp") {
						//alert(r);
						//For auto filling the SignUp Modal Fields which user had provided
						$("#user_email").val(window.email);
						$("#user_contact").val(window.contact_number);
						//For auto displaying the SignUp Modal
						$('#user_sign_up_modal').modal('show');
					}
				}
			}); //AJAX Call Ends
		} else {
			$("#user-assignment-details-err").html("Please provide title, subject, citation style & sources.");
		}
	}

	//For Calculating Price 
	function cal_price() {

		fetch_price_form();

		if (window.email != "" && window.doctype != "" && window.academic != "" && window.pages != "" && window.contact_code != "" && window.contact_number != "" && window.deadline_time != "" && window.deadline_date != "") {

			/*	Formula to calculate the total number of days between two dates selected by user */
			var d2 = new Date(document.getElementById('user-deadline-date-price-form').value);

			var date1 = new Date();

			// To calculate the time difference of two dates 
			var Difference_In_Time = d2.getTime() - date1.getTime();

			// To calculate the no. of days between two dates 
			var Difference_In_Days = parseInt(Difference_In_Time / (1000 * 3600 * 24));

			var total_hours_in_days = Difference_In_Days * 24;

			var overall_hours = total_hours_in_days + parseInt(window.deadline_time);
			/*		
			document.getElementById('show-date').innerHTML = total_hours_in_days + " " + window.deadline_time + " " + overall_hours + " " + window.pages; */

			if (window.academic == "High school") {
				if (overall_hours <= 12) {
					$("#user-tp").html(window.pages * 20);
					$("#user-tp-inputField").val(window.pages * 20);
				}
				//48 H == 2 D, here show the price of 24 H
				else if (overall_hours < 48) {
					$("#user-tp").html(window.pages * 18.75);
					$("#user-tp-inputField").val(window.pages * 18.75);
				}
				//72 H == 3 D, here show the price of 48 H
				else if (overall_hours < 72) {
					$("#user-tp").html(window.pages * 17.50);
					$("#user-tp-inputField").val(window.pages * 17.50);
				}
				//96 H == 4 D, here show the price of 72 H
				else if (overall_hours < 96) {
					$("#user-tp").html(window.pages * 16.00);
					$("#user-tp-inputField").val(window.pages * 16.00);
				}
				//144 H == 6 D, here show the price of 120 H
				else if (overall_hours < 144) {
					$("#user-tp").html(window.pages * 15.00);
					$("#user-tp-inputField").val(window.pages * 15.00);
				}
				//192 H == 8 D, here show the price of 120 H
				else if (overall_hours < 192) {
					$("#user-tp").html(window.pages * 14.50);
					$("#user-tp-inputField").val(window.pages * 14.50);
				}
				//192 H == 8 D, if user selects deadline >= 192 H then Price will remain constant
				else {
					$("#user-tp").html(window.pages * 14.00);
					$("#user-tp-inputField").val(window.pages * 14.00);
				}
			} else if (window.academic == "college-undergraduate") {
				if (overall_hours <= 12) {
					$("#user-tp").html(window.pages * 21.25);
					$("#user-tp-inputField").val(window.pages * 21.25);
				}
				//48 H == 2 D, here show the price of 24 H
				else if (overall_hours < 48) {
					$("#user-tp").html(window.pages * 20.25);
					$("#user-tp-inputField").val(window.pages * 20.25);
				}
				//72 H == 3 D, here show the price of 48 H
				else if (overall_hours < 72) {
					$("#user-tp").html(window.pages * 18.75);
					$("#user-tp-inputField").val(window.pages * 18.75);
				}
				//96 H == 4 D, here show the price of 72 H
				else if (overall_hours < 96) {
					$("#user-tp").html(window.pages * 16.50);
					$("#user-tp-inputField").val(window.pages * 16.50);
				}
				//144 H == 6 D, here show the price of 120 H
				else if (overall_hours < 144) {
					$("#user-tp").html(window.pages * 15.50);
					$("#user-tp-inputField").val(window.pages * 15.50);
				}
				//192 H == 8 D, here show the price of 120 H
				else if (overall_hours < 192) {
					$("#user-tp").html(window.pages * 15.00);
					$("#user-tp-inputField").val(window.pages * 15.00);
				}
				//192 H == 8 D, if user selects deadline >= 192 H then Price will remain constant
				else {
					$("#user-tp").html(window.pages * 15.00);
					$("#user-tp-inputField").val(window.pages * 15.00);
				}
			} else if (window.academic == "Master") {
				if (overall_hours <= 12) {
					$("#user-tp").html("N/A");
					$("#user-tp-inputField").val(0);
				}
				//48 H == 2 D, here show the price of 24 H
				else if (overall_hours < 48) {
					$("#user-tp").html(window.pages * 21.00);
					$("#user-tp-inputField").val(window.pages * 21.00);
				}
				//72 H == 3 D, here show the price of 48 H
				else if (overall_hours < 72) {
					$("#user-tp").html(window.pages * 19.50);
					$("#user-tp-inputField").val(window.pages * 19.50);
				}
				//96 H == 4 D, here show the price of 72 H
				else if (overall_hours < 96) {
					$("#user-tp").html(window.pages * 18.00);
					$("#user-tp-inputField").val(window.pages * 18.00);
				}
				//144 H == 6 D, here show the price of 120 H
				else if (overall_hours < 144) {
					$("#user-tp").html(window.pages * 17.00);
					$("#user-tp-inputField").val(window.pages * 17.00);
				}
				//192 H == 8 D, here show the price of 120 H
				else if (overall_hours < 192) {
					$("#user-tp").html(window.pages * 16.50);
					$("#user-tp-inputField").val(window.pages * 16.50);
				}
				//192 H == 8 D, if user selects deadline >= 192 H then Price will remain constant
				else {
					$("#user-tp").html(window.pages * 16.00);
					$("#user-tp-inputField").val(window.pages * 16.00);
				}
			} else if (window.academic == "Doctoral") {
				if (overall_hours <= 12) {
					$("#user-tp").html("N/A");
					$("#user-tp-inputField").val(0);
				}
				//48 H == 2 D, here show the price of 24 H
				else if (overall_hours < 48) {
					$("#user-tp").html("N/A");
					$("#user-tp-inputField").val(0);
				}
				//72 H == 3 D, here show the price of 48 H
				else if (overall_hours < 72) {
					$("#user-tp").html(window.pages * 27.00);
					$("#user-tp-inputField").val(window.pages * 27.00);
				}
				//96 H == 4 D, here show the price of 72 H
				else if (overall_hours < 96) {
					$("#user-tp").html(window.pages * 25.50);
					$("#user-tp-inputField").val(window.pages * 25.50);
				}
				//144 H == 6 D, here show the price of 120 H
				else if (overall_hours < 144) {
					$("#user-tp").html(window.pages * 23.50);
					$("#user-tp-inputField").val(window.pages * 23.50);
				}
				//192 H == 8 D, here show the price of 120 H
				else if (overall_hours < 192) {
					$("#user-tp").html(window.pages * 22.75);
					$("#user-tp-inputField").val(window.pages * 22.75);
				}
				//192 H == 8 D, if user selects deadline >= 192 H then Price will remain constant
				else {
					$("#user-tp").html(window.pages * 22.00);
					$("#user-tp-inputField").val(window.pages * 22.00);
				}
			}


			// This Logic will call $.ajax() to save available leads data only if a valid contact_number is given
			if (window.contact_number.length == 10) {
				// console.log($("#User_Order_Form").serialize());

				$.ajax({
					url: "save_available_leads_data.php",
					type: "POST",
					data: $("#User_Order_Form").serialize(),
					success: function(r) {
						// alert(r);
					}

				}); //AJAX Call Ends

			} // Available Leads 'IF Statement' Ends

		} // 'IF Statement' Ends

	} //'cal_price()' Ends

	//For calculating the price after selecting Upfront Plan checkbox
	$("#user-tp-chk-bx").click(
		function() {
			var tp = $("#user-tp").html();
			if ($("#user-ptp").html() != "0") {
				$("#user-ptp").html("0");
				$("#user-tp-inputField").val(tp);
			} else {
				$("#user-ptp").html(tp / 2);
				$("#user-tp-inputField").val(tp / 2);
			}
		}
	);

	//For Showing next Form
	$("#next-btn").click(
		function() {
			fetch_price_form();
			if (window.email == "" || window.doctype == "" || window.academic == "" || window.pages == "" || window.contact_code == "" || window.contact_number == "" || window.deadline_time == "" || window.deadline_date == "") {
				$("#price-form-error").html("Please fill all of the above fields to proceed");
			} else {
				if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(window.email)) {
					$("#price-form-error").html("Please enter a valid Email");
				} else {
					$("#user-details-form-div").css("display", "block");
				}
			}
		}
	);

	// Add the following code if you want the name of the file to appear on upload
	$(".custom-file-input").on("change", function() {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
	});

	//Function for removing
	function remove_white_spaces() {
		var myTxtArea = document.getElementById('user-assignment-description');
		myTxtArea.value = myTxtArea.value.replace(/^\s*|\s*$/g, '');
	}
	remove_white_spaces();

	/* These JQUERY Functions are used to hide & show SignUp & Login Modals  */
	$("#close_signup_modal").click(
		function() {
			$("#user_sign_up_modal").modal("hide");
			$("#user_login_modal").modal("show");
		}
	);

	$("#close_login_modal").click(
		function() {
			$("#user_login_modal").modal("hide");
			$("#user_sign_up_modal").modal("show");
		}
	);
	/* //End//These JQUERY Functions are used to hide & show SignUp & Login Modals  */
</script>