<script>
	import Menu from "./Menu.svelte";
	import Cliente from "./cliente.svelte";
	import Profissional from "./profissional.svelte";
	import TelaHomeInstituicao from "./TelaHomeInstituicao.svelte";
	import { estado } from "./Estado.js";
	import LoginCliente from "./LoginCliente.svelte";
    import LoginProfissional from "./LoginProfissional.svelte";
    import LoginInstituicao from "./LoginInstituicao.svelte";
    import TelaHomeCliente from "./TelaHomeCliente.svelte";
    import TelaHomeProfissional from "./TelaHomeProfissional.svelte";
	import MarcarConsulta from "./MarcarConsulta.svelte";
	import AgendaProfissional from "./AgendaProfissional.svelte";

</script>

	{#if $estado === "menu"}
		<Menu />
		
	{:else if $estado === "LoginCliente"}
		<LoginCliente />

	{:else if $estado === "profissional"}
		<Profissional />

	{:else if $estado === "telahomeinstituicao"}
		<TelaHomeInstituicao />

	{:else if $estado === "cliente"}
	<Cliente />
	{:else if $estado === "LoginProfissional"}
	<LoginProfissional />

	{:else if $estado === "LoginInstituicao"}
	<LoginInstituicao/>
	
	{:else if $estado === "telahomecliente"}
	<TelaHomeCliente/>
	
	{:else if $estado === "telahomeprofissional"}
	<TelaHomeProfissional/>

	{:else if $estado === "MarcarConsulta"}
	<MarcarConsulta/>

	{:else if $estado === "AgendaProfissional"}
	<AgendaProfissional/>
	
{/if}
