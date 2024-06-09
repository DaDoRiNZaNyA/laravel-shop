@extends('layouts.main')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Category</h1>
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
            <form action="{{ route('category.update', $category->id) }}" method="post">
                @csrf
                @method('patch')
                <div class="form-group">
                    <input type="text" name="title" value="{{ $category->title }}" class="form-control" placeholder="title">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>

        <!-- /.card-header -->

        <!-- /.card -->
</section>
@endsection