<svelte:head>
	<link rel="stylesheet" href="css/menu.css">
</svelte:head>

<script>

	import { TrocarEstadoPag } from './Estado.js'

</script>

<body>
    <header>
      <nav>
       <a class='logo'  on:click={() => TrocarEstadoPag('menu')}>Psico+</a> 
		<div class="mobile-menu">
			<div class="line1"></div>
			<div class="line2"></div>
			<div class="line3"></div>
		</div>
        <ul class="nav-list">
			
			<li><div class='menu'  on:click={() => TrocarEstadoPag('LoginCliente')}>Cliente</li>

			<li><div class='menu'  on:click={() => TrocarEstadoPag('LoginProfissional')}>Profissional</li>

				
				
        </ul>  
      </nav>
      
    </header>
    <main>
		<h1>Aqui será home PROF</h1>
    </main>
</body>