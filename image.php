<!DOCTYPE html>
<html>
<head>
	<title>Image Upload Using PHP</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
	</style>
</head>
<body>
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="upload.php" method="post" enctype="multipart/form-data">

           <input type="file" name="my_image">
          <button> <a  href="main2.php">back to main page</a></button>
           <input type="submit"  name="submit" value="Upload">
     	
     </form>
</body>
</html>