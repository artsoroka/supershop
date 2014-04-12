<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Auth</title>
</head>
<body>
	{{{ ( isset($error) )? $error : '' }}}
	Welcome, {{{ Auth::user()->username }}}
</body>
</html>