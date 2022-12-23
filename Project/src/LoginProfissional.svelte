<svelte:head>
	<link rel="stylesheet" href="css/menu.css">
</svelte:head>

<script>
    let username='';
    let password=''; 
    
    import { TrocarEstadoPag} from './Estado.js' 
    </script>

<body>
    <header>
      <nav>
       <a class='logo'  on:click={() => TrocarEstadoPag('menu')}>Psico+</a> 
		<div class="mobile-menu">
			<div class="line1"></div>
			<div class="line2"></div>
			<div class="line3"></div>
		</div>
        <ul class="nav-list">
			
			<li><div class='menu'  on:click={() => TrocarEstadoPag('LoginCliente')}>Cliente</li>

			<li><div class='menu'  on:click={() => TrocarEstadoPag('LoginProfissional')}>Profissional</li>
				
        </ul>  
      </nav>
      
    </header>
    <main>
        <div class='form'>
        <form on:submit>

            <div class="a">
            <h2>Login</h2>
            </div>

            <br>
            <br>
            <input type="text" required bind:value={username} placeholder="E-mail">
            <input type="password" required bind:value={password} placeholder="Senha">
            
            <button> Continuar </button>
            
        </form>
       <div class="letras">
       
        </div>
        <a class='but'  on:click={() => TrocarEstadoPag('profissional')}>Registre-se Aqui</a> 
    </div>
    </main>
</body>
    

<style>


    main {
        display: flex;
        justify-content: center;
        padding: 5% ;
        
        
    }
    .form {
        height: 12rem;
        width:15%;
        display: flex;
        flex-direction:column;
        justify-content: center;
        
        background-color: #fff;
        padding: 8rem;
        border-radius: 30px;
        border: none;

    }

        input {
            margin: 0.6rem 0;
            padding: 0.8rem 1.2rem;
            border: none;
            border-radius: 10px;
            box-shadow: 1px 1px 6px #0000001c;
            font-size: 0.8rem;
        }


button{
  text-decoration: none;
  font-size: 0.93rem;
  font-weight: 500;
  color: #fff;
  background-color: #30307e;
  width: 100%;
  margin-top: 2.5rem;
  border: none;
  background-color: #30307e;
  padding: 0.62rem;
  border-radius: 5px;
  cursor: pointer;
}

.letras {
display: flex;

align-items: center;
}
.a{
    text-decoration: none;
    font-size: 1.20rem;
    font-weight: 50;
    display: flex;
    align-items: center;
    flex-direction: row;
    color:black ;
}
.but {
    color:black ;
    text-decoration: none;
    font-size: 1.0rem;
    font-weight: 50;
    display: flex;
    
    padding: 2rem;
    cursor: pointer;
}

</style>