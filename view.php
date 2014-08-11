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
<h1>Lista de Aportaciones</h1>
  <table width="100%" >
    <tr>
      <th>Id</th>
      <th>T&iacute;tulo</th>
      <th>Descripci&oacute;n</th>
      <th>Autor</th>
      <th>Lenguaje</th>
   </tr>
    <?php foreach($items as $item): ?><tr>
      <td><?php echo $item['id_code'] ?></td>
      <td><a href="controller.php?op=detalle&id=<?php echo $item['id_code'];?>"><?php echo $item['titulo'] ?></a></td>
      <td><?php echo $item['descripcion'] ?></td>
      <td><?php echo $item['autor'] ?></td>
      <td><?php echo $item['lenguaje'] ?></td>
      </tr><?php endforeach; ?>
  </table>
</body>
</html>
