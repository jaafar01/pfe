<!DOCTYPE html>
<html lang="en">
  <html>
    <head>
      <title>Sign Up</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta charset="utf-8" />
      <link rel="stylesheet" type="text/css" href="signup_style.css" />
      
     
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    </head>

    <body class="body">
     

      <div class="login-page">
        <div class="form">
          <form>
            <lottie-player
              src="https://assets4.lottiefiles.com/datafiles/XRVoUu3IX4sGWtiC3MPpFnJvZNq7lVWDCa8LSqgS/profile.json"
              background="transparent"
              speed="5"
              style="justify-content: center"
              loop
              autoplay
            ></lottie-player>
            <div class="select">
              <select name="format" id="format">
                 <option selected disabled>Choose a book format</option>
                 <option value="pdf">Admin</option>
                 <option value="txt">SuperAdmin</option>
              </select>
           </div>
            <input type="text" placeholder="Username" />
            <input type="password" id="password" placeholder="mot de passe" />
            <i class="fas fa-eye" onclick="show()"></i>
            <br>
            <br>
          </form>

          <form class="login-form">
            <button type="button" onclick="window.location.href='login.html'">
              Se connecter
            </button>
          </form>
        </div>
      </div>
    </body>
    <script>
      function show() {
        var password = document.getElementById("password");
        var icon = document.querySelector(".fas");

        // ========== Checking type of password ===========
        if (password.type === "password") {
          password.type = "text";
        } else {
          password.type = "password";
        }
      }
    </script>
  </html>
</html>
