<?php
//Liste des nationalités en tableau
$nationalities = array(
'Choisissez une nationalité','Française', 'Suisse', 'Belge', 'Allemande', 'Italienne', 'Afghane', 'Albanaise', 'Algerienne', 'Americaine', 'Andorrane', 'Angolaise', 'Antiguaise-et-barbudienne', 'Argentine', 'Armenienne', 'Australienne', 'Autrichienne', 'Azerbaïdjanaise', 'Bahamienne', 'Bahreinienne', 'Bangladaise',
 'Barbadienne', 'Belizienne', 'Beninoise', 'Bhoutanaise', 'Bielorusse', 'Birmane','Bissau-Guinéenne', 'Bolivienne', 'Bosnienne', 'Botswanaise', 'Bresilienne', 'Britannique', 'Bruneienne', 'Bulgare', 'Burkinabe', 'Burundaise', 'Cambodgienne', 'Camerounaise', 'Canadienne', 'Cap-verdienne',
  'Centrafricaine', 'Chilienne', 'Chinoise', 'Chypriote', 'Colombienne', 'Comorienne', 'Congolaise', 'Costaricaine', 'Croate', 'Cubaine', 'Danoise', 'Djiboutienne', 'Dominicaine', 'Dominiquaise', 'gyptienne',
 'Emirienne', 'Equato-guineenne', 'Equatorienne', 'Erythreenne', 'Espagnole', 'Est-timoraise', 'Estonienne', 'Ethiopienne', 'Fidjienne', 'Finlandaise', 'Gabonaise', 'Gambienne', 'Georgienne', 'Ghaneenne', 'Grenadienne', 'Guatemalteque', 'Guineenne', 'Guyanienne', 'Haïtienne', 'Hellenique',
  'Hondurienne', 'Hongroise', 'Indienne', 'Indonesienne', 'Irakienne', 'Irlandaise', 'Islandaise', 'Israélienne', 'Ivoirienne', 'Jamaïcaine', 'Japonaise', 'Jordanienne', 'Kazakhstanaise', 'Kenyane', 'Kirghize', 'Kiribatienne', 'Kittitienne-et-nevicienne',
 'Kossovienne','Koweitienne','Laotienne','Lesothane','Lettone','Libanaise','Liberienne','Libyenne','Liechtensteinoise','Lituanienne','Luxembourgeoise','Macedonienne','Malaisienne','Malawienne','Maldivienne','Malgache','Malienne','Maltaise','Marocaine','Marshallaise','Mauricienne','Mauritanienne','Mexicaine','Micronesienne',
 'Moldave','Monegasque','Mongole','Montenegrine','Mozambicaine','Namibienne','Nauruane','Neerlandaise','Neo-zelandaise','Nepalaise','Nicaraguayenne','Nigeriane','Nigerienne','Nord-coréenne','Norvegienne','Omanaise','Ougandaise','Ouzbeke','Pakistanaise','Palau','Palestinienne','Panameenne','Papouane-neoguineenne','Paraguayenne','Peruvienne','Philippine','Polonaise','Portoricaine','Portugaise','atarienne',
 'Roumaine', 'Russe', 'Rwandaise', 'Saint-Lucienne', 'Saint-Marinaise', 'Saint-Vincentaise-et-Grenadine', 'Salomonaise', 'Salvadorienne', 'Samoane', 'Santomeenne', 'Saoudienne', 'Senegalaise', 'Serbe', 'Seychelloise', 'Sierra-leonaise', 'Singapourienne', 'Slovaque', 'Slovene', 'Somalienne', 'Soudanaise',
  'Sri-lankaise', 'Sud-africaine', 'Sud-coréenne', 'Suedoise', 'Surinamaise', 'Swazie', 'Syrienne', 'Tadjike', 'Taiwanaise', 'Tanzanienne', 'Tchadienne',
 'Tcheque', 'Thaïlandaise', 'Togolaise', 'Tonguienne', 'Trinidadienne', 'Tunisienne', 'Turkmene', 'Turque', 'Tuvaluane', 'Ukrainienne', 'Uruguayenne', 'Vanuatuane', 'Venezuelienne',
 'Vietnamienne', 'Yemenite','Zambienne','Zimbabweenne');
