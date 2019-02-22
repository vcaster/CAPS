<?php require APPROOT . '/views/inc/uniheader.php'; ?>
        <!-- main content start-->
<div id="page-wrapper">
    <div class="main-page">
            <div class="tables">
                <!-- <h2 class="title1">Tables</h2> -->
                <br><br>

                <div class="panel-body widget-shadow">
                    <h4>Course</h4>
                    <form action="<?php echo URLROOT; ?>/admins/departments" method="post">
                    <div class="col-md-8">
                    <div class="md-form form-group">
                        <input disabled type="text" class="form-control" name="newdept" id="newdept" value="">
                          <label for="newdept">Course</label>
                         
                          <!-- <span class="btn btn-success btn-sm"><span class="fa fa-check"></span></span> -->
                                                    </div>
                    </div>

                    <div class="col-md-2">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" name="newdept" id="newdept" value="">
                          <label for="newdept">Cut Off</label>
                          <input class="btn btn-success btn-sm fa fa-check" type="Submit" name="Submit" value="Add New"> 
                          <!-- <span class="btn btn-success btn-sm"><span class="fa fa-check"></span></span> -->
                                                    </div>
                    </div>
                    
                    <?php flash('post_message');  ?>
                  </form>
                    </div>
                </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/unifooter.php'; ?>
