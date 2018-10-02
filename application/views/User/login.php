<?php
if (isset($this->session->userdata['user_id'])) {
redirect('user/user_profile');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login/Signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url('assets'); ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/fonts/iconic/css/material-design-iconic-font.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel with-nav-tabs panel-info login-panel panel panel-success">
                <div class="panel-heading">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#login" data-toggle="tab"> Login </a></li>
                        <li><a href="#signup" data-toggle="tab"> Signup </a></li>
                    </ul>
                </div>
                <?php
              $success_msg= $this->session->flashdata('success_msg');
              $error_msg= $this->session->flashdata('error_msg');

                  if($success_msg){
                    ?>
                    <div class="alert alert-success">
                      <?php echo $success_msg; ?>
                    </div>
                  <?php
                  }
                  if($error_msg){
                    ?>
                    <div class="alert alert-danger">
                      <?php echo $error_msg; ?>
                    </div>
                    <?php
                  }
                  ?>
                <!--panel body-->
                <div class="panel-body">
                    <div class="tab-content">
                        <div id="login" class="tab-pane fade in active register">
                            <div class="container-fluid">
                                <div class="row">
                                    <h2 class="text-center" style="color: #5cb85c;"> <strong> Login  </strong></h2>
                                    <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
                                    <form role="form" action="<?php echo base_url('user/login_user'); ?>" method="post">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <span class="glyphicon glyphicon-envelope"></span>
                                                    </div>
                                                    <input type="email" placeholder="E-mail" name="user_email" class="form-control" autofocus>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <span class="glyphicon glyphicon-lock"></span>
                                                    </div>

                                                    <input type="password" placeholder="Password" name="user_password" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <input type="checkbox" name="check" checked> Remember Me
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <a href="#forgot" data-toggle="modal"> Forgot Password? </a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <button type="submit" class="btn btn-success btn-block btn-lg" name="login"> Login </button>
                                        </div>
                                    </div>
                                  </form>
                                </div>
                            </div>
                        </div>
                        <!--signup form-->
                        <div id="signup" class="tab-pane fade">
                            <div class="container-fluid">
                                <div class="row">
                                    <h2 class="text-center" style="color: #f0ad4e;"> <Strong> Register </Strong></h2> <hr />
                                    <?php
                                    $error_msg=$this->session->flashdata('error_msg');
                                    if($error_msg){
                                      echo $error_msg;
                                    }
                                     ?>
                                    <form  role="form" action="<?php echo base_url('user/register_user'); ?>" method="post">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon iga1">
                                                        <span class="glyphicon glyphicon-user"></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Enter User Name" name="user_name" autofocus>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon iga1">
                                                        <span class="glyphicon glyphicon-envelope"></span>
                                                    </div>
                                                    <input type="email" class="form-control" placeholder="Enter E-Mail" name="user_email" autofocus>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon iga1">
                                                        <span class="glyphicon glyphicon-lock"></span>
                                                    </div>
                                                    <input type="password" class="form-control" placeholder="Enter Password" name="user_password" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon iga1">
                                                        <span class="glyphicon glyphicon-heart-empty"></span>
                                                    </div>
                                                    <input type="number" class="form-control" placeholder="Enter Age" name="user_age" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon iga1">
                                                        <span class="glyphicon glyphicon-phone"></span>
                                                    </div>
                                                    <input type="number" class="form-control" placeholder="Enter Mobile_No" name="user_mobile" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-block btn-warning"> Register</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="txt1 text-center p-t-54 p-b-20">
                          						<span>
                          							Or Sign Up Using
                          						</span>
                          					</div>
                                    <!-- signup with social medias -->
                          					<div class="flex-c-m">
                          						<a href="#" class="login100-social-item bg1">
                          							<i class="fa fa-facebook pr-1"></i>
                          						</a>

                          						<a href="#" class="login100-social-item bg2">
                          							<i class="fa fa-twitter"></i>
                          						</a>

                          						<a href="#" class="login100-social-item bg3">
                          							<i class="fa fa-google"></i>
                          						</a>
                          					</div>
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--recover password modal-->
<div class="modal fade" id="forgot">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss='modal' aria-hidden="true"><span class="glyphicon glyphicon-remove"></span></button>
                <h4 class="modal-title" style="font-size: 32px; padding: 12px;"> Recover Your Password </h4>
            </div>

            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon iga2">
                                        <span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Enter Your E-Mail ID" name="email">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon iga2">
                                        <span class="glyphicon glyphicon-lock"></span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Enter Your New Password" name="newpwd">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-success"> Save <span class="glyphicon glyphicon-saved"></span></button>

                    <button type="button" data-dismiss="modal" class="btn btn-lg btn-default"> Cancel <span class="glyphicon glyphicon-remove"></span></button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
