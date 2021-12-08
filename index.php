<?php
$dir    = './musique/';
$audiotheque = scandir($dir);
array_shift($audiotheque);
array_shift($audiotheque);
?>

<!DOCTYPE html>
<html class="loading" lang="fr" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard Ecommerce - Frest - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="./app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="https://www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/extensions/swiper.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="./app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/themes/semi-dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/forms/select/select2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="./app-assets/css/core/menu/menu-types/horizontal-menu.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/pages/dashboard-ecommerce.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <!-- END: Custom CSS-->
	

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="horizontal-layout horizontal-menu navbar-static dark-layout 2-columns   footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns" data-layout="dark-layout">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-static-top bg-primary navbar-brand-center">
      <div class="navbar-header d-xl-block d-none">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item"><a class="navbar-brand" href="index.html">
              <h2 class="brand-text mb-0">NAOFM</h2></a></li>
        </ul>
      </div>
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="navbar-collapse" id="navbar-mobile">
            <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
              <ul class="nav navbar-nav">
                
              </ul>
              
            </div>
            <ul class="nav navbar-nav float-right d-flex align-items-center">
              <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-fr"></i><span class="selected-language d-lg-inline d-none">Français</span></a>
              </li>
              <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" data-toggle="dropdown"><i class="ficon bx bx-bell bx-tada bx-flip-horizontal"></i><span class="badge badge-pill badge-danger badge-up">0</span></a>
              </li>
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="javascript:void(0);" data-toggle="dropdown">
                  <div class="user-nav d-lg-flex d-none"><span class="user-name">Ilyes</span><span class="user-status"></span></div><span><img class="round" src="./app-assets/images/banner/banner-37.jpg" alt="avatar" height="40" width="40"></span></a>
                <div class="dropdown-menu dropdown-menu-right pb-0">
                  <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="#"><i class="bx bx-power-off mr-50"></i> Déconnexion</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Dashboard Ecommerce Starts -->
<section id="dashboard-ecommerce">
  <div class="row">
    <!-- Latest Update Starts -->
    <div class="col-xl-4 col-md-6 col-12 dashboard-latest-update">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center pb-50">
          <h4 class="card-title">Playlist</h4>
        </div>
        <div class="card-body p-0 pb-1">
          <ul class="list-group list-group-flush">
            <div id="playlist_music">
			
			</div>
          </ul>
        </div>
      </div>
    </div>
    
    <!-- Multi Radial Chart Starts -->
    <div class="col-xl-4 col-md-6 col-12 dashboard-visit">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h4 class="card-title">Player</h4>
        </div>
        <div class="card-body">
          <div class="badge-circle badge-circle-lg badge-circle-light-warning mx-auto mb-50" style="width: 200px; height: 200px;">
             <a href="#" class="warning"><i class="bx bx-microphone font-medium-5" style="font-size: 4.5rem!important;"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-12 dashboard-users">
      <div class="row">
        <!-- Statistics Cards Starts -->
        <div class="col-12">
          <div class="row">
            <div class="col-sm-6 col-12 dashboard-users-success">
              <div class="card text-center">
                <div class="card-body py-1">
                  <div class="badge-circle badge-circle-lg badge-circle-light-success mx-auto mb-50">
                    <i class="bx bx-briefcase-alt font-medium-5"></i>
                  </div>
                  <div class="text-muted line-ellipsis">Audiothèque</div>
                  <h3 class="mb-0"><?php print(count($audiotheque)); ?></h3>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-12 dashboard-users-danger">
              <div class="card text-center">
                <div class="card-body py-1">
                  <div class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto mb-50">
                    <i class="bx bx-user font-medium-5"></i>
                  </div>
                  <div class="text-muted line-ellipsis">Auditeur.ice.s</div>
                  <h3 class="mb-0">?</h3>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-12 dashboard-users-success">
              <div class="card text-center">
                <div class="card-body py-1">
                  <div class="form-group">
                    <select class="select2 form-control" id="musique_choice">
					  <?php
						foreach ($audiotheque as &$music) {
							print('<option value="'.$music.'">'.str_replace('_', ' ', $music).' | <strong>'.exec("ffmpeg -i /var/www/html/musique/".$music." 2>&1 | grep 'artist' | cut -d ':' -f 2").'</strong></option>');
						}
					  ?>
                    </select>
                  </div>
                  <div class="btn glow btn-primary" onclick="add_music_to_playlist();">
                    Ajouter à la playlist
                  </div>
				  <div class="btn glow btn-danger" onclick="reset_playlist();">
                    Reset la playlist
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Revenue Growth Chart Starts -->
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xl-8 col-12 dashboard-order-summary">
      <div class="card">
        <div class="row">
          <!-- Order Summary Starts -->
          <div class="col-md-8 col-12 order-summary border-right pr-md-0">
            <div class="card mb-0">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Stats</h4>
              </div>
              <div class="card-body p-0">
                <div id="order-summary-chart"></div>
              </div>
            </div>
          </div>
          <!-- Sales History Starts -->
          <div class="col-md-4 col-12 pl-md-0">
            <div class="card mb-0">
              <div class="card-footer border-top pb-md-0">
                <h5>Total</h5>
                <span class="text-primary text-bold-500">?</span>
                <div class="progress progress-bar-primary progress-sm mt-50 mb-md-50">
                  <div class="progress-bar" role="progressbar" aria-valuenow="20" style="width:20%"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Dashboard Ecommerce ends -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


   <div class="buy-now"><a style="border-radius: 50%;width: 100px;height: 100px;padding-top: 37%;font-weight: 500;" onclick="start_radio();" target="_blank" class="btn btn-danger">ON AIR</a></div>
    <!-- End: Customizer-->

    <!-- Buynow Button-->
    

    <!-- demo chat-->
    
<!-- widget chat demo ends -->

    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" integrity="sha384-aBL3Lzi6c9LNDGvpHkZrrm3ZVsIwohDD7CDozL0pk8FwCrfmV7H9w8j3L7ikEv6h" crossorigin="anonymous"></script>
    <!-- BEGIN: Vendor JS-->
    <script src="./app-assets/vendors/js/vendors.min.js"></script>
    <script src="./app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
    <script src="./app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
    <script src="./app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="./app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="./app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="./app-assets/vendors/js/extensions/swiper.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="./app-assets/js/scripts/configs/horizontal-menu.min.js"></script>
    <script src="./app-assets/js/scripts/configs/vertical-menu-dark.min.js"></script>
    <script src="./app-assets/js/core/app-menu.min.js"></script>
    <script src="./app-assets/js/core/app.min.js"></script>
    <script src="./app-assets/js/scripts/components.min.js"></script>
    <script src="./app-assets/js/scripts/footer.min.js"></script>
    <script src="./app-assets/js/scripts/customizer.min.js"></script>
    <script src="./app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="./app-assets/js/scripts/pages/dashboard-ecommerce.min.js"></script>
    <script src="./app-assets/js/scripts/forms/select/form-select2.min.js"></script>
	<script src="./app-assets/js/scripts/pages/bootstrap-toast.min.js"></script>
	<script src="./app-assets/js/scripts/pages/dashboard-ecommerce.min.js"></script>
	
	<script>
	function add_music_to_playlist(){
		$.ajax({
		  url: 'add_playlist.php',
		  dataType: 'json',
		  data: { musique: $("#musique_choice").val()},
		  type: 'POST',
		  headers: {
			'Access-Control-Allow-Origin': '*'
		  },

		  success: function (data) {
			if(data == "1"){
				reload_playlist();
			}
		  }
		});
	}
	
	function reset_playlist(){
		$.ajax({
		  url: 'reset_playlist.php',
		  dataType: 'json',
		  data: {},
		  type: 'POST',
		  headers: {
			'Access-Control-Allow-Origin': '*'
		  },

		  success: function (data) {
			if(data == "1"){
				reload_playlist();
			}
		  }
		});
	}
	
	function start_radio(){
		$.ajax({
		  url: 'start_radio.php',
		  dataType: 'json',
		  data: {},
		  type: 'POST',
		  headers: {
			'Access-Control-Allow-Origin': '*'
		  },

		  success: function (data) {
			if(data == "1"){
				
			}
		  }
		});
	}
	
	function reload_playlist(){
		var result = "";
		$.ajax({
		  url: 'reload_playlist.php',
		  type: 'POST',
		  dataType: 'json',
		  data: {},
		  headers: {
			'Access-Control-Allow-Origin': '*'
		  },

		  success: function (data) {
			$("#playlist_music").html(data);
		  }
		});
	}
	reload_playlist();
	</script>
    <!-- END: Page JS-->
	

  </body>
  <!-- END: Body-->
</html>