@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Brand</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <a href="{{ route('brand.edit', $brand->id) }}">Edit Brand</a>

            <div class="col-sm-6">
                <form action="{{ route('brand.delete', $brand->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete Brand" class="btn btn-danger">
                </form>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Category list</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">

                                </div>
                            </div>
                        </div>


                        <div class="card-body table-responsive p-0">
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

                                    <tr>
                                        <td>{{ $brand->id }}</td>
                                        <td>{{ $brand->title }}</td>
                                        <td>11-7-2014</td>
                                        <td>1</td>
                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
