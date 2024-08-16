<?php 
  $id=$_GET["id"];
  include('config.php');
  $sql="SELECT * FROM contact WHERE id='$id'";
  $result=mysqli_query($sql);
  $rows=mysqli_fetch_assoc($result);
  mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Contact</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>

    <div class="container-fluid bg-primary mb-5 shadow">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 50px"
      >
        <h3 class="display-4 font-weight-large text-white">Reply Section</h3>
        <a href="ContactManagement.php" class="btn btn-primary px-4">Back<<</a>
        
      </div>
    </div>
    <div class="row">
          <div class="col-lg-6 mx-auto mb-5">
            <div class="contact-form">
              <div id="success"></div>
              <form method="post" action="Replies.php">
                <div class="control-group">
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Your Name"
                    required="required"
                    value= "<?php echo "{$rows['name']}"?>"
                    data-validation-required-message="Please enter your name"
                  />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Your Email"
                    required="required"
                    value= "<?php echo "{$rows['email']}"?>"
                    data-validation-required-message="Please enter your email"
                  />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <input
                    type="tel"
                    class="form-control"
                    id="phone"
                    name="phone"
                    placeholder="Phone Number"
                    required="required"
                    value= "<?php echo "{$rows['phone']}"?>"
                    data-validation-required-message="Please enter your phone number"
                  />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <textarea
                    class="form-control"
                    rows="6"
                    id="message"
                    placeholder="Query"
                    required="required"
                    name="query"
                    value= "<?php echo "{$rows['query']}"?>"
                    data-validation-required-message="Please enter your query"
                  ></textarea>
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <textarea
                    class="form-control"
                    rows="6"
                    id=""
                    placeholder="Reply"
                    required="required"
                    name="reply"
                    data-validation-required-message="Please enter your reply"
                  ></textarea>
                  <p class="help-block text-danger"></p>
                </div>
                <div>
                  <button
                    class="btn btn-primary py-2 px-4"
                    type="submit"
                    id="sendMessageButton"

                  >
                    Send Reply
                  </button>
                </div>
              </form>
            </div>
          </div>
          <!-- <div class="col-lg-5 mb-5">
            <p>
              Join us as we embark on a journey to empower individuals, nurture
              talents, and sculpt the leaders and innovators of tomorrow.
              Welcome to KnowledgeNest Institute, where learning knows no
              bounds!
            </p>
            <div class="d-flex">
              <i
                class="fa fa-map-marker-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Address</h5>
                <p>KnowledgeNest,Borivali (W)</p>
              </div>
            </div>
            <div class="d-flex">
              <i
                class="fa fa-envelope d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Email</h5>
                <p>knowledgenest123@gmail.com</p>
              </div>
            </div>
            <div class="d-flex">
              <i
                class="fa fa-phone-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Phone</h5>
                <p>9876543210</p>
              </div>
            </div>
            <div class="d-flex">
              <i
                class="far fa-clock d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Opening Hours</h5>
                <strong>Sunday - Friday:</strong>
                <p class="m-0">08:00 AM - 05:00 PM</p>
              </div>
            </div>
          </div> -->
        </div>