@extends('mainLayout')

@section('page-title','Main Landing Page')

@section('page-content')
<div class="container">
    <h1>Welcome to the Site</h1>

    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd; border-radius:20px;">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px; ">
                <li class="nav-item" style="margin:10px; ">
                    <a href="{{ route('acctg') }}" @unless(Auth::user()->hasRole('admin') || Auth::user()->hasRole('bookeeper') || Auth::user()->hasRole('auditor') || Auth::user()->hasRole('audasst'))
                        class="link-dark not-allowed" style={!! '"pointer-events: none; cursor: not-allowed; "' !!}
                        @endunless
                        >Accounting</a>
                </li>
                <li class="nav-item" style="margin:10px;">
                    <a href="{{ route('prod') }}" @unless(Auth::user()->hasRole('admin') || Auth::user()->hasRole('assembler'))
                        class="link-dark not-allowed" style={!! '"pointer-events: none; cursor: not-allowed;"' !!}
                        @endunless
                        >Production</a>
                </li>
                <li class="nav-item" style="margin:10px;">
                    @if(Auth::user()->hasRole('admin'))
                    <a href="{{ route('dash') }}">Dashboard</a>
                    @endif
                </li>
            </ul>


        </div>
        <br>


    </nav>


</div>
@endsection