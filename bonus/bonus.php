<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bonus.css?<?= time() ?>">
    <link rel="stylesheet" href="../style.css?<?= time() ?>">
    <title>Quiz</title>
</head>

<body>
    <div class="header">
        <h1>Ben jij ICT waardig?</h1>
    </div>
    <div class="center">
        <div class="bonus-content">
            <h2 class="question">Bonusvraag</h2>
            <div>Dit is een bonusvraag, als je het leuk vind kan je deze maken, deze wordt niet meegenomen in de beoordeling ;) <br> Kom je niet uit de vraag dan kan je hiernaast op het vraagteken klikken -></div>
            <button class="information" onclick="geekConfirm()">
                ?
            </button>

            <p id="geek"></p>


            <form action="">
                <div class="bonusquestion">
                    &lt;!DOCTYPE html&gt;<br>
                    &lt;<select class="html-select">
                        <option hidden>--Please choose an option--</option>
                        <option value="html">html</option>
                        <option value="css">css</option>
                        <option value="js">js</option>
                        <option value="div">div</option>
                        <option value="body">body</option>
                        <option value="head">head</option>
                        <option value="title">title</option>
                    </select>&gt;<br>

                    &lt;<select class="html-select">
                        <option hidden>--Please choose an option--</option>
                        <option value="html">html</option>
                        <option value="css">css</option>
                        <option value="js">js</option>
                        <option value="div">div</option>
                        <option value="body">body</option>
                        <option value="head">head</option>
                        <option value="title">title</option>
                    </select>&gt;<br>

                    &lt;<select class="html-select">
                        <option hidden>--Please choose an option--</option>
                        <option value="html">html</option>
                        <option value="css">css</option>
                        <option value="js">js</option>
                        <option value="div">div</option>
                        <option value="body">body</option>
                        <option value="head">head</option>
                        <option value="title">title</option>
                    </select>&gt;Page Title&lt;/<select class="html-select">
                        <option hidden>--Please choose an option--</option>
                        <option value="html">html</option>
                        <option value="css">css</option>
                        <option value="js">js</option>
                        <option value="div">div</option>
                        <option value="body">body</option>
                        <option value="head">head</option>
                        <option value="title">title</option>
                    </select>&gt;<br>

                    &lt;/<select class="html-select">
                        <option hidden>--Please choose an option--</option>
                        <option value="html">html</option>
                        <option value="css">css</option>
                        <option value="js">js</option>
                        <option value="div">div</option>
                        <option value="body">body</option>
                        <option value="head">head</option>
                        <option value="title">title</option>
                    </select>&gt;<br>

                    &lt;<select class="html-select">
                        <option hidden>--Please choose an option--</option>
                        <option value="html">html</option>
                        <option value="css">css</option>
                        <option value="js">js</option>
                        <option value="div">div</option>
                        <option value="body">body</option>
                        <option value="head">head</option>
                        <option value="title">title</option>
                    </select>&gt;<br>

                    &lt;<select class="html-select">
                        <option hidden>--Please choose an option--</option>
                        <option value="html">html</option>
                        <option value="css">css</option>
                        <option value="js">js</option>
                        <option value="div">div</option>
                        <option value="body">body</option>
                        <option value="head">head</option>
                        <option value="title">title</option>
                    </select>&gt;<br>

                    in deze les heb ik geleerd over de
                    <select class="menu">
                        <option hidden>--Please choose an option--</option>
                        <option value="Frontend">Frontend</option>
                        <option value="Backend">Backend</option>
                        <option value="Javascript">Javascript</option>
                    </select> en de

                    <select class="menu">
                        <option hidden>--Please choose an option--</option>
                        <option value="Frontend">Frontend</option>
                        <option value="Backend">Backend</option>
                        <option value="Javascript">Javascript</option>
                    </select> van een groot deel in de ict wereld </br>

                    &lt;/<select class="html-select">
                        <option hidden>--Please choose an option--</option>
                        <option value="html">html</option>
                        <option value="css">css</option>
                        <option value="js">js</option>
                        <option value="div">div</option>
                        <option value="body">body</option>
                        <option value="head">head</option>
                        <option value="title">title</option>
                    </select>&gt;<br>

                    &lt;/<select class="html-select">
                        <option hidden>--Please choose an option--</option>
                        <option value="html">html</option>
                        <option value="css">css</option>
                        <option value="js">js</option>
                        <option value="div">div</option>
                        <option value="body">body</option>
                        <option value="head">head</option>
                        <option value="title">title</option>
                    </select>&gt;<br>

                    &lt;/<select class="html-select">
                        <option hidden>--Please choose an option--</option>
                        <option value="html">html</option>
                        <option value="css">css</option>
                        <option value="js">js</option>
                        <option value="div">div</option>
                        <option value="body">body</option>
                        <option value="head">head</option>
                        <option value="title">title</option>
                    </select>&gt;
                </div>
                <input action="action" onclick="window.history.go(-1); return false;" type="submit" value="Volgende" class="next bonus-next" />
            </form>

        </div>

        <script>
            function geekConfirm() {
                var x;
                if (confirm("Dit is een standaard setup voor een html bestand. Voor deze bonusvraag moet je wat gaan uitzoeken. Een kleine tip: zoek op google naar 'introduction html' (klik op 'OK' om naar de googlepagina te gaan)") === true) {
                    window.open('https://www.google.com/search?q=introduction+html&rlz=1C1AWFC_nlNL918NL918&oq=introduction+html&aqs=chrome..69i57j0i512j0i22i30l5j69i60.7647j0j7&sourceid=chrome&ie=UTF-8');
                    x = "";
                } else {
                    x = "";
                }
                document.getElementById("geek").innerHTML = x;
            }
        </script>
    </div>
</body>