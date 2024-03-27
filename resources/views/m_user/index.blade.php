@extends('m_user/template') 
@section('content')
<div class="row mt-5 mb-5">
<div class="col-lg-12 margin-tb">
<div class="float-left">
<h2>CRUD user</h2>
</div>
<div class="float-right">
<a class="btn btn-success" href="{{ route('m_user.create') }}"> Input User</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div> @endif
<table class="table table-bordered">
    <thead>
        <tr>
            <th width="20px" class="text-center">User id</th>
            <th width="150px" class="text-center">Level id</th>
            <th width="200px"class="text-center">username</th>
            <th width="200px"class="text-center">nama</th>
            <th width="150px"class="text-center">password</th>
            <th width="150px"class="text-center">action</th>
            </tr>
            
    </thead>
    <tbody>
        @foreach ($useri as $m_user)
        <tr>
            <td>{{ $m_user->user_id }}</td>
            <td>{{ $m_user->level_id }}</td>
            <td>{{ $m_user->username }}</td>
            <td>{{ $m_user->nama }}</td>
            <td>{{ substr($m_user->password, 0, 10) }}</td>
            <td class="text-center">
                <div class="row">
                    <form action="{{ route('m_user.destroy',$m_user->user_id) }}" method="POST">
                        <a class="btn btn-info btn-sm mx-1" href="{{ route('m_user.show',$m_user->user_id) }}">Show</a>
                        <a class="btn btn-primary btn-sm mx-1" href="{{ route('m_user.edit',$m_user->user_id) }}">Edit</a> @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm mx-1" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table> @endsection
