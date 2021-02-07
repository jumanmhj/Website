

<!DOCTYPE html>
<html>
<head>
    <title>Insert with Form</title>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.npesport.com/create/style.css">
    <link rel="stylesheet" href="https://www.npesport.com/create/assets/css/styles.css">
 

<?php 
  $ini_code = "NULL"; //initializing color value so that no error occurs
  $email = "test@email.com" //Dummy email
  // $email=$fetch_info['email'];

?>
</head>
<body>

              <?php
            //check button click/ form submission
        if (isset($_POST['btnSave'])) {
            //create blank array to store form error
            $err = [];
            

                //check empty and trim data(remove space) for name
              if (isset($_POST['pname']) && !empty($_POST['pname']) && trim($_POST['pname']) != '') {
                //fetch name form $_POST array and save into variable
               $pname = $_POST['pname'];
              } else {
               //store error message into $err array
               $err['pname'] = 'Enter name';
               }

                //check empty and trim data(remove space) for name
              if (isset($_POST['sname']) && !empty($_POST['sname']) && trim($_POST['sname']) != '') {
                //fetch name form $_POST array and save into variable
               $sname = $_POST['sname'];
              } else {
               //store error message into $err array
               $err['sname'] = 'Enter name';
               }


                //validating Product type
              if (isset($_POST['ptype']) && !empty($_POST['ptype']) && trim($_POST['ptype']) != '')
                 {
                 $ptype = $_POST['ptype'];
                 } 
                 else 
                 {
                 $err['ptype'] = 'Enter ptype';
                  }
                //validating Product price
                 if (isset($_POST['rs']) && !empty($_POST['rs']) && trim($_POST['rs']) != '')
                  {
                 $rs = $_POST['rs'];
                     } 
                  else 
                     {
                     $err['rs'] = 'Enter rs';
                     }
                // validating product quantity
                if (isset($_POST['quantity']) && !empty($_POST['quantity']) && trim($_POST['quantity']) != '')
                   {
                  $quantity = $_POST['quantity'];
                   }
                      else 
                    {
                     $err['quantity'] = 'Enter quantity';
                   }
                //check if color is selected
                if (isset($_POST['color1']) && !empty($_POST['color1']) && trim($_POST['color1']) != '')
                   {
                  $color1 = $_POST['color1'];
                   }
                   else{
                    $color1=$ini_code;
                   }
                    // check if color is selected
                if (isset($_POST['color2']) && !empty($_POST['color2']) && trim($_POST['color2']) != '')
                   {
                  $color2 = $_POST['color2'];
                   }
                   else{
                    $color2=$ini_code;
                   }
                // check if color is selected
                if (isset($_POST['color3']) && !empty($_POST['color3']) && trim($_POST['color3']) != '')
                   {
                  $color3 = $_POST['color3'];
                   }
                   else{
                    $color3=$ini_code;
                   }
                  // check if color is selected
                if (isset($_POST['color4']) && !empty($_POST['color4']) && trim($_POST['color4']) != '')
                   {
                  $color4 = $_POST['color4'];
                   }
                   else{
                    $color4=$ini_code;
                   }
                // check if color is selected
                if (isset($_POST['color5']) && !empty($_POST['color5']) && trim($_POST['color5']) != '')
                   {
                  $color5 = $_POST['color5'];
                   }
                   else{
                    $color5=$ini_code;
                   }
               // check if color is selected
                if (isset($_POST['color6']) && !empty($_POST['color6']) && trim($_POST['color6']) != '')
                   {
                  $color6 = $_POST['color6'];
                   }
                   else{
                    $color6=$ini_code;
                   }
                    // check if color is selected
                if (isset($_POST['color7']) && !empty($_POST['color7']) && trim($_POST['color7']) != '')
                   {
                  $color7 = $_POST['color7'];
                   }
                   else{
                    $color7=$ini_code;
                   }
                // check if color is selected
                if (isset($_POST['color8']) && !empty($_POST['color8']) && trim($_POST['color8']) != '')
                   {
                  $color8 = $_POST['color8'];
                   }
                   else{
                    $color8=$ini_code;
                   }
                  // check if color is selected
                if (isset($_POST['color9']) && !empty($_POST['color9']) && trim($_POST['color9']) != '')
                   {
                  $color9 = $_POST['color9'];
                   }
                   else{
                    $color9=$ini_code;
                   }
                     //  dicription of product
                if (isset($_POST['discription']) && !empty($_POST['discription']) && trim($_POST['discription']) != '')
                   {
                  $discription = $_POST['discription'];
                   }
                      else 
                    {
                     $err['discription'] = 'Enter starting date';
                   }
                     //  short dicription of product
                if (isset($_POST['sdiscription']) && !empty($_POST['sdiscription']) && trim($_POST['sdiscription']) != '')
                   {
                  $sdiscription = $_POST['sdiscription'];
                   }
                      else 
                    {
                     $err['sdiscription'] = 'Enter starting date';
                   }
          
              // Product image 1
                if (isset($_FILES['photo']['error'] )&& $_FILES['photo']['error'] == 0)
                         {
                          if ($_FILES['photo']['error']<=1024000) 
                            {
                              $types = ['image/png','image/jpeg','image/gif','image/jpg'];
                              if (in_array($_FILES['photo']['type'] , $types)) 
                              {
                                  //generate random number
                                  $file_namea=uniqid().'_'.$_FILES['photo']['name'];
                                    //upload files to server
                                  if(move_uploaded_file($_FILES['photo']['tmp_name'], 'image/'.$file_namea))
                                   {
                                      $image_urla="image/$file_namea";
                                   }
                                   else{
                                       $err['file can not move to server'];
                                   }
                               }
                              else{
                                   $err['photo']='invalid types';
                               }
                          }
                           else{
                               $err['photo']='Image size';
                           }   
                       }
                       else{
                           $err['photo']='file error vayo';
                       }

                         // product image 2
                if (isset($_FILES['vphoto']['error'] )&& $_FILES['vphoto']['error'] == 0)
                         {
                          if ($_FILES['vphoto']['error']<=1024000) 
                            {
                              $types = ['image/png','image/jpeg','image/gif','image/jpg'];
                              if (in_array($_FILES['vphoto']['type'] , $types)) 
                              {
                                  //generate random number
                                  $file_name=uniqid().'_'.$_FILES['vphoto']['name'];
                                    //upload files to server
                                  if(move_uploaded_file($_FILES['vphoto']['tmp_name'], 'image/'.$file_name))
                                   {
                                      $image_url="image/$file_name";
                                   }
                                   else{
                                       $err['file can not move to server'];
                                   }
                               }
                              else{
                                   $err['vphoto']='invalid types';
                               }
                          }
                           else{
                               $err['vphoto']='Image size';
                           }   
                       }
                       else{
                           $err['vphoto']='file error vayo';
                       }

                   //count no of error into form
                   if (count($err) == 0) {
                      //include database connection 
                       require_once '1.connection.php';
                       //sql query to insert data into database taken from form
                        $sql = "INSERT INTO xces ( pname, sname, ptype, rs, quantity, color1, color2, color3, color4, color5, color6, color7, color8, color9, discription, sdiscription,image1,image2) VALUES ('$pname', '$sname', '$ptype', '$rs', '$quantity', '$color1', '$color2', '$color3', '$color4', '$color5', '$color6', '$color7', '$color8', '$color9', '$discription', '$sdiscription','$image_urla','$image_url')";
                       //execute query
                      if ($connection->query($sql)){ ?> 
                        <h1><?php echo "Created successfully";?><a href="edit-data">Edit data ?</a></h1><?php  
                     } else {
                        die( "$connection->error");
                     }
                    //connection close
                    $connection->close();
                 }
            
            }
                
        ?>


