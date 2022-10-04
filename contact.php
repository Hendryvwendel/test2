<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="title">Registratie</div>
        <form action="contactform.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Naam</span>
                    <input type="text" name="name" placeholder="Vul hier je Naam in" required>
                </div>
                <div class="input-box">
                    <span class="details">Adres</span>
                    <input type="text" name="adress" placeholder="Vul hier je Adres in" required>
                </div>
                <div class="input-box">
                    <span class="details">Plaatsnaam</span>
                    <input type="text" name="place" placeholder="Vul hier je Plaatsnaam in" required>
                </div>
                <div class="input-box">
                    <span class="details">E-Mailadres</span>
                    <input type="text" name="email" placeholder="Vul hier je E-Mailadres in" required>
                </div>
                <div class="input-box">
                    <span class="details">Telefoonnummer</span>
                    <input type="number" name="phone" placeholder="Vul hier je Telefoonnummer in" required>
                </div>
                
            </div>
            <div class="gender-details">
                <input type="radio" name="Gender" id="dot-1">
                <input type="radio" name="Gender" id="dot-2">
                <input type="radio" name="Gender" id="dot-3">
                <span class="gender-title">Foto publiceerbaar (op mijn Website)</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="gender">Ja</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="gender">Nee</span>
                    </label>
                    <label for="dot-3">
                        <span class="dot three"></span>
                        <span class="gender">In overleg</span>
                    </label>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Insturen">
            </div>
        </form>
    </div>

</body>
</html>
