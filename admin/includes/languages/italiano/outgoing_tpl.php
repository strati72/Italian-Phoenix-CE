<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2024 Phoenix Cart

  Released under the GNU General Public License
*/

const HEADING_TITLE = 'Modelli di posta elettronica in uscita';

const BUTTON_INSERT_NEW_SLUG = 'Inserisci un nuovo modello di E-mail';
const HEADING_DELETE_SLUG = 'Cancella questo modello d\'email';
const HEADING_NEW_SLUG = 'Nuovo modello d\'email';

const SLUG_SELECT = '--- Seleziona ---';

const TABLE_HEADING_SLUG = 'Nome modello';
const TABLE_HEADING_TITLE = 'Titolo';
const TABLE_HEADING_DATE_ADDED = 'Data d\'inserimento';	
const TABLE_HEADING_ACTION = 'Azione';

const TEXT_OUTGOING_SLUG = 'Nome modello';
const TEXT_OUTGOING_SLUG_TITLE = 'Titolo email';
const TEXT_OUTGOING_SLUG_TEXT = 'Corpo email';

const MISSING_SLUGS = '<div class="alert alert-danger d-flex justify-content-between">
<span>Attenzione: questi moduli di pianificazione esistono e DEVONO avere un modello creato per loro!<br><b>%s</b></span>
<span>%s</span>
</div>';

const TEXT_HEADING_NEW_OUTGOING_EMAIL = 'Aggiungi un nuovo modello d\'email';
const TEXT_HEADING_EDIT_OUTGOING_EMAIL = 'Modifila il modello d\'email';
const TEXT_HEADING_DELETE_OUTGOING_EMAIL = 'Cancella E-mail dalla coda';

const TEXT_OUTGOING_DATE = 'Invia a:';
const TEXT_OUTGOING_EMAIL = 'Indirizzo Email:';

const TEXT_NEW_INTRO = 'Si prega di compilare le seguenti informazioni per la nuova e-mail';
const TEXT_EDIT_INTRO = 'Apponi tutti cambiamento necessari';
const TEXT_DELETE_INTRO = 'Sei sicuro di voler inviare questa E-mail?';

const TEXT_DATE_ADDED = 'data d\'inserimento: %s';
const TEXT_LAST_MODIFIED = 'Ultima modifica: %s';

const TEXT_DISPLAY_NUMBER_OF_OUTGOING = 'Visualizzazione di <b>%s</b> a <b>%s</b> di <b>%s</b> e-mail in coda';
const IMAGE_VIEW_EMAIL = 'Vedi E-mail';

$available_merge_tags = ['{{FNAME}}' => 'Nome',
                         '{{LNAME}}' => 'Cognome',
                         '{{EMAIL}}' => 'Indirizzo Email'];

const GET_HELP_LINK = 'https://phoenixcart.org/phoenixcartwiki/index.php?title=Queued_Emails';
const GET_ADDONS_LINKS = [ADDONS_COMMERCIAL => 'https://phoenixcart.org/forum/app.php/addons/commercial/queued_emails-48',];
