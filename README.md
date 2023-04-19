<h1>Utilisation d'un projet Symfony depuis GitHub</h1>
Cloner le dépôt GitHub en local

git clone https://github.com/inadias/aganda.git

Installer Bootstrap:
  cd public:
  npm -init 
  npm i bootstrap

Installer les dépendances via Composer
en CLI :
  Copy code
  cd nom_du_depot
  composer install
  
Créer la base de données
  php bin/console doctrine:database:create
  php bin/console doctrine:schema:create
Configurer la connexion à la base de données dans fichier .env 
 DATABASE_URL="mysql://root:@127.0.0.1:3306/agenda?serverVersion=8&charset=utf8mb4"
  cp .env 
  

Lancer le serveur de développement
  symfony server:start

Accéder au site dans le navigateur web

  http://localhost:8000
