# twitter-like

Assurez-vous d'avoir `composer.phar` ainsi que `bower` sur votre machine

Dans le dossier `/twitter-like/public` : faites -> `bower install`

Dans le dossier `/twitter-like/server` : faites -> `composer install`


Placer le dossier dans MAMP | WAMP | LAMP

Se rendre sur : 

[http://localhost/twitter-like/public/#/](http://localhost/twitter-like/public/#/)


- Le dossier `/twitter-like/server` contient les sources en PHP qui font appel a l'api de twitter pour traiter les données.

- Le dossier `twitter-like/public` conteint les sources en JavaScript pour la partie front-end 




Pour finir modifier le fichier `/twitter-like/server/app/index.php` 

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
 
