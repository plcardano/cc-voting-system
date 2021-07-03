<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">KBCF Voting System</span>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav ml-auto">
          <!-- Authentication Links -->
             @auth
            <li class="nav-item">
              <form action="{{ route('logout') }}" method="POST">
              @csrf
                <button type="submit" class="btn btn-outline-light">Logout</button>
            
              </form>
            
            </li>
             @endauth                             
              
        </ul>  
        
      </div>
  </div>
</nav>