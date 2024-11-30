

@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

{{-- Hero Section Start --}}

    <section class="hero">

        <div class="row-bg">
            <video src="../images/hero-video.mp4" autoplay muted loop playsinline></video>

        </div>
            <div class="container">
                <div class="content">
                    <h6 data-aos="fade-right" data-aos-duration="1500">
                        Mobile DNA Now! <span class="line"></span>
                    </h6>
                    
                    <h1 data-aos="fade-up" data-aos-duration="2000">
                        Discover Your Genetic <br> Story with Mobile DNA
                    </h1>
                    
                    <p data-aos="fade-right" data-aos-duration="1500">
                        Quick, Accurate, and Confidential DNA Testing Services— <br>Wherever You Are!
                    </p>
                    
                    <ul>
                        <li data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
                            <span>01 Paternity Testing</span>
                        </li>
                        <li data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="600">
                            <span>02 Ancestry Testing</span>
                        </li>
                        <li data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="800">
                            <span>03 Twin Testing</span>
                        </li>
                        <li data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1000">
                            <span>04 Relationship Testing</span>
                        </li>
                    </ul>
                </div>
                
            </div>

        
        
    </section>

    {{-- Hero Section End --}}

    {{-- About Section  Start--}}

    <Section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6  left">
                    <div class="inner-col">
                        <!-- Subtitle -->
                        <h6 data-aos="fade-right" data-aos-duration="1200">
                            About Us <span class="line"></span>
                        </h6>
                    
                        <!-- Main Title -->
                        <h2 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
                            Your DNA, Your Story
                        </h2>
                    
                        <!-- Paragraph -->
                        <p data-aos="fade-in" data-aos-duration="1500" data-aos-delay="400">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br> 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, <br> 
                            when an unknown printer took a galley of type and scrambled it to ...
                        </p>
                    
                        <!-- List Items -->
                        <ul>
                            <li data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">Paternity Testing</li>
                            <li data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="600">Ancestry Testing</li>
                            <li data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="700">Grandparent Testing</li>
                            <li data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="800">Sibling Testing</li>
                            <li data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="900">Twin Testing</li>
                        </ul>
                    
                        <!-- Button -->
                        <a href="#" class="theme-btn" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="1000">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="15" viewBox="0 0 29 15" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0263 7.0456C28.3086 7.34672 28.3086 7.81529 28.0263 8.1164L22.1552 14.3789C21.8595 14.6943 21.3641 14.7103 21.0487 14.4146C20.7333 14.1189 20.7173 13.6235 21.013 13.3081L25.6483 8.36382L1.36131 8.36382C0.92897 8.36382 0.578491 8.01334 0.578491 7.581C0.578491 7.14866 0.92897 6.79819 1.36131 6.79819L25.6483 6.79819L21.013 1.85387C20.7173 1.53846 20.7333 1.04306 21.0487 0.74737C21.3641 0.451676 21.8595 0.467656 22.1552 0.783063L28.0263 7.0456Z" fill="white"/>
                            </svg>
                            <span>Book Now</span>
                        </a>
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <div class="inner-col">
                        <!-- Image Wrapper -->
                        <div class="img-wrap" data-aos="fade-left" data-aos-duration="1200" >
                            <img src="./images/about.png" alt="About">
                        </div>
                    
                        <!-- Content Section -->
                        <div class="abt-content">
                            <!-- First Mission Section -->
                            <div class="our-mission red" data-aos="fade-right" data-aos-duration="1200">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                <h3>
                                    Our Mission 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="15" viewBox="0 0 29 15" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0263 7.0456C28.3086 7.34672 28.3086 7.81529 28.0263 8.1164L22.1552 14.3789C21.8595 14.6943 21.3641 14.7103 21.0487 14.4146C20.7333 14.1189 20.7173 13.6235 21.013 13.3081L25.6483 8.36382L1.36131 8.36382C0.92897 8.36382 0.578491 8.01334 0.578491 7.581C0.578491 7.14866 0.92897 6.79819 1.36131 6.79819L25.6483 6.79819L21.013 1.85387C20.7173 1.53846 20.7333 1.04306 21.0487 0.74737C21.3641 0.451676 21.8595 0.467656 22.1552 0.783063L28.0263 7.0456Z" fill="white"/>
                                    </svg>
                                </h3>
                            </div>
                    
                            <!-- Second Mission Section -->
                            <div class="our-mission white" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                <h3>
                                    Our Mission 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="15" viewBox="0 0 29 15" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0263 7.0456C28.3086 7.34672 28.3086 7.81529 28.0263 8.1164L22.1552 14.3789C21.8595 14.6943 21.3641 14.7103 21.0487 14.4146C20.7333 14.1189 20.7173 13.6235 21.013 13.3081L25.6483 8.36382L1.36131 8.36382C0.92897 8.36382 0.578491 8.01334 0.578491 7.581C0.578491 7.14866 0.92897 6.79819 1.36131 6.79819L25.6483 6.79819L21.013 1.85387C20.7173 1.53846 20.7333 1.04306 21.0487 0.74737C21.3641 0.451676 21.8595 0.467656 22.1552 0.783063L28.0263 7.0456Z" fill="white"/>
                                    </svg>
                                </h3>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </Section>

    {{-- About Section End --}}

     {{-- Services Section Start --}}

     <Section id="services">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
                <div class="col-md-6">
                    <div class="inner-col" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
                        <h6 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
                            Services <span class="line"></span>
                        </h6>
                        <h2 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
                            Explore Our Expertise
                        </h2>
                        <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to ...
                        </p>
                        <h6 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700">
                            View All Services  
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="15" viewBox="0 0 29 15" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0263 7.0456C28.3086 7.34672 28.3086 7.81529 28.0263 8.1164L22.1552 14.3789C21.8595 14.6943 21.3641 14.7103 21.0487 14.4146C20.7333 14.1189 20.7173 13.6235 21.013 13.3081L25.6483 8.36382L1.36131 8.36382C0.92897 8.36382 0.578491 8.01334 0.578491 7.581C0.578491 7.14866 0.92897 6.79819 1.36131 6.79819L25.6483 6.79819L21.013 1.85387C20.7173 1.53846 20.7333 1.04306 21.0487 0.74737C21.3641 0.451676 21.8595 0.467656 22.1552 0.783063L28.0263 7.0456Z" fill="white"/>
                                </svg>
                            </a>
                        </h6>
                        <div class="serv-inr">
                            <div class="row">
                                <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="800">
                                    <div class="image-col">
                                        <img src="./images/PaternityTesting.png" alt="">
                                        <a href="#" class="theme-btn">
                                            <span>Paternity Testing</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="900">
                                    <div class="image-col">
                                        <img src="./images/AncestryTesting.png" alt="">
                                        <a href="#" class="theme-btn">
                                            <span>Ancestry Testing</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="inner-col" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1000">
                        <div class="row">
                            <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1100">
                                <div class="image-col twin">
                                    <img src="./images/Twintesting.png" alt="">
                                    <a href="#" class="theme-btn">
                                        <span>Twin testing</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="image-col" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1200">
                                    <img src="./images/Grandparenttesting.png" alt="">
                                    <a href="#" class="theme-btn">
                                        <span>Grandparent testing</span>
                                    </a>
                                </div>
                                <div class="image-col" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1300">
                                    <img src="./images/SiblingDNATesting.png" alt="">
                                    <a href="#" class="theme-btn">
                                        <span>Sibling DNA Testing</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
        </div>
     </Section>

      {{-- Services Section End --}}

    {{-- Appointment Section Start --}}

    <section id="Appointment">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-duration="1200">
                <div class="col-md-3" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="200">
                    <div class="inner-col">
                        <div class="support">
                            <div class="icon">
                                <img src="./images/chaticon.png" alt="">
                            </div>
                            <p>Get Support <br> <strong>Support@demo.com</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="400">
                    <div class="inner-col">
                        <h3>make your appointment with Us! <span class="line"></span></h3>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="600">
                    <div class="inner-col">
                        <!-- Button -->
                        <a href="#" class="theme-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="15" viewBox="0 0 29 15" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0263 7.0456C28.3086 7.34672 28.3086 7.81529 28.0263 8.1164L22.1552 14.3789C21.8595 14.6943 21.3641 14.7103 21.0487 14.4146C20.7333 14.1189 20.7173 13.6235 21.013 13.3081L25.6483 8.36382L1.36131 8.36382C0.92897 8.36382 0.578491 8.01334 0.578491 7.581C0.578491 7.14866 0.92897 6.79819 1.36131 6.79819L25.6483 6.79819L21.013 1.85387C20.7173 1.53846 20.7333 1.04306 21.0487 0.74737C21.3641 0.451676 21.8595 0.467656 22.1552 0.783063L28.0263 7.0456Z" fill="white"/>
                            </svg>
                            <span>Book US Now</span>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>


    {{-- Appointment Section End --}}



