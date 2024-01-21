@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Product</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
                <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="product-name">Product name</label>
                                <input
                                    type="text"
                                    id="product-name"
                                    name="title"
                                    class="form-control"
                                    value="{{ old('title') }}"
                                    placeholder="Product name"
                                >
                                @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="product-description">Add product description</label>
                                <textarea
                                    id="product-description"
                                    name="description"
                                    class="form-control"
                                    placeholder="Description"
                                >{{ old('description') }}</textarea>
                                @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="product-price">Product price</label>
                                <input
                                    type="text"
                                    id="product-price"
                                    name="price"
                                    class="form-control"
                                    value="{{ old('price') }}"
                                    placeholder="9.99"
                                >
                                @error('price')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="product-quantity">Product quantity</label>
                                <input
                                    type="text"
                                    id="product-quantity"
                                    name="quantity"
                                    class="form-control"
                                    value="{{ old('quantity ') }}"
                                    placeholder="100"
                                >
                                @error('quantity')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="product-category">Choose product category</label>
                                <select id="product-category" name="category_id" class="form-control">
                                    <option selected="selected" disabled>Choose product category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="product-brand">Choose product brand</label>
                                <select id="product-brand" name="brand_id" class="form-control">
                                    <option selected="selected" disabled>Choose product brand</option>
                                    @foreach( $brands as $brand )
                                        <option value="{{ $brand->id }}">{{ $brand->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="product-status">Choose product published status</label>
                                <select id="product-brand" name="is_published" class="form-control">
                                    <option selected="selected" disabled>Product status</option>
                                    <option value="0">Draft</option>
                                    <option value="1">Publish</option>
                                </select>
                            </div>
                            <input type="submit" value="Create" class="btn btn-primary">
                        </div>
                    </div>
                </form>


        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
