@extends('admin.layout.app')

@section('content')
<div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row mt-4">
          <div class="col-9 offset-2 mt-2">
            <div class="col-md-11">
                <a href="{{ route('admin#index') }}" class="text-dark text-decoration-none"><div class="mb-3 "><i class="fas fa-arrow-left"></i>back</div></a>
              <div class="card">
                <div class="card-header p-2">
                  <legend class="text-center">Student Information</legend>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                        <div class="active tab-pane d-flex justify-content-center" id="activity">
                            <div class="">
                                <div class="mt-3">
                                    <b>Name</b>: <span>{{ $info->name }}</span>
                                </div>
                                <div class="mt-3">
                                    <b>Father Name</b>: <span>{{ $info->father_name }}</span>
                                </div>
                                <div class="mt-3">
                                    <b>Grade</b>: <span>{{ $info->grade }}</span>
                                </div>
                                <div class="mt-3">
                                    <b>Phone</b>: <span>{{ $info->phone }}</span>
                                </div>
                                <div class="mt-3">
                                    <b>Address</b>: <span>{{ $info->address }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
