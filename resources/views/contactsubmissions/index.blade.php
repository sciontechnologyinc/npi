@extends('admin.master.template')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Contact Form Submissions</h4>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Full Name
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Phone No.
                          </th>
                          <th>
                            Message
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Herman Beck
                          </td>
                          <td>
                            herman.beck@gmail.com
                          </td>
                          <td>
                            09123455678
                          </td>
                          <td>
                            Lorem ipsum
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
    </div>
</div>
@endsection