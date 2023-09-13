<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */


?>
<style>
  #btn_mall {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

#btn_tmp1 {
  background-color: #7EB0F5; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

#btn_square {
  background-color: #7EB0F5; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>

<input type="button"  name="tamp_mall" value="tamp_mall" id="btn_mall" />
<input type="button" name="tamp1" value="tamp1" id="btn_tmp1" />
<input type="button" name="century_square" value="century_square" id="btn_square" />

<div class="btnDiv" id="tamp_mall">
tamp_mallssabcdes123123555555



</div>
<div class="btnDiv" id="tamp1">
tamp1

</div>
<div class="btnDiv" id="century_square">
century_square
</div>
  <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
<script>

//Initially hide every div except first
$('.btnDiv').hide();
$('#tamp_mall').show();

//Hide/show div 'tamp_mall'
$('#btn_mall').on('click', function (){
    $('.btnDiv').hide();
    document.getElementById("btn_mall").style.backgroundColor = "#4CAF50";
    document.getElementById("btn_tmp1").style.backgroundColor = "#7EB0F5";
    document.getElementById("btn_square").style.backgroundColor = "#7EB0F5";
  $('#tamp_mall').show();
});

//Hide/show div 'tamp1'
$('#btn_tmp1').on('click', function (){
    $('.btnDiv').hide();
    //$('body').css('background', '#000');
    document.getElementById("btn_mall").style.backgroundColor = "#7EB0F5";
    document.getElementById("btn_tmp1").style.backgroundColor = "#4CAF50";
    document.getElementById("btn_square").style.backgroundColor = "#7EB0F5";
  $('#tamp1').show();
});

//Hide/show div 'century_square'
$('#btn_square').on('click', function(){
    $('.btnDiv').hide();
    document.getElementById("btn_mall").style.backgroundColor = "#7EB0F5";
    document.getElementById("btn_tmp1").style.backgroundColor = "#7EB0F5";
    document.getElementById("btn_square").style.backgroundColor = "#4CAF50";
  $('#century_square').show();
});

</script>
