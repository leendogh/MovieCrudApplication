<?php
require_once "../controllers/registercontroller.php";
require_once "../boostrap/plu.php";
?>
<body>
    <div class="container">
        <h2>Sign Up</h2>
        <p>Please complete this form to create an account and your password MUST  be more than 6 characters</p>
        <form action="../controllers/registercontroller.php" method="post">
            <div class="form-group ">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html