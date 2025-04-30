<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_TITLE = 'Aggiorna lo stato dell\'ordine';
const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_DESCRIPTION = 'Invia una notifica quando lo stato ordine viene aggiornato.';

const MODULE_NOTIFICATIONS_UPDATE_ORDER_SEPARATOR = '------------------------------------------------------';
const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_SUBJECT = 'Aggiorna Ordine';
const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_ORDER_NUMBER = 'Ordine Numero:  %d';
const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_INVOICE_URL = 'Fattura dettagliata:  %s';
const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_DATE_ORDERED = 'Data ordine:  %s';
const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_STATUS_UPDATE = <<<'EOT'
Il tuo ordine è stato aggiornato allo stato: 

Nuovo stato: %s

Ti preghiamo di rispondere a questa mail se hai domande al riguardo


EOT;
const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_COMMENTS_UPDATE = 'I commenti per il tuo ordine sono' . "\n\n%s\n\n";
