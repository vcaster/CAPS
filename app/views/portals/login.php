<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="<?php echo URLROOT ?>/css/stylelogin.css">
<br><br><br><br>
<div style="display:flex;width:100%;">
    <form action="<?php echo URLROOT; ?>/portals/login" method="post">
        <?php flash('registered');  ?>
        <div style="width:100%;">
            <p>EMAIL</p>
            <input type="email" name="email" class="
            <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
        </div>
        <div style="width:100%;">
            <p>PASSWORD</p>
            <input type="password" name="password" class="
                <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
        </div>

        <!-- <p class="term">
            <i class="fa fa-check-square-o" aria-hidden="true"></i><span>Acepto términos y condiciones. </span>
        </p> -->


            <a><center><input type="submit" value="Login" id="sub"></center></a>

    </form>
</div>
<br><br><br><br><br><br><br>
<script src="<?php echo URLROOT ?>/js/login.js"></script>

    <!--footer -->
<?php require APPROOT . '/views/inc/footer.php'; ?>
