<script>

    import { page } from "./stores";
    import { each } from "svelte/internal";
      import Form from "./Form.svelte";
      
    
      let name = "";
      let email = "";
      let telefone = "";
      let fem = "feminino";
      let mas = "masculino";
      let other = "outro"; 
      let data = "";
      let city = "";
      let estado = "";
      let endereco = "";
    
      let formState = "empty";
      let createdUsers = [];
    
      function addUser() {
        if (
          name.trim().length == 0 ||
          email.trim().length == 0 ||
          telefone.trim().length == 0 ||
          fem.trim().length == 0 ||
          mas.trim().length == 0 ||
          other.trim().length == 0 ||
          data.trim().length == 0 ||
          city.trim().length == 0 ||
          estado.trim().length == 0 ||
          endereco.trim().length == 0      
        ) {
          formState = "invalid";
          return;
        }
        let gender = 'fem'
        if (mas) gender = 'men'
        if (other) gender = 'other'
    
        createdUsers = [
          ...createdUsers,
          {
            name: name,
            e_mail: email,
            phone: telefone,
            gender: gender,
            dates: data,
            cidades: city,
            state: estado,
            address: endereco
          },
        ];
      }
    
      function deleteFirst() {
        createdUsers = createdUsers.slice(1);
      }
    
      function deleteLast() {
        createdUsers = createdUsers.slice(0, -1);
      }
      formState = "done";
    
    function changePage(v) {
        page.update(() => v);
    }
    
    </script>
    
    <body>
        <div class="box">
          <form action="">
            <fieldset>
              <legend><b>Fórmulário do Usuario</b></legend>
              <br />
      
              <div class="inputBox">
                <input 
                  type="text" 
                  bind:value={name} 
                  id="nome" 
                  class="inputUser" 
                  required 
                />
                <label for="nome" class="labelInput">Nome completo</label>
              </div>
      
              <br /><br />
      
              <div class="inputBox">
                <input
                  type="text"
                  bind:value={email}            
                  id="email"
                  class="inputUser"
                  required
                />
                <label for="email" class="labelInput">Email</label>
              </div>
      
              <br /><br />
      
              <div class="inputBox">
                <input
                  type="tel"
                  bind:value={telefone}            
                  id="telefone"
                  class="inputUser"
                  required
                />
                <label for="telefone" class="labelInput">Telefone</label>
              </div>
      
              <p>Sexo:</p>        
              <input
                type="radio"
                bind:value={fem}
                id="feminino"      
                required
              />
      
              <label for="feminino">Feminino</label>
              <br />        
              <input
                type="radio"
                bind:value={mas}
                id="masculino" 
                required
              />
      
              <label for="masculino">Masculino</label>
              <br />
              <input 
                type="radio" 
                bind:value={other}
                id="outro"  
                required />
                
              <label for="outro">Outro</label>
              <br /><br />
      
              <label for="data_nascimento"><b>Data de Nascimento:</b></label>
              <input
                type="date"  
                bind:value={data}        
                id="data_nascimento"
                required
              />
      
              <br /><br /><br />
              <div class="inputBox">
                <input
                  type="text"
                  bind:value={city}            
                  id="cidade"
                  class="inputUser"
                  required
                />
                <label for="cidade" class="labelInput">Cidade</label>          
              </div>
      
              <br /><br />
              <div class="inputBox">
                <input
                  type="text"
                  bind:value={estado}            
                  id="estado"
                  class="inputUser"
                  required
                />
                <label for="estado" class="labelInput">Estado</label>
              </div>
      
              <br /><br />
              <div class="inputBox">
                <input
                  type="text"
                  bind:value={endereco}
                  id="endereco"
                  class="inputUser"
                  required
                />
                <label for="endereco" class="labelInput">Endereço</label>
              </div>
      
              <br /><br />       
      
              <button type="button" on:click={addUser}> Add User</button>
              <br /><br /> 
              <button on:click={deleteFirst}> Delete First</button>
              <br /><br /> 
              <button on:click={deleteLast}> Delete Last</button>
      
            </fieldset>
          </form>
        </div>
      </body>
      
      {#if formState === "invalid"}
        <p>Invalid input...</p>
      {:else}
        <p>Please input data...</p>
      {/if}
      
      {#each createdUsers as usuario, i}
        <h2>{i+1}) {usuario.name} </h2>
      
        <Form
          userName={usuario.name}
          userEmail={usuario.e_mail}
          userPhone={usuario.phone}
          userWoman={usuario.woman}
          userMen={usuario.men}
          userOuther={usuario.outros}
          userDate={usuario.dates}
          userCity={usuario.cidades}
          userState={usuario.state}
          userAdress={usuario.address}
          
        />
        
      {:else}
        <p>Pleade start adding usuarios...</p>
      {/each}
      
      
      <style>
       body {
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(
      to right,
      rgb(20, 147, 220),
      rgb(17, 54, 71)
    );
  }
  .box {
    color: white;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(0, 0, 0, 0.6);
    padding: 15px;
    border-radius: 15px;
    width: 20%;
  }
  fieldset {
    border: 3px solid dodgerblue;
  }
  legend {
    border: 1px solid dodgerblue;
    padding: 10px;
    text-align: center;
    background-color: dodgerblue;
    border-radius: 8px;
  }
  .inputBox {
    position: relative;
  }
  .inputUser {
    background: none;
    border: none;
    border-bottom: 1px solid white;
    outline: none;
    color: white;
    font-size: 15px;
    width: 100%;
    letter-spacing: 2px;
  }
  .labelInput {
    position: absolute;
    top: 0px;
    left: 0px;
    pointer-events: none;
    transition: 0.5s;
  }
  .inputUser:focus ~ .labelInput,
  .inputUser:valid ~ .labelInput {
    top: -20px;
    font-size: 12px;
    color: dodgerblue;
  }
  #data_nascimento {
    border: none;
    padding: 8px;
    border-radius: 10px;
    outline: none;
    font-size: 15px;
  }
  #submit {
    background-image: linear-gradient(
      to right,
      rgb(0, 92, 197),
      rgb(90, 20, 220)
    );
    width: 100%;
    border: none;
    padding: 15px;
    color: white;
    font-size: 15px;
    cursor: pointer;
    border-radius: 10px;
  }
  #submit:hover {
    background-image: linear-gradient(
      to right,
      rgb(0, 80, 172),
      rgb(80, 19, 195)
    );
  }

  button {
    background-image: linear-gradient(
      to right,
      rgb(0, 92, 197),
      rgb(90, 20, 220)
    );
    width: 100%;
    border: none;
    padding: 15px;
    color: white;
    font-size: 15px;
    cursor: pointer;
    border-radius: 10px;
}

button:hover,
button:active {
  background-image: linear-gradient(
      to right,
      rgb(0, 80, 172),
      rgb(80, 19, 195)
    );

    
}
      </style>
    
    <button on:click={() => changePage('home')}>Voltar</button>
    