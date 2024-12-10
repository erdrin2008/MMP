<?php   include  'INCLUDE/dbname.php';  session_start() ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-conetnt-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="text-center">Login</h2>

                         <?php 
                          
                          if[$_SERVER['REQUEST_METHOD'] == 'POST']{

                            $email = $_POST['email'];
                            $pass = $_POST['pass'];

                            $Sql = 'SELECT * FROM users WHERE  email = ?';
                            $stmt = $pdo->prepare($sql);
                            $stmt = bindParam(":email" $email);
                            $stmt = execute();
                            $result = $stmt->get_results();
                            $user = $result->fetch_assoc();
                          }

                          if($user && password_verify('$pass',$user('pass'))){
                            $_SESSION ('user_id') = $user('id')
                            $_SESSION ('role') = $user('role');

                            echo "<div class='alert alert-succesful'>Login sucesful!<a href='index.php'>home</a></div>";
                          }else {
                            echo "<div class= 'alert alert-danger'>invalid email or password</div>";
                          }
                         
                         ?>

                        <form method="POST"></form>
                        <div class="mb.3"></div>
                        <label for="email"></label>
                        <input type="email" name="email" id="email" class="form-control"required>

                        <div class="mb.3"></div>
                        <label for="password" class="from-label">email</label>
                        <input type="password" name="password" id="password" class="form-control"required>

                        <button type='sumbit' class="btn btn-primary w-100">LOG IN</button>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>