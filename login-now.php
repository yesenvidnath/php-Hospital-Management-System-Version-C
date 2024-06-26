<?php
  include('template-parts/header.php');
?>

<div class="container-fluid background-main-login">

    <div class="row">

        <div class="col"></div>

        <div class="col-md-4">
            <form id="login-form" action="login.php" method="POST">

                <!-- Display the error based on the error -->
                <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-danger"><?= $_GET['error'] ?> 😒</div>
                <?php } ?>

                <div class="imgcontainer text-center">
                    <img src="./img/Logo.png" alt="Avatar" class="avatar">
                </div>

                <div class="form-group">
                    <label for="utype">User Type</label>
                    <select id="utype" name="utype" class="form-control">
                        <option value="">Select User Type</option>
                        <option value="staff">Staff</option>
                        <option value="patient">Patient</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="uname">Username</label>
                    <input id="uname" type="text" placeholder="Enter Username" name="uname" required class="form-control">
                </div>

                <div class="form-group">
                    <label for="psw">Password</label>
                    <input id="password" type="password" placeholder="Enter Password" name="psw" required class="form-control">
                </div>
                
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Login</button><br>
                    <label class="ml-2">
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </div>
                <br>
                <div class="container text-center frm-login-botm-section" >
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-secondary">Cancel</button>
                    <span class="psw ml-2">Forgot <a href="#">password?</a></span>
                </div>

            </form>
        </div>

        <div class="col"></div>
    </div>
</div>

<?php
  include('template-parts/footer.php');
?>