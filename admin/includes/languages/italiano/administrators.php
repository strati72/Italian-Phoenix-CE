<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart
	
  Released under the GNU General Public License
*/

const HEADING_TITLE = 'Amministratori';

const TABLE_HEADING_ADMINISTRATORS = 'Amministratori';
const TABLE_HEADING_HTPASSWD = 'Password di sicurezza by htpasswd';
const TABLE_HEADING_ACTION = 'Azioni';

const TEXT_INFO_INSERT_INTRO = 'Inserisci un nuovo amministratore';
const TEXT_INFO_EDIT_INTRO = 'Effettua le variazioni necessarie';
const TEXT_INFO_DELETE_INTRO = 'ei sicuro di voler cancellare l\'amministratore?';
const TEXT_INFO_HEADING_NEW_ADMINISTRATOR = 'Nuovo amministratore';
const TEXT_INFO_USERNAME = 'Utente:';
const TEXT_INFO_NEW_PASSWORD = 'Nuova Password:';
const TEXT_INFO_PASSWORD = 'Password:';
const TEXT_INFO_PROTECT_WITH_HTPASSWD = 'Protetto con htaccess/htpasswd';
const TEXT_HTPASSWRD_NA_IIS = 'N/A';

const ERROR_ADMINISTRATOR_EXISTS = '<strong>Errore:</strong> L\'amministratore è già.';

const HTPASSWD_INFO = <<<'EOT'
<strong>Aggiungi protezione con htaccess/htpasswd</strong>
<p>In questo CE Phoenix non sono state impostate le chiavi di sicurezza htaccess/htpasswd per i pannelli di amministrazione.</p>
<p>Impostando il livello di sicurezza htaccess/htpasswd verra\' automaticamente memorizzato il nome e la password dell\amministratore in un file htpasswd quando aggiornerai il record password dell\'amministratore.</p>
<p><strong>P.S.:</strong>Se questo livello di sicurezza :&egrave; abilitato e non  puoi accedere al pannello Amministratore, 
effettua i seguenti cambiamenti e contatta il tuo hosting provider per abilitare la protezione htaccess/htpasswd:</p>
<p><u><strong>1. Edita questo file:</strong></u><br><br>%s</p>
<p>Se sono presenti, rimuovi le seguenti linee di codice:</p>
<p><i>%s</i></p>
<p><u><strong>2. Cancella questo file:</strong></u><br><br>%s</p>
EOT;
const HTPASSWD_SECURED = <<<'EOT'
<strong>Protezione aggiuntiva con htaccess/htpasswd</strong>
<p>Si consiglia di installare una Protezione aggiuntiva con htaccess/htpasswd means. per questi pannelli di amministrazione di CE Phoenix</p>
EOT;
const HTPASSWD_PERMISSIONS = <<<'EOT'
<strong>Protezione aggiuntiva con htaccess/htpasswd</strong>
<p>Lo strumento on line per installare una protezione aggiuntiva tramite htaccess/htpasswd means.</p>
<p>richiede che sia scrivibile il file  htaccess/htpasswd security layer:</p>
<ul>
<li>%s</li>
<li>%s</li>
</ul>
<p>Ricarica la pagina per la conferma che il file si settato correttamente.</p>
EOT;

const IMAGE_INSERT_NEW_ADMIN = 'Nuovo utente amministratore';

const GET_HELP_LINK = 'https://phoenixcart.org/phoenixcartwiki/index.php?title=Administrators';
