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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        
        
        

    </head>
    <body class="container-fluid">
        <?php $this->load->view('partials/header') ?>
        <section id="home" class="col-md-12">
            <div>
                <h2>Yard to Table:</h2>
                <img src="">
                <div>
<?php       if ($this->session->flashdata('check_error')) {
                echo $this->session->flashdata('check_error'). "<br>";
            }
?>
                <p>CHECK TO SEE IF LETTUS IS AVAILABLE IN YOUR AREA:</p>
                <form method="post" action="/main/check">
                    <input type="text" id="address" name="address" placeholder="address">
                    <input type="text" id="zipcode" name="zipcode" placeholder="zipcode">
                    <input type="submit" value="search">
                </form>
            </div>
            </div>
        </section>
        
        <section id="wwd" class="col-md-12">
            <div>
                <h2>What we do:</h2>
                <div class="col-md-4">
                    <h3>Install</h3>
                    <img src="" class="home_img">
                </div>
                <div class="col-md-4">
                    <h3>Tend</h3>
                    <img src="">
                </div>
                <div class="col-md-4">
                    <h3>Harvest</h3>
                    <img src="">
                </div>

            </div>

            
        </section>

        
       
        <section id="beyond" class="col-md-12">
            <div>
                <h2>... and Beyond</h2>
                <img src="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Donec maximus consequat lacinia. Aenean placerat, sem ut euismod eleifend, 
                    felis lorem accumsan libero, eu consequat tellus elit eget nisi. 
                    Pellentesque rutrum non mauris a consequat. 
                    Fusce interdum sapien risus, ut porttitor purus efficitur vel. 
                    Suspendisse nec ante luctus, tincidunt augue quis, aliquam lectus. 
                    Donec sit amet vehicula nisl. Integer aliquet laoreet ex non facilisis. 
                    Cras molestie sollicitudin felis, non finibus massa semper eu. 
                    Cras lacus ante, porta maximus neque in, vulputate gravida eros. 
                    Donec quis rutrum mi. Ut congue neque eu justo mattis, a bibendum odio euismod.
                </p>
            </div>        
        </section>
        
        <section id="price" class="col-md-12">
            <div>
                <h2>Pricing Structure</h2>
                <img src="" class="col-md-5">
                <div>
                    <p>$0 down</p>
                    <p>$120/month sub</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Donec maximus consequat lacinia. Aenean placerat, sem ut euismod eleifend, 
                    felis lorem accumsan libero, eu consequat tellus elit eget nisi. 
                    Pellentesque rutrum non mauris a consequat. 
                    Fusce interdum sapien risus, ut porttitor purus efficitur vel.</p>
                </div>
            </div>
        </section>

    </body>
</html>