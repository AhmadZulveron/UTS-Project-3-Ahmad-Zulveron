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
        <!-- partial:partials/_horizontal-navbar.html -->

        @include('layouts.navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">

                @yield('content')

                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                @include('layouts.footer')
                <!-- partial -->
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
            "positionClass" : 'toast-bottom-center',
        }

        toastr.success("{{ Session::get('pesan') }}", 'Berhasil!', {timeOut:10000});
        // toastr.error("{{ Session::get('') }}", {timeOut:10000});
    </script>

    @endif


</body>

</html>
