<h1>Usuários</h1>
   
<a href="<?=BASE_URL?>/users/add"><div class="button">Adicionar Usuário</div></a>
       <table border="0" width="100%">
            <tr>
                <th>E-mail</th>
                <th>Grupo de Permissões</th>
                <th>Ações</th>    
            </tr>
           
       
    
       <?php foreach($users_list as $us):?>
            <tr>
                <td><?=$us['email'];?></td>      
                <td width="200"><?=$us['name'];?></td>  
                <td width="160">
                    <a href="<?php echo BASE_URL;?>/users/edit/<?= $us['id'];?>"><div class='button button_small'>Editar</div></a>
                    <a href="<?php echo BASE_URL;?>/users/delete/<?= $us['id'];?>" onclick="return confirm('Você esta prestes a excluir este usuário.')"><div class='button button_small'>Excluir</div></a>
                </td>                
            </tr>
        
    <?php endforeach;?>
    </table>       
    </div> 