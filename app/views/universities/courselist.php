<?php require APPROOT . '/views/inc/uniheader.php'; ?>
        <!-- main content start-->
<div id="page-wrapper">
    <div class="main-page">
            <div class="tables">
                <!-- <h2 class="title1">Tables</h2> -->
                <br><br>

                <div class="panel-body widget-shadow">
                    <h4>Courses</h4>
                    <form action="<?php echo URLROOT; ?>/universities/courselist" method="post">
                  
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
                    <?php foreach ($data['cut'] as $cut) : ?>
                    <tr>
                      <th scope="row"><?php echo $cut->courseName; ?></th>
                      <td><?php echo $cut->cut_ofI; ?></td>
                      <td><a href="<?php echo URLROOT; ?>/universities/coursescutoff"><span class="btn btn-primary btn-sm"><span class="fa fa-pencil"></span></span></a></td>
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
