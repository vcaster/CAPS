<?php require APPROOT . '/views/inc/uniheader.php'; ?>
        <!-- main content start-->
<div id="page-wrapper">
    <div class="main-page">
          <form action="<?php echo URLROOT; ?>/admins/leaves" method="post">
            <div class="tables">
                <!-- <h2 class="title1">Tables</h2> -->
                <br><br>
                <div class="panel-body widget-shadow">
                    <h4>Addmitted students</h4>
                    <?php flash('post_message');  ?>
                    <table class="table table-hover">
                    <thead>
                        <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Course</th>
                          <th>Score</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data['leaves'] as $leave) : ?>
                    <tr>
                      <th scope="row"><?php echo $leave->empID; ?></th>
                      <td><?php echo $leave->firstName; ?></td>
                      <td><?php echo $leave->lastName; ?></td>
                      <td><?php echo $leave->reason; ?></td>
                      <td><?php echo $leave->email; ?></td>
                      <td><a href="<?php echo URLROOT; ?>/admins/leaveinfo/<?php echo $leave->leaveID; ?>"><span class="btn btn-primary btn-sm"><span class="fa fa-info"></span></span></a></td>

                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                    </table>
                    </div>
                </div>
              
            
                </form>
    </div>
</div>
<?php require APPROOT . '/views/inc/unifooter.php'; ?>