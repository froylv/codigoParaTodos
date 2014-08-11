<html>
<head>
     <title>List of Items</title>
	<link type="text/css" href="css/estilo.css" rel="stylesheet"  />
</head>
<body>
<div id="menu"> 
   <ul>
     <li><a href="controller.php?op=nuevo">&nbsp;Nueva Entrada&nbsp;</a></li>
     <li><a href="controller.php?op=listar">&nbsp; Listar &nbsp;</a></li>
   </ul>
</div>
<h1>Detalle de Aportaci&oacute;n</h1><form name="form1" method="post" action="">
  <table width="100%" >
    <tr>
      <th width="20%">&nbsp;</th>
      <th width="80%">&nbsp;</th>
    </tr>
    <tr>
      <td><label for="titulo">T&iacute;tulo</label></td>
      <td>
        
			<?php echo $row['titulo'] ?>
      </td>
      </tr>
    <tr>
      <td>Descripci&oacute;n</td>
      <td><label for="descripcion"></label>
      <?php echo $row['descripcion'] ?></td>
    </tr>
    <tr>
      <td>Autor</td>
      <td><?php echo $row['autor'] ?></td>
    </tr>
    <tr>
      <td>Lenguaje</td>
      <td><?php echo $row['lenguaje'] ?></td>
    </tr>
    <tr>
      <td>C&oacute;digo</td>
      <td><?php echo $row['code'] ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  </form>
</body>
</html>
