

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="text-center">Login</h2>

                         <?php 
                          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $email = $_POST['email'];
                            $pass = $_POST['password'];

                          
                            $sql = 'SELECT * FROM users WHERE email = ?';
                            $stmt = $pdo->prepare($sql);
                            $stmt->bindParam(1, $email, PDO::PARAM_STR);
                            $stmt->execute();

                            $user = $stmt->fetch(PDO::FETCH_ASSOC);

                           
                            if ($user && password_verify($pass, $user['password'])) {
                                $_SESSION['user_id'] = $user['id']; 
                                $_SESSION['role'] = $user['role'];  

                                echo "<div class='alert alert-success'>Login successful! <a href='index.php'>Go to home</a></div>";
                            } else {
                                echo "<div class='alert alert-danger'>Invalid email or password</div>";
                            }
                          }
                         ?>

                        <form method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Log In</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
