@extends('home.layouts.app')

@section('title')
    Time Capsule Covid-19    
@endsection

@section('content')

<div class="main-section">


<section class="hero-wrap" style="background-image: url(assets/images/BG1.png);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row description align-items-center justify-content-center">
            <div class="col-md-8 text-center">
                <div class="text">
                    <h2>Time Capsule <br> Covid-19</h2>
                    <p class="mb-4 text-warning" >Have lot of memorable momment during quarantine ? <br> Send your stories here !!</p>
                    @include('home.layouts.count')
                    
                    <!-- <div class="designed d-inline-block">
                        <d class="d-flex align-items-center">
                            <div class="img" style="background-image: url(images/person.jpg);"></div>
                            <div class="ml-3"><p class="mb-0">Designed by: <span>Colorlib.com</span></p></div>
                        </d>
                    </div> -->
                </div>
            </div>
        </div>
       
    </div>
    <br>
   
    <!-- <div class="mouse">
          <a href="#" class="mouse-icon">
              <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
          </a>
      </div> -->
</section>


<section class="ftco-section goto-here pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h3> What is Covid-19</h3><br>
                <img class="image" src="{{ asset('assets/images/1.png') }}" alt="">
                <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.

Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.

The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. 

The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).</p>
                
            </div>
        </div>
<br><br>
        <div class="row">
            <div class="col-lg-8 mx-auto text-center ">
                <h3> So, How about this website ?</h3><br>
                 <img class="image" src="{{ asset('assets/images/TC.png') }}" alt=""><br>
                 <br>
                <p>
                    maybe you feel tired quarantined for a long time, then tell me everything that is interesting for yourself in the future. your story will be sent after the countdown time has ended
                </p>

                <br>
                <h3> Let's send stories !</h3>
                <p><a href="/login" class="btn btn-primary px-5 py-4 mb-2"><i class="ion-ios-mail mr-2"></i>Login</a> <a href="/register" class="btn btn-dark px-5 py-4 mb-2"><i class="ion-ios-code mr-2"></i>Register</a></p>
               
            </div>
        </div>


    </div>
</section>

</div>
@endsection