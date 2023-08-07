<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        margin: 0%;
        padding: 0;
        /* background-color: red; */
    }
</style>
<body>
    <div class="bc" style="position:absolute;top:0;z-index:-1;width:100%;height:100%">
        <img src="img/i1.png" style="width:100%;height:100%;filter:opacity(0.3)">
    </div>
    <div class="container">
        <div class="row">
            <div class="col" style="position: absolute;top:50%;left:40%;background:pink;padding:20px 15px;color:green;font-size:24px">
                Message Sent Successfully
            </div>
            <div class="go" style="position: absolute;top:70%;left:50%;">
                <a href="index.php" style="text-decoration: none;color:tomato;background:rebeccapurple;padding:10px;cursor:pointer;border-radius:3px">
                Goto Home</a>
            </div>
        </div>
    </div>
</body>

</html>