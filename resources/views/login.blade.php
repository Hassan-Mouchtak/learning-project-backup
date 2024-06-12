<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login E-learning</title>
    <link rel="stylesheet" href="{{ asset('css/styles_login.css') }}">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
     integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


    <div class="login-div1 ajouter" id="ajouter">

        <div class="login-div1-div2">
            <h1>Sign In</h1>
            <ul class="login-div1-div2-ul">
                <li class="login-div1-div2-ul-li"> <i class="fa-solid fa-g"></i></li>
                <li class="login-div1-div2-ul-li"> <i class="fa-brands fa-facebook"></i></li>
                <li class="login-div1-div2-ul-li"> <i class="fa-brands fa-github"></i></li>
                <li class="login-div1-div2-ul-li"> <i class="fa-brands fa-linkedin"></i></li>
            </ul>
            <p class="login-div1-div2-p">or use your email password</p>
            <form action="{{ route ('index4')}}" method="POST">
                @csrf

                <input type="email" name="email" id="" placeholder="   Email" class="login-div1-div2-input1"><br><br>
                <input type="password" name="password" id="" placeholder="   Password" class="login-div1-div2-input1"><br><br>
                @error('email')
                {{$message}}
                @enderror
                <a href=""><p>Forget Your Password?</p></a><br>
                <input type="submit" name="" id="" class="login-div1-div2-submit" value="SIGN IN"><br><br>
            </form>
        </div>

        <div class="login-div1-div1 login-div1-div1-avants-welcomfriend" id="login-div1-div1">
            <h1>Welcome, Friend!</h1>
            <p>Register whith your personel details to use all<br> of sitefeatures</p>
            <a href="{{url ('signup') }}"><button class="login-div1-div2-submit" >SIGN UP</button></a>
        </div>

    </div>
    
</body>
</html>

