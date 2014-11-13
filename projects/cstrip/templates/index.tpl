<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
		<html>
		<head>
		<meta content="text/html; charset=ISO-8859-1"
		http-equiv="content-type">
		<title>index.php</title>
		<link rel=\"stylesheet\" href=\"css/style1.css\">
		</head>
		<body>
		<br><br><br>
		&nbsp;
		<table
		style="width: 350px; height: 56px; text-align: left; margin-left: auto; margin-right: auto;"
		border="0" cellpadding="10" cellspacing="5">
		<tbody>
		<br><br>
		{foreach from=$options item=value key=key}
			<tr><th style="white-space: nowrap; text-align: center; vertical-align: middle;">
			<a href={$value} target="_self">{$key|capitalize:true}</a></th></tr>
		{/foreach}
