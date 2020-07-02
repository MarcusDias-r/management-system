<html>
    <head>
        <title>Painel _ <?php echo $viewData['company_name']?> </title>
        <link href="<?php echo BASE_URL;?>/assets/css/template.css" rel="stylesheet"/>
        <script type = "text/javascript" src = "<?=BASE_URL;?>/assets/js/jquery.js"></script>
        <script type = "text/javascript">var BASE_URL= '<?php echo BASE_URL;?>';</script>
        
        <script type = "text/javascript" src = "<?=BASE_URL;?>/assets/js/script.js"></script>
      
        
    </head>
    <body>
        <div class="leftmenu">
            <div class="company_name">
                <?= $viewData['company_name']?>
            </div>
            <div class="menuarea">
                <ul>
                    <li><a href="<?=BASE_URL;?>">Home</a></li>
                    <li><a href="<?=BASE_URL;?>/permissions">Permissões</a></li>
                    <li><a href="<?=BASE_URL;?>/users">Usuários</a></li>
                    <li><a href="<?=BASE_URL;?>/clients">Clientes</a></li>
                    <li><a href="<?=BASE_URL;?>/inventory">Estoque</a></li>
                    <li><a href="<?=BASE_URL;?>/sales">Vendas</a></li>
                    <li><a href="<?=BASE_URL;?>/purchases">Compras</a></li>
                    <li><a href="<?=BASE_URL;?>/report">Relatórios</a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="top">
            
                <div class="top_right"><a href="<?=BASE_URL.'/login/logout';?>">Sair</a></div>
                <div class="top_right"><?= $viewData['user_email']; ?></div>
               
            </div>
            
            <div class="area">
                    <?php $this->loadViewInTemplate($viewName,$viewData);?>
                </div>
        </div>



        
    </body>
</html>