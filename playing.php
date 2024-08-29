<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statischer Hintergrund</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;600&display=swap');

        body {
            font-family: 'Roboto Mono', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow: hidden;
            top: 0;
            left: 0;
            background: url('/img/Background.png') no-repeat center center fixed;
            background-size: cover;
        }
        .scroll-text {
            position: absolute;
            width: 100%;
            color:  white;
            top: 0;
            left: 0;
            overflow: auto;
            max-height: 100vh;
            padding: 20px;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .container div:nth-child(odd) {
            align-self: flex-start;
            box-shadow: -10px 0 10px rgb(255, 255, 255);
        }
        .container div:nth-child(even) {
            align-self: flex-end;
            margin-right: 30px;
            box-shadow: 10px 0 10px rgba(255, 255, 255, 0.82);
        }
        .box {
            width: 30vw;
            padding: 20px;
            margin: 50px 10px;
            min-height: 20vh;
            background-color: transparent;
            border-radius: 8px;
        }
    </style>
</head>
<body>
<div class="scroll-text">
    <div class="container">
        <div class="box">
            <section id="personal-info">
                <h2>Persönliche Daten</h2>
                <p>Adresse: <span>Meine Strasse 33, 9999 Ortschaft</span></p>
                <p>Telefon: <span><a href="tel:+41123456789">123456789</a></span></p>
                <p>Email: <span><a href="mailto:demo@mail.ch?subject=Kontakt aufnehmen">demo@mail.ch</a></span></p>
                <p>Geburtsdatum: <span>01.01.2024</span></p>
                <p>Nationalität/Heimatort: <span>Schweiz/Heimatort</span></p>
            </section>
        </div>
        <div class="box">
            <section id="experience">
                <h2>Berufserfahrung</h2>
                <ul>
                    <li><p><strong>IT-Supporter</strong> bei Rado Switzerland, Lengnau BE (06.2023 - heute)</p></li>
                    <li><p><strong>Backend Developer</strong> bei Fruitcake W+P AG, Worb (08.2022 - 05.2023)</p></li>
                </ul>
            </section>
        </div>
        <div class="box">
            <section id="education">
                <h2>Ausbildung</h2>
                <ul>
                    <li><p><strong>Informatiker HF</strong>, Höhere Fachschule Mittel-Land, Grenchen (2023 - heute)</p></li>
                    <li><p><strong>Cloud-native, DevOps und Container – Vorkurs</strong>, Technische Berufsschule Zürich TBZ (2022 - 2023)</p></li>
                    <li><p><strong>Lernender</strong> bei Eta SA, Grenchen (08.2018 - 07.2022)</p></li>
                </ul>
            </section>
        </div>
        <div class="box">Box 4</div>
        <div class="box">Box 5</div>
    </div>
</div>
</body>
</html>
