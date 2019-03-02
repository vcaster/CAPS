<?php require APPROOT . '/views/inc/admheader.php'; ?>
        <!-- main content start-->
<div id="page-wrapper">
    <div class="main-page">
            <div class="tables">
                <!-- <h2 class="title1">Tables</h2> -->
                <br><br>
                <div class="panel-body widget-shadow">
                    <h4>Universities</h4>
                    <?php flash('post_message');  ?>
                    <table class="table table-hover">
                    <thead>
                        <tr>
                          <th>#</th>
                          <th>University Name</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data['unis'] as $unis) : ?>
                    <tr>
                      <th scope="row"><?php echo $unis->institutionID; ?></th>
                      <td><?php echo $unis->institutionName; ?></td>
                      <td><a href="<?php echo URLROOT; ?>/exambodys/unidelete/<?php echo $unis->institutionID;
                        ; ?>"><span class="btn btn-danger btn-sm"><span class="fa fa-times"></span></span></a></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                    </table>
                    </div>
                </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/admfooter.php'; ?>
