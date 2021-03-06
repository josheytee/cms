<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Register | Higherground Baptist Church Ogbomoso</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- //custom-theme -->
    <link href="{{ asset('admin/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('admin/css/snow.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('admin/css/component.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('admin/css/style_grid.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <!-- font-awesome-icons -->
    <link href="{{ asset('admin/css/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">

</head>
<body>
<!-- /pages_agile_info_w3l -->

<div class="pages_agile_info_w3l">
    <!-- /login -->
    <div class="over_lay_agile_pages_w3ls two">
        <div class="registration">

            <div class="signin-form profile">
                <h2>Members Registration</h2>
                <div class="login-form">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('register') }}" method="post">
                        {{ csrf_field() }}
                        <input type="text" name="fname" placeholder="Full Name" required=""  value="{{ old('fname') }}" >
                        <input type="date" name="dob" class="form-control" placeholder="Date Of Birth" required="" value="{{ old('dob') }}" >
                        <div class="input-group">
                            <select name="gender" required="true" class="form-control" value="{{ old('gender') }}" >
                                <option value="val-1">...Gender...</option>
                                <option value="male" @if(old('gender')=='male') selected="selected" @endif>Male</option>
                                <option value="female" @if(old('gender')=='female') selected="selected" @endif>Female</option>
                            </select>
                        </div>
                        <input type="text" name="username" placeholder="Username" required="" value="{{ old('username') }}" >
                        <input type="email" name="email" placeholder="E-mail" required=""  value="{{ old('email') }}" >
                        <input type="text" name="phone" placeholder="Phone Number" required=""  value="{{ old('phone') }}" >
                        <input type="password" name="password" placeholder="Password" required=""  value="{{ old('password') }}" >
                        <input type="password" name="password_confirmation" placeholder="Confirm Password" required="" value="{{ old('password_confirmation') }}" >

                        <div class="tp">
                            <input type="submit" value="SIGN Up">
                        </div>
                    </form>
                </div>

                <h6><a href="main-page.html">Back To Home</a><h6>
            </div>
        </div>
        <!--copy rights start here-->
        <div class="copyrights_agile two">
            <p>© 2018 Higherground Baptist Church ICT Team</p>
        </div>
        <!--copy rights end here-->
    </div>
</div>
<!-- /login -->
<!-- //pages_agile_info_w3l -->


<!-- js -->

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<script src="js/classie.js"></script>
<script src="js/gnmenu.js"></script>
<script>
    new gnMenu(document.getElementById('gn-menu'));
</script>

<!-- //js -->

<script src="js/screenfull.js"></script>
<script>
    $(function () {
        $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

        if (!screenfull.enabled) {
            return false;
        }


        $('#toggle').click(function () {
            screenfull.toggle($('#container')[0]);
        });
    });
</script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<script src="js/snow.js"></script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>