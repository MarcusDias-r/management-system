<h1>Compras - Detalhes</h1>

<strong>Compra feita por:</strong></br>
<?= $purchases_details['info']['userB']; ?><br/><br/>
<strong>Data da Venda:</strong></br>
<?= date('d/m/Y',strtotime($purchases_details['info']['date_purchase'])) ?><br/><br/>


<strong>Total da Venda:</strong></br>
R$ <?=  number_format($purchases_details['info']['total_price'], 2, ',', '.');?><br/><br/>

<br/><br/>
<hr/>

<table border='0' width="100%">
    <tr>
        <th>Nome do Produto</th>
        <th>Quantidade</th>
        <th>Preco Unitário</th>
        <th>Preço Total</th>
    </tr>
    <?php foreach($purchases_details['products'] as $productitem):?>
        <tr>
            <td><?= $productitem['name']; ?></td>
            <td><?= $productitem['quant']; ?></td>
            <td>R$ <?= number_format($productitem['purchase_price'], 2, ',', '.'); ?></td>
            <td>R$ <?= number_format($productitem['purchase_price'] * $productitem['quant'], 2, ',', '.'); ?></td>

       
        </tr>
    <?php endforeach;?>

</table>