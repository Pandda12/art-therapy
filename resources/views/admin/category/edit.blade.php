@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit categories</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <form action="{{ route('category.update', $category->id) }}" method="post">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label>
                        <input type="text" name="title" class="form-control" placeholder="Category name" value="{{ $category->title }}">
                    </label>
                    <input type="submit" value="Update" class="btn btn-primary">
                </div>
            </form>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
