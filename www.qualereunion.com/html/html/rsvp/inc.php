<?php

$db_name = "rsvps";
$db_user = "quale";
$db_pass = "phr33kz";

function check_email_address($email) {
  // First, we check that there's one @ symbol, 
  // and that the lengths are right.
  if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
    // Email invalid because wrong number of characters 
    // in one section or wrong number of @ symbols.
    return false;
  }
  // Split it into sections to make life easier
  $email_array = explode("@", $email);
  $local_array = explode(".", $email_array[0]);
  for ($i = 0; $i < sizeof($local_array); $i++) {
    if
(!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&
.'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$",
$local_array[$i])) {
      return false;
    }
  }
  // Check if domain is IP. If not, 
  // it should be valid domain name
  if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) {
    $domain_array = explode(".", $email_array[1]);
    if (sizeof($domain_array) < 2) {
        return false; // Not enough parts to domain
    }
    for ($i = 0; $i < sizeof($domain_array); $i++) {
      if
(!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|
.([A-Za-z0-9]+))$",
$domain_array[$i])) {
        return false;
      }
    }
  }
  return true;
}

function captcha_init() {
  $val = 'ALPHA'; 
  $_SESSION['captcha'] = $val;
  return $val;
}

function captcha_check($userval) {
 return strtolower($userval) == strtolower($_SESSION['captcha']);
}

function rsvp_save($event) {
	$ret = 0;
	if (! captcha_check(trim($_REQUEST['captcha']))) {
		return 3;
	}
	if (! strtolower(trim($email)) != strtolower(trim($email2))) {
		return 4;
	}
	if (!  check_email_address($email)) {
		return 5;
	}
	$regrets = $_REQUEST['regrets'];
	$regrets = is_null($regrets) ? 'FALSE' : 'TRUE';

	$conn = mysql_connect('localhost', $db_user, $db_pass);
	if ($conn) {
		mysql_select_db($db_name);
		$sql = sprintf("select count(*) from rsvps where email='%s' and event_id=1"
			, mysql_real_escape_string($_REQUEST['email'])
		);
		$rs = mysql_query($sql);
		if (mysql_result($rs, 0) == 0) {
			$sql = sprintf("insert into rsvps ("
				+ "event_id,email,firstname,lastname,adults,children"
				+ ") values ("
				+ "1, '%s', '%s', '%s', '%s', %d, %d, '%s'"
				+ ")"
        			, mysql_real_escape_string($_REQUEST['email'])
        			, mysql_real_escape_string($_REQUEST['firstname'])
				, mysql_real_escape_string($_REQUEST['lastname'])
				, $regrets
				, $_REQUEST['adults']
				, $_REQUEST['children']
				, $_REQUEST['phone']
			);
			mysql_query($sql);
			$last_id = mysql_insert_id();
			if ($last_id <= 0) {
				$ret = 2;
			}
		}
		else {
			$sql = sprintf("update rsvps set "
				+ "  firstname='%s' "
				+ " ,lastname='%s' "
				+ " ,regrets='%s' "
				+ " ,adults=%d "
				+ " ,children=%d "
				+ " ,phone='%s' "
				+ " ,updated=CURRENT_TIMESTAMP "
				+ " WHERE email='%s' and event_id=1 "
        			, mysql_real_escape_string($_REQUEST['firstname'])
				, mysql_real_escape_string($_REQUEST['lastname'])
				, $regrets
				, $_REQUEST['adults']
				, $_REQUEST['children']
        			, mysql_real_escape_string($_REQUEST['phone'])
			);
			mysql_query($sql);
		}
		mysql_close($conn);
	}
	else {
		$ret = 1;
	}
	return $ret;
}

?>
