<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
    <a class="navbar-brand" href="#">Bihar Handball Association</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="true">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navb" class="navbar-collapse collapse hide">
      <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php"><i class="fa fa-home"></i>&nbsp;Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{asset('/management')}}">Management</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{asset('/registration')}}">Registration</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{asset('/gallery')}}">Gallery</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{asset('/videos')}}">Videos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{asset('/contactus')}}">Contact Us</a>
        </li>
      </ul>
  
      <ul class="nav navbar-nav ml-auto">
        @if (Route::has('login'))
        
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else                      
                <a class="nav-link" href="{{ route('login') }}"><span class="fas fa-sign-in-alt"></span> Login</a>        
                @if (Route::has('register'))                            
                    <a class="nav-link" href="{{ route('register') }}"><span class="fas fa-user"></span> Sign Up</a>
                @endif
            @endauth
        
    @endif  
      </ul>
    </div>
  </nav>