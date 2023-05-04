<!DOCTYPE html>
<html lang="en">
  <html>
    <head>
      <title>Sign Up</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta charset="utf-8" />
      <link rel="stylesheet" type="text/css" href="login-style.css" />
      
     
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
                 <option selected disabled>Choisir votre établisement</option>
                 <option value="super admin">Admin</option>
                 <option value="FST">FST</option>
                 <option value="FSTG">FSTG</option>
                 <option value="ENSAM">ENSA-MARRAKECH</option>
                 <option value="FSSM">FSSM</option>
                 <option value="FMPM">FMPM</option>
                 <option value="FLSH">FLSH</option>
                 <option value="FSJESM">FSJESM</option>
                 <option value="SLAM">SLAM</option>
                 <option value="ENS">ENS</option>
                 <option value="ENCG">ENCG</option>
                 <option value="EST-ESSAOUIRA">EST-ESSAOUIRA</option>
                 <option value="EST-SAFI">EST-SAFI</option>
                 <option value="EST-KELAA">EST-KELAA</option>
                 <option value="ENSA-SAFI">ENSA-SAFI</option>
                 <option value="F.POLY-SAFI">F.POLY-SAFI</option>
                 <option value="FSJES-KALAA">ESJES-KALAA</option>
                 <option value="CUMCES">CUMCES</option>
                 <option value="HEEC">HEEC</option>
              </select>
           </div>
            <input type="password" id="password" placeholder=" password" />
            <br>
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
