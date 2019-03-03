<?php require APPROOT . '/views/inc/uniheader.php'; ?>
        <!-- main content start-->
<div id="page-wrapper">
    <div class="main-page">
            <div class="tables">
                <!-- <h2 class="title1">Tables</h2> -->
                <br><br>

                <div class="panel-body widget-shadow">
                    <h4>Courses</h4>
                    <form action="<?php echo URLROOT; ?>/universities/coursescutoff" method="post">
                    <div class="col-md-2">
                                                <!-- Material input -->
                              <div class="md-form form-group">
                                 <!-- <label for="inputGenderDateMD">Gender</label> -->
                                 <select class="mdb-select colorful-select dropdown-info" name="manager">
                                    <?php foreach ($data['courses'] as $courses) : ?>
                              <option value="<?php echo $courses->courseID; ?>" ><?php echo $courses->courseName; ?></option>
                                    <?php endforeach; ?>
                                </select>

                                                </div>
                                        </div>
                    </form>
                    <div class="col-md-2">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" name="cutoff" id="newdept" value="">
                          <label for="cutoff">Cut Off</label>
                          <input class="btn btn-success btn-sm fa fa-check" type="Submit" name="Submit" value="Add Cutoff"> 
                          <!-- <span class="btn btn-success btn-sm"><span class="fa fa-check"></span></span> -->
                                                    </div>
                    </div>
                    
                  </div>
                </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/unifooter.php'; ?>
