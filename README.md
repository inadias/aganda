<h1>Utilisation d'un projet Symfony depuis GitHub</h1>
<h2>Cloner le dépôt GitHub en local</h2>

git clone https://github.com/inadias/agenda.git

<h2>Installer Bootstrap:</h2>
  <h4>cd public:</h4> <br>
  npm -init <br>
  npm i bootstrap

<h2>Installer les dépendances via Composer</h2>
en CLI :
  Copy code
  cd nom_du_depot
  composer install
  
<h2>Créer la base de données:</h2>

  php bin/console doctrine:database:create <br>
  php bin/console doctrine:schema:create <br>
Configurer la connexion à la base de données dans fichier .env 
 DATABASE_URL="mysql://root:@127.0.0.1:3306/agenda?serverVersion=8&charset=utf8mb4"
  cp .env 
  

<h2>Lancer le serveur de développement<h2>
<p>symfony server:start</p>

<h2>Accéder au site dans le navigateur web<h2>

  http://localhost:8000
