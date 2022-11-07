<script>
  import Register from "./Register.svelte";
  import Login from "./Login.svelte";
  import Home from "./Home.svelte";
  import { page } from "./stores";

  let currentPage;

  page.subscribe((value) => {
    currentPage = value;
  });

  function changePage(p) {
    currentPage = p;
  }
</script>

<main>
 <!--<h1>Testando Login ({currentPage})</h1>-->

  {#if currentPage == "home"}
    <Home />
    {:else if currentPage == "loginUsuario" || currentPage == "longinProf" || currentPage == "loginInst"}
      <Login />
    {:else if currentPage == "registerUsuario" || currentPage == "registerProf" || currentPage == "registerInst"}
      <Register />
    {/if}  
  
</main>

<style>
</style>
