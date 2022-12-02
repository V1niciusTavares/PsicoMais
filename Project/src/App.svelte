<script>
	import Menu from './Menu.svelte'
	
	import Cliente from './cliente.svelte'
	import Profissional from './profissional.svelte'
	import { estado } from './Estado.js'
</script>

	{#if $estado === 'menu'}
	<Menu/>
	
	{:else if $estado === 'cliente'}
	<Cliente/>
	{:else if $estado === 'profissional'}
	<Profissional/>
{/if}