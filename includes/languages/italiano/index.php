<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

define('TABLE_HEADING_NEW_PRODUCTS', 'Nuovi prodotti per %s');

define('TEXT_NO_PRODUCTS', 'Non ci sono prodotti in questa categoria.');
define('TEXT_NUMBER_OF_PRODUCTS', 'Numero di prodotti: ');
define('TEXT_SHOW', '<b>Mostra:</b>');
define('TEXT_BUY', 'Compra 1 \'');
define('TEXT_NOW', '\' Subito');
define('TEXT_ALL_CATEGORIES', 'Tutte le Categorie');
define('TEXT_ALL_MANUFACTURERS', 'Tutti i Prodotti');

// seo
if ( ($category_depth == 'top') && (!isset($_GET['manufacturers_id'])) ) {
  define('META_SEO_TITLE', 'Index Page Titolo');
  define('META_SEO_DESCRIPTION', 'Testo descrizione');
}

