<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

const TABLE_HEADING_NEW_PRODUCTS = 'Nuovi prodotti per %s';

const TEXT_NO_PRODUCTS = 'Non ci sono prodotti in questa categoria.';
const TEXT_NUMBER_OF_PRODUCTS = 'Numero di prodotti: ';
const TEXT_SHOW = '<b>Mostra:</b>';
const TEXT_BUY = 'Compra 1 \'';
const TEXT_NOW = '\' Subito';
const TEXT_ALL_CATEGORIES = 'Tutte le Categorie';
const TEXT_ALL_MANUFACTURERS = 'Tutti i Prodotti';

// seo
if ( ($category_depth == 'top') && (!isset($_GET['manufacturers_id'])) ) {
  define('META_SEO_TITLE', 'Benvenuto nel Ns. negozio onLine');
  define('META_SEO_DESCRIPTION', 'Scopri un\'ampia selezione di prodotti e goditi uno shopping online facile con un servizio clienti eccellente.');
}

