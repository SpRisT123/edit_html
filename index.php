<?php
$connect = mysqli_connect('localhost','root','','edytor');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edytor HTML - JS</title>
</head>
<body>
<script  src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
</script>
<div id="top_menu_btn">
    <center>
<?php
$zpt = "SELECT * FROM znaczniki";
$query = mysqli_query($connect,$zpt);
$rows = mysqli_fetch_all($query,MYSQLI_ASSOC);

foreach($rows as $r){
    echo<<<END
        <input class="button" type="submit" value="{$r['wartosc']}" id="{$r['nazwa']}" onclick="insert('{$r['znacznik']}')">
    END;
}
?>
    <input type="submit" value="HTML5" onclick="HTML5()">
    <input type="submit" value="form" onclick="formularz()">
    <input type="submit" value="table" onclick="table()">
    </center>
</div>
<script>
    function insert(arg){
        var curPos = document.getElementById("text").selectionStart;
        console.log(curPos);
        let x = $("#text").val();
        let text_to_insert = arg;
        $("#text").val(
            x.slice(0, curPos) + text_to_insert + x.slice(curPos));
    }
    function HTML5(){
        var curPos = document.getElementById("text").selectionStart;
        console.log(curPos);
        let x = $("#text2").val();
        let text_to_insert = "<!DOCTYPE html>\n<html lang=\"en\">\n<head>\n<meta charset=\"UTF-8\">\n<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n<title>Document</title>\n</head>\n<body>\n\n</body>\n</html>";
        $("#text2").val(
            x.slice(0, curPos) + text_to_insert + x.slice(curPos));
    }
    function table(){
        var curPos = document.getElementById("text2").selectionStart;
        console.log(curPos);
        let x = $("#text2").val();
        let text_to_insert = "<table>\n<tr>\n<th> </th>\n<th> </th>\n</tr>\n<tr>\n<th> </th>\n<th> </th>\n</tr>\n</table>";
        $("#text2").val(
            x.slice(0, curPos) + text_to_insert + x.slice(curPos));
    }
    function formularz() {
        var curPos = document.getElementById("text2").selectionStart;
        console.log(curPos);
        let x = $("#text2").val();
        let text_to_insert = "<form method='' action=''> \n \n</form>";
        $("#text2").val(
            x.slice(0, curPos) + text_to_insert + x.slice(curPos));
    }

</script>
<script>
    function zapisz() {
        var textToSave = document.getElementById('text').value;
        var hiddenElement = document.createElement('a');

        hiddenElement.href = 'data:attachment/text,' + encodeURI(textToSave);
        hiddenElement.target = '_blank';
        hiddenElement.download = 'index.html';
        hiddenElement.click();
    }

    document.getElementById('pobierz').addEventListener('click', zapisz);
</script>
<center>
   
</center>
<center>
    <br>
    <button id="pobierz" onclick="zapisz()"><img src="floppy-disk.png" alt="Zapisz"></button>


    <div id="kod">
        <textarea id="text" rows="30" cols="80"></textarea>
        <textarea id="text2" rows="30" cols="80"></textarea>
    </div>
</center>
</body>
</html>
