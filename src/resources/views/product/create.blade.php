@extends('layouts.main')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Create product</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input value="{{ old('title') }}" type="text" name="title" class="form-control" placeholder="title">
                </div>
                <div class="form-group">
                    <input value="{{ old('description') }}" type="text" name="description" class="form-control" placeholder="description">
                </div>
                <div class="form-group">
                    <input value="{{ old('price') }}" type="number" name="price" class="form-control" placeholder="price">
                </div>
                <div class="form-group">
                    <input value="{{ old('count') }}" type="number" name="count" class="form-control" placeholder="count">
                </div>
                <div class="form-group">
                    <select name="tags[]" class="tags" multiple="" data-placeholder="Select a tag" style="width: 100%;" tabindex="-1" aria-hidden="true">
                        @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <select name="colors[]" class="colors" multiple="" data-placeholder="Select a colors" style="width: 100%;" tabindex="-1" aria-hidden="true">
                        @foreach($colors as $color)
                        <option value="{{ $color->id }}">{{ $color->color }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <select name="category_id" class="form-control select2" style="width: 100%;" tabindex="-1" aria-hidden="true" data-placeholder="select a category">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="custom-file">
                            <input name="img" type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
</section>
@endsection