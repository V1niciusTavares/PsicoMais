<svelte:head>
	<link rel="stylesheet" href="css/menu.css">
</svelte:head>

<script>
    
    import { TrocarEstadoPag} from './Estado.js'
  
    let nome = "";
    let email = "";
    let senha = "";
    let telefone = "";
    let idade = "";
    let cpf = "";
    let endereco = "";
  
    async function onSubmit(event) {
      event.preventDefault();
  
      const data = new FormData();
      data.append("nome", nome);
      data.append("email", email);
      data.append("senha", senha);
      data.append("telefone", telefone);
      data.append("idade", idade);
      data.append("cpf", cpf);
      data.append("endereco", endereco);
  
      try {
        const result = await fetch("http://localhost:8000/", {
          method: "POST",
          body: data,
        });
        const body = await result.text();
        console.log(body);
      } catch (e) {
        console.log("error", e);
      }
    }
  
    function inputNome(e) {
      nome = e.target.value;
    }
    function inputEmail(e) {
      email = e.target.value;
    }
    function inputSenha(e) {
      senha = e.target.value;
    }
    function inputTelefone(e) {
      telefone = e.target.value;
    }
    function inputIdade(e) {
      idade = e.target.value;
    }
    function inputCpf(e) {
      cpf = e.target.value;
    }
    function inputEndereco(e) {
      endereco = e.target.value;
    }
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
      <div class="background">
      <div class="container">
        <div class="form-image">
          <img src="/images/cliente.svg" alt="" />
        </div>
        <div class="form">
          <form on:submit={onSubmit}>
            <div class="form-header">
              <div class="title">
                <h1>Cadastrar Profissionais</h1>
              </div>
            </div>
    
            <div class="input-group">
              <div class="input-box">
                <label for="nome">Nome</label>
                <input
                  type="text"
                  placeholder="Nome"
                  value={nome}
                  on:input={inputNome}
                />
              </div>
    
              <div class="input-box">
                <label for="email">E-mail</label>
                <input
                  type="text"
                  placeholder="E-mail"
                  value={email}
                  on:input={inputEmail}
                />
              </div>
              <div class="input-box">
                <label for="senha">Senha</label>
                <input
                  type="password"
                  placeholder="senha"
                  value={senha}
                  on:input={inputSenha}
                />
              </div>
              <div class="input-box">
                <label for="telefone">Telefone</label>
                <input
                  type="text"
                  placeholder="Telefone"
                  value={telefone}
                  on:input={inputTelefone}
                />
              </div>
    
              <div class="input-box">
                <label for="number">Data De Nascimento</label>
                <input
                  type="date"
                  value={idade}
                  on:input={inputIdade}
                />
              </div>
    
              <div class="input-box">
                <label for="cpf">CPF</label>
                <input
                  type="text"
                  placeholder="CPF"
                  value={cpf}
                  on:input={inputCpf}
                />
              </div>
    
              <div class="input-box">
                <label for="endereco">Endereço</label>
                <input
                  type="text"
                  placeholder="Endereço"
                  value={endereco}
                  on:input={inputEndereco}
                />
              </div>
            </div>
            <div class="continue-button">
              <button><a href="#">Continuar</a> </button>
            </div>
          </form>
        </div>
      </div>
    </div>
      
    </main>
</body>

  
  
  <style>
    
    body {
      background:#30307e no-repeat 
    center center ;
    }

    
    @import url("https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500&family=Open+Sans:wght@300;400;500;600&display=swap");
* {
  padding: 0;
  margin: 0;


}

.container {
  width: 80%;
  height: 80vh;
  margin: 100px 100px;
  display: flex;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.212);
}

.form-image {
  width: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #23232e;
  padding: 1rem;
}

.form-image img {
  width: 31rem;
}

.form {
  width: 50%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: #fff;
  padding: 3rem;
}

.form-header {
  margin-bottom: 3rem;
  display: flex;
  justify-content: space-between;
}

.form-header h1::after {
  content: "";
  display: block;
  width: 5rem;
  height: 0.3rem;
  background-color: #30307e;
  margin: 0 auto;
  position: absolute;
  border-radius: 10px;
}

.input-group {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  padding: 1rem 0;
}

.input-box {
  display: flex;
  flex-direction: column;
  margin-bottom: 1.1rem;
}

.input-box input {
  margin: 0.6rem 0;
  padding: 0.8rem 1.2rem;
  border: none;
  border-radius: 10px;
  box-shadow: 1px 1px 6px #0000001c;
  font-size: 0.8rem;
}

.input-box input:hover {
  background-color: #eeeeee75;
}

.input-box input:focus-visible {
  outline: 1px solid #30307e;
}

.input-box input::placeholder {
  color: #000000be;
}

.continue-button button {
  width: 100%;
  margin-top: 2.5rem;
  border: none;
  background-color: #30307e;
  padding: 0.62rem;
  border-radius: 5px;
  cursor: pointer;
}

.continue-button button:hover {
  background-color: #30307e;
}


.continue-button button a {
  text-decoration: none;
  font-size: 0.93rem;
  font-weight: 500;
  color: #fff;
}
.nav-list {
     list-style: none;
     display: flex;
}
.nav-list li {
    letter-spacing: 3px;
    margin-left: 32px;
}

 
  </style>
  