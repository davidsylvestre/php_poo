<?php

$retorno = null;

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $clientes = getClientes();

    $retorno = array_values(array_filter(
        $clientes,
        function($cliente) use($id){
            return $cliente->id == $id;
        }
    ));
}

if((isset($retorno)) and !(empty($retorno))){
    $form = '<form action="">
              <div class="formgroup">
                  <label for="">ID</label>
                  <input type="text" class="form-control" value="%s" readonly>
              </div>
              <div class="formgroup">
                  <label for="">Nome</label>
                  <input type="text" class="form-control" value="%s" readonly>
              </div>
              <div class="formgroup">
                  <label for="">CPF</label>
                  <input type="text" class="form-control" value="%s" readonly>
              </div>
              <div class="formgroup">
                  <label for="">Endereço</label>
                  <input type="text" class="form-control" value="%s" readonly>
              </div>
              <div class="formgroup">
                  <label for="">Aniversário</label>
                  <input type="text" class="form-control" value="%s" readonly>
              </div>
          </form>';

    echo sprintf(
        $form,
        $retorno[0]->id,
        $retorno[0]->nome,
        $retorno[0]->cpf,
        $retorno[0]->endereco,
        $retorno[0]->dataNascimento->format('d/m/Y')
    );
}else{
    echo 'no exziste';
}