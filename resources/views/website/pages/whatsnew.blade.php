@extends('website.master.template')

@section('content')

<div class="whatsnew-cover">
    <div class="companylogo">
        <img src="" alt="">
    </div>
    <div class="whatsnew-title">What's New
    </div>
    <div class="companyinfobtn">
</div>
</div>

<div class="news-container">
  <div class="nc-img">
<img src="/images/PPP.png" alt="">
</div>

<div class="news-desc">Pack Print Plas Philippines is the only trade event series in the country which features the interrelated industries of packaging, plastics, printing and office supplies in one venue; thus providing a wider source of network to its exhibitors and a comprehensive industry showcase to its visitors.</div>
<div class="news-desc">Happening in three major business districts including Cebu, Davao and Manila since 1996, Pack Print Plas Philippines continues to be the trusted venue of leading brands in showcasing their latest technologies, products and services to potential buyers and business partners across the country.</div>
<div class="news-desc-sub">
  <div class="nds-title">Why you should be part of PackPrintPlas Series 2018:</div>
  <ul class="nds-list">
    <li>The expo is a one-stop source for all your packaging, printing and plastics need!</li>
    <li>As the leading expo for packaging, printing and plastics, GLMP helps in pairing brand manufacturers and suppliers with local enterprises, creating a unique business matching opportunity for its exhibitors and visitors alike.</li>
    <li>A multitude of informational talks, seminars, product demos and other special activities is the perfect way for you to know trends in the packaging, printing and plastics industry for the business year ahead.</li>
  </ul>
</div>

</div>

<div class="parallax">
<div class="exhibitions">
      Exhibitions
    </div>
  <div class="exhibitions-container">  
    <!-- ! Start Gallery  -->
    <div id="carousel3d">
  <carousel-3d :perspective="0" :space="200" :display="5" :controls-visible="true" :controls-prev-html="'❬'" :controls-next-html="'❭'" :controls-width="30" :controls-height="60" :clickable="true" :autoplay="true" :autoplay-timeout="5000">
    <slide :index="0">
      <img src="/images/exhibition1.jpg" alt="">
    </slide>
		<slide :index="1">
      <img src="/images/exhibition2.jpg" alt="">
    </slide>
		<slide :index="2">
    <img src="/images/exhibition3.jpg" alt="">
    </slide>
    <slide :index="3">
    <img src="/images/exhibition4.jpg" alt="">
    </slide>
    <slide :index="4">
    <img src="/images/exhibition5.jpg" alt="">
    </slide>
    <slide :index="5">
    <img src="/images/exhibition6.jpg" alt="">
    </slide>
    <slide :index="6">
    <img src="/images/exhibition7.jpg" alt="">
    </slide>


		
  </carousel-3d>
</div>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.7/vue.js'></script><script src='https://rawgit.com/Wlada/vue-carousel-3d/master/dist/vue-carousel-3d.min.js'></script>
<script >new Vue({
  el: '#carousel3d',
  data: {
    slides: 7
  },
  components: {
    'carousel-3d': Carousel3d.Carousel3d,
    'slide': Carousel3d.Slide
  }
})
//# sourceURL=pen.js
</script>
    <!-- ! End Gallery -->
    </div>



    <div class="trainings">
      Trainings and Seminars
    </div>
  <div class="trainings-container">
    <!-- start gallery -->
    <div id="carousel3d1">
  <carousel-3d :perspective="0" :space="200" :display="5" :controls-visible="true" :controls-prev-html="'❬'" :controls-next-html="'❭'" :controls-width="30" :controls-height="60" :clickable="true" :autoplay="true" :autoplay-timeout="5000">
  <slide :index="0">
      <img src="/images/tr1.jpg" alt="">
    </slide>
		<slide :index="1">
      <img src="/images/tr2.jpg" alt="">
    </slide>
		<slide :index="2">
    <img src="/images/tr3.jpg" alt="">
    </slide>
		<slide :index="3">
    <img src="/images/tr4.jpg" alt="">
    </slide>
		<slide :index="4">
    <img src="/images/tr5.jpg" alt="">
    </slide>
		<slide :index="5">
    <img src="/images/tr6.jpg" alt="">
    </slide>
		<slide :index="6">
    <img src="/images/tr7.jpg" alt="">
    </slide>
		
  </carousel-3d>
</div>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.7/vue.js'></script><script src='https://rawgit.com/Wlada/vue-carousel-3d/master/dist/vue-carousel-3d.min.js'></script>
<script >new Vue({
  el: '#carousel3d1',
  data: {
    slides: 7
  },
  components: {
    'carousel-3d': Carousel3d.Carousel3d,
    'slide': Carousel3d.Slide
  }
})
//# sourceURL=pen.js
</script>
    <!-- end -->
  </div>

  
</div>


<script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
<script>
  $().ready(function(){
  $(".nav-link.wnew").addClass("active");
    });
</script>

@endsection