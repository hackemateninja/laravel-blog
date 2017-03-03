<div class="blog-masthead">
     <div class="container">
       <nav class="nav blog-nav">
         <a class="nav-link active" href="/">Home</a>
         @if (!Auth::check())
             <a class="nav-link" href="/register">register</a>
             <a class="nav-link" href="/login">login</a>
         @endif
         @if (Auth::check())
             <a class="nav-link" href="/logout">logout</a>
             <a class="nav-link" href="/posts/create">create</a>
             <a class="nav-link ml-auto" href="#">{{Auth::user()->name}}</a>
         @endif
       </nav>
     </div>
</div>
