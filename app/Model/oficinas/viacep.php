<?php
    function getAddress(){

        if(isset ($_POST['cep_eventos'])){
        $cep = $_POST['cep_eventos'];

        $cep = filtercep($cep);

        if(isCep ($cep)){
            $address = getAddressViaCep($cep);
            if(property_exists($address, 'erro')){
                $address = addressEmpty();
                $address->cep = 'CEP não encontrado!';
            }
        }else{
            $address = addressEmpty();
            $address->cep = 'CEP inválido!';
        }
        }else{
            $address = addressEmpty();
        
    }
    return $address;
}
function addressEmpty(){
    return (object)[
            'cep' => '',
            'logradouro' => '',
            'bairro' => '',
            'localidade' => '',
            'uf' => ''
    ];
}

function filtercep(String $cep):String{
    return (preg_replace('/[^0-9]/','',$cep));
}

function isCep(String $cep):bool{
    return preg_match('/^[0-9]{5}-?[0-9]{3}$/', $cep);
}

function getAddressViaCep(String $cep){
    $url = "https://viacep.com.br/ws/{$cep}/json/";
    return json_decode(file_get_contents($url));
}
?>

<script>
    var teste = document.getElementById("teste");
form.addEventListener("focus", function( event ) {
  event.target.style.background = "pink";
}, true);
form.addEventListener("blur", function( event ) {
  event.target.style.background = "";
}, true);
</script>