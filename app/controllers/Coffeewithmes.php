<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Software Development Wing <Penta Head Private Ltd.>
 */
class Coffeewithmes extends Controller{

    public function __construct() {
       // echo 'Agents construct';
        $this->coffeewithme = $this->model('coffeewithme');
        $todaysDate = null;
    }

    public function adminLogmeIn()
    {
        $data=$this->getAllRecords();
        $this->view('admin/dashboard',$data);
    } 

    public function getAllRecords(){
        $data1 = $this->coffeewithme->productcount();
        $data2 = $this->coffeewithme->orderCount();
        $data3 = $this->coffeewithme->usercount();
        $data['product_count'] = $data1->count;
        $data['order_count'] = $data2->count;
        $data['user_count'] = $data3->count;
        return $data;
    }
    public function logmein()
    {
       
        $this->view('coffeewithme/main');
    } 

    public function adminnavform(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['home'])){
               
                $data=$this->getAllRecords();
                $this->view('admin/dashboard',$data);
            }
            else if(isset($_POST['courses'])){
                $data=$this->interior->getCourseDetails();
                $this->view('admission/course_detail',$data);
            }
           
        }
    }
    
    public function navform(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['home'])){
                $this->view('coffeewithme/main');
            }
            else if(isset($_POST['gallery'])){
                $this->view('coffeewithme/gallery');
            }
            else if(isset($_POST['tea'])){
                $category = '1';
                $data=$this->coffeewithme->getmenuItems($category);
                $this->view('coffeewithme/tea',$data);
            }
            else if(isset($_POST['coffee'])){
                $category = '2';
                $data=$this->coffeewithme->getmenuItems($category);
                $this->view('coffeewithme/coffee',$data);
            }
            else if(isset($_POST['login'])){
                $this->view('coffeewithme/login');
            }
            else if(isset($_POST['cart'])){
                $user_id= $_SESSION['userid'];
                $data = $this->coffeewithme->getCartItem($user_id);
                $this->view('coffeewithme/cart',$data,$adata);
            }
           
        }
    }

    public function agentsLogin(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data['message'] = null;
            if(isset($_POST['login'])){
                $data = [
                    'userid' => trim($_POST['email']),
                    'password' => trim($_POST['password'])
                ];
                $matched = $this->coffeewithme->login_verification($data);
                echo"werfgvc".$matched;
                if($matched == true){
                    $this->createUserSession($data['userid']);
                    $username = $_SESSION['name']; 
                    $this->view('coffeewithme/main');       
                }
                else{
                  
                    $data['message']= " Invalid Password  !! ";
                    $this->view('coffeewithme/login', $data);
                }
            }
        }
    }

    public function userRegistration(){
        $data['message'] = null;
        echo"werfgbv";
        if(isset($_POST['register']))
        {
            $name =  trim($_POST['name']);
            $phone_no =  trim($_POST['phone']);
            $email =  trim($_POST['email']);
            $password =  trim($_POST['password']);
            
            $createTs = $this->getCurrentTs();
            $created_by = 'user';
          
            $match = $this->coffeewithme->email_verification($email);
            if($match == true)
            {
                $data['message']= " User already Registered please Login  !! ";  
            }
            else{

                $userId = $this->coffeewithme->insertUserData($name,$phone_no,$email,$createTs,$created_by);
                echo"sdfghj".$userId;
                $log = $this->coffeewithme->insertIntoLogin($userId,$email,$password,$createTs,$created_by);
                $data['message']= " User Register Successfully !! ";
                
            }
            $this->view('coffeewithme/login',$data); 
        }
    }

    public function main(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['more_services'])){
                $this->view('interior/services');
            }
           
            else if(isset($_POST['project'])){
                $this->view('interior/project');
            }
        
           
        }
    }

    public function admindashboard(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['addproduct'])){
                $data=$this->coffeewithme->getCategory(); 
                $this->view('admin/addproduct',$data);
            }
            else if(isset($_POST['seeproduct'])){
                $data=$this->coffeewithme->getProductList(); 
                $this->view('admin/productlist',$data);
            }
            else if(isset($_POST['user'])){
                $data=$this->coffeewithme->getUserDetails(); 
                $this->view('admin/user',$data);
            }
            else if(isset($_POST['order'])){
                $data=$this->coffeewithme->getOrderList(); 
                $this->view('admin/order',$data);
            }
            else if(isset($_POST['addcategory'])){
                $data=$this->coffeewithme->getProductList(); 
                $this->view('admin/addcategory',$data);
            }
            else if(isset($_POST['low'])){
                $data=$this->coffeewithme->lowproduct(); 
                $this->view('admin/productlist',$data);
            }
        } 
    }
   
    public function addproduct(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['add_product'])){
                $adata['message'] = 0;
                $productname =  trim($_POST['productname']);
                $category =  trim($_POST['category']);
                $quantity  =  trim($_POST['quantity']);
                $price =  trim($_POST['price']);
                $createdTs =$this->getCurrentTs();
                $createdBy = 'admin';
                $lastUpdatedTs = $this->getCurrentTs();
                $lastUpdatedBy='admin';
                $targetDir = "product_img/"; 
                $allowTypes = array('jpg','png','jpeg');       
                $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
                $image = array_filter($_FILES['image']['name']); 
                if(!empty($image)){ 
                    foreach($_FILES['image']['name'] as $key=>$val){ 
                         // File upload path 
                         $image = basename($_FILES['image']['name'][$key]); 
                         $targetFilePath = $targetDir . $image; 
                          
                         // Check whether file type is valid 
                         $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                         if(in_array($fileType, $allowTypes)){ 
                             // Upload file to server 
                             if(move_uploaded_file($_FILES["image"]["tmp_name"][$key], $targetFilePath)){ 
                                 // Image db insert sql 
                                 $insertValuesSQL .= "('".$image."', NOW()),"; 
                                 $id = $this->coffeewithme->insertproduct($productname,$category,$quantity,$price,$image,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy);
                                 if($id != null){
                                    $adata['message']  = "product is added Successfully !!" ;
                                }
                                else{
                                     $adata['message']="Failed to add data, please try again !!";
                                } 
                            }
                        } 
                    } 
                }
                $data=$this->coffeewithme->getCategory(); 
                $this->view('admin/addproduct',$data,$adata);
            }
        } 
    }
    
    public function productProcessToNextStep(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $totalcount = trim($_POST['totalcount']);
            // $userId = $_SESSION['userid'];
            for ($count=0; $count<$totalcount; $count++){
                if(isset($_POST['cart'.$count])){
                    $product_name = trim($_POST['name'.$count]);
                    $product_id = trim($_POST['id'.$count]); 
                    $price = trim($_POST['price'.$count]);
                    $quantity = trim($_POST['quantity'.$count]);
                  
                    $image1 = trim($_POST['image'.$count]);
                    $number = '1';
                    $totalprice = trim($_POST['price'.$count]);
                    $user_id =  $_SESSION['userid'];
                    $createdBy= $_SESSION['name'];
                    $createdTs=$this->getCurrentTs();
                    $lastUpdatedBy= $_SESSION['name'];
                    $lastUpdatedTs=$this->getCurrentTs();
                    $check = $this->coffeewithme->checkuserExitInCart($user_id);
                    // print_r($check);
                    if($check->user_id == null){
                        $cartId = $this->coffeewithme->insertIntoCart($price,$user_id,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy);
                        $cartLine = $this->coffeewithme->insertIntoCartline($cartId,$product_id,$quantity,$price,$number,$product_name,$totalprice,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy);
                    }
                    else{
                        $duplicate = $this->coffeewithme->checkProductExit($check->cart_id,$product_id);
                        // print_r($duplicate);
                        if($duplicate->id == null){
                            $cartId = $this->coffeewithme->updateItems($check->cart_id,$price,$lastUpdatedTs,$lastUpdatedBy);
                            $cartLine = $this->coffeewithme->insertIntoCartline($check->cart_id,$product_id,$quantity,$price,$number,$product_name,$totalprice,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy);
                        }
                       else{
                            $cartId = $this->coffeewithme->updateItems($check->cart_id,$price,$lastUpdatedTs,$lastUpdatedBy,);
                            $updateitem = $this->coffeewithme->updateItemInCartLine($number,$price,$product_id,$check->cart_id,$lastUpdatedTs,$lastUpdatedBy);
                            
                       }
                    }
                    if($cartId != null && $cartLine != null || $updateitem != null){
                        $adata['message'] = "Product is added to cart Successfully !!" ;
                    }
                    
                    $data = $this->coffeewithme->getCartItem($user_id);
                   
                    $this->view('coffeewithme/cart',$data,$adata);
                }
    
                else if(isset($_POST['buy'.$count])){
                    $product_name = trim($_POST['name'.$count]);
                    $product_id = trim($_POST['id'.$count]); 
                    $price = trim($_POST['price'.$count]);
                    $quantity = trim($_POST['quantity'.$count]);
                  
                    $image1 = trim($_POST['image'.$count]);
                    $number = '1';
                    $totalprice = trim($_POST['price'.$count]);
                    $user_id =  $_SESSION['userid'];
                    $createdBy= $_SESSION['name'];
                    $createdTs=$this->getCurrentTs();
                    $lastUpdatedBy= $_SESSION['name'];
                    $lastUpdatedTs=$this->getCurrentTs();
                    $check = $this->coffeewithme->checkuserExitInCart($user_id);
                    // print_r($check);
                    if($check->user_id == null){
                        $cartId = $this->coffeewithme->insertIntoCart($price,$user_id,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy);
                        $cartLine = $this->coffeewithme->insertIntoCartline($cartId,$product_id,$quantity,$price,$number,$product_name,$totalprice,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy);
                    }
                    else{
                        $duplicate = $this->coffeewithme->checkProductExit($check->cart_id,$product_id);
                        // print_r($duplicate);
                        if($duplicate->id == null){
                            $cartId = $this->coffeewithme->updateItems($check->cart_id,$price,$lastUpdatedTs,$lastUpdatedBy);
                            $cartLine = $this->coffeewithme->insertIntoCartline($check->cart_id,$product_id,$quantity,$price,$number,$product_name,$totalprice,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy);
                        }
                       else{
                            $cartId = $this->coffeewithme->updateItems($check->cart_id,$price,$lastUpdatedTs,$lastUpdatedBy,);
                            $updateitem = $this->coffeewithme->updateItemInCartLine($number,$price,$product_id,$check->cart_id,$lastUpdatedTs,$lastUpdatedBy);
                            
                       }
                    }
                    if($cartId != null && $cartLine != null || $updateitem != null){
                        $adata['message'] = "Product is added to cart Successfully !!" ;
                    }
                    
                    $data = $this->coffeewithme->getCartItem($user_id);
                   
                    $this->view('coffeewithme/cart',$data,$adata);
                }
                
                
    
                }
               
            }
        }
    

        public function removeformcart(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $adata['message'] = null;
               
                $totalcount = trim($_POST['totalcount']);
                for ($count=0; $count<$totalcount; $count++){
                    if(isset($_POST['remove'.$count])){
                    $cart_id = trim($_POST['cart_id'.$count]);
                    $product_id = trim($_POST['product_id'.$count]);
                    $lastUpdatedBy= $_SESSION['name'];
                    $lastUpdatedTs=$this->getCurrentTs();
                    $price = $this->coffeewithme->getPrice($cart_id,$product_id);
                    $CartPrice =  $this->coffeewithme->updateCartPrice($cart_id,$price->total_price,$lastUpdatedTs,$lastUpdatedBy);
                    $checkprice = $this->coffeewithme->getPriceIfExit($cart_id);
                    if($checkprice->grand_total == null || $checkprice->grand_total == 0){
                        $deleteCart = $this->coffeewithme->deleteItem($cart_id);
                    }
                    $delete  = $this->coffeewithme->deleteCartItem($cart_id,$product_id);
                    if($deleteCart  == true || $delete == true){
                        $adata['message'] = "Product is removed from cart !!" ;
                    }
                    $user_id= $_SESSION['userid'];
                    $data = $this->coffeewithme->getCartItem($user_id);
                    $this->view('coffeewithme/cart',$data,$adata);
                    
                      
                    }
                    if(isset($_POST['purchase'])){
                        $cartId = trim($_POST['cart_id'.$count]);
                        $data = $this->coffeewithme->getCartItemForOrder($cartId);
                        $this->view('coffeewithme/order',$data);
                    }
                   
                   
                }
            }
        }


        public function placeorder(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                if(isset($_POST['cancel'])){
                    $user_id= $_SESSION['userid'];
                    $data = $this->coffeewithme->getCartItem($user_id);
                    $this->view('coffeewithme/cart',$data,$adata);
                }
                else if(isset($_POST['order'])){
                    $cartId = trim($_POST['cartId']);
                    $first_name=trim($_POST['first_name']);
                    $last_name=trim($_POST['last_name']);
                    $email =trim($_POST['email']);
                    $phone =trim($_POST['phone']);
                    $pincode=trim($_POST['pin']);
                    $address_line_1=trim($_POST['street']);
                    $address_line_2=trim($_POST['appartment']);
                    $city=trim($_POST['city']);
                    $state=trim($_POST['state']);
                    $country=trim($_POST['country']);
                    $createdBy= $_SESSION['name'];
                    $createdTs=$this->getCurrentTs();
                    $lastUpdatedBy= $_SESSION['name'];
                    $lastUpdatedTs=$this->getCurrentTs();
                    $cart =$this->coffeewithme->getCartItemForOrder($cartId);
                    $order = $this->coffeewithme->inserIntoOrder($cart->cart_id,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy);
                    $orderLine = $this->coffeewithme->insertIntoOrderLine($order,$cart->cart_id,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy);
                    echo"gh".$orderLine;
                    $id=$this->coffeewithme->makeOrder($order,$first_name,$last_name,$email,$phone,$pincode,$address_line_1,$address_line_2,$city,$state,$country,$createdBy,$createdTs,$lastUpdatedBy,$lastUpdatedTs,$cart->user_id); 

                    $data = $this->coffeewithme->getAllProductByCartId($cart->cart_id);
                     
                    foreach($data as $dataline){ 
                        $product_id = $dataline->product_id;
                        
                        $number = $dataline->number;
                        $productUpdate = $this->coffeewithme->updateProductStock($product_id,$number,$lastUpdatedBy,$lastUpdatedTs);
                    }
                    
                    // delete
                    $deleteCart = $this->coffeewithme->deleteItem($cart->cart_id);
                    $deleteCartLine = $this->coffeewithme->deleteCartItemFromOder($cart->cart_id);
                 
                    $this->view('coffeewithme/ordersucess');
                }
            
               
            }
        }

        public function stockDeatils(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $adata['message'] = null;
               
                $totalcount = trim($_POST['totalcount']);
                for ($count=0; $count<$totalcount; $count++){
                    if(isset($_POST['update'.$count])){
                    $product_id = trim($_POST['product_id'.$count]);
                    $stock = trim($_POST['stock'.$count]);
                    $lastUpdatedBy= 'admin';
                    $lastUpdatedTs=$this->getCurrentTs();
                    $update = $this->coffeewithme->updateStockValue($product_id,$stock,$lastUpdatedBy,$lastUpdatedTs);
                   
                    if($update != null){
                       $adata['message'] = 'quantity Updated Successfully';
                    }
                    $data=$this->coffeewithme->getProductList(); 
                    $this->view('admin/productlist',$data,$adata);  
                    }
                    else if(isset($_POST['remove'.$count])){
                        $product_id = trim($_POST['product_id'.$count]);
                        $delete = $this->coffeewithme->deleteproduct($product_id);
                        if($delete == true){
                            $adata['message'] = 'Product Deleted Successfully';
                        }
                        $data=$this->coffeewithme->getProductList(); 
                        $this->view('admin/productlist',$data,$adata);  
                    }
                   
                   
                }
            }
        }

    // -------------------------------------session------------------------------------------

    public function createUserSession($user){
        session_start();
         // Taking current system Time
         $_SESSION['start'] = time(); 
  
         // Destroying session after 1 minute
         $_SESSION['expire'] = $_SESSION['start'] + (1 * 240) ; 
       // echo " in session: userid is ". $user;
       $_SESSION['loggedin'] = "YES";
       $_SESSION['userid'] = $user;
       $data = $this->coffeewithme->getUserName($user);
       $_SESSION['name'] = $data->name;
       $_SESSION['userid'] = $data->user_id;
       return $user;
    }
    
    public function logout(){

        unset($_SESSION['userid']);
        unset($_SESSION['loggedin']);
        session_destroy();
        // redirect('users/login');
    }
}