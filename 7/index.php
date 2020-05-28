<?php
echo '<script>alert("Javascript dentro do php")</script>';
?>

<script>
alert("<?php echo 'PHP dentro de Javascript'?>");
</script>   

<input style="background-color: darkgray;" type="text" name="input1_name" id="input1_id" class="input1_class texto-input"/>

 <style>
  #input2_id{
  background-color: red;
  }   
 .input3_class{
  background-color: blue;    
  }   
  .texto-input{
   height: 30px;   
  }
 </style>
  
 
 
 <input type="text" name="input2_name" id="input2_id" class="input2_class texto-input"/>
 
 <input type="text" name="input3_name" id="input3_id" class="input3_class texto-input"/>
 
 <script>
  function menssagem(){    
  alert("<?php echo 'Javascript dentro do html'?>");
  }
</script>  
 
<input type="button" name="input4_name" id="input4_id" class="input4_class" onclick="menssagem()" value="<?php echo 'Clique' ?>"/>                                       
