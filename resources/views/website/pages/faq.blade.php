@extends('website.master.template')


@section('content')

<div class="faq-cover">
    <div class="companylogo">
        <img src="" alt="">
    </div>
    <div class="faqcover-title">Frequently Asked Questions
    </div>
    <div class="companyinfobtn">
    </div>
</div>
<!--Accordion wrapper-->
<div class="accordion md-accordion accordion-1" id="accordionEx23" role="tablist">
    <div class="card">
        <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading96">
            <h5 class="text-uppercase mb-0 py-1">
                <a class="white-text font-weight-bold" data-toggle="collapse" href="#collapse96" aria-expanded="true" aria-controls="collapse96">
                    Frequently Asked Question #1
                </a>
            </h5>
        </div>
        <div id="collapse96" class="collapse show" role="tabpanel" aria-labelledby="heading96" data-parent="#accordionEx23">
            <div class="card-body">
                <div class="row my-4">
                    <div class="col-md-8">
                        <h2 class="font-weight-bold mb-3 black-text question">Is it possible to produce plastic containers cheaply?</h2>
                        <p class="mb-0 answer"> Plastic containers appearing everywhere in our everyday lives are providing us with numerous benefits. Apart from being light, easy to carry, easy to use and being resealable, plastic containers do not break when dropped, are easy to recycle, and enable economical use of materials and energy resources in either small-lot production or mass production environments.
                                                However plastic containers are currently being produced in huge volumes, so it is the responsibility of related industries to prepare a response to a whole range of future environments and businesses by reducing production costs even further right now.
                                                These production costs include power consumption, production equipment, factory floor space, transportation, equipment durability and reject product rates. Aoki began working on the technologies to improve all these factors more than ten years ago, and now finally the time has come to incorporate these technologies to reduce the costs of production.</p>
                    </div>
                    <div class="col-md-4 mt-3 pt-2">
                        <div class="view z-depth-1">
                            <img src="/images/faq.gif" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Accordion wrapper-->

<script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
<script>
  $().ready(function(){
  $(".nav-link.faq").addClass("active");
    });
</script>
@endsection