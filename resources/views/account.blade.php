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
            <form class="form" action="">
                <input class="inputs" type="text" placeholder="First Name">
                <input class="inputs" type="text" placeholder="Last Name">
                <input class="inputs" type="email" placeholder="Email">
                <h3>Account Types and ID's:</h3>
                <ul class="list">
                    <li>Confirmation: 1</li>
                    <li>Setup: 2</li>
                    <li>Activated: 3</li> 
                    <li>Deactivated: 4</li>
                </ul>
                <input class="inputs" type="number" placeholder="Enter Account Type ID">
                <input class="inputs" type="checkbox"><p class="activate-text">Click to Activate!</p>
                <button class="button">Submit</button>
            </form>
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