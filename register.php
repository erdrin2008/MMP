<?php   include  'INCLUDE/dbname.php';   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
     <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card body">
                        <h2 class="text-center">register</h2>

                        <?php
                         if[$_SERVER['REQUEST_METHOD'] == 'POST']{

                            $name = $_POST['name'];
                            $email= $_POST['email'];
                            $pass= password_hash($_POST['password'], password_bcypt);
                            $Sql= " INSERT INTO users (name, email,password) VALUE (?,?,?)";
                            $stmt = $pdo->prepare($sql);
                            $stmt = bindParam("sss" . $name , $email , $pass);
                            $stmt = execute();

                        if($stmt -> execute()){
                            echo "<div>request station succesful<a href='login.php'>login here</a></div>";
                        }else {
                          echo "<div class= 'alert alert-danger'>error ". $stmt ->error"</div>"
                        }
                    
                    }
                        ?>

                        <form method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">name</label>
                                <input type="text" name="name" id="name" class="form=control">
                             </div> 
                             <div class="mb-3">
                                <label for="email" class="form-label">email</label>
                                <input type="email" name="email" id="email" class="form=control">
                             </div>
                             <div class="mb-3">
                                <label for="password" class="form-label">password</label>
                                <input type="password" name="password" id="password" class="form=control">
                             </div>
                             <button type="submit" class="btn-btn">register</button>
                               
                            
                        </form>

                    </div>

                </div>

            </div>

        </div>
     </div>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>