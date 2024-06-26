<!doctype html>
<html class="no-js"  lang="en">

	<head>
		<!-- META DATA -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

		<!-- TITLE OF SITE -->
		<title>TravelBook</title>

		<!-- favicon img -->
		<link rel="shortcut icon" type="image/icon" href="{{asset('homeassets/logo/favicon.ico')}}">

		<!--font-awesome.min.css-->
		<link rel="stylesheet" href="{{asset('homeassets/css/font-awesome.min.css')}}" />

		<!--animate.css-->
		<link rel="stylesheet" href="{{asset('homeassets/css/animate.css')}}" />

		<!--hover.css-->
		<link rel="stylesheet" href="{{asset('homeassets/css/hover-min.css')}}">

		<!--datepicker.css-->
		<link rel="stylesheet"  href="{{asset('homeassets/css/datepicker.css')}}" >

		<!--owl.carousel.css-->
        <link rel="stylesheet" href="{{asset('homeassets/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('homeassets/css/owl.theme.default.min.css')}}"/>

		<!-- range css-->
        <link rel="stylesheet" href="{{asset('homeassets/css/jquery-ui.min.css')}}" />

		<!--bootstrap.min.css-->
		<link rel="stylesheet" href="{{asset('homeassets/css/bootstrap.min.css')}}" />

		<!-- bootsnav -->
		<link rel="stylesheet" href="{{asset('homeassets/css/bootsnav.css')}}"/>

		<!--style.css-->
		<link rel="stylesheet" href="{{asset('homeassets/css/style.css')}}" />

		<!--responsive.css-->
		<link rel="stylesheet" href="{{asset('homeassets/css/responsive.css')}}" />

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<style>
		.Card-Body{
			display: flex;
			justify-content: center;
			align-items: center;
			height: 50vh;
			margin: 0;
			background-color: #f0f0f0;
			font-family: Arial, sans-serif;
			background-color: white;
		}

		.card {
			display: flex;
			justify-content: center;
			align-items: center;
			background-color: #fff;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
			border-radius: 10px;
			overflow: hidden;
			max-width: 900px;
			width: 100%;
			margin: 20px;
			margin-top : 1rem;
			margin-bottom: 1rem; 
		}

		.card-img {
			width: 250px;
			height: auto;
			object-fit: cover;
			border-right: 2px solid #ddd;
		}

		.card-content {
			height: 100%;
			padding: 20px;
			flex: 1;
		}

		.card-title {
			font-size: 2rem;
			color: #333;
			margin: 0;
			margin-bottom: 1rem;
		}

		.card-duration,
		.card-seller,
		{
			font-size: 1rem;
			color: #666;
		}

		.card-details {
			margin-top: 10px;
		}

		.card-icons span {
			margin-right: 15px;
			color: #666;
			font-size: 1.3rem;
		}

		.card-price {
			font-size: 1rem;
			padding: 60px;
			background-color: #f9f9f9;
			text-align: center;
			border-left: 2px solid #ddd;
			min-width: 150px;
		}

		.price {
			font-size: 1.5rem;
			color: #e74c3c;
			margin: 0;
		}

		.price-desc {
			font-size: 0.875rem;
			color: #666;
		}

		.view-details {
			margin-top: 4rem;
			padding: 10px 20px;
			background-color: #e74c3c;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 1rem;
			width: 10rem;
		}

		.view-details:hover {
			background-color: #c0392b;
		}

		.earn-cash {
			font-size: 0.875rem;
			color: #666;
			margin-top: 10px;
		}
	</style>
	<body>
		<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->

		<!-- main-menu Start -->
		<header class="top-area">
			<div class="header-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-2">
							<div class="logo">
								<a href="index.html">
									Travel<span>Book</span>
								</a>
							</div><!-- /.logo-->
						</div><!-- /.col-->
						<div class="col-sm-10">
							<div class="main-menu">
							
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<i class="fa fa-bars"></i>
									</button><!-- / button-->
								</div><!-- /.navbar-header-->
								<div class="collapse navbar-collapse">		  
									<ul class="nav navbar-nav navbar-right">
										<li class="smooth-menu"><a href="#home">home</a></li>
										<li class="smooth-menu"><a href="#gallery">Destination</a></li>
										<li class="smooth-menu"><a href="#pack">Packages </a></li>
										<li class="smooth-menu"><a href="#blog">blog</a></li>
										<li class="smooth-menu"><a href="#subs">subscription</a></li>
										@if(Route::has('login'))

											@auth
												<li>
													<form method="POST" action="{{ route('logout')}}">
																@csrf
																<input type="submit" value="Logout" class="book-btn">

													</form>
												</li>
											@else
												<li>
													<a href="{{ route('login') }}"> 
														<button class="book-btn">Login</button>
													</a> 
												</li>
											@endauth
										@endif
										<!--/.project-btn--> 
									</ul>
								</div><!-- /.navbar-collapse -->
							</div><!-- /.main-menu-->
						</div><!-- /.col-->
					</div><!-- /.row -->
					<div class="home-border"></div><!-- /.home-border-->
				</div><!-- /.container-->
			</div><!-- /.header-area -->

		</header><!-- /.top-area-->
		<!-- main-menu End -->

		
		<!--about-us start -->
		<section id="home" class="about-us">
			<div class="container">
				<div class="about-us-content">
					<div class="row">
						<div class="col-sm-12">
							<div class="single-about-us">
								<div class="about-us-txt">
									<h2>
										Explore the Beauty of the Beautiful World 

									</h2>
									<div class="about-btn smooth-menu">
										<a href="#gallery" >
										<button  class="about-view " >
											explore now
										</button>
										</a>
									</div><!--/.about-btn-->
								</div><!--/.about-us-txt-->
							</div><!--/.single-about-us-->
						</div><!--/.col-->
						<div class="col-sm-0">
							<div class="single-about-us">
								
							</div><!--/.single-about-us-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.about-us-content-->
			</div><!--/.container-->

		</section><!--/.about-us-->
		<!--about-us end -->

		<!--travel-box start-->
		<section  class="travel-box">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<div class="single-travel-boxes">
						<div id="desc-tabs" class="desc-tabs">

						<ul class="nav nav-tabs" role="tablist">

							<li role="presentation" class="active">
								<a href="#tours" aria-controls="tours" role="tab" data-toggle="tab">
									<i class="fa fa-tree"></i>
									tours
								</a>
							</li>

							<li role="presentation">
								<a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">
									<i class="fa fa-building"></i>
									hotels
								</a>
							</li>

							<li role="presentation">
								<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">
									<i class="fa fa-plane"></i>
									flights
								</a>
							</li>
						</ul>

							<!-- Tab panes -->
						<div class="tab-content">

								<div role="tabpanel" class="tab-pane active fade in" id="tours">
									<div class="tab-para">
									
									<form id="tourSearchForm" method="GET" action="{{ route('searchTours') }}">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="single-tab-select-box">
													<h2>Destination</h2>
													<div class="travel-select-icon">
														<select class="form-control" name="DestinationFrom">
															<option value="default" selected disabled hidden>Enter your destination</option>
															@foreach($data as $tour)
															  	<option value="{{$tour->DestinationFrom}}">{{$tour->DestinationFrom}}</option>
															@endforeach
															
														</select>
													</div>
													<div class="travel-select-icon">
														<select class="form-control" name="DestinationTo">
															<option value="default" selected disabled hidden>Enter your destination location</option>
															@foreach($data as $tour)
															  	<option value="{{$tour->DestinationTo}}">{{$tour->DestinationTo}}</option>
															@endforeach
														</select>
													</div>
												</div>
											</div>
											<div class="col-lg-2 col-md-3 col-sm-4">
												<div class="single-tab-select-box">
													<h2>Tour Date</h2>
													<div class="travel-check-icon">
														<input type="text" name="date" class="form-control" data-toggle="datepicker" placeholder="22-01-2017">
													</div>
												</div>
											</div>
											<div class="col-lg-2 col-md-1 col-sm-4">
												<div class="single-tab-select-box">
													<h2>Adults</h2>
													<div class="travel-select-icon">
														<select class="form-control" name="adults">
															<option value="default">None</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
															<option value="6">6</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-lg-2 col-md-1 col-sm-4">
												<div class="single-tab-select-box">
													<h2>Children</h2>
													<div class="travel-select-icon">
														<select class="form-control" name="children">
															<option value="default">None</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-7">
												<div class="about-btn travel-mrt-0 pull-right">
													<button type="submit" class="about-view travel-btn" onclick=SearchTour()>Search</button>
												</div>
											</div>
										</div>
									</form>


									</div><!--/.tab-para-->

								</div><!--/.tabpannel-->

								<div role="tabpanel" class="tab-pane fade in" id="hotels">
									<div class="tab-para">
										
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="single-tab-select-box">

													<h2>destination</h2>

													<div class="travel-select-icon">
														<select class="form-control ">

															<option value="default">enter your destination </option><!-- /.option-->

															<option value="turkey">turkey</option><!-- /.option-->

															<option value="russia">russia</option><!-- /.option-->
															<option value="egept">egypt</option><!-- /.option-->

														</select><!-- /.select-->
													</div><!-- /.travel-select-icon -->

													<div class="travel-select-icon">
														<select class="form-control ">

															<option value="default">enter your destination location</option><!-- /.option-->

															<option value="istambul">istambul</option><!-- /.option-->

															<option value="mosko">mosko</option><!-- /.option-->
															<option value="cairo">cairo</option><!-- /.option-->

														</select><!-- /.select-->
													</div><!-- /.travel-select-icon -->

												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->

											<div class="col-lg-2 col-md-3 col-sm-4">
												<div class="single-tab-select-box">
													<h2>check in</h2>
													<div class="travel-check-icon">
														<form action="#">
															<input type="text" name="check_in" class="form-control" data-toggle="datepicker" placeholder="12 -01 - 2017 ">
														</form>
													</div><!-- /.travel-check-icon -->
												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->

											<div class="col-lg-2 col-md-3 col-sm-4">
												<div class="single-tab-select-box">
													<h2>check out</h2>
													<div class="travel-check-icon">
														<form action="#">
															<input type="text" name="check_out" class="form-control"  data-toggle="datepicker" placeholder="22 -01 - 2017 ">
														</form>
													</div><!-- /.travel-check-icon -->
												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->

											<div class="col-lg-2 col-md-1 col-sm-4">
												<div class="single-tab-select-box">
													<h2>duration</h2>
													<div class="travel-select-icon">
														<select class="form-control ">

															<option value="default">5</option><!-- /.option-->

															<option value="10">10</option><!-- /.option-->

															<option value="15">15</option><!-- /.option-->
															<option value="20">20</option><!-- /.option-->

														</select><!-- /.select-->
													</div><!-- /.travel-select-icon -->
												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->

											<div class="col-lg-2 col-md-1 col-sm-4">
												<div class="single-tab-select-box">
													<h2>members</h2>
													<div class="travel-select-icon">
														<select class="form-control ">

															<option value="default">1</option><!-- /.option-->

															<option value="2">2</option><!-- /.option-->

															<option value="4">4</option><!-- /.option-->
															<option value="8">8</option><!-- /.option-->

														</select><!-- /.select-->
													</div><!-- /.travel-select-icon -->
												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->

										</div><!--/.row-->

										<div class="row">
											<div class="col-sm-5"></div><!--/.col-->
											<div class="clo-sm-7">
												<div class="about-btn travel-mrt-0 pull-right">
													<button  class="about-view travel-btn">
														search	
													</button><!--/.travel-btn-->
												</div><!--/.about-btn-->
											</div><!--/.col-->

										</div><!--/.row-->

									</div><!--/.tab-para-->

								</div><!--/.tabpannel-->

								<div role="tabpanel" class="tab-pane fade in" id="flights">
									<div class="tab-para">
										<div class="trip-circle">
											<div class="single-trip-circle">
												<input type="radio" id="radio01" name="radio" />
												<label for="radio01">
													<span class="round-boarder">
														<span class="round-boarder1"></span>
													</span>round trip
												</label>
											</div><!--/.single-trip-circle-->
											<div class="single-trip-circle">
												<input type="radio" id="radio02" name="radio" />
												<label for="radio02">
													<span class="round-boarder">
														<span class="round-boarder1"></span>
													</span>on way
												</label>
											</div><!--/.single-trip-circle-->
										</div><!--/.trip-circle-->
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="single-tab-select-box">

													<h2>from</h2>

													<div class="travel-select-icon">
														<select class="form-control ">

															<option value="default">enter your location</option><!-- /.option-->

															<option value="turkey">turkey</option><!-- /.option-->

															<option value="russia">russia</option><!-- /.option-->
															<option value="egept">egypt</option><!-- /.option-->

														</select><!-- /.select-->
													</div><!-- /.travel-select-icon -->
												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->

											<div class="col-lg-2 col-md-3 col-sm-4">
												<div class="single-tab-select-box">
													<h2>departure</h2>
													<div class="travel-check-icon">
														<form action="#">
															<input type="text" name="departure" class="form-control" data-toggle="datepicker"
															placeholder="12 -01 - 2017 ">
														</form>
													</div><!-- /.travel-check-icon -->
												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->

											<div class="col-lg-2 col-md-3 col-sm-4">
												<div class="single-tab-select-box">
													<h2>return</h2>
													<div class="travel-check-icon">
														<form action="#">
															<input type="text" name="return" class="form-control" data-toggle="datepicker" placeholder="22 -01 - 2017 ">
														</form>
													</div><!-- /.travel-check-icon -->
												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->

											<div class="col-lg-2 col-md-1 col-sm-4">
												<div class="single-tab-select-box">
													<h2>adults</h2>
													<div class="travel-select-icon">
														<select class="form-control ">

															<option value="default">5</option><!-- /.option-->

															<option value="10">10</option><!-- /.option-->

															<option value="15">15</option><!-- /.option-->
															<option value="20">20</option><!-- /.option-->

														</select><!-- /.select-->
													</div><!-- /.travel-select-icon -->
												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->

											<div class="col-lg-2 col-md-1 col-sm-4">
												<div class="single-tab-select-box">
													<h2>childs</h2>
													<div class="travel-select-icon">
														<select class="form-control ">

															<option value="default">1</option><!-- /.option-->

															<option value="2">2</option><!-- /.option-->

															<option value="4">4</option><!-- /.option-->
															<option value="8">8</option><!-- /.option-->

														</select><!-- /.select-->
													</div><!-- /.travel-select-icon -->
												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->

										</div><!--/.row-->

										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="single-tab-select-box">

													<h2>to</h2>

													<div class="travel-select-icon">
														<select class="form-control ">

															<option value="default">enter your destination location</option><!-- /.option-->

															<option value="istambul">istambul</option><!-- /.option-->

															<option value="mosko">mosko</option><!-- /.option-->
															<option value="cairo">cairo</option><!-- /.option-->

														</select><!-- /.select-->
													</div><!-- /.travel-select-icon -->

												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->
											<div class="col-lg-3 col-md-3 col-sm-4">
												<div class="single-tab-select-box">

													<h2>class</h2>
													<div class="travel-select-icon">
														<select class="form-control ">

															<option value="default">enter class</option><!-- /.option-->

															<option value="A">A</option><!-- /.option-->

															<option value="B">B</option><!-- /.option-->
															<option value="C">C</option><!-- /.option-->

														</select><!-- /.select-->
													</div><!-- /.travel-select-icon -->
												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->
											<div class="clo-sm-5">
												<div class="about-btn pull-right">
													<button  class="about-view travel-btn">
														search	
													</button><!--/.travel-btn-->
												</div><!--/.about-btn-->
											</div><!--/.col-->
											
										</div><!--/.row-->

									</div>

								</div><!--/.tabpannel-->
								@if($data->isEmpty())
            						<p>No tours found for the selected criteria.</p>
        						@else
								@foreach($data as $tour)
									<div class="Card-Body">
										<div class="card">
											<img src="{{asset('/homeassets/images/Card/Taj Mahal.jpg')}}" alt="Taj Mahal" class="card-img">
											<div class="card-content">
												<h1 class="card-title">{{ $tour->TourName }}</h1>
												<p class="card-duration">{{ $tour->TourNights }} Nights / {{ $tour->TourDay }} Days</p>
												<p class="card-seller">{{ $tour->Organization }}</p>
												<div class="card-details">
													<div class="card-icons">
														<!-- <span>{{ $tour->Facility }}</span> -->
														<span>
														@php 
															$facility = json_decode($tour->Facility)
														@endphp
														@foreach($facility as $facility)
															{{$facility}} &nbsp;
														@endforeach
														</span>
													</div>
												</div>
											</div>
											<div class="card-price">
												<p class="price">₹ {{ $tour->Prize }}</p>
												<p class="price-desc">Per Person on twin sharing</p>
												<button class="view-details">Book</button>
											</div>
										</div>
									</div>
									@endforeach
									@endif
								</div><!--/.tab content-->
							</div><!--/.desc-tabs-->
        				</div><!--/.single-travel-box-->
        			</div><!--/.col-->
        		</div><!--/.row-->
        	</div><!--/.container-->

        </section><!--/.travel-box-->
		<!--travel-box end-->

        <!--service start-->
		<section id="service" class="service">
			<div class="container">

				<div class="service-counter text-center">

					<div class="col-md-4 col-sm-4">
						<div class="single-service-box">
							<div class="service-img">
								<img src="{{asset('homeassets/images/service/s1.png')}}" alt="service-icon" />
							</div><!--/.service-img-->
							<div class="service-content">
								<h2>
									<a href="#">
									amazing tour packages
									</a>
								</h2>
								<p>Discover unforgettable destinations with our amazing tour packages, tailored to suit every traveler's dream.</p>
							</div><!--/.service-content-->
						</div><!--/.single-service-box-->
					</div><!--/.col-->

					<div class="col-md-4 col-sm-4">
						<div class="single-service-box">
							<div class="service-img">
								<img src="{{asset('homeassets/images/service/s2.png')}}" alt="service-icon" />
							</div><!--/.service-img-->
							<div class="service-content">
								<h2>
									<a href="#">
										book top class hotel
									</a>
								</h2>
								<p>Book a top-class hotel for the ultimate luxury experience during your travels.</p>
							</div><!--/.service-content-->
						</div><!--/.single-service-box-->
					</div><!--/.col-->

					<div class="col-md-4 col-sm-4">
						<div class="single-service-box">
							<div class="statistics-img">
								<img src="{{asset('homeassets/images/service/s3.png')}}" alt="service-icon" />
							</div><!--/.service-img-->
							<div class="service-content">

								<h2>
									<a href="#">
										online flight booking
									</a>
								</h2>
								<p>Easily book your flights online with our user-friendly platform, offering convenience and flexibility for your travel needs.</p>
							</div><!--/.service-content-->
						</div><!--/.single-service-box-->
					</div><!--/.col-->

				</div><!--/.statistics-counter-->	
			</div><!--/.container-->

		</section><!--/.service-->
		<!--service end-->

		<!--galley start-->
		<section id="gallery" class="gallery">
			<div class="container">
				<div class="gallery-details">
					<div class="gallary-header text-center">
						<h2>
							top destination
						</h2>
						<p>
							Explore India's top destinations using over platform. 
						</p>
					</div><!--/.gallery-header-->
					<div class="gallery-box">
						<div class="gallery-content">
						  	<div class="filtr-container">
						  		<div class="row">

						  			<div class="col-md-6">
						  				<div class="filtr-item">
											<img src="{{asset('homeassets/images/gallary/kashmir.jpg')}}" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
													Kashmir
												</a>
												<p><span>20 tours</span><span>15 places</span></p>
											</div><!-- /.item-title -->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-6">
						  				<div class="filtr-item">
											<img src="{{asset('homeassets/images/gallary/kanyakumari.jpeg')}}" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
													Kanyakumari
												</a>
												<p><span>12 tours</span><span>9 places</span></p>
											</div> <!-- /.item-title-->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-4">
						  				<div class="filtr-item">
											<img src="{{asset('homeassets/images/gallary/goa.jpg')}}" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
													Goa
												</a>
												<p><span>25 tours</span><span>10 places</span></p>
											</div><!-- /.item-title -->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-4">
						  				<div class="filtr-item">
											<img src="{{asset('homeassets/images/gallary/jaipur.jpg')}}" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
													Jaipur 
												</a>
												<p><span>18 tours</span><span>9 places</span></p>
											</div> <!-- /.item-title-->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-4">
						  				<div class="filtr-item">
											<img src="{{asset('homeassets/images/gallary/agra.jpg')}}" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
													Agra
												</a>
												<p><span>14 tours</span><span>12 places</span></p>
											</div> <!-- /.item-title-->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-8">
						  				<div class="filtr-item">
											<img src="{{asset('homeassets/images/gallary/shimla.jpeg')}}" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
													Shimla
												</a>
												<p><span>14 tours</span><span>6 places</span></p>
											</div> <!-- /.item-title-->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  		</div><!-- /.row -->

						  	</div><!-- /.filtr-container-->
						</div><!-- /.gallery-content -->
					</div><!--/.galley-box-->
				</div><!--/.gallery-details-->
			</div><!--/.container-->

		</section><!--/.gallery-->
		<!--gallery end-->


		<!--packages start-->
		<section id="pack" class="packages">
			<div class="container">
				<div class="gallary-header text-center">
					<h2>
						special packages
					</h2>
					<p>
						Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla.  
					</p>
				</div><!--/.gallery-header-->
				<div class="packages-content">
					<div class="row">

						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="{{asset('homeassets/images/packages/p1.jpg')}}" alt="package-place">
								<div class="single-package-item-txt">
									<h3>italy <span class="pull-right">$499</span></h3>
									<div class="packages-para">
										<p>
											<span>
												<i class="fa fa-angle-right"></i> 5 daays 6 nights
											</span>
											<i class="fa fa-angle-right"></i>  5 star accomodation
										</p>
										<p>
											<span>
												<i class="fa fa-angle-right"></i>  transportation
											</span>
											<i class="fa fa-angle-right"></i>  food facilities
										 </p>
									</div><!--/.packages-para-->
									<div class="packages-review">
										<p>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<span>2544 review</span>
										</p>
									</div><!--/.packages-review-->
									<div class="about-btn">
										<button  class="about-view packages-btn">
											book now
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->

						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="{{asset('homeassets/images/packages/p2.jpg')}}" alt="package-place">
								<div class="single-package-item-txt">
									<h3>england <span class="pull-right">$1499</span></h3>
									<div class="packages-para">
										<p>
											<span>
												<i class="fa fa-angle-right"></i> 5 daays 6 nights
											</span>
											<i class="fa fa-angle-right"></i>  5 star accomodation
										</p>
										<p>
											<span>
												<i class="fa fa-angle-right"></i>  transportation
											</span>
											<i class="fa fa-angle-right"></i>  food facilities
										 </p>
									</div><!--/.packages-para-->
									<div class="packages-review">
										<p>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<span>2544 review</span>
										</p>
									</div><!--/.packages-review-->
									<div class="about-btn">
										<button  class="about-view packages-btn">
											book now
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->
						
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="{{asset('homeassets/images/packages/p3.jpg')}}" alt="package-place">
								<div class="single-package-item-txt">
									<h3>france <span class="pull-right">$1199</span></h3>
									<div class="packages-para">
										<p>
											<span>
												<i class="fa fa-angle-right"></i> 5 daays 6 nights
											</span>
											<i class="fa fa-angle-right"></i>  5 star accomodation
										</p>
										<p>
											<span>
												<i class="fa fa-angle-right"></i>  transportation
											</span>
											<i class="fa fa-angle-right"></i>  food facilities
										 </p>
									</div><!--/.packages-para-->
									<div class="packages-review">
										<p>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<span>2544 review</span>
										</p>
									</div><!--/.packages-review-->
									<div class="about-btn">
										<button  class="about-view packages-btn">
											book now
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->
						
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="{{asset('homeassets/images/packages/p4.jpg')}}" alt="package-place">
								<div class="single-package-item-txt">
									<h3>india <span class="pull-right">$799</span></h3>
									<div class="packages-para">
										<p>
											<span>
												<i class="fa fa-angle-right"></i> 5 daays 6 nights
											</span>
											<i class="fa fa-angle-right"></i>  5 star accomodation
										</p>
										<p>
											<span>
												<i class="fa fa-angle-right"></i>  transportation
											</span>
											<i class="fa fa-angle-right"></i>  food facilities
										 </p>
									</div><!--/.packages-para-->
									<div class="packages-review">
										<p>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<span>2544 review</span>
										</p>
									</div><!--/.packages-review-->
									<div class="about-btn">
										<button  class="about-view packages-btn">
											book now
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->
						
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="{{asset('homeassets/images/packages/p5.jpg')}}"alt="package-place">
								<div class="single-package-item-txt">
									<h3>spain <span class="pull-right">$999</span></h3>
									<div class="packages-para">
										<p>
											<span>
												<i class="fa fa-angle-right"></i> 5 daays 6 nights
											</span>
											<i class="fa fa-angle-right"></i>  5 star accomodation
										</p>
										<p>
											<span>
												<i class="fa fa-angle-right"></i>  transportation
											</span>
											<i class="fa fa-angle-right"></i>  food facilities
										 </p>
									</div><!--/.packages-para-->
									<div class="packages-review">
										<p>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<span>2544 review</span>
										</p>
									</div><!--/.packages-review-->
									<div class="about-btn">
										<button  class="about-view packages-btn">
											book now
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->
						
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="{{asset('homeassets/images/packages/p6.jpg')}}" alt="package-place">
								<div class="single-package-item-txt">
									<h3>thailand <span class="pull-right">$799</span></h3>
									<div class="packages-para">
										<p>
											<span>
												<i class="fa fa-angle-right"></i> 5 daays 6 nights
											</span>
											<i class="fa fa-angle-right"></i>  5 star accomodation
										</p>
										<p>
											<span>
												<i class="fa fa-angle-right"></i>  transportation
											</span>
											<i class="fa fa-angle-right"></i>  food facilities
										 </p>
									</div><!--/.packages-para-->
									<div class="packages-review">
										<p>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<span>2544 review</span>
										</p>
									</div><!--/.packages-review-->
									<div class="about-btn">
										<button  class="about-view packages-btn">
											book now
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->

					</div><!--/.row-->
				</div><!--/.packages-content-->
			</div><!--/.container-->

		</section><!--/.packages-->
		<!--packages end-->

		<!-- testemonial Start -->
		<section   class="testemonial">
			<div class="container">

				<div class="gallary-header text-center">
					<h2>
						clients reviews
					</h2>
					<p>
						Client reviews help shape a seamless travel booking experience.
					</p>

				</div><!--/.gallery-header-->

				<div class="owl-carousel owl-theme" id="testemonial-carousel">

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{asset('homeassets/images/client/testimonial1.jpg')}}" alt="img"/>
							</div><!--/.home1-testm-img-->
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->

					</div><!--/.item-->

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{asset('homeassets/images/client/testimonial1.jpg')}}" alt="img"/>
							</div><!--/.home1-testm-img-->
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->

					</div><!--/.item-->

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{asset('homeassets/images/client/testimonial1.jpg')}}" alt="img"/>
							</div><!--/.home1-testm-img-->
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->

					</div><!--/.item-->

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{asset('homeassets/images/client/testimonial1.jpg')}}" alt="img"/>
							</div><!--/.home1-testm-img-->
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->

					</div><!--/.item-->

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{asset('homeassets/images/client/testimonial1.jpg')}}" alt="img"/>
							</div><!--/.home1-testm-img-->
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->

					</div><!--/.item-->

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{asset('homeassets/images/client/testimonial1.jpg')}}" alt="img"/>
							</div><!--/.home1-testm-img-->
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->

					</div><!--/.item-->

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{asset('homeassets/images/client/testimonial1.jpg')}}" alt="img"/>
							</div><!--/.home1-testm-img-->
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->

					</div><!--/.item-->

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{asset('homeassets/images/client/testimonial1.jpg')}}" alt="img"/>
							</div><!--/.home1-testm-img-->
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->

					</div><!--/.item-->

					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="{{asset('homeassets/images/client/testimonial1.jpg')}}" alt="img"/>
							</div><!--/.home1-testm-img-->
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
								</p>
								<h3>
									<a href="#">
										kevin watson
									</a>
								</h3>
								<h4>london, england</h4>
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->

					</div><!--/.item-->

				</div><!--/.testemonial-carousel-->
			</div><!--/.container-->

		</section><!--/.testimonial-->	
		<!-- testemonial End -->

		<!--blog start-->
		<section id="blog" class="blog">
			<div class="container">
				<div class="blog-details">
						<div class="gallary-header text-center">
							<h2>
								latest news
							</h2>
							<p>
								Travel News from all over the india 
							</p>
						</div><!--/.gallery-header-->
						<div class="blog-content">
							<div class="row">

								<div class="col-sm-4 col-md-4">
									<div class="thumbnail">
										<h2>trending news <span>15 november 2017</span></h2>
										<div class="thumbnail-img">
											<img src="{{asset('homeassets/images/blog/b1.jpg')}}" alt="blog-img">
											<div class="thumbnail-img-overlay"></div><!--/.thumbnail-img-overlay-->
										
										</div><!--/.thumbnail-img-->
									  
										<div class="caption">
											<div class="blog-txt">
												<h3>
													<a href="#">
														Discover on beautiful weather, Fantastic foods and historical place in Prag
													</a>
												</h3>
												<p>
													Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam 
												</p>
												<a href="#">Read More</a>
											</div><!--/.blog-txt-->
										</div><!--/.caption-->
									</div><!--/.thumbnail-->

								</div><!--/.col-->

								<div class="col-sm-4 col-md-4">
									<div class="thumbnail">
										<h2>trending news <span>15 november 2017</span></h2>
										<div class="thumbnail-img">
											<img src="{{asset('homeassets/images/blog/b2.jpg')}}" alt="blog-img">
											<div class="thumbnail-img-overlay"></div><!--/.thumbnail-img-overlay-->
										
										</div><!--/.thumbnail-img-->
										<div class="caption">
											<div class="blog-txt">
												<h3>
													<a href="#">
														Discover on beautiful weather, Fantastic foods and historical place in india
													</a>
												</h3>
												<p>
													Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam 
												</p>
												<a href="#">Read More</a>
											</div><!--/.blog-txt-->
										</div><!--/.caption-->
									</div><!--/.thumbnail-->

								</div><!--/.col-->

								<div class="col-sm-4 col-md-4">
									<div class="thumbnail">
										<h2>trending news <span>15 november 2017</span></h2>
										<div class="thumbnail-img">
											<img src="{{asset('homeassets/images/blog/b3.jpg')}}" alt="blog-img">
											<div class="thumbnail-img-overlay"></div><!--/.thumbnail-img-overlay-->
										
										</div><!--/.thumbnail-img-->
										<div class="caption">
											<div class="blog-txt">
												<h3><a href="#">10 Most Natural place to Discover</a></h3>
												<p>
													Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam 
												</p>
												<a href="#">Read More</a>
											</div><!--/.blog-txt-->
										</div><!--/.caption-->
									</div><!--/.thumbnail-->

								</div><!--/.col-->

							</div><!--/.row-->
						</div><!--/.blog-content-->
					</div><!--/.blog-details-->
				</div><!--/.container-->

		</section><!--/.blog-->
		<!--blog end-->

		
		<!--subscribe start-->
		<section id="subs" class="subscribe">
			<div class="container">
				<div class="subscribe-title text-center">
					<h2>
						Join our Subscribers List to Get Regular Update
					</h2>
					<p>
						Subscribe Now. We will send you Best offer for your Trip 
					</p>
				</div>
				<form>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
							<div class="custom-input-group">
								<input type="email" class="form-control" placeholder="Enter your Email Here">
								<button class="appsLand-btn subscribe-btn">Subscribe</button>
								<div class="clearfix"></div>
								<i class="fa fa-envelope"></i>
							</div>

						</div>
					</div>
				</form>
			</div>

		</section>
		<!--subscribe end-->

		<!-- footer-copyright start -->
		<footer  class="footer-copyright">
			<div class="container">
				<div class="footer-content">
					<div class="row">

						<div class="col-sm-3">
							<div class="single-footer-item">
								<div class="footer-logo">
									<a href="index.html">
										Travel<span>Book</span>
									</a>
									<p>
										best travel Platform
									</p>
								</div>
							</div><!--/.single-footer-item-->
						</div><!--/.col-->

						<div class="col-sm-3">
							<div class="single-footer-item">
								<h2>link</h2>
								<div class="single-footer-txt">
									<p><a href="#">home</a></p>
									<p><a href="#">destination</a></p>
									<p><a href="#">spacial packages</a></p>
									<p><a href="#">special offers</a></p>
									<p><a href="#">blog</a></p>
									<p><a href="#">contacts</a></p>
								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->

						</div><!--/.col-->

						<div class="col-sm-3">
							<div class="single-footer-item">
								<h2>popular destination</h2>
								<div class="single-footer-txt">
									<p><a href="#">china</a></p>
									<p><a href="#">venezuela</a></p>
									<p><a href="#">brazil</a></p>
									<p><a href="#">australia</a></p>
									<p><a href="#">london</a></p>
								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->
						</div><!--/.col-->

						<div class="col-sm-3">
							<div class="single-footer-item text-center">
								<h2 class="text-left">contacts</h2>
								<div class="single-footer-txt text-left">
									<p class="foot-email"><a href="#">travelbook@gmail.com</a></p>
									<p>Bhavnagar</p>
									<p>Gujarat, India</p>
								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->
						</div><!--/.col-->

					</div><!--/.row-->

				</div><!--/.footer-content-->
				<hr>
				<div class="foot-icons ">
					<ul class="footer-social-links list-inline list-unstyled">
		                <li><a href="#" target="_blank" class="foot-icon-bg-2"><i class="fa fa-twitter"></i></a></li>
		                <li><a href="#" target="_blank" class="foot-icon-bg-3"><i class="fa fa-instagram"></i></a></li>
		        	</ul>

		        </div><!--/.foot-icons-->
				<div id="scroll-Top">
					<i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div><!--/.scroll-Top-->
			</div><!-- /.container-->

		</footer><!-- /.footer-copyright-->
		<!-- footer-copyright end -->




		<script src="{{asset('homeassets/js/jquery.js')}}"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->

		<!--modernizr.min.js-->
		<script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


		<!--bootstrap.min.js-->
		<script src="{{asset('homeassets/js/bootstrap.min.js')}}"></script>

		<!-- bootsnav js -->
		<script src="{{asset('homeassets/js/bootsnav.js')}}"></script>

		<!-- jquery.filterizr.min.js -->
		<script src="{{asset('homeassets/js/jquery.filterizr.min.js')}}"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

		<!--jquery-ui.min.js-->
        <script src="{{asset('homeassets/js/jquery-ui.min.js')}}"></script>

        <!-- counter js -->
		<script src="{{asset('homeassets/js/jquery.counterup.min.js')}}"></script>
		<script src="{{asset('homeassets/js/waypoints.min.js')}}"></script>
		

		<!--owl.carousel.js-->
        <script src="{{asset('homeassets/js/owl.carousel.min.js')}}"></script>

        <!-- jquery.sticky.js -->
		<script src="{{asset('homeassets/js/jquery.sticky.js')}}"></script>

        <!--datepicker.js-->
        <script src="{{asset('homeassets/js/datepicker.js')}}"></script>

		<!--Custom JS-->
		<script src="{{asset('homeassets/js/custom.js')}}"></script>

	</body>

</html>
