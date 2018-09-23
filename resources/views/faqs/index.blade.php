@extends('admin.master.template')

@section('headerButton')
          <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item active">
                        <a href="#" class="nav-link">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a href="addfaq" class="nav-link">Add FAQ</a>
                    </li>
            </ul>
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Frequently Asked Questions</h4>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr class="faq-tr">
                          <th class="faq-th">
                            #
                          </th>
                          <th class="faq-th">
                            Question
                          </th>
                          <th class="faq-th">
                            Answer
                          </th>
                          <th class="faq-th">
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($faqs as $faq)
                        <tr class="faq-tr">
                          <td class="faq-td">
                          {{ $faq->id }}
                          </td>
                          <td class="faq-td">
                          {{ $faq->question }}
                          </td>
                          <td class="faq-td">
                          {{ $faq->answer }}
                          </td>
                          <td class="faq-td">
                          <center>
                          <div class="form-group" style="display:inline-flex">
                          <a rel="tooltip" title="Edit" class="btn btn-success btn-sm mr-1" href="faqs/{!! $faq->id !!}/edit"><i class="fa fa-edit"></i></a>
                          {!! Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'url' => '/faqs/' . $faq->id]) !!}
                          {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'rel' => 'tooltip', 'title' => 'Delete'] )  }}
                          {!! Form::close() !!}
                          </div>
                          </center>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
    </div>
</div>
@endsection