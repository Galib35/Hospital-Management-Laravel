
<?php


@include('include.connection');

//$users = $connection->table('doctor')->get();

//$name=$connection->DB::table('doctor')->get();



?>


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
        


        <style>

            .form-group label {
                    display: block;
                    font-size: 13px;
                    text-align: left;
                    margin-bottom: 5px;
            }


        </style>

      



    </head>

    <body>

        <!-- header section starts -->

        <header class="header">

            <a href="#" class="logo"> <i class="fas fa-heartbeat "> </i> YouHeal   </a>

            <nav class="navbar">
                <a href="#home">home</a>
                <a href="#services">services</a>
                <a href="#about">about</a>
                <a href="{{route('doctors')}}">doctors</a>
                <a href="{{route('book')}}">book</a>
                <a href="#review">review</a>
                <a href="{{ route('blogs') }}">blog</a>
            </nav>
            
            <div id="menu-btn" class="fas fa-bars"></div>

        </header>

        <!-- header section ends -->


        <!-- home section starts -->

        <section class="home" id="home">
            <div class="image">
                <img src={{ asset('img/doctor_patient_matching.svg') }} alt="" >
            </div>

            <div class="content">
                <h3>stay safe, stay healthy</h3>
                <p>Hospitals offer a wide range of services, including emergency care, diagnostic testing, surgery, rehabilitation, and more. Visitors should be able to easily find information about the services offered by the hospital.</p>
                <a href="#services" class="btn">about us <span class="fas fa-chevron-right"></span></a>
            </div>

        </section>




        <!-- home section ends -->



        <!-- icons section starts -->

        <section class="icons-container">

            <div class="icons">
                <i class="fas fa-user-md"></i>
                <h3><span id="count1" class="display-4"></span></h3>
                <p>doctors at work</p>
            </div>
    
            <div class="icons">
                <i class="fas fa-users"></i>
                <h3><span id="count2" class="display-4"></span></h3>
                <p>satisfied patients</p>
            </div>
    
    
            <div class="icons">
                <i class="fas fa-procedures"></i>
                <h3><span id="count3" class="display-4"></span></h3>
                <p>bed facility</p>
            </div>
    
            <div class="icons">
                <i class="fas fa-hospital"></i>
                <h3><span id="count4" class="display-4"></span></h3>
                <p>available hospitals</p>
            </div>
    

        </section>

        




        <!-- icons section ends -->






          <!-- services section starts -->


        <section class="services" id="services">
            <h1 class="heading">our <span> services</span></h1>
            <div class="box-container">
                <div class="box" id="free_checkup">
                    <i class="fas fa-notes-medical"></i>
                    <h3>free checkup</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa nisi distinctio consequatur, voluptas eos placeat ducimus commodi unde quas accusantium reiciendis quis dignissimos.</p>
                    <a href="{{ route('service', 'free_checkup') }}" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
                </div>
        
                <div class="box" id="ambulance">
                    <i class="fas fa-ambulance"></i>
                    <h3>24/7 ambulance</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa nisi distinctio consequatur, voluptas eos placeat ducimus commodi unde quas accusantium reiciendis quis dignissimos.</p>
                    <a href="{{ route('service', 'ambulance') }}" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
                </div>
        
                <div class="box" id="expert_doctor">
                    <i class="fas fa-user-md"></i>
                    <h3>expert doctors</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa nisi distinctio consequatur, voluptas eos placeat ducimus commodi unde quas accusantium reiciendis quis dignissimos .</p>
                    <a href="{{ route('service', 'expert_doctor') }}" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
                </div>
        
                <div class="box" id="medicines">
                    <i class="fas fa-pills"></i>
                    <h3>medicines</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa nisi distinctio consequatur, voluptas eos placeat ducimus commodi unde quas accusantium reiciendis quis dignissimos .</p>
                    <a href="{{ route('service', 'medicines') }}" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
                </div>
        
                <div class="box" id="bed_facility">
                    <i class="fas fa-procedures"></i>
                    <h3>bed facility</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa nisi distinctio consequatur, voluptas eos placeat ducimus commodi unde quas accusantium reiciendis quis dignissimos .</p>
                    <a href="{{ route('service', 'bed_facility') }}" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
                </div>
        
                <div class="box" id="total_care">
                    <i class="fas fa-heartbeat"></i>
                    <h3>total care</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa nisi distinctio consequatur, voluptas eos placeat ducimus commodi unde quas accusantium reiciendis quis dignissimos .</p>
                    <a href="{{ route('service', 'total_care') }}" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
                </div>
            </div>
        </section>

        

    <!-- services section ends -->






        
        <!-- about section starts -->


        <section class="about" id="about">

            <h1 class="heading"><span>about</span> us</h1>

            <div class="row">
                <div class="image">
                    {{-- <img src="img/doctors_standing.svg" alt=""> --}}
                    <img src={{ asset('img/doctors_standing.svg') }} alt="">
                </div>


                <div class="content">
                    <h3>We take care of your life</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero consequuntur cum inventore, tempora nobis velit assumenda odit nisi minima, blanditiis qui sapiente incidunt deleniti? Error laudantium exercitationem vero voluptatem deleniti?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ex et ipsum voluptates aspernatur veritatis reprehenderit deserunt quia voluptas voluptatibus. Similique ex amet praesentium, repellendus iste voluptatem ipsam dolor numquam!</p>

                    <a href="{{route('blogs')}}" class="btn">learn more  <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

        </section>


        <!-- about section ends -->










        
         <!-- Booking section starts -->



         
         <section id="book" class="book">

            <h1 class="heading"><span>book</span> now</h1>

            <div class="row">

                <div class="image">
                    {{-- <img src="img/online_booking.svg" alt=""> --}}
                    <img src={{ asset('img/online_booking.svg') }} alt="">
                    

                </div>




                <form action="/index" method="POST">
                    @csrf
    <h3>Book Appointment</h3>
    <div class="form-group">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" placeholder="Your Name" class="box">
    </div>
    <div class="form-group">
        <label for="number">Your Number:</label>
        <input type="number" id="number" name="number" placeholder="Your Number" class="box">
    </div>
    <div class="form-group">
        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" placeholder="Your Email" class="box">
    </div>
    <div class="form-group">
        <label for="gender">Gender:</label>
        <select name="gender" id="gender" class="box">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>

    <div class="form-group">
        <label for="doctor">Dr:</label>
        <select name="doctor" id="doctor" class="box">

         <!-- show doctor's name from database -->


         @foreach ($doctors as $doctor)

            <option value="{{$doctor->username}}">{{$doctor->username}}</option>
             
         @endforeach


        </select>

        <div class="form-group">
        <label for="specialist">Specialist:</label>
        <input type="text" id="specialist" name="specialist" placeholder="specialist" class="box">
    </div>

    </div>
    <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" class="box">
    </div>
    <input type="submit" name="submit" value="Book Now" class="btn">
