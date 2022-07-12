~~<html>
<head>
  <title>Website name goes here</title>
</head>
<body>
  <div>Hello World!</div>
  <br />
  <br />
  <!--TODO: Add JavaScript SDK here-->

  <!--TODO: Add Facebook Login button here-->
  <!--Add `data-onlogin="checkLoginState();"` to trigger the JavaScript code below after login-->

  <div id="status"></div>
  <br />
  <br />
  <div id="name"></div>
  <br />
  <div id="birthday"</div>
</body>
<script>
  // Below is JavaScript code to update the status on the page every time
  // the page is loaded or the user finishes logging in

  // Call this function after login is complete to check if the user is logged in
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  // Changes the status on the page
  function statusChangeCallback(response) {
    if (response.status === 'connected') {
      document.getElementById('status').innerHTML = 'Logged in.';
      testAPI();
    } else {
      document.getElementById('status').innerHTML = 'Please log into this webpage.';
    }
  }

  // Query the Graph API and update the page with the user name
  function testAPI() {
    FB.api('/me?fields=id,name', function(response) {
      document.getElementById('name').innerHTML = 'Your name is ' + response.name;
    });
  }

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '483866386834921',          // TODO: replace with your App ID
      cookie     : true,                     // Enable cookies to allow the server to access the session.
      xfbml      : true,                     // Parse social plugins on this webpage.
      version    : 'v5.0'
    });


    FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
      statusChangeCallback(response);        // Get the login status and change the status
    });
  };
</script>
</html>
