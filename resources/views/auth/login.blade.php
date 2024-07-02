@extends('mainLayout')

@section('page-title','Account Login')

@section('auth-content')

<div class="d-flex justify-content-center align-items-center">
    <div class="d-flex justify-content-between mb-5">
        <a href="{{ route('login') }}" class="nav-item active flex-fill me-1 text-center">Log in</a>
        <a href="{{ route('register') }}" class="nav-item flex-fill ms-1 text-center">Register</a>
    </div>
</div>

<div class="section section-signup">
    <div class="container_cust">
        <div class="row">
            <div class="card card-signup">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="card-header text-center" style="background-color:transparent;">
                        <h4 class="card-title title-up">Log in user</h4>
                    </div>


                    <!-- Email input -->

                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" placeholder="Username" name="name" value="{{ old('name') }}" required class="auth-textbox form-control-cust" />
                        @error('name')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" placeholder="Password" name="password" required class="auth-textbox form-control-cust">
                        @error('password')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Submit button -->
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>
                    <button type="reset" class="btn btn-md btn-danger btn-block mb-4">Clear</button>

                </form>
            </div>
        </div>
        <!-- Pills content -->
        </form>
    </div>
</div>
</div>
@endsection