<section id="header">
<nav class="navbar navbar-expand-md navbar-light bg-white" id="navbar_sticky">
  <div class="container">
    <a class="navbar-brand col_1" href="index.html"><i style="vertical-align:middle;" class="fa fa-life-saver col_1"></i> Insurance <br><span style="margin-left:42px;" class="col_2 font_12">INSURANCE COMPANY</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-0">
        <li class="nav-item">
          <a class="nav-link 
              <?php if($_GET['m'] == 'home'):?>
               active
              <?php endif; ?>
           "
          href="index.php?m=home"> Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link 
          <?php if($_GET['m'] == 'about'):?>
            active
          <?php endif; ?>
         "
          href="index.php?m=about">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Blog
          </a>
          <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="blog.html">Blog</a></li>
            <li><a class="dropdown-item" href="blog_detail.html">Blog Detail</a></li>
          </ul>
        </li>
		
		
		<!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pages
          </a>
          <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
		    <li><a class="dropdown-item" href="insurance.html">Insurance</a></li>
            <li><a class="dropdown-item" href="team.html">Team</a></li>
            <li><a class="dropdown-item" href="pricing.html">Pricing</a></li>
          </ul>
        </li> -->

		<li class="nav-item">
          <a class="nav-link
          <?php if($_GET['m']== 'contact'):?>
            active
          <?php endif; ?>
              "href="index.php?m=contact">Contact Us</a>
        </li>
    <li class="nav-item">
          <a class="nav-link
          <?php if($_GET['m'] == 'announcements'):?>
            active  
          <?php endif; ?>  
            " href="index.php?m=announcements">Announcements</a>
    </li>
		
		<li class="nav-item">
          <a style="background:#FFDA47; padding:15px 25px; display:block; color:#000!important;" href="#"><i style="vertical-align:middle; margin-right:10px; font-size:30px;" class="fa fa-envelope col_1"></i> 24 hours every day <br><span style="margin-left:44px; font-size:20px; font-weight:bold;">1-234-567-8900</span></a>
        </li>

      </ul>
      
    </div>
  </div>
</nav>
</section>