{{-- Video Section Start  --}}

<Section id="video-sec">

   
     <!-- Video Thumbnail -->
     <div class="video-thumbnail" onclick="openVideoModal()">
        <img src="./images/video-thumbnail.png" alt="Video Thumbnail" />
        <div class="play-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polygon points="5 3 19 12 5 21 5 3"></polygon>
            </svg>
        </div>
    </div>

    

    <!-- Video Popup Modal -->
<div id="videoModal" class="video-modal">
    <div class="modal-content">
        <span class="close" onclick="closeVideoModal()">&times;</span>
        <video id="videoPlayer" width="100%" controls>
            <source src="../images/hero-video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

</Section>


{{-- Video Section End  --}}



{{-- Our CEO Section Start  --}}

<Section id="our-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="inner-col">
                    <!-- CEO Image with AOS animation -->
                    <img src="../images/ourceo.png" alt="" data-aos="fade-up" data-aos-duration="1500">
                    
                    <!-- Intro Text with AOS animation -->
                    <div class="intro" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
                        <p><strong>Dr.Joe </strong> tellus eu odio Bibendum <br>
                            Aliquam volutpat massa in <strong>Best Doctor </strong> mentum. <br>
                            Nullam varius libero id odio</p>
                    </div>
                    
                    <!-- Rotating Ball with AOS animation -->
                    <img src="../images/ball.png" class="ball" alt="" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="500">
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="inner-col">
                    <!-- CEO Name and Title with AOS animation -->
                    <h6 data-aos="fade-left" data-aos-duration="1200" data-aos-delay="500">Our CEO</h6>
                    <h2 data-aos="fade-left" data-aos-duration="1200" data-aos-delay="700">Joe Mathew - PHD</h2>
                    
                    <!-- Description with AOS animation -->
                    <p data-aos="fade-up" data-aos-duration="1200" data-aos-delay="1000">Lorem Ipsum is simply dummy text of the printing and <br>
                        typesetting industry.</p>
        
                    <!-- List Items with AOS animation -->
                    <ul data-aos="fade-up" data-aos-duration="1200" data-aos-delay="1200">
                        <li>Sibling DNA Testing</li>
                        <li>Ancestry Testing</li>
                    </ul>
        
                    <!-- Book Now Button with AOS animation -->
                    <a href="#" class="theme-btn" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="1500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="15" viewBox="0 0 29 15" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0263 7.0456C28.3086 7.34672 28.3086 7.81529 28.0263 8.1164L22.1552 14.3789C21.8595 14.6943 21.3641 14.7103 21.0487 14.4146C20.7333 14.1189 20.7173 13.6235 21.013 13.3081L25.6483 8.36382L1.36131 8.36382C0.92897 8.36382 0.578491 8.01334 0.578491 7.581C0.578491 7.14866 0.92897 6.79819 1.36131 6.79819L25.6483 6.79819L21.013 1.85387C20.7173 1.53846 20.7333 1.04306 21.0487 0.74737C21.3641 0.451676 21.8595 0.467656 22.1552 0.783063L28.0263 7.0456Z" fill="white"/>
                        </svg>
                        <span>Book Now</span>
                    </a>
                </div>
            </div>
        </div>
        
        
    </div>
</Section>

{{-- Our CEO Section End  --}}




{{-- features Section Start  --}}

<Section id="features">
    <div class="container">
       
        <div class="row">
            <div class="col-5" data-aos="fade-up" data-aos-duration="1200">
                <div class="inner-col">
                    <span class="counter" data-count="8">0</span><span>+</span>
                    <p>Years</p>
                </div>
            </div>
            <div class="col-5" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                <div class="inner-col">
                    <span class="counter" data-count="84">84</span><span>M</span>
                    <p>Patients</p>
                </div>
            </div>
            <div class="col-5" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                <div class="inner-col">
                    <span class="counter" data-count="24">24</span><span></span>
                    <p>Branches</p>
                </div>
            </div>
            <div class="col-5" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                <div class="inner-col">
                    <span class="counter" data-count="36">36</span><span>K</span>
                    <p>Years</p>
                </div>
            </div>
            <div class="col-5" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                <div class="inner-col">
                    <span class="counter" data-count="49">49</span><span></span>
                    <p>Doctors</p>
                </div>
            </div>
        </div>
        

    </div>
</Section>

            
       
  

{{-- features Section End  --}}





{{-- our expert Section Start  --}}


<section id="faq">
    <div class="container">
        <div class="row">
            <div class="col-md-7" data-aos="fade-up" data-aos-duration="1000">
                <div class="inner-col">
                    <h6 data-aos="fade-left" data-aos-duration="1200">our expert answers <span class="line"></span></h6>
                    <h2 data-aos="fade-left" data-aos-duration="1500">frequently asked questions</h2>
        
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Lorem Ipsum is simply dummy text?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Lorem Ipsum is simply dummy text?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Lorem Ipsum is simply dummy text?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5" data-aos="fade-left" data-aos-duration="1000">
                <div class="inner-col">
                    <img src="./images/faq.png" alt="" data-aos="zoom-in" data-aos-duration="1500">
                </div>
            </div>
        </div>
        
       
        
    </div>
