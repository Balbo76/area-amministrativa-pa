# PORTALE AMMINISTRATIVO PA (LARAVEL + BOOTSTRAP ITALIA) 

Questo progetto e' un portale per la Pubblica Amministrazione sviluppato da zero con Laravel 13 e il design system ufficiale Bootstrap Italia 2.x (linee guida AgID). 

Non abbiamo usato starter kit preconfezionati per evitare conflitti grafici.

## COMANDI RAPIDI PER DOMANI MATTINA

Apri il terminale nella cartella del progetto e allinea le dipendenze:composer installnpm install

Avvia la compilazione della grafica (Lascia questo terminale aperto):npm run dev

In un secondo terminale, avvia il server web di Laravel:

php artisan serve

Apri il browser all'indirizzo:http://127.0.0.1:8000

## MAPPA DEI FILE CHE ABBIAMO CREATO 

### GRAFICA 

(resources/views/)layouts/navbar.blade.php : La barra superiore globale. 

Mostra Accedi/Registrati se sei ospite, mentre mostra il menu utente a tendina (dropdown) con Dashboard, Profilo e Esci se sei loggato.

Permette sempre di tornare alla home pubblica.welcome.blade.php : La pagina iniziale del sito con il banner principale e le schede dei servizi (Istanze, PagoPA, Fascicolo).

layouts/auth.blade.php e cartella auth/ : Il layout e le schermate per Login, Registrazione e Recupero Password con i campi fluttuanti del design system PA.

layouts/admin.blade.php : La struttura del backoffice a due colonne con la Sidebar di navigazione a sinistra e l'area contenuti a destra.

admin/dashboard.blade.php : Il pannello di controllo interno con le card dei contatori e la tabella delle pratiche ricevute.

admin/profile.blade.php : La schermata del profilo divisa in schede (Tab) per i dati anagrafici e il cambio password.

### LOGICA E ROTTE (app/ e routes/)

Http/Controllers/Auth/LoginController.php : Gestisce i moduli di login e logout, valida l'email e la password e rimanda alla dashboard.

Http/Controllers/Auth/RegisterController.php : Gestisce l'iscrizione dei nuovi utenti e crittografa la password.

Http/Middleware/CheckAdminPermissions.php : Il filtro per bloccare o far passare gli utenti nell'area di amministrazione (per ora e' vuoto e fa passare tutti).

Http/Middleware/CheckApiPermissions.php : Il filtro vuoto gia' pronto per quando scriverai le tue future API.

routes/web.php : File delle rotte aggiornato. Protegge l'area /admin con i middleware di autenticazione e di controllo permessi.

## PROBLEMI TECNICI CHE ABBIAMO RISOLTO 

Se devi rifare la configurazione o noti errori di Vite, ricordati che abbiamo applicato queste correzioni:

Errore SplideJS: Risolto inserendo una regola di "resolve.alias" nel file vite.config.js per sbloccare l'importazione dei fogli di stile dei caroselli.

Errore bootstrap.js mancante: Risolto eliminando la riga "import ./bootstrap" in app.js perche' le nuove versioni di Laravel non la creano piu' di default se non usi starter kit.

Errore Font CSS: Spostato il caricamento dei font AgID (Titillium Web) solo dentro app.scss tramite la variabile $font-path, rimuovendolo dal file javascript che andava in blocco.

## COSA PUOI FARE DOMANI COME PROSSIMO PASSO

Scegli tu da dove ripartire domani:

Creare una migration per aggiungere la colonna "ruolo" (admin, operatore, cittadino) nella tabella degli utenti.

Creare un Database Seeder per generare un utente di test e fare un login reale con i form.

Riempire il file CheckAdminPermissions.php con la logica per bloccare chi non ha il ruolo corretto rimandandolo alla home o mostrando un errore 403.
