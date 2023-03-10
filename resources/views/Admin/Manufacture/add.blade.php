@extends('Admin.home')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Add Brands') }}</div>




                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (session()->has('success'))
                            <strong class="text-success">{{ session()->get('success') }}</strong>
                        @endif



                        <form method="POST" action="{{ route('minsert') }}">
                            @csrf
                            <div class="card-body">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Manufacture Name</label>
                                <input type="text" class="form-control" name="manufacture_name" placeholder="Enter manufacture">
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <div class="controls">
                                    <textarea id="" class="form-control" name="manufacture_description" rows="4"></textarea>
                                </div>

                              </div>



                              <div class="form-check">
                                <input type="checkbox" name="manufacture_status" class="form-check-input" id="exampleCheck1" value="1">
                                <label class="form-check-label" for="exampleCheck1">publication status</label>
                              </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                              <button type="submit" class="btn btn-primary">Add Brand</button>
                              <button type="submit" class="btn btn-danger">Cancel</button>
                            </div>
                          </form>



                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
