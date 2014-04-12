<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Auth</title>
</head>
<body>
	{{{ ( isset($error) )? $error : '' }}}
	<form action="login" method="POST">
		<input type="text" name="login" value="{{{ ( isset($old_input['login']) )? $old_input['login'] : ''   }}}"placeholder="Please enter your login"></input>
		<br>
		<input type="password" name="password" placeholder="Please enter your password" />
		<br>
		<input type="submit">LogIn</input>
</body>
</html>