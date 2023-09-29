@section("navigation")
    @include('layouts.loginnav')
@show

@include('partials.error')

@if(session('forminput'))
    <div class="alert alert-success" role="alert">
        Zoekertje aangemaakt met titel : {{ session('forminput') }}
    </div>
@endif

<div class="container-md mt-4">
    <form  method="post" action="{{route('login-request')}}">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        @csrf
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="{{ route('register') }}"><button class="btn btn-link">Register</button></a>
</div>
