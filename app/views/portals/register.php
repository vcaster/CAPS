<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="<?php echo URLROOT ?>/css/stylelogin.css">
<br><br><br><br>
<div style="display:flex;width:100%;">

    <form action="<?php echo URLROOT; ?>/portals/register" method="post">
      <h1><center>Register</center></h1><br><br>
      <div style="width:50%;">
          <p>First Name</p>
          <input type="text" name="fname" class="
            <?php echo (!empty($data['fname_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['fname']; ?>">
          <span class="invalid-feedback"><?php echo $data['fname_err']; ?></span>
      </div>
      <div style="width:40%;" class="pull-right">
          <p>Last Name</p>
          <input type="text" name="lname" class="
            <?php echo (!empty($data['lname_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['lname']; ?>">
          <span class="invalid-feedback"><?php echo $data['lname_err']; ?></span>
      </div>
      <div style="width:40%;">
          <p>Middle Name</p>
          <input type="text" name="mname" class="
            <?php echo (!empty($data['mname_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['mname']; ?>">
          <span class="invalid-feedback"><?php echo $data['mname_err']; ?></span>
      </div>

      <div style="width:40%;"  class="pull-right">
          <p>Date Of Birth</p>
          <input type="text" name="birthdate" class="
            <?php echo (!empty($data['birthdate_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['birthdate']; ?>">
          <span class="invalid-feedback"><?php echo $data['birthdate_err']; ?></span>
        </div>
        <div style="width:40%;">
            <!-- <p>Sex</p> -->
            <div style="width:20%;" class="sel sel--black-panther
            <?php echo (!empty($data['sex_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['sex']; ?>"  id="sex">
            <select name="sex" id="select-profession" >
            <span class="invalid-feedback"><?php echo $data['sex_err']; ?></span>
              <option value="" disabled>Sex</option>
              <option value="M">M</option>
              <option value="F">F</option>
            </select>
            </div>
        </div>
        <div style="width:40%;"  class="pull-right">
            <p>Nationality</p>
            <input type="text" name="nationality" class="
            <?php echo (!empty($data['nationality_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['nationality']; ?>">
            <span class="invalid-feedback"><?php echo $data['nationality_err']; ?></span>
          </div>
          
          <div style="width:80%;">
              <p>Phone No</p>
              <input type="text" name="phonen" class="
                <?php echo (!empty($data['phonen_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['phonen']; ?>">
              <span class="invalid-feedback"><?php echo $data['phonen_err']; ?></span>
          </div>
        <div style="width:100%;">
            <p>Email</p>
            <input type="email" name="email" class="
                <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
        </div>
        <div style="width:100%;">
            <p>Address</p>
            <input type="text" name="address" class="
                <?php echo (!empty($data['address_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['address']; ?>">
            <span class="invalid-feedback"><?php echo $data['address_err']; ?></span>
        </div>
        <div style="width:100%;">
            <p>Local government</p>
            <input type="text" name="localgov" class="
            <?php echo (!empty($data['localgov_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['localgov']; ?>">
            <span class="invalid-feedback"><?php echo $data['localgov_err']; ?></span>
        </div>

      <div style="width:100%;" class="sel sel--black-panther
            <?php echo (!empty($data['state_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['state']; ?>">
         <span class="invalid-feedback"><?php echo $data['state_err']; ?></span>
        <select name="state" id="select-profession">
          <option value="" disabled>State</option>
            <?php foreach ($data['states'] as $states) : ?>
             <option value="<?php echo $states->id; ?>" ><?php echo $states->name; ?></option>
            <?php endforeach; ?>
        </select>
      </div>

      <div style="width:100%;" class="sel sel--black-panther
            <?php echo (!empty($data['cos_nerr'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['cos']; ?>">
         <span class="invalid-feedback"><?php echo $data['cos_err']; ?></span>
        <select name="cos" id="select-profession">
          <option value="" disabled>Course</option>
            <?php foreach ($data['courses'] as $courses) : ?>
             <option value="<?php echo $courses->courseID; ?>" ><?php echo $courses->courseName; ?></option>
            <?php endforeach; ?>
        </select>
      </div>
        <div style="width:100%;" class="sel sel--black-panther
            <?php echo (!empty($data['Institution_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['Institution']; ?>">
         <span class="invalid-feedback"><?php echo $data['Institution_err']; ?></span>
        <select name="Institution" id="select-profession">
          <option value="" disabled>Institution</option>
            <?php foreach ($data['insts'] as $insts) : ?>
             <option value="<?php echo $insts->institutionID; ?>" ><?php echo $insts->institutionName; ?></option>
            <?php endforeach; ?>
        </select>
      </div>        
        <div style="width:100%;">
            <p>Password</p>
            <input type="password" name="password" class="
            <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
        </div>
        <div style="width:100%;">
            <p>Confirm password</p>
            <input type="password" name="confirm_password" class="
            <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>">
            <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
        </div>


        <!-- <p class="term">
            <i class="fa fa-check-square-o" aria-hidden="true"></i><span>Acepto términos y condiciones. </span>
        </p> -->


            <a><center><input type="submit" name="submitreg" value="Register" id="sub"></center></a>

    </form>
</div>
<br><br><br><br><br><br><br>
<script src="<?php echo URLROOT ?>/js/login.js"></script>
    <!--footer -->
<?php require APPROOT . '/views/inc/footer.php'; ?>
