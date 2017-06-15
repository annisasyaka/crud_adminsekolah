<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * Login: Mangrove
 * Date: 22/05/2017
 * Time: 18.31
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login - Sekolahku</title>


    <link href="<?php echo base_url('assets'); ?>/css/cari.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets'); ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets'); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets'); ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url('assets'); ?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url('assets'); ?>/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- Animate.css -->
    <link href="<?php echo base_url('assets'); ?>/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets'); ?>/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>
        <div class="login_wrapper" >
            <div class="animate form login_form" >
                <section class="login_content">
                    <form action="<?php echo base_url('login_sekolah/cek_login'); ?>" method="post">
                        <div class="row">
                            <div class="col-md-20">
                                <div class="x_panel" >
                                    <h1>Masuk</h1>
                                    <div>
                                        <input name="username" type="text" class="form-control" placeholder="Username" required="" />
                                    </div>
                                    <div>
                                        <input name="password" type="password" class="form-control" placeholder="Password" required="" />
                                    </div>
                                    <div>
                                        <input style="text-align: left;" type="checkbox" name="remember">  ingat saya</input>
                                    </div>
                                    <div>
                                        <br><button class="btn btn-primary btn-lg" type="submit">Masuk</button></br>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="separator">
                                      
                                        <div class="clearfix"></div>
                                        <br />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</div> 
</body>
</html>

