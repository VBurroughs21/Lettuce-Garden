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

        <link rel="stylesheet" type="text/css" href="/assets/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        
        
        

    </head>
    <body class="container-fluid">
        <?php $this->load->view('partials/header') ?>
        <section id="home" class="col-md-12">
            <div class="text-center">
                <h1>Yard to Table</h1>
                <h3>A neighborhood farm in your backyard</h3>
                <img src="">
                <div>
<?php       if ($this->session->flashdata('check_error')) {
                echo $this->session->flashdata('check_error'). "<br>";
            }
?>
                
                <form method="post" action="/main/check">
                    <input type="text" id="address" name="address" placeholder="Address">
                    <input type="text" id="zipcode" name="zipcode" placeholder="Zipcode"><br>
                    <input type="submit" class="btn btn-default" value="CHECK AVAILABILITY" id="cabtn">
                </form>
            </div>
            </div>
        </section>
        
        <section id="wwd" class="col-md-12">
            <div>
                <h2 class="hip">WHAT WE DO</h2>
                
                <div class="col-md-4 text-center">
                    <img src="/assets/images/install.png" class="img-rounded img-responsive ith">
                    <h3 class="green">Install</h3>
                    <p>We will install a vegetable garden designed specifically for your backyard. </p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="/assets/images/tend.png" class="img-rounded img-responsive ith">
                    <h3 class="green">Tend</h3>
                    <p>We will tend, water, and nurture the garden for you.</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="/assets/images/harvest.png" class="img-rounded img-responsive ith">
                    <h3 class="green">Harvest</h3>
                    <p>We will harvest and sell
the produce, splitting the profits with
you.</p>
                </div>

            </div>

            
        </section>

        
       
        <section id="beyond" class="col-md-12">
            <div>
                <img src="/assets/images/savesomeforyourself.png" class="col-md-5" id="savesome">
                <div class="pull-right col-md-7 text-center" id="savetext">
                    <h2 class="hip">SAME SOME FOR YOURSELF</h2>
                    <p>Before we harvest, tell us
                        what you want to keep and we'll 
                        box up beautiful, fresh veggies for 
                        you and your family to enjoy.
                    </p>
                    <p>Beyond delivering the best food possible, 
                        Lettuce enables you and your family to experience 
                        the natural process of gardening. 
                        We keep you informed about what’s growing, what to expect, 
                        water usage, yield expectation, surplus status, and more.</p>
                        <p>Sign up today!</p>
                </div>
            </div>        
        </section>
        
    </body>
</html>