@extends('mainLayout')

@section('page-title', 'Account Registration')

@section('auth-content')

<div class="d-flex justify-content-center align-items-center">
    <div class="d-flex justify-content-between mb-5">
        <a href="{{ route('login') }}" class="nav-item  flex-fill me-1 text-center">Log in</a>
        <a href="{{ route('register') }}" class="nav-item active flex-fill ms-1 text-center">Register</a>
    </div>
</div>
<div class="section section-signup">
    <div class="container_cust">
        <div class="row">
            <div class="card card-signup">
                @if (session('success'))
                <script>
                    alert("{{ session('success') }}");
                </script>
                @endif
                <form method="POST" action="{{ route('register') }}">

                    @csrf
                    <div class="card-header text-center" style="background-color:transparent;">
                        <h4 class="card-title title-up">Register new user</h4>
                    </div>

                    <!-- First Name input -->
                    <div data-mdb-input-init class="form-outline mb-4">

                        <input type="text" placeholder="First Name" name="firstname" value="{{ old('firstname') }}" required class="auth-textbox form-control-cust">
                        @error('firstname')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>


                    <!-- Last Name input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" placeholder="Last Name" name="lastname" value="{{ old('lastname') }}" required class="auth-textbox form-control-cust">
                        @error('lastname')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>


                    <!-- Username input -->
                    <div data-mdb-input-init class="form-outline mb-4">

                        <input type="text" placeholder="Username" name="name" value="{{ old('name') }}" required class="auth-textbox form-control-cust">
                        @error('name')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">

                        <input type="email" placeholder="Email Address" name="email" class="auth-textbox form-control-cust">
                        <input type="checkbox" placeholder="Generate Email" name="generate_email" id="generate_email" class="form-check-input">
                        <label for="generate_email" class="form-check-label" style="font-size:1rem; font-weight:400; color: #2c2c2c;">Generate Email Address</label>

                        @error('email')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">

                        <input type="password" placeholder="Password" name="password" required class="auth-textbox  form-control-cust">
                        @error('password')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>  

                    <!-- Repeat Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" placeholder="Confirm Password" name="password_confirmation" required class="auth-textbox  form-control-cust">
                    </div>
                    <!-- Submit button -->
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-3">Sign
                        Up</button>
                    <button type="reset" class="btn btn-md btn-danger btn-block mb-3">Clear</button>
                </form>

            </div>
        </div>
    </div>

</div>
</div>
</div>
@endsection