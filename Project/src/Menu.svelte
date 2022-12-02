<svelte:head>
	<link rel="stylesheet" href="css/menu.css">
</svelte:head>

<script>

	import { TrocarEstadoPag } from './Estado.js'

</script>
<body>
	<center>


<section>
<h1>
	Tela de inicio Psico mais 
</h1>

</section>		


<br>
<br>
<br>
<br>
<br>
<br>
<button>
<div class='menu' on:click={() => TrocarEstadoPag('cliente')}>
	Cliente
</div>
</button>
<br>
<button>
<div class='menu' on:click={() => TrocarEstadoPag('profissional')}>
	Profissional
</div>
</button>
<br>


</center>
</body>



<style>
	

	div{
   background: #315C69;
   background-image: -webkit-linear-gradient(top, #315C69, #1E62D0);
   background-image: -moz-linear-gradient(top, #315C69, #1E62D0);
   background-image: -ms-linear-gradient(top, #315C69, #1E62D0);
   background-image: -o-linear-gradient(top, #315C69, #1E62D0);
   background-image: -webkit-gradient(to bottom, #315C69, #1E62D0);
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;
   height: 0;
   line-height: 0;
   font-family: Georgia;
   width: 145px;
   font-size: 20px;
   font-weight: 100;
   padding: 20px;
   -webkit-box-shadow: 1px 1px 20px 0 #315C69;
   -moz-box-shadow: 1px 1px 20px 0 #315C69;
   box-shadow: 1px 1px 20px 0 #315C69;
   text-shadow: 2px 3px 0 #315C69;
   border: solid #315C69 1px;
   text-decoration: none;
   display: inline-block;
   cursor: pointer;
   text-align: center;
}

div {
   border: solid #337FED 1px;
   background: #1E62D0;
   background-image: -webkit-linear-gradient(top, #1E62D0, #3D94F6);
   background-image: -moz-linear-gradient(top, #1E62D0, #3D94F6);
   background-image: -ms-linear-gradient(top, #1E62D0, #3D94F6);
   background-image: -o-linear-gradient(top, #1E62D0, #3D94F6);
   background-image: -webkit-gradient(to bottom, #1E62D0, #3D94F6);
   -webkit-border-radius: 21px;
   -moz-border-radius: 21px;
   border-radius: 21px;
   text-decoration: none;
}
	
	</style>