
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

   <nav class="navbar navbar=collapse" id="navbarNav">
      <div class="container">
        <a class="navbar-brand"   href="index.php">Movie Booking</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-expended="false" aria-label="toggle navigator">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link"    href="index.php">home</a>
                </li>
                <?php if(!isset($_SESSION['user_id'])):?>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link "href="login.php">login</a>
                    </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $_SESSION['role'] == 'admin' ? 'admin/dashboard.php' : 'user/dashboard.php'; ?>">dashboard</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="logiut.php">logout</a>

                        </li>
                        <?php endif; ?>
            </ul>
        </div>
      </div>

   </nav>


   <div class="container-mt-5">
    <h1 class="tetx-center">welcome to your dreams booking system!</h1>
    <p>this is dream booking system</p>

   </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