<div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="" method="POST"  enctype="multipart/form-data">
                    <h2 class="text-center">Team Recruitment</h2>
                    <p class="text-center">Please Fill form properly</p>
                    <!-- product image -->
                     <div  class="form-group">
                        <label>Product Photo 1: </label>
                            <input type="file" name="vphoto" class="form-control" required>
                    </div>
                    <div  class="form-group">
                        <label>Product Photo 2 : </label>
                            <input type="file" name="photo" class="form-control" required>
                    </div>

                <!-- Product name -->
                    <div class="form-group">
                        <label>Product Name</label>
                        <input class="form-control" type="text" name="pname" required>
                    </div>
                <!-- Seller name -->
                    <div class="form-group">
                        <label>Seller Name</label>
                        <input class="form-control" type="text" name="sname" required>
                    </div>


                  <!-- Product type -->
                    <div class="form-group">
                         <label> Product Type:</label>
                          <select class="form-control" name="ptype" required>
                            <option disabled selected value></option>
                            <option value="arts">Arts and Craft</option>
                            <option value=games>Games</option>
                            <option value="office">Office Supplies</option>
                            <option value="school">School Supplies</option>
                         </select>
                    
                      </div>
                <!-- Price of products  -->
                    <div class="form-group">
                     <div id="t-r-number">
                      <label>Price</label>
                          <label> &nbsp;&#8360;</label><input type="number" name="rs" class="form-control" required>
                       
                     </div>
                    </div>
                <!-- Piece of products available -->
                    <div class="form-group">
                     <div id="t-r-number">
                      <label>Product Quantity</label>
                          <input type="number" name="quantity" class="form-control" required><label> &nbsp;Pieces</label>
                       
                     </div>
                    </div>
                    <!-- Colors available -->
                    <div class="form-group">
                        <h3>Color Available</h3>
                        <input type="checkbox" id="red" name="color1" value="#FF0000">
                        <label style="color :black; background-color:#FF0000 ;  border-radius: 9px;   ">&nbsp;Red&nbsp;</label><br>
                        <input type="checkbox" id="orange" name="color2" value="#FFA500">
                        <label style="color :black; background-color:#FFA500 ;  border-radius: 9px;   ">&nbsp;Orange&nbsp;</label><br>
                        <input type="checkbox" id="yellow" name="color3" value="#FFFF00">
                        <label  style="color :black; background-color:#FFFF00 ; border-radius: 9px;    ">&nbsp;Yellow&nbsp;</label><br>
                        <input type="checkbox" id="green" name="color4" value="#008000">
                        <label style="color :black; background-color:#008000 ;  border-radius: 9px;   ">&nbsp;Green&nbsp;</label><br>                        
                        <input type="checkbox" id="blue" name="color5" value="#0000FF">
                        <label style="color :black; background-color: #0000FF;  border-radius: 9px;    ">&nbsp;Blue&nbsp;</label><br>
                        <input type="checkbox" id="indigo" name="color6" value="#4B0082">
                        <label style="color :black; background-color: #4B0082; border-radius: 9px;     ">&nbsp;Indigo&nbsp;</label><br>
                        <input type="checkbox" id="voilet" name="color7" value="#EE82EE">
                        <label style="color :black; background-color: #EE82EE;  border-radius: 9px;   ">&nbsp;Voilet&nbsp;</label><br>
                        <input type="checkbox" id="black" name="color8" value="#000000">
                        <label style="color :white ; background-color: #000000;  border-radius: 9px;   ">&nbsp;Black&nbsp;</label><br>
                        <input type="checkbox" id="white" name="color9" value="#FFFFFF">
                        <label style="color :black; background-color:#FFFFFF ; border: 1px solid #000000; border-radius: 9px;  ">&nbsp;White&nbsp;</label><br>
                    </div>
                <!-- description about Product -->
                    <div class="form-group">
                      <label>Description</label>
                      <textarea class="form-control" name="discription"id="comments" rows="9" style="height: 180px;" required></textarea>
                    </div>
                <!-- short description about Product -->
                    <div class="form-group">
                      <label>Short Description</label>
                      <textarea class="form-control" name="sdiscription"id="comments" rows="9" style="height: 70px;" required></textarea>
                    </div>                    
                  
                    <!-- submit to database -->
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="btnSave" value="Create"> 

                  <!-- back option if dont want to register -->
                      <input class="form-control button"   type="button" name="cancel" value="Cancel" onclick="javascript:window.location='../XS-website-master'">
                        </div>
                    </div>
          </form>
        </div>
      </div>
    </div>
  </body>

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script src="https://npesport.com/create/assets/js/hide-show-fields-form.js"></script>
</body>

</html>