<html>
    <body>
        <script>
            function display()
            {
                let username=document.getElementById("t1").value;
                let password=document.getElementById("t2").value;

                let u=/^[a-z]+$/;
                let p=/^[?*A-Z][a-z]+$/;

                if(username.match(u) && password.match(p))
                {
                    window.alert("login sucessfull...!");
                }
                else
                {
                    window.alert("invalid username and password...!");
                }
            }
        </script>
        <form method="post" action="#">
            Enter Username:<input type="text" id="t1"><br><br>
            Enter Password:<input type="text" id="t2"><br><br>
            <button type="submit" onclick="display()">submit</button>
        </form>
    </body>
</html>