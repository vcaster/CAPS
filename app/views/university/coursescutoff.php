<?php require APPROOT . '/views/inc/uniheader.php'; ?>
        <!-- main content start-->
<div id="page-wrapper">
    <div class="main-page">
            <div class="tables">
                <!-- <h2 class="title1">Tables</h2> -->
                <br><br>

                <div class="panel-body widget-shadow">
                    <h4>Courses</h4>
                    <form action="<?php echo URLROOT; ?>/admins/departments" method="post">
                    <div class="col-md-2">
                                                <!-- Material input -->
                              <div class="md-form form-group">
                                 <!-- <label for="inputGenderDateMD">Gender</label> -->
                                 <select class="mdb-select colorful-select dropdown-info" name="manager">
                                    <?php foreach ($data['emps'] as $emp) : ?>
                              <option value="<?php echo $emp->managerID; ?>" ><?php echo $emp->mgrName; ?></option>
                                    <?php endforeach; ?>
                                </select>

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
                    <table class="table table-hover">
                    <thead>
                        <tr>
                          <th>Course </th>
                          <th>Cut Off</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data['departments'] as $departments) : ?>
                    <tr>
                      <th scope="row"><?php echo $departments->deptName; ?></th>
                      <td><?php echo $departments->mgrName; ?></td>
                      <td><a href="<?php echo URLROOT; ?>/admins/deletedep/<?php echo $departments->deptID; ?>"><span class="btn btn-danger btn-sm"><span class="fa fa-times"></span></span></a></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                    </table>-
                  </form>
                    </div>
                </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/unifooter.php'; ?>
