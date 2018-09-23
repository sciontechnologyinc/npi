@extends('website.master.template')


@section('content')

<header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
          
          
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('/images/slider1.jpg')">
            <div class="carousel-caption d-none d-md-block">
          
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('/images/slider2.jpg')">
            <div class="carousel-caption d-none d-md-block">
           
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('/images/slider3.jpg')">
            <div class="carousel-caption d-none d-md-block">
           
            </div>
          </div>
          <!-- Slide Four - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('/images/slider4.jpg')">
            <div class="carousel-caption d-none d-md-block">
        
            </div>
          </div>
          <!-- Slide Five - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('/images/slider5.jpg')">
            <div class="carousel-caption d-none d-md-block">
          
            </div>
          </div>
          <!-- Slide Six - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('/images/slider6.jpg')">
            <div class="carousel-caption d-none d-md-block">
          
            </div>
          </div>
          <!-- Slide Seven - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('/images/slider7.jpg')">
            <div class="carousel-caption d-none d-md-block">
          
            </div>
          </div>
          <!-- Slide Eight - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('/images/slider8.jpg')">
            <div class="carousel-caption d-none d-md-block">
          
            </div>
          </div>


        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
        <span class="companyname">NPI Machinery Inc.</span>
       
      </div>
    </section>
<div class="parallax">
    <div class="container">
        <div class="row desc">
            <div class="npi-desc">Contribute significantly to the growth and development of the Philippine Plastics and Packaging Industries particular, and to the Philippine Economy, in general.</div>
            <div class="npi-desc">Market and Sell productive and environment-friendly machines, moulds, auxiliary equipment, and spare parts.</div>
            <div class="npi-desc">Provide clients with efficient and effective technical assistance and after-sales service.</div>
            <div class="npi-desc">Develop new markets for productive and environment-friendly plastic molding technologies.</div>
        </div>
    </div>

    <div class="home-desc">We are the exclusive sales agent and the official servicing arm of this top of the line machines and as well as Management enhancement applications.</div>
   
    <div class="home-ourpartners">Our Partners</div>


<!-- Team -->
<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">OUR PARTNERS</h5>
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="/images/aoki.png" alt="card image"></p>
                                    <h4 class="card-title">AOKI TECHNICAL LABORATORY INC.</h4>
                                    <p class="card-text">World Leader in stretch blow molding machines, the smart choice for PET bottle applications.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">AOKI</h4>
                                    <p class="card-text">AOKI is providing the unique Direct Heatcon® Injection Stretch-blow molding technology that allows these containers to be molded with the least amount of energy.</p>
                                    <a href="http://www.aokitech.co.jp/" target=”_blank class="btn btn-primary btn-sm">Visit Link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="/images/abc.png" alt="card image"></p>
                                    <h4 class="card-title">ABC Compressors</h4>
                                    <p class="card-text">Becoming a worldwide benchmark in the piston compressor industry has always been ABC COMPRESSORS’ goal.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">ABC Compressors</h4>
                                    <p class="card-text">Similarly, ABC COMPRESSORS has adapted its product range to customized solutions and to the demands of new markets, such as PET blowing, where it was a pioneer in the 80s with the four-stage PET compressor, or as gas applications since the 70s.</p>
                                    <a href="http://www.abc-compressors.com/home" target=”_blank class="btn btn-primary btn-sm">Visit Link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="/images/nissei.png" alt="card image"></p>
                                    <h4 class="card-title">NISSEI PLASTIC INDUSTRIAL CO., LTD</h4>
                                    <p class="card-text"> An International enterprise contributes to the well being of communities through plastics.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">NISSEI</h4>
                                    <p class="card-text">The Leading Injection Molding Machine in Japan and world wide. Quality Policy: Promoting manufacturing activity in a way both our customers and our company can prosper.</p>
                                    <a href="http://www.nisseijushi.co.jp/" target=”_blank class="btn btn-primary btn-sm">Visit Link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="/images/sigmax.png" alt="card image"></p>
                                    <h4 class="card-title">SIGMAX Robot Eye</h4>
                                    <p class="card-text">Service for the customers Agile response. Self development of ourself.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">SIGMAX</h4>
                                    <p class="card-text">The monitoring mold system ROBOT-EYE realized "easy-operation" and "stable movement" as a monitoring system for molding fields that anyone can operate easily.</p>
                                    <a href="http://www.robot-eye.co.jp/english/" target=”_blank class="btn btn-primary btn-sm">Visit Link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="/images/harmo.png" alt="card image"></p>
                                    <h4 class="card-title">HARMO CO., LTD</h4>
                                    <p class="card-text">A leading Manufacturer of Robots and auxiliary equipments for Injection Molding Machine, and other applications.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">HARMO</h4>
                                    <p class="card-text">As the comprehensive manufacturer of molded parts removal robot and the related peripheral machines, HARMO has been building solid structure for product development through marketing.</p>
                                    <a href="http://harmo-net.co.jp/" target=”_blank class="btn btn-primary btn-sm">Visit Link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            

        </div>
    </div>
</section>
<!-- Team -->

<div class=""><br></div>

</div>

<script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
<script>
  $().ready(function(){
  $(".nav-link.home").addClass("active");
    });
</script>
@endsection