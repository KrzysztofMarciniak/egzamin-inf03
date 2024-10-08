<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bar Smaczne Jadło</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header>
        <section class="baner">
            <h2>Bar Smaczne Jadło zaprasza serdecznie</h2>
        </section>
    </header>

    <div class="container">
        <aside class="panel-lewy">
            <h5>Przykładowe menu</h5>
            <table>
                <tr>
                    <td>Zupa Gazpacho</td>
                    <td>20 zł</td>
                </tr>
                <tr>
                    <td>Kurczak pieczony</td>
                    <td>40 zł</td>
                </tr>
            </table>
        </aside>

        <aside class="panel-prawy">
            <img src="menu.jpg" alt="Smaczne" />
        </aside>
    </div>

    <footer class="panel-dolny">
        <h3>Chcesz z nami pracować?</h3>
        <form action="rekrutacja.php" method="POST">
            <label for="imie">Imię:</label>
            <input type="text" name="imie" id="imie" required>
            <br>
            <label for="nazwisko">Nazwisko:</label>
            <input type="text" name="nazwisko" id="nazwisko" required>
            <br>
            <label for="stanowisko">Stanowisko:</label>
            <input type="number" name="stanowisko" id="stanowisko" required>
            <small>Stanowisko: (1 – kucharz, 2 – pomoc, 3 – kelner, 4 – barman)</small>
            <br>
            <button type="reset">WYCZYŚĆ</button>
            <button type="submit">REKRUTUJ</button>
        </form>
        <p>Stronę internetową opracował: <strong>krzysztof marciniak</strong></p>
    </footer>
</body>
</html>
