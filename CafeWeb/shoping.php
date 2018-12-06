<?php 
 	session_start();
	
 if(isset($_POST['totalcart'])){
  	 if(isset($_SESSION['name'])){
  			$cartOutput="<table>";
  			$total=0;
   			 for($i=0;$i<count($_SESSION['name']);$i++) {
   			 	$price = str_replace(",", "", substr($_SESSION['price'][$i],0,6));;
   			 	$qty  = $_SESSION['quantity'][$i];
   			 	$size =$_SESSION['size'][$i];
   			 	if($size == "size vừa(600ml)"){
   			 		$price += 7000;
   			 	}

   			  $subtotal = ($price * $qty);
				  $total = ($total + $subtotal);
    										$cartOutput.='<tr>
                                                <td id="total"><button type="submit" id="quantity" disabled="true">'.$qty.'</button></td>                                         
                                                <td id="prname"><b>'.$_SESSION['name'][$i].'</b><br>
                                                   <span>'.$size.'</span></td>                                          
                                                
                                              </tr>
                                              <tr>
                                              ';
                                              if($_SESSION['note'][$i] !=""){
                                              	$cartOutput.='<td id="prnote">Ghi chú:  '.$_SESSION['note'][$i].' </td>';
                                              }

                                              $cartOutput.='<td id="price">Đơn giá:  '.number_format($subtotal,-2).' <i>đ</i> </td>
                                              </tr>';
                                            
   				}				
   					$cartOutput.= ' </table>
                                       <div class="row mb-20">
                                            <ul class="cart-order">
                                                   <li> <p>Tổng cộng: <span id="pr-count">'.count($_SESSION['name']).'</span> Món</p></li> 
                                            </ul> 
                                            <ul class="cart-order">
                                                  <li >Tổng tiền : <span id="pr-sum">'.number_format($total,-2).'</span><i>đ</i></li>
                                            </ul>  
                                        </div>    ';
   				echo $cartOutput;
   			
    
}
else {
	echo'   					<div class="row mb-20">
                                            <ul class="cart-order">
                                                   <li> <p>Tổng cộng: <span id="pr-count">0</span> Món</p></li> 
                                            </ul> 
                                            <ul class="cart-order">
                                                  <li >Tổng tiền : <span id="pr-sum">0</span><i>đ</i></li>
                                            </ul>  
                                        </div> ';
			}
	
  }



  

  if(isset($_POST['item_name'])){
    $_SESSION['name'][]=$_POST['item_name'];
    $_SESSION['price'][]=$_POST['item_price'];
    $_SESSION['size'][]=$_POST['item_size'];
    $_SESSION['quantity'][]=$_POST['item_quantity'];
    if($_POST['item_note']!=""){
    	$_SESSION['note'][]=$_POST['item_note'];
    }else{
    	$_SESSION['note'][]="";
    }
    if(isset($_SESSION['name'])){
  			$cartOutput="<table>";
  			$total=0;
   			 for($i=0;$i<count($_SESSION['name']);$i++) {
   			 	$price = str_replace(",", "", substr($_SESSION['price'][$i],0,6));;
   			 	$qty  = $_SESSION['quantity'][$i];
   			 	$size =$_SESSION['size'][$i];
   			 	if($size == "size vừa(600ml)"){
   			 		$price += 7000;
   			 	}

   			 	  $subtotal = ($price * $qty);
				  $total = ($total + $subtotal);
    										$cartOutput.='  <tr>
                                                <td id="total"><button type="submit" id="quantity" disabled="true">'.$qty.'</button></td>                                         
                                                <td id="prname"><b>'.$_SESSION['name'][$i].'</b><br>
                                                   <span>'.$size.'</span></td>                                          
                                                
                                              </tr>
                                              <tr>
                                              ';
                                              if($_SESSION['note'][$i] !=""){
                                              	$cartOutput.='<td id="prnote">Ghi chú:  '.$_SESSION['note'][$i].' </td>';
                                              }

                                              $cartOutput.='<td id="price">Đơn giá:  '.number_format($subtotal,-2).' <i>đ</i> </td>
                                              </tr>';
                                            
   				}				
   					$cartOutput.= ' </table>
                                       <div class="row mb-20">
                                            <ul class="cart-order">
                                                   <li> <p>Tổng cộng: <span id="pr-count">'.count($_SESSION['name']).'</span> Món</p></li> 
                                            </ul> 
                                            <ul class="cart-order">
                                                  <li >Tổng tiền : <span id="pr-sum">'.number_format($total,-2).'</span><i>đ</i></li>
                                            </ul>  
                                        </div>    ';
   				echo $cartOutput;
   			
    
}
else {
	echo'   					<div class="row mb-20">
                                            <ul class="cart-order">
                                                   <li> <p>Tổng cộng: <span id="pr-count">0</span> Món</p></li> 
                                            </ul> 
                                            <ul class="cart-order">
                                                  <li >Tổng tiền : <span id="pr-sum">0</span><i>đ</i></li>
                                            </ul>  
                                        </div> ';
			}
        exit();
  }
  // if(isset($_POST['showcart'])){
  //    if(isset($_SESSION['name'])){
  //      $cartOutput="<table>";
  //      $total=0;
  //         for($i=0;$i<count($_SESSION['name']);$i++) {
  //          $price = str_replace(",", "", substr($_SESSION['price'][$i],0,6));;
  //          $qty  = $_SESSION['quantity'][$i];
  //          $size =$_SESSION['size'][$i];
  //          if($size == "size vừa(600ml)"){
  //            $price += 7000;
  //          }

  //            $subtotal = ($price * $qty);
    //      $total = ($total + $subtotal);
  //                      $cartOutput.='<tr>
  //                                               <td id="total"><button type="submit" id="quantity" disabled="true">'.$qty.'</button></td>                                         
  //                                               <td id="prname"><b>'.$_SESSION['name'][$i].'</b><br>
  //                                                  <span>'.$size.'</span></td>                                          
                                                
  //                                             </tr>
  //                                             <tr>
  //                                             ';
  //                                             if($_SESSION['note'][$i] !=""){
  //                                              $cartOutput.='<td id="prnote">Ghi chú:  '.$_SESSION['note'][$i].' </td>';
  //                                             }

  //                                             $cartOutput.='<td id="price">Đơn giá:  '.number_format($subtotal,-2).' <i>đ</i> </td>
  //                                             </tr>';
                                            
  //          }       
  //            $cartOutput.= ' </table>
  //                                      <div class="row mb-20">
  //                                           <ul class="cart-order">
  //                                                  <li> <p>Tổng cộng: <span id="pr-count">'.count($_SESSION['name']).'</span> Món</p></li> 
  //                                           </ul> 
  //                                           <ul class="cart-order">
  //                                                 <li >Tổng tiền : <span id="pr-sum">'.number_format($total,-2).'</span><i>đ</i></li>
  //                                           </ul>  
  //                                       </div>    ';
  //          echo $cartOutput;
  //        }else{

  //          echo'<h2 class="text-center" >Giỏ hàng rổng </h2>';
  //        }
      

  
  //   exit();  
  // }


  


 
 ?>