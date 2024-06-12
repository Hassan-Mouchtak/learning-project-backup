

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account E-learning</title>
    <!-- <link rel="stylesheet" href="Css/styles_login.css"> -->
    <link rel="stylesheet" href="{{ asset('css/styles_login.css') }}    ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
     integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


    <div class="login-div1 switche" id="supprimer">



        <div class="login-div1-div11">
            <h1>Welcome Back!</h1>
            <p>Enter your personal details to use all of site <br> features</p>
            <strong><p>or if you have account click her</p></strong>
            <a href="{{url ('login') }}"><button class="login-div1-div2-submit" id="Sign_Up">SIGN IN</button></a>
        </div>


        <div class="login-div1-div2">
            <h1>Create Account</h1>
            <ul class="login-div1-div2-ul">
                <li class="login-div1-div2-ul-li"> <i class="fa-solid fa-g"></i></li>
                <li class="login-div1-div2-ul-li"> <i class="fa-brands fa-facebook"></i></li>
                <li class="login-div1-div2-ul-li"> <i class="fa-brands fa-github"></i></li>
                <li class="login-div1-div2-ul-li"> <i class="fa-brands fa-linkedin"></i></li>
            </ul>
            <p class="login-div1-div2-p">or use your email for registeration</p>
            <form action="{{ route ('index3')}}" method="POST">
                @csrf
                <input type="text" name="name" id="" placeholder="   Name" class="login-div1-div2-input1"><br><br>
                <input type="email" name="email" id="" placeholder="   Email" class="login-div1-div2-input1"><br><br>
                <input type="password" name="password" id="" placeholder="   Password" class="login-div1-div2-input1" minlength="8"><br><br>
                <input type="submit" name="" id="" class="login-div1-div2-submit" value="SIGN UP" ><br><br>
            </form>
        </div>


    </div>





    


    <script src="Js/index.js"></script>
</body>
</html>