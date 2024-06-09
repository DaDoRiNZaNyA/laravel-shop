@extends('layouts.main')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Color {{ $color->color }}</h1>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="class-header d-flex">
                        <div>
                            <a href="{{ route('color.edit', $color->id) }}" class="btn btn-primary m-2">Edit</a>
                        </div>
                        <form action="{{ route('color.delete', $color->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger m-2">Delete</button>
                        </form>
                    </div>

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>color</td>
                                </tr>
                                <tr>
                                    <td>{{ $color->id }}</td>
                                    <td>{{ $color->color }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>

        <!-- /.card-header -->

        <!-- /.card -->
</section>
@endsection