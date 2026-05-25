<html>
    <head>
        <script>
            function display(name)
            {
                var x=new XMLHttpRequest();
                x.open("GET","d.php?name="+name,true);
                x.send();
                x.onreadystatechange=function()
                {
                   if(x.readyState==4 && x.status==200)
                   {
                    document.getElementById("show").innerHTML=x.responseText;
                   }

                }
            }
            </script>
            </head>
            <body>
                type here:<input type="text" id="name" onkeyup="display(this.value)"><br>
                <div id="show"></div>
</body>
</html>