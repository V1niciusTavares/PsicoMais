<script>
    import { page, users } from "./stores";
  
    let username, password;
  
    let enteredUsername = "";
    let usernameValidity = "short";
    let usernames = [];
  
    let enteredPassword = "";
    let passwordValidity = "short";
    let passwords = [];
  
    let logins = [];
  
    $: if (enteredUsername.trim().length < 5) {
      usernameValidity = "short";
    } else if (enteredUsername.trim().length > 10) {
      usernameValidity = "long";
    } else {
      usernameValidity = "valid";
    }
    function confirmUsername() {
      if (usernameValidity === "valid") {
        usernames = [...usernames, enteredUsername];
      }
    }
    function removeUsername(index) {
      usernames = usernames.filter((us, idx) => {
        return idx !== index;
      });
    }
  
    $: if (enteredPassword.trim().length < 5) {
      passwordValidity = "short";
    } else if (enteredPassword.trim().length > 10) {
      passwordValidity = "long";
    } else {
      passwordValidity = "valid";
    }
    function confirmPassword() {
      if (passwordValidity === "valid") {
        passwords = [...passwords, enteredPassword];
      }
    }
    function removePassword(index) {
      passwords = passwords.filter((pw, idx) => {
        return idx !== index;
      });
    }
  
    function register() {
        users.update(users => users.concat({
            username,
            password
        }))
        changePage('cadastre');
    }
  
    function changePage(v) {
      page.update(() => v);
    }
  </script>
  
  <head>
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/src/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="/src/vendor/bootstrap/css/bootstrap.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="/src/fonts/font-awesome-4.7.0/css/font-awesome.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="/src/fonts/iconic/css/material-design-iconic-font.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="/src/vendor/animate/animate.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="/src/vendor/css-hamburgers/hamburgers.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="/src/vendor/animsition/css/animsition.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="/src/vendor/select2/select2.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="/src/vendor/daterangepicker/daterangepicker.css"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/src/css/util.css" />
    <link rel="stylesheet" type="text/css" href="/src/css/main.css" />
    <!--===============================================================================================-->
  </head>
  <body>
    <div class="limiter">
      <div
        class="container-login100"
        style="background-image: url('/src/images/bg-01.jpg');"
      >
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
          <form class="login100-form validate-form">
            <span class="login100-form-title p-b-49"> Register </span>
  
            <div
              class="wrap-input100 validate-input m-b-23"
              data-validate="Username is reauired"
            >
              <span class="label-input100">Username</span>
  
              <form on:submit|preventDefault={register}>
               <!--  <input
                  class="input100"
                  type="text"
                  bind:value={enteredUsername}
                /> -->
  
                <input type="text" bind:value={username} placeholder="Usuario" />
              </form>
  
              <span class="focus-input100" data-symbol="&#xf206;" />
            </div>
  
            <div
              class="wrap-input100 validate-input"
              data-validate="Password is required"
            >
              <span class="label-input100">Password</span>
              
              <form on:submit|preventDefault={register}>
                  
               <!--    <input
                  class="input100"
                  type="password"
                  bind:value={enteredPassword}
                /> -->
                <input type="password" bind:value={password} placeholder="Senha">
  
              </form>
              
              
              <span class="focus-input100" data-symbol="&#xf190;" />
            </div>
  
            <div class="text-right p-t-8 p-b-31">
              <a href="#"> Forgot password? </a>
            </div>
  
            <div class="container-login100-form-btn">
              <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn" />
                <button class="login100-form-btn">
  
                  <form on:submit|preventDefault={register}>
                      <!--<input type="submit" value="Logar">-->
                      <button on:click={confirmPassword}>register</button>
                  </form>
                  
                </button>
              </div>
              <button on:click={() => changePage("cadastre")}>Voltar</button>
            </div>
  
            <div class="txt1 text-center p-t-54 p-b-20">
              <span> Or Sign Up Using </span>
            </div>
  
            <div class="flex-c-m">
              <a href="#" class="login100-social-item bg1">
                <i class="fa fa-facebook" />
              </a>
  
              <a href="#" class="login100-social-item bg2">
                <i class="fa fa-twitter" />
              </a>
  
              <a href="#" class="login100-social-item bg3">
                <i class="fa fa-google" />
              </a>
            </div>
  
            <div class="flex-col-c p-t-155">
              <span class="txt1 p-b-17"> Or Sign Up Using </span>
  
              <a href="#" class="txt2">
                <button on:click={() => changePage("registerUsuario")}
                  >Sign Up</button
                >
              </a>
  
              {#if usernameValidity == "short"}
                <p>Username is too short!</p>
              {:else if usernameValidity == "long"}
                <p>Username is too long!</p>
              {:else}
                <p>Username: {enteredUsername}</p>
              {/if}
  
              {#if passwordValidity == "short"}
                <p>Password is too short!</p>
              {:else if passwordValidity == "long"}
                <p>Password is too long!</p>
              {:else}
                <p>Password: {enteredPassword}</p>
              {/if}
            </div>
          </form>
        </div>
      </div>
      <ul>
        {#each passwords as pw, i}
          <li on:click={removePassword.bind(this, i)}>{pw}</li>
        {/each}
  
        {#each usernames as sn, ii}
          <li on:click={removeUsername.bind(this, ii)}>{sn}</li>
        {/each}
      </ul>
    </div>
  
    <div id="dropDownSelect1" />
  
    <!--===============================================================================================-->
    <script src="/src/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="/src/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="/src/vendor/bootstrap/js/popper.js"></script>
    <script src="/src/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="/src/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="/src/vendor/daterangepicker/moment.min.js"></script>
    <script src="/src/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="/src/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="/src/js/main.js"></script>
  
    <!--<button on:click={confirmPassword}>Create Password</button>-->
  </body>
  