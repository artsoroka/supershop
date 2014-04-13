<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Auth</title>
</head>
<body>
	{{{ ( isset($error) )? $error : '' }}}
	Welcome, {{{ Auth::user()->username }}}
<br>
<br>
<a href="/admin/categories">Categories</a>
<br>
<a href="/admin/products">Products</a>
</body>
</html>
