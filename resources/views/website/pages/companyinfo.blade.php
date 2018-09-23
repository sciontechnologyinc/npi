@extends('website.master.template')

@section('content')

<div class="aboutus-cover">
    <div class="companylogo">
        <img src="" alt="">
    </div>
    <div class="aboutuscover-title">Our Company
    </div>
    <div class="cover-desc">MISSION STATEMENT | PHILOSOPHY | OUR ROLE | OUR VALUES</div>
    <div class="companyinfobtn">
    <button type="button" class="btn btn-info" id="readmore">READ MORE</button>
    </div>
</div>

   <div class="scrollto" id="scrollto"></div>
<div class="container" id="aboutcontainer">
    <div class="row missionstatement">
    <div class="col-sm-6 left">
    <div class="ms-title">
        Mission Statement
        </div>
                To serve as a channel in conveying technology in supplying machineries and parts from the reliable principals, and dedicate ourselves as partners in the growth of the Plastic Industry in the Philippines
        </div>
        <div class="col-sm-6 right">
            <img src="/images/missionstatement.jpg" alt="">
        </div>
    </div>

    <div class="row philosophy">
        <div class="philosophy-title">Philosophy</div>
        <div class="philosophy-list">
            <ul>
                <li>To contribute significantly to the growth and development of the Philippine Plastics & Packaging Industries, in particular, and to the Philippine Economy, in general.</li>
                <li>To market and sell productive and environment-friendly machines, moulds, auxiliary equipment, and spare parts.</li>
                <li>To provide clients with efficient and effective technical assistance & after-sales service.</li>
                <li>To develop new markets for productive & environment-friendly plastic molding technologies.</li>
                <li>To contribute considerably to the development of Philippine Society</li>
            </ul>
        </div>
    </div>

    <div class="row ourrole">
    <div class="col-sm-6 left">
            <img src="/images/ourrole.jpg" alt="">
    </div>
    <div class="col-sm-6 right">
    <div class="ourrole-title">
        Our Role
        </div>
        Learn distinctive features of customer business, analyze, offer, and create solutions that will be useful to you. 
        To provide support and update our customers with the rapid growing technologies in the plastic industry. 
        Accurate methodology, powerful technological infrastructure, quality control, effective communication with customer - all that allow us to offer the most advanced technological solution
        </div>
       
    </div>

    <div class="ourvalues">
    <div class="ourvalues-title">Our Values</div>
        <div class="row">
            <div class="col-sm values">
            Self-perfection by learning and using all new and proven techniques in our field
            </div>
            <div class="col-sm values">
            Honesty with customers
            </div>
            <div class="col-sm values">
            Confidentiality, Fidelity, Integrity and Commitment with our customers
            </div>
        </div>
  </div>

    </div>


<script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
<script>
  $().ready(function(){
  $(".nav-link.cinfo").addClass("active");
    });
</script>

@endsection('')