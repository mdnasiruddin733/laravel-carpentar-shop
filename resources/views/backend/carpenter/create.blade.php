@extends('layouts.backend_layout')
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Product Create
                    <div class="btn-actions-pane-right">
                        <a href="{{ route('product.index') }}" class="mb-2 mr-2 btn btn-primary">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('product.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" name="image" class="form-control-file">
                                    <span>@error('image') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Select Category</label>
                                    <select name="category_id" class="form-control">
                                        <option selected value="">Select one</option>
                                        <option value="best_sale">Best Sale</option>
                                    </select>
                                    <span>@error('category') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Product name">
                                    <span>@error('name') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Price</label>
                                    <input type="number" name="price" class="form-control" placeholder="Product price">
                                    <span>@error('price') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Select Type</label>
                                    <select name="type" class="form-control">
                                        <option selected value="">Select one</option>
                                        <option value="sale">Sale</option>
                                        <option value="pre-order">Pre-order</option>
                                    </select>
                                    <span>@error('type') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Height</label>
                                    <input type="text" name="height" class="form-control" placeholder="Height">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Width</label>
                                    <input type="text" name="width" class="form-control" placeholder="Width">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Color</label>
                                    <input type="text" name="color" class="form-control" placeholder="Color">
                                </div>
                            </div>
                            <div class="col-lg-12 my-4">
                                <button class="btn btn-success px-5 py-2" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

