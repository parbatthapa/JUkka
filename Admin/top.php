   <html lang="en">
<head>
  <title>Trave & Tours Nepal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="header-top">

     <!--container-->
      <div class="container">
       <div class="top-nav">
            <div class="logo">
            <a href="index.php"><img src="../images/logo.png" id="section-1" class="img-responsive" alt=""/></a>
            </div>
            <div class="menu">
            <ul class="nav navbar-nav navbar">
       
        <?php if($_SESSION["usertype"]=="Admin")
        {?>
  <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> User<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="adduser.php">Add User  <span class="glyphicon glyphicon-plus"></span></a></li>
            <li><a href="updateuser.php">Update User  <span class="glyphicon glyphicon-edit"></span></a></li>
            <li><a href="deleteuser.php">Delete User  <span class="glyphicon glyphicon-trash"></span></a></li>
          </ul>
          </li>
          <?php }?>

          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-th-list"> Category<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="addcategory.php">Add Category <span class="glyphicon glyphicon-plus"></span></a></li>
             <?php if($_SESSION["usertype"]=="Admin")
        {?>
            <li><a href="updatecategory.php">Update Category <span class="glyphicon glyphicon-edit"></span></a></li>
            <li><a href="deletecategory.php">Delete Category <span class="glyphicon glyphicon-trash"></span></a></li>
               <?php }?>
                <li><a href="viewcategory.php">View Category <span class="glyphicon glyphicon-open"></span></a></li>
            </ul>
          </li>

          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-th-list"> SubCategory<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="addsubcategory.php">Add Sub-Category <span class="glyphicon glyphicon-plus"></span></a></li>
             <?php if($_SESSION["usertype"]=="Admin")
        {?>
            <li><a href="updatesubcategory.php">Update Sub-Category <span class="glyphicon glyphicon-edit"></span></a></li>
            <li><a href="deletesubcategory.php">Delete Sub-Category <span class="glyphicon glyphicon-trash"></span></a></li>
               <?php }?>
                <li><a href="viewcategory.php">View Sub-Category <span class="glyphicon glyphicon-open"></span></a></li>
                </ul>
            
          </li>

         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-th-list"> Package<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="addpackage.php">Add Package <span class="glyphicon glyphicon-plus"></span></a></li>
             <?php if($_SESSION["usertype"]=="Admin")
        {?>
            <li><a href="updatepackage.php">Update Package <span class="glyphicon glyphicon-edit"></span></a></li>
            <li><a href="deletepackage.php">Delete Package <span class="glyphicon glyphicon-trash"></span></a></li>
               <?php }?>
                <li><a href="viewpackage.php">View Package <span class="glyphicon glyphicon-open"></span></a></li>
          </ul>
          </li>
          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-th-list"> Advertisement<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="addadvertisement.php">Add Advertisement <span class="glyphicon glyphicon-plus"></span></a></li>
             <?php if($_SESSION["usertype"]=="Admin")
        {?>
           
            <li><a href="deleteadvertisement.php">Delete Advertisement <span class="glyphicon glyphicon-trash"></span></a></li>
               <?php }?>
               <li><a href="viewadvertisement.php">View Advertisement <span class="glyphicon glyphicon-open"></span></a></li>
               
          </ul>
          </li>






      
       
     

             </div>
       </div>
        <div class="clearfix"> </div>
      

     </div>
     <!--/container-->
   </div>
   </body>
   </html>

