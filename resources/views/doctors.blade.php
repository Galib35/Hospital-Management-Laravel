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
                <a href="{{route('doctor.login.form')}}">Doctor Login </a>
                <a href="{{route('book')}}">book</a>
                <a href="{{route('index')}}#review">review</a>
                <a href="{{ route('blogs') }}">blog</a>
            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>

        </header>

        <!-- header section ends -->



        

        <!-- doctors section starts -->

        {{-- <section class="doctors" id="doctors">

            <h1 class="heading"> our <span>doctors</span></h1>

            <div class="box-container">

                <div class="box">
                    <img src={{ asset('img/doctor1.jpg') }} alt="">
                    
                    <h3>john deo</h3>
                    <span>expert doctor</span>

                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    
                    </div>
                </div>
            

                <div class="box">
                    {{-- <img src="img/doctor8.jpg" alt=""> --}}
                    {{-- <img src={{ asset('img/doctor8.jpg') }} alt="">
                    <h3>Mr x</h3>
                    <span>expert doctor</span>

                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    
                    </div>
                </div>
            

                <div class="box">
                    {{-- <img src="img/doctor3.jpg" alt=""> --}}
                    {{-- <img src={{ asset('img/doctor3.jpg') }} alt="">
                    <h3>Helena gyt</h3>
                    <span>expert doctor</span>

                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    
                    </div>
                </div>
            

                <div class="box">
                  
                    <img src={{ asset('img/doctor4.jpg') }} alt="">
                    <h3>Risheti</h3>
                    <span>psycriatist</span>

                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    
                    </div>
                </div>
            

                <div class="box">
                   
                    <img src={{ asset('img/doctor.jpeg') }} alt="">
                    <h3>Jdf sjdb</h3>
                    <span>expert doctor</span>

                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    
                    </div>
                </div>
            --}}

                {{-- <div class="box">
                   
                    <img src={{ asset('img/doctor_patient1.jpg') }} alt="">
                    <h3>Mr y</h3>
                    <span>expert doctor</span>

                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    
                    </div>
                </div>
 --}}

                <!-- Extra doctor info -->

                {{-- <div class="box">
                 
                    <img src={{ asset('img/doctor6.jpg') }} alt="">
                    <h3>Patricia</h3>
                    <span>expert doctor</span>

                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    
                    </div>
                </div> --}}


                {{-- <div class="box">
                    {{-- <img src="img/doctor7.jpg" alt=""> --}}
                    {{-- <img src={{ asset('img/doctor7.jpg') }} alt="">
                    <h3>James hook</h3>
                    <span>expert doctor</span>

                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    
                    </div>
                </div> --}}


                {{-- <div class="box"> --}} 
                    {{-- <img src="img/doctor2.jpg" alt=""> --}}
                    {{-- <img src={{ asset('img/doctor2.jpg') }} alt="">
                    <h3>Oliver</h3>
                    <span>expert doctor</span>

                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a> --}}
                    
                    {{-- </div>
                </div>



            </div>


           

        </section> --}} 




         <!-- doctors section ends -->



         <!-- ds-->


        <!-- doctors section starts -->
<section class="doctors" id="doctors">
    <h1 class="heading"> our <span>doctors</span></h1>
    <div class="box-container">
        @foreach ($doctors as $doctor)
        <div class="box">
            <a href="#">
                <img src="data:image/jpeg;base64,{{ base64_encode($doctor->profile) }}" alt="hi">
            </a>
            <h3>{{ $doctor->username }}</h3>
            <span>{{ $doctor->specialist }}</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        @endforeach
    </div>
</section>



         <!-- ds end -->



         <!-- Job request for doctor start -->


         <div style="margin-top: 20px;"></div>


                <section id="book" class="book">

        <h1 class="heading"><span>Doctor's</span> Job Request</h1>

        <div class="row">

            <div class="image">
                <img src="img/online_booking.svg" alt="">
            </div>


        

            <form action="/doctors" method="POST">
                @csrf
    <h3>Fill Up</h3>
    <input type="text" name="name" placeholder="Your Name" class="box">
    <input type="number" name="number" placeholder="Your Number" class="box">
    <input type="email" name="email" placeholder="Your Email" class="box">
    <input type="date" name="date" class="box">

    <div class="form-group">
        
        <select name="gender" class="box">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>

    <input type="text" name="country" placeholder="Your Country" class="box">
    <input type="password" name="password" placeholder="Password" class="box">
    <input type="submit" name="submit" value="Submit Now" class="btn">
</form>




        </div>

        </section>




        


         <!-- Job request for doctor end -->




        
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