@extends('layout.main')
@section('content')
    <style>
        .w-5
        {
            width: 19px;
        }
    </style>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Companies</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Companies</li>
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
                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Companies</h3>
                            </div>
                            @if(Session::has('success'))
                                <p class="alert alert-success">{{ Session::get('success') }}</p>

                        @endif
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Image</th>

                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($companies as $company)
                                        <tr>
                                            <td>{{$company->id}}</td>
                                            <td>{{$company->name}}</td>
                                            <td>{{$company->email}}</td>
                                            <td>
                                        
                                                <form class="myform"  id="{{$company->id}}"  method="post"  action="{{(route('company.destroy',$company->id))}}">
                                                    @csrf

                                                    {!! method_field('Delete') !!} <button class="btn btn-icon btn-sm btn-danger" style="float: none;">
                                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                        <span><strong>Delete</strong></span>
                                                    </button></form>
                                            </td>
                                        </tr>

                                    @endforeach

                                    </tbody>

                                </table>
                                {{$companies->links()}}
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <!-- ////////////////////////////////////////////////////////////////////////////-->

@endsection
