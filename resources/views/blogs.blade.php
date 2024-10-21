




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial scale=1.0">
        <title>complete responsive website design</title>

        <!-- font awesome cdn link -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

        <!-- custom css file link -->

        <link rel="stylesheet" href="{{asset('css/style.css')}}">



    </head>

    <body>

        <!-- header section starts -->

        <header class="header">

            <a href="#" class="logo"> <i class="fas fa-heartbeat "> </i> YouHeal.   </a>

            <nav class="navbar">
                <a href="{{route('index')}}#home">home</a>
                <a href="{{route('index')}}#services">services</a>
                <a href="{{route('index')}}#about">about</a>
                <a href="{{route('doctors')}}">doctors</a>
                <a href="{{route('book')}}">book</a>
                <a href="{{route('index')}}#review">review</a>
                <a href="{{ route('blogs') }}">blog</a>
            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>

        </header>

        <!-- header section ends -->













        
        

         <!-- blog section end -->


<!-- bb -->

<section class="blogs" id="blogs">
    <h1 class="heading">our <span>blogs</span></h1>
    <div class="box-container">
        @foreach ($blogs as $blog)
        <div class="box">
            <div class="image">
                <img src="data:image/jpeg;base64,{{ base64_encode($blog->image) }}" alt="{{ $blog->heading }}">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"><i class="fas fa-calendar">  1st may, 2023</i></a>
                    <a href="#"><i class="fas fa-user">  by admin</i></a>
                </div>
                <h3>{{ $blog->heading }}</h3>
                <p>{{ $blog->paragraph }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- bb -->



         <!-- footer section start -->


         <section class="footer" id="footer">
            <div class="box-container">

                <div class="box">
                    <h3>quick links</h3>

                    <a href="#"><i class="fas fa-chevron-right"></i>home</a>
                    <a href="#"><i class="fas fa-chevron-right"></i>services</a>
                    <a href="#"><i class="fas fa-chevron-right"></i>about</a>

                    <a href="#"><i class="fas fa-chevron-right"></i>doctors</a>

                    <a href="#"><i class="fas fa-chevron-right"></i>booking</a>

                    <a href="#"><i class="fas fa-chevron-right"></i>reviews</a>

                    <a href="#"><i class="fas fa-chevron-right"></i>blogs</a>



                </div>


                <div class="box">
                    <h3>out services</h3>

                    <a href="#"><i class="fas fa-chevron-right"></i>dental care</a>
                    <a href="#"><i class="fas fa-chevron-right"></i>message therapy</a>

                    <a href="#"><i class="fas fa-chevron-right"></i>cardiology</a>

                    <a href="#"><i class="fas fa-chevron-right"></i>diagnosis </a>

                    

                </div>



                <div class="box">
                    <h3>contact info</h3>

                    <a href="#"><i class="fas fa-phone"></i> +123-456-7899</a>
                    <a href="#"><i class="fas fa-phone"></i> +456-456-7899</a>
                    <a href="#"><i class="fas fa-envelope"></i> adorasah001@gmail.com</a>
                   
                    <a href="#"><i class="fas fa-envelope"></i> galib@kuet.ac.bd</a>
                    <a href="#"><i class="fas fa-map-marker-alt"></i> mumbai, india - 400104</a>
                    

                </div>


                
                <div class="box">
                    <h3>follow us</h3>

                    <a href="#"><i class="fab fa-facebook-f"></i>Asadullah  </a>
                    <a href="#"><i class="fab fa-twitter"></i> ador355</a>
                    <a href="#"><i class="fab fa-instagram"></i> galib343</a>
                    <a href="#"><i class="fab fa-linkedin"></i>Adfd </a>
                 

                </div>




            </div>




            <div class="credit">created by <span>asadullah al galib</span> | all rights reserved</div>
         </section>




            <!-- footer section end -->