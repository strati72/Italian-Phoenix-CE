<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart - 2025 Sergio Strati

  Released under the GNU General Public License
*/

const HEADING_TITLE = 'Clienti';
const HEADING_TITLE_SEARCH = 'Cerca:';

const TABLE_HEADING_ID = 'ID';
const TABLE_HEADING_NAME = 'Nome';
const TABLE_HEADING_ACCOUNT_CREATED = 'Account Creato';
const TABLE_HEADING_ACTION = 'Azione';

const TEXT_DATE_ACCOUNT_CREATED = 'Account Creato: %s';
const TEXT_DATE_ACCOUNT_LAST_MODIFIED = 'Ultima modifica: %s';
const TEXT_INFO_DATE_LAST_LOGON = 'Ultima disconnessione: %s';
const TEXT_INFO_NUMBER_OF_LOGONS = 'Numero di disconnessione: %s';
const TEXT_INFO_COUNTRY = 'Nazione: %s';
const TEXT_INFO_NUMBER_OF_REVIEWS = 'Numero di Recensioni: %s';
const TEXT_DELETE_INTRO = 'Sicuro di voler cancellare questo Cliente?';
const TEXT_DELETE_REVIEWS = 'Cancella %s recensione(i)';
const TEXT_INFO_HEADING_DELETE_CUSTOMER = 'Cancella Cliente';
const TYPE_BELOW = 'Tipo';
const PLEASE_SELECT = 'Seleziona';

const PULL_DOWN_DEFAULT = PLEASE_SELECT;

const CUSTOMER_REVIEW_ANONYMIZED = 'Verifica il cliente';

const ERROR_PAGE_HAS_UNMET_REQUIREMENT = <<<'EOT'
  La pagina dei clienti richiede  'sortable_name', 'name', 'email_address', 'country_id', e 'id' moduli dati cliente da installare.  Manca:
EOT;

const GET_HELP_LINK = 'https://phoenixcart.org/phoenixcartwiki/index.php?title=Customers';