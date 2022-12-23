<svelte:head>
	<link rel="stylesheet" href="css/menu.css">
</svelte:head>

<script>
    let username='';
    let password=''; 
    
    import { TrocarEstadoPag} from './Estado.js' 
    </script>
    


    <form on:submit>

        <input type="text" required bind:value={username} placeholder="email">
        <input type="password" required bind:value={password} placeholder="senha">
        
        <button> continuar </button>
    
    </form>

<lu> Caso não tenha cadastro</lu> <button on:click={() => TrocarEstadoPag('profissional')}>resgistre-se</button>