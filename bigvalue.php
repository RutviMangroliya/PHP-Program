<html>
    <head>
        <style>

            #tbl{
                margin-top: 100px;
                background-color: skyblue;
                width: 400px;
                box-shadow: 5px 5px 5px 5px grey;
            }

            table,td{
                border: 1px solid black;
            }

            table{
                border-collapse: collapse;
            }

            input[type=text]{
                height: 30px;
                border-color: dodgerblue;
            }

            td{
                padding: 10px;
                text-align: left;
            }

            .td{
                background-color: red;
                color: white;
            }

        </style>
    </head>
    <body>
    <?php

		$fvalue = $_POST["fvalue"];
		$svalue = $_POST["svalue"];
		$tvalue = $_POST["tvalue"];
		
		function value($fvalue,$svalue,$tvalue){
			
				if($fvalue == $svalue || $fvalue == $tvalue || $fvalue > $svalue && $fvalue > $tvalue)
			{
				echo $fvalue;
			}
			else if($svalue == $tvalue || $svalue > $fvalue && $svalue > $tvalue)
			{
				echo $svalue;
			}
			else if($fvalue==$svalue || $fvalue==$tvalue)
			{
				echo $fvalue;
			}
			else
			{
				echo $tvalue;
			}
		}	
    ?>
    <table align="center" id="tbl">
				<tr>
					<td>First Value </td>
					<td><?php echo $fvalue;?></td>
				</tr>
				<tr>	
					<td>Second Value </td>
					<td><?php echo $svalue;?></td>
				</tr>
				<tr>
					<td>Third Value </td>
					<td><?php echo $tvalue;?></td>
				</tr>
				<tr>
					<td class="td">Gretest Value</td>
					<td class="td"><?php value($fvalue,$svalue,$tvalue); ?></td>
				</tr>
			</table>
    </body>
</html>   