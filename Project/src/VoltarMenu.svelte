<script>
	import { trocarEstadoDoJogo } from './Estado.js'

	
</script>

<center>
<div class='menu'  on:click={() => trocarEstadoDoJogo('menu')}>
	<h4>VOLTAR AO MENU</h4>
</div>
</center>
<style>

 div {
	width: 100%;
    margin-top: 2.5rem;
    border: none;
    background-color: #d4bf1bad;
    padding: 0.20rem;
    border-radius: 3px;
    cursor: pointer;
	
}
</style>