<?php require APPROOT . '/views/inc/uniheader.php'; ?>
        <!-- main content start-->
<div id="page-wrapper">
    <div class="main-page">
          <form action="<?php echo URLROOT; ?>/admins/leaves" method="post">
            <div class="tables">
                <!-- <h2 class="title1">Tables</h2> -->
                <br><br>
                <div class="panel-body widget-shadow">
                    <h4>Unapproved Students</h4>
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
                    <?php foreach ($data['leavesdisa'] as $leavesdisa) : ?>
                    <tr>
                      <th scope="row"><?php echo $leavesdisa->empID; ?></th>
                      <td><?php echo $leavesdisa->firstName; ?></td>
                      <td><?php echo $leavesdisa->lastName; ?></td>
                      <td><?php echo $leavesdisa->reason; ?></td>
                      <td><?php echo $leavesdisa->email; ?></td>
                      <td><a href="<?php echo URLROOT; ?>/admins/leaveapp/<?php echo $leavesdisa->leaveID; ?>"><span class="btn btn-success btn-sm"><span class="fa fa-check"></span></span></a><a href="<?php echo URLROOT; ?>/admins/leavedisa/<?php echo $leavesdisa->leaveID; ?>"><span class="btn btn-danger btn-sm"><span class="fa fa-times"></span></span></a></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                    </table>
                    </div>
                </div>
            <div class="tables">
                <!-- <h2 class="title1">Tables</h2> -->
                <br><br>
                <div class="panel-body widget-shadow">
                    <h4>Approved students</h4>
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
