@extends ('layout')

@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Account Manager
            </div>
            <hr>
            <a href="/create">Create a new account!</a>    
            <hr>
            <div class="accounts">
                <h3>Active Accounts:</h3>
                <ul class="list">
                    @foreach ($accounts as $account)
                        <li>{{ $account->first_name }} {{ $account->last_name }}: {{ $account->email }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection