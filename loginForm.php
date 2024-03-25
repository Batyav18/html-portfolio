
       
<div id="dialogBox" class="dialog-box">
  <span id="closeBtn" class="close-btn"><i class="fas fa-times"></i></span>
  <div id="loginForm">
    <h2>Login</h2>
    <form>
      <div class="form-group">
        <label for="username">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password">

      </div>
  <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
      <label class="form-check-label" for="rememberMe">Remember Me</label>
    </div>
      <button type="submit" class="btn btn-default">Login</button>
    </form>
    <p class="question">Don't have an account? <a href="#" id="signupLink">Sign up</a></p>
  </div>
  
   <div id="signupForm" style="display: none;">
    <h2>Sign Up</h2>
    <form>
      <div class="form-group">
        <label for="newUsername">Username</label>
        <input type="text" class="form-control" id="newUsername" placeholder="Enter username">
      </div>
       <div class="form-group">
        <label for="username">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="newPassword">Password</label>
        <input type="password" class="form-control" id="newPassword" placeholder="Password">
      </div>
        <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
      <label class="form-check-label" for="rememberMe">Remember Me</label>
    </div>
      <button type="submit" class="btn btn-default">Sign Up</button>
    </form>
    <p class="question">Already have an account? <a href="#" id="loginLink">Login</a></p>
  </div>
</div> 