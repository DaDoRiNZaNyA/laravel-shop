@extends('layouts.main')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">user {{ $user->name }}</h1>
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
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary m-2">Edit</a>
                        </div>
                        <form action="{{ route('user.delete', $user->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger m-2">Delete</button>
                        </form>
                    </div>

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>name</th>
                                    <th>middle name</th>
                                    <th>last name</th>
                                    <th>age</th>
                                    <th>gender</th>
                                    <th>email</th>
                                    <th>address</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</a></td>
                                    <td>{{ $user->middle_name }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->age }}</td>
                                    <td>{{ $user->gender }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->address }}</td>
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