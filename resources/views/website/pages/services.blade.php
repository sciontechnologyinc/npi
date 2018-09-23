@extends('website.master.template')

@section('content')

<div class="services-cover">
    <div class="companylogo">
        <img src="" alt="">
    </div>
    <div class="services-title">Services
    </div>
    <div class="companyinfobtn">
    </div>
</div>
<div class="parallax">


<div class="beforecontainer">
<div class="container services">
  <div class="row">

    <div class="col-sm">
    <div class="card cmp-services">
      <img class="card-img-top" src="/images/aoki-product1.jpg" alt="Card image cap">
      <div class="card-body cmp-services">
        <h5 class="card-title cmp-services"><img src="/images/aoki.png" alt=""></h5>
        <p class="card-text cmp-services">Stretch Blow Molding Machine</p>
      </div>
      <div class="card-body cmp-services">
        <a href="http://www.aokitech.co.jp/products/" target=”_blank class="card-link">Visit link</a>
      </div>
    </div>
    </div>

    <div class="col-sm">
    <div class="card cmp-services">
      <img class="card-img-top" src="/images/abc-product1.jpg" alt="Card image cap">
      <div class="card-body cmp-services">
        <h5 class="card-title cmp-services"><img src="/images/abc.png" alt=""></h5>
        <p class="card-text cmp-services">ABC Piston Compressors</p>
      </div>
      <div class="card-body cmp-services">
        <a href="http://www.abc-compressors.com/products" target=”_blank class="card-link">Visit link</a>
      </div>
    </div>
    </div>

    <div class="col-sm">
    <div class="card cmp-services">
      <img class="card-img-top" src="/images/sigmax-product1.jpg" alt="Card image cap">
      <div class="card-body cmp-services">
        <h5 class="card-title cmp-services"><img src="/images/sigmax.png" alt=""></h5>
        <p class="card-text cmp-services">Robot Eye Monitoring Equipment</p>
      </div>
      <div class="card-body cmp-services">
        <a href="http://www.robot-eye.co.jp/english/product/index.html" target=”_blank class="card-link">Visit link</a>
      </div>
    </div>
    </div>

    <div class="col-sm">
    <div class="card cmp-services">
      <img class="card-img-top" src="/images/nissei-product1.jpg" alt="Card image cap">
      <div class="card-body cmp-services">
        <h5 class="card-title cmp-services"><img src="/images/nissei.png" alt=""></h5>
        <p class="card-text cmp-services">Plastic Injection Molding Machines</p>
      </div>
      <div class="card-body cmp-services">
        <a href="http://www.nisseijushi.co.jp/products/index.php" target=”_blank class="card-link">Visit link</a>
      </div>
    </div>
    </div>

    <div class="col-sm">
    <div class="card cmp-services">
      <img class="card-img-top" src="/images/harmo-product1.jpg" alt="Card image cap">
      <div class="card-body cmp-services">
        <h5 class="card-title cmp-services"><img src="/images/harmo.png" alt=""></h5>
        <p class="card-text cmp-services">Harmo Peripheral Equipment</p>
      </div>
      <div class="card-body cmp-services">
        <a href="https://harmo-net.co.jp/en/products/" target=”_blank class="card-link">Visit link</a>
      </div>
    </div>
    </div>

</div>
</div>
</div>
<!-- ! -->
<div class="other-services">Other Services</div>
<div class="repair-maintenance">Repair and Maintenance</div>
<div class="rm-gallery">

<div class="container">
    <div class="whatsnew-desc"></div>
    <div class="row">
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="/images/rm1.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="/images/rm1.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="/images/rm2.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="/images/rm2.jpg"
                         alt="Another alt text">
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="/images/rm3.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="/images/rm3.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="/images/rm4.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="/images/rm4.jpg"
                         alt="Another alt text">
                </a>
            </div>
           
</div>
</div>

<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- ! -->
<div class="machine-rehabupgrad">Machine Rehabilitation and Upgrading</div>
<div class="mru-gallery">

<div class="container">
    <div class="whatsnew-desc"></div>
    <div class="row">
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="/images/mru1.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="/images/mru1.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="/images/mru2.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="/images/mru2.jpg"
                         alt="Another alt text">
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="/images/mru3.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="/images/mru3.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="/images/mru4.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="/images/mru4.jpg"
                         alt="Another alt text">
                </a>
            </div>

           
</div>
</div>

<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- ! -->

<div class="hauling-rigging">Hauling and Rigging</div>
<div class="hr-gallery">

<div class="container">
    <div class="whatsnew-desc"></div>
    <div class="row">
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="/images/hr1.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="/images/hr1.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="/images/hr2.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="/images/hr2.jpg"
                         alt="Another alt text">
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="/images/hr3.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="/images/hr3.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="/images/hr4.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="/images/hr4.jpg"
                         alt="Another alt text">
                </a>
            </div>

              <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="/images/hr5.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="/images/hr5.jpg"
                         alt="Another alt text">
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="/images/hr6.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="/images/hr6.jpg"
                         alt="Another alt text">
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="/images/hr77.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="/images/hr7.jpg"
                         alt="Another alt text">
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="/images/hr8.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="/images/hr8.jpg"
                         alt="Another alt text">
                </a>
            </div>
           
           
</div>
</div>

<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- ! -->



<script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
<script>
  $().ready(function(){
  $(".nav-link.services").addClass("active");
    });
</script>
@endsection