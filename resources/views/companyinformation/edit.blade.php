@extends('admin.master.template')

@section('headerButton')
          <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Company Information</a>
                    </li>
            </ul>
@endsection

@section('content')
<div class="main-panel">
@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

 @if(count($errors) > 0 )
    <div class="alert alert-danger">
        <strong>Whoooppss !!</strong> There were some problem with your input. <br>
        <ul>
          @foreach($errors->all() as $error)
              <li> {{ $error }} </li>
          @endforeach
        </ul>
    </div>
 @endif
 {!! Form::open(['id' => 'dataForm', 'method' => 'PATCH', 'url' => '/companyinformations/' . $companyinformation->id ]) !!}
        <div class="content-wrapper">
            <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Default form</h4>
                      <p class="card-description">
                        Basic form layout
                      </p>
                      <form class="forms-sample">
                        <div class="form-group">
                          {!!Form::label('missionstatement', 'Mission Statement', array('class' => 'form-control-label'))!!}
                          {!!Form::text('missionstatement',$companyinformation->missionstatement, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                        </div>
                        <div class="form-group">
                          {!!Form::label('philosophy', 'Philosophy', array('class' => 'form-control-label'))!!}
                          {!!Form::text('philosophy',$companyinformation->philosophy, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                        </div>
                        <div class="form-group">
                          {!!Form::label('ourrole', 'Our Role', array('class' => 'form-control-label'))!!}
                          {!!Form::text('ourrole',$companyinformation->ourrole, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                        </div>
                        <div class="form-group">
                          {!!Form::label('ourvalues', 'Our Values', array('class' => 'form-control-label'))!!}
                          {!!Form::text('ourvalues',$companyinformation->ourvalues, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                        </div>
                        <div class="form-group">
                          {!!Form::label('address', 'Address', array('class' => 'form-control-label'))!!}
                          {!!Form::text('address',$companyinformation->address, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                        </div>
                        <div class="form-group">
                          {!!Form::label('contactno', 'Contact No.', array('class' => 'form-control-label'))!!}
                          {!!Form::text('contactno',$companyinformation->contactno, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                        </div>
                        <div class="form-group">
                          {!!Form::label('email', 'Email', array('class' => 'form-control-label'))!!}
                          {!!Form::text('email',$companyinformation->email, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                        </div>
                        <div class="form-group">
                          {!!Form::label('facebook', 'Facebook', array('class' => 'form-control-label'))!!}
                          {!!Form::text('facebook',$companyinformation->facebook, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                        </div>
                        <div class="form-group">
                          {!!Form::label('twitter', 'Twitter', array('class' => 'form-control-label'))!!}
                          {!!Form::text('twitter',$companyinformation->twitter, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                        </div>
                        <div class="form-group">
                          {!!Form::label('instagram', 'Instagram', array('class' => 'form-control-label'))!!}
                          {!!Form::text('instagram',$companyinformation->instagram, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                        </div>
                        {!!Form::submit('Submit', ['id' => 'addForm','class' => 'btn btn-success mr-2']) !!}
                        <button class="btn btn-light">Cancel</button>
                      </form>
                    </div>
                  </div>
                </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection