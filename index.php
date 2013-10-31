<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf8" >
		<title>My Amazon</title>
	</head>
	<body>
		<h1>Hi There, Let's share something exciting :D</h1>
		<form action="upload_file.php" method="post" enctype="multipart/form-data">
			<p>
				<label for="username">Your name:</label>
				<input type="text" name="user_name" id="txt_user">
			</p>
			<p>
				<label for="file">Filename:</label>
				<input type="file" name="file" id="file">
			</p>
			<p><input type="submit" name="submit" value="Submit"></p>
		</form>
	</body>
</html>