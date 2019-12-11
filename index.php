<html>
<head>
  <title>Website name goes here</title>
</head>
<body>
  <!--TODO: Add JavaScript SDK here-->
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0&appId=2469375149997342"></script>

  <!--TODO: Add Facebook Login button here-->
  <div class="fb-login-button" data-onlogin="checkLoginState();" data-width="" data-size="large" data-button-type="continue_with" data-auto-logout-link="true" data-use-continue-as="false"></div>

  <div id="status"></div>
  <br />
  <br />
  <div id="name"></div>
  <br />
  <div id="birthday"</div>
</body>
<script>
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  function statusChangeCallback(response) {
    if (response.status === 'connected') {
      testAPI();
    } else {
      document.getElementById('status').innerHTML = 'Please log into this webpage.';
    }
  }

  function testAPI() {
    FB.api('/me', function(response) {
      document.getElementById('status').innerHTML = 'Logged in as ' + response.name;
    });
  }

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '2469375149997342',
      cookie     : true,                     // Enable cookies to allow the server to access the session.
      xfbml      : true,                     // Parse social plugins on this webpage.
      version    : 'v5.0'
    });


    FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
      statusChangeCallback(response);        // Get the login status
    });
  };
</script>
</html>
