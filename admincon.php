<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Royal Cruise</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->




    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0"><i class="fa fa-ship text-primary me-2"></i>Cruise</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link ">Home</a>
                <a href="adminur.php" class="nav-item nav-link ">View Users</a>
                <a href="admincon.php" class="nav-item nav-link active">Contact</a>
                <a href="admincomment.php" class="nav-item nav-link ">Comments</a>
                <a href="adminregister.html" class="nav-item nav-link ">Admin Register</a>
                
            </div>

        </div>
        <a href="adminlogin.html" class="btn text-white py-4 px-lg-5 d-none d-lg-block" style="background-color: black;">Logout
            <i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Admin view Contact</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="adminlogin.html">Admin Login</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Admin View Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
   

    <!-- Contact Start -->
    <section style="background-color: black;">
        <div class="container">
            <div class="row justify-content-center align-items-center g-2">
                <div class="col">
                <?php 
                 
                   $servername="localhost";
                   $username="root";
                   $password="";
                   $dbname="cruisebooking";
                   $con=mysqli_connect($servername,$username,$password,$dbname);
                $sql="SELECT * FROM contact";
                $result=mysqli_query($con,$sql);
                if(mysqli_num_rows($result)>0){
                    
                    echo " <div class='table-responsive'>
                    <table class='table table-white text-white'>
                        <thead>
                            <tr>
                                <th scope='col'>ID</th>
                                <th scope='col'>Name</th>
                                <th scope='col'>Email</th>
                                <th scope='col'>Contact</th>
                                <th scope='col'>Message</th>
                                <th scope='col'>Action</th>
                                <th scope='col'>Action</th>
                            </tr>
                        </thead>
                        <tbody>";
                    while ($rows=mysqli_fetch_assoc($result)) {
                        # code...
                        echo "
                        <tr class=''>
                        <td scope='row'>{$rows['id']}</td>
                        <td>{$rows['name']}</td>
                        <td>{$rows['email']}</td>
                        <td>{$rows['contact']}</td>
                        <td>{$rows['message']}</td>
                        <td><a name='' id='' class='btn btn-warning ' href='adminrf.php?id={$rows['id']}' role='button'>Reply</a></td>
                        <td><a name='' id='' class='btn btn-danger ' href='admindeletecontact.php?id={$rows['id']}' role='button'>Delete</a>
                        
                    </tr>
                   ";
                    }echo "
                              
                    </tbody>
                </table>
            </div>";
                }

                   
                    ?>
                </div>

            </div>
        </div>
    </section>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid text-light footer my-6 mb-0 py-6 wow fadeIn" data-wow-delay="0.1s"
        style="background-color: black;">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Get In Touch</h4>
                    <h2 class="text-primary mb-4"><i class="fa fa-ship text-white me-2"></i>Royal Cruise</h2>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, ABC State, Unknown </p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>12 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>adi2309m@example.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="about.html">About Us</a>
                    <a class="btn btn-link" href="contact.html">Contact Us</a>
                    <a class="btn btn-link" href="adminlogin.html">Admin Login</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Popular Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">

                    <h6 class="text-white mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s"
        style="background-color: black;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">Cruise</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <!-- Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                    <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <!-- <a href="contact.html" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>