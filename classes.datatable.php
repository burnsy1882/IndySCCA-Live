<table style="width:90%" id="tbl01" class="w3-table w3-striped w3-border w3-bordered w3-centered">
    <thead>
        <tr class="w3-black">
            <th>STREET</th>
            <th>STREET TOURING</th>
            <th>STREET PREPARED</th>
            <th>STREET MODIFIED</th>
            <th>PREPARED</th>
            <th>MODIFIED</th>
            <th>KART/FSAE</th>
            <th>SPEC</th>
            <th>CAM</th>
            <th>HERITAGE</th>
            <th>XTREME</th>
            <th>PRO</th>
        </tr>
    </thead>
</table>

<script>
    $( document ).ready(function() {
        $('#tbl01').DataTable( {
            ajax: "classes.txt",
            paging: false,
            ordering: false,
            searching: false,
            scrollX: false
        });
    });
</script>