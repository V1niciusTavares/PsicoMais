<script>
  import Register from "./Register.svelte";
  import Login from "./Login.svelte";
  import Home from "./Home.svelte";
  import { page, currentUser } from "./stores";
  import RegisterLogin from "./RegisterLogin.svelte";

  let currentPage;

  page.subscribe((value) => {
    currentPage = value;
  });

  function logout() {
    $currentUser = false;
  }

 /*  function changePage(p) {
    currentPage = p;
  } */
</script>

<main>
  <!--<h1>Testando Login ({currentPage})</h1>-->

  ({$currentUser})
  {#if currentPage == "home"}
    <Home />
  {:else if (currentPage == "loginUsuario" || currentPage == "longinProf" || currentPage == "loginInst") && !$currentUser}
    
    <Login />
  {:else if (currentPage == "registerUsuario" || currentPage == "registerProf" || currentPage == "registerInst") && !$currentUser}
    
    <RegisterLogin />
  {:else if currentPage == "cadastre" && !$currentUser}
    <Register />
  {/if}

  {#if $currentUser}
    <button on:click={logout}>logout</button>
  {/if}
</main>

<style>
</style>
