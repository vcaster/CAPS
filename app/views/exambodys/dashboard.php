<?php require APPROOT . '/views/inc/admheader.php'; ?>
        <!-- main content start-->
<div id="page-wrapper">
    <div class="main-page">
<div class="box">
    <div class="container">
        <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
                    <div class="box-part text-center">
                        
                        <i class="fa fa-volume-up fa-3x" aria-hidden="true"></i>
                        
                        <div class="title"><br>
                            <h4>Cut Off Mark</h4><br>   
                            <h4><?php echo $data['body']->cutOff; ?></h4>
                        </div>
                        
                        <br>
                        
                        <a href="<?php echo URLROOT ?>/exambodys/cutoff">View</a>
                        
                     </div>
                </div>
        
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
                    <div class="box-part text-center">
                        
                        <i class="fa fa-hotel fa-3x" aria-hidden="true"></i>
                    
                        <div class="title">
                            <h4>Total Number of courses</h4>
                            <h4><?php echo $data['uni']; ?></h4>
                        </div>
                        
                       
                        
                        <a href="<?php echo URLROOT ?>/exambodys/courseedit">View All</a>
                        
                     </div>
                </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
                    <div class="box-part text-center">
                        
                        <i class="fa fa-file-code-o fa-3x" aria-hidden="true"></i>
                        
                        <div class="title">
                            <h4>Total Number of Universities</h4>
                            <h4><?php echo $data['cos']; ?></h4>
                        </div>
                        
                                                 
                        <a href="<?php echo URLROOT ?>/exambodys/uniedit">View All</a>
                        
                     </div>
                </div>  
            </div>
        </div>
    </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/admfooter.php'; ?>
