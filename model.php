  <?php
  define(HOST_DATA_BASE, 'localhost'); // Servidor
  define(DATA_BASE_NAME, 'codigo'); // Nombre de la Base de Datos
  define(LOGIN_ACCESO_DATA_BASE, 'cod_1234'); // Login de Acceso
  define(PASS_ACCESO_DATA_BASE, 'codigo1029'); // Psssword de Acceso
  
  function an_query()
  {
    $QueryReceived=func_get_arg(0);
	
    if(func_num_args()>=2)
        $ReturnIDInsert=func_get_arg(1);

    if (!($link=mysql_connect(HOST_DATA_BASE, LOGIN_ACCESO_DATA_BASE, PASS_ACCESO_DATA_BASE)))
    {
        echo "Error conectando a la base de datos."; exit();
    }
    if (!mysql_select_db(DATA_BASE_NAME,$link))
    {
        echo "Error seleccionando la base de datos."; exit();
    }
	mysql_query("SET NAMES 'utf8'");
    $QueryResult = mysql_query($QueryReceived, $link);
	if (mysql_errno()!=0)
    {
     echo "ERROR: ". mysql_error ();
     mysql_close($link);
     exit (); } // ERROR

    if($ReturnIDInsert)
    {
        $ReturnIDInsert=mysql_insert_id();
        mysql_close($link);
        return array($QueryResult, $ReturnIDInsert);
    }

    mysql_close($link);
    return $QueryResult;
  }
  
  function getAllItems()
  {
     // Realizamos la consulta SQL
     $result = an_query('SELECT c.id_code ,c.titulo, c.descripcion, c.autor, c.code, l.lenguaje FROM  codes c, lenguajes l where c.id_lenguaje=l.id_lenguaje');

     // Llenamos el array
     $items = array();
       while($row = mysql_fetch_array($result, MYSQL_ASSOC))
       {
         $items[] = $row;
       }

     return $items;
  }
  
  function getOneItems($id)
  {
     // Realizamos la consulta SQL
     $result = an_query('SELECT c.id_code ,c.titulo, c.descripcion, c.autor, c.code, l.lenguaje FROM  codes c, lenguajes l WHERE c.id_lenguaje=l.id_lenguaje AND c.id_code="'.$id.'";' );

     // Llenamos el array
     $row = mysql_fetch_array($result, MYSQL_ASSOC);
     return $row;
  }
  
  function getSelecLenguajes()
  {
   		$result = an_query('SELECT * FROM  lenguajes ');
	  	echo '<select name="id_lenguaje" id="id_lenguaje">';

       	while($row = mysql_fetch_array($result, MYSQL_ASSOC))
       	{
        	echo '<option value="'.$row[id_lenguaje].'">'.$row[lenguaje].'</option>';
       	}
		echo '</select>';
  }
  
  
  ?>