//Liste des pays en tableau
$countries = array('Choisissez un pays','Afghanistan','Albania','Algeria','Andorra','Angola','Antigua & Deps','Argentina','Armenia','Australia','Austria','Azerbaijan','Bahamas','Bahrain','Bangladesh','Barbados','Belarus','Belgium','Belize','Benin','Bhutan','Bolivia','Bosnia Herzegovina','Botswana',
'Brazil','Brunei','Bulgaria','Burkina','Burundi','Cambodia','Cameroon','Canada','Cape Verde','Central African Rep','Chad','Chile','China','Colombia','Comoros','Congo','Congo {Democratic Rep}','Costa Rica','Croatia','Cuba','Cyprus','Czech Republic','Denmark','Djibouti','Dominica',
'Dominican Republic','East Timor','Ecuador','Egypt','El Salvador','Equatorial Guinea','Eritrea','Estonia','Ethiopia','Fiji','Finland','France','Gabon','Gambia','Georgia','Germany','Ghana','Greece','Grenada','Guatemala','Guinea','Guinea-Bissau','Guyana','Haiti','Honduras',
'Hungary','Iceland','India','Indonesia','Iran','Iraq','Ireland {Republic}','Israel','Italy','Ivory Coast','Jamaica','Japan','Jordan','Kazakhstan','Kenya','Kiribati','Korea North','Korea South','Kosovo','Kuwait','Kyrgyzstan','Laos','Latvia','Lebanon','Lesotho',
'Liberia','Libya','Liechtenstein','Lithuania','Luxembourg','Macedonia','Madagascar','Malawi','Malaysia','Maldives','Mali','Malta','Marshall Islands','Mauritania','Mauritius','Mexico','Micronesia','Moldova','Monaco','Mongolia','Montenegro','Morocco','Mozambique','Myanmar, {Burma}','Namibia',
'Nauru','Nepal','Netherlands','New Zealand','Nicaragua','Niger','Nigeria','Norway','Oman','Pakistan','Palau','Panama','Papua New Guinea','Paraguay','Peru','Philippines','Poland','Portugal','Qatar','Romania','Russian Federation','Rwanda','St Kitts & Nevis','St Lucia','Saint Vincent & the Grenadines','Samoa','San Marino','Sao Tome & Principe','Saudi Arabia','Senegal','Serbia','Seychelles'
,'Sierra Leone','Singapore','Slovakia','Slovenia','Solomon Islands','Somalia','South Africa','Spain','Sri Lanka','Sudan','Suriname','Swaziland','Sweden','Switzerland','Syria','Taiwan','Tajikistan','Tanzania','Thailand','Togo','Tonga','Trinidad & Tobago','Tunisia','Turkey','Turkmenistan','Tuvalu','Uganda','Ukraine','United Arab Emirates','United Kingdom','United States',
'Uruguay','Uzbekistan','Vanuatu','Vatican City','Venezuela','Vietnam','Yemen','Zambia','Zimbabwe');
//Liste des regex à utiliser pour la vérification
$regLastName = '/^([a-zàâäéèêëïîôöùûüç]+((\s)|(\-))*)*$/i';
$regFirstName = '/^([a-zàâäéèêëïîôöùûüç]+((\s)|(\-))*)*$/i';
$regexDate = '/^[0-9]{2}[\/]{1}[0-9]{2}[\/]{1}[0-9]{4}$/';
$regCountry = '/^([A-Z]{1}[a-z\-çéèâîôê]+){1}$/i';
$regEmail = '/^([a-zA-Z0-9\-.àâäéèêëïîôöùûüç]+){1}\@((outlook)|(hotmail)|(laposte)){1}.((fr)|(com)|(net)){1}$/';
$phoneNumber = '/^((06)|(07)|(03)|(09)){1}[\d]{8}$/';
$studies = '/^((Sans diplôme)|(Bac\+1)|(Bac\+2)|(Bac\+3)|(Supérieur))$/';
$peNumber = '/^[\d]{7}[a-z]{1}$/';
$badgeNumber = '/^[\d]{1,2}$/';
$regAddress =  '/^[A-z-éè\ 0-9\']+$/';
$CodeAcademyLink = '/^www.codecademy.com$/';
$freeText = '/^([a-zA-Z0-9\-\'.àâäéèêëïîôöùûüç]+(\s)*)*$/i';
//Mise en place des id en tableau associatif (nomId => regex) à utiliser pour mettre en boucle les vérifications
$id = array('lastName' => $regLastName,'firstName'=> $regFirstName,'birthDay' => $regexDate,'birthCountry'=> $regCountry,'nationality'=> $regCountry,'adress'=> $regAddress,'eMail'=> $regEmail,'phoneNumber'=> $phoneNumber,'studies'=> $studies,
'peNumber'=> $peNumber,'badgeNumber'=> $badgeNumber,'CodeAcademyLink'=> $CodeAcademyLink,'heroes'=> $freeText,'hacks'=> $freeText,'xp' => $freeText);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <title>Tp Partie 10</title>
    </head>
    <body>
        <div class="container document">
            <div class="row">
                <div class="offset-lg-3 col-lg-6">
                    <?php
                    //Si on a appuyé sur "Afficher mes données d'inscription", on affiche les résultats
                    if(isset($_POST['submit'])){?>
                        <div class="results">
                            <?php 
                            //Boucle foreach pour boucler les vérifications pour chaque id
                            foreach($id as $value => $regex){
                                //Condition pour vérifier l'existence du champs rempli et la bonne tenue des champs remplis (selon les regex)
                                if(!empty($_POST[$value]) && (preg_match($regex, $_POST[$value]))){
                                  //On établis une protection des résultats des inputs pour rendre inoffensive les possibles balises inscrites avec htmlspecialchars
                                  $idContent = htmlspecialchars($_POST[$value]);?>
                                    <!--Affichage de la valeur de l'input quand toutes les conditions sont remplis...-->
                                    <p><?= $idContent; ?></p>
                                <?php } else { ?>
                                    <!--...Ou affichage d'un message d'erreur lorsqu'elles ne le sont pas-->
                                    <p class="error">Le champs <?= $value; ?> est invalide ou non remplis</p>
                                <?php }
                            }?>
                        </div>
                    <?php } else {
                        //Si l'on a pas encore appuyé sur "Afficher mes données d'inscription", afficher le formulaire à remplir 
                    ?>
                    <form action="#" method="POST">
                        <ul class="listForm">
                            <li><!--Champs nom de famille-->
                                <label for="lastName">Nom de famille: </label>
                                     <input type="text" id="lastName" name="lastName" maxlength="18" />
                            </li>
                            <li><!--Champs prénom-->
                                <label for="firstName">Prénom: </label>
                                    <input type="text" id="firstName" name="firstName" maxlength="15" />
                            </li>
                            <li><!--Champs date de naissance-->
                                <label for="birthDay">Date de naissance: </label>
                                <input type="text" placeholder="dd/mm/yyyy" id="birthDay" name="birthDay" />
                            </li>
                            <li><!--Champs pays de naissance-->
                                <label for="birthCountry">Pays de naissance: </label>
                                    <select name="birthCountry" id="birthCountry">
                                        <?php //Boucle liste des pays
                                        foreach($countries as $numbCountry => $country){?>
                                            <option name="<?=$country;?>" value="<?=$country;?>" <?= ($numbCountry == 0) ? 'selected disabled' : ''; ?>><?= $country; ?></option>
                                        <?php } ?>
                                    </select>
                            </li>
                            <li><!--Champs nationalité-->
                                <label for="nationality">Nationalité: </label>
                                    <select name="nationality" id="nationality">
                                        <?php //Boucle liste des nationalités
                                        foreach($nationalities as $numbNationality => $nationality){?>
                                            <option name="<?=$nationality;?>" value="<?=$nationality;?>" <?=($numbNationality == 0) ? 'selected disabled' : ''; ?>><?= $nationality; ?></option>
                                        <?php } ?>
                                    </select>
                            </li>
                            <li><!--Champs adresse postale-->
                                <label for="adress">Adresse: </label>
                                    <input type="text" id="adress" name="adress" />
                            </li>
                            <li><!--Champs Adresse e-mail-->
                                <label for="eMail">Adresse E-Mail: </label>
                                    <input type="mail" id="eMail" name="eMail" />
                            </li>
                            <li><!--Champs numéro de téléphone-->
                                <label for="phoneNumber">Numéro de téléphone: </label>
                                    <input type="tel" id="phoneNumber" name="phoneNumber" />
                            </li>
                            <li><!--Champs niveau d'étude-->
                                <label for="studies">Diplôme</label>
                                    <select name="studies" id="studies">
                                        <option selected disabled>Choisissez votre niveau d'étude</option>
                                        <option name="Sans diplôme" value="Sans diplôme">Sans diplôme</option>
                                        <option name="Bac+1" value="Bac+1">Bac+1</option>
                                        <option name="Bac+2" value="Bac+2">Bac+2</option>
                                        <option name="Bac+3" value="Bac+3">Bac+3</option>
                                        <option name="Supérieur" value="Supérieur">Supérieur</option>
                                    </select>
                            </li>
                            <li><!--Champs numéro Pôle Emploi-->
                                <label for="peNumber">Numéro Pôle Emploi</label>
                                    <input type="text" id="peNumber" name="peNumber" />
                            </li>
                            <li><!--Champs nombre de badge-->
                                <label for="badgeNumber">Nombre de badge</label>
                                    <input type="number" id="badgeNumber" name="badgeNumber" />
                            </li>
                            <li><!--Champs lien Code Académie-->
                                <label for="CodeAcademyLink">Lien CodeAcademy</label>
                                    <input type="text" id="CodeAcademyLink" name="CodeAcademyLink" />
                            </li>
                            <li><!--Champs Question ouverte quels héros seriez-vous ?-->
                                <label for="heroes">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label>
                                    <textarea name="heroes" id="heroes" rows="5" cols="50" placeholder='Insérez votre texte ici' maxlength="100"></textarea>
                            </li>
                            <li><!--Champs Question ouverte hack-->
                                <label for="hacks">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                                    <textarea name="hacks" id="hacks" rows="5" cols="50" placeholder='Insérez votre texte ici' maxlength="100"></textarea>
                            </li>
                            <li><!--Champs Question ouverte expériences-->
                                <label for="xp">Avez-vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                                    <textarea name="xp" id="xp" rows="5" cols="50" placeholder='Insérez votre texte ici' maxlength="100"></textarea>
                            </li>
                            <li><!--Bouton de validation d'inscription de l'utilisateur-->
                                <input type="submit" id="submit" name="submit" value="Afficher mes données d'inscription" />
                            </li>
                        </ul>
                    </form>
                        <?php //Fin de l'instruction
                        } ?>
                </div>
            </div>
        </div>
    </body>
</html>
