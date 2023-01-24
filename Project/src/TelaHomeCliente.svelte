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
			
			

			<li><div class='menu'  on:click={() => TrocarEstadoPag('MarcarConsulta')}>Marcar Consulta</li>

				
				
        </ul>  
      </nav>
      
    </header>
    <main>

		<div class="head1">

			<h1>PsicoMais Sua Saúde </h1>
			<h1>Acima de tudo</h1>

		</div>
		
		 <div class="ft2"> <img src="/images/ft2.png" alt="" /> </div>
    </main>

</body>


<style>

	.head1 {
	display: flex;
	justify-content: center;
    align-items: center;
	flex-direction: column;
	padding-top: 3%;
	}

	.ft2 {
	display: flex;
	justify-content: center;
    align-items: center;
	padding-top: 6%;
	}

img {

	width: 280px;
	height: 500px;
	
	
}



</style>