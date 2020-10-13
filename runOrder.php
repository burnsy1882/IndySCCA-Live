<table style="width:65%" id="tbl-runOrder" class="w3-table w3-striped w3-border w3-bordered w3-centered">
    <thead>
        <tr class="w3-gray">
            <th align="center">Heat</th>
            <th align="center">Classes Running:</th>
        </tr>
    </thead>
    
    <tbody>
        <tr align="left">
            <td>1</td>
        </tr>
    </tbody>
</table>


<Table style='width:65%' id='tbl-runOrder' class='w3-table w3-striped w3-border w3-bordered w3-centered'>
<TR class='w3-gray' ALIGN='center' VALIGN='middle'>
     <Th align='center'><FONT FACE='Arial'>Heat</FONT></Th>
     <Th align='center' colspan=2><FONT FACE='Arial'>Classes Running: </FONT></Th>
</TR>

<TR ALIGN='left' VALIGN='middle'>
     <TD><FONT FACE='Arial'>1</FONT></TD>
     <TD><FONT FACE='Arial'><?php include("Heat1RunOrder.html") ?></FONT></TD>
     <TD><FONT FACE='Arial'><?php if (is_readable("GridSheets1.html")) {echo '<A HREF="GridSheets1.html">GridSheets</A>';} else {echo "&nbsp;";} ?></FONT></TD>
</TR>
<TR ALIGN='left' VALIGN='middle'>
     <TD><FONT FACE='Arial'>2</FONT></TD>
     <TD><FONT FACE='Arial'><?php include("Heat2RunOrder.html") ?></FONT></TD>
     <TD><FONT FACE='Arial'><?php if (is_readable("GridSheets2.html")) {echo '<A HREF="GridSheets2.html">GridSheets</A>';} else {echo "&nbsp;";} ?></FONT></TD>
</TR>
<TR ALIGN='left' VALIGN='middle'>
     <TD><FONT FACE='Arial'>3</FONT></TD>
     <TD><FONT FACE='Arial'><?php include("Heat3RunOrder.html") ?></FONT></TD>
     <TD><FONT FACE='Arial'><?php if (is_readable("GridSheets3.html")) {echo '<A HREF="GridSheets3.html">GridSheets</A>';} else {echo "&nbsp;";} ?></FONT></TD>
</TR>
<TR ALIGN='left' VALIGN='middle'>
     <TD>&nbsp</TD>
     <TD>&nbsp</TD>
</TR>
<TR class='w3-gray' ALIGN='center' VALIGN='middle'>
    <Th align='center'><FONT FACE='Arial'>Heat</FONT></Th>
    <Th align='center' colspan=2><FONT FACE='Arial'>Classes Working: </FONT></Th>
</TR>
<TR ALIGN='left' VALIGN='middle'>
     <TD><FONT FACE='Arial'>1</FONT></TD>
     <TD><FONT FACE='Arial'><?php include("Heat1WorkOrder.html") ?></FONT></TD>
     <TD><FONT FACE='Arial'>&nbsp;</FONT></TD>
</TR><TR ALIGN='left' VALIGN='middle'>
     <TD><FONT FACE='Arial'>2</FONT></TD>
     <TD><FONT FACE='Arial'><?php include("Heat2WorkOrder.html") ?></FONT></TD>
     <TD><FONT FACE='Arial'>&nbsp;</FONT></TD>
</TR><TR ALIGN='left' VALIGN='middle'>
     <TD><FONT FACE='Arial'>3</FONT></TD>
     <TD><FONT FACE='Arial'><?php include("Heat3WorkOrder.html") ?></FONT></TD>
     <TD><FONT FACE='Arial'>&nbsp;</FONT></TD>
</TR></Table>
