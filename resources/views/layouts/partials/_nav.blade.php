 <nav class="navbar navbar-expand navbar-dark bg-secondary">
      <div class="container">
       <a class="navbar-brand" href="{{ route('root_path') }}">Laracarte</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarCollapse">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
             <a class="nav-link" href="{{ route('root_path') }}">Home</a>
           </li>
           <li class="nav-item active">
             <a class="nav-link" href="{{ route('about_path') }}">About</a>
           </li>
           <li class="nav-item active">
             <a class="nav-link" href="#">Artisans</a>
           </li>
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle active" href="https://getbootstrap.com" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
             <div class="dropdown-menu" aria-labelledby="dropdown10">
               <a class="dropdown-item" href="https://Laravel.com">Laravel.com</a>
               <a class="dropdown-item" href="https://Laravel.io">Laravel.io</a>
               <a class="dropdown-item" href="https://Laracasts.com">Laracasts</a>
               <a class="dropdown-item" href="https://Larajobs.com">Larajobs</a>
               <a class="dropdown-item" href="https://Laravel-news.com">Laravel News</a>
               <a class="dropdown-item" href="https://Larachat.co">Larachat</a>
             </div>
           </li>
           <li class="nav-item active">
             <a class="nav-link" href="#">Contact</a>
           </li>
         </ul>
         <ul class="nav navbar-nav navbar-right">
            <li class="nav-item active"><a class="nav-link" href="#about">Login</a> </li> 
            <li class="nav-item active"><a class="nav-link" href="#register">Register</a></li>
         </ul>
       </div>
       </div>
    </nav>