<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>zoho</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="style2.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky top">
 <div class="container-fluid">
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
         <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav ml-auto">
             <li class="nav-item active">
                 <a class="nav-link" href="welcome.php">Home</a>
             </li>
            <li class="nav-item">
                <a class="nav-link" href="contact2.php">Contact book</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">logout</a>
            </li>
         </ul>
     </div>
 </div>

</nav>



<section class="contact">
        <div class="content">
            <h1 style="text-decoration:none;">&nbsp;&nbsp;&nbsp;SAVE CONTACT.</h2>
                <br>
                <br>
            <h2 style="font-family: sans-serif;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Save your contact safer than before<br>
                </div>
    <div class="container">

            <div class="row">
                <div class="col-md-12"></div>
                <div class="col-md-12">

                    <h2 style="text-decoration: underline; ">Contacts</h2>
                    
                    <?php session_start(); ?>
                    <?php if (isset($_SESSION['success'])): ?>
                        <div class="alert alert-primary" role="alert">
                            Succesfully saved contact!!
                        </div>
                    <?php endif; ?>

                    <form role="form" class="contact-form" action="data.php" method="post">


                        <?php if (isset($_SESSION['error'])): ?>
                            <div class="alert alert-warning"><?php echo $_SESSION['error']; ?></div>
                        <?php endif; ?>
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" autocomplete="off" id="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <input type="email" class="form-control" name="contact-email" autocomplete="off" id="contact-email" placeholder="E-mail">
                                </div>
                            </div>
                        </div>
                            <div class="col-md-12">

                                <div class="form-group">
                                    <input type="tel" class="form-control" name="phone" autocomplete="off" id="phone" placeholder="Phone number">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="save" class="btn get-start">Save contact</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
</div>

    </section>

            </p>
        </div>
