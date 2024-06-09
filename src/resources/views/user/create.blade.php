@extends('layouts.main')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Create user</h1>
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
            <form action="{{ route('user.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <input value="{{ old('email') }}" type="text" name="email" class="form-control" placeholder="email">
                </div>
                <div class="form-group">
                    <input value="{{ old('name') }}" type="text" name="name" class="form-control" placeholder="name">
                </div>
                <div class="form-group">
                    <input value="{{ old('middle_name') }}" type="text" name="middle_name" class="form-control" placeholder="middle_name">
                </div>
                <div class="form-group">
                    <input value="{{ old('last_name') }}" type="text" name="last_name" class="form-control" placeholder="last_name">
                </div>
                <div class="form-group">
                    <input value="{{ old('address') }}" type="text" name="address" class="form-control" placeholder="address">
                </div>
                <div class="form-group">
                    <input value="{{ old('age') }}" type="number" name="age" class="form-control" placeholder="age">
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="1">
                        <label class="form-check-label">male</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="2">
                        <label class="form-check-label">female</label>
                    </div>
                </div>
                <div class="form-group">
                    <input value="{{ old('password') }}" type="password" name="password" class="form-control" placeholder="password">
                </div>
                <div class="form-group">
                    <input value="{{ old('password_confirmation') }}" type="password" name="password_confirmation" class="form-control" placeholder="password_confirmation">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
</section>
@endsection