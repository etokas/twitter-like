# WE DO GOOD

Assurez-vous d'avoir `composer.phar` ainsi que `bower` sur votre machine

Dans le dossier `/we-do-good/public` : faites -> `bower install`

Dans le dossier `/we-do-good/server` : faites -> `composer install`


Placer le dossier dans MAMP | WAMP | LAMP

Se rendre sur : 

[http://localhost/we-do-good/public/#/](http://localhost/we-do-good/public/#/)


- Le dossier `/we-do-good/server` contient les sources en PHP qui font appel a l'api de twitter pour traiter les données.

- Le dossier `/we-do-good/public` conteint les sources en JavaScript pour la partie front-end 




Pour finir modifier le fichier `/we-do-good/server/app/index.php` 

Inserez le nom et vos clefs Twitter pour l'authentification 

```javascript
/**
 * CONFIGURATION KEYS
 */

/** Nom de votre compte twitter */
$screen_name = 'xx';

/** Vos clefs d'autentification */
$keys = array(
    'oauth_access_token' => "xxx",
    'oauth_access_token_secret' => "xxx",
    'consumer_key' => "xxx",
    'consumer_secret' => "xxx"
);

```
 