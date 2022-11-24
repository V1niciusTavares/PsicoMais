<script>
    import { currentUser, ursinhos } from './stores'

    let form = {
        nome: ''
    }

    function cadastrar() {
        $ursinhos = $ursinhos.concat({
            nome: form.nome,
            usuario: $currentUser.username
        })
    }
</script>
<h1>Aqui é a página pra quem tá logado e balão</h1>

<hr>
<form on:submit|preventDefault={cadastrar}>
    <input type="text" bind:value={form.nome}>
    <input type="submit">
</form>

{#each $ursinhos as urso}
    <div>{urso.nome} / {urso.usuario}</div>
{/each}