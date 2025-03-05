<nav class="navbar" rel="stylesheet" style="width: 20%; height: 1000px; background-color: orange">
        <div class="container">
        <!--Brand -->
        <a href="" class="navbar-brand">
            <h4 class="mb-o text-uppercase" style="position: absolute; top: 30px;">SIGBIN 11</h4>
        </a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a href="profile.php" class="nav-link">
                <?= $_SESSION['username']  ?>
            </a></li>
            <button type="button" class="btn btn-danger fw-bold fs-6 py-4 w-100 " style="position: absolute; bottom: 130px; right: 0px ">Log Out</button>
        </ul>
        </div>
        <div class="container d-flex flex-column" style="position: absolute; top: 150px;">
        <!-- As a link -->
        <nav class="navbar">
            <div class="container-fluid" style="margin-bottom: 30px">
                <a class="navbar-brand" href="#">Home</a>
            </div>
        </nav>

        <!-- As a heading -->
        <nav class="navbar">
            <div class="container-fluid" style="margin-bottom: 30px">
                <span class="navbar-brand">Booking</span>
            </div>
        </nav>

         <!-- As a heading -->
         <nav class="navbar">
            <div class="container-fluid" style="margin-bottom: 30px">
                <span class="navbar-brand">About Us</span>
            </div>
        </nav>

         <!-- As a heading -->
         <nav class="navbar">
            <div class="container-fluid" style="margin-bottom: 30px">
                <span class="navbar-brand">Contact Us</span>
            </div>
        </nav>
        </div>
    </nav>

