<?php require APPROOT . '/views/inc/admheader.php'; ?>
        <!-- main content start-->
<div id="page-wrapper">
    <div class="main-page">
            <div class="tables">
                <!-- <h2 class="title1">Tables</h2> -->
                <br><br>
                <div class="panel-body widget-shadow">
                    <h4>Courses</h4>
                    <?php flash('post_message');  ?>
                    <table class="table table-hover">
                    <thead>
                        <tr>
                          <th>#</th>
                          <th>Course Name</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data['employees'] as $employee) : ?>
                    <tr>
                      <th scope="row"><?php echo $employee->empID; ?></th>
                      <td><?php echo $employee->firstName; ?></td>
                      <td><a href="<?php echo URLROOT; ?>/admins/update/<?php echo $employee->empID; ?>"><span class="btn btn-primary btn-sm"><span class="fa fa-pencil"></span></span></a>
                        <a href="<?php echo URLROOT; ?>/admins/delete/<?php echo $employee->empID; ?>"><span class="btn btn-danger btn-sm"><span class="fa fa-times"></span></span></a></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                    </table>
                    </div>
                </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/admfooter.php'; ?>
