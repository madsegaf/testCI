<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dashboard Admin MAPRES UIN 2014</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

      <link href="<?php echo base_url("asset/img-fe/logo-uin.ico");?>" rel="shortcut icon" type="image/x-icon" />
          <!-- bootstrap 3.0.2 -->
        <link href="<?php echo site_url() ?>asset/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo site_url() ?>asset/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo site_url() ?>asset/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo site_url() ?>asset/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo site_url() ?>asset/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="<?php echo site_url() ?>asset/css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo site_url() ?>asset/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo site_url() ?>asset/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo site_url() ?>asset/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="<?php echo base_url();?>dashboard" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                MAPRES UIN 2014
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><!--Jane Doe --><i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                              <li class="user-header bg-light-blue">
                                  <p>

                                       Welcome
                                        <br>
                                       <?php echo $this->session->userdata('username');?>
                                       <br> 
                                  </p>
                              </li>
                              <!-- Menu Footer-->
                              <li class="user-footer">
                                  <div class="pull-left">
                                      <a href="<?php echo base_url()?>login/logout" class="btn btn-default btn-flat">Sign Out</a>
                                  </div>
                              </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left info">
                            
 
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li>
                            <a href="<?php echo base_url();?>admmprs/dashboard">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                           <a href="<?php echo base_url();?>admmprs/articlesMpltd">
                                <i class="fa fa-file-text-o"></i> <span>Articles</span>
                            </a>
                        </li>
                        
                        <li  class="active">
                            
                            <a href="#">
                                <i class="fa fa-picture-o"></i>
                                <span>Photos Gallery</span>                                
                            </a>

                        </li> 
                        <li>
                            <a href="<?php echo base_url();?>admmprs/feedbackMpltd">
                                <i class="fa fa-comments"></i>
                                <span>Feedback</span>                                
                            </a>
                        </li>

                        <?php if($this->session->userdata('level')=="superadmin"){ ?>

                                 <li>
                                <a href="<?php echo base_url();?>admmprs/register_user">
                                    <i class="fa fa-user"></i>
                                    <span>Register User</span>                                
                                </a>
                                 </li>
 
                          <?php } ?>
                        <!-- <li>
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Data Digital</span>
                            </a>
                        </li> -->
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Hello <?php echo $this->session->userdata('username');?> (<?php echo $this->session->userdata('level');?>)
                    </h1>
                    
                </section>

                <!-- Main content -->
                <section class="content">

                   
                       
                            <div class="panel-body">
                                <center>
                                    <h2><?php echo $judul; ?></h2>
                                </center>
                        <a href="<?php echo base_url();?>admmprs/addphoto"><i class="fa fa-plus-square"></i>&nbsp;Add Photo</a>
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <td align="center"><b>NO</b></td>
                                    <td align="center"><b>Photo Title</b></td>
                                    <td align="center"><b>Photo File</b></td>
                                    <td align="center"><b>Posted By</b></td>
                                    <td align="center"><b>Action</b></td>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no=0;
                                foreach ($data_gallery as $u){ ?>
                                <tr>
                                    <td align="center"><?php echo $no=$no+1; ?></td>
                                    <td><?php echo $u->photo_title; ?></td>
                                    <td><img src="<?php echo $u->photo_file; ?>" width="50%"></td>
                                    <td><?php echo $u->username; ?></td>
                                    <td align="center">
                                        <a class="btn btn-small fa fa-trash-o" href="<?php echo base_url();?>admmprs/deletephoto/<?php echo $u->id_photo; ?>" onClick="return confirm('Are you sure you want to delete this photo?')"></a></td> 
                                </tr>
                            <?php } ?>

                            </tbody>
                        </table>
                    </div>
 
                 <!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>-->
        <script src="<?php echo site_url() ?>asset/js/googleapisjquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo site_url() ?>asset/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo site_url() ?>asset/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo site_url() ?>asset/js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?php echo site_url() ?>asset/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo site_url() ?>asset/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="<?php echo site_url() ?>asset/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo site_url() ?>asset/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo site_url() ?>asset/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="<?php echo site_url() ?>asset/js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo site_url() ?>asset/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo site_url() ?>asset/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="<?php echo site_url() ?>asset/js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo site_url() ?>asset/js/AdminLTE/dashboard.js" type="text/javascript"></script>

        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo site_url() ?>asset/js/AdminLTE/demo.js" type="text/javascript"></script>

    </body>
</html>