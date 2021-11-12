@extends('layouts.app')

@section('content')
<body>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Admin</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                            ออกจากระบบ
    </nav>
  </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ยินดีต้อนรับสู่ร้านณัฐรัฐน์') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p><strong>Name:</strong> {{Auth::user()->username}}</p>
                    <a href="{{route('index')}}" class="btn btn-primary">product Management</a>           
                    <a href="" class="btn btn-success">Home</a>
                    <li class="nav-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
