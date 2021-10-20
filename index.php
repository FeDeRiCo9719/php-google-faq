<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Google Faq</title>

    <!-- style -->
    <style>
        /* reset */
        *{
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
        }

        /* common */
        body {
            background-color: white;
            font-family: 'Roboto', sans-serif;
        }

        /* HEADER */
        header {
            background-color: white;
            border-bottom: 1px solid lightgrey;
            height: 100px;
            padding: 0 20px;
            width: 100%;
            position: fixed; 
            z-index: 10;
        }
        /* logo */
        .topHeader {
            /* border: 1px solid blue; */
            height: 60px;
            padding-top: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .boxTopHeader {
            /* border: 1px solid blue; */
            display: flex;
            align-items: flex-end;
            gap: 10px;
        }
        .textPrivacy {
            font-size: 22px;
            color: grey;
            /* border: 1px solid blue; */
        }
        .boxLogo {
            height: 25px;
            /* border: 1px solid blue; */
        }
        .boxLogo img {
            height: 100%;
        }
        .icon {
            background-color: violet;
            color: white;
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
            height: 30px;
            width: 30px;
        }
        /* nav */
        nav {
            height: 40px;
        }
        ul {
            height: 100%;
            display: flex;
            align-items: center;
            gap: 50px;
        }
        ul li {
            list-style: none;
        }
        ul li a {
            text-decoration: none;
            color: grey;
        }

        /* MAIN */
        main {
            width: 70%;
            height: 2000px;
            margin: 0 auto;
            padding-top: 150px;
            background-color: lightgrey;
        }
    </style>
</head>

<body>
    <header>
        <!-- logo -->
        <div class="topHeader">
            <div class="boxTopHeader">
                <div class="boxLogo">
                    <img src="img/googlelogo_clr_74x24px.svg" alt="">
                </div>
                <div class="textPrivacy">Privacy e termini</div>
            </div>
            <div class="boxTopHeader">
                <div class="icon">
                    A
                </div>
            </div>
        </div>
        <!-- nav -->
        <nav>
            <ul>
                <li>
                    <a href="#">Introduzione</a>
                </li>
                <li>
                    <a href="#">Norme sulla privacy</a>
                </li>
                <li>
                    <a href="#">Termini di servizio</a>
                </li>
                <li>
                    <a href="#">Tecnologie</a>
                </li>
                <li>
                    <a href="#">Domande frequenti</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>ciao

    </main>
</body>
</html>