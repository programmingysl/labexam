<?php require APPROOT . '/views/inc/header.php';
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2019-04-07
 * Time: 11:53 AM
 */



?>

<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <h2>Create An Account AJAX STYLE</h2>
            <p>Please fill out this form to register with us AJAX</p>
            <form action="http://localhost/spExam/users/registerAjax" method="post" id="ajaxAccount">
                <div class="form-group">
                    <label for="name">Name: <sup>*</sup></label>
                    <input type="text" name="name" id="name" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
                    <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
                </div>
                <div class="form-group">
                    <label for="email">Username: <sup>*</sup></label>
                    <input type="text" name="username"  id="username" class="form-control form-control-lg <?php echo (!empty($data['username_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['username']; ?>">
                    <span class="invalid-feedback"><?php echo $data['username_err']; ?></span>
                </div>
                <div class="form-group">
                    <label for="email">Age: <sup>*</sup></label>
                    <input type="text" name="age" id="age" class="form-control form-control-lg <?php echo (!empty($data['age_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['age']; ?>">
                    <span class="invalid-feedback"><?php echo $data['age_err']; ?></span>
                </div>
                <div class="form-group">
                    <label for="email">Email: <sup>*</sup></label>
                    <input type="email" name="email" id="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
                    <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                </div>
                <div class="form-group">
                    <label for="password">Password: <sup>*</sup></label>
                    <input type="password" name="password" id="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
                    <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password: <sup>*</sup></label>
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>">
                    <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
                </div>

                <div class="row">
                    <div class="col">
                        <input type="submit" name="submit" value="Register" class="btn btn-success btn-block">
                    </div>
                    <div class="col">
                        <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-light btn-block">Have an account? Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>

<script>
    document.getElementById('ajaxAccount').addEventListener('submit', postName);

    function postName(e){
        e.preventDefault();

        var email = document.getElementById('email').value;
        var name = document.getElementById('name').value;
        var username = document.getElementById('username').value;
        var age = document.getElementById('age').value;
        var password = document.getElementById('password').value;
        var confirm_password = document.getElementById('confirm_password').value;

        var params = "name="+name +"&username="+username +"&age="+age +"&email="+email +"&password="+password+ "&confirm_password="+confirm_password+"&submit=submit";

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'http://localhost/spExam/users/registerAjax', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        xhr.onload = function(){

            if(/*xhr.status*/this.status != 200){

                alert('ajax not ok');
            }
            console.log(this.responseText)
            document.write(this.responseText);
        }

        xhr.send(params);
    }

</script>



