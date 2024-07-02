@extends('mainLayout')

@section('title', 'Edit User')

@section('page-content')
<div class="container-fluid">
    <div class="row ps-1">
        <div class="col bg-black text-light fs-5 text-start">
            Edit User
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{ route('updateUser', $user->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="userName" class="form-label">User Name</label>
                    <input type="text" class="form-control" id="userName" name="name" value="{{ $user->name }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="userEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="userEmail" name="email" value="{{ $user->email }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="userRole" class="form-label">Role</label>
                    <select name="role" id="userRole" class="form-control">
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}" {{ $user->roles->contains($role->id) ? 'selected' : '' }}>{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="{{ route('manageUsers') }}" class="link-dark">Back</a>
        </div>
    </div>
</div>
@endsection