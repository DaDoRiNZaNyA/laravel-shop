@extends('layouts.main')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Colors</h1>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('color.create')}}" class="btn btn-primary">Create</a>
                    </div>

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>color</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($colors as $color)

                                <tr>
                                    <td>{{ $color->id }}</td>
                                    <td><a href="{{ route('color.show', $color->id) }}">{{ $color->color }}</a></td>
                                </tr>

                                @endforeach
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