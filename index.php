<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="icon" type="image/png" href="YOUR_FAVICON_HERE" style="border-radius: 50%;">
    <title>Protechnopolis</title>
    <style>
        body {
            font-family: "Roboto", sans-serif;
        }
        img#photo-profil {
            width: 80px; 
            height: 80px; 
            border-radius: 50%;
            margin-top: 10px;
        }
        .bouton {
            line-height: 40px;
        }
    </style>
    <script>
        function changerCouleurBouton(bouton, nouvelleCouleurFond, nouvelleCouleurTexte) {
            bouton.style.backgroundColor = nouvelleCouleurFond;
            bouton.style.color = nouvelleCouleurTexte;
        }
    </script>


</head>
<body style="background-color: white; text-align: center; margin: 0; padding: 0;">

<h1 style="font-size: 24px; margin-top: 20px; color: navy;">YOUR_TITLE_HERE</h1>

<img id="photo-profil" src="YOUR_PFP_LINK_HERE" alt="Photo de profil">

<p style="margin-top: 10px; font-size: 16px; color: navy;">YOUR_DESCRIPTION_HERE</p>

<div style="margin-top: 20px; margin-bottom: 50px; width: 80%; margin-left: 10%;">
    <?php
    $buttons = [
        ["BUTTON_LINK_HERE", "BUTTON_NAME_HERE", "BUTTON_IMAGE_LINK_HERE"], //  BUTTON 1
        ["BUTTON_LINK_HERE", "BUTTON_NAME_HERE", "BUTTON_IMAGE_LINK_HERE"], //  BUTTON 2
        ["BUTTON_LINK_HERE", "BUTTON_NAME_HERE", "BUTTON_IMAGE_LINK_HERE"], //  BUTTON 3
        ["BUTTON_LINK_HERE", "BUTTON_NAME_HERE", "BUTTON_IMAGE_LINK_HERE"], //  BUTTON 4
        ["BUTTON_LINK_HERE", "BUTTON_NAME_HERE", "BUTTON_IMAGE_LINK_HERE"], //  BUTTON 5
    ];

    foreach ($buttons as $button) {
        echo '<a href="' . $button[0] . '" class="bouton" onmouseover="changerCouleurBouton(this, \'white\', \'navy\')" onmouseout="changerCouleurBouton(this, \'navy\', \'white\')" style="width: 70%; padding: 15px; font-size: 16px; margin-bottom: 10px; cursor: pointer; text-decoration: none; color: white; background-color: navy; border: 1px solid navy; border-radius: 25px; display: inline-block; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: background-color 0.3s;">';
        echo '<img src="' . $button[2] . '" alt="Logo Bouton" style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px; display: inline-block; vertical-align: middle; float: left;">';
        echo $button[1] . '</a>';
    }
    ?>
</div>

</body>
</html>
