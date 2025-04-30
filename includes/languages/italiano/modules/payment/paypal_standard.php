<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Paypal Standard Payments
  Basic Paypal Payment Module for Phoenix Cart
  More sophisticated Paypal integration available at https://phoenixcart.org/forum/addons/

  author: John Ferguson @BrockleyJohn phoenix@cartmart.uk

  Copyright (c) 2024 Phoenix Cart

  Released under the GNU General Public License
*/

const MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_TITLE = 'Paypal Standard';
const MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_PUBLIC_TITLE = 'Paypal';
const MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_DESCRIPTION = '<div class="alert alert-warning text-break">Abilita l\'Auto Return nelle impostazioni del servere configura l\'URL come:<br/>%s<br><br>Abilita PDT e copia il token nel modulo.<br><br>Abilita le notifiche istantanee e l\'URL per le notifiche a:<br/>%s</div><i class="fas fa-external-link-alt me-2"></i><a href="https://www.paypal.com" target="_blank" rel="noopener">Paypal Website</a>';

const MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_RETURN_BUTTON = 'Ritorna ' . STORE_NAME; // max length 60 chars

const MODULE_PAYMENT_PAYPAL_STANDARD_ERROR_ADMIN_CONFIGURATION_SELLER = 'Il modulo non verrà caricato se non viene valorizzato correttamente il campo email del venditore.';
const MODULE_PAYMENT_PAYPAL_STANDARD_ERROR_ADMIN_CONFIGURATION_PDT = 'Il modulo non verrà caricato se non si imposta il token del PDT.';

const MODULE_PAYMENT_PAYPAL_STANDARD_CONFIG_ERROR = 'Paypal non è configurata correttamente; usa un altro metodo di pagamento o contattaci.';
const MODULE_PAYMENT_PAYPAL_STANDARD_UPDATE_COMMENT_ERROR = 'Errore nel memorizzare l\'ordine. Usa un altro metodo di pagamento o contattaci.';
const MODULE_PAYMENT_PAYPAL_STANDARD_ERROR_VALIDATE_FAIL = 'Non posso verificare la trasazione su Paypal - riprova. Se il problema dovrebbe persistere usa un altro metodo di pagamento o contattaci.';

const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_LINK_TEXT = 'Test Server Connection';
const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_TITLE = 'API Server Connection Test';
const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_GENERAL_TEXT = 'verifico la connessione al server...';
const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_CLOSE = 'Chiudi';
const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_TIME = 'Tempo di connessione:';
const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_SUCCESS = 'Completato con successo!';
const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_FAILED = 'Errore di connessione: controlla le impostazioni e riprova.';
const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_ERROR = 'Errore. Ricarica la pagina, controlla le impostazioni e riprova.';
