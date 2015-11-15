<!DOCTYPE html>
<html lang="en">
    <head>
    	<title>Lettuce Garden</title>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">


        <!-- Bootstrap -->
        <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body class="container-fluid">
    	<?php $this->load->view('partials/header') ?>
    	<div>
    		<h2>
<?php       if ($this->session->flashdata('available')) {
                echo $this->session->flashdata('available');
            }
?>
			</h2>
    		<h3>Reserve your spot now:</h3>
<?php       if ($this->session->flashdata('reg_error')) {
                echo $this->session->flashdata('reg_error'). "<br>";
            }
?>
	    	<form method="post" action="/main/create" class="col-md-6">
	            <div class="form-group">
	                <label for="first_name">First Name:</label>
	                <input type="text" class="form-control" id="first_name" name="first_name">
	            </div>
	            <div class="form-group">
	                <label for="last_name">Last Name:</label>
	                <input type="text" class="form-control" id="last_name" name="last_name">
	            </div>
	            <div class="form-group">
	                <label for="address">Address:</label>
	                <input type="text" class="form-control" id="address" name="address" 
	                value="
	                <?php if ($this->session->flashdata('address')) {
                echo $this->session->flashdata('address');}?>">
	            </div>
	            <div class="form-group">
	                <label for="zipcode">Zipcode:</label>
	                <input type="zipcode" class="form-control" id="zipcode" name="zipcode"
	                value="
	                <?php if ($this->session->flashdata('zipcode')) {
                echo $this->session->flashdata('zipcode');}?>">
	            </div>
	            <div class="form-group">
	                <label for="email">Email Address:</label>
	                <input type="email" class="form-control" id="email" name="email">
	            </div>
	            <button type="submit" class="btn btn-success">Sign Up</button>
	        </form>
	        <img src="">
        </div>

    </body>