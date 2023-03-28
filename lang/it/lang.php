<?php
    /*
    |--------------------------------------------------------------------------
    | 5 Steps to Contribute a New Twill Localization at Ease
    |--------------------------------------------------------------------------
    | 1. Find the "lang.csv" under "lang" directory.
    | 2. Import the csv file into a blank Google Sheet.
    | 3. Each column is a language, enter the translation for a column. (tips: feel free to freeze rows and columns).
    | 4. Download the Google Sheet as CSV, replace the original "lang/lang.csv" with the new one.
    | 5. Run the command "php artisan twill:lang" to sync all lang files.
    */


return [
    'auth' => [
        'back-to-login' => 'Torna al login',
        'choose-password' => 'Scegli password',
        'email' => 'Email',
        'forgot-password' => 'Password dimenticata',
        'login' => 'Login',
        'login-title' => 'Login',
        'oauth-link-title' => 'Re-inserisci la tua password per connettere :provider al tuo account',
        'otp' => 'Password usa e getta',
        'password' => 'Password',
        'password-confirmation' => 'Conferma password',
        'reset-password' => 'Reimposta password',
        'reset-send' => 'Invia link di reimpostazione password',
        'verify-login' => 'Verifica login',
    ],
    'buckets' => [
        'intro' => 'Cosa vorresti promuovere oggi?',
        'none-available' => 'Nessun elemento disponibile.',
        'none-featured' => 'Nessun elemento promosso.',
        'publish' => 'Pubblica',
        'source-title' => 'Elementi disponibili',
    ],
    'dashboard' => [
        'all-activity' => 'Tutte le attività',
        'create-new' => 'Crea nuova',
        'empty-message' => 'Non hai ancora alcuna attività',
        'my-activity' => 'Le mie attività',
        'my-drafts' => 'Le mie bozze',
        'search-placeholder' => 'Cerca ovunque...',
        'statitics' => 'Statistiche',
        'search' => [
            'loading' => 'Caricamento in corso...',
            'no-result' => 'Nessun risultato trovato.',
            'last-edit' => 'Ultima modifica',
        ],
        'activities' => [
            'created' => 'Creato',
            'updated' => 'Aggiornato',
            'unpublished' => 'Rimosso da pubblicazione',
            'published' => 'Pubblicato',
            'featured' => 'Promosso',
            'unfeatured' => 'Rimosso da promozione',
            'restored' => 'Ripristinato',
            'deleted' => 'Eliminato',
        ],
        'activity-row' => [
            'edit' => 'Modifica',
            'view-permalink' => 'Visualizza permalink',
            'by' => 'da',
        ],
        'unknown-author' => 'Sconosciuto',
    ],
    'dialog' => [
        'cancel' => 'Annulla',
        'ok' => 'OK',
        'title' => 'Sposta nel cestino',
    ],
    'editor' => [
        'cancel' => 'Annulla',
        'delete' => 'Elimina',
        'done' => 'Fatto',
        'title' => 'Editor contenuto',
    ],
    'emails' => [
        'all-rights-reserved' => 'Tutti i diritti riservati.',
        'hello' => 'Ciao!',
        'problems' => 'Se hai problemi a premere pulsante ":actionText", copia e incolla l\'URL seguente nel tuo web browser: [:url](:url)',
        'regards' => 'Saluti,',
    ],
    'fields' => [
        'block-editor' => [
            'add-content' => 'Aggiungi contenuto',
            'collapse-all' => 'Chiudi tutto',
            'create-another' => 'Crea un altro',
            'delete' => 'Elimina',
            'expand-all' => 'Espandi tutto',
            'loading' => 'Caricamento',
            'open-in-editor' => 'Apri nell\'editor',
            'preview' => 'Anteprima',
            'add-item' => 'Aggiungi elemento',
            'clone-block' => 'Clona blocco',
        ],
        'browser' => [
            'add-label' => 'Aggiungi',
            'attach' => 'Allega',
        ],
        'files' => [
            'add-label' => 'Aggiungi',
        ],
        'generic' => [
            'switch-language' => 'Cambia lingua',
        ],
        'map' => [
            'hide' => 'Nascondi&nbsp;mappa',
            'show' => 'Mostra&nbsp;mappa',
        ],
        'medias' => [
            'btn-label' => 'Allega immagine',
            'crop' => 'Ritaglia',
            'crop-edit' => 'Modifica ritaglio immagine',
            'crop-list' => 'ritaglio',
            'crop-save' => 'Aggiorna',
            'delete' => 'Elimina',
            'download' => 'Scarica',
            'edit-close' => 'Chiudi informazioni',
            'edit-info' => 'Modifica informazioni',
            'original-dimensions' => 'Originale',
            'alt-text' => 'Testo alternativo',
            'caption' => 'Didascalia',
            'video-url' => 'URL del video (facoltativo)',
        ],
    ],
    'filter' => [
        'apply-btn' => 'Applica',
        'clear-btn' => 'Pulisci',
        'search-placeholder' => 'Cerca',
        'toggle-label' => 'Filtro',
    ],
    'footer' => [
        'version' => 'Versione',
    ],
    'form' => [
        'content' => 'Contenuto',
        'dialogs' => [
            'delete' => [
                'confirm' => 'Elimina',
                'confirmation' => 'Sei sicuro?<br />Non è possibile annullare questa modifica.',
                'delete-content' => 'Elimina contenuto',
                'title' => 'Elimina contenuto',
            ],
        ],
        'editor' => 'Editor',
    ],
    'lang-manager' => [
        'published' => 'Attive',
    ],
    'lang-switcher' => [
        'edit-in' => 'Modifica in',
    ],
    'listing' => [
        'add-new-button' => 'Aggiungi nuovo',
        'bulk-actions' => 'Azioni di gruppo',
        'bulk-clear' => 'Pulisci',
        'columns' => [
            'featured' => 'In primo piano',
            'name' => 'Nome',
            'published' => 'Pubblicato',
            'show' => 'Mostra',
            'thumbnail' => 'Miniatura',
        ],
        'dialogs' => [
            'delete' => [
                'confirm' => 'Elimina',
                'disclaimer' => 'Questo elemento non sarà eliminato ma sarà spostato nel cestino.',
                'move-to-trash' => 'Sposta nel cestino',
                'title' => 'Elimina elemento',
            ],
            'destroy' => [
                'confirm' => 'Distruggi',
                'destroy-permanently' => 'Distruggi definitivamente',
                'disclaimer' => 'Non sarà più possibile recuperare questo elemento.',
                'title' => 'Distruggi elemento',
            ],
        ],
        'dropdown' => [
            'delete' => 'Elimina',
            'destroy' => 'Distruggi',
            'duplicate' => 'Duplica',
            'edit' => 'Modifica',
            'publish' => 'Pubblica',
            'feature' => 'Metti in primo piano',
            'restore' => 'Ripristina',
            'unfeature' => 'Non mettere in primo piano',
            'unpublish' => 'Rimuovi dalla pubblicazione',
        ],
        'filter' => [
            'all-items' => 'Tutti gli elementi',
            'draft' => 'Bozze',
            'mine' => 'I miei contenuti',
            'published' => 'Pubblicati',
            'trash' => 'Cestino',
        ],
        'languages' => 'Lingue',
        'listing-empty-message' => 'Non è presente alcun elemento.',
        'paginate' => [
            'rows-per-page' => 'Righe per pagina:',
        ],
        'bulk-selected-item' => 'elemento selezionato',
        'bulk-selected-items' => 'elementi selezionati',
        'reorder' => [
            'success' => 'L\'ordinamento di :modelTitle è stato cambiato!',
            'error' => 'L\'ordinamento di :modelTitle non è stato cambiato. Qualcosa è andato storto!',
        ],
        'restore' => [
            'success' => 'L\'elemento :modelTitle è stato ripristinato!',
            'error' => 'L\'elemento :modelTitle non è stato ripristinato. Qualcosa è andato storto!',
        ],
        'bulk-restore' => [
            'success' => 'Gli elementi :modelTitle sono stati ripristinati!',
            'error' => 'Gli elementi :modelTitle non sono stati ripristinati. Qualcosa è andato storto!',
        ],
        'force-delete' => [
            'success' => 'L\'elemento :modelTitle è stato distrutto!',
            'error' => 'L\'elemento :modelTitle non è stato distrutto. Qualcosa è andato storto!',
        ],
        'bulk-force-delete' => [
            'success' => 'Gli elementi :modelTitle sono stati distrutti!',
            'error' => 'Gli elementi :modelTitle non sono stati distrutti. Qualcosa è andato storto!',
        ],
        'delete' => [
            'success' => 'L\'elemento :modelTitle è stato spostato nel cestino!',
            'error' => 'L\'elemento :modelTitle non è stato spostato nel cestino. Qualcosa è andato storto!',
        ],
        'bulk-delete' => [
            'success' => 'Gli elementi :modelTitle sono stati spostati nel cestino!',
            'error' => 'Gli elementi :modelTitle non sono stati spostati nel cestino. Qualcosa è andato storto!',
        ],
        'duplicate' => [
            'success' => 'L\'elemento :modelTitle è stato duplicato!',
            'error' => 'L\'elemento :modelTitle non è stato duplicato. Qualcosa è andato storto!',
        ],
        'publish' => [
            'unpublished' => 'L\'elemento :modelTitle è stato rimosso dalla pubblicazione!',
            'published' => 'L\'elemento :modelTitle è stato pubblicato!',
            'error' => 'L\'elemento :modelTitle non è stato pubblicato. Qualcosa è andato storto!',
        ],
        'featured' => [
            'unfeatured' => 'L\'elemento :modelTitle è stato rimosso dal primo piano!',
            'featured' => 'L\'elemento :modelTitle è stato messo in primo piano!',
            'error' => 'L\'elemento :modelTitle non è stato messo in primo piano. Qualcosa è andato storto!',
        ],
        'bulk-featured' => [
            'unfeatured' => 'Gli elementi :modelTitle sono stati rimossi dal primo piano!',
            'featured' => 'Gli elementi :modelTitle sono stati messi in primo piano!',
            'error' => 'Gli elementi :modelTitle non sono stati messi in primo piano. Qualcosa è andato storto!',
        ],
        'bulk-publish' => [
            'unpublished' => 'Gli elementi :modelTitle sono stati rimossi dalla pubblicazione!',
            'published' => 'Gli elementi :modelTitle sono stati pubblicati!',
            'error' => 'Gli elementi :modelTitle non sono stati pubblicati. Qualcosa è andato storto!',
        ],
    ],
    'main' => [
        'create' => 'Crea',
        'draft' => 'Bozza',
        'published' => 'Pubblicato',
        'title' => 'Titolo',
        'update' => 'Aggiorna',
    ],
    'media-library' => [
        'files' => 'Documenti',
        'filter-select-label' => 'Filtra per tag',
        'images' => 'Immagini',
        'insert' => 'Inserisci',
        'sidebar' => [
            'alt-text' => 'Testo alternativo',
            'caption' => 'Didascalia',
            'clear' => 'Pulisci',
            'dimensions' => 'Dimensioni',
            'empty-text' => 'Nessun file selezionato',
            'files-selected' => 'file selezionati',
            'tags' => 'Tag',
        ],
        'title' => 'Galleria media',
        'update' => 'Aggiorna',
        'unused-filter-label' => 'Mostra solo inutilizzati',
        'no-tags-found' => 'Spiacenti, nessun tag trovato.',
        'dialogs' => [
            'delete' => [
                'delete-media-title' => 'Elimina media',
                'delete-media-desc' => 'Sei sicuro?<br />Questa modifica non può essere annullata.',
                'delete-media-confirm' => 'Elimina',
                'title' => 'Sei sicuro?',
                'allow-delete-multiple-medias' => 'Alcuni file sono in uso e non possono essere eliminati. Vuoi eliminare gli altri?',
                'allow-delete-one-media' => 'Questo file è in uso e non può essere eliminato. Vuoi eliminare gli altri?',
                'dont-allow-delete-multiple-medias' => 'Questi file sono in uso e non possono essere cancellati.',
                'dont-allow-delete-one-media' => 'Questo file è in uso e non può essere cancellato.',
            ],
            'replace' => [
                'replace-media-title' => 'Rimpiazza media',
                'replace-media-desc' => 'Sei sicuro?<br />Questa modifica non può essere annullata.',
                'replace-media-confirm' => 'Sostituisci',
            ],
        ],
        'types' => [
            'single' => [
                'image' => 'immagine',
                'video' => 'video',
                'file' => 'file',
            ],
            'multiple' => [
                'image' => 'immagini',
                'video' => 'video',
                'file' => 'file',
            ],
        ],
    ],
    'modal' => [
        'create' => [
            'button' => 'Crea',
            'create-another' => 'Crea e aggiungi un altro',
            'title' => 'Aggiungi nuovo',
        ],
        'permalink-field' => 'Permalink',
        'title-field' => 'Titolo',
        'update' => [
            'button' => 'Aggiorna',
            'title' => 'Aggiorna',
        ],
        'done' => [
            'button' => 'Continua',
        ],
    ],
    'nav' => [
        'admin' => 'Admin',
        'cms-users' => 'Utenti CMS',
        'logout' => 'Esci',
        'media-library' => 'Galleria media',
        'settings' => 'Impostazioni',
        'close-menu' => 'Chiudi il menu',
        'open-live-site' => 'Apri il sito',
    ],
    'notifications' => [
        'reset' => [
            'action' => 'Reimposta la password',
            'content' => 'Hai ricevuto questa email perché abbiamo ricevuto una richiesta di reimpostazione della password. Se non hai richiesto la reimpostazione della password, non sono necessarie ulteriori azioni.',
            'subject' => ':appName | Password dimenticata',
        ],
        'welcome' => [
            'action' => 'Scegli la tua password',
            'content' => 'Hai ricevuto questa email perché è stato creato un account per te su :name.',
            'title' => 'Benvenuto',
            'subject' => ':appName | Benvenuto',
        ],
    ],
    'overlay' => [
        'close' => 'Chiudi',
    ],
    'previewer' => [
        'compare-view' => 'Compara',
        'current-revision' => 'Attuale',
        'editor' => 'Editor',
        'last-edit' => 'Ultima modifica',
        'past-revision' => 'Precedente',
        'restore' => 'Ripristina',
        'revision-history' => 'Cronologia delle revisioni',
        'single-view' => 'Vista singola',
        'title' => 'Anteprima delle modifiche',
        'unsaved' => 'Visualizza in anteprima le modifiche non salvate',
        'drag-and-drop' => 'Trascina e rilascia i blocchi',
    ],
    'publisher' => [
        'cancel' => 'Annulla',
        'current' => 'Attuale',
        'end-date' => 'Data fine',
        'immediate' => 'Immediata',
        'languages' => 'Lingue',
        'languages-published' => 'Attive',
        'last-edit' => 'Ultima modifica',
        'preview' => 'Anteprima modifiche',
        'publish' => 'Pubblica',
        'scheduled' => 'Pianificato',
        'expired' => 'Scaduto',
        'publish-close' => 'Pubblica e chiudi',
        'publish-new' => 'Pubblica e crea nuovo',
        'published-on' => 'Pubblicato il',
        'restore-draft' => 'Ripristina come bozza',
        'restore-draft-close' => 'Ripristina come bozza e chiudi',
        'restore-draft-new' => 'Ripristina come bozza e crea nuovo',
        'restore-live' => 'Ripristina come pubblicato',
        'restore-live-close' => 'Ripristina come pubblicato e chiudi',
        'restore-live-new' => 'Ripristina come pubblicato e crea nuovo',
        'restore-message' => 'Stai modificando una revisione vecchia di questo contenuto (salvata da :user il :date). Fare le modifiche necessarie e cliccare "Ripristina" per salvare una nuova revisione.',
        'restore-success' => 'Revisione ripristinata.',
        'draft-revision' => 'Salva come revisione bozza',
        'draft-revision-close' => 'Salva come revisione bozza e chiudi',
        'draft-revision-new' => 'Salva come revisione bozza e crea nuova',
        'draft-revisions-available' => 'Stai visualizzando la versione pubblicata di questo contenuto. Ci sono revisioni in bozza più nuove.',
        'editing-draft-revision' => 'Stai modificando una revisione bozza di questo contenuto. Apportare le modifiche necessarie e fare clic su "Salva come revisione" o "Pubblica".',
        'revisions' => 'Revisioni',
        'save' => 'Salva come bozza',
        'save-close' => 'Salva come bozza e chiudi',
        'save-new' => 'Salva come bozza e crea nuovo',
        'save-success' => 'Contenuto salvato. Perfetto!',
        'start-date' => 'Data d\'inizio',
        'switcher-title' => 'Stato',
        'update' => 'Aggiorna',
        'update-close' => 'Aggiorna e chiudi',
        'update-new' => 'Aggiorna e crea nuovo',
        'parent-page' => 'Pagina genitore',
        'review-status' => 'Stato revisione',
        'visibility' => 'Visibilità',
        'unsaved-changes' => 'Ci sono modifiche non salvate',
    ],
    'select' => [
        'empty-text' => 'Spiacenti, nessuna opzione corrispondente.',
    ],
    'uploader' => [
        'dropzone-text' => 'o trascina i nuovi file qui',
        'upload-btn-label' => 'Aggiungi nuovo',
    ],
    'user-management' => [
        '2fa' => 'Autenticazione a 2 fattori',
        '2fa-description' => 'Scansiona questo codice QR con un\'app compatibile con Google Authenticator e digita la tua password usa e getta prima di continuare. Una lista di applicazioni compatibili è <a href=":link" target="_blank" rel="noopener">disponibile qui</a>.',
        '2fa-disable' => 'Inserisci la tua password usa e getta per disabilitare l\'autenticazione a 2 fattori',
        'active' => 'Attivo',
        'cancel' => 'Annulla',
        'content-fieldset-label' => 'Impostazioni utente',
        'description' => 'Descrizione',
        'disabled' => 'Disabilitato',
        'edit-modal-title' => 'Modifica il nome utente',
        'email' => 'Email',
        'enable-user' => 'Abilita l\'utente',
        'enable-user-and-close' => 'Abilita l\'utente e chiudi',
        'enable-user-and-create-new' => 'Abilita l\'utente e crea nuovo',
        'enabled' => 'Abilitato',
        'language' => 'Lingua',
        'language-placeholder' => 'Seleziona una lingua',
        'name' => 'Nome',
        'otp' => 'Password usa e getta',
        'profile-image' => 'Immagine profilo',
        'role' => 'Ruolo',
        'role-placeholder' => 'Seleziona un ruolo',
        'title' => 'Titolo',
        'trash' => 'Cestino',
        'update' => 'Aggiorna',
        'update-and-close' => 'Aggiorna e chiudi',
        'update-and-create-new' => 'Aggiorna e crea nuovo',
        'update-disabled-and-close' => 'Aggiorna l\'utente disabilitato e chiudi',
        'update-disabled-user' => 'Aggiorna l\'utente disabilitato',
        'update-disabled-user-and-create-new' => 'Aggiorna l\'utente disabilitato e crea nuovo',
        'user-image' => 'Immagine',
        'users' => 'Utenti',
    ],
    'settings' => [
        'update' => 'Aggiorna',
        'cancel' => 'Annulla',
        'fieldset-label' => 'Modifica impostazioni',
    ],
];