</section>



{{-- our expert Section End  --}}

{{-- BOOK YOUR SLOT Section Start  --}}

<section id="book-slot">
    <div class="row">
       <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
          <div class="inner-col">
             <img src="./images/book-slot.png" alt="" data-aos="zoom-in" data-aos-duration="1500">
             <div class="intro" data-aos="fade-up" data-aos-duration="1500">
                <h2>WE ALWAYS TAKE <br> CARE OF YOUR SKIN</h2>
                <div class="support" data-aos="fade-up" data-aos-duration="1500">
                   <div class="icon">
                      <img src="./images/support.png" alt="">
                   </div>
                   <p>24/7 EMERGENCY<br> <strong>000 - 123 - 456789</strong></p>
                </div>
             </div>
          </div>
       </div>
       <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
          <div class="inner-col form-sec">
             <div class="form-container" data-aos="fade-up" data-aos-duration="1500">
                <h6>APPOINTMENT</h6>
                <h2>BOOK YOUR SLOT</h2>
                <form action="#" method="POST">
                   <div class="row">
                      <div class="col-md-12">
                         <label for="name">Hello I am!</label> <br>
                         <input type="text" id="name" name="name" placeholder="Name" required><br><br>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-md-12">
                         <label for="service">I am looking it for</label> <br>
                         <select id="service" name="service" required>
                            <option value="" disabled selected>Select Service</option>
                            <option value="surgery">Surgery</option>
                            <option value="treatment">Treatment</option>
                            <option value="consultation">Consultation</option>
                         </select><br><br>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-md-12">
                         <label for="date">Date to fix a surgery or treatments</label> <br>
                         <input type="date" id="date" name="date" required><br><br>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-md-6">
                         <label for="contact">Your Contact Number</label> <br>
                         <input type="tel" id="contact" name="contact" placeholder="Contact Number" required><br><br>
                      </div>
                      <div class="col-md-6">
                         <label for="email">Your Email Id</label> <br>
                         <input type="email" id="email" name="email" placeholder="Email" required><br><br>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-md-12">
                         <label for="message">Message</label> <br>
                         <textarea id="message" name="message" placeholder="Enter Your Message" required></textarea><br><br>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-md-12">
                         <button type="submit" data-aos="zoom-in" data-aos-duration="1500">
                            SEND 
                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="15" viewBox="0 0 29 15" fill="none">
                               <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0263 7.0456C28.3086 7.34672 28.3086 7.81529 28.0263 8.1164L22.1552 14.3789C21.8595 14.6943 21.3641 14.7103 21.0487 14.4146C20.7333 14.1189 20.7173 13.6235 21.013 13.3081L25.6483 8.36382L1.36131 8.36382C0.92897 8.36382 0.578491 8.01334 0.578491 7.581C0.578491 7.14866 0.92897 6.79819 1.36131 6.79819L25.6483 6.79819L21.013 1.85387C20.7173 1.53846 20.7333 1.04306 21.0487 0.74737C21.3641 0.451676 21.8595 0.467656 22.1552 0.783063L28.0263 7.0456Z" fill="white"></path>
                            </svg>
                         </button>
                      </div>
                   </div>
                </form>
             </div>
          </div>
       </div>
    </div>
</section>


 {{-- BOOK YOUR SLOT Section End  --}}







 









@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/home-specific.css') }}">
@endpush

