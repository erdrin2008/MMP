<?php 
//include the files that we neeed to create this dashboard

include '../inlcude/header.php';
include '../inlcude/dbname.php';


// ensure that the user is logged in
if(!isset($_SESSION['user.id']) || $_SESSION['role'] !='user'){
    header('location: ../login.php'); //redirect to login if the user is not authorised
    exit;
}

//fetch user-specituc from bookings

$user_id = $_SESSION['user_id'];
$sql = "SELECT b.id, m.title, b.show_time b.status
        FROM bookings b
        INNER JOIN movies m ON b.movie_id = m.id
        WHERE b.user_id = $user_id";
        $result = $conn->query($sql);

?>

<div class="container mt-5">
    <h1 class="text-center">User dashboard</h1>

    <h2 class="table tables-borded mt-3">my booking</h2>

    
<table class="table">
  <thead>
    <tr>
        <th>#</th>
        <th>Movie</th>
        <th>Data</th>
        <th>Time</th>
        <th>Status</th>
    </tr>
  </thead>
  <tbody>
</div>