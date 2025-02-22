<?php
        include('./php/track_page_visits.php');
        store_visited_pages("Popular Products Page");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Popular Products</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Cache-control" content="public">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <style>
        .product-image {
            max-width: 300px;  /* or any size you want */
        height: auto; /* maintain aspect ratio */
        object-fit: cover;
    }

	
    </style>
<!--===============================================================================================-->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="js/product.js"></script>
    <script src="js/common.js"></script>
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Currency - USD
						</a>
						
						<a href="#" id="top_bar_login" data-toggle="modal" data-target="#loginModal" class="flex-c-m trans-04 p-lr-25">
							Login to My Account
						</a>
						
					    <a href="#" class="flex-c-m trans-04 p-lr-25 username"  style="display:none;">
						
						</a>
						
						<a href="popular_products.php" id="top_bar_logout" style="display:none;" class="flex-c-m trans-04 p-lr-25">
							Logout
						</a>
					</div>
				</div>
			</div>

<!--Login Popup-->
<div class="modal fade" id="loginModal" role="dialog" style="z-index:10000;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="display: unset;text-align: center;">
          <button type="button" onclick="location.reload();" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login / Sign-up</h4>
        </div>
        <div class="modal-body" style="overflow:none;">
          <iframe src="login.php" style="width: 470px;height: 470px;"></iframe>
        </div>
      </div>
      
    </div>
  </div>
  
  <!--Tracking Popup-->
  <div class="modal fade" id="trackingModal" role="dialog" style="z-index:10000;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="display: unset;text-align: center;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tracking System</h4>
        </div>
        <div class="modal-body" style="overflow:none;">
          <iframe src="tracking.php" style="width: 470px;height: 470px;"></iframe>
        </div>
      </div>
      
    </div>
  </div>


			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<!-- <a href="#" class="logo">
						<img src="images/icons/logo-01.png" alt="IMG-LOGO">
					</a> -->

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="index.php">Home</a>
							</li>

							<li>
								<a href="product.php">Shop</a>
							</li>

							<li  class="active-menu label1" data-label1="hot">
								<a href="popular_products.php">Popular Products</a>
							</li>

							<!-- <li>
								<a href="blog.php">News</a>
							</li> -->

							<li >
								<a href="about.php">About</a>
							</li>

							<li >
								<a href="contact.php">Contact</a>
							</li>
							
							<li>
								<a href="#" data-toggle="modal" data-target="#trackingModal">Page Tracking</a>
							</li>
							<li>
								<a href="users.php">Users list</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11">
							<a href="shoping-cart.php" style="color: black;" ><i class="zmdi zmdi-shopping-cart"></i></a>
						</div>

					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.php"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Currency - USD
						</a>
						
						<a href="#" id="top_bar_login" data-toggle="modal" data-target="#myModal" class="flex-c-m p-lr-10 trans-04">
							Login to My Account
						</a>
						
						<a href="#" class="flex-c-m p-lr-10 trans-04 username"  style="display:none;" >
						</a>
						
						<a href="#" id="top_bar_logout" style="display:none;" class="flex-c-m p-lr-10 trans-04">
							Logout
						</a>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="index.php">Home</a>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="product.php">Shop Products</a>
				</li>

				<li>
					<a href="shoping-cart.php" class="label1 rs1" data-label1="hot">Features</a>
				</li>

				<!-- <li>
					<a href="blog.php">News</a>
				</li> -->

				<li>
					<a href="about.php">About</a>
				</li>

				<li>
					<a href="contact.php">Contact</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

	
	<div class="col-sm-6 col-lg-3 p-b-50">
    <h4 class="stext-301 cl0 p-b-30">
        Products
    </h4>

    <ul>
        <li class="p-b-10">
            <a href="product_view.php?product=Coffee Beans 1&image=https://cdn-abhgc.nitrocdn.com/tyJLQPlyhBXItjeLAyrrLplRUFFlgsyP/assets/images/optimized/rev-ddd9cab/www.coffeeness.de/wp-content/uploads/2023/02/kaffeebohnen-uebersicht.jpg&rating=3&review=nice" class="stext-107 cl7 hov-cl1 trans-04">
                <img class="product-image" src="https://cdn-abhgc.nitrocdn.com/tyJLQPlyhBXItjeLAyrrLplRUFFlgsyP/assets/images/optimized/rev-ddd9cab/www.coffeeness.de/wp-content/uploads/2023/02/kaffeebohnen-uebersicht.jpg"  >
                Coffee Beans 1
            </a>
        </li>
        <li class="p-b-10">
            <a href="product_view.php?product=Coffee Beans&image=https://bamboo-bob.com/cdn/shop/products/ScreenShot2020-12-08at1.42.50AM_72364a63-ae69-42be-926c-e3d71944aa83.png?v=1673961955&rating=3&review=nice" class="stext-107 cl7 hov-cl1 trans-04">
                <img class="product-image" src="https://bamboo-bob.com/cdn/shop/products/ScreenShot2020-12-08at1.42.50AM_72364a63-ae69-42be-926c-e3d71944aa83.png?v=1673961955" alt="Product 2">
                Coffee Beans 2
            </a>
        </li>
        <li class="p-b-10">
            <a href="product_view.php?product=Coffee Beans&image=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQB14jef5ohBH5ME309wDiPruP5oJjI7r3ciA&s&rating=3&review=nice" class="stext-107 cl7 hov-cl1 trans-04">
                <img class="product-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQB14jef5ohBH5ME309wDiPruP5oJjI7r3ciA&s"  >
                Coffee Beans 3
            </a>
        </li>
        <li class="p-b-10">
            <a href="product_view.php?product=Coffee Beans&image=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_SkC7C2iQJaK7bPOVlMpcEwwCRhJqEJ8tYQ&s&rating=3&review=nice" class="stext-107 cl7 hov-cl1 trans-04">
                <img class="product-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_SkC7C2iQJaK7bPOVlMpcEwwCRhJqEJ8tYQ&s"  >
                Coffee Beans 4
            </a>
        </li>
        <li class="p-b-10">
            <a href="product_view.php?product=Coffee Beans&image=https://cdn-abhgc.nitrocdn.com/tyJLQPlyhBXItjeLAyrrLplRUFFlgsyP/assets/images/optimized/rev-ddd9cab/www.coffeeness.de/wp-content/uploads/2023/02/kaffeebohnen-uebersicht.jpg&rating=3&review=nice" class="stext-107 cl7 hov-cl1 trans-04">
                <img class="product-image" src="https://cdn-abhgc.nitrocdn.com/tyJLQPlyhBXItjeLAyrrLplRUFFlgsyP/assets/images/optimized/rev-ddd9cab/www.coffeeness.de/wp-content/uploads/2023/02/kaffeebohnen-uebersicht.jpg"  >
                Coffee Beans 5
            </a>
        </li>
        <li class="p-b-10">
            <a href="product_view.php?product=Coffee Beans&image=https://cdn-abhgc.nitrocdn.com/tyJLQPlyhBXItjeLAyrrLplRUFFlgsyP/assets/images/optimized/rev-ddd9cab/www.coffeeness.de/wp-content/uploads/2023/02/kaffeebohnen-uebersicht.jpg&rating=3&review=nice" class="stext-107 cl7 hov-cl1 trans-04">
                <img class="product-image" src="https://cdn-abhgc.nitrocdn.com/tyJLQPlyhBXItjeLAyrrLplRUFFlgsyP/assets/images/optimized/rev-ddd9cab/www.coffeeness.de/wp-content/uploads/2023/02/kaffeebohnen-uebersicht.jpg"  >
                Coffee Beans
            </a>
        </li>

        <li class="p-b-10">
            <a href="product_view.php?product=SR1G&image=https://bachhubrilliance.com/wp-content/uploads/2024/02/SR1G.webp&rating=3&review=nice" class="stext-107 cl7 hov-cl1 trans-04">
                <img class="product-image" src="https://bachhubrilliance.com/wp-content/uploads/2024/02/SR1G.webp" alt="Product 2">
                SR1G
            </a>
        </li>

        <li class="p-b-10">
            <a href="product_view.php?product=M2477&image=https://bachhubrilliance.com/wp-content/uploads/2024/02/M2477.webp&rating=0&review=nice" class="stext-107 cl7 hov-cl1 trans-04">
                <img class="product-image"  src="https://bachhubrilliance.com/wp-content/uploads/2024/02/M2477.webp" alt="Product 3">
                M2477
            </a>
        </li>

		<li class="p-b-10">
            <a href="product_view.php?product=M2477&image=https://bachhubrilliance.com/wp-content/uploads/2024/02/M2477.webp&rating=0&review=nice" class="stext-107 cl7 hov-cl1 trans-04">
                <img class="product-image"  src="https://bachhubrilliance.com/wp-content/uploads/2024/02/SR1G.webp" alt="Product 3">
                SR1G
            </a>
        </li>

		<li class="p-b-10">
            <a href="product_view.php?product=M2477&image=https://bachhubrilliance.com/wp-content/uploads/2024/02/M2517H.webp&rating=0&review=nice" class="stext-107 cl7 hov-cl1 trans-04">
                <img class="product-image"  src="https://bachhubrilliance.com/wp-content/uploads/2024/02/M2517H.webp" alt="Product 4">
                2517H
            </a>
        </li>


		<li class="p-b-10">
            <a href="product_view.php?product=M2477&image=https://bachhubrilliance.com/wp-content/uploads/2024/02/SR97D.webp&rating=0&review=nice" class="stext-107 cl7 hov-cl1 trans-04">
                <img class="product-image"  src="https://bachhubrilliance.com/wp-content/uploads/2024/02/SR97D.webp" alt="Product 5">
                SR97D
            </a>
        </li>


		<li class="p-b-10">
            <a href="product_view.php?product=M2477&image=https://bachhubrilliance.com/wp-content/uploads/2024/02/SR100A.webp&rating=0&review=nice" class="stext-107 cl7 hov-cl1 trans-04">
                <img class="product-image"  src="https://bachhubrilliance.com/wp-content/uploads/2024/02/SR100A.webp" alt="Product 6">
                SR100A
            </a>
        </li>

		<li class="p-b-10">
            <a href="product_view.php?product=M2477&image=https://bachhubrilliance.com/wp-content/uploads/2024/02/SR80A.webp&rating=0&review=nice" class="stext-107 cl7 hov-cl1 trans-04">
                <img class="product-image"  src="https://bachhubrilliance.com/wp-content/uploads/2024/02/SR80A.webp" alt="Product 7">
                SR80A
            </a>
        </li>

        <li class="p-b-10">
            <a href="product_view.php?product=Atomic Habits&image=https://i.ebayimg.com/images/g/3ZoAAOSwtAxkq9Ex/s-l1600.jpg&rating=3&review=nice" class="stext-107 cl7 hov-cl1 trans-04">
                <img class="product-image" src="https://i.ebayimg.com/images/g/3ZoAAOSwtAxkq9Ex/s-l1600.jpg" alt="Product 8">
                Atomic Habits
            </a>
        </li>

		<li class="p-b-10">
            <a href="https://i5.walmartimages.com/seo/Pilot-G2-Retractable-Gel-Ink-Pens-Fine-Point-Black-Ink-10-Count_ccdd2273-3a13-4d2d-9123-c2b3fabdf396.23cbb880147069a22b93c92b86a9ca06.jpeg?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF&rating=3&review=nice" class="stext-107 cl7 hov-cl1 trans-04">
                <img class="product-image" src="https://i5.walmartimages.com/seo/Pilot-G2-Retractable-Gel-Ink-Pens-Fine-Point-Black-Ink-10-Count_ccdd2273-3a13-4d2d-9123-c2b3fabdf396.23cbb880147069a22b93c92b86a9ca06.jpeg?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF" alt="Product 9">
                Pens
            </a>
        </li>

		




        <li class="p-b-10">
            <a href="product_view.php?product=iphone12&image=https://apollo.olx.in/v1/files/u3mhrhjmy3881-IN/image;s=272x0&rating=0&review=''" class="stext-107 cl7 hov-cl1 trans-04">
                <img class="product-image"  src="https://apollo.olx.in/v1/files/u3mhrhjmy3881-IN/image;s=272x0" alt="Product 5">
                Iphone 12   
            </a>
        </li>
    </ul>
