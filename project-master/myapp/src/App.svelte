<script>
  let nome = '';
  let email = '';
  let telefone = '';
  let idade = '';
  let cpf = '';
  let endereco = '';

  async function onSubmit(event) {
    event.preventDefault();

    const data = new FormData();
    data.append('nome', nome);
    data.append('email', email);
    data.append('telefone', telefone);
    data.append('idade', idade);
    data.append('cpf', cpf);
    data.append('endereco', endereco);

    try {
      const result = await fetch('http://localhost:8000/', {
        method: 'POST',
        body: data,
      });
      const body = await result.text();
      console.log(body);
    } catch (e) {
      console.log('error', e);
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
  <form on:submit={onSubmit}>
    <input
      type="text"
      placeholder="Nome"
      value={nome}
      on:input={inputNome}
    />
    <input
      type="text"
      placeholder="E-mail"
      value={email}
      on:input={inputEmail}
    />
    <input
      type="text"
      placeholder="Telefone"
      value={telefone}
      on:input={inputTelefone}
    />
    <input
      type="number"
      placeholder="Idade"
      value={idade}
      on:input={inputIdade}
    />
    <input
      type="number"
      placeholder="CPF"
      value={cpf}
      on:input={inputCpf}
    />
    <input
      type="text"
      placeholder="Endereço"
      value={endereco}
      on:input={inputEndereco}
    />
    <input type="submit" value="enviar" />
  </form>
</main>

<style>
</style>
