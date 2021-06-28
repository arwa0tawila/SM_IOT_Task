<?php

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

       // $_POST['UP'] =  $_POST['UP'] ?? 'up';
       $data = json_decode(file_get_contents('php://input'), true);
        //print_r($data);
       
        //connection
        $con = mysqli_connect('localhost', 'root', '','motorsrobotarm');
        // get the post records
       $value = $data['value'];
        
      echo "value is  ".$data['value'];
       // ***********inserting for first time**************
      //   if (isset($value) && $value == "up"){  
      //  //   echo "Product ID: ".$data['form-product1']; 
      //     $sql = "INSERT INTO base(Press_value) VALUES ('up')";

      //   }
      //     elseif(isset($value) && $value == "left"){
      //    //   echo "Product ID: ".$data['form-product2']; 
      //       $sql = "INSERT INTO base(Press_value) VALUES ('left')";
      //     } elseif(isset($value) && $value == "right"){
      //       //   echo "Product ID: ".$data['form-product2']; 
      //          $sql = "INSERT INTO base(Press_value) VALUES ('right')";
      //        } elseif(isset($value) && $value == "stop"){
      //         //   echo "Product ID: ".$data['form-product2']; 
      //            $sql = "INSERT INTO base(Press_value) VALUES ('stop')";
      //          } elseif(isset($value) && $value == "down"){
      //           //   echo "Product ID: ".$data['form-product2']; 
      //              $sql = "INSERT INTO base(Press_value) VALUES ('down')";
      //            }

      
      if (isset($value) && $value == "up"){  
        // echo "up ID: "; 
          // $sql = "INSERT INTO base(Press_value) VALUES ('up')";
           $sql = "UPDATE `base` SET `Press_value`=('up') WHERE 1";
 
         }
           elseif(isset($value) && $value == "left"){
          //   echo "Product ID: ".$data['form-product2']; 
            // $sql = "INSERT INTO base(Press_value) VALUES ('left')";
             $sql = "UPDATE `base` SET `Press_value`=('left') WHERE 1";

           } elseif(isset($value) && $value == "right"){
             //   echo "Product ID: ".$data['form-product2']; 
                //$sql = "INSERT INTO base(Press_value) VALUES ('right')";
                $sql = "UPDATE `base` SET `Press_value` = ('right') WHERE 1";

              } elseif(isset($value) && $value == "stop"){
               //   echo "Product ID: ".$data['form-product2']; 
                  //$sql = "INSERT INTO base(Press_value) VALUES ('stop')";
                  $sql = "UPDATE `base` SET `Press_value` = ('stop') WHERE 1";
                } elseif(isset($value) && $value == "down"){
                // echo "Product ID: ".$data['form-product5']; 
                    //$sql = "INSERT INTO base(Press_value) VALUES ('down')";
                    $sql = "UPDATE `base` SET `Press_value` = ('down') WHERE 1";
                  }
               

        $rs = mysqli_query($con, $sql);

        // if($rs)
        // {
        //     echo "Contact Records Inserted";
        // } else {
        //     echo 'something wrong';
        // }
    }

?>