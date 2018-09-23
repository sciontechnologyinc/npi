@extends('website.master.template')

@section('content')

<div class="contactus-cover">
    <div class="companylogo">
        <img src="" alt="">
    </div>
    <div class="contactuscover-title">Contact Us
    </div>
    <div class="companyinfobtn">
    </div>
</div>

<div class="contactus-form">
{!! Form::open(['id' => 'dataForm', 'url' => '/contactus']) !!}
    <div class="content-wrapper">
		<div class="row contactus">
		<div class="col-sm contactusinfo">
			<div class="mask black">

			<div class="contactus-style address">
				<span class="cu address">
				Address
				</span>
				<div class="cu address">5th Floor Orcel II Bldg., 1611 Quezon Avenue, West Triangle, Quezon City, 1100 Philippines.</div>
			</div>

			<div class="contactus-style letstalk">
				<span class="cu letstalk"> 
				Lets Talk
				</span>
				<div class="cu letstalk">(632)-926-7479/4683 ;
						920-7724 ; 925-1703</div>
			</div>	
			
			<div class="contactus-style generalsupp">
				<span class="cu generalsupp"> 
				General Support
				</span>
				<div class="cu generalsupp">npimac@pldtdsl.net</div>
			</div>	

			</div>
		</div>
            <div class="col-sm">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Send us a Message</h4>
                      <form class="forms-sample">
                        <div class="form-group">
                            {!!Form::label('firstname', 'First Name', array('class' => 'form-control-label'))!!}
                            {!!Form::text('firstname',null, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('lastname', 'Last Name', array('class' => 'form-control-label'))!!}
                            {!!Form::text('lastname',null, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                        </div>
						<div class="form-group">
                            {!!Form::label('email', 'Email Address', array('class' => 'form-control-label'))!!}
                            {!!Form::text('email',null, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                        </div>
						<div class="form-group">
                            {!!Form::label('phoneno', 'Phone No.', array('class' => 'form-control-label'))!!}
                            {!!Form::text('phoneno',null, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                        </div>
						<div class="form-group">
                            {!!Form::label('message', 'Message', array('class' => 'form-control-label'))!!}
                            {!!Form::text('message',null, ['placeholder' => '', 'class' => 'form-control col-lg-12 lgtxtbx', 'required' => '' ])!!}
                        </div>
                        {!!Form::submit('Submit', ['id' => 'addForm','class' => 'btn btn-success mr-2 contactus']) !!}
                      </form>
                    </div>
                  </div>
			</div>
			
			</div>
    </div>
	
	{!! Form::close() !!}
	</div>


<script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
<script>
  $().ready(function(){
  $(".nav-link.contact").addClass("active");
    });
</script>
	
@endsection