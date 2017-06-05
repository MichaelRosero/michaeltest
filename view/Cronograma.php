<?php 

include('../model/conexion.php');

session_start();
$id_usuario = $_SESSION['id']; 

$output = array();  
$query = " select * from cronograma where id_estudiante = ".$id_usuario." or id_docente = ".$id_usuario." and id_estado=1; ";  

 $result = mysqli_query($connect, $query);  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output[] = $row;  
      }  
 } 


?>

<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='../recursos/fullcalendar.min.css' rel='stylesheet' />
<link href='../recursos/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='../recursos/moment.min.js'></script>
<script src='../recursos/jquery.min.js'></script>
<script src='../recursos/fullcalendar.min.js'></script>



<script type="text/javascript">
		$(document).ready(function() {
			/*
			*   Examples - images
			*/




			$('#calendar').fullCalendar({

				eventClick: function(calEvent, jsEvent, view) {
		        alert('Titulo: ' + calEvent.title);
		        // change the border color just for fun
		        $(this).css('border-color', 'red');

		         if (calEvent.url) {
			            // window.open(calEvent.url);
			            window.open(calEvent.url, "", "width=500,height=400");
			            return false;
			        }

		    },


				defaultDate: '<?php echo date('Y-m-d'); ?>',
				editable: true,
				eventLimit: true, // allow "more" link when too many events
				events: [
				<?php 	foreach($output as $posicion=>$cronograma)	{ ?>		
					{
						title: '<?php echo $cronograma['TITULO'] . ' Descripción: ' . $cronograma['DESCRIPCION']; ?>',
						url: 'http://google.com/',
						start: '<?php echo $cronograma['FECHA_INICIO']; ?>',
						end: '<?php echo $cronograma['FECHA_FIN']; ?>'
					},

				<?php } ?>

				]
			});
		});
	</script>

<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>
</head>
<body>

	<div id='calendar'></div>


</body>



</html>
