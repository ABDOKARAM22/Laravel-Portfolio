@section('title',"Florida Music")
@include('layouts.header')

<main id="main">
  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>{{__('home.About Us')}}</h2>
      </div>

      @foreach ($abouts as $about)

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{asset('assets/img/Home-About/'.$about->image)}}" class="img-fluid" alt="">
          </div>
         
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">

            <h3>{{$about->title}}</h3>
            
            <p>
              {!!nl2br($about->description)!!}
            </p>

          </div>
        </div>
      @endforeach

      </div>
    </section><!-- End About Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{__('home.Services')}}</h2>
          <p>{{__('home.Check our Services')}}</p>
        </div>

        <div class="row">

          @foreach ($services as $service)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class='{{$service->icon}}'></i></div>
              <h4><a href="">{{$service->name}}</a></h4>
              <p>{{$service->description}}</p>
            </div>
          </div> 
            
          @endforeach
        </div>
      </div>
    </section><!-- End Services Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{__('home.Portfolio')}}</h2>
          <p>{{__('home.Check our Portfolio')}}</p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          @foreach($portfolios as $portfolio)


          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/img/portfolio/'.$portfolio->image)}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{$portfolio->name}}</h4>
                <p>{{$portfolio->description}}</p>
                <div class="portfolio-links">
                  <a href="{{asset('assets/img/portfolio/'.$portfolio->image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$portfolio->name}}"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>


          @endforeach
        </div>
      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{__('home.Team')}}</h2>
          <p>{{__('home.Check our Team')}}</p>
        </div>

        <div class="row">

          @foreach($teams as $team)

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{asset('assets/img/team/'.$team->image)}}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>{{$team->first_name ." ".$team->last_name }}</h4>
                <span>{{$team->job_title}}</span>
              </div>
            </div>
          </div>

          @endforeach

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{__('home.Contact')}}</h2>
          <p>{{__('home.Contact Us')}}</p>
        </div>

        <div class="row mt-2">
          
          @foreach($contacts as $contact)
          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>{{__("home.Location")}}</h4>
                <p>{{$contact->location}}</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>{{__("home.Email")}}</h4>
                <p>{{$contact->email}}</p>
              </div>

              <div class="phone">
              <i class="bi bi-person-lines-fill"></i>
                <h4>{{__("home.Call")}}</h4>
                <p>{{$contact->phone}}</p>
              </div> <br>
              
              <div class="social-links">
                <i class="bi bi-phone"></i>
                <h4>{{__("home.social-links")}}</h4>
                <a href="{{$contact->behance}}"><i class="bi bi-behance"></i></a>
                <a href="{{$contact->facebook}}" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="{{$contact->instegram}}" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="{{$contact->twitter}}" target="_blank"><i class="bi bi-twitter"></i></a>
              </div>
            </div>
          </div>
          @endforeach
          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="{{route('sendmail')}}" form='mail' method="post" class="php-email-form">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}" placeholder="{{__('home.Your Name')}}" >
                  @error('name')
                    <div class="alert alert-danger"> {{$message}} </div>
                  @enderror
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="email" id="email" value="{{old('email')}}" placeholder="{{__('home.Your Email')}}" >
                  @error('email')
                  <div class="alert alert-danger"> {{$message}} </div>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" class="form-control" name="phone" id="phone" value="{{old('phone')}}" placeholder="{{__('home.Phone Number')}}">
                @error('phone')
                <div class="alert alert-danger"> {{$message}} </div>
              @enderror
            </div>
            <div class="col-md-6 form-group">
              <input type="text" class="form-control" name="more_details" id="more_details" value="{{old('more_details')}}" placeholder="{{__('home.More Details')}}">
              @error('more_details')
              <div class="alert alert-danger"> {{$message}} </div>
              @enderror
            </div>
          </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" value="{{old('subject')}}" placeholder="{{__('home.Subject')}}" >
                @error('subject')
                <div class="alert alert-danger"> {{$message}} </div>
                @enderror
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" id="mail" rows="5" placeholder="{{__('home.Message')}}" >{{old('message')}}</textarea>
                @error('message')
                <div class="alert alert-danger"> {{$message}} </div>
                @enderror
              </div>
              @if(session('success'))
              <div class="alert alert-success" role="alert">
              {{ session('success') }}  
              </div>
              @endif
              <div class="text-center"><button type="submit">{{__('home.Send Message')}}</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.footer')

</body>

</html>