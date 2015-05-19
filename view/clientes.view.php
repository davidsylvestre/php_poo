         <div class="page-header">
            <h1>Home</h1>
         </div>
         <table id="tableCliente" class="table table-hover table-bordered">
             <thead>
                 <tr>
                     <th>Nome</th>
                     <th>CPF</th>
                     <th>Endereço</th>
                     <th>Aniversário</th>
                 </tr>
             </thead>
             <tbody>
             <?php
             foreach(getClientes() as $cliente){
                 echo '<tr>'.PHP_EOL;
                 echo sprintf('<td><a href="cliente?id=%s">%s</a></td>'.PHP_EOL, $cliente->id, $cliente->id);
                 echo sprintf('<td>%s</td>'.PHP_EOL, $cliente->nome);
                 echo sprintf('<td>%s</td>'.PHP_EOL, $cliente->cpf);
                 echo sprintf('<td>%s</td>'.PHP_EOL, $cliente->endereco);
                 echo sprintf('<td>%s</td>'.PHP_EOL, $cliente->dataNascimento->format('d/m/Y'));
                 echo '</tr>'.PHP_EOL;

             }

             ?>
             </tbody>
         </table>
         <script>
             $(document).ready(function(){
                 $(function(){
                     $("#tableCliente").tablesorter();
                 });
             });
         </script>