@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Brands</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <a href="{{ route('brand.create') }}">Add brand</a>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Brand list</h3>
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


                        <div class="card-body table-responsive p-0">
                            @if( !$brands->isEmpty() )
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Reason</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach( $brands as $brand )
                                        <tr>
                                            <td>{{ $brand->id }}</td>
                                            <td>
                                                <a href="{{ route('admin.brand.show', $brand->id) }}">
                                                    {{ $brand->title }}
                                                </a>
                                            </td>
                                            <td>11-7-2014</td>
                                            <td><a href="" class="btn btn-primary">Go to</a></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            @else
                                <p>Brands Empty</p>
                            @endif
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
