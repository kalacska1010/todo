<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.min.js"></script>
        <script src="feldolgoz.js" type="text/javascript"></script>
        <link href="stilus.css" rel="stylesheet" type="text/css"/>
        <title>Kalácska Bálint</title>
    </head>
    <body><header><h1>Teendők</h1></header>

        <form action="#" method="POST" class="urlap">
            <h2> TODO lista</h2>

            <input type="text" id="szoveg" name="szoveg" placeholder="Szöveg">
            <input type="date" id="datum" name="datum" value="2021-02-06"  >
            <input type="button" id="Add" name="Add" value="Add" novalidate></input>
            <input type="button" id="betolt" name="betolt" value="Betolt" ></input>
            
            <label >Válassz kategóriát!</label>
                <select name="kategoria" id="kategoria">
                    <option value="ures">Mind</option>
                </select>
            <input type="button" id="rendez" name="rendez" value="Rendez">
        </form>
        <article>

        </article>
        <footer>
            Kalácska Bálint
        </footer>
        <?php
        ?>
    </body>
</html>
