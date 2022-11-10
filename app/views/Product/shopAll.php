<html>
<head>
	<title>Shop All</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<style>
  body{
      background-color: lightpink;
  }
</style>
</head>

<body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
        <div class="container-fluid">
          <a class="navbar-brand nav-link"><strong>Pink Bakery</strong></a>
            <div class="collapse navbar-collapse" id="navbarExample01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                   <li class="nav-item">
                      <a class="nav-link" href="/Product/shopAll" target="_blank">Shop All</a>
                    </li>
                      <div class="dropdown">
                        <a class="nav-link" data-bs-toggle="dropdown">Shop by category</a>
                        <div class="dropdown-menu">
                          <a href="/Product/bread" class="dropdown-item">Bread</a>
                          <a href="/Product/cookies" class="dropdown-item">Cookies</a>
                          <a href="/Product/pies" class="dropdown-item">Pies</a>
                          <a href="/Product/pastries" class="dropdown-item">Pastries</a>
                          <a href="/Product/cakes" class="dropdown-item">Cakes</a>
                          <a href="/Product/newArrivals" class="dropdown-item">New Arrivals</a>
                      </div>
                    </div>
                    <li class="nav-item">
                      <a class="nav-link" href="/Product/customizeCake" target="_blank">Customize Cake</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/User/contactUs" target="_blank">Contact Us</a>
                    </li>
                    <form action='' method=''>
                        <input type="text" placeholder="Search" name="searchItem"/>
                        <button type="submit" class="btn btn-outline-primary" name="search">Search</button>
                      </form>
                    <li class="nav-item">
                      <a class="nav-link" href="/User/myAccount" target="_blank">My Account</a>
                    </li>
                    <li class="nav-item" style="float:right">
                      <a class="nav-link" href="/User/cart" target="_blank" id="logout">Shopping Cart</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/User/logout" target="_blank" id="logout">Logout</a>
                    </li>
              </ul>
            </div>
        </div>
      </nav>
    </header>
<div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 20px;">
            <div class="card-body p-5">

                <form action='' enctype="multipart/form-data" method='post'>

                    <div class="form-outline mb-4">
                    <h2 class="text-center mb-5">New Arivals</h2>
                    <table width="100%" border="1" cellpadding="5" cellspacing="5">
                    <tr><th>Name</th><th>Image</th><th>Price</th><th> </th></tr>
                    <?php
                      $product=new \app\models\Product();
                      $products = $product->getAll();
                      foreach($data as $product){
                        if($product->category_id == 6){
                        echo "<tr>
                              <td type=name>$product->name</td>
                              <td> <img src='/images/".$product->image."'style='max-width:200px;max-height:100px'/></td>
                              <td type=name>$product->price</td>
                              <td type=action>
                              <button class='btn btn-warning' onclick='details()href'><a class='nav-link'</a></button>
                              </td>
                              </tr>

                            <script>
                            function details() {
                              alert('Name: '$product->name\n 'Description: ');
                            }
                            </script>"

                            ;
                            }
                            //href='/Seller/modifyProduct/$product->product_id'>details 
                      }
                    ?>
                    
                  </table>
                </div>

                  <div class="form-outline mb-4">
                    <h2 class="text-center mb-5">Bread</h2>
                    <table width="100%" border="1" cellpadding="5" cellspacing="5">
                    <tr><th>Name</th><th>Image</th><th>Price</th><th> </th></tr>
                    <?php
                      $product=new \app\models\Product();
                      $products = $product->getAll();
                      foreach($data as $product){
                        if($product->category_id == 1){
                        echo "<tr>
                              <td type=name>$product->name</td>
                              <td> <img src='/images/".$product->image."'style='max-width:200px;max-height:100px'/></td>
                              <td type=name>$product->price</td>
                              <td type=action>
                              <button class='btn btn-warning' onclick='details()'><a class='nav-link'>details</a></button>
                              </td>
                              </tr>

                            <script>
                            function details() {
                              alert('Name: '$product->name\n 'Description: ');
                            }
                            </script>"

                              ;
                            }
                      }
                    ?>
                    
                  </table>
                </div>

                <div class="form-outline mb-4">
                    <h2 class="text-center mb-5">Cookies</h2>
                    <table width="100%" border="1" cellpadding="5" cellspacing="5">
                    <tr><th>Name</th><th>Image</th><th>Price</th><th> </th></tr>
                    <?php
                      $product=new \app\models\Product();
                      $products = $product->getAll();
                      foreach($data as $product){
                        if($product->category_id == 2){
                        echo "<tr>
                              <td type=name>$product->name</td>
                              <td> <img src='/images/".$product->image."'style='max-width:200px;max-height:100px'/></td>
                              <td type=name>$product->price</td>
                              <td type=action>
                              <button class='btn btn-warning'><a class='nav-link' href='/Seller/modifyProduct/$product->product_id'>details</a></button>
                              </td>
                              </tr>";
                            }
                      }
                    ?>
                    
                  </table>
                </div>

                <div class="form-outline mb-4">
                    <h2 class="text-center mb-5">Pies</h2>
                    <table width="100%" border="1" cellpadding="5" cellspacing="5">
                    <tr><th>Name</th><th>Image</th><th>Price</th><th> </th></tr>
                    <?php
                      $product=new \app\models\Product();
                      $products = $product->getAll();
                      foreach($data as $product){
                        if($product->category_id == 3){
                        echo "<tr>
                              <td type=name>$product->name</td>
                              <td> <img src='/images/".$product->image."'style='max-width:200px;max-height:100px'/></td>
                              <td type=name>$product->price</td>
                              <td type=action>
                              <button class='btn btn-warning'><a class='nav-link'>details</a></button>
                              </td>
                              </tr>";
                            }
                      }
                    ?>
                    
                  </table>
                </div>

                <div class="form-outline mb-4">
                    <h2 class="text-center mb-5">Pastries</h2>
                    <table width="100%" border="1" cellpadding="5" cellspacing="5">
                    <tr><th>Name</th><th>Image</th><th>Price</th><th> </th></tr>
                    <?php
                      $product=new \app\models\Product();
                      $products = $product->getAll();
                      foreach($data as $product){
                        if($product->category_id == 4){
                        echo "<tr>
                              <td type=name>$product->name</td>
                              <td> <img src='/images/".$product->image."'style='max-width:200px;max-height:100px'/></td>
                              <td type=name>$product->price</td>
                              <td type=action>
                              <button class='btn btn-warning'><a class='nav-link'>details</a></button>
                              </td>
                              </tr>";
                            }
                      }
                    ?>
                    
                  </table>
                </div>

                <div class="form-outline mb-4">
                    <h2 class="text-center mb-5">Cakes</h2>
                    <table width="100%" border="1" cellpadding="5" cellspacing="5">
                    <tr><th>Name</th><th>Image</th><th>Price</th><th> </th></tr>
                    <?php
                      $product=new \app\models\Product();
                      $products = $product->getAll();
                      foreach($data as $product){
                        if($product->category_id == 5){
                        echo "<tr>
                              <td type=name>$product->name</td>
                              <td> <img src='/images/".$product->image."'style='max-width:200px;max-height:100px'/></td>
                              <td type=name>$product->price</td>
                              <td type=action>
                              <button class='btn btn-warning'><a class='nav-link' >details</a></button>
                              </td>
                              </tr>";
                            }
                      }
                    ?>
                    
                  </table>
                </div>

                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>