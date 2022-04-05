# FootballData
## introduction 
<p> ce package est une inspiration du package de grammar, il a été 
Conçu au moment du challenge du mois de mars 2022, un challenge qui se devait une application 
De live score. En vu d'apprendre des nouvelles connaissances sur la technologie laravel, je me suis dit de 
Créer un Package laravel recherchant les données footbalistique avec <em> l'api football </em>
</p>

## installation

```
 composer require lushidev/Foot-api
 ```
## publication dans le app.php

Afin de pouvoir utiliser le package, il est conseillé d'enregistrer
Dan le fichier app.php du dossier Config de votre application laravel `` le service provider `` et ``la
Facade `` comme suite :

* Dans le tableau des services providers:
```
Lushidev\FootApi\FootballServiceProvider::class
```
* Dans le tableau des Facades :
```
 'Football'=>"Lushidev\FootApi\Facades\FootballFacade::class"
```

## Les variables d'environnement

```
FOOTBALL_API_URL=https://v3.football.api-sports.io
RAPID_URL_HOST=v3.football.api-sports.io
APIFOOTBALL_API_KEY=
```
<i> sur la variable d'environnement APIFOOTBALL_API_KEY, ajoutez-y votre api que vous aurez reçu depuis le site
<a href="api-football.com" target="blank" >api-football</a></i><br>
<strong> Le projet est en cours de développement </strong>
