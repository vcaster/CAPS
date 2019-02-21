<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
<!--left-fixed -navigation-->
<aside class="sidebar-left">
  <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <h1><a class="navbar-brand" href="<?php echo URLROOT ?>/pages/admindex"><span class="fa fa-area-chart"></span>
            <?php echo SITENAME; ?><span class="dashboard_text"><?php echo SITEMOTTO; ?></span></a></h1>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>
          <li class="treeview">
            <a href="<?php echo URLROOT ?>/admins/dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
          </li>
          <li class="treeview">
            <a href="<?php echo URLROOT ?>/employees/pay/<?php echo $_SESSION['user_id']; ?>">
            <i class="fa fa-money"></i> <span>Pay</span>
            </a>
          </li>
    <!-- <li class="treeview">
            <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Components</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="grids.html"><i class="fa fa-angle-right"></i> Grids</a></li>
              <li><a href="media.html"><i class="fa fa-angle-right"></i> Media Css</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="charts.html">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="label label-primary pull-right">new</span>
            </a>
          </li>
          <li class="treeview"> -->
          <li class="treeview">
            <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Uploads</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo URLROOT ?>/employees/trainings/<?php echo $_SESSION['user_id']; ?>"><i class="fa fa-angle-right"></i> Training</a></li>
              <li><a href="<?php echo URLROOT ?>/employees/reports/<?php echo $_SESSION['user_id']; ?>"><i class="fa fa-angle-right"></i> Reports</a></li>
              <li><a href="<?php echo URLROOT ?>/employees/announcements/<?php echo $_SESSION['user_id']; ?>"><i class="fa fa-angle-right"></i> Annoucements</a></li>
              <li><a href="<?php echo URLROOT ?>/employees/files/<?php echo $_SESSION['user_id']; ?>"><i class="fa fa-angle-right"></i> Documents</a></li>
       <!--        <li><a href="typography.html"><i class="fa fa-angle-right"></i> Typography</a></li> -->
            </ul>
          </li>
    <!-- <li>
            <a href="widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <small class="label pull-right label-info">08</small>
            </a>
          </li>
          <li class="treeview">
            <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
              <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="tables.html"><i class="fa fa-angle-right"></i> Simple tables</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
            <i class="fa fa-envelope"></i> <span>Mailbox </span>
            <i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>
            <ul class="treeview-menu">
              <li><a href="inbox.html"><i class="fa fa-angle-right"></i> Mail Inbox </a></li>
              <li><a href="compose.html"><i class="fa fa-angle-right"></i> Compose Mail </a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="login.html"><i class="fa fa-angle-right"></i> Login</a></li>
              <li><a href="signup.html"><i class="fa fa-angle-right"></i> Register</a></li>
              <li><a href="404.html"><i class="fa fa-angle-right"></i> 404 Error</a></li>
              <li><a href="500.html"><i class="fa fa-angle-right"></i> 500 Error</a></li>
              <li><a href="blank-page.html"><i class="fa fa-angle-right"></i> Blank Page</a></li>
            </ul>
          </li> -->
          <li class="header">LABELS</li>
          <li><a href="<?php echo URLROOT ?>/admins/leaves"><i class="fa fa-angle-right text-red"></i> <span>Leaves</span></a></li>
          <li><a href="#"><i class="fa fa-angle-right text-yellow"></i> <span>Job Openings</span></a></li>
          <!-- <li><a href="#"><i class="fa fa-angle-right text-aqua"></i> <span>Information</span></a></li> -->
        </ul>
      </div>
      <!-- /.navbar-collapse -->
  </nav>
</aside>
</div>
<!--left-fixed -navigation-->
