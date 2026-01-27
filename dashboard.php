<?php
session_start();
include "db.php";

if (!isset($_SESSION['email'])) {
    header("Location: login.html");
    exit();
}

$email = $_SESSION['email'];

// Fetch jobs from DB
$jobsResult = mysqli_query($conn, "SELECT * FROM jobs");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard | Job Portal</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
/* ===== YOUR ORIGINAL CSS (UNCHANGED) ===== */
* { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Inter', sans-serif; }
body { background: #f4f6f8; color: #333; }
/* (CSS unchanged — keeping short here for clarity) */
</style>
</head>

<body>

<header class="dash-header">
  <div class="dash-left">
    <h2 class="logo">JobPortal</h2>
    <nav>
      <a class="active" href="#">Prepare</a>
      <a href="#">Participate</a>
      <a href="#">Opportunities</a>
    </nav>
  </div>

  <div class="dash-right">
    <span><?php echo $email; ?></span>
    <form action="logout.php" method="POST">
      <button class="btn-logout">Logout</button>
    </form>
  </div>
</header>

<div class="dashboard-layout">

  <aside class="sidebar">
    <div class="profile-card">
      <div class="avatar-circle">
        <?php echo strtoupper(substr($email,0,2)); ?>
      </div>
      <h3><?php echo $email; ?></h3>
      <p>B.Tech CSE</p>
      <p class="small">RGUKT Andhra Pradesh</p>
      <button class="btn-primary">Complete Profile</button>
    </div>
  </aside>

  <main class="dash-content">

    <section class="banner">
      <div>
        <span class="tag">Govt Exam</span>
        <h2>CrackGovtExam</h2>
        <p>Based on actual exam pattern</p>
      </div>
      <button>Register Now</button>
    </section>

    <h3>Available Jobs</h3>

    <table>
      <tr>
        <th>Job</th>
        <th>Company</th>
        <th>Location</th>
      </tr>

      <?php while ($job = mysqli_fetch_assoc($jobsResult)) { ?>
      <tr>
        <td><?php echo $job['title']; ?></td>
        <td><?php echo $job['company']; ?></td>
        <td><?php echo $job['location']; ?></td>
      </tr>
      <?php } ?>

    </table>

  </main>
</div>

</body>
</html>
