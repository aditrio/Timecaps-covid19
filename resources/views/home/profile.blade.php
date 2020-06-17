@extends('home.layouts.app')

@section('title')
    Profile | Time Capsule Covid-19    
@endsection

@section('content')
   <link rel="stylesheet" href="{{ asset('assets/css/ckeditor.css') }}">
<section class="ftco-section ftco-section-2" id="navigationTabs">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="heading-section mb-3"> Hallo , {{ Auth::user()->name }}<br>
                    <small>Send your stories here</small><br>
                    
                </h2>
                @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                          <div class="container">
                            <div class="d-flex">
                              <div class="alert-icon">
                                <i class="ion-ios-checkmark-circle"></i>
                              </div>
                              <p class="mb-0 ml-2">{{ $message }}</p>
                            </div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true"><i class="ion-ios-close"></i></span>
                            </button>
                          </div>
                        </div>
                    @endif
                   <div class="btn btn-info btn-round px-5">
                          <a class="btn-link" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
            </div>
          
          <div class="col-lg">
             @include('home.layouts.count')
          </div>

           
        </div>

        <div class="row">
          <div class="col-lg">
             <div class="col-lg mb-5 mb-md-0">
                <h2 class="heading-section mb-3"> <br>
                    
                </h2>
                <div class="tabulation-2">
                    <ul class="nav nav-pills nav-fill d-md-flex d-block">
                      <li class="nav-item">
                        <a class="nav-link active py-3" data-toggle="tab" href="#home1"><span class="ion-ios-send mr-2"></span> Post</a>
                      </li>
                      <li class="nav-item px-lg-2">
                        <a class="nav-link py-3" data-toggle="tab" href="#home2"><span class="ion-ios-person mr-2"></span> Your Stories </a>
                      </li>
                     {{--  <li class="nav-item">
                        <a class="nav-link py-3" data-toggle="tab" href="#home3"><span class="ion-ios-mail mr-2"></span> Messages</a>
                      </li> --}}
                    </ul>
                    <div class="tab-content rounded mt-2">
                      <div class="tab-pane container p-4 active" id="home1">

                        <form action="{{ route('posts.store') }}" method="POST">
                          @csrf
                          <div class="alert alert-info">
                          <div class="container">
                            <div class="d-flex">
                              <div class="alert-icon">
                                <i class="ion-ios-checkmark-circle"></i>
                              </div>
                              <p class="mb-0 ml-2">Becarefull, you can't edit or delete the post until the timer has done</p>
                            </div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true"><i class="ion-ios-close"></i></span>
                            </button>
                          </div>
                        </div>
                           <input class="form-control" type="text" name="title" placeholder="Title..."> <br>
                           <textarea name="editor1"></textarea>
                           <br><br>
                           <button type="submit" class="btn btn-primary btn-rounded px-5" >
                             <i class="ion-ios-send" ></i> Save to Capsule 
                           </button>
                          
                        </form>
                       
                      </div>
                      <div class="tab-pane container p-4 fade" id="home2">
                          <div id="accordion" class="myaccordion w-100 text-center">
                            @foreach($data as $da)
                              <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                      {{$da->title}} 
                                      
                                      
                                      <i class="fa" aria-hidden="true"></i>
                                    </button>
                                  </h2>

                                </div>
                                <span class="btn btn-outline-warning disabled"><small> {{ date('d-M-y', strtotime($da->created_at)) }}</small></span>  
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                  <div class="card-body text-left">
                                    <div class="text-center"> 
                                      <img style="width: 128px;height: 128px;" class="img" src="https://simpleicon.com/wp-content/uploads/lock-2.png" alt="">
                                      <h4>Sorry !! , your story has been locked until the timer done</h4>
                                    </div>
                                   
                                    
                                  </div>
                                </div>
                              </div>
                            @endforeach
                             
                            </div>
                      </div>
                      {{-- <div class="tab-pane container p-4 fade" id="home3">
                          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                      </div> --}}
                    </div>
                </div>
            </div>
          </div>
        </div>
<br><br>
        
    </div>

<script> 
        CKEDITOR.replace( 'editor1' );
</script>
</section>
<!-- - - - - -end- - - - -  -->
@endsection