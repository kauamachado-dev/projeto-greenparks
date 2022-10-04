/*##############
Inicio: Função de verificação dos campos do formulário
*/
function verificar(){
	var nome = document.getElementById('nome').value;
	var genero = document.getElementById('genero').value;
	var dtnas = document.getElementById('data').value;
	var cpf = document.getElementById('cpf').value;
	var fone = document.getElementById('fone').value;
	var email = document.getElementById('email').value;
	var senha = document.getElementById('senha').value;
	var cep = document.getElementById('cep').value;
    var endereco = document.getElementById('bairro').value;
	var bairro = document.getElementById('bairro').value;
	var numero = document.getElementById('numero').value;


	if(!nome || !genero || !dtnas || !cpf || !email || !senha || !fone || !cep || !endereco || !bairro || !numero){
	 	alert("Campos não preenchidos, favor preenche-los");
	} 		else {
			 	alert("Campos preenchidos com sucesso");
		 	}
}
//Final: Função de verificação dos campos do formulário