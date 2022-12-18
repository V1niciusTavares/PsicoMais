<script>
	import Menu from './Menu.svelte'
	import Cliente from './cliente.svelte'
	import Profissional from './profissional.svelte'
	import TelaHome from './telahome.svelte'
	import TelaAgenda from './telaagenda.svelte'
	import { estado } from './Estado.js'
	
</script>

	{#if $estado === 'menu'}
		<Menu/>
	
	{:else if $estado === 'cliente'}
		<Cliente/>
	{:else if $estado === 'profissional'}
		<Profissional/>
	{:else if $estado === 'telahome'}
		<TelaHome/>
	{:else if $estado === 'telaagenda'}
		<TelaAgenda/>
{/if}

