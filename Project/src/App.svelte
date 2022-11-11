<script>
	import Menu from './Menu.svelte'
	import Hospital from './hospital.svelte'
	import Cliente from './cliente.svelte'
	import Profissional from './profissional.svelte'
	import { estado } from './Estado.js'
</script>

	{#if $estado === 'menu'}
	<Menu/>
	{:else if $estado === 'hospital'}
	<Hospital/>
	{:else if $estado === 'cliente'}
	<Cliente/>
	{:else if $estado === 'profissional'}
	<Profissional/>
{/if}