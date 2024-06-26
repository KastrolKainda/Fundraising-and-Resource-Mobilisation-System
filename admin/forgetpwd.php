<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Sign Up/In to SITENAME</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
  <style>
    body, html {
      height: 100%;
      background-color: #0c2b5b;
      background-size:cover;
      background-image: url('LINK TO MY BACKGROUND IMAGE');
    }

    .login-container {
      position: relative;
      height: 100%;
    }

    .login-box {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      padding: 15px;
      background-color: #fff;
      box-shadow: 0px 5px 5px #ccc;
      border-radius: 5px;
      border-top: 1px solid #e9e9e9;
      border: 1px solid grey;
    }

    .login-header {
      text-align: center;
    }

    .login-header img {
      width: 200px;
    }
    
    .forgot-password {
      text-align: right;
      float: right;
      font-size: 10px
    }

    #error-message {
      display: none;
    }
  </style>
<body>
  <div class="login-container">
    <div class="col-xs-12 col-sm-4 col-sm-offset-4 login-box">
      <div class="login-header">
      	<img src="adminimages/logo-3.jpg"/>
      </div>
      <div id="error-message" class="alert alert-danger"></div>
      <form onsubmit="return false;" method="post">
        <div class="form-group">
         <label for="name">Email</label>
          <input
            type="email"
            class="form-control"
            id="email"
            placeholder="Enter your email">
        </div>
        <div class="form-group">
          <label for="name">Password</label>
          <input
            type="password"
            class="form-control"
            id="password"
            placeholder="Enter your password">
        </div>
        <button
          type="submit"
          id="btn-login"
          class="btn btn-primary btn-block">
            Sign In
        </button>
        <span class="forgot-password">
          <a href="no-javascript1.html" title="Forgot Password" id="link-reset">Forgot Password?</a>
        </span>
        <button
          type="button"
          id="btn-signup"
          class="btn btn-default btn-block">
            No account yet?  Sign Up
        </button>
        <hr>
        <button
          type="button"
          id="btn-google"
          class="btn btn-default btn-danger btn-block">
            Sign In with Google
        </button>
      </form>
    </div>
  </div>

  <!--[if IE 8]>
  <script src="//cdnjs.cloudflare.com/ajax/libs/ie8/0.2.5/ie8.js"></script>
  <![endif]-->

  <!--[if lte IE 9]>
  <script src="https://cdn.auth0.com/js/polyfills/1.0/base64.min.js"></script>
  <script src="https://cdn.auth0.com/js/polyfills/1.0/es5-shim.min.js"></script>
  <![endif]-->

  <script src="https://cdn.auth0.com/js/auth0/9.11.2/auth0.min.js"></script>
  <script src="https://cdn.auth0.com/js/polyfills/1.0/object-assign.min.js"></script>
  <script>
    window.addEventListener('load', function() {

      var config = JSON.parse(
        decodeURIComponent(escape(window.atob('@@config@@')))
      );

      var params = Object.assign({
        /* additional configuration needed for use of custom domains*/
        overrides: {
          __tenant: config.auth0Tenant,
          __token_issuer: 'login.mycustomdomain.com'
        }, 
        domain: config.auth0Domain,
        clientID: config.clientID,
        redirectUri: config.callbackURL,
        responseType: 'code'
      }, config.internalOptions);

      var webAuth = new auth0.WebAuth(params);

      var databaseConnection = 'Username-Password-Authentication';

      function login(e) {
        e.preventDefault();
        var username = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        webAuth.login({
          realm: databaseConnection,
          username: username,
          password: password
        }, function(err) {
          if (err) displayError(err);
        });
      }

      function signup() {
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;

        webAuth.redirect.signupAndLogin({
          connection: databaseConnection,
          email: email,
          password: password
        }, function(err) {
          if (err) displayError(err);
        });
      }

      function loginWithGoogle() {
        webAuth.authorize({
          connection: 'google-oauth2'
        }, function(err) {
          if (err) displayError(err);
        });
      }

      function displayError(err) {
        var errorMessage = document.getElementById('error-message');
        errorMessage.innerHTML = err.description;
        errorMessage.style.display = 'block';
      }
      
      function resetPassword (e) {
        e.preventDefault();
				var email = document.getElementById('email').value;
        if(!email)
        {
          alert("Please enter your email.");
          return;
        }
    		webAuth.changePassword({
      		connection: databaseConnection ,
      		email:   email
    			}, function (err, resp) {
      		if(err){
        		console.log(err.message);
            alert(err.message);
      			}else{
        		console.log(resp);
            alert(resp);
      		}});
      }

      document.getElementById('btn-login').addEventListener('click', login);
      document.getElementById('btn-google').addEventListener('click', loginWithGoogle);
      document.getElementById('btn-signup').addEventListener('click', signup);
      document.getElementById('link-reset').addEventListener('click', resetPassword);
    });
  </script>
</body>
</html>