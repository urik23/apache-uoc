<html>
<head>
	<title>Test UOC PFC</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<style>
	body {
		background-color: white;
		text-align: center;
		padding: 50px;
		font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
	}

	#logo {
		margin-bottom: 40px;
	}
	</style>
</head>
<body>
	<img id="logo" src="logo.png" />
	<h1><?php echo "Test ".($_ENV["NAME"]?$_ENV["NAME"]:"PFC UOC")."!"; ?></h1>
	<?php if($_ENV["HOSTNAME"]) {?><h3>Servidor: <?php echo $_ENV["HOSTNAME"]; ?></h3><?php } ?>
<?php
# Comentarios.
# Ejemplo de programacion en PHP simple
# Haciendo simples calculos entre variables predefinidas
# Por EjemploDe.Com

$PrimerValor = 10; //Comentario: Edita el numero para cambiar el primer valor
$SegundoValor = 30; //Comentario: Edita el numero para cambiar el segundo valor

//Seccion de calculos
$suma = $PrimerValor + $SegundoValor; //Sumamos
$resta = $PrimerValor - $SegundoValor; //Restamos
$multiplicacion = $PrimerValor * $SegundoValor; //Multiplicamos
$division = $PrimerValor / $SegundoValor; //Dividimos

//A continuacion mostramos las cuentas en un formato textual

echo "<h1>Formato Textual</h1>";
echo "La <strong>suma</strong> entre <strong>".$PrimerValor."</strong> y <strong>".$SegundoValor."</strong> es de <strong>".$suma."</strong><br/>";
echo "La <strong>resta</strong> entre <strong>".$PrimerValor."</strong> y <strong>".$SegundoValor."</strong> es de <strong>".$resta."</strong><br/>";
echo "La <strong>multiplicacion</strong> entre <strong>".$PrimerValor."</strong> y <strong>".$SegundoValor."</strong> es de <strong>".$multiplicacion."</strong><br/>";
echo "La <strong>division</strong> entre <strong>".$PrimerValor."</strong> y <strong>".$SegundoValor."</strong> es de <strong>".$division."</strong><br/>"; //A continuacion mostramos las cuentas en un formato matematico

echo "<h1>Formato Matematico</h1>";
echo "".$PrimerValor." + ".$SegundoValor." = <strong>".$suma."</strong><br/>";
echo "".$PrimerValor." - ".$SegundoValor." = <strong>".$resta."</strong><br/>";
echo "".$PrimerValor." * ".$SegundoValor." = <strong>".$multiplicacion."</strong><br/>";
echo "".$PrimerValor." / ".$SegundoValor." = <strong>".$division."</strong><br/>";
?>

</body>
</html>
