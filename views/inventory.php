<h1>Estoque</h1>

<?php if($add_permission):?>
    <a href="<?=BASE_URL;?>/inventory/add"><div class="button">Adicionar Produto</div></a>
   <?php endif;?>  

<input type="text" id="busca" data-type="search_inventory"/>

<table border="0" width="100%">
               <tr>
                   <th>Nome</th>
                   <th>Preço</th>
                   <th>Quant.</th>    
                   <th>Quant.Min</th>   
                   <th>Ações</th>   
               </tr>
               <?php foreach($inventory_list as $product): ?>
                    <tr>
                        <td><?= $product['name'];?></td>
                        <td>R$ <?= number_format($product['price'], 2, ',','.');?></td>
                        <td width="60" style = "text-align:center"><?= $product['quant'];?></td>
                        <td width="90" style = "text-align:center"><?php  
                        if($product['min_quant'] > $product['quant']){
                            echo '<span style="color:red">'.($product['min_quant']).'</span>';
                        }else{
                        echo $product['min_quant'];
                        }
                        ?></td>

                        <td width="160">
                            
                           <a href="<?php echo BASE_URL;?>/inventory/edit/<?= $product['id'];?>"><div class='button button_small'>Editar</div></a>
                           <a href="<?php echo BASE_URL;?>/inventory/delete/<?= $product['id'];?>" onclick="return confirm('Você esta prestes a excluir esse item.')"><div class='button button_small'>Excluir</div></a>
                        
                        </td>
                    </tr>
               <?php endforeach; ?>
</table>
