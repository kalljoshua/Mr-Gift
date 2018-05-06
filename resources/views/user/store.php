Checkbox: <input type="checkbox" id="myCheck"  onclick="myFunction()">

<div id="text" style="display:none">Checkbox is CHECKED!</div>

<script>
    function myFunction() {
        var checkBox = document.getElementById("myCheck");
        var text = document.getElementById("text");
        if (checkBox.checked == true){
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
    }
</script>