<h1>Vendas</h1>
    
<a href="<?=BASE_URL?>/sales/add"><div class="button">Adicionar Venda</div></a>


<table border="0" width="100%">
    <tr>
        <th>Nome do Cliente</th>
        <th>Data</th>
        <th>Status</th>
        <th>Valor</th>    
        <th>Ações</th>
    </tr>

    <?php foreach($sales_list as $sale_item):?>
        <tr>
     
            <td><?= $sale_item['name']?></td>
            <td><?= date('d/m/Y', strtotime($sale_item['date_sale']));?></td>
            
            <td><?= $statuses[$sale_item['status']]; ?></td>
            <td>R$ <?= number_format($sale_item['total_price'], 2, ',', '.')?></td>
            <td>
                       
            <a href="<?php echo BASE_URL;?>/sales/edit/<?= $sale_item['id'];?>"><div class='button button_small'>Editar</div></a>
                         
            </td>
           
        </tr>
    <?php endforeach;?>    
</table>