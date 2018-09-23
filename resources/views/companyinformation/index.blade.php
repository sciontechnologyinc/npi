@extends('admin.master.template')

@section('headerButton')
          <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Company Information</a>
                    </li>
            </ul>
@endsection

@section('content')
<div class="main-panel">
        <div class="content-wrapper">
            <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                    @foreach($companyinformations as $companyinformation)
                      <h4 class="card-title">Company Information</h4>
                      <form class="forms-sample">
                        <div class="form-group">
                          <label class="companyinfolabel" for="missionstatement">Mission Statement</label>
                          <label for="missionstatement">{{ $companyinformation->missionstatement }}</label>
                        </div>
                        <div class="form-group">
                          <label class="companyinfolabel" for="philosophy">Philosophy</label>
                          <label for="philosophy">{{ $companyinformation->philosophy }}</label>
                        </div>
                        <div class="form-group">
                          <label class="companyinfolabel" for="ourrole">Our Role</label>
                          <label for="ourrole">{{ $companyinformation->ourrole }}</label>
                        </div>
                        <div class="form-group">
                          <label class="companyinfolabel" for="ourvalues">Our Values</label>
                          <label for="ourvalues">{{ $companyinformation->ourvalues }}</label>
                        </div>
                        
                    <h4 class="card-title"> Contact Details</h4>
                    
                      <div class="form-group">
                        <label class="companyinfolabel" for="address">Address</label><br>
                        <label for="address">{{ $companyinformation->address }}</label>
                      </div>
                      <div class="form-group">
                        <label class="companyinfolabel" for="contactno">Contact No.</label><br>
                        <label for="contactno">{{ $companyinformation->contactno }}</label>
                      </div>
                      <div class="form-group">
                        <label class="companyinfolabel" for="email">Email</label><br>
                        <label for="email">{{ $companyinformation->email }}</label>
                      </div>
                    
                      <h4 class="card-title"> Social Media Links</h4>
                    
                      <div class="form-group">
                        <label class="companyinfolabel" for="facebook">Facebook</label><br>
                        <label for="facebook">{{ $companyinformation->facebook }}</label>
                      </div>
                      <div class="form-group">
                        <label class="companyinfolabel" for="twitter">Twitter</label><br>
                        <label for="twitter">{{ $companyinformation->twitter }}</label>
                      </div>
                      <div class="form-group">
                        <label class="companyinfolabel" for="instagram">Instagram</label><br>
                        <label for="twitter">{{ $companyinformation->twitter }}</label>
                      </div>
                      <a  class="btn btn-success mr-2" href="companyinformations/{!! $companyinformation->id !!}/edit" role="button">Edit</a>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                    @endforeach
                    </div>
                  </div>
                </div>
    </div>
</div>
@endsection