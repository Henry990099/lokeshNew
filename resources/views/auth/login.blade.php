<!DOCTYPE html>
<html lang="en">
<head>
   @include("includes.compatibility")
   <meta name="description" content="">
   <title>Seal Configurator | Login</title>
   @include("includes.styles");
</head>
<body>
   @include("includes.header");
   <section class="login-section">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              
                  <div class="login-heading wow bounceIn" style="animation-delay: 0.2s;">
                     <h4>Login</h4>
                     <form method="POST" action="{{route('login')}}">
                        @csrf
                     <label class="custom-field one">
                        <input type="text" name="email" placeholder=" "/>
                        <span class="placeholder">User Name</span>
                     </label>
                     <label class="custom-field one">
                        <input type="password" name="password" placeholder=" "/>
                        <span class="placeholder">Password</span>
                     </label>
                     <div class="login-btn"><a href="index.php"><button>LOGIN</button></a></div>
                     </form>
                  </div>
              
            </div>
            <div class="col-md-2"></div>
         </div>
      </div>
   </section>
   @include("includes.scripts");
</body>
</html>