</div>
		

	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Categories
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="product.php" class="stext-107 cl7 hov-cl1 trans-04">
								Bikes
							</a>
						</li>

						<li class="p-b-10">
							<a href="product.php" class="stext-107 cl7 hov-cl1 trans-04">
								Games
							</a>
						</li>

						<li class="p-b-10">
							<a href="product.php" class="stext-107 cl7 hov-cl1 trans-04">
								Books
							</a>
						</li>

						<li class="p-b-10">
							<a href="product.php" class="stext-107 cl7 hov-cl1 trans-04">
								Homes
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Help
					</h4>

					<ul>
					
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								FAQs
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						GET IN TOUCH
					</h4>

					<p class="stext-107 cl7 size-201">
						Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
					</p>

					<div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-pinterest-p"></i>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Newsletter
					</h4>

					<form>
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Subscribe
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="p-t-40">
				<div class="flex-c-m flex-w p-b-18">
					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
					</a>
				</div>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	<!-- Modal1 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
		<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="images/product-detail-01.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-01.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="images/product-detail-02.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-02.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-02.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="images/product-detail-03.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-03.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-03.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								Lightweight Jacket
							</h4>

							<span class="mtext-106 cl2">
								$58.79
							</span>

							<p class="stext-102 cl3 p-t-23">
								Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
							</p>
							
							<!--  -->
							<div class="p-t-33">
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Size
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Size S</option>
												<option>Size M</option>
												<option>Size L</option>
												<option>Size XL</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Color
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Red</option>
												<option>Blue</option>
												<option>White</option>
												<option>Grey</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>

										<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
											Add to cart
										</button>
									</div>
								</div>	
							</div>

							<!--  -->
							<div class="flex-w flex-m p-l-100 p-t-40 respon7">
								<div class="flex-m bor9 p-r-10 m-r-11">
									<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
										<i class="zmdi zmdi-favorite"></i>
									</a>
								</div>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
									<i class="fa fa-facebook"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
									<i class="fa fa-twitter"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/---------------------------------------------/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>