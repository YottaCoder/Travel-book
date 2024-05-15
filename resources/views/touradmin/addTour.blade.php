<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Travel Book</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('Adminassets/assets/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('Adminassets/assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('Adminassets/assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('Adminassets/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('Adminassets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <link rel="stylesheet" href="{{asset('Adminassets/assets/vendor/libs/apex-charts/apex-charts.css')}}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{asset('Adminassets/assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('Adminassets/assets/js/config.js')}}"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-text demo menu-text fw-bolder ms-2">Travel<span style="color: #0AD3F2;">Book</span> </span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a class="menu-link" href="{{route('touradmin/dashboard')}}">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item ">
              <a href="{{route('adminAccSetting')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Layouts">Account Settings</div>
              </a>
            </li>


            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Pages</span>
            </li>

            <li class="menu-item active">
              <a href="{{route('addTour')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Layouts">Add Tour</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="{{route('allTours')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">All Tours</div>
              </a>
            </li>

          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="{{asset('Adminassets/assets/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="{{route('adminAccSetting')}}">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="{{asset('Adminassets/assets/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{route('adminAccSetting')}}">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" style="display:flex;" >
                        <i class="bx bx-power-off me-2" style="padding-top:3px;"></i>
                        <form method="POST" action="{{ route('logout')}}">
                        @csrf
                            <input type="submit" value="Logout" style="border: none; background-color: white;" >
                        </form>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Add Tour</span></h4>
             
             
              @if(session()->has('message'))
              <div class="alert alert-success">
                  {{session()->get('message')}}
                  <button type="button" class="close"  data-bs-dismiss="alert" style="display:flex; float:right; border:none;padding-top:0px; background:transparent; color:green;">X</button>
              </div>
              @endif

              <div class="row">
                <div class="col-md-12">
                  <div class="card mb-4">
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" action="{{url('upload_tour')}}" enctype="multipart/form-data" >
                        @csrf
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Organization</label>
                            <input
                              class="form-control"
                              type="text"
                              id="Organization"
                              name="Organization"
                              placeholder="Tour Organizer"
                              autofocus
                              required
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="Tour name" class="form-label">Tour name</label>
                            <input
                              class="form-control"
                              type="text"
                              id="Tour name"
                              name="TourName"
                              placeholder="Best Delhi to Ladakh tour "
                              required
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">Destination</label>
                            <input
                              type="text"
                              class="form-control"
                              id="Destination From"
                              name="DestinationFrom"
                              placeholder="From"
                              required
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">&nbsp;</label>
                            <input
                              type="text"
                              class="form-control"
                              id="DestinationTo"
                              name="DestinationTo"
                              placeholder="To"
                              required
                            />
                          </div>
                          
                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Date</label>
                            <input type="date" class="form-control" id="date" name="date" placeholder="Select Tour Date" required/>
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Prize</label>
                            <input type="text" class="form-control" id="Prize" name="Prize" placeholder="Tour Prize" required />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">Days</label>
                            <input
                              type="text"
                              class="form-control"
                              id="TourDay"
                              name="TourDay"
                              placeholder="How many Day for Tour"
                              maxlength="6"
                              required
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">Nights</label>
                            <input
                              type="text"
                              class="form-control"
                              id="TourNights"
                              name="TourNights"
                              placeholder="How many Night for Tour"
                              maxlength="6"
                              required
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label">Facility</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="Meals" id="Meals" name="facility[]">
                                    <label class="form-check-label" for="checkboxOption1">
                                        Meals
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="Hotel" id="Hotel" name="facility[]">
                                    <label class="form-check-label" for="checkboxOption2">
                                        Hotel
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="Transfer" id="Transfer" name="facility[]">
                                    <label class="form-check-label" for="checkboxOption3">
                                        Transfer
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload Tour photo</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="upload"
                              name="TourPhoto"
                              class="account-file-input"
                              hidden
                              accept="image/png, image/jpeg"
                              required
                            />
                          </label>
                          
                          <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Reset</span>
                          </button>
                          <P style="color: red;">This photo is seen by travelers to attract more attention to your tour.</P>
                          <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div> -->
                        <div class="button-wrapper">
                            
                                <span class="d-none d-sm-block form-label" style="font-size: 0.75rem;">Upload Tour Photo</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input class="docImage" type="file" name="TourPhoto" id="" style="padding-bottom:5px ;">
                        </div>
                        
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Add Tour</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('Adminassets/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('Adminassets/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('Adminassets/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('Adminassets/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('Adminassets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('Adminassets/assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('Adminassets/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('Adminassets/assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('Adminassets/assets/js/dashboards-analytics.js')}}"></script>

    <!-- Bootstarp -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script>
      $(document).ready(function(){
          var today = new Date().toISOString().split('T')[0];
          $('#date').attr('min',today);
      })
    </script>
  </body>
</html>
