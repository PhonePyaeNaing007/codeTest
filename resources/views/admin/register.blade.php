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
                  <legend class="text-center">Register</legend>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                      <form class="form-horizontal" action="{{ route('admin#registerStudent') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="Enter Name">
                            @if ($errors->has('name'))
                                <p class="text-danger">{{ $errors->first('name') }}</p>
                            @endif
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Father Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="father_name" placeholder="Enter Father Name">
                              @if ($errors->has('father_name'))
                                  <p class="text-danger">{{ $errors->first('father_name') }}</p>
                              @endif
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Grade</label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control" name="grade" placeholder="Grade">
                              @if ($errors->has('grade'))
                                  <p class="text-danger">{{ $errors->first('grade') }}</p>
                              @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control" name="phone" placeholder="Phone">
                              @if ($errors->has('phone'))
                                  <p class="text-danger">{{ $errors->first('phone') }}</p>
                              @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                              <textarea name="address" class="form-control" rows="3"></textarea>
                              @if ($errors->has('address'))
                                  <p class="text-danger">{{ $errors->first('address') }}</p>
                              @endif
                            </div>
                          </div>

                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn bg-dark text-white">Add</button>
                          </div>
                        </div>
                      </form>
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
