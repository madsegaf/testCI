<!DOCTYPE html>

<html class="bg-black">
    <head>
        <meta charset="UTF-8">
       
        <title>Admin Mapres UIN 2014</title>
        <link href="<?php echo base_url("asset/img-fe/logo-uin.ico");?>" rel="shortcut icon" type="image/x-icon" />
       
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url("asset/css/bootstrap.min.css");?>" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url("asset/css/font-awesome.min.css");?>" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url("asset/css/AdminLTE.css");?>" rel="stylesheet" type="text/css" />
        
         
    </head>
    <body class="bg-black-gradient">
 
        <div class="form-box" id="login-box">
            <div class="header">
            
             <img src="<?php echo base_url("asset/img-fe/logo-uin.png");?>" height="200" width="200"/>
           
           <br /> 
         Mapres UIN 2014 Login
            
            </div>
            <form action="login/cek" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Username"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>          
                      <!--<div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                    </div>-->
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">Log in</button>  
                    
                     
                </div>
            </form>
      
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="<?php echo site_url() ?>asset/js/googleapisjquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url("asset/js/bootstrap.min.js");?>" type="text/javascript"></script>        

    </body>
</html>