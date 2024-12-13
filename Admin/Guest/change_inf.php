<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
 
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Ninom</title>

 
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />


  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

 
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet" />

  <link href="css/style.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

  <link href="css/responsive.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body class="sub_page">
<?php
    include("head.php");
?>
    
  </div>

 
  <?php
    include("nav.php");
    include("../model/control_user.php");
    $get_data = new data_user();
    $infor = $get_data->sl_username($_SESSION['username']);
    $infor = $infor->fetch_assoc(); 
  ?>

 
    <div class="container" style="margin-bottom: 100px;">
        <form method="post" action="../controller/sub_change_inf.php" enctype="multipart/form-data"> 
            <div class="row mt-5">
                
                <div class="col-7 lh-lg" >
                    <h4>THÔNG TIN CÁ NHÂN</h4>
                        EMAIL:
                        <input type="text" class="form-control mb-3" name="txtmail" value="<?php echo$infor['email'];?>"> 
                        ADDRESS:
                        <input type="textarea" class="form-control mb-3" name="txtaddress" value="<?php echo$infor['address'];?>"> 
                      
                        GENDER:
                        <select class="form-select mb-3" name="txtgender">
                            <option value="Male" <?php if ($infor['gender'] == 'Male') echo 'selected'; ?>>Male</option>
                            <option value="Female" <?php if ($infor['gender'] == 'Female') echo 'selected'; ?>>Female</option>
                            <option value="Other" <?php if ($infor['gender'] == 'Other') echo 'selected'; ?>>Other</option>
                        </select>
                       
                </div>
                <div class="row d-flex justify-content-center mt-5">
                <button name="txtsub"  type="submit" style="width: 100px;" class="btn btn-dark">Cập Nhật</button>
            
            </div>
            </div>
        </form>
    </div>
  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_logo">
        <h2>
          NiNom
        </h2>
      </div>
      <div class="info_contact">
        <div class="row">
          <div class="col-md-4">
            <a href="">
              <img src="images/location.png" alt="">
              <span>
                Passages of Lorem Ipsum available
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/call.png" alt="">
              <span>
                Call : +012334567890
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/mail.png" alt="">
              <span>
                demo@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-9">
          <div class="info_form">
            <form action="">
              <input type="text" placeholder="Enter your email">
              <button>
                subscribe
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="info_social">
            <div>
              <a href="">
                <img src="images/facebook-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/twitter-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/instagram.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  
  <?php
    include("footer.php");
  ?>
  <!-- footer section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <?php
    include("script.php");
  ?>

</body>

</html>


