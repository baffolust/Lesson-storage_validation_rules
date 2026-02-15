## NOTE PER LA CLONAZIONE DI UN PROGETTO ##
Command line necessarie quando si clona un progetto
**---------------------------------------------------------------------------------------**
**---------------------------------------------------------------------------------------**
**---------------------------------------------------------------------------------------**


__Command line per la clonazione__

git clone git@github.com:baffolust/Lesson-databaseProject.git [nome cartella nuovo progetto]
-------------------------------------------------------------------------------------------

__Cambiare la repository di github__
(al momento della clonazione la repository è la solita)
    - rimuovere la repository
            git remote remove origin

    - aggiungere la nuova repository
            git remote add origin git@github.com:baffolust/Lesson-storage_validation_rules.git
    Così facendo vengono portati dietro anche i commit

    - Comandi git per fare push progetto
    git add .
    git branch -M main
    git commit "progetto clonato"
    git push -u origin main
-------------------------------------------------------------------------------------------

__Creazione del file .env__
    - cp .env.example .env 

    - modifica della parte relativa al DB
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=databaseproject
        DB_USERNAME=root
        DB_PASSWORD=rootroot
-------------------------------------------------------------------------------------------

__Aggiungere dipendenze php con composer__
composer i
-------------------------------------------------------------------------------------------

__Creazione chiave per parametro APP_KEY__
php artisan key:gen    
-------------------------------------------------------------------------------------------

__Aggingere dipendenze javascript__
con npm creando la cartella node_modules ed aggiungendo pacchetti presenti nel vecchio progetto, recuperati dal file package.json (esempio bootstrap)

npm i
-------------------------------------------------------------------------------------------

__Lanciare le migrazioni__
Crea le tabelle nel DB. Non necessario se utilizziamo il medesimo DB

php artisan migrate