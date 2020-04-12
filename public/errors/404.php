<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
        body{
            font-family:Arial, Helvetica, sans-serif;
        }
        .wrap{
            width:1000px;
            margin:0 auto;
            background:#fff;
        }
        .logo {
            width:430px;
            margin:0 auto;
            padding-top:14em;
        }
        p a{
            color:#eee;
            font-size:13px;
            margin-left:30px;
            padding:5px;
            background:#FF3366;
            text-decoration:none;
            -webkit-border-radius:.3em;
            -moz-border-radius:.3em;
            border-radius:.3em;
        }
        p a:hover{
            color:#fff;
        }
        .footer{
            position:absolute;
            bottom:10px;
            right:10px;
            font-size:12px;
            color:#aaa;
        }
        .footer a{
            color:#666;
            text-decoration:none;
        }
        /*--responsive--*/

        @media(max-width:991px){

            .wrap {
                margin: 0px auto;
                width: 897px;
            }

        }
        @media(max-width:900px){
            .wrap {
                margin: 0px auto;
                width: 820px;
            }

        }
        @media(max-width:800px){
            .wrap {
                margin: 0px auto;
                width: 700px;
            }
        }
    </style>
</head>
<body>
<div class="wrap">
    <div class="logo">
        <img src="/errors/images/404.png" alt="">
        <p><a href="<?php PATH; ?>">Go back to Home</a></p>
    </div>
</div>

</body>
</html>
