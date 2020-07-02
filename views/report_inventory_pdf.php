<style type="text/css">
    th{text-align:left;}
</style>
<h1>Relatório de Vendas</h1>
<fieldset>
  Itens com estoque abaixo do mínimo
</fieldset>
<br/>
<table border="0" width="100%">
               <tr>
                   <th>Nome</th>
                   <th>Preço</th>
                   <th>Quant.</th>    
                   <th>Quant.Min</th>   
                   <th>Diferença</th>
               </tr>
               <?php foreach($inventory_list as $product): ?>
                    <tr>
                        <td><?= $product['name'];?></td>
                        <td>R$ <?= number_format($product['price'], 2, ',','.');?></td>
                        <td width="60"><?= $product['quant'];?></td>
                        <td width="90"><?php  
                        if($product['min_quant'] > $product['quant']){
                            echo '<span style="color:red">'.($product['min_quant']).'</span>';
                        }else{
                        echo $product['min_quant'];
                        }
                        ?></td>
                        <td><?php echo $product['dif'] ;?></td>
                        
                        
                    </tr>
               <?php endforeach; ?>
</table>