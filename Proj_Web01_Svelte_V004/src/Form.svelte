<script>

    export let userName;
    export let userEmail;
    export let userPhone;
    export let userWoman;
    export let userMen;
    export let userOuther;
    export let userDate;
    export let userCity;
    export let userState;
    export let userAdress;
  
  </script>
  
  <div class="box">
    <form action="">
      <fieldset>
        <legend><b>Fórmulário de Usuario</b></legend>
        <br />
        <div class="inputBox">
          <label> <b>Nome completo:</b> {userName} </label>
        </div>
        <br /><br />
        <div class="inputBox">
          <label><b>Email:</b> {userEmail} </label>
        </div>
        <br /><br />
        <div class="inputBox">
          <label><b>Email:</b> {userPhone} </label>
        </div>
  
        <p>Sexo:</p>      
        <label>{userWoman} </label>
        <br />      
        <label>{userMen} </label>
        <br />      
        <label>{userOuther} </label>
        <br /><br />
  
        
        <label><b>Data de Nascimento:</b> {userDate} </label>      
        <br /><br /><br />
  
        <div class="inputBox">        
          <label><b>Cidade:</b> {userCity} </label>
        </div>
  
        <br /><br />
        <div class="inputBox">        
          <label><b>Estado:</b> {userState} </label>
        </div>
  
        <br /><br />
        <div class="inputBox">        
          <label><b>Endereço:</b> {userAdress} </label>
        </div>
        <br /><br />      
      </fieldset>
    </form>
  </div>
  
  <style>
    .box {
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26);
      max-width: 30rem;
      border-radius: 5px;
      margin: 1rem 0;
      background: rgb(247, 243, 243);
    }
  
  </style>
  