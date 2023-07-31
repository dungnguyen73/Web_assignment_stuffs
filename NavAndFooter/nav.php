<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Nike. Just Do It</title>
    <style>
      body{
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
      }
      
    </style>
</head>
<!-- navigator bar section -->

<nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container-fluid">
            <a href="#" class="navbar-brand"><img src="assets/Logo_NIKE.svg.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsebtn" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class = "collapse navbar-collapse d-lg-flex justify-content-center" id = "collapsebtn">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link " >Shoes</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link ">
                            Clothing
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link ">
                            Accessories
                        </a>
                    </li>
                </ul>
                <div class= "d-md-none options">
                    <i class="fa-sharp fa-regular fa-heart fa-lg" title="Favorites"></i>
                    <i class="fa-sharp fa-solid fa-bag-shopping  fa-lg" title= "Bag items"></i>
                    <i class="fa-sharp fa-regular fa-user  fa-lg" title = "User"></i>
                </div>
            </div>
            
            <div class="d-none d-md-block" id = "searchbar">
                <form class="form-inline">
                  <input class="form-control mr-md-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
            
            <div class= "d-none d-md-block options" >
                <i class="none fa-sharp fa-regular fa-heart fa-lg" title="Favorites"></i>
                <i class="fa-sharp fa-solid fa-bag-shopping fa-lg" title= "Bag items"></i>
                <i class="fa-sharp fa-regular fa-user fa-lg" title = "User"></i>
            </div>

            

        </div>
    </nav>    
        