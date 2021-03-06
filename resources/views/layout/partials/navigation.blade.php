 <nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/dashboard">HPO ASSET SYSTEM</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">

      {{-- Asset Module --}}
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Asset <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/create">Create Asset</a></li>
            <li class="divider"></li>
            <li><a href="#">View All</a></li>
          </ul>
        </li>
        {{-- Deployment Module --}}
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Deployment <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Create Deployment</a></li>
            <li class="divider"></li>
            <li><a href="#">View Deployed Asset</a></li>
          </ul>
        </li>

        {{-- Audit Module --}}
        <li><a href="#">Audit</a></li>


        {{-- Account Module --}}
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/show/{{ auth()->user()->id }}">Account Settings</a></li>
            <li><a href="#">Create Account</a></li>
            <li class="divider"></li>
            <li><a href="/auth/logout">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
