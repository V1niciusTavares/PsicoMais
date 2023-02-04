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
        <div class="form-image">
            <img src="/images/cliente.svg" alt="" />
          </div>
        <div class='form'>
        <form on:submit>
            <div class="h1">
            <h1>Login</h1>
            </div>
            <br>
            <br>
            <div class="but2">
            <input type="text" required bind:value={username} placeholder="E-mail">
            <input type="password" required bind:value={password} placeholder="Senha">
            </div>
            <div class="but1">

            <button> Continuar </button>
            
             </div>

        </form>
       <div class="letras">
       
        </div>
        <a class='but'  on:click={() => TrocarEstadoPag('cliente')}></a> 
    </div>
    </main>
</body>
    

<style>


    main {
        display: flex;
        justify-content: center;
        padding: 5% ;
        
        
    }
  
        input {
            margin: 0.6rem 0;
            padding: 0.8rem 1.2rem;
            border: none;
            border-radius: 10px;
            box-shadow: 1px 1px 6px #0000001c;
            font-size: 0.8rem;
            
        }
        .but2 {
            display: flex;
            justify-content:center;
            flex-direction:column;
            
        }
.but1 {
    display: flex;
    justify-content:center;
}

button{
  text-decoration: none;
  font-size: 0.93rem;
  font-weight: 500;
  color: #fff;
  background-color: #30307e;
  width: 80%;
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
.h1{
    text-decoration: none;
    font-size: 1.20rem;
    font-weight: 50;
    display: flex;
    align-items: center;
    
  
}
.but {
    color:#30307e;
    text-decoration: none;
    font-size: 1.0rem;
    font-weight: 50;
    display: flex;
    justify-content:center;
    padding: 3rem;
    cursor: pointer;
}
.form-image {
  width: 30%;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #23232e;
  padding: 1rem;
  height: 27rem;
}
.form-image img {
  width: 25rem;
}
.form {
        height: 27rem;
        width:20%;
        display: flex;
        flex-direction:column;
        justify-content: center;
        background-color: #fff;
        padding: 1rem;
        border: none;
        border-right: 30px;
    }



</style>