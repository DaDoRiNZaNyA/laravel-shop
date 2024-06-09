@extends('layouts.main')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Color</h1>
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
            <form action="{{ route('user.update', $user->id) }}" method="post">
                @csrf
                @method('patch')
                <div class="form-group">
                    <input value="{{ $user->name }}" type="text" name="name" class="form-control" placeholder="name">
                </div>
                <div class="form-group">
                    <input value="{{ $user->middle_name }}" type="text" name="middle_name" class="form-control" placeholder="middle_name">
                </div>
                <div class="form-group">
                    <input value="{{ $user->last_name }}" type="text" name="last_name" class="form-control" placeholder="last_name">
                </div>
                <div class="form-group">
                    <input value="{{ $user->address  }}" type="text" name="address" class="form-control" placeholder="address">
                </div>
                <div class="form-group">
                    <input value="{{ $user->age }}" type="number" name="age" class="form-control" placeholder="age">
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="1" checked="{{ $user->gender == 1 ? 'checked' : ''}}">
                        <label class="form-check-label">male</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="2" checked="{{ $user->gender == 2 ? 'checked' : ''}}">
                        <label class="form-check-label">female</label>
                    </div>
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