<svelte:head>

	<link rel="stylesheet" href="css/cliente.css">

</svelte:head>

<script>
	
	import VoltarMenu from './VoltarMenu.svelte'
	
</script>





    <div class="container">
        <div class="form-image">
            <img src="/images/cliente.svg" alt="">
        </div>
        <div class="form">
            <form action="#">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastrar Instituição</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="#">Entrar</a></button>
                    </div>
					<div class="login-button">
                        <button><a href="#">Voltar</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Nome Intituição</label>
                        <input id="firstname" type="text" name="firstname" placeholder="Digite seu primeiro nome" required>
                    </div>

                    
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Telefone</label>
                        <input id="number" type="tel" name="number" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
                    </div>


                    <div class="input-box">
                        <label for="confirmPassword">Confirme sua Senha</label>
                        <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Digite sua senha novamente" required>
                    </div>

					<div class="input-box">
                        <label for="cpf">CNPJ</label>
                        <input id="cpf" type="cpf" name="cpf" placeholder="Digite seu CPF" required>
                    </div>

					<div class="input-box">
                        <label for="address">Endereço</label>
                        <input id="address" type="Address" name="address" placeholder="Digite seu endereço" required>
                    </div>

                </div>

                
                
               

                <div class="continue-button">
                    <button><a href="#">Continuar</a> </button>
                </div>
            </form>
        </div>
    </div>





<VoltarMenu/>

