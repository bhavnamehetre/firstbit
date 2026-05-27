<html>
    <body>
        <form method="POST" action="#">
            enter file:<input type="text" name="f1"><br>
            type of file:<input type="radio" name="f2" value="1"><br>
            last access time:<input type="radio" name="f2" value="2"><br>
            size of file:<input type="radio" name="f2" value="3"><br>
            delete the  file:<input type="radio" name="f2" value="4"><br>
            <input type="submit" value="submit">
</form>
</body>
<html>
    <?php

    $a=$_POST["f1"];
    $ch=$_POST["f2"];
    switch($ch)
    {
        case 1:
            $b=filetype($a);
            echo $b;
            break;

            case 2:$b=fileatime($a);
            echo $b;
            break;

            case 3:$b=filesize($a);
            echo $b;
            break;

            case 4:
                if(file_exists($a))
                {
                    unlink($a);
                    echo "deleted...!";
                }
                else
                {
                    echo "not...!";
                }
                break;


    }
