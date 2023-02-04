<svelte:head>
	<link rel="stylesheet" href="css/menu.css">
</svelte:head>


<script>
   import { TrocarEstadoPag } from './Estado.js'
</script>

<title>Psico+</title>
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

			<li><div class='menu'  on:click={() => TrocarEstadoPag('LoginInstituicao')}>Instituição</li>

			
				
        </ul>  
      </nav>
      
    </header>
    <main>
		<div class="texto">
			<h2> Seja bem vindo ao Psico+!! </h2>
			
		</div>
		<div class="img">
			<img src="images/logo.png"  alt="logo"/>
		</div>
    </main>
</body>

<style>
	*{
		margin:0px;
		padding:0px;
	}

body{
	margin-top:-27px;

}
	.texto {
		color:rgb(0, 0, 0);
		text-decoration: none;
		transition: 0.3s;
		list-style: none;
		font-family: system-ui,-apple-system,Helvetica,Arial,sans-serif;
		padding-top: 3%;
		display: flex;
		justify-content:center;
     	
    	}
	.img {
		display: flex;
		justify-content: center;
		padding-top: 5%;
		}
	a{
		color:#fff;
		text-decoration: none;
		transition: 0.3s;
		
	}
	.menu {
		cursor: pointer;
		color:#ffffff;
		text-decoration: none;
		transition: 0.3s;
		
	}
	.menu:hover{
		text-decoration: underline;
		background-color:#191A61;
		border-radius: 5px;
		padding:5px;
	}

	a:hover {
		opacity:0.7;
	}
	.logo {
		cursor: pointer;
		font-size: 24px;
		text-transform: uppercase;
		letter-spacing: 4px;
	}
	nav {
		display: flex;
		justify-content: space-around;
		align-items: center ;
		font-family: system-ui,-apple-system,Helvetica,Arial,sans-serif;
		background-image: linear-gradient(to bottom,#2C2FAB,#4c4ca0);
		height: 8vh ;
		border-radius: 5px;
		font-weight: bold;
		padding:10px;
		margin-top: 20px;

	}
	main {
		background:#1961AD no-repeat 
		center center ;
		background-size: cover;
		height: 92vh;
	}
	.nav-list {
		 list-style: none;
		 display: flex;
	}
	.nav-list li {
		letter-spacing: 3px;
		margin-left: 32px;

	}
	.mobile-menu {
		cursor:pointer;
		display: none;
	}
	.mobile-menu div {
		width: 32px;
		height: 2px;
		background: #fff;
		margin:8px;
	}

	@media (max-width:999px) {
		body {
			overflow-x: hidden;
			background-color: white;
		}
		.nav-list {
			position: absolute;
			top:38;
			right: 0;
			width: 50vw;
			height: 92vh;
			background: #23232e;
			flex-direction: column;
			align-items: center;
			justify-content: space-around;
			 transform: translateX(100%);
		} 
		.nav-list li {
			margin-left: 0;
			opacity: 0;
		}
		.mobile-menu {
			display: block;
		}
		
	}

</style>
