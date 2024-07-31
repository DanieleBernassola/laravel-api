# Laravel Auth Template

```
composer create-project laravel/laravel:^10.0 nomeprogetto
```

# Installazione breeze

```
composer require laravel/breeze --dev
```

# Scaffold dell'autenticazione breeze/blade

```
php artisan breeze:install
```

-   Which Breeze stack would you like to install? Blade with Alpine
-   Would you like dark mode support? Yes
-   Which testing framework do you prefer? PHPUnit

## Eseguire i passaggi per installare bootstrap invece di tailwind

```
npm remove postcss
npm remove tailwindcss
npm i --save-dev sass
npm i --save bootstrap @popperjs/core
```

Cancellare il file tailwind.config.js e postcss.config.js

```
rm tailwind.config.js
rm postcss.config.js
```

Rinominiamo la cartella css in scss

```
mv resources/css resources/scss
```

ed il file app.css in app.scss

```
mv resources/scss/app.css  resources/scss/app.scss
```

## Nel file app.scss

Cancelliamo gli import di tailwind dal file app.scss e inseriamo:

```
@import "~bootstrap/scss/bootstrap";
```

## Nel file vite.config.js

-   modifichiamo il percorso del css
-   aggiungiamo un alias per resources e per il bootstrap

```
import path from 'path';

resolve: {
        alias: {
            '~resources': '/resources/',
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap')
        }
    },
```

## Nel file app.js

-   togliere il codice che imposta alpine, lasciando solo la prima riga
-   importare app.css, bootstrap e img

```
import '~resources/scss/app.scss'
import * as bootstrap from 'bootstrap'
import.meta.glob([
    '../img/**'
])
```

## Inserire le views con bootstrap

Cancellare tutti i file di default dalla cartella views e inserire i file presenti in questa repo

## Partenza

1. installare le dipendenze di npm e composer
2. inserire dati nel file .env
3. far partire le migrations
4. avviare il server (php e node)

Buon lavoro!

continuate con l'esercitazione cominciata ieri - stessa repository e portate a conclusione le CRUD per la gestione dei progetti.
nome repo: laravel-auth
Bonus:
provate a modificare il comportamento di default di laravel creando un campo SLUG per ogni progetto e riferendovi a quello per le operazioni di EDIT, SHOW, CREATE, DELETE;
create una versione pubblica dei vostri progetti creando un controller Guest\ProjectController

I task da svolgere sono diversi, ma alcuni di essi sono un ripasso di ciò che abbiamo fatto nelle lezioni dei giorni scorsi:

<!-- -   creare la migration per la tabella types -->
<!-- -   creare il model Type -->
<!-- -   creare la migration di modifica per la tabella projects per aggiungere la chiave esterna -->
<!-- -   aggiungere ai model Type e Project i metodi per definire la relazione one to many -->
<!-- -   visualizzare nella pagina di dettaglio di un progetto la tipologia associata, se presente -->
<!-- -   permettere all’utente di associare una tipologia nella pagina di creazione e modifica di un progetto -->
<!-- -   gestire il salvataggio dell’associazione progetto-tipologia con opportune regole di validazione -->

    Bonus 1:
    <!-- creare il seeder per il model Type. -->
    Bonus 2:
    aggiungere le operazioni CRUD per il model Type, in modo da gestire le tipologie di progetto direttamente dal pannello di amministrazione.

I task da svolgere sono diversi, ma alcuni di essi sono un ripasso di ciò che abbiamo fatto nelle lezioni dei giorni scorsi:

<!-- -   creare la migration per la tabella technologies -->
<!-- -   creare il model Technology -->
<!-- -   creare la migration per la tabella pivot project_technology -->
<!-- -   aggiungere ai model Technology e Project i metodi per definire la relazione many to many -->
<!-- -   visualizzare nella pagina di dettaglio di un progetto le tecnologie utilizzate, se presenti -->

    Bonus 1:
    <!-- creare il seeder per il model Technology. -->

    Bonus 2:
    aggiungere le operazioni CRUD per il model Technology, in modo da gestire le tecnologie utilizzate nei progetti direttamente dal pannello di amministrazione.

I task sono:

<!-- -   permettere all’utente di associare le tecnologie nella pagina di creazione e modifica di un progetto -->
<!-- -   gestire il salvataggio dell’associazione progetto-tecnologie con opportune regole di validazione -->
<!-- -   eliminare opportunamente le relazioni alla cancellazione del progetto/technology -->

Milestone 1
nome repo 1: laravel-api

Aggiungiamo al nostro progetto Laravel una nuovo Api/ProjectController. Questo controller risponderà a delle richieste via API e si occuperà di restituire la lista dei progetti presenti nel database in formato json.

Milestone 2

Testiamo la chiamata API tramite Postman e assicuriamoci di ricevere i dati correttamente.

Milestone 3
nome repo 2: vite-boolfolio

Iniziamo ad occuparci della parte front-office della nostra applicazione: creiamo un nuovo progetto Vue 3 con Vite e installiamo axios.
Colleghiamo questo progetto ad una repo separata.

Milestone 4

Nel componente principale della nostra Vue App facciamo una chiamata API all’endpoint costruito nel progetto Laravel (milestone 1) e recuperiamo tutti i progetti dal nostro back-end.
Stampiamo in console i risultati e verifichiamo di ricevere i dati correttamente.

Milestone 5

Creiamo un nuovo componente ProjectCard, che corrisponde ad una card per visualizzare un progetto. Utilizziamo questo componente per visualizzare tutti i progetti ricevuti tramite API.

Bonus:

Gestire la paginazione dei risultati

Ecco i task da completare:

aggiungere una pagina di dettaglio di progetto (frontend)
aggiungere sistema di paginazione (frontend)
La pagina di dettaglio dovrà avere tutte le informazioni del progetto e le informazioni relazionate.

Vi lascio inoltre qualche bonus:

Aggiungere campi e sistema di filtro sul backend (in draft, in evidenza)

Aggiungere sistema di filtro sul frontend (in evidenza), mostrando i relativi progetti in homepage

Aggiungere un campo di ricerca per titolo (frontend / backend)

Creazione di un nuovo progetto da frontend (base)
Creazione di un nuovo progetto da frontend con caricamento immagine.
