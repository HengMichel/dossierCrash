<?php
/**
La fonction 'chargeClass' sera donc appelé quand une class sera requise.
L'argument sera le nom de la class requise.

 */
function chargeClass($className)
{
    // On remplace les \ qui sont dans le nom de la class à charger par des / qui est le séparateur de dossier
    // utilisé dans la plupart des systèmes d'exploitation
    // ⚠ RAPPEL : dans les namespaces, on ne peut utiliser que les \
    debug($className);
    $filePath = str_replace("\\", "/", $className);
    debug($filePath);
    $root = __DIR__ . "/../" . $filePath . ".php";
    debug($root);
    if (file_exists($root)) {
        require $root;
    } else {
        throw new Exception("La class $className n'a pas été trouvée.");
    }
}

/** 
La fonction spl_autoload_register permet de définir la fonction qui sera 
exécutée à chaque fois qu'une class sera requise par le code (par exemple,
quand on utilise le mot-clé 'new' pour instancier un objet)
 */
//1- la fontion "spl_autoload_register" recupere le nom de la classe lorsqu'elle rencontre la 1ère syntaxe "new", dans notre cas , on a inclus le fichier autoload contenant la fonction "spl_autoload_register". elle réagie dès qu'elle rencontre la syntaxe "$controller = new $classeController;" celle-ci contient le nom d'un fichier qui se trouve dans le dossier "Controller" (avec 1 C en majuscule)
// 2- elle fait appel a la fonction "chargeClass", en lui envoyant en paramètre la valeur de la variable "$classeController".
spl_autoload_register("chargeClass");