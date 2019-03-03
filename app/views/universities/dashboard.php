<?php require APPROOT . '/views/inc/uniheader.php'; ?>
        <!-- main content start-->
<div id="page-wrapper">
    <div class="main-page">
<div class="box">
    <div class="container">
        <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
                    <div class="box-part text-center">
                        
                        <i class="fa fa-graduation-cap fa-3x" aria-hidden="true"></i>
                        
                        <div class="title"><br>
                            <h4>Admitted Student</h4><br>
                            <h4><?php echo $data['adm'];
                            ; ?></h4>
                        </div>
                                              
                        <br>
                        <a href="<?php echo URLROOT ?>/universities/studentlist">View All</a>
                        
                     </div>
                </div>
        
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
                    <div class="box-part text-center">
                        
                        <i class="fa fa-book fa-3x" aria-hidden="true"></i>
                    
                        <div class="title"><br>
                            <h4>Total Number of courses</h4><br>
                            <h4><?php echo $data['cos']; ?></h4>
                        </div>
                        
                       <br>
                        
                        <a href="<?php echo URLROOT ?>/universities/courselist">View All</a>
                        
                     </div>
                </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
                    <div class="box-part text-center">
                        
                        <i class="fa fa-shopping-cart fa-3x" aria-hidden="true"></i>
                        
                        <div class="title"><br>
                            <h4>Market place</h4><br>
                            <h4><?php echo $data['mrk']; ?></h4>

                        </div>
                        <br>                                                 
                        <a href="<?php echo URLROOT ?>/universities/marketplace">View All</a>
                        
                     </div>
                </div>  
            </div>
        </div>
    </div>
    <br><br><br>
    </div>
</div>
<?php require APPROOT . '/views/inc/unifooter.php'; ?>
