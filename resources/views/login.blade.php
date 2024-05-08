<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>SIAK SMANMAJU</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/vendors/jquery-bar-rating/css-stars.css" />
    <link rel="stylesheet" href="/vendors/font-awesome/css/font-awesome.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/css/demo_2/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/images/logo.jpg" />

    <!-- Data Table -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body>
    <div class="container-scroller">
        <!-- partial -->
        <div class="container-fluid page-body-wrapper mt-5">
            <div class="pb-0 pr-5 pl-5">
                <div class="row mr-5 ml-5 justify-content-center">
                    <div>
                        <img src="/images/logo.jpg" width="100" alt="">
                    </div>
                    <div>
                        <h1>SIAK</h1>
                    </div>
                    <div>
                        <h3>SMAN 5 SIJUNJUNG</h3>
                    </div>
                </div>
            </div>
            <div class="main-panel">
                <div class="content-wrapper pb-0 pr-5 pl-5">
                    <div class="row mr-5 ml-5 justify-content-center">
                        <div class="col-md-6 stretch-card grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Login Form</h4>
                                    <p class="card-description">Masukkan data login Anda</p>
                                    <form class="forms-sample" action="/login" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                             value="{{ old('email') }}" placeholder="Email" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                             name="password" placeholder="Password" required>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" > Remember me </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                                        <a href="/" class="btn btn-light">Cancel</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
    <script src="/vendors/chart.js/Chart.min.js"></script>
    <script src="/vendors/flot/jquery.flot.js"></script>
    <script src="/vendors/flot/jquery.flot.resize.js"></script>
    <script src="/vendors/flot/jquery.flot.categories.js"></script>
    <script src="/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="/vendors/flot/jquery.flot.stack.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/js/off-canvas.js"></script>
    <script src="/js/hoverable-collapse.js"></script>
    <script src="/js/misc.js"></script>
    <script src="/js/settings.js"></script>
    <script src="/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="/js/dashboard.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- End custom js for this page -->

    @if (Session::has('pesan'))

    <script>
        toastr.options = {
            "progressBar" : true,
            "closeButton" : true,
        }

        toastr.optionsOverride = 'positionclass:toast-bottom-full-width';

        toastr.success("{{ Session::get('pesan') }}", 'Berhasil!', {timeOut:10000});
        // toastr.error("{{ Session::get('') }}", {timeOut:10000});
    </script>

    @endif


</body>

</html>
