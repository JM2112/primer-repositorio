<?php 
 //Funcion suma
 function sumar2Num( int $num1, int $num2) 
{
    $suma=($num1 + $num2);
    return $suma;
}
  $suma= sumar2Num(1,1);

  //Funcion resta
 function resta2Num (int $num3, $num4)
 {
     $resta=($num3-$num4);
     return $resta;

 }
   $resta= resta2Num(2,3);

 //Funcion Multiplicar 
 function multiplica2Num(int $num5, int $num6)
 {
     $multiplicacion=($num5*$num6);
     return $multiplicacion;
 }
   $multiplicacion= multiplica2Num(4,5);
   
// Funcion Dividir 
function divide2Num(int $num7, int $num8)
 {
     $division=($num7/$num8);
     return $division;
 }
   $division= divide2Num(3,7);
   
 
//Funcion area de un Cuadrado 
function areaDeUnCuadrado (int $base1)
{
    $areacuadrado=($base1*$base1);
    return $areacuadrado;
}
  $areacuadrado= areaDeUnCuadrado(8);

// Funcion area de un triangulo 
function areaDeUnTriangulo(int $base2, int $altura)
{
    $areatringulo=(($base2*$altura)/2);
    return $areatringulo;
}
  $areatringulo= areaDeUnTriangulo(9,10);

// Funcion area de un rectangulo 
function areaDeUnRectngulo(int $base3, int $ltura2)
{
    $arearectangulo=($base3*$ltura2);
    return $arearectangulo;
}
  $arearectangulo= areaDeUnRectngulo(1,1);

  // Funcion perimetro de un cuadrado 
  function perimetroDeUnCuadrado(int $lado1)
  {
      $perimetrocuadrado=($lado1*4);
      return $perimetrocuadrado;
  }
   $perimetrocuadrado= perimetroDeUnCuadrado(5);
   
// Funcion perimetro de un tringulo 
function perimetroDeUnTriengulo(int $lado2, int $lado3, int $lado4)
{
    $perimetrotriangulo=($lado2+$lado3+$lado4);
    return $perimetrotriangulo;
}
 $perimetrotriangulo=perimetroDeUnTriengulo(1,2,3);
 
 // funcion perimetro de un rectngulo 
 function perimetroDeUnRectangulo(int $base3, int $altura3)
 {
     $perimetrorectangulo=(($base3+$altura3)*2);
     return $perimetrorectangulo;
 }

 $perimetrorectangulo=perimetroDeUnRectangulo(5,5);

 function  nuevafuncion()
 {
     echo "hola"; 
 }