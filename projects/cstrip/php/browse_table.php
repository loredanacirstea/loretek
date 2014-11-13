<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta content="text/html; charset=ISO-8859-1"
 http-equiv="content-type">
  <title>browse_table.php</title>
</head>
<body>
<br>
<br>
<br>
&nbsp;
<table
 style="width: 350px; height: 56px; text-align: left; margin-left: auto; margin-right: auto;"
 border="1" cellpadding="2" cellspacing="2">
  <tbody>
    <tr>
      <td style="text-align: center;">ID</td>
      <td style="text-align: center;">NAME</td>
      <td style="text-align: center;">ACTIONS</td>
    </tr>
    <?php
    
    include('lib/neotek/db/view.php');
    
	$table = $_GET["table"];
  $cstrips = new view($table);
  $cstrips->browse();
	if($cstrips == false)
		print("<td>No items</td>");
	else
	        foreach($cstrips->recordsArray as $key=>$value)
			{	
				$id = $value->recordData["id"];
        if($table != "neo_intltxt"){
          $textNo = $value->recordData["text_no"];
        }
        else{
          $textNo = $value->recordData["no"];  
        }
        $txt = new record("neo_intltxt");
        $txt->get_info($textNo);
        $text = $txt->recordData["title"];
        
	            					
	           		print(" <tr>
                                         <td>$id</td>
                                         <td>$text</td>
                                         <td style=\"text-align: center;\"><a
					 href=\"insert_record.php?table=$table&amp;id=$id\" target=\"_self\">UPDATE</a></td>
					 <td><a
                                         href=\"%3Ca%20href=%22delete_record.php?table=$table&amp;id=$id%22%20target=%22_blank%22%3EDELETE%3C/a%3E\"
                                         target=\"_blank\">DELETE</a></td>
                                        <td><a href=\"display_record.php?table=$table&amp;id=$id\"
					 target=\"_self\">DISPLAY</a></td>
                                         </tr> ");
	        	}	
?>
  </tbody>
</table>
<br>
<br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;<a
 href=
<?php
$string = "insert_record.php?table=" . $table;
print($string); ?> target="_self">NEW ITEM</a><br>
</body>
</html>
