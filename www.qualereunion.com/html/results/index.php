<!DOCTYPE HTML>
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:website="http://ogp.me/ns/website" lang="en-US" itemscope itemtype="http://schema.org/WebPage" >
<head>
    <meta http-equiv="X-UA-Compatible" content="chrome=1" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
	<base href="" />
	<meta charset="utf-8" />

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine" />
    <link rel="stylesheet" type="text/css" href="/static/style.css" />
	<title>Results * Quale Reunion 2016</title>


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
</head>

<body>

 <div id="top">

		<h1 id="header" class="strokeme">Quale Reunion &#9734; Results</h1>

	<table style="border: 1px solid white;">
		<thead>
			<th>Email</th>
			<th>Lastname</th>
			<th>Firstname</th>
			<th>Adults</th>
			<th>Children</th>
			<th>Regrets</th>
			<th>RSVPed On</th>
		</thead>
		<tbody>
<?php
	$conn = mysql_connect('localhost', 'quale', 'phr33kz');
		mysql_select_db('rsvps');
		$sql = "select * from rsvps";
		$rs = mysql_query($sql);
		while($row = mysql_fetch_assoc($rs)) {
			echo "<tr>\n";
			echo "<td>". $row['email']. "</td>\n"; 
			echo "<td>". $row['lastname']. "</td>\n"; 
			echo "<td>". $row['firstname']. "</td>\n"; 
			echo "<td style='text-align: right;'>". $row['adults']. "</td>\n"; 
			echo "<td style='text-align: right;'>". $row['children']. "</td>\n"; 
			echo "<td>". ($row['regrets'] == 0 ? 'N' : 'Y'). "</td>\n"; 
			echo "<td>". $row['created']. " Eastern </td>\n"; 
			echo "</tr>\n";
		}
		mysql_free_result($rs);

?>

		</tbody>
	</table>
<?php
		$sql = "select sum(adults) grownups, sum(children) kids from rsvps";
		$rs = mysql_query($sql);
		while($row = mysql_fetch_assoc($rs)) {
			echo 'Total Adults: '. $row['grownups']. ', Total children: '. $row['kids']. ', Total persons: '. ($row['grownups'] + $row['kids']). '.';
		}
		mysql_free_result($rs);
		mysql_close($conn);

?>	
		<ul id="navlinks">
		  <li> <a href="/">Home</a>
		  <li> <a href="/rsvp/">RSVP</a>
		  <li> <a href="/activities/">Activities</a>
		</ul>
</body>

</html>
