<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <?php echo view('_partial_global/_partial_global_css'); ?>
</head>

<body>
  <div id="preloader" style="position: fixed; z-index: 10000; background: #fafafa; width: 100%; height: 100%"><img style="opacity: 0.5; position: fixed; top: calc(50% - 50px); left: calc(50% - 50px)" src="<?php echo base_url('public/assets/images/loading.gif'); ?>" alt="loading"></div>
  <div class="m-application theme--light transition-page" id="app">
    <div class="loading"></div>
    <div class="m-content cloud <?php echo THEME; ?>" id="main-wrap">
      <div>
        <div id="home"></div>
        <div class="main-wrap">
          <!-- ##### HEADER #####-->
          <?php echo view('_partial_landing/_partial_header_mobile'); ?>
          <?php echo view('_partial_landing/_partial_header_web'); ?>
          <!-- ##### END HEADER #####-->
          <main class="container-wrap">
            <!-- ##### BANNER #####-->
            <?php echo view('_partial_landing/_partial_banner'); ?>
            <!-- ##### END BANNER #####-->
            <!-- ##### PROMOTION #####-->
            <section id="promotion">
              <div class="root">
                <div class="slider-wrap">
                  <div class="cloud-top">
                    <svg>
                      <g transform="translate(0.000000, -10.000000)">
                        <g transform="translate(628.500000, 205.500000) scale(1, -1) translate(-628.500000, -205.500000) translate(-17.000000, 10.000000)">
                          <ellipse cx="235" cy="205" rx="114" ry="95"></ellipse>
                          <ellipse cx="95" cy="161.5" rx="95" ry="78.5"></ellipse>
                          <ellipse cx="429.5" cy="169.5" rx="145.5" ry="121.5"></ellipse>
                          <ellipse cx="678" cy="125.5" rx="151" ry="125.5"></ellipse>
                          <ellipse cx="865.5" cy="174.5" rx="100.5" ry="83.5"></ellipse>
                          <ellipse cx="1095" cy="227.5" rx="196" ry="163.5"></ellipse>
                        </g>
                      </g>
                    </svg>
                  </div>
                  <div class="cloud-top-cover">
                    <svg>
                      <g transform="translate(0.000000, -10.000000)">
                        <g transform="translate(628.500000, 205.500000) scale(1, -1) translate(-628.500000, -205.500000) translate(-17.000000, 10.000000)">
                          <ellipse cx="235" cy="205" rx="114" ry="95"></ellipse>
                          <ellipse cx="95" cy="161.5" rx="95" ry="78.5"></ellipse>
                          <ellipse cx="429.5" cy="169.5" rx="145.5" ry="121.5"></ellipse>
                          <ellipse cx="678" cy="125.5" rx="151" ry="125.5"></ellipse>
                          <ellipse cx="865.5" cy="174.5" rx="100.5" ry="83.5"></ellipse>
                          <ellipse cx="1095" cy="227.5" rx="196" ry="163.5"></ellipse>
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
              </div>
            </section><!-- ##### END PROMOTION #####-->
            <!-- ##### FEATURE #####-->
            <section id="feature">
              <?php echo view('_partial_landing/_partial_feature'); ?>
            </section>
            <!-- ##### END FEATURE #####-->
            <!-- ##### PRICING #####-->
            <div id="particles">
              <div class="deco">
                <div class="deco-inner">
                  <img width="1000" src="<?php echo base_url('public/assets/images/hosting/particle.png') ?>" alt="particle">
                </div>
              </div>
            </div>
            <section class="space-top-short" id="pricing">
              <?php echo view('_partial_landing/_partial_pricing'); ?>
            </section>
            <!-- ##### END PRICING #####-->
            <!-- ##### MORE FEATURE #####-->
            <section id="feature">
              <?php echo view('_partial_landing/_partial_more_feature'); ?>
            </section>
            <!-- ##### END MORE FEATURE #####-->
            <!-- ##### BENEFIT #####-->
            <section id="benefit">
              <?php echo view('_partial_landing/_partial_benefit'); ?>
            </section>
            <!-- ##### END BENEFIT #####-->
            <!-- ##### TESTIMONIAL #####-->
            <section class="space-top-short" id="testimonials">
              <?php echo view('_partial_landing/_partial_testimonial'); ?>
            </section>
            <!-- ##### END TESTIMONIAL #####-->
          </main><!-- ##### FOOTER #####-->
          <footer class="space-top" id="footer">
            <?php echo view('_partial_landing/_partial_footer'); ?>
          </footer>
          <!-- ##### END FOOTER #####-->
          <!-- ##### PAGE NAV #####-->
          <?php echo view('_partial_landing/_partial_page_nav'); ?>
          <!-- ##### END PAGE NAV #####-->
          <!-- ##### NOTIFICATION #####-->
          <div class="hidden-md-down">
            <div class="alert full alert-dismissible fade show notification" role="alert">
              <div class="wrapper">
                <div class="content">
                  <div class="action">This is an example of a message that is commonly used for important information to visitors or users. Please click the button beside to close this message.</div>
                  <button class="btn secondary waves-effect" type="button" data-dismiss="alert" aria-label="Close">Accept</button>
                </div>
              </div>
            </div>
          </div><!-- ##### END NOTIFICATION #####-->
        </div>
      </div>
    </div>
  </div><!-- Scripts--><!-- Put the 3rd/plugins javascript here-->
  <?php echo view('landing/_partial_js'); ?>
  <!-- Custom -->
</body>

</html>