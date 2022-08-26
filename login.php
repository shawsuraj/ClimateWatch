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
            <form action="#" method="Post">
                <div class="text-center mb-3">
                    <h1>LOGIN</h1>
                    <ul style="color:red">
                        <?php if(isset($_SESSION['errors'])){
                            echo $_SESSION['errors'];
                            unset($_SESSION['errors']);
                        } ?>
                    </ul>
                </div>


                <!-- Name input -->
                <div class="form-outline mb-4">
                    <input type="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>" id="email" name="email" class="form-control" />
                    <label class="form-label" for="registerName">Email</label>
                </div>

                <!-- Username input -->
                <div class="form-outline mb-4">
                    <input type="password" value="<?php if(isset($_POST['password'])){echo $_POST['password'];} ?>" id="password" name="password" class="form-control" />
                    <label class="form-label" for="password">Passowrd</label>
                </div>

                <div class="form-check d-flex justify-content-center mb-4"  style="color:white;">
                    <input class="form-check-input me-2" type="checkbox" value="1" name="registerCheck" id="registerCheck" checked aria-describedby="registerCheckHelpText" value="<?php if(isset($_POST['registerCheck']) && $_POST['registerCheck'] == 1){echo "checkedasd";} ?>"/>
                    <label class="form-check-label" for="registerCheck">
                        Remember me
                    </label>
                </div>

                <div class="form-check d-flex justify-content-center mb-4">
                    <a href="#" style="color:white;">Forget Password</a>
                </div>


                <!-- Submit button -->
                <button type="submit" name="loginin_button" class="btn btn-primary btn-block mb-3">Sign in</button>
            </form>
            <div class="form-check d-flex justify-content-center mb-4">
                    Not a member? <a href="signup.php" style="color:white;margin-left:5px;">Register</a>
            </div>
        </div>
    </div>

</body></html>
