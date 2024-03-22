<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form Design | CodeLab</title>
      <link rel="stylesheet" href="{{asset('register_assets/style.css')}}">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Registration Form
         </div>
         <form action="#" method="POST">
            @csrf
            <div class="field">
               <input name="username" type="text" required value="{{old('username')}}">
               <label>Username</label>
               <span style="color:red">
                    @error('username')
                    {{$message}}
                    @enderror
               </span>
            </div>
            <div class="field">
               <input name="email" type="text" required value="{{old('email')}}">
               <label>Email Address</label>
               <span style="color:red">
                    @error('email')
                    {{$message}}
                    @enderror
               </span>
            </div>
            <div class="field">
               <input name="password" type="password" required>
               <label>Password</label>
                <span style="color:red">
                @error('password')
                {{$message}}
                @enderror
           </span>
            </div>
            <div class="roll">
                <label>Roll :</label>
                <select name="roll_as" id="">
                    <option value="0">User</option>
                    <option value="1">Author</option>
                </select>
            </div>
            <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div>
               <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div>
            </div>
            <div class="field">
               <input type="submit" value="Register">
            </div>
            <div class="signup-link">
               Not a member? <a href="/login">SignIn now</a>
            </div>
         </form>
      </div>
   </body>
</html>