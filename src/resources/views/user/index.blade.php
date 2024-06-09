@extends('layouts.main')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Users</h1>
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
                        <a href="{{route('user.create')}}" class="btn btn-primary">Create</a>
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
                                @foreach($users as $user)

                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td><a href="{{ route('user.show', $user->id) }}">{{ $user->name }}</a></td>
                                    <td>{{ $user->middle_name }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->age }}</td>
                                    <td>{{ $user->genderTitle }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->address }}</td>
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