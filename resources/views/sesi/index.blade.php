<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login - Dolphin Assignment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/dolphine2.png">

    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!-- Fontawesome CSS -->
    

    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}" >
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}" >

    <!-- MAin CSs -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
     <div class="main-wrapper">
        <div class="account-page">
            <div class="container">
                <h3 class="account-title text-white">Login Terlebih Dahulu</h3>
                <div class="account-box">
                    <div class="account-wrapper">
                        <div class="account-logo">
                            <a href="#"><img src="assets/img/dolphine.png" alt="SchoolAdmin"></a>
                        </div>
                        <form class="user" action="/sesi/login" method="POST">
                            @csrf
							<div class="form-group">
                                
                                <label>Username or Email</label>
								<input type="email" class="form-control" name="email" value="{{Session::get('email')}}">
							</div>
                            <div class="form-group">
                                <label>Password</label>
								<input type="password" name="password" class="form-control">
							</div>
                            <div class="form-group text-center custom-mt-form-group">
                                <button class="btn btn-primary btn-block btn-user" type="submit">Login</button>
                            </div>
                            <div class="text-center">
                                <a href="forgot-password.html">Forgot your password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    
    <!-- jQuery -->
    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    
    <!-- Bootstrap Core JS -->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Slimscroll -->
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>

    <!-- custom JS -->
    <script src="{{asset('assets/js/app.js')}}"></script>
</body>

</html>