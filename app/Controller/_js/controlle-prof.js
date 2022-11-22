/*##############
Inicio: Função de verificação dos campos do formulário
*/
function verificar(){
	var nome = document.getElementById('nome').value;
	var sobrenome = document.getElementById('sobrenome').value;
	var nasc = document.getElementById('nasc').value;
	var cpf = document.getElementById('cpf').value;
	var fone = document.getElementById('fone').value;
	var email = document.getElementById('email').value;
	var senha = document.getElementById('senha').value;


	if(!nome || !sobrenome || !nasc || !cpf || !email || !senha || !fone){
	 	alert("Campos não preenchidos, favor preenche-los");
	} 		else {
			 	alert("Campos preenchidos com sucesso");
		 	}
}
//Final: Função de verificação dos campos do formulário