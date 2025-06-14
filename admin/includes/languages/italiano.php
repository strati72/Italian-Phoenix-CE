<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales..
// Array examples which should work on all servers:
// 'en_US.UTF-8', 'en_US.UTF8', 'enu_usa'
// 'en_GB.UTF-8', 'en_GB.UTF8', 'eng_gb'
// 'en_AU.UTF-8', 'en_AU.UTF8', 'ena_au'

setlocale(LC_TIME, 'it_IT.utf-8');

$long_date_formatter = new IntlDateFormatter('it', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
$short_date_formatter = new IntlDateFormatter('it', IntlDateFormatter::SHORT, IntlDateFormatter::NONE);
$date_time_formatter = new IntlDateFormatter('it', IntlDateFormatter::SHORT, IntlDateFormatter::LONG);

// Global entries for the <html> tag
const HTML_PARAMS = 'dir="ltr" lang="it"';

// charset for web pages and emails
const CHARSET = 'utf-8';

// page title
const TITLE = 'Strumenti di amministrazione CE Phoenix';

// header text in includes/hooks/admin/siteWide/hMenu.php
const HEADER_TITLE_ONLINE_CATALOG = '<i class="fas fa-shopping-cart text-primary"></i> <span class="border-bottom border-primary">Catalogo On-line</span>';
const HEADER_TITLE_PHOENIX_CLUB = '<span class="border-bottom border-primary">Phoenix Club</span>';
const HEADER_TITLE_PHOENIX_WIKI = '<i class="fas fa-school mr-1 text-primary"></i><span class="border-bottom border-primary">User Guide</span>';
const HEADER_TITLE_CERTIFIED_DEVELOPERS = '<i class="fas fa-laptop-code mr-1 text-primary" aria-hidden="true"></i><span class="border-bottom border-primary">Sviluppatoti Certificati</span>';
const HEADER_TITLE_CERTIFIED_ADDONS = '<span class="border-bottom border-primary">Moduli e servizi certificati</span>';
const HEADER_TITLE_LOGOFF = '<i class="fas fa-lock"></i> <span class="border-bottom border-danger"> %s, Esci in sicurezza</span>';

// images
const IMAGE_BACK = 'Indietro';
const IMAGE_BACKUP = 'Backup';
const IMAGE_CANCEL = 'Cancella';
const IMAGE_COPY = 'Copia';
const IMAGE_COPY_TO = 'Copia in';
const IMAGE_DETAILS = 'Dettagli';
const IMAGE_DELETE = 'Cancella';
const IMAGE_EDIT = 'Modifica';
const IMAGE_EMAIL = 'Email';
const IMAGE_EXPORT = 'Esporta';
const IMAGE_INSERT = 'Inserisci';
const IMAGE_LOCK = 'Blocca';
const IMAGE_MODULE_INSTALL = 'Installa Modulo';
const IMAGE_MODULE_REMOVE = 'Rimuovi Modulo';
const IMAGE_MOVE = 'Sposta';
const IMAGE_NEW_CATEGORY = 'Nuova Categoria';
const IMAGE_NEW_COUNTRY = 'Nuova Nazione';
const IMAGE_NEW_CURRENCY =  'Nuova Valuta';
const IMAGE_NEW_CUSTOMER_DATA_GROUP = 'Nuovo gruppo di dati dei clienti';
const IMAGE_NEW_LANGUAGE = 'Nuova Lingua';
const IMAGE_NEW_NEWSLETTER = 'Nuova Newsletter';
const IMAGE_NEW_PRODUCT = 'Nuovo Prodotto';
const IMAGE_NEW_TAX_CLASS = 'Nuova tipologia di tassa';
const IMAGE_NEW_TAX_RATE = 'Nuova Valore della Tassa';
const IMAGE_NEW_ZONE = 'Nuova Zona';
const IMAGE_ORDERS = 'Ordini';
const IMAGE_ORDERS_INVOICE = 'Fatture';
const IMAGE_ORDERS_PACKINGSLIP =  'Distinta di imballaggio';
const IMAGE_PREVIEW = 'Anteprima';
const IMAGE_RESTORE = 'Ripristina';
const IMAGE_RESET = 'Resetta';
const IMAGE_SAVE = 'Salva';
const IMAGE_SELECT = 'Seleziona';
const IMAGE_SEND = 'Invia';
const IMAGE_SEND_EMAIL = 'Ivia Email';
const IMAGE_UNLOCK = 'Sblocca';
const IMAGE_UPDATE = 'Aggiorna';
const IMAGE_UPDATE_CURRENCIES = 'Aggiorna Cambio Valuta';
const IMAGE_UPLOAD = 'Carica';

const ICON_FILE = 'Documento';
const ICON_FILE_DOWNLOAD = 'Scarica';

// constants for use in pagination
const TEXT_RESULT_PAGE = 'Pagina %s di %d';
const TEXT_DISPLAY_NUMBER_OF_COUNTRIES = 'Visualizzate <b>%d</b> su <b>%d</b> (di <b>%d</b> nazioni)';
const TEXT_DISPLAY_NUMBER_OF_CUSTOMER_DATA_GROUPS = 'Visualizza <strong>%d</strong> per <strong>%d</strong> (of <strong>%d</strong> gruppi di dati dei clienti)';
const TEXT_DISPLAY_NUMBER_OF_CUSTOMERS = 'Visualizzati <b>%d</b> su <b>%d</b> (di <b>%d</b> clienti)';
const TEXT_DISPLAY_NUMBER_OF_CURRENCIES = 'Visualizzate <b>%d</b> su <b>%d</b> (di <b>%d</b> valute)';
const TEXT_DISPLAY_NUMBER_OF_ENTRIES = 'Visualizzati <strong>%d</strong> di <strong>%d</strong> (of <strong>%d</strong> entries)';
const TEXT_DISPLAY_NUMBER_OF_LANGUAGES = 'Visualizzate <b>%d</b> su <b>%d</b> (di <b>%d</b> lingue)';
const TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS = 'Visualizzati <b>%d</b> su <b>%d</b> (di <b>%d</b> produttori)';
const TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS = 'Visualizzate <b>%d</b> su <b>%d</b> (di <b>%d</b> newsletters)';
const TEXT_DISPLAY_NUMBER_OF_ORDERS = 'Visualizzati <b>%d</b> su <b>%d</b> (di <b>%d</b> ordini)';
const TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS = 'Visualizzati <b>%d</b> su <b>%d</b> (di <b>%d</b> stato ordini)';
const TEXT_DISPLAY_NUMBER_OF_PRODUCTS = 'Visualizzati <b>%d</b> su <b>%d</b> (di <b>%d</b> prodotti)';
const TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED = 'Visualizzati <b>%d</b> su <b>%d</b> (di <b>%d</b> prodotti in attesa)';
const TEXT_DISPLAY_NUMBER_OF_REVIEWS = 'Visualizzati <b>%d</b> su <b>%d</b> (di <b>%d</b> recensioni prodotto)';
const TEXT_DISPLAY_NUMBER_OF_SPECIALS = 'Visualizzati <b>%d</b> su <b>%d</b> (di <b>%d</b> prodotti in offerta)';
const TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES = 'Visualizzati <b>%d</b> su <b>%d</b> (di <b>%d</b> tipi di tassa)';
const TEXT_DISPLAY_NUMBER_OF_TAX_ZONES = 'Visualizzate <b>%d</b> su <b>%d</b> (di <b>%d</b> tasse stat./prov)';
const TEXT_DISPLAY_NUMBER_OF_TAX_RATES = 'Visualizzate <b>%d</b> su <b>%d</b> (di <b>%d</b> aliquote fiscali)';
const TEXT_DISPLAY_NUMBER_OF_ZONES = 'Visualizzati <b>%d</b> su <b>%d</b> (di <b>%d</b> stati/Province)';

const SPLIT_PAGES = 'Selezione Pagina';

const TEXT_DEFAULT = 'Predefinito';
const TEXT_SET_DEFAULT = 'Setta come Predefinito';

const TEXT_NONE = '--none--';
const TEXT_TOP = 'Top';
const TEXT_ALL = 'Tutti';

const ERROR_DESTINATION_DOES_NOT_EXIST = 'Errore: Destinazione non esistente.';
const ERROR_DESTINATION_NOT_WRITEABLE = 'Errore: Destinazione non scrivibile.';
const ERROR_FILE_NOT_SAVED = 'Errore: File caricato non salvato.';
const ERROR_FILETYPE_NOT_ALLOWED = 'Errore: Tipo di file caricamento non consentito.';
const SUCCESS_FILE_SAVED_SUCCESSFULLY = 'Successo: File caricato salvato con successo.';
const WARNING_NO_FILE_UPLOADED = 'Attenzione: Nessuno file caricato.';

// bootstrap helper
const MODULE_CONTENT_BOOTSTRAP_ROW_DESCRIPTION = <<<'EOT'
<p>I contenuti in orizzontale possono essere 12 o meno per riga.</p>
<p>12/12 = 100% larghezza, 6/12 = 50% larghezza, 4/12 = 33% larghezza.</p>
<p>Il totale delle colonne in ogni riga deve essere uguale a  12 (esempi:  3 sezioni di 4 colonne ciascuno, 1 elemento di 12 colonne e così via).</p>
EOT;

// seo helper
const PLACEHOLDER_COMMA_SEPARATION = 'Devono, essere, separati, da, una, virgola';

// message for required inputs
const FORM_REQUIRED_INPUT = '<span class="form-control-feedback text-danger"><i class="fas fa-asterisk"></i></span>';

const TEXT_IMAGE_NON_EXISTENT = 'IMAGE DOES NOT EXIST';

const STAR_RATING = 'Voto %s Stelle';

const GET_HELP = '<img src="images/icon_phoenix.png" class="mr-2">Aiuto';
const GET_ADDONS = '<img src="images/icon_phoenix.png" class="mr-2">Addons';
const ADDONS_FREE = 'Free';
const ADDONS_COMMERCIAL = 'A pagamento';
const ADDONS_PRO = 'PRO';
