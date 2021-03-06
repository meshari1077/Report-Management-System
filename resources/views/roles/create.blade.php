@extends('layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Create Role</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="offset-2 col-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Create Role</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{url('storeRole')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Name</label>
                                    <input type="text" class="form-control" name="name" id="exampleFormControlInput1"
                                           placeholder="Name of role">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">description</label>
                                    <input type="text" class="form-control" name="description"
                                           id="exampleFormControlInput1" placeholder="Name of role">
                                    @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                @foreach($permissions as $permission)
                                    <div class="form-group form-check-inline">
                                        <input type="checkbox" class="form-check-input" name="permissions[]"
                                               value="{{$permission->id}}" id="exampleCheck1">
                                        <label class="form-check-label"
                                               for="exampleCheck1">{{$permission->name}}</label>
                                    </div>
                                @endforeach
                                <br>
                                <button class="btn btn-success" type="submit"><i class="nav-icon fa fa-plus"></i> Add</button>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
