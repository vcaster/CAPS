<?php require APPROOT . '/views/inc/stdheader.php'; ?>
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
        <div class="col-sm-3"><!--left col-->

    
      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <!-- <h6>Upload a different photo...</h6>
                <input type="file"> -->
      </div><hr>

        </div><!--/col-3-->
        <div class="col-sm-8">

            <ul class="nav nav-tabs">
                            <br><br><br>
                <li class="active"><a data-toggle="tab" href="#home">Student info</a></li>
                
              </ul>


          <div class="tab-content">
            <div class="tab-pane active" id="home">

                                <!-- Extended material form grid -->
                                <form action="<?php echo URLROOT; ?>/students/profile" method="post">
                                    <?php flash('post_message');  ?>
                                    <i class="fa fa-address-card fa-1x"></i>&nbsp;<h2>Bio</h2>
                                    <hr>
                                    <!-- Grid row --><br>
                                    <div class="form-row">
                                        <!-- Grid column -->
                                        <div class="col-md-4">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                                <input disabled type="text" class="form-control" name="fname" id="inputFirstNameMD" value="<?php echo $data['std']->firstName; ?>">
                                                <label for="inputFirstNameMD">First Name</label>
                                            </div>
                                        </div>
                                        <!-- Grid column -->

                                                <!-- Grid column -->
                                        <div class="col-md-4">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                                <input disabled type="text" class="form-control" name="mname" id="inputMiddleNameMD" value="<?php echo $data['std']->middleName; ?>">
                                                <label for="inputMiddleNameMD">Middle Name</label>
                                            </div>
                                        </div>
                                        <!-- Grid column -->

                                                <!-- Grid column -->
                                        <div class="col-md-4">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                                <input disabled type="text" class="form-control" name="lname" id="inputLastNameMD" value="<?php echo $data['std']->lastName; ?>">
                                                <label for="inputLastNameMD">Last Name</label>
                                            </div>
                                        </div>
                                        <!-- Grid column -->
                                  </div><br>
                                  <!-- Grid row -->
                                    <!-- Grid row --><br>
                                    <div class="form-row">
                                        <!-- Grid column -->
                                        <div class="col-md-4">
                                                <!-- Material input -->
                                                <div class="md-form form-group">
                                                        <input type="text" class="form-control" name="phonen" id="inputPhoneMD" value="<?php echo $data['std']->phoneno; ?>">
                                                        <label for="inputPhoneMD">Phone</label>
                                                </div>
                                        </div>
                                        <!-- Grid column -->
                                            <!-- Grid column -->
                                            <div class="col-md-4">
                                                    <!-- Material input -->
                                                    <div class="md-form form-group">
                                                            <input disabled type="text" class="form-control" name="birthDate" id="inputBirthDateMD" value="<?php echo $data['std']->dateOfBirth; ?>">
                                                            <label for="inputBirthDateMD">BirthDate</label>
                                                    </div>
                                            </div>
                                            <!-- Grid column -->
                                            <div class="col-md-2">
                                                    <!-- Material input -->
                                                    <div class="md-form form-group">
                                                        <!-- <label for="inputGenderDateMD">Gender</label> -->
                                                            <select disabled class="mdb-select colorful-select dropdown-info" name="sex" >
                                                              <option value="<?php echo $data['std']->gender; ?>" selected disabled hidden ><?php echo $data['std']->gender; ?></option>
                                                            </select>

                                                    </div>
                                            </div>
                                            </div><br>
                                <div class="form-row">
                                        <!-- Grid column -->
                                        <div class="col-md-4">
                                                <!-- Material input -->
                                                <div class="md-form form-group">
                                                        <input type="text" class="form-control" name="email" id="inputEmailMD" value="<?php echo $data['std']->email; ?>">
                                                        <label for="inputEmailMD">E-mail</label>
                                                </div>
                                        </div>
                                        <!-- Grid column -->
                                        <!-- Grid column -->
                                        <div class="col-md-4">
                                                <!-- Material input -->
                                                <div class="md-form form-group">
                                                        <input type="text" class="form-control" name="nationality" id="inputNatMD" value="<?php echo $data['std']->nationality; ?>">
                                                        <label for="inputNatMD">Nationality</label>
                                                </div>
                                        </div>

                                        <div class="col-md-4">
                                                <!-- Material input -->
                                                <div class="md-form form-group">
                                                        <input disabled type="text" class="form-control" name="nationality" id="inputNatMD" value="<?php echo $data['std']->courseName; ?>">
                                                        <label for="inputNatMD">Course of study</label>
                                                </div>
                                        </div>
                                        

                            </div><br>

                            <div class="form-row">

                                       <div class="col-md-4">
                                                <!-- Material input -->
                                                <div class="md-form form-group">
                                                        <input disabled type="text" class="form-control" name="Intitution" id="inputNatMD" value="<?php echo $data['std']->institutionName; ?>">
                                                        <label for="inputNatMD">Institution</label>
                                                </div>
                                        </div>
                            </div>
                                <i class="fa fa-address-card fa-1x"></i>&nbsp;<h2>Address</h2>
                                <hr><br>
                                <div class="form-row"><!-- Grid row -->
                                <!-- Grid column -->
                                <div class="col-md-12">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                                <input type="text" class="form-control" name="address" id="inputAddressMD" value="<?php echo $data['std']->address; ?>">
                                                <label for="inputAddressMD">Address</label>
                                        </div>
                                </div>
                                <!-- Grid column -->
                                <!-- Grid column -->
                                <!-- <div class="col-md-4"> -->
                                        <!-- Material input -->
                                        <!-- div class="md-form form-group">
                                                <input type="text" class="form-control" id="inputCityMD" placeholder="City">
                                                <label for="inputCityMD">City</label>
                                        </div> -->
                                <!-- </div> -->
                                <!-- Grid column -->
                            </div><br>


                             <div class="form-row">
                                        <!-- Grid column -->
                                        <div class="col-md-4">
                                                <!-- Material input -->
                                                <div disabled class="md-form form-group">
                                                        <input type="text" class="form-control" name="localgov" id="inputEmailMD" value="<?php echo $data['std']->localgovt; ?>">
                                                        <label for="inputEmailMD">local Government</label>
                                                </div>
                                        </div>
                                        <!-- Grid column -->

                                        <div class="col-md-4">
                                                <!-- Material input -->
                                                <div class="md-form form-group">
                                                        <input type="text" class="form-control" name="state" id="inputEmailMD" value="<?php echo $data['std']->name; ?>">
                                                        <label for="inputEmailMD">State</label>
                                                </div>
                                        </div>
                                        <!-- Grid column -->
                            </div>
                            <!-- Grid row -->

                                    <input type="submit" class="btn btn-primary btn-md pull-right" value="Update" id="sub">
                                </form>


             </div><!--/tab-pane-->
            
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
        </div>

    </div>
</div>
<?php require APPROOT . '/views/inc/stdfooter.php'; ?>
 
