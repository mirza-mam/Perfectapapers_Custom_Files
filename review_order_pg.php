<?php
session_start();
require_once("includes/user.php");

if (isset($_SESSION['checkout-btn']) || isset($_SESSION['order_now_signup_btn']) || isset($_SESSION['order_now_login_btn'])) {
	unset($_SESSION['checkout-btn']);
	unset($_SESSION['order_now_signup_btn']);
	unset($_SESSION['order_now_login_btn']);

	if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) {
		$u_obj = new user;

		/* 
						Remember: You should must call the insert_data() before fetch_latest_order_details() function in order to fetch the details of the latest Order
					*/

		/*	Storing Information of the User who placed latest Order */
		$_SESSION['user_info_row'] = $u_obj->insert_data();
		$_SESSION['order_info_row'] = $u_obj->fetch_latest_order_details();
	}
}
//Now these PHP Variables are converted into Associative Arrays
$user_info_row = $_SESSION['user_info_row'];
$order_info_row	= $_SESSION['order_info_row'];

?>

<!doctype html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title> Review Order </title>

	<?php include_once("assests_links.php"); ?>

</head>

<body>

	<?php include_once("navbar_for_custom_pages.php"); ?>

	<h1 class="order_now_heading"> REVIEW YOUR ORDER HERE </h1>

	<!-- Order Review main container -->
	<div class="review-order-main-container">

		<!-- Order Review Form -->
		<div class="order_review_form">

			<h6> Email address: <span id="user_email"> <?php echo $user_info_row['user_email']; ?> </span> </h6>
			<h6> Document Type: <span id="doc_type"> <?php echo $order_info_row['doc_type']; ?> </span> </h6>
			<h6> Academic Level: <?php echo $order_info_row['academic_lvl']; ?> </h6>
			<h6> No# of Pages: <?php echo $order_info_row['no_of_pages']; ?> </h6>
			<h6> Deadline Time: <?php echo $order_info_row['deadline_time']; ?>, Date: <?php echo $order_info_row['deadline_date']; ?> </h6>
			<h6> Contact: <?php echo $user_info_row['user_contact']; ?> </h6>
			<h6> Assignment Title: <?php echo $order_info_row['title']; ?> </h6>
			<h6> Subject: <?php echo $order_info_row['subject']; ?> </h6>
			<h6> Citaion Style: <?php echo $order_info_row['citation_style']; ?> </h6>
			<h6> No# of Sources: <?php echo $order_info_row['no_of_sources']; ?> </h6>
			<h6> Description: <?php echo $order_info_row['description']; ?> </h6>
			<h6> Total Price: <?php echo $order_info_row['order_price']; ?>$ </h6>
			<br>

		</div>


		<div class="review_order_btns_div">

			<!--
					<div>
				<button type="button" class="btn btn-dark" id="btn_to_open_edit_order" data-toggle="modal" data-target="#user_edit_order_modal"> <span class="fa fa-edit"></span> Edit Order</button>
					</div>
-->

			<div>
				<button type="button" name="Proceed_To_Check_Out_btn" id="Proceed_To_Check_Out_btn" class="checkout-btn"> <span class="fa fa-shopping-cart"></span> Proceed To Check Out</button> <!--  data-toggle="modal" data-target="#user_checkout_modal" -->
			</div>


		</div>

	</div>
	<!--// Order Review main container -->

	<br><br><br><br>

	<script>
		$("#btn_to_open_edit_order").click(
			function() {
				/*
					window.email = $("#user-email-price-form").val();
					window.doctype = $("#user-document-type-price-form").val();
					window.academic = $("#user-academic-level-price-form").val();
					window.pages = $("#user-number-of-pages-price-form").val();
					window.contact_code = $("#user-contact-code-price-form").val();
					window.contact_number = $("#user-contact-price-form").val();
					window.deadline_time = $("#user-deadline-time-price-form").val();
					window.deadline_date = $("#user-deadline-date-price-form").val();
				*/

				//var user_email = $("#user_email").html();
				//Variables to take all data from price form input fields
				window.email = $("#user_email").html();
				window.doctype = $("#doc_type").html();
				window.academic = $("#user-academic-level-price-form").val();
				window.pages = $("#user-number-of-pages-price-form").val();
				window.contact_code = $("#user-contact-code-price-form").val();
				window.contact_number = $("#user-contact-price-form").val();
				window.deadline_time = $("#user-deadline-time-price-form").val();
				window.deadline_date = $("#user-deadline-date-price-form").val();
				alert(doctype);

				$("#user-email-price-form").val(email);
				$("#user-document-type-price-form").val(doctype);
			}
		);
	</script>

	<!-- ****************************User Check Out Modal********************************* -->
	<div class="modal fade" id="user_checkout_modal" tabindex="-1" role="dialog" aria-labelledby="user_checkout_modal" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Check Out</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">

					<div class="jumbotron">
						<h1 class="display-6">Apply for your payment link</h1>
						<a href="#">https://XXxxuauclkasjdlkajoijoaww.com</a>
						<hr class="my-4">
						<p>Above is your payment link</p>
						<p class="lead">
							<button class="checkout-btn">Apply</button>
						</p>
					</div>

				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- *********************************   //User Check Out Modal   ******************************** -->

	<!-- ****************************User Edit Order Modal********************************* -->
	<div class="modal fade" id="user_edit_order_modal" tabindex="-1" role="dialog" aria-labelledby="user_checkout_modal" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Check Out</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">

					<form method="post" enctype="multipart/form-data" action="#">


						<label for="user-email-price-form">Email address:</label> &nbsp; &nbsp;
						<div class="form-group col-md-12">
							<input type="email" class="form-control" id="user-email-price-form" name="user-email-price-form" aria-describedby="emailHelp" placeholder="Enter email">
						</div>

						<label for="user-document-type-price-form">Document type:</label>
						<div class="form-group col-md-12">
							<select id="user-document-type-price-form" name="user-document-type-price-form" class="form-control">
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


						<label for="user-academic-level-price-form">Academic Level:</label>
						<div class="form-group col-md-12">
							<select id="user-academic-level-price-form" name="user-academic-level-price-form" class="form-control" onchange="cal_price()">
								<option selected>Select your academic level?</option>
								<option value="High school">High school</option>
								<option value="college-undergraduate">College-undergraduate</option>
								<option value="Master">Master</option>
								<option value="Doctoral">Doctoral</option>
							</select>
						</div>


						<label for="user-number-of-pages-price-form">Enter No of Pages:</label>
						<div class="form-group col-md-12">
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


						<label for="user-deadline-time-price-form">Deadline:</label>
						<div class="form-group col-md-12">
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


						<div class="form-group col-md-12">
							<input type="date" class="form-control" id="user-deadline-date-price-form" name="user-deadline-date-price-form" onchange="cal_price()">
						</div>


						<label for="user-contact-code-price-form">Contact:</label> &nbsp;
						<div class="form-row">

							<div class="form-group col-md-2">
								<input type="text" class="form-control" id="user-contact-code-price-form" name="user-contact-code-price-form" placeholder="code" value="+1">
							</div>

							<div class="form-group col-md-10">
								<input type="number" class="form-control" id="user-contact-price-form" name="user-contact-price-form" placeholder="(XXX)(XXX)(XXXX)" onKeyPress="if(this.value.length==10){return false;}">
							</div>

						</div>


						<div>

							<div class="" id="">

								<h5> Total Price: </h5>
								<h1 id="user-tp">$0</h1>
								<input type="checkbox" id="user-tp-chk-bx" name="user-tp-chk-bx"> Upfront Plan

							</div>

							<div class="" id="">

								<h5> Price To Pay: </h5>
								<h1 id="user-ptp">$0</h1>

							</div>

						</div>


						<label for="user-assignment-title">Title:</label> &nbsp; &nbsp; &nbsp;
						<div class="form-group col-md-12">
							<input type="text" class="form-control" id="user-assignment-title" name="user-assignment-title" placeholder="Enter your assignment title">
						</div>


						<label for="user-document-type">Subject:</label>
						<div class="form-group col-md-12">

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


						<label for="user-citation-style">Citation Style:</label>&nbsp;
						<div class="form-group col-md-12">

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


						<label for="user-sources">No of Sources:</label>
						<div class="form-group col-md-12">
							<input type="text" class="form-control" id="user-sources" name="user-sources" placeholder="No# of sources">
						</div>


						<label for="user-assignment-description">Description:</label> &nbsp; &nbsp; &nbsp;
						<div class="form-group col-md-12">
							<textarea rows="9" class="form-control" id="user-assignment-description" name="user-assignment-description" placeholder="Describe your assignment in detail or you can also upload original file with teachers instructions...">
				</textarea>
						</div>


						<label>Attach File:</label> &nbsp; &nbsp; &nbsp; &nbsp;
						<div class="form-group col-md-12">
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="customFile" name="customFile" multiple>
								<label class="custom-file-label" for="customFile">Choose file</label>
							</div>
							<span class="text-muted"> In case of multiple attachments only single file name is displayed </span>
						</div>

						<input type="submit" class="form-btn" value="Done Editing" id="btn_edit_OrderForm" name="btn_edit_order"> <br>

					</form>

				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				</div>
			</div>
		</div>
	</div>

	<!-- *********************************   //User Edit Order Modal   ******************************** -->

	<?php include_once("footer_for_custom_pages.php"); ?>
	<?php include_once("tawkTo.php"); ?>

</body>

</html>
<?php $order_info_row['order_price'] = 120; ?>
<script>
	$("#Proceed_To_Check_Out_btn").click(function() {
		let amount = <?php echo $order_info_row['order_price'] ?>;
		let rand_number = 0;
		for (let i = 0; i <= 50; i++)
			rand_number += Math.random().toString(36).substring(0, 9);

		// window.location.replace("http://localhost/Perfectapapers_Custom_Files/PayPal/index.php?hash=" 
		// + rand_number + "&amt=" + amount + "&rand=" + rand_number);
		window.location.replace("https://perfectapaper.com/paypal/?hash=" +
			rand_number + "&amt=" + amount + "&rand=" + rand_number);
	});
</script>