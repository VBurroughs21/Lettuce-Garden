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
            <h2>We're not there . . . yet!</h2>
            <p>But we're working hard to bring Lettuce to your backyard</p>
        </div>
        <div>
            <p>Lettuce contact you when we're in your neighborhood:</p>
<?php       if ($this->session->flashdata('email')) {
                echo $this->session->flashdata('email');
            }
?>
            <form method="post" action="/main/email">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                </div>
                <button type="submit" class="btn btn-success">Sign Up</button>
            </form>
        </div>

    </body>









