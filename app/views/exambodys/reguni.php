<?php require APPROOT . '/views/inc/admheader.php'; ?>
        <!-- main content start-->
<div id="page-wrapper">
    <div class="main-page">

        <div class="grids widget-shadow">
<div class="container bootstrap snippet">
    <div class="row">
        <!--<div class="col-sm-10"><h1>User name</h1><br><h4>Job Title</h4></div>-->
            <!-- COMpany LOGO--> 
        <!--<div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" style="position: absolute;
              left: 0px; top: 0px; width: 120px; height: 120px;"
                 class="img-circle img-responsive" src="<?php// echo URLROOT ?>/images/complogo.png"></a></div>-->
    </div>
    <div class="row">
        
        <div class="col-sm-8">

            <ul class="nav nav-tabs">
                            <br><br><br>
                <li class="active"><a data-toggle="tab" href="#home">Register University</a></li>
              </ul>


          <div class="tab-content">
            <div class="tab-pane active" id="home">

                                <!-- Extended material form grid -->
                                <form action="<?php echo URLROOT; ?>/exambodys/reguni" method="post">

                                    <i class="fa fa-address-card fa-1x"></i>&nbsp;<h2>Register</h2>
                                    <hr>
                                   
                                    <div class="form-row">
                                        <!-- Grid column -->
                                        <div class="col-md-4">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                                <input type="text" class="form-control" name="uniname" id="inputFirstNameMD" value="">
                                                <label for="inputFirstNameMD">University Name</label>
                                            </div>
                                        </div><br>

                                        <!-- Grid column -->
                                        <div class="col-md-4">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                                <input type="text" class="form-control" name="uname" id="inputFirstNameMD" value="">
                                                <label for="inputFirstNameMD">Username</label>
                                            </div>
                                        </div>

                                        <!-- Grid column -->
                                  </div><br>
                                  <!-- Grid row -->
                                    <!-- Grid row --><br>
                                    <div class="form-row">
                                        <!-- Grid column -->
                                        <div class="col-md-8">
                                                <!-- Material input -->
                                                <div class="md-form form-group">
                                                        <input type="password" class="form-control" name="pass" id="inputPhoneMD" value="">
                                                        <label for="inputPhoneMD">Password</label>
                                                </div>
                                        </div>
                                        <!-- Grid column -->
                                           

                                </div><br>
                                <div class="form-row">
                                       <!-- Grid column -->
                                        <div class="col-md-8">
                                                <!-- Material input -->
                                                <div class="md-form form-group">
                                                        <input type="password" class="form-control" name="cpass" id="inputPhoneMD" value="">
                                                        <label for="inputPhoneMD">Confirm Password</label>
                                                </div>
                                        </div>
                                        <!-- Grid column -->

                            </div><br>
                                

                                    <input type="submit" class="btn btn-primary btn-md pull-right" value="Save" id="sub">
                                </form>


             </div><!--/tab-pane-->
             
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
        </div>

    </div>
</div>
<?php require APPROOT . '/views/inc/admfooter.php'; ?>
 
