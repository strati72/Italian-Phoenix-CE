<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

const HEADING_TITLE = 'Gestione Pubblicità';

const TABLE_HEADING_ADVERT = 'Annuncio';
const TABLE_HEADING_GROUP = 'Gruppo';
const TABLE_HEADING_SORT_ORDER = 'Ordina per';
const TABLE_HEADING_STATUS = 'Stato';
const TABLE_HEADING_ACTION = 'Azzioni';

const TEXT_ADVERT_TITLE = 'Titolo';
const TEXT_ADVERT_URL = 'URL';
const TEXT_ADVERT_FRAGMENT = 'Frammento';
const TEXT_ADVERT_GROUP = 'Gruppo';
const TEXT_ADVERT_SORT_ORDER = 'Ordina per';
const TEXT_ADVERT_NEW_GROUP = 'OR make a New Group';
const TEXT_ADVERT_IMAGE = 'Immagine';
const TEXT_ADVERT_IMAGE_LOCAL = 'O inserisci il nome di un file locale';
const TEXT_ADVERT_IMAGE_TARGET = 'Salva nella cartella';
const TEXT_ADVERT_HTML_TEXT = 'HTML Text';

const TEXT_ADVERT_TITLE_HELP = 'Viene utilizzato solo nell\'Elenco degli annunci come promemoria per te.';
const TEXT_ADVERT_URL_HELP = 'Includi https:// per i collegamenti esterni o solo il nome di una pagina per i collegamenti interni (eg product_info.php o advanced_search_result.php)';
const TEXT_ADVERT_FRAGMENT_HELP = 'Utilizzato solo in combinazione con i link interni nel tuo negozio! Porzioni di  URL, per esempio: products_id=3 or keywords=xyz';
const TEXT_ADVERT_SORT_HELP = 'Questo determina l\'ordinamento degli annunci * all\'interno * del suo gruppo.';

const TEXT_ADVERT_NOTE = '
<strong>ANote Annuncio:</strong>
<ul>
  <li>Puoi usare un immagine e/o HTML (solitamente solo testo!).</li>
  <li>La visualizzazione dell\'immagine e/o html dipende dai moduli installati.</li>
</ul>';
const TEXT_INSERT_NOTE = '
<strong>Importanti note immagine:</strong>
<ul>
  <li>La cartella di caricamento deve essere scrivibile dall\'utente</li>
  <li>Non compilare il campo "Salva nella directory" se non stai caricando un\'immagine sul server web (cioè stai usando un\'immagine locale (lato server)).</li>
  <li>The "Il campo "Salva in directory" deve essere una directory esistente con una barra finale/slash (esempio: adverts/ or carousels/).</li>
</ul>';

const TEXT_IMAGE_NONEXISTENT = 'Immagine MANCANTE';

const TEXT_ADVERT_DATE_ADDED = 'Data aggiunta: %s';
const TEXT_ADVERT_STATUS_CHANGE = 'Cambio stato: %s';

const TEXT_INFO_DELETE_INTRO = 'Sei sicuro di voler eliminare questo annuncio?';
const TEXT_INFO_DELETE_IMAGE = 'Cancella Immagine';

const SUCCESS_IMAGE_INSERTED = '<strong>Completato:</strong>Nuovo Annuncio Inserito.';
const SUCCESS_IMAGE_UPDATED = '<strong>Completato:</strong> L\annuncio è aggiornato.';
const SUCCESS_IMAGE_REMOVED = '<strong>Completato:</strong> Annuncio rimosso.';
const SUCCESS_ADVERT_STATUS_UPDATED = '<strong>Completato:</strong> Stato annuncio aggiornato.';

const ERROR_ADVERT_TITLE_REQUIRED = '<strong>Errore:</strong> TITOLO Annuncio richiesto.';
const ERROR_ADVERT_GROUP_REQUIRED = '<strong>Errore:</strong>  GRUOPO Annuncio richiesto.';
const ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST = '<strong>Errore:</strong> La cartella di destinazione non esiste: %s';
const ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE = '<strong>Errore:</strong> TLa cartella di destinazione non è scrivibile: %s';
const ERROR_IMAGE_DOES_NOT_EXIST = '<strong>Errore:</strong> Immagine non presente.';
const ERROR_IMAGE_IS_NOT_WRITEABLE = '<strong>Errore:</strong>  Immagine non cancellabile.';
const ERROR_ADVERT_IMAGE_OR_TEXT_REQUIRED = '<strong>Errore:</strong> Non hai inserito un testo ne un\'immagine. L\annuncio richiede un\'immagine \o un testo \o entrambi  per essere mostrato.';

const TEXT_DISPLAY_NUMBER_OF_ADVERTS = 'Mostra <b>%s</b> da <b>%s</b> a <b>%s</b> Annunci';
const IMAGE_NEW_ADVERT = 'Nuovo Annuncio';

const TEXT_ADVERT_EXTERNAL_URL = '<i class="fas fa-external-link-alt mr-1"></i> link esterno:<br>%s';
const TEXT_ADVERT_INTERNAL_URL = '<i class="fas fa-link mr-1"></i> link interno:<br>%s';

const IMAGE_IMPORT_ADVERT = 'Tenta importazione banner';
const IMAGE_IMPORT_ADVERT_EXPLANATION = 'Ciò importerà i dati dalla tabella del database "banner". Potrebbe essere necessario eliminare alcuni dati dopo l\'importazione poiché i "banner" non sono mai stati pensati per l\'uso a carosello ...';
const SUCCESS_BANNERS_IMPORTED = '<strong>Success:</strong>  Tabella Banners Importata!';

const GET_HELP_LINK = 'https://phoenixcart.org/phoenixcartwiki/index.php?title=Advert_Manager';
