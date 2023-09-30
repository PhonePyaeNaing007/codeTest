@extends('admin.layout.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        @if (Session::has('registerSuccess'))
        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
            {{ Session::get('registerSuccess') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        @if (Session::has('deleteSuccess'))
        <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
            {{ Session::get('deleteSuccess') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        @if (Session::has('updateSuccess'))
        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
            {{ Session::get('updateSuccess') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

      <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <div class="card-header">

              <a href="{{ route('admin#register') }}">
                <button class="btn btn-sm bg-dark text-white mt-1"><i class="fas fa-plus"></i></button>
            </a>
              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap text-center">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Father Name</th>
                    <th>Grade</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($register as $item)
                  <tr>
                    <td>{{ $item->student_id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->father_name }}</td>
                    <td>{{ $item->grade }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->address }}</td>
                    <td>
                      <a href="{{ route('admin#studentInfo',$item->student_id) }}"><button class="btn btn-sm bg-primary text-white"><i class="fas fa-eye"></i></button></a>
                      <a href="{{ route('admin#editStudent',$item->student_id) }}"><button class="btn btn-sm bg-dark text-white"><i class="fas fa-edit"></i></button></a>
                      <a href="{{ route('admin#delete',$item->student_id) }}"><button class="btn btn-sm bg-danger text-white"><i class="fas fa-trash-alt"></i></button></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div>
                {{ $register->links() }}
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </section>
@endsection
