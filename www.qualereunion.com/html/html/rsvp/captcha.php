<img id="captcha" src="/securimage/securimage_show.php" alt="CAPTCHA Image" />

<input type="text" name="captcha_code" size="10" maxlength="6" />

<a href="#" onclick="document.getElementById('captcha').src = '/securimage/securimage_show.php? + Math.random()'; return false;">Reload Image</a>

<br />
<hr />
'<?php echo $_SESSION['securimage_code_value']; ?>'
<hr />