</form>



            </div>

         </section>




         <!-- Booking section end -->





        
         <!-- review section starts -->

         <section class="review" id="review">

            <h1 class="heading">client's <span>review</span></h1>

            <div class="box-container">

                <div class="box">

                    <img src="img/customer1.jpg" alt="">
                    <h3>watson</h3>

                    <div class="starts">

                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        

                    </div>

                    <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae debitis atque, sequi optio maxime vero commodi asperiores adipisci eius, voluptates et architecto quia tempore harum, distinctio beatae placeat qui animi.</p>



                </div>



                <div class="box">

                    {{-- <img src="img/heisenberg.jpg" alt=""> --}}
                    <img src={{ asset('img/heisenberg.jpg') }} alt="">
                    
                    <h3>heisenberg</h3>

                    <div class="starts">

                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        

                    </div>

                    <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae debitis atque, sequi optio maxime vero commodi asperiores adipisci eius, voluptates et architecto quia tempore harum, distinctio beatae placeat qui animi.</p>
                    


                </div>



                <div class="box">

                    <img src="img/person4.jpg" alt="">
                    <h3>cristina</h3>

                    <div class="starts">

                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        

                    </div>

                    <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae debitis atque, sequi optio maxime vero commodi asperiores adipisci eius, voluptates et architecto quia tempore harum, distinctio beatae placeat qui animi.</p>
                    


                </div>


            </div>

         </section>




         <!-- review section end -->






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

            <a href="https://www.facebook.com/ador.asadullah"><i class="fas fa-phone"></i> +123-456-7899</a>
            <a href="https://www.facebook.com/ador.asadullah"><i class="fas fa-phone"></i> +456-456-7899</a>
            <a href="https://www.facebook.com/ador.asadullah"><i class="fas fa-envelope"></i> adorasah001@gmail.com</a>
           
            <a href="#"><i class="fas fa-envelope"></i> galib@kuet.ac.bd</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i> mumbai, india - 400104</a>
            

        </div>


        
        <div class="box">
            <h3>follow us</h3>

            <a href="https://www.facebook.com/ador.asadullah"><i class="fab fa-facebook-f"></i>Asadullah  </a>
            <a href="https://www.facebook.com/ador.asadullah"><i class="fab fa-twitter"></i> ador355</a>
            <a href="https://www.facebook.com/ador.asadullah"><i class="fab fa-instagram"></i> galib343</a>
            <a href="https://www.facebook.com/ador.asadullah"><i class="fab fa-linkedin"></i>Adfd </a>
         

        </div>




    </div>




    <div class="credit">created by <span>asadullah al galib</span> | all rights reserved</div>
 </section>




    <!-- footer section end -->



<!-- custom js file link -->
<script src="{{asset('js/script.js')}}"></script>

</body>
</html>