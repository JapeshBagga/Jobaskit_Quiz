<?php
  require_once "identification.php";
  $login_id=$_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
	<meta name="author" content="Creative Tim">
	<title>Student Info | JoBaskit</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<?php require_once 'requires/top-scripts.php' ?>
</head>
<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">

      <!----LOGO CODE or BRAND-->
      <?php require_once 'requires/logo.php' ?>

      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="leaderboard.php">
                <i class="ni ni-tv-2"></i>
                <span class="nav-link-text">Leaderboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="students-introduction.php">
                <i class="ni ni-single-02"></i>
                <span class="nav-link-text">Students</span>
              </a>
            </li>
             <li class="nav-item active">
              <a class="nav-link" href="aptitude-quizes.php">
                <i class="ni ni-bullet-list-67"></i>
                <span class="nav-link-text">Quizes</span>
              </a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            

            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center  ml-md-auto ">
                <li class="nav-item d-xl-none">
                <!-- Sidenav toggler -->
                <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
                </li>
                <li class="nav-item d-sm-none">
                <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                    <i class="ni ni-zoom-split-in"></i>
                </a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ni ni-bell-55"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                    <!-- Dropdown header -->
                    <div class="px-3 py-3">
                    <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                    </div>
                    <!-- List group -->
                    <div class="list-group list-group-flush">
                    <a href="#!" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                        <div class="col-auto">
                            <!-- Avatar -->
                            <i class="ni ni-single-02"></i>
                            <!-- <img alt="Image placeholder" src="img/theme/team-1.jpg" class="avatar rounded-circle"> -->
                        </div>
                        <div class="col ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h4 class="mb-0 text-sm">Japesh</h4>
                            </div>
                            <div class="text-right text-muted">
                                <small>2 hrs ago</small>
                            </div>
                            </div>
                            <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                        </div>
                        </div>
                    </a>
                    <a href="#!" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                        <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="img/theme/team-2.jpg" class="avatar rounded-circle">
                        </div>
                        <div class="col ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h4 class="mb-0 text-sm">John Snow</h4>
                            </div>
                            <div class="text-right text-muted">
                                <small>3 hrs ago</small>
                            </div>
                            </div>
                            <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                        </div>
                        </div>
                    </a>
                    <a href="#!" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                        <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="img/theme/team-3.jpg" class="avatar rounded-circle">
                        </div>
                        <div class="col ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h4 class="mb-0 text-sm">John Snow</h4>
                            </div>
                            <div class="text-right text-muted">
                                <small>5 hrs ago</small>
                            </div>
                            </div>
                            <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                        </div>
                        </div>
                    </a>
                    <a href="#!" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                        <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="img/theme/team-4.jpg" class="avatar rounded-circle">
                        </div>
                        <div class="col ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h4 class="mb-0 text-sm">John Snow</h4>
                            </div>
                            <div class="text-right text-muted">
                                <small>2 hrs ago</small>
                            </div>
                            </div>
                            <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                        </div>
                        </div>
                    </a>
                    <a href="#!" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                        <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="img/theme/team-5.jpg" class="avatar rounded-circle">
                        </div>
                        <div class="col ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h4 class="mb-0 text-sm">John Snow</h4>
                            </div>
                            <div class="text-right text-muted">
                                <small>3 hrs ago</small>
                            </div>
                            </div>
                            <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                        </div>
                        </div>
                    </a>
                    </div>
                    <!-- View all -->
                    <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
                </div>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ni ni-ungroup"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                    <div class="row shortcuts px-4">
                    <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                        <i class="ni ni-calendar-grid-58"></i>
                        </span>
                        <small>Calendar</small>
                    </a>
                    <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                        <i class="ni ni-email-83"></i>
                        </span>
                        <small>Email</small>
                    </a>
                    <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                        <i class="ni ni-credit-card"></i>
                        </span>
                        <small>Payments</small>
                    </a>
                    <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                        <i class="ni ni-books"></i>
                        </span>
                        <small>Reports</small>
                    </a>
                    <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                        <i class="ni ni-pin-3"></i>
                        </span>
                        <small>Maps</small>
                    </a>
                    <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                        <i class="ni ni-basket"></i>
                        </span>
                        <small>Shop</small>
                    </a>
                    </div>
                </div>
                </li>
            </ul>
            <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <i class="ni ni-single-02"></i>
                    <div class="media-body  ml-2  d-none d-lg-block">
                        <span class="mb-0 text-sm  font-weight-bold"><?php echo $row['name'];?></span>
                    </div>
                    </div>
                </a>
                <div class="dropdown-menu  dropdown-menu-right ">
                    <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome!</h6>
                    </div>
                    <a href="#!" class="dropdown-item">
                    <i class="ni ni-single-02"></i>
                    <span>My profile</span>
                    </a>
                    <a href="#!" class="dropdown-item">
                    <i class="ni ni-settings-gear-65"></i>
                    <span>Settings</span>
                    </a>
                    <a href="#!" class="dropdown-item">
                    <i class="ni ni-calendar-grid-58"></i>
                    <span>Activity</span>
                    </a>
                    <a href="#!" class="dropdown-item">
                    <i class="ni ni-support-16"></i>
                    <span>Support</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="logout.php" class="dropdown-item">
                    <i class="ni ni-user-run"></i>
                    <span>Logout</span>
                    </a>
                </div>
                </li>
            </ul>
            </div>
        </div>
        </nav>

        <!-- Header -->
        <div class="header pb-1 d-flex align-items-center" style="background-image: url(img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
            <div class="container-fluid">
                <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                    <!-- <h6 class="h2 text-white d-inline-block mb-0">Student Information</h6> -->
                    
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                        <!-- <li class="breadcrumb-item"><a href="#"></a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Students</li>
                        <li class="breadcrumb-item active" aria-current="page">Student Information</li>
                        </ol>
                    </nav>
                    <!-- <a href="#" class="btn btn-sm btn-neutral">New</a>
                    <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
                    </div>
                </div>
                </div>
            </div>
        
        </div>
        
        <!-- Header-1 -->
        <div class="header pb-5 d-flex align-items-center" style=" background-size: cover;">
        
        </div>

        <!-- Quiz content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 order-xl-1">
                    <form id="formvalue" class="form" method="POST" autocomplete="off">
                        <!-- Image-Text card -->
                        <div class="card">
                            <?php
                                
                                $profile_query = "select * from user_profile where up_login_id=$login_id";
                                $profile_result = mysqli_query($conn, $profile_query);
                                $profile_row = mysqli_fetch_assoc($profile_result);
                                
                            ?>
                            <!-- Card image -->
                            <div class="row">
                                <div class="col-lg-4">
                                    <img class="card-img-top img-fluid shadow shadow-lg--hover" src="../<?php echo $profile_row['up_image']; ?>" alt="Image" alt="logo" style="width:300px; height:266px;" >
                                </div>
                                <div class="col-lg-8">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <?php
                                    
                                        $intro_query = "select name, intro_data,intro_comments from introduction inner join login on introduction.intro_login_id=9";
                                        $intro_result = mysqli_query($conn, $intro_query);
                                        $intro_row = mysqli_fetch_assoc($intro_result);
                                        ?>
                                
                                        <h5 class="h2 card-title mb-0"><?php echo $profile_row['up_fullname']; ?></h5>
                                        <small class="text-muted">Joined on Oct 29th at 10:23 AM</small>
                                        <p class="card-text mt-4">Introduction</p>     
                                        <p><?php echo $profile_row['up_about']; ?></p>    
                                    </div>
                                </div>  
                            </div>
                        </div>
                            <div class="card-footer">	
                                <div class="form-group">
                                    <h4 class="card-title mb-2">Add Comment's</h4>
                                    <textarea rows="4" name="intro_data" class="form-control" placeholder=""></textarea>
                                </div>   			
                                <div class="row">
                                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12"></div>  
                                    <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                                        <button type="submit" id="submit" name="submit" class="btn btn-custon-rounded-three btn-warning">Submit</button>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>       
            </div>
        </div>

    </div>

<?php require_once 'requires/end-scripts.php' ?>


</body>

</html>

