<!DOCTYPE html>
<html lang="en">
<head>
   <title>Dashboard</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="dashboard">
       <nav>
           <div class="logo">
               <img src="logo.jpg" alt="Logo">
           </div>
           <ul>
               <li><a href="#" class="active">Dashboard</a></li>
               <li><a href="#">Profile</a></li>
               <li><a href="#">Settings</a></li>
           </ul>
           <div class="user-info">
               <span>Welcome, <?php echo htmlspecialchars($username); ?></span>
               <a href="logout.php" class="logout-btn">Logout</a>
           </div>
       </nav>
       
       <main>
           <h1>Dashboard</h1>
           <div class="content">
               <div class="welcome-card">
                   <h2>Welcome back, <?php echo htmlspecialchars($username); ?>!</h2>
                   <p>Last login: <?php echo date('d M Y H:i'); ?></p>
               </div>
               
               <!-- Add your dashboard content here -->
           </div>
       </main>
   </div>
</body>
</html>