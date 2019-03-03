<?php require APPROOT . '/views/inc/uniheader.php'; ?>
        <!-- main content start-->
<div id="page-wrapper">
    <div class="main-page">
          <form action="<?php echo URLROOT; ?>/admins/leaves" method="post">
            <div class="tables">
                <!-- <h2 class="title1">Tables</h2> -->
                <br><br>
                <div class="panel-body widget-shadow">
                    <h4>Admitted Students</h4>
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
                        <?php $i=0; ?>
                    <?php foreach ($data['std'] as $std) : ?>
                    <tr>
                        <?php $i++; ?>
                      <th scope="row"><?php echo $i; ?></th>
                      <td><?php echo $std->firstName; ?></td>
                      <td><?php echo $std->lastName; ?></td>
                      <td><?php echo $std->courseName; ?></td>
                      <td><?php echo $std->score; ?></td>
                      <td><a href="<?php echo URLROOT; ?>/universities/studentprofile/<?php echo $std->studentID; ?>"><span class="btn btn-success btn-sm"><span class="fa fa-check"></span></span></a><!-- <a href="<?php //echo URLROOT; ?>/universities/deletestd/<?php //echo $std->studentID; ?>"><span class="btn btn-danger btn-sm"><span class="fa fa-times"></span></span></a> --></td>
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
