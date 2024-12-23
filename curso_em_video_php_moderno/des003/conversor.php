<?php 
   $cotação = 5.17; 

   $real = 1000;

   $dolar = $real / $cotação; 

   $padrão - numfmt_create("pt_BR", NumberFormatter:: CURRENCY);

   echo " Seus" .numfmt_format_currency($padrão, $real, "BR") . "equivalem a " . numfmt_format_currency($padrão, $dolar, "USD")  ;
        
    
 ?> 