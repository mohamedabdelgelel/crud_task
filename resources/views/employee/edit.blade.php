@extends('layout.main')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Employee</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Employee</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-12">
                        <!-- general form elements disabled -->
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">Edit Employee</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form role="form" method="post" action="{{route('employee.update',$employee->id)}}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    {!! method_field('PUT') !!}

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text"  name="first_name" value="{{$employee->first_name}}" class="form-control" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text"  name="last_name" value="{{$employee->last_name}}" class="form-control" placeholder="Last Name">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email"  name="email" value="{{$employee->email}}" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="number"  name="phone" value="{{$employee->phone}}" class="form-control" placeholder="Phone">
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Company</label>
                                                <select name="company_id" class="form-control" >
                                                    <option value="">select Company</option>

                                                    @foreach($companies as $company)
                                                        <option value="{{$company->id}}" @if($company->id==$employee->company_id)selected @endif  >   {{$company->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                     
                                    </div>
                                    <div class="row">
                                        <button type="submit" class="btn btn-block btn-primary btn-lg">Save</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <!-- general form elements disabled -->
                        <!-- /.card -->
                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <script src="jquery-3.5.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  
@endsection
