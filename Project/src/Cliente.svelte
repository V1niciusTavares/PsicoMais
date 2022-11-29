<script>
    import VoltarMenu from "./VoltarMenu.svelte";
  
    let nome = "";
    let email = "";
    let telefone = "";
    let idade = "";
    let cpf = "";
    let endereco = "";
  
    async function onSubmit(event) {
      event.preventDefault();
  
      const data = new FormData();
      data.append("nome", nome);
      data.append("email", email);
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
  
    function inputNome(event) {
      nome = event.target.value;
    }
    function inputEmail(event) {
      email = event.target.value;
    }
    function inputTelefone(event) {
      telefone = event.target.value;
    }
    function inputIdade(event) {
      idade = event.target.value;
    }
    function inputCpf(event) {
      cpf = event.target.value;
    }
    function inputEndereco(event) {
      endereco = event.target.value;
    }
  </script>
  
  <main>
    <div class="container">
      <div class="form-image">
        <img src="/images/cliente.svg" alt="" />
      </div>
      <div class="form">
        <form on:submit={onSubmit}>
          <div class="form-header">
            <div class="title">
              <h1>Cadastrar Cliente</h1>
            </div>
          </div>
  
          <div class="input-group">
            <div class="input-box">
              <label for="firstname">Nome</label>
              <input
                type="text"
                placeholder="Nome"
                value={nome}
                on:input={inputNome}
              />
            </div>
  
            <div class="input-box">
              <label for="lastname">E-mail</label>
              <input
                type="text"
                placeholder="E-mail"
                value={email}
                on:input={inputEmail}
              />
            </div>
            <div class="input-box">
              <label for="email">Telefone</label>
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
                type="number"
                placeholder="Idade"
                value={idade}
                on:input={inputIdade}
              />
            </div>
  
            <div class="input-box">
              <label for="password">CPF</label>
              <input
                type="number"
                placeholder="CPF"
                value={cpf}
                on:input={inputCpf}
              />
            </div>
  
            <div class="input-box">
              <label for="confirmPassword">Endereço</label>
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
  
    <VoltarMenu />
  </main>
  
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500&family=Open+Sans:wght@300;400;500;600&display=swap");
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: "Inter", sans-serif;
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
      background-color: #fde3a7d7;
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
      background-color: #6c63ff;
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
      outline: 1px solid #6c63ff;
    }
  
    .input-box input::placeholder {
      color: #000000be;
    }
  
    .continue-button button {
      width: 100%;
      margin-top: 2.5rem;
      border: none;
      background-color: #6c63ff;
      padding: 0.62rem;
      border-radius: 5px;
      cursor: pointer;
    }
  
    .continue-button button:hover {
      background-color: #6b63fff1;
    }
  
    .continue-button button a {
      text-decoration: none;
      font-size: 0.93rem;
      font-weight: 500;
      color: #fff;
    }
  </style>
  