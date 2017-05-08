<?php include('header.php')?>
<section>

<?php
  $la_url = $_GET['url'];
  $json = file_get_contents($la_url);
  $datos = json_decode($json,true);
?>

<h3>PHP+JSON:</h3>

<h5>En esta página vemos el detalle de los indicadores del <?php echo('Smart Citizen Kit '.$datos['id'].' instalado en '.$datos['data']['location']['city'].', '.$datos['data']['location']['country']);?>:</h5>

<p>Este kit está instalado en: <?php echo ($datos["data"]["location"]["city"])?>, <?php echo ($datos["data"]["location"]["country"]);?>. </p>
<p>La temperatura es de: <?php echo round ($datos["data"]["sensors"][3]["value"],2);?> °C.</p>
<p>La humedad ambiental es de: <?php echo round ($datos["data"]["sensors"][2]["value"]);?> %</p>
<p>La iluminación: <?php echo round ($datos["data"]["sensors"][0]["value"]);?> Lux.</p>
<p>Y el ruido ambiental: <?php echo round ($datos["data"]["sensors"][7]["value"]);?> dB.</p>



<pre><?php print_r($datos)?></pre>

<div class="alert alert-danger">
<p>Genere una ficha donde se muestren los indicadores generados por los sensores del <?php echo('Smart Citizen Kit '.$datos['id']);?>.</p>
</div>

</section>
<?php include('footer.php');?>
