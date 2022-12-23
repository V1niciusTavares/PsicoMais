<script>
	import Menu from "./Menu.svelte";
	import Cliente from "./cliente.svelte";
	import Profissional from "./profissional.svelte";
	import TelaHome from "./telahome.svelte";
	import TelaAgenda from "./telaagenda.svelte";
	import { estado } from "./Estado.js";
	import LoginCliente from "./LoginCliente.svelte";
    import LoginProfissional from "./LoginProfissional.svelte";
	
</script>

{#if $estado === "menu"}
	<Menu />
{:else if $estado === "LoginCliente"}
	<LoginCliente />
{:else if $estado === "profissional"}
	<Profissional />
{:else if $estado === "telahome"}
	<TelaHome />
{:else if $estado === "telaagenda"}
	<TelaAgenda />
{:else if $estado === "cliente"}
	<Cliente />
	{:else if $estado === "LoginProfissional"}
	<LoginProfissional />
	
{/if}
