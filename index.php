﻿<!DOCTYPE html>
<HTML>
	<HEAD>
		<TITLE>SnapCat</TITLE>
		<link href="snapchat.css" rel="stylesheet" type="text/css">
	</HEAD>
	<BODY style="background-color:#B4A9F5;">
		<?php exec("python cat2.py") ?>
		<h1 class="auto-style1">Snap-cats</h1>
		<img CLASS="displayed" SRC="./cat.jpg" alt="sweet cat">
		<form action="file_upload.php" method="post" enctype="multipart/form-data">
	<!--	<br /><input type="text" name="user" class="in" placeholder="Your Username" />
        <br /><input type="password" name="pass" class="in" placeholder="Your Password"/>    -->
        <br /><input type="text" name="friendUser" class="in" placeholder ="Friend's Username"/>
        <br /><input type="file" name="file" id="fileID" style="visibility:hidden"/>
        <input type="button" class="button" onclick="document.getElementById('fileID').click(); this.value='Cat Chosen'; return false;" value="Choose a cat or leave it blank for a random cat: "/>
        <br /><input type="submit" value="Let There Be Cats" class="sub"/>
    	</form>
	</BODY>
</HTML>