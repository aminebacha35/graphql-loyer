Ce projet utilise Laravel et GraphQL pour gérer les informations relatives aux immeubles, appartements, propriétaires, locataires et quittances de loyer.
Installation

Suivez ces étapes pour installer et lancer votre application :

    Clonez le projet :

    bash

git clone https://github.com/aminebacha35/graphql-loyer.git

Accédez au répertoire du projet :

bash

cd laravel

Copiez le fichier .env.example en tant que .env :

bash

cp .env.example .env

Assurez-vous de configurer correctement les informations de base de données dans le fichier .env.

Installez les dépendances avec Composer :

bash

composer install

Générez la clé d'application Laravel :

bash

php artisan key:generate

Exécutez les migrations et les seeders :

bash

php artisan migrate --seed

Cela créera la structure de base de données et ajoutera des données de démonstration.

Lancez le serveur de développement :

bash

    php artisan serve

    L'application sera accessible à l'adresse http://localhost:8000.

Utilisation

Assurez-vous d'avoir correctement configuré votre serveur et votre base de données. Consultez la documentation GraphQL pour obtenir des informations sur les requêtes et les mutations disponibles. Le schema est disponible dans le dossier graphql/schema.graphql