@extends ('layout')

@section('content')
  <div class="content">
  <a href="/">Home</a>
    <h2>Add a new Account:</h2>
      <form method="POST" action="/addAccount">
        {{ csrf_field() }}
        <input class="inputs" type="text" name="fname" placeholder="First Name">
        <input class="inputs" type="text" name="lname" placeholder="Last Name">
        <input class="inputs" type="email" name="email" placeholder="Email">
        <h3>Account Types and ID's:</h3>
        <ul class="list">
            <li>Confirmation: 1</li>
            <li>Setup: 2</li>
            <li>Activated: 3</li> 
            <li>Deactivated: 4</li>
        </ul>
        <input class="inputs" type="number" name="ati" placeholder="Enter Account Type ID">
        <input class="inputs" type="number" name="active" placeholder="0 for inactive/1 for active"><p>Click to Activate!</p>
        <button class="button">Submit</button>
      </form>
  </div>
@endsection