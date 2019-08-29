<?php require('template/header.php'); ?>
<?php $pageName = 'Services'; ?>
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
                <li class="active"><a href="#">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
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
              <div class="col-sm-4">
                <span class="fa fa-android"></span>
                <h1>Mobile Development</h1>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat nemo, id expedita at molestias hic odit amet officiis laboriosam vero optio inventore dolorum accusantium fugiat accusamus blanditiis ratione, doloribus voluptates.
                </p>
                <a href="#" class="btn btn-primary">Readmore</a>
              </div>
              <div class="col-sm-4">
                <span class="fa fa-apple"></span>
                <h1>Software Development</h1>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat nemo, id expedita at molestias hic odit amet officiis laboriosam vero optio inventore dolorum accusantium fugiat accusamus blanditiis ratione, doloribus voluptates.
                </p>
                <a href="#" class="btn btn-primary">Readmore</a>
              </div>
              <div class="col-sm-4">
                <span class="fa fa-code"></span>
                <h1>Web Development</h1>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat nemo, id expedita at molestias hic odit amet officiis laboriosam vero optio inventore dolorum accusantium fugiat accusamus blanditiis ratione, doloribus voluptates.
                </p>
                <a href="#" class="btn btn-primary">Readmore</a>
              </div>
            </div>
          </div>
          <?php require ('template/sidebar.php'); ?>
          <!-- END OF ASIDE CONTENT -->
        </div>
      </section>
    </div>
    <?php require_once ('template/footer.php'); ?>