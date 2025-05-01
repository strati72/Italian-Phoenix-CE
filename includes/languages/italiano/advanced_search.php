<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

const NAVBAR_TITLE_1 = 'Ricerca Avanzata';
const NAVBAR_TITLE_2 = 'Risualtati Ricerca';

const HEADING_TITLE_1 = 'Ricerca Avanzata';
const HEADING_TITLE_2 = 'Prodotti che soddisfano i vincoli di ricerca';

const HEADING_SEARCH_CRITERIA = 'Criteri di ricerca';

const TEXT_SEARCH_IN_DESCRIPTION = 'Ricerca descrizione prodotto';
const ENTRY_CATEGORIES = 'Categorie:';
const ENTRY_INCLUDE_SUBCATEGORIES = 'Includi Subcategorie';
const ENTRY_MANUFACTURERS = 'Produttori:';
const ENTRY_PRICE_FROM = 'Dal prezzo:';
const ENTRY_PRICE_TO = 'Al prezzo:';

const ENTRY_PRICE_FROM_TEXT = 'Da';
const ENTRY_PRICE_TO_TEXT = 'A';

const ENTRY_PRICE = 'Prezzo';

const TEXT_SEARCH_HELP_LINK = '<i class="fas fa-info-circle"></i> Aiuto ricerca';

const TEXT_ALL_CATEGORIES = 'Tutte le categorie';
const TEXT_ALL_MANUFACTURERS = 'Tutti i produttori';

const HEADING_SEARCH_HELP = 'Aiuto ricerca';
const TEXT_SEARCH_HELP = <<<'EOT'
Le parole chiave devono essere separate da AND oppure OR per stabilire un buon controllo dei risultati.<br>
<br>
Per esempio, <u>Microsoft AND mouse</u> genererà risultati che conterranno entrambe le parole. Invece, inserendo <u>mouse OR keyboard</u>, si genererà una lista che contiene prodotti che hanno sia entrambe le parole oppure una delle due..<br>
<br>
E\' inoltre possibile visualizzare i risultati esatti comprendendo le parole fra virgolette..<br>
<br>
Per esempio, <u>\"notebook computer\"</u> si otterrà una lista di prodotti che hanno la stringa esatta al loro interno.<br>
<br>
Le parentesi possono essere usate per controllare l\'ordine degli operatori logici.<br>
<br>
Per esempio, è possibile inserire <u>Microsoft and (tastiere or mouse or \"visual basic\")</u>.
EOT;
const TEXT_CLOSE_WINDOW = '<u>Chiudi finestra</u> [x]';

const TEXT_NO_PRODUCTS = 'Non ci sono prodotti che soddisfano i vincoli di ricerca.';

const ERROR_AT_LEAST_ONE_INPUT = 'Deve essere inserito almeno uno nei campi di ricerca.';
const ERROR_PRICE_FROM_MUST_BE_NUM = 'Il campo \"Dal prezzo\" deve essere un numero.';
const ERROR_PRICE_TO_MUST_BE_NUM = 'Il campo \"Al prezzo\"  deve essere un numero.';
const ERROR_PRICE_TO_LESS_THAN_PRICE_FROM = 'Il campo \"Al prezzo\" deve essere maggiore o uguale al campo \"Dal prezzo\".';
const ERROR_INVALID_KEYWORDS = 'Parole chiave non valide.';
