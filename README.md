## installation

-   clone the project
-   composer create-project
-   edit .env file (change the APP_URL and configure database)
-   npm install
-   php artisan migrate --seed
-   php artisan storage:link
-   php artisan key:generate
-   php artisan serve
-   npm run dev

## connecting with algolia

-   create an account in algolia website
-   create a new application and a new index (index = collaborators)
-   add algolia enviroment variables

ALGOLIA_APP_ID = your algolia id
ALGOLIA_SECRET = your masterkey

VITE_ALGOLIA_APP_ID = your algolia id
VITE_ALGOLIA_SECRET = your masterkey
