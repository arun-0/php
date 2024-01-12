<!-- HTML File with AJAX Request -->
<script>
    function loadData() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("output").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "ajax_example.php", true);
        xhttp.send();
    }
</script>

<button onclick="loadData()">Load Data</button>
<div id="output"></div>
