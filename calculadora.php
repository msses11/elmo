<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>calculadora</title>
</head>
<body>
    <h1>calculadora de php</h1>
    <div class="container">
        <form method="POST">
         numero 1:<input type="numbre" name="numero1" value="0"  max="1000" min="-1000"required>
         numero 2:<input type="numbre" name="numero2" value="0" max="1000" min="-1000"required>
         <hr>
        <input type="radio" name="opcion" value="sumar" required> sumar
        <input type="radio" name="opcion" value="restar"required> restar
        <input type="radio" name="opcion" value="multiplicar"required> multiplicar
        <input type="radio" name="opcion" value="dividir"required> dividir
        <hr>
        <input type="submit" class="btn btn-success w-25" value="enviar"> 
        <input type="reset" class="btn btn-danger w-25" value="limpiar" > 
        </form>
        </div>
    

       <div>
        <?php
        if ($_POST){
            $n1 = $_POST['numero1'];
            $n2 = $_POST['numero2'];
            $op=$_POST['opcion']; 
            
         

           function sumar($n1,$n2){
            $sumar=$n1+$n2;
           echo $sumar;
           echo "<br>";
          }

          function restar($n1,$n2){
            $restar=$n1-$n2;
            echo $restar;
           echo "<br>";
            
          }

          function  multiplicar($n1,$n2){
            $multiplicar=$n1*$n2;
            echo $multiplicar;
           echo "<br>";
            
          }

          function dividir($n1,$n2){
            $dividir=$n1/$n2;
            echo $dividir;
           echo "<br>";
            
          }

          switch($op){
            case"sumar":
                echo " el resultado es:",sumar($n1,$n2);
                break;

            case"restar":
                echo " el resultado es:",restar($n1,$n2);
                break;
                
            case"multiplicar":
                echo " el resultado es:",multiplicar($n1,$n2);
                break;

            case"dividir":
                echo " el resultado es:",dividir($n1,$n2);
                break;

                default:
                "error en la introduccion de datos";
          }



    
        }
        ?>  
        </div>
    </div>



 

</body>
</html>