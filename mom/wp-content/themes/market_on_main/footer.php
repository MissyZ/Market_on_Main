<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Market_on_Main
 */

?>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-4">
            <nav class="navbar nav-pills nav-stacked">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span>Menu</span>
                  </button>
                </div><!-- navbar-header -->

                <div class="collapse navbar-collapse" id="navbar-collapse-2">
                  <ul class="nav navbar-nav">
                    <li><a href="mom.html">Home</a></li>
                    <li><a href="mom_calendar.html">Calendar</a></li>
                    <li><a href="mom_vendors.html">Vendors</a></li>
                    <li><a href="mom_our_staff.html">Our Staff</a></li>
                    <li class="active"><a href="mom_about_us">About Us <span class="sr-only">(current)</span></a></li>
                  </ul>
                  
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div><!-- col-4 -->
          <div class="col-md-6 col-sm-8 text-center" id="footer_hours">
            <div>Tuesday - Friday 11:00am - 7:00pm</div>
            <div>Saturday 8:00am - 4:00pm</div><br>
            <ul>
              <div>Follow Us:&nbsp;</div>
              <li><a href="" alt="facebook link"></a>F&nbsp;</li>
              <li><a href="" alt="instagram link"></a>C</li>
            </ul>
          </div><!-- col-4 -->
          <div class="col-md-3 col-sm-12 text-right">
            <address>
              Market on Main<br>
              331 E. Main St<br>
              Ottumwa, IA 52501<br>
              641-682-0261
            </address>
          </div><!-- col-4 -->
        </div><!-- row -->
      </div><!-- container -->
    </footer>


<?php wp_footer(); ?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
