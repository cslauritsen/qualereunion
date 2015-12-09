<!DOCTYPE HTML>
<?php 
require('../inc.php');
?>
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:website="http://ogp.me/ns/website" lang="en-US" itemscope itemtype="http://schema.org/WebPage" >
<head>
    <meta http-equiv="X-UA-Compatible" content="chrome=1" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
	<base href="" />
	<meta charset="utf-8" />

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine" />
    <link rel="stylesheet" type="text/css" href="/static/style.css" />
	<title>RSVP Quale Reunion 2016</title>


<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <script>

function errmsg(msg) { 
	var ems = document.getElementById('errmsgs');
	ems.innerHTML += '<br /> ' + msg;
	ems.visible = true;
}
function validate(f) {
	var rv = true;
	var ems = document.getElementById('errmsgs');
	ems.innerHTML = '';
	if (f.elements['firstname'].value == '') {
		errmsg('firstname is a required field.');
		rv = false;
	}
	if (f.elements['lastname'].value == '') {
		errmsg('lastname is a required field.');
		rv = false;
	}
	if (f.elements['phone'].value == '') {
		errmsg('phone is a required field.');
		rv = false;
	}
	if (f.elements['email'].value == '') {
		errmsg('email is a required field.');
		rv = false;
	}
	if (f.elements['email2'].value == '') {
		errmsg('email (confirm) is a required field.');
		rv = false;
	}
	if (f.elements['children'].value == 0 && f.elements['adults'].value == 0 && !f.elements['regrets'].checked ) {
		errmsg('Please indicate the number of children and adults, or please check the box indicating you will not attend.');
		rv = false;
	}
	if (f.elements['regrets'].checked && (f.elements['adults'].value > 0 || f.elements['children'].value > 0 )) {
		errmsg("Please set children and adults to 0 if you are not planning on attending.");
		rv = false;
	}

	return rv;
}

function cbchg(e) {
	e.value = e.checked ? '1' : '0';
	return true;
}
    </script>

</head>

<body>

 <div id="top">

		<h1 id="header" class="strokeme">Quale Reunion &#9734; RSVP</h1>

		<div id="sidebar" > <img src="/static/quales300.jpg" /> </div>
		<div id="mainform">
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
	$rv = rsvp_save(1); 
	if (0 == $rv) {
?>
		Thanks for your submission

<?php
	} else {
?>
		Sorry, there was a problem recording your submission, could you please try again? (Error code: <?php echo $rv; ?>)
<?php  
        }
} else {
?>


			<form action="." method="POST" onsubmit='return validate(this);'>
			<div id="formElms">
				<div id="blurb">
			Your reponses here will help us plan the event.
			Please note, the cost to attend the event is $25 per person.
			Lodging is available at the <a href="http://www.abbeyofthehills.com/">Abbey of the Hills</a>. Please contact them at your earliest convenience to make a reservation at 605-398-9200. Other accomodations may be reserved in Milbank.
					<br />
					<br />
				</div>
				<div class="line"><input class="textbox" type="text" name="firstname" placeholder="first name" /> </div>
				<div class="line"><input class="textbox" type="text" name="lastname" placeholder="last name" /> </div>
				<div class="line"><input class="textbox" type="text" name="email" placeholder="email" /> </div>
				<div class="line"><input class="textbox" type="text" name="email2" placeholder="email (please enter again to confirm)" /> </div>
				<div class="line"><input class="textbox" type="text" name="phone" placeholder="daytime phone" /> <br clear="all" />
				<div class="line"><input type="checkbox" id="regrets" name="regrets" value="0" onchange="return cbchg(this);"/> Sorry, we will not attend. </div>
				<div class="line">Adults attending: <select name="adults" > 
								<option>0</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
								</select>
				</div>
				<div class="line">Children attending: <select name="children" > 
								<option>0</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
								</select>
				</div>
				<div class="line">
					<input class="textbox" type="text" name="challenge" placeholder="what's the sum of 2 and three?" style="width: 24.2em;"/> 
					<span style="font-size: 15px;"><a href="#" onclick="alert('We ask you to provide the answer to a simple arithmetic problem to prove that you are a person. This helps prevent our RSVP list from being overrun with machine-generated postings from computers trolling the internet.'); return false;">What's this?</a></span> 
				</div>
				<div class="line">  &nbsp; </div>
				<div class="line">  <button type="submit" >SUBMIT</button> </div>
			</div>
			</form>
		</div>
 		<div id="errmsgs" />
<?php
} 
?>
		<ul id="navlinks">
		  <li> <a href="/">Home</a>
		  <li> <a href="/rsvp/">RSVP</a>
		  <li> <a href="/activities/">Activities</a>
		</ul>
</body>

</html>
