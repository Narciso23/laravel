<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <title>Sazao || e-Commerce HTML Template</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="{{asset('fontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/jquery.nice-number.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/jquery.calendar.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/add_row_custon.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/mobile_menu.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/jquery.exzoom.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/multiple-image-video.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/ranger_style.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/jquery.classycountdown.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/venobox.min.css')}}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-xrfgKsqXQHOELCNYG2uTZ3zZr1CyE3v9ATJpbzr6sDzX4syOZz3S7w63rIOznzvyDz3ksbm34X5gu8jRTW8r+g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="{{asset('fontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/responsive.css')}}">
    <!-- <link rel="stylesheet" href="css/rtl.css"> -->

    <!-- Add these lines in the head section of your HTML -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyEW8eA/E5gqjibaaN6L3U6dMEtMBV0Ey" crossorigin="anonymous">

<!-- Add these lines before the closing body tag of your HTML -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyEW8eA/E5gqjibaaN6L3U6dMEtMBV0Ey" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyEW8eA/E5gqjibaaN6L3U6dMEtMBV0Ey" crossorigin="anonymous"></script>

</head>

<body>

    <!--============================
        HEADER START
    ==============================-->
    @include('fontend.layouts.header')
    <!--============================
        HEADER END
    ==============================-->


    <!--============================
        MAIN MENU START
    ==============================-->
    @include('fontend.layouts.menu')
    <!--============================
        MAIN MENU END
    ==============================-->





    <!--==========================
        POP UP START
    ===========================-->
    <!-- <section id="wsus__pop_up">
        <div class="wsus__pop_up_center">
            <div class="wsus__pop_up_text">
                <span id="cross"><i class="fas fa-times"></i></span>
                <h5>get up to <span>75% off</span></h5>
                <h2>Sign up to E-SHOP</h2>
                <p>Subscribe to the <b>E-SHOP</b> market newsletter to receive updates on special offers.</p>
                <form>
                    <input type="email" placeholder="Your Email" class="news_input">
                    <button type="submit" class="common_btn">go</button>
                    <div class="wsus__pop_up_check_box">
                    </div>
                </form>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11">
                    <label class="form-check-label" for="flexCheckDefault11">
                        Don't show this popup again
                    </label>
                </div>
            </div>
        </div>
    </section> -->
    <!--==========================
        POP UP END
    ===========================-->


   @yield('content')  


    <!--============================
        FOOTER PART START
    ==============================-->
    @include('fontend.layouts.footer')
    <!--============================
        FOOTER PART END
    ==============================-->


    <!--============================
        SCROLL BUTTON START
    ==============================-->
    <div class="wsus__scroll_btn">
        <i class="fas fa-chevron-up"></i>
    </div>
    <!--============================
        SCROLL BUTTON  END
    ==============================-->


    <!--jquery library js-->
    <script src="{{asset('fontend/js/jquery-3.6.0.min.js')}}"></script>
    <!--bootstrap js-->
    <script src="{{asset('fontend/js/bootstrap.bundle.min.js')}}"></script>
    <!--font-awesome js-->
    <script src="{{asset('fontend/js/Font-Awesome.js')}}"></script>
    <!--select2 js-->
    <script src="{{asset('fontend/js/select2.min.js')}}"></script>
    <!--slick slider js-->
    <script src="{{asset('fontend/js/slick.min.js')}}"></script>
    <!--simplyCountdown js-->
    <script src="{{asset('fontend/js/simplyCountdown.js')}}"></script>
    <!--product zoomer js-->
    <script src="{{asset('fontend/js/jquery.exzoom.js')}}"></script>
    <!--nice-number js-->
    <script src="{{asset('fontend/js/jquery.nice-number.min.js')}}"></script>
    <!--counter js-->
    <script src="{{asset('fontend/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('fontend/js/jquery.countup.min.js')}}"></script>
    <!--add row js-->
    <script src="{{asset('fontend/js/add_row_custon.js')}}"></script>
    <!--multiple-image-video js-->
    <script src="{{asset('fontend/js/multiple-image-video.js')}}"></script>
    <!--sticky sidebar js-->
    <script src="{{asset('fontend/js/sticky_sidebar.js')}}"></script>
    <!--price ranger js-->
    <script src="{{asset('fontend/js/ranger_jquery-ui.min.js')}}"></script>
    <script src="{{asset('fontend/js/ranger_slider.js')}}"></script>
    <!--isotope js-->
    <script src="{{asset('fontend/js/isotope.pkgd.min.js')}}"></script>
    <!--venobox js-->
    <script src="{{asset('fontend/js/venobox.min.js')}}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!--classycountdown js-->
    <script src="{{asset('fontend/js/jquery.classycountdown.js')}}"></script>
    <script src="{{asset('fontend/js/s.js')}}"></script>

    <!--main/custom js-->
    <script src="{{asset('fontend/js/main.js')}}"></script>

    <script>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif
</script>
</body>

</html>