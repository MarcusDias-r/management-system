<?php
class purchasesController extends controller{

    public function __construct(){
        parent::__construct();

        $u = new Users();
       
        if($u->isLogged() == false){

            header("Location: ".BASE_URL."/login");
            exit;
        }
    }

    public function index(){

        $data = array();
        $u = new Users();
        $u->setLoggedUser();

        $company = new Companies($u->getCompany());
        $data['company_name'] = $company->getName();
        $data['user_email'] = $u->getEmail();

     

        if($u->hasPermission('purchases_view')){ 
            $p = new Purchases();
            $offset = 0;
            $data['purchases_list'] = $p->purchaseInfo($offset, $u->getCompany());

            $this->loadTemplate("purchases", $data);
        }else{
            header("Location: ".BASE_URL);
        }    
    }

    public function add(){
        $data = array();
        $u = new Users();
        $u->setLoggedUser();

        $company = new Companies($u->getCompany());
        $data['company_name'] = $company->getName();
        $data['user_email'] = $u->getEmail();

     
        if($u->hasPermission('inventory_add')){ 

            if(isset($_POST['name']) && !empty($_POST['name'])){
                $i = new Inventory();

                $name = addslashes($_POST['name']);
                $price = addslashes($_POST['price']);
                $quant = addslashes($_POST['quant']);
                $min_quant = addslashes($_POST['min_quant']);
               
                $price = str_replace ('.', '', $price);
                $price = str_replace (',', '.', $price);//substuição da virgula por ponto para se encaixar no padrão global utilizado no float, um valor numerico com virgula não é capaz de ser inserido no banco de dados.

                $i->add($name, $price, $quant, $min_quant, $u->getCompany(), $u->getId());
                
                ; 
            }
        }

        if($u->hasPermission('purchases_view')){ 
            $p = new Purchases();

            if(isset($_POST['quant']) && !empty($_POST['quant'])){
                
               $quant = $_POST['quant'];
               //verificação de envio 
               //echo'<pre>';print_r($_POST);exit;
                
                $p->addPurchase($u->getCompany(), $u->getId(), $quant);
                header("Location: ".BASE_URL."/purchases/add");
            }

            $this->loadTemplate("purchases_add", $data);
        }else{
            header("Location: ".BASE_URL);
        } 

      
    }

    public function details($id){

        $data = array();
        $u = new Users();
        $u->setLoggedUser();

        $company = new Companies($u->getCompany());
        $data['company_name'] = $company->getName();
        $data['user_email'] = $u->getEmail();

        if($u->hasPermission('purchases_view')){ 
            $p = new Purchases();

            $data['purchases_details'] = $p->purchaseDetails($id, $u->getCompany());

            $this->loadTemplate("purchases_details", $data);
        }else{
            header("Location: ".BASE_URL);
        } 
    }
}
