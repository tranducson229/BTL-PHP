<?php
      session_start();
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<section class="nav_section">
    <div class="container">
      <div class="custom_nav2">
        <nav class="navbar navbar-expand custom_nav-container ">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="fruit.php">Our Fruit </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="testimonial.php">Testimonial</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <?php 
                  if(isset($_SESSION['username'])){
                      echo 
                      '<li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Xin chào, ' . htmlspecialchars($_SESSION['username']) . '</a>
                          <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="profile.php">Thông tin tài khoản</a></li>
                              <li><a class="dropdown-item" href="change_inf.php">Cập nhật thông tin</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="changepass.php">Đổi mật khẩu</a></li>
                              <li><a class="dropdown-item" href="logout.php">Đăng xuất</a></li>
                          </ul>
                      </li>';
                  } 
                  else {
                      echo 
                      '<li class="nav-item">
                          <a class="nav-link" href="login.php">Login</a>
                      </li>';
                  }
                
                
               
                   $cart_count = isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'quantity')) : 0;
                 ?>
                   <div class="cart-icon">
                     <a href="cart.php">
                       🛒 Cart (<span id="cart-count"><?php echo $cart_count; ?></span>)
                     </a>
                   </div>
                  
                  
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </section>