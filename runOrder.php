<?php
    global $heats;
    $heats = 0;

    foreach (glob("./files/Heat[0-9]RunOrder.html") as $file)
    {
        $heats++;
    }
?>

<table style="width:65%" id="tbl-runOrder" class="w3-table w3-striped w3-border w3-bordered w3-centered">
    <thead>
        <tr class="w3-gray">
            <th align="center">Heat</th>
            <th align="center" colspan=2>Classes Running:</th>
        </tr>
    </thead>

    <tbody>
        <?php
            for ($i = 1; $i <= $heats; $i++)
            //foreach ($heats as $heat)
            {
                echo "<tr>";
                echo "<td>$i</td>";
                $file = file_get_contents("./files/Heat".$i."RunOrder.html");
                echo "<td>$file</td>";
                if (is_readable("./files/GridSheets".$i.".html")) {echo '<td><a href="./files/GridSheets'.$i.'.html">GridSheets</a></td>';} else {echo "<td>&nbsp;</td>";}
                echo "</tr>";
            }
        ?>
    </tbody>

    <thead>
        <tr class="w3-gray">
            <th align="center">Heat</th>
            <th align="center" colspan=2>Classes Working:</th>
        </tr>
    </thead>

    <tbody>
        <?php
            for ($i = 1; $i <= $heats; $i++)
            {
                echo "<tr>";
                echo "<td>$i</td>";
                $file = file_get_contents("./files/Heat".$i."WorkOrder.html");
                echo "<td>$file</td>";
                echo "<td>&nbsp;</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
