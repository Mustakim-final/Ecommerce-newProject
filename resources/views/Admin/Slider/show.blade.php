@extends('Admin.home')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">DataTable with minimal features & hover style</h3>
                </div>

                <!-- /.card-header -->
              <div class="card-body">

                @if (session()->has('success'))
                    <strong class="text-success">{{ session()->get('success') }}</strong>
                @endif

                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Title</th>
                    <th>Discount</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>

                  <tbody>
                    @foreach ($data as $key=>$row)
                    <tr>
                        <td>{{ ++$key}}</td>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->discount }}</td>
                        <td><img src="{{ URL::to($row->slider_image)  }}" alt="" height="150px" width="200px"></td>
                        <td>
                            @if ($row->status==1)
                            <span class="badge badge-success">Active</span>
                            @else
                            <span class="badge badge-danger">unactive</span>
                            @endif
                        </td>

                        <td style="width: 70%">

                            @if ($row->status==1)
                            <a href="{{ route('slider.unactive',$row->id) }}">
                                <i class="fa fa-thumbs-up" style="font-size:30px;color:rgb(161, 215, 33)"></i>
                            </a>
                            @else
                            <a href="{{ route('slider.active',$row->id) }}">
                            <i class="fa fa-thumbs-down" style="font-size:30px;color:red"></i>
                            </a>
                            @endif


                            <a href="{{ route('slider.delete',$row->id) }}" class="btn btn-danger"><i class='far fa-trash-alt'></i></a>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->

              </div>
            </div>
          </div>
        </div>
    </section>

@endsection
