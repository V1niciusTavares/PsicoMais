<svelte:head>
	<link rel="stylesheet" href="css/menu.css">
</svelte:head>

<script>

	import { TrocarEstadoPag } from './Estado.js'

</script>

<body>
    <h1>Aqui ficará a tela home após realizar o login</h1>
<button>
<div class='menu'  on:click={() => TrocarEstadoPag('menu')}>
	<h4>VOLTAR AO MENU</h4>
</div>
</button>
</body>