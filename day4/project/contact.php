<?php require ('template/header.php'); ?>
<?php 
  $pageName = 'Contact';
?>
  <body>

    <div class="container">
      <header id="siteLogo">
        <div class="row">
          <div class="col-sm-3">
            <a href="index.php">
            	<img src="images/logo.png">
            </a>
          </div>
          <div class="col-sm-9">
            <span class="social-logo pull-right">
              <a href="#">
                <img src="images/fb.png" class="img-circle">
              </a>
              <a href="#">
                <img src="images/tw.png" class="img-circle">
              </a><a href="#">
                <img src="images/gp.png" class="img-circle">
              </a>
            </span>
          </div>
        </div>
      </header>
      <!-- END OF SITE LOGO ROW -->
      <section id="siteMenu">
        <div class="row">
          <nav class="navbar navbar-inverse">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-target="#mainNav" data-toggle="collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse" id="mainNav">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li class="active"><a href="#">Contact</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </section>
      <!-- END OF SITE MENU -->
      <?php require ('template/masthead.php'); ?>
      <!-- END OF PAGE TITLE -->
      <section id="content">
        <div class="row">
          <div class="col-sm-9 text-center" id="mainContent">
            <div class="row">
              <div class="col-sm-12">
                <form action="process.php" class="form" method="post">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="labelUser">Name</label>
                        <input type="text" name="name" id="labelUser" placeholder="Your Name" class="form-control">
                      </div>
                    </div>
                    <!-- END OF NAME -->
                   <div class="col-sm-6">
                      <div class="form-group">
                       <label for="labelPhone">Phone No</label>
                       <input type="text" name="phoneNo" id="labelPhone" placeholder="Your Phone" class="form-control">
                     </div>
                   </div>
                   <!-- END OF PHONE -->
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="labelEmail">Email</label>
                        <input type="text" name="subject" id="labelSubject" class="form-control" placeholder="Your Email">
                      </div>
                    </div>
                    <!-- END OF EMAIL -->
                   <div class="col-sm-6">
                      <div class="form-group">
                       <label for="labelReferer">Referer</label>
                       <select id="labelReferer" class="form-control" name="referer">
                       	 <option value="Facebook">Facebook</option>
                       	 <option value="Twitter">Twitter</option>
                       	 <option value="Instagram">Instagram</option>
                       	 <option value="Nairaland">Nairaland</option>
                       </select>
                     </div>
                   </div>
                   <!-- END OF REFERER -->
                  </div>
                  <div class="row">
                  	<div class="col-sm-12">
                  		<div class="form-group">
                  			<label>Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  			<label>
                  				<input type="radio" name="gender" value="Male">
                  				Male
                        </label>
                        <label>
                  				<input type="radio" name="gender" value="Female">
                  				Female
                  			</label>
                  		</div>
                  	</div>
                  </div>
                  <!-- END OF GENDER -->
                  <div class="row">
                  	<div class="col-sm-12">
                  		<div class="form-group">
                  			<label>Education</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  			<label>
                  				<input type="checkbox" name="edu[]" value="UNIBEN">
                  				UNIBEN
                        </label>
                        <label>
                          <input type="checkbox" name="edu[]" value="UNILAG">
                          UNILAG
                        </label>
                				<label>
                          <input type="checkbox" name="edu[]" value="UNIPORT">
                          UNIPORT
                        </label>
                        <label>
                          <input type="checkbox" name="edu[]" value="UNICAL">
                          UNICAL
                        </label>
                  		</div>
                  	</div>
                  </div>
                  <!-- END OF EDUCATION -->
                  <!-- FILE UPLOAD -->
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Upload File</label>
                        <input type="file" name="upload" class="form-control">
                      </div>
                    </div>
                  </div>
                  <!-- END OF FILE UPLOAD -->
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="labelMessage">Message</label>
                        <textarea name="message" id="labelMessage" class="form-control"> </textarea>
                      </div>
                    </div>
                    <input type="submit" name="send" value="Send" class="btn btn-primary">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <?php require ('template/sidebar.php'); ?>
          <!-- END OF ASIDE CONTENT -->
        </div>
      </section>
    </div>
    <footer class="container-fluid" id="siteFooter">
      <div class="row">
        <div class="col-sm-4">
          <h4>Menu</h4>
          <ul class="nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        <div class="col-sm-4">
          <h4>Services</h4>
          <ul class="nav">
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Software Development</a></li>
            <li><a href="#">Mobile App Development</a></li>
            <li><a href="#">Training</a></li>
          </ul>
        </div> 
        <div class="col-sm-4">
          <h4>Branches</h4>
          <ul class="nav">
            <li><a href="#">Ikeja</a></li>
            <li><a href="#">Festac</a></li>
            <li><a href="#">Surulere</a></li>
            <li><a href="#">Lekki</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <p>&copy; 2016</p>
        </div>
        <div class="col-md-9">
          <p class="copy pull-right">
            <a href="#" target="_blank">www.alabiansolutions.com</a>
          </p>
        </div>
      </div>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>