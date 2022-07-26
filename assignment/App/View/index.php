<!DOCTYPE html>
<html lang="en">
<head>
	 <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- X3dom -->
    <link rel='stylesheet' type='text/css' href='App/css/x3dom.css'>

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="App/css/all.css">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'> 

    <!-- Use a light box to view images in the gallery -->
    <link rel="stylesheet" type="text/css" href="App/css/jquery.fancybox.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="App/css/bootstrap.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="App/css/custom.css">

	<title>3D Mobile App</title> 
</head>
<body>

    <!-- Header -->
    <?php include 'includes/header.php'; ?>

    <!-- Start 3D App SPA Contents -->
    <div class="container-fluid main_contents">

    <?php 
    include 'Pages/Home.php';
    include 'Pages/Models.php';
    ?>
    

    </div>
    	

    <!-- Footer -->
    <?php 
    include 'includes/footer.php'; 
    include 'includes/modals.php';
    include 'includes/scripts.php';
    ?>


</body>
</html>