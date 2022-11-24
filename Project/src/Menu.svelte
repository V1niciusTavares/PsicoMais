<svelte:head>
	<link rel="stylesheet" href="css/menu.css">
</svelte:head>

<script>

	import { trocarEstadoDoJogo } from './Estado.js'

</script>

<br>
<br>
<br>
<br>
<body>
	<center>

<h1>
	PsicoMais Autenticator
</h1>
<br>
<br>
<br>
<br>
<br>
<br>
<h3>Selecione abaixo seu meio de autenticação </h3>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<button>
<div class='menu' on:click={() => trocarEstadoDoJogo('cliente')}>
	Cliente
</div>
</button>
<br>
<button>
<div class='menu' on:click={() => trocarEstadoDoJogo('profissional')}>
	Profissional
</div>
</button>
<br>

<button>
<div class='menu' on:click={() => trocarEstadoDoJogo('hospital')}>
	Instituição 
</div>
</button>
</center>
</body>
