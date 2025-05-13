
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/Admin_Template/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/assets/Admin_Template/assets/img/favicon.png">
  <title>
    Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <!-- CSS Files -->
  <link id="pagestyle" href="/assets/Admin_Template/assets/css/argon-dashboard.css?v=2.1.0" rel="stylesheet" />

  <style>
    .card {
  backdrop-filter: blur(12px);
  background-color: rgba(1, 39, 66, 0.8);
  /* color: white; */
  border-radius: 20px;
  /* border: 12px solid rgba(255, 255, 255, 0.1); */
  box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
  transition: transform 0.3s ease;
}

.card:hover {
  transform: scale(1.01);
}

.form-label {
  font-weight: bold;
  font-size: large;
  color: #eee;
}

.form-control,
.form-select {
  background-color: rgba(255, 255, 255, 0.15);
  border: 1px solid rgba(255, 255, 255, 0.3);
  color: #fff;
}

.form-control:focus,
.form-select:focus {
  background-color: rgba(255, 255, 255, 0.2);
  color: #fff;
  border-color: #66f;
  box-shadow: none;
}

.btn-success {
  background-color: #28a745;
  border: none;
}

.btn-danger {
  background-color: #dc3545;
  border: none;
}
  </style>
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-300 bg-dark position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="/assets/Admin_Template/assets/img/logo-ct-dark.png" width="26px" height="26px" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Creative Tim</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="admin">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link ms-3" href="users">
              <i class="fas fa-user fa-5x text-primary-emphasis"></i>
            <span class="nav-link-text ms-1">Users</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link ms-3" href="trains">
            <i class="fas fa-train fa-5x text-primary-emphasis"></i>
            <span class="nav-link-text ms-1">Trains</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="stations">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Stations</span>
          </a>
        </li>
        <li class="nav-item">
        <a class="nav-link ms-3" href="booking">
            <i class="fas fa-ticket-simple fa-5x text-primary-emphasis"></i>
            <span class="nav-link-text ms-1">Booking</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="admin_Profile">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="/logout" class="dropdown-item ms-4 ps-2"><i class="fas fa-sign-out-alt " style="color: red;"></i> Log Out</a>
        </li>
      </ul>
    </div>

  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Booking</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Booking</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <i class="far fa-envelope fa-2x"></i>
            <small class="mx-1 fw-bold text-light"><?php echo $_SESSION["user"]["email"]; ?></small>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
              <img src="/assets/template/img/user_icon.jpg" alt="User" class="mx-3 rounded-circle me-2" width="30" height="30">
              <!-- User name -->
              <small><?php echo $_SESSION["user"]["firstName"]; ?></small>
              </a>
            </li>
            <li class="nav-item  d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link text-white position-relative" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-bell fa-lg"></i>
                <span class="position-absolute top-10 start-200 translate-middle badge rounded-pill bg-danger">
                  <?= count($notifications) ?>
                </span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end bg-dark text-white" aria-labelledby="notificationDropdown" style="min-width: 500px;">
                <li class="dropdown-header text-white fw-bold">Notifications</li>
                <li><hr class="dropdown-divider bg-secondary"></li>
                <?php if (count($notifications) === 0) : ?>
                  <li class="text-center">
                    <a class="dropdown-item text-warning" href="#">
                      <strong>No Notifications</strong>
                    </a>
                  </li>
                <?php else : ?>
                  <?php foreach ($notifications as $notification) : ?>
                    <li class="d-flex justify-content-between align-items-start px-2 py-1">
                      <div class="flex-grow-1 pe-2">
                        <a class="dropdown-item text-success p-0" href="#">
                          <small>
                            <strong><?= $notification["title"] ?></strong><br>
                            <span class="text-warning"><?= $notification["message"] ?></span>
                          </small>
                        </a>
                      </div>
                      <a class="text-danger" href="/delete/notifications/?id=<?= $notification['id'] ?>" title="Delete notification">

                        <i class="fas fs-4 fa-times"></i>
                      </a>
                    </li>
                  <?php endforeach; ?>
                <?php endif; ?>
              </ul>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    
    <div class="container my-4">
      <?php foreach ($bookings as $ticket ) : ?>
        
        <form method="POST" action="updateBooking">
          <div class="card my-3 shadow-lg  border-0 rounded-4" style="border-left: 50px solid #6610f2;">
            <div class="card-body">
              <h5 class="card-title mb-3 fs-1 fw-bold <?= $ticket["status"] === "pending" ? "text-warning" : "text-white"  ?>">Ticket : <?=$ticket["id"]?></h5>
              
              <div class="row">
                <!-- table name -->
                <input type="hidden" id="tableName" name="table" value="bookings">
                <input type="hidden" id="" name="id" value="<?=$ticket["id"]?>">
                <!-- USER INFO -->
                <div class="col-md-6">
                  <div class="mb-2">
                    <label class="form-label">User Name</label>
                    <input type="text" readonly class="form-control" name="firstName" value="<?=$ticket["user_name"]?>">
                  </div>
                  <div class="mb-2">
                    <label class="form-label">Email</label>
                    <input type="email" readonly class="form-control" name="email" value="<?=$ticket["user_email"]?>">
                  </div>
                  <div class="mb-2">
                    <label class="form-label">User ID</label>
                    <input type="number" class="form-control" name="user_id" value="<?=$ticket["user_id"]?>" readonly>
                  </div>
                </div>

                <!-- TRAIN INFO -->
                <div class="col-md-6">
                  <div class="mb-2">
                    <label class="form-label">Train Name</label>
                    <input type="text" readonly class="form-control" name="train_name" value="<?=$ticket["train_name"]?>1">
                  </div>
                  <div class="mb-2">
                    <label class="form-label">Train ID</label>
                    <input type="number" class="form-control" name="train_id" value="<?=$ticket["train_id"]?>" readonly>
                  </div>
                  <div class="mb-2">
                    <label class="form-label">Seat Number</label>
                    <input type="text" class="form-control" name="seat_number" value="<?=$ticket["seat_number"]?>">
                  </div>
                </div>
              </div>

              <hr style="background-color: #eee; height: 2px;">

              <div class="row">
                <!-- STATIONS -->
                <div class="col-md-6">
                  <div class="mb-2">
                    <label class="form-label">Departure Station</label>
                    <input type="text" readonly class="form-control" name="departure_station" value="<?=$ticket["departure_station"]?>">
                  </div>
                  <div class="mb-2">
                    <label class="form-label">Arrival Station</label>
                    <input type="text" readonly class="form-control" name="arrival_station" value="<?=$ticket["arrival_station"]?>">
                  </div>
                  <div class="mb-2">
                    <label class="form-label">Platform Number</label>
                    <input type="number" class="form-control" name="platform_number" value="<?=$ticket["platform_number"]?>">
                  </div>
                  <div class="mb-2">
                    <label class="form-label">Depature Time</label>
                    <input type="text" readonly class="form-control" name="arrival_time" value="<?=( new DateTime($ticket["departure_time"]))->format("h:i:s A")?>">
                  </div>
                </div>
                
                <!-- DATE & TIME -->
                <div class="col-md-6">
                  <div class="mb-2">
                    <label class="form-label">Travel Date</label>
                    <input type="date" class="form-control" name="travel_date" value="<?=$ticket["travel_date"]?>">
                  </div>
                  <div class="mb-2">
                    <label class="form-label">Class</label>
                    <select name="class" class="form-select">
                      <option class="bg-dark" value="first" <?= $ticket["class"] === "first" ? "selected" : "" ?>>First Class</option>
                      <option class="bg-dark" value="second" <?= $ticket["class"] === "second" ? "selected" : "" ?>>Second Class</option>
                    </select>
                  </div>
                  <div class="mb-2">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select">
                      <option class="bg-dark" value="confirmed" <?= $ticket["status"] === "confirmed" ? "selected" : "" ?>>Confirmed</option>
                      <option class="bg-dark" value="pending" <?= $ticket["status"] === "pending" ? "selected" : "" ?>>Pending</option>
                    </select>
                  </div>
                  <div class="mb-2">
                    <label class="form-label">Arrival Time</label>
                    <input type="text" readonly class="form-control" name="arrival_time" value="<?=( new DateTime($ticket["arrival_time"]))->format("h:i:s A")?>">
                  </div>
                  
                </div>
              </div>

              <div class="text-end mt-3">
                <button class="btn btn-success" name="savedChanges" type="submit">Save Changes</button>
                <a href="/delete/bookings/?id=<?= $ticket['id'] ?>"" class="btn btn-danger" name="cancelBooking" type="submit">Cancel Booking</a>
              </div>

          </div>
          </div>
        </form>
      <?php endforeach ; ?>
    </div>

  </main>

  <!--   Core JS Files   -->
  <script src="/assets/Admin_Template/assets/js/core/popper.min.js"></script>
  <script src="/assets/Admin_Template/assets/js/core/bootstrap.min.js"></script>
  <script src="/assets/Admin_Template/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/assets/Admin_Template/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/assets/Admin_Template/assets/js/argon-dashboard.min.js?v=2.1.0"></script>
</body>

</html>