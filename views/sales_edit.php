<h1>Vendas - Editar</h1>

<strong>Nome do Cliente:</strong></br>
<?= $sales_info['info']['client_name']; ?><br/><br/>
<strong>Data da Venda:</strong></br>
<?= date('d/m/Y',strtotime($sales_info['info']['date_sale'])) ?><br/><br/>

<strong>Total da Venda:</strong></br>
R$ <?=  number_format($sales_info['info']['total_price'], 2, ',', '.');?><br/><br/>


<strong>Status da Venda</strong><br/>

<?php if($permission_edit):?>
    
    <form method="POST">
        <select name="status">
            <?php foreach($statuses as $status_key => $status_value):?>
               
                <option value="<?= $status_key?>"<?= ($status_key == $sales_info['info']['status'])? 'selected="selected"':''; ?>><?= $status_value?></option>
                
            <?php endforeach;?>
        </select><br/><br/>

                
        <input type="submit" value="Salvar"/>
      
    </form>

<?php else:?>

    <?= $statuses[$sales_info['info']['status']]?>

<?php endif; ?>

<br/><br/>
<hr/>

<table border='0' width="100%">
    <tr>
        <th>Nome do Produto</th>
        <th>Quantidade</th>
        <th>Preco Unitário</th>
        <th>Preço Total</th>
    </tr>
    <?php foreach($sales_info['products'] as $productitem):?>
        <tr>
            <td><?= $productitem['name']; ?></td>
            <td><?= $productitem['quant']; ?></td>
            <td>R$ <?= number_format($productitem['sale_price'], 2, ',', '.'); ?></td>
            <td>R$ <?= number_format($productitem['sale_price'] * $productitem['quant'], 2, ',', '.'); ?></td>

       
        </tr>
    <?php endforeach;?>

</table>