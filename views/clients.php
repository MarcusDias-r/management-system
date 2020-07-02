<h1>Clientes</h1>
 
   <?php if($edit_permission):?>
    <a href="<?=BASE_URL;?>/clients/add"><div class="button">Adicionar Usuário</div></a>
   <?php endif;?>  

   <input type="text" id="busca" data-type="search_clients"/>

          <table border="0" width="100%">
               <tr>
                   <th>Nome</th>
                   <th>Telefone</th>
                   <th>Cidade</th>    
                   <th>Estrelas</th>   
                   <th>Ações</th>   
               </tr>
              
          <?php foreach($clients_list as $c):?>
          <tr>
            <td><?= $c['name']; ?></td>
            <td width="100"><?= $c['phone']; ?></td>
            <td width="150"><?= $c['address_city']; ?></td>
            <td width="70" style= "text-align:center"><?= $c['stars']; ?></td>
            <td width="160"style= "text-align:center">
              <?php if($edit_permission):?>
               
                <a href="<?php echo BASE_URL;?>/clients/edit/<?= $c['id'];?>"><div class='button button_small'>Editar</div></a>
                <a href="<?php echo BASE_URL;?>/clients/delete/<?= $c['id'];?>" onclick="return confirm('Você esta prestes a excluir este cliente.')"><div class='button button_small'>Excluir</div></a>     
            
              <?php else:?>
                <a href="<?php echo BASE_URL;?>/clients/view/<?= $c['id'];?>"><div class='button button_small'>Visualizar</div> </a>
              <?php endif;?>

            </td>
            
          </tr>
          <?php endforeach;?>
                
       </table> 

       <div class="pagination">
       <?php for($q=1; $q<=$p_count; $q++): ?> 
       
        <div class="extBtn <?= ($q==$p)?'pag_ativo':'';?>">
        <a href="<?=BASE_URL;?>/clients?p=<?= $q;?>"><div class="pag_item <?= ($q==$p)?'pag_ativo':'';?>"><?php echo $q; ?></div></a>
        </div>

       <?php endfor;?>   


       <div style="clear:both"></div>
       </div> 
       </div>  