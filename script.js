$(document).ready(function(){
    $("#tblRunTicker").removeAttr("style");
    $("#tblRunTicker tr").removeAttr("class");
    $("#tblRunTicker tr:eq(0)").addClass("panel-heading");
    $("#tblRunTicker tr:eq(1)").addClass("class-heading");
});
