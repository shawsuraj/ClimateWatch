<?php
include "functions.php";
if(isset($_SESSION['login_user'])!=""){
    ?>
    <script>
        window.location.href = "index.php"
    </script>
    <?php
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


    <!-- jQuery library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</head>

<body>

<div class="container align-self-center" style="display: block;margin-top: 50px;">
        
        <div class="tab-pane" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
            <form action="#" method="POST">
                <div class="text-center mb-3">
                    <h1>Sign up with:</h1>
                    <ul style="color:red">
                        <?php if(isset($_SESSION['errors'])){
                            echo $_SESSION['errors'];
                            unset($_SESSION['errors']);
                        } ?>
                    </ul>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-github"></i>
                    </button>
                </div>

                <p class="text-center">or:</p>

                <!-- Name input -->
                <div class="form-outline mb-4">
                    <input type="text" value="<?php if(isset($_POST['registerName'])){echo $_POST['registerName'];} ?>" name="registerName" id="registerName" class="form-control" />
                    <label class="form-label" for="registerName">Name</label>
                </div>

                <!-- Username input -->
                <div class="form-outline mb-4">
                    <input type="text" name="registerUsername" id="registerUsername" class="form-control" value="<?php if(isset($_POST['registerUsername'])){echo $_POST['registerUsername'];} ?>" />
                    <label class="form-label" for="registerUsername">Username</label>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" name="registerEmail" id="registerEmail" class="form-control" value="<?php if(isset($_POST['registerEmail'])){echo $_POST['registerEmail'];} ?>" />
                    <label class="form-label" for="registerEmail">Email</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" name="registerPassword" id="registerPassword" class="form-control" value="<?php if(isset($_POST['registerPassword'])){echo $_POST['registerPassword'];} ?>" />
                    <label class="form-label" for="registerPassword">Password</label>
                </div>

                <!-- Repeat Password input -->
                <div class="form-outline mb-4">
                    <input type="password" name="registerRepeatPassword" id="registerRepeatPassword" class="form-control" value="<?php if(isset($_POST['registerRepeatPassword'])){echo $_POST['registerRepeatPassword'];} ?>" />
                    <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                </div>
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="1" name="registerCheck" id="registerCheck" checked aria-describedby="registerCheckHelpText" value="<?php if(isset($_POST['registerCheck']) && $_POST['registerCheck'] == 1){echo "checkedasd";} ?>"/>
                    <label class="form-check-label" for="registerCheck">
                        I have read and agree to the terms
                    </label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-3" name="signup_button">Sign in</button>
            </form>
        </div>
    </div>

</body></html>
