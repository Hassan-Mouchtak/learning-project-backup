<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{ asset('css/lendingpage.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>E-Learn</title>
</head>
<body>

  @include('header')




    <section class="section1" id="home">
        <h1 class="section1-h1">The best way to learn or<br> practice a language</h1>
        <p>Educating, Inspiring $ Transforming young women. A tuition-free private moddle school</p>
        <ul class="section1-ul">
            <li class="section1-ul-li"><button class="section1-ul-li-button1"><b>Contact Us</b></button></li>
            <li class="section1-ul-li"><button class="section1-ul-li-button2"><b>Apply Now</b></button></li>
        </ul>

        <div class="section1-ul-img">
          <div><img src="Asset/section1/section1.1.jpg" alt="" class="section1-ul-li-img"></div>
          <div><img src="Asset/section1/sction1.2.jpg" alt="" class="section1-ul-li-img"></div>
          <div><img src="Asset/section1/section1.3.jpg" alt="" class="section1-ul-li-img"></div>
        </div>
        
       
    </section>




    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <section class="section2 container" id="about">
      <div class="section2-div1">
        <div>
          <h1 class="section1-h1">Educating, Inspiring,<br> & Transforming</h1>
          
        </div>

        <div class="section2-div1-div2">
          <div><img src="Asset/section2/section2.1.png" alt="" class="section1-ul-li-img"></div>
          <div>
            <h1 class="section1-h1">Our Vision</h1>
            <br><br>
            <p class="section2-div1-div2-p">Empowering young women, changing the word, cuiltivating the potential of young <br> women throutgh a challenging, holistic education rooted in the ursline tradion.</p>
          </div>
        </div>

      </div>

      <br><br><br><br><br>

      <div class="section2-div1">
        <div>
          <h1 class="section1-h1">Educating, Inspiring,<br> & Transforming</h1>
        </div>

        <div class="section2-div2-div2">
          <div>
            <h1 class="section1-h1">Our Mission</h1>
            <br><br>
            <p class="section2-div1-div2-p">Empowering young women, changing the word, cuiltivating the potential of young <br> women throutgh a challenging, holistic education rooted in the ursline tradion.</p>
          </div>

          <div><img src="Asset/section2/section2.2.png" alt="" class="section1-ul-li-img"></div>
        </div>

      </div>
     

    </section>


    {{-- @include('support') --}}
    @include('footer')
    
    



    <!-- <script src="Js/index.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>