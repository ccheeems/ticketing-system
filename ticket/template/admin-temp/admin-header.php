<?php
    // session_start();
    // include '../config/dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticketing</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <!--Bootstrap 5 icons CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Iconscout Link For Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- Boxicons For Icons -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel = "stylesheet" href = "../template/admin-temp/admin.css">
    <!-- Data Table -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
</head>
<body>
     
  <div class = "dashboard-pg text-grey-blue">
      <nav class = "navigation-bar d-flex align-items-center">
          <div class = "container">
              <div class = "row align-items-center">
                  <div class = "navigation-bar-left col-6 d-flex align-items-center">
                      <button type = "button" class = "navbar-open-btn text-grey-blue me-3">
                          <i class = "fas fa-bars"></i>
                      </button>
                  </div>

                  <div class = "navigation-bar-right col-6 d-flex align-items-center justify-content-end">
                      <div class = "navbar-logo flex">
                        <a href = "#" class = "profile-btn text-white btn-circle me-1">
                        <!-- <img src = "../assets/images/logo.png" alt = "site logo"> -->
                        </a>
                      </div>
                      <button type = "button" class = "notification-btn text-grey-blue">
                          <i class = "fa-regular fa-bell"></i>
                      </button>
                  </div>
              </div>
          </div>
      </nav>

      <div class = "navigation-overlay position-fixed"></div>

      <div class = "navigation-sidebar bg-light-grey">
          <div class = "navbar-sb-head d-flex justify-content-between align-items-center px-4">
                <div class="logo_items flex">
                  <span class="nav_image">
                    <img src="../assets/images/logo.jpg" alt="logo_img" />
                  </span>
                  <span class="logo_name" style="color: var(--light-blue-color);">Ticketing System</span>
                </div>
              <button class = "navbar-close-btn text-grey">
                  <i class = 'fas fa-arrow-left'></i>
              </button>
          </div>

          <div class = "navbar-sb-list p-4">
              <div class = "navbar-sb-item mb-4">
                  <h5 class = "text-uppercase text-grey navbar-sb-item-title fs-12 ls-1">Management</h5>
                  <ul class = "navbar-sb-links p-0 list-unstyled">
                      <!-- <li class = "navbar-sb-link my-3">
                          <a href = "dashboard.php" class = "text-decoration-none d-flex align-items-center justify-content-between">
                              <div class = "text-light-blue d-flex align-items-center">
                                  <span class = "navbar-sb-icon me-3">
                                  <i class = "fa-solid fa-gauge"></i>
                                  </span>
                                  <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">Dashboard</span>
                              </div>
                          </a>
                      </li>
                      <li class = "navbar-sb-link my-3">
                          <a href = "customer.php" class = "text-decoration-none d-flex align-items-center justify-content-between">
                              <div class = "text-light-blue d-flex align-items-center">
                                  <span class = "navbar-sb-icon me-3">
                                  <i class="fa-solid fa-users"></i>
                                  </span>
                                  <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">Customers</span>
                              </div>
                          </a>
                      </li>
                      <li class = "navbar-sb-link my-3">
                          <a href = "staff.php" class = "text-decoration-none d-flex align-items-center justify-content-between">
                              <div class = "text-light-blue d-flex align-items-center">
                                  <span class = "navbar-sb-icon me-3">
                                  <i class="fa-solid fa-book"></i>
                                  </span>
                                  <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">Staff</span>
                              </div>
                          </a>
                      </li>
                      <li class = "navbar-sb-link my-3">
                          <a href = "department.php" class = "text-decoration-none d-flex align-items-center justify-content-between">
                              <div class = "text-light-blue d-flex align-items-center">
                                  <span class = "navbar-sb-icon me-3">
                                  <i class="fa-solid fa-book-open"></i>
                                  </span>
                                  <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">Department</span>
                              </div>
                          </a>
                      </li> -->
                      <li class = "navbar-sb-link my-3">
                          <a href = "ticket.php" class = "text-decoration-none d-flex align-items-center justify-content-between">
                              <div class = "text-light-blue d-flex align-items-center">
                                  <span class = "navbar-sb-icon me-3">
                                  <i class="fa-solid fa-address-book"></i>
                                  </span>
                                  <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">Ticket</span>
                              </div>
                          </a>
                      </li>
                  </ul>
              </div>

              <div class = "navbar-sb-item mb-4">
                  <h5 class = "text-uppercase text-grey navbar-sb-item-title fs-12 ls-1">User Management</h5>
                  <ul class = "navbar-sb-links p-0 list-unstyled">
                      <li class = "navbar-sb-link my-3">
                          <a href = "userMgt.php" class = "text-decoration-none d-flex align-items-center justify-content-between">
                              <div class = "text-light-blue d-flex align-items-center">
                                  <span class = "navbar-sb-icon me-3">
                                  <i class="fa-solid fa-users-gear"></i>
                                  </span>
                                  <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">Users</span>
                              </div>
                          </a>
                      </li>
                  </ul>
              </div>

              <div class = "navbar-sb-item mb-2">
                  <h5 class = "text-uppercase text-grey navbar-sb-item-title fs-12 ls-1">misc pages</h5>
                  <ul class = "navbar-sb-links p-0 list-unstyled">
                      <li class = "navbar-sb-link my-3">
                          <a href = "#" class = "text-decoration-none d-flex align-items-center justify-content-between">
                              <div class = "text-light-blue d-flex align-items-center">
                                  <span class = "navbar-sb-icon me-3">
                                  <i class="fa-solid fa-gear"></i>
                                  </span>
                                  <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">Settings</span>
                              </div>
                          </a>
                      </li>
                      <li class = "navbar-sb-link my-3">
                          <a href = "../index.php" class = "text-decoration-none d-flex align-items-center justify-content-between">
                              <div class = "text-light-blue d-flex align-items-center">
                                  <span class = "navbar-sb-icon me-3">
                                  <i class="fa-solid fa-door-open"></i>
                                  </span>
                                  <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">Logout</span>
                              </div>
                          </a>
                      </li>
                  </ul>
              </div>
          </div>

      </div>
    </div>

    <div class = "dashboard-main">
            <div class = "container">
                <div class = "row py-3">
                    <div class = "col-12 d-flex justify-content-between align-items-center">
                        <div class = "dashboard-title-text">
                            <!-- <h3>Content Management</h3>
                            <p class = "text-grey">Start Editing Your Content Now.</p> -->
                        </div>
                        <!-- <button type = "button" class = "fs-18 text-grey-blue">
                            <i class = "fas fa-ellipsis-vertical"></i>
                        </button> -->
                    </div>
                  </div>





    <!-- Bootstrap JS Query -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- DataTable JS -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

    <!-- Custom JS -->
    <script src = "../template/admin-temp/admin.js"></script>

</body>
</html>