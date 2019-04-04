<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Diferença de datas</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div id="info"></div>

	<script>
		var DataDif = {
	    emDias: function(d1, d2) {
	      var t2 = d2.getTime();
	      var t1 = d1.getTime();
	      return parseInt((t2-t1)/(24*60*60*1000));
	    },
	    emSemanas: function(d1, d2) {
	      var t2 = d2.getTime();
	      var t1 = d1.getTime();
	      console.log("parseInt((t2-t1)", parseInt(t2-t1));
	      return parseInt((t2-t1)/(24*60*60*1000*7));
	    },
	    emMeses: function(d1, d2) {
	      var d1Y = d1.getFullYear();
	      var d2Y = d2.getFullYear();
	      var d1M = d1.getMonth();
	      var d2M = d2.getMonth();
	      return (d2M+12*d2Y)-(d1M+12*d1Y);
	    },
	    emAnos: function(d1, d2) {
	        return d2.getFullYear()-d1.getFullYear();
	    }
		};

		var passado = new Date("3, 26, 1990");
		var hoje = new Date();

		ps = passado.getDate() + "/" + (passado.getMonth() + 1) + "/" + passado.getFullYear();
		hj = hoje.getDate() + "/" + (hoje.getMonth() + 1) + "/" + hoje.getFullYear();

		var info = document.getElementById("info");

		info.insertAdjacentHTML("beforeend", "Diferença em <b>dias</b> entre " + ps + " e "+ hj +": " + DataDif.emDias(passado, hoje));
		info.insertAdjacentHTML("beforeend", "<br/>Diferença em <b>semanas</b> entre " + ps + " e "+ hj +": " + DataDif.emSemanas(passado, hoje));
		info.insertAdjacentHTML("beforeend", "<br/>Diferença em <b>meses</b> entre " + ps + " e "+ hj +": " + DataDif.emMeses(passado, hoje));
		info.insertAdjacentHTML("beforeend", "<br/>Diferença em <b>anos</b> entre " + ps + " e "+ hj +": " + DataDif.emAnos(passado, hoje));
	</script>


	<?php
		$passado = strtotime("03/26/1990");
		$hoje = strtotime(date("m/d/Y"));

		// Diferença em dias.
		$difDias = ($hoje - $passado) / (60 * 60 * 24);
		echo "<br>Diferença em dias: $difDias<br>";

		$difSemanas = intval($difDias / 7);
		echo "Diferença em semanas: $difSemanas<br>";

		$difAnos = intval($difDias / 365);
		echo "Diferença em anos: $difAnos<br>";
	?>
</body>
</html>