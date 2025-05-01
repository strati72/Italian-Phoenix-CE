<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2022 Phoenix Cart

  Released under the GNU General Public License
*/

const NAVBAR_TITLE_1 = 'Accedi';
const NAVBAR_TITLE_2 = 'Password dimenticata';

const HEADING_TITLE = 'Ho dimenticato la mia Password!';

const TEXT_MAIN = 'Se hai dimenticato la password, inserisci il tuo indirizzo e-mail qui sotto e ti invieremo le istruzioni su come modificare la password in modo sicuro.';

const TEXT_PASSWORD_RESET_INITIATED = 'Controlla la tua e-mail per le istruzioni su come modificare la password. Esso contiene un collegamento che è solo per 24 ore o fino a quando la password è stata aggiornata.';

const TEXT_NO_EMAIL_ADDRESS_FOUND = 'Errore: L\'indirizzo email che hai inserito non è registrato presso di noi, si prega di riprovare.';

const EMAIL_PASSWORD_RESET_SUBJECT = STORE_NAME . ' - Nuova password';
const EMAIL_PASSWORD_RESET_BODY = 'Una nuova password è stata richiesta per il tuo account ' . STORE_NAME . '.' . "\n\n" . 'Segui questo link personale per cambiare la tua password sicura:' . "\n\n" . '%s' . "\n\n" . 'Il link verrà automaticamente eliminato dopo 24 ore o dopo la password è stata modificata.' . "\n\n" . 'Se hai bisogno di aiuto con uno qualsiasi dei nostri servizi online, si prega di e-mail il proprietario del negozio: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n";

const ERROR_ACTION_RECORDER = 'Errore: Un link per reimpostare la password è già stata inviata. Riprova fra %s minuti.';

const IMAGE_BUTTON_RESET_PASSWORD = 'Reimposta la Password';

