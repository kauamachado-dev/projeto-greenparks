/*##############
Inicio: Função de verificação dos campos do formulário
*/
function verificar(){
	var email = document.getElementById('email').value;
	var senha = document.getElementById('senha').value;

	if(!email || !senha){
	 	alert("Campos não preenchidos, favor preenche-los");
	} 		else {
			 	alert("Campos preenchidos com sucesso");
		 	}
}
//Final: Função de verificação dos campos do formulário