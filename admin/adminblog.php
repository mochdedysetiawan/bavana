<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="styleblogadmin.css">

    <style>
img{
    height:100%;
    width:100%;

    position:cover;
  
    

}

card{
    max-height: 250px;
}

    </style>


</head>
<body>

    <!-- header -->
    <section class="mb-5">
        <div class="container mt-5 mb-3">
            <button class="btn btn-success">Tambah</button>
        </div>
        

    <!-- content -->
    
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <div class="col-12">
                <div class="card col-md-4 " style="height:fit-content; width:fit-content">
                    <div class="row g-0 justify-content-between">
                      <div class="col-lg-3">
                        <img src="../images/banana.png" class="rounded" style="height:152px; width:350;" alt="banana">
                      </div>
                      <div class="col-md-6">
                        <div class="card-body mx-auto mt-3">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> 
                        </div>
                      </div>
                      
                        <div class="col-lg-3 col-md-3 p-2 position-relative" >
                               
                                    <button class="btn btn-primary mt-5 sm-mt-3" >edit
                                       

                                    </button>
                                    <button class="btn btn-danger mt-5 sm-mt-3" > hapus

                                       
                                    </button>
                                
                                 
                                    

                                    
                               
                                
                            </div>
                            
                      

                     
            
                     
                    </div>
                  </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>