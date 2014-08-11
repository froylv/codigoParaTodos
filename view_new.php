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
<h1>Nueva Entrada</h1>
 <form name="form1" method="post" action="">
  <table width="100%" >
    <tr>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
    </tr>
    <tr>
      <td><label for="titulo">T&iacute;tulo</label></td>
      <td>
        
        <input type="text" name="titulo" id="titulo">
      </td>
      </tr>
    <tr>
      <td>Descripci&oacute;n</td>
      <td><label for="descripcion"></label>
      <textarea name="descripcion" id="descripcion" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>Autor</td>
      <td><input type="text" name="autor" id="autor"></td>
    </tr>
    <tr>
      <td>Lenguaje</td>
      <td><?php getSelecLenguajes(); ?></td>
    </tr>
    <tr>
      <td>C&oacute;digo</td>
      <td><textarea name="codigo" id="codigo" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
    </tr>
  </table>
  </form>
</body>
</html>
