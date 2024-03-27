@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    {{-- <div class="card-body">
        <form>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Level id</label>
                        <input type="text" class="form-control" placeholder="id">
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>
            </div>
        </form>
    </div> --}}

    {{-- <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">m_user</h3>
        </div>
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-sm-6">
                        
                        <!-- text input -->
                        <div class="form-group">
                            <label>level_id</label>
                            <input type="text" class="form-control" placeholder="level_id">
                        </div>
                        <div class="form-group">
                            <label>username</label>
                            <input type="text" class="form-control" placeholder="username">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div> --}}

    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">m_level</h3>
        </div>
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-sm-6">
                        
                        <!-- text input -->
                        <div class="form-group">
                            <label>level_id</label>
                            <input type="text" class="form-control" placeholder="level_id">
                        </div>
                        <div class="form-group">
                            <label>username</label>
                            <input type="text" class="form-control" placeholder="username">
                        </div>
                        <div class="form-group">
                            <label>nama</label>
                            <input type="text" class="form-control" placeholder="nama">
                        </div>
                        <div class="form-group">
                            <label>password</label>
                            <input type="text" class="form-control" placeholder="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    
@stop

@section('css')
    {{-- Add extra stylesheets here --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
@stop