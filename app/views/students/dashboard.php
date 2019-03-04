<?php require APPROOT . '/views/inc/stdheader.php'; ?>
        <!-- main content start-->
<div id="page-wrapper">
    <div class="main-page">
<div class="box">
    <div class="container">
        <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
                    <div class="box-part text-center">
                        
                        <i class="fa fa-institution fa-3x" aria-hidden="true"></i>
                        
                        <div class="title"><br>
                            <h4>Addmission Status</h4><br>
                            <h4><?php echo $data['adm']; ?></h4>
                        </div>
                        
                        <br>
                        
                        <a href="<?php echo URLROOT ?>/students/profile">View All</a>
                        
                     </div>
                </div>
        
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
                    <div class="box-part text-center">
                        
                        <i class="fa fa-line-chart fa-3x" aria-hidden="true"></i>
                    
                        <div class="title"><br>
                            <h4>Score</h4><br>
                            <h4><?php echo $data['scr']->score; ?></h4>
                        </div>
                        
                       <br>
                        
                        <a href="<?php echo URLROOT ?>/students/profile">View All</a>
                        
                     </div>
                </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
                    <div class="box-part text-center">
                        
                        <i class="fa fa-unlock fa-3x" aria-hidden="true"></i>
                        
                        <div class="title"><br>
                            <h4>Total Number of offers</h4><br>
                            <h4><?php echo $data['off']; ?></h4>
                        </div>
                        <br>
                                                 
                        <a href="#">View All</a>
                        
                     </div>
                </div>  
            </div>
        </div>
    </div>
    <br><br><br>
    </div>
</div>
<?php require APPROOT . '/views/inc/stdfooter.php'; ?>
