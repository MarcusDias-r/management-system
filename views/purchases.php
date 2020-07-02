<h1>Compras</h1>
<a href="<?=BASE_URL?>/purchases/add"><div class="button">Adicionar Compra</div></a>

<table border="0" width="100%">
    <tr>
        <th>Realizada por:</th>
        <th>Data</th>
        <th>Valor</th>    
        <th>Ações</th>
    </tr>

    <?php foreach($purchases_list as $purchase_item):?>
        <tr>
            <td><?= $purchase_item['userEmail']?></td>
            <td><?= date('d/m/Y', strtotime($purchase_item['date_purchase']));?></td>
            <td>R$ <?= number_format($purchase_item['total_price'], 2,',', '.')?></td>
            <td>
                <a href="<?= BASE_URL;?>/purchases/details/<?= $purchase_item['id'];?>"><button>Detalhes</button></a>
            </td>
           
        </tr>
    <?php endforeach;?>    
</table>









