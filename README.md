## Projekt EGY Talk med SvelteKit

Bygger på Svelte >= 5

### Innan du börjar
Se till att du har minst version 23.3.0 av nodejs.    
Kontrollera i terminalen med 
````bash
node -v
````

### Installation
Ladda ner eller klona projektet. 
Alla nödvändiga paket är redan tillagda i SvelteKit.

Öppna i VS Code och kör i terminalen
````bash
cd sveltekit
npm install
````
Inga flera installationer behövs!

#### Importera database egytalk
Öppna phpmyadmin (localhost:8080) och importera databasen egytalk.

#### www/model/DbEgyTalk.php
I konstruktorn finns anslutningen. Ändra om så behövs.
````php
<?php
    // Definierar konstanter med användarinformation.
    define ('DB_USER', 'egytalk'); // Se till att användaren finns. Undvik root.
    define ('DB_PASSWORD', '12345'); // Byt till eget lösenord
    define ('DB_HOST', 'mariadb');
    define ('DB_NAME', 'egytalk');   

    // Skapar en anslutning till MariaDB och databasen dbName
    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8';
    $db = new PDO($dsn, DB_USER, DB_PASSWORD);
````

#### API:er
    www/public/api
#### Starta servern (containern) med
    docker-compose up -d
#### Stoppa servern (containern) med
    docker-compose down
#### Serverns url
    localhost
#### phpmyadmin
    localhost:8080

