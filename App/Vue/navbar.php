<?php ob_start()?>
<!-- Menu connecté -->
<?php if(isset($_SESSION['connected'])):?>
<ul>
    <li><a href="./">Accueil</a></li>
    <li><a href="/choco2024/utilisateur/deconnexion">Déconnexion</a></li>
    <?=$_SESSION["nom"]."<br>"?>
    <?=$_SESSION["prenom"]."<br>"?>
    <img src="<?=$_SESSION["image"]?>" alt="" class="profil">
</ul>
<!-- Menu déconnecté -->
<?php else:?>
<ul>
    <li><a href="/choco2024">Accueil</a></li>
    <li><a href="/choco2024/utilisateur/add">S'inscrire</a></li>
    <li><a href="/choco2024/utilisateur/connexion">Se connecter</a></li>
</ul>
<?php endif;?>
<?php $navbar = ob_get_clean()?>
