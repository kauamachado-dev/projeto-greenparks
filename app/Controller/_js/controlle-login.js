/*##############
Inicio: Função de verificação dos campos do formulário
*/
function verificar(){
	var email = document.getElementById('email_usuario').value;
	var senha = document.getElementById('senha_usuario').value;

	if(!email || !senha){
	 	alert("Campos não preenchidos, favor preenche-los");
	} 		else {
			 	alert("Campos preenchidos com sucesso");
		 	}
}
//Final: Função de verificação dos campos do formulário