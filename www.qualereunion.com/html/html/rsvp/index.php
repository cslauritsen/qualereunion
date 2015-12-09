<!DOCTYPE HTML>
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:website="http://ogp.me/ns/website" lang="en-US" itemscope itemtype="http://schema.org/WebPage" >
  <head>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<base href="">
	<meta charset="utf-8" />

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
	<title>RSVP Quale Reunion 2016</title>
    

  </head>

<body>
<style>
* {
  margin 0; padding: 0; border 0;
  color: #bbb;
}
html {
  font-family: 'Roboto', sans-serif;
	font-size: 18px;
}

body {
	background-color: #252221;
}
#header {
	background-color: #333;
	width: 100%;
	height: 8em;
	text-align: center;
	vertical-align: middle;
	font-family: 'Tangerine', serif;
}

.strokeme
{
    color: #bbb;
    text-shadow:
    -1px -1px 0 #fff,
    1px -1px 0 #fff,
    -1px 1px 0 #fff,
    1px 1px 0 #fff;
    font-size: 80px;
	font-weight: bold;
}


#content {
 width: 100%;
 height: 600px;
 padding: 0;
}

div#content div {
 display: inline;
 float: left;
 margin: 5px 5px 5px 5px;
 height: 95%;
}

.sidebar {
 width: 24%;
 height: 100%;
}

#cmid {
 width: 50%;
 height: 100%;
}

.sidebar img {
	position: relative;
	top: 150px;
	left: 180px
}

h1 {
	width: 100%;
}

input, select {
	background-color: #777;
	font-family: 'Roboto';
	font-size: 18px;
}
button {
	font-size: 18px;
	background-color: #777;
	font-family: 'Roboto';
	width: 150px;
}
select {
	width: 100px;
	height: 1.5em;
	text-align: right;
}
input {
	width: 30em;
	height: 1.5em;
	color: #bbb;
}
table {
	position: relative;
	left: 50px;
	top: 200px;
}
td {
	text-align: right;
	color: #bbb;
}
</style>


 <div id="top">

	<div id="header">
		<h1 class="strokeme">Quale Reunion &#9734; RSVP</h1>
	</div>

	<div id="content">
		<div id="cleft" class="sidebar">
  			<img src="/static/quales300.jpg" />
		</div>
		<div id="cmid">
			<form action="/cgi-bin/formail" method="POST">
				<table>
					<tbody>
						<tr> <td colspan="2"> <input type="text" name="lastname" placeholder="first name" /> </td> </tr>
						<tr> <td colspan="2"> <input type="text" name="firstname" placeholder="last name" /> </td> </tr>
						<tr> <td colspan="2"> <input type="text" name="email" placeholder="email" /> </td> </tr>
						<tr> <td colspan="2"> <input type="text" name="email2" placeholder="email (please eneter again to confirm)" /> </td> </tr>
						<tr> <td colspan="2"> <input type="text" name="phone" placeholder="daytime phone" /> </td> </tr>
						<tr> 
							<td> 
								<input type="checkbox" id="regrets" name="regrets" /> Sorry, we will not attend.
							</td>
							<td> 
							<p>Adults attending: 
							<select name="adults" > 
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
							</p>
							<p>
							 Children attending: 
							<select name="children" > 
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
							</p>
							</td> 
						</tr>
						<tr> <td> <input type="text" name="challenge" value="what's the sum of 2 and three?" style="width: 24.2em;"/> </td> 
							<td><span style="font-size: 15px;"><a href="#" onclick="alert('We ask you to provide the answer to a simple arithmetic problem to prove that you are a person. This helps prevent our RSVP list from being overrun with machine-generated postings from computers trolling the internet.'); return false;">What's this?</a></span></td> 
						</tr>
						<tr> <td colspan="2"> &nbsp; </td> </tr>
						<tr> <td colspan="2"> <button type="submit" >SUBMIT</button> </td> </tr>
					</tbody>
				</table>
			</form>
		</div>
		<div id="cright" class="sidebar">
		</div>
	</div>
	

 <div>
</body>

</html>
