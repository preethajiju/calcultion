<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add.php">Addition</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sub.php">Subtraction</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pdt.php">Multiplication</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="divi.php">Division</a>
          </li>
          
        </ul>
      </nav>
      <div class="container">
          <div class="row">
              <div class="col col-12 col-sm-2 col-lg-12 "></div>
            
                  <div class="col col-12 col-sm-8 col-lg-12">
                    <table class="table">
                        <tr>
                            <td>Number1</td>
                            <td><input type="text" class="formcontrol" id="num1"></td>
                        </tr>
                        <tr>
                            <td>Number2</td>
                            <td><input type="text" class="formcontrol" id="num2"></td>
                        </tr>
                      
                       <tr>
                           <td><button onclick="addition()" class="btn btn-success">Add</button></td>
                           <td><centre> <p id="res"> </p> </centre></td>
                        
                       </tr>
                       
                       </table>

                      <div class="col col-12 col-sm-2 col-lg-12">
                          
                       

                      </div>
                  </div>

          </div>
      </div>
  <script>
      function addition()
      {
      var getnum1= parseInt(document.getElementById("num1").value)
      var getnum2= parseInt(document.getElementById("num2").value)
      var result=getnum1+getnum2
      document.getElementById("res").innerHTML=result

      }
  </script>  
</body>
</html>