<?php
/*
* $Id: stripe_sca.php
* $Loc: /includes/languages/english/modules/payment/
*
* Name: StripeSCA
* Version: 1.70
* Release Date: 2025-03-02
* Author: Rainer Schmied
* 	 phoenixcartaddonsaddons.com / raiwa@phoenixcartaddons.com
*
* License: Released under the GNU General Public License
*
* Comments: Author: [Rainer Schmied @raiwa]
* Author URI: [www.phoenixcartaddons.com]
* 
* CE Phoenix, E-Commerce made Easy
* https://phoenixcart.org
* 
* Copyright (c) 2021 Phoenix Cart
* 
* 
*/
  const MODULE_PAYMENT_STRIPE_SCA_TEXT_TITLE = 'Stripe SCA';
  const MODULE_PAYMENT_STRIPE_SCA_TEXT_PUBLIC_TITLE = 'Credit Card (Stripe SCA)';
  const MODULE_PAYMENT_STRIPE_SCA_TEXT_DESCRIPTION = '<i class="fas fa-external-link-alt me-2"></i><a href="https://www.stripe.com" target="_blank" rel="noopener">Visit Stripe Website</a>';
  const MODULE_PAYMENT_STRIPE_SCA_TEXT_INSTRUCTIONS = '<p>Istruzioni:<br><i class="fas fa-external-link-alt me-2"></i>&nbsp;<a href="https://phoenixcart.org/phoenixcartwiki/index.php?title=Payment#Stripe_SCA" target="_blank" rel="noopener">Configurazione webhook</a></p>';

  const MODULE_PAYMENT_STRIPE_SCA_ERROR_ADMIN_CURL = 'Questo modulo richiede l\'abilitazione del modulo PHP cURL e non verrà caricato finché non sarà abilitato su questo webserver.';
  const MODULE_PAYMENT_STRIPE_SCA_ERROR_ADMIN_CONFIGURATION = 'Questo modulo non verrà caricato finché non saranno configurati i parametri Publishable Key e Secret Key. Modifica e configura le impostazioni di questo modulo.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_STATUS_TITLE = 'Abilita il modulo Stripe SCA';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_STATUS_DESC = 'Vuoi accettare pagamenti tramite Stripe v3?';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_SERVER_TITLE = 'Transaction Server';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_SERVER_DESC = 'Eseguire le transazioni sul server di produzione o sul server di test.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LIVE_PUB_TITLE = 'Live Publishable API Key';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LIVE_PUB_DESC = 'Chiave API pubblicabile dell\'account Stripe da utilizzare per le transazioni di produzione.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LIVE_SECRET_TITLE = 'Live Secret API Key';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LIVE_SECRET_DESC = 'La chiave API segreta dell\'account Stripe da utilizzare con la chiave pubblicabile in tempo reale.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LIVE_WEBHOOK_TITLE = 'Live Webhook Signing Secret';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LIVE_WEBHOOK_DESC = 'The Stripe account live webhook signing secret of the webhook you created to listen for payment_intent.succeeded events.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TEST_PUB_TITLE = 'Test Publishable API Key';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TEST_PUB_DESC = 'The Stripe account publishable API key to use for testing.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TEST_SECRET_TITLE = 'Test Secret API Key';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TEST_SECRET_DESC = 'The Stripe account secret API key to use with the test publishable key.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TEST_WEBHOOK_TITLE = 'Test Webhook Signing Secret';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TEST_WEBHOOK_DESC = 'The Stripe account test webhook signing secret of the webhook you created to listen for payment_intent.succeeded events.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TOKENS_TITLE = 'Crea Tokens';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TOKENS_DESC = 'Creare e archiviare token per i pagamenti tramite carta che i clienti possono utilizzare per i loro prossimi acquisti?';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_CARD_DATA_TITLE = 'Usa 1 campo dati';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_CARD_DATA_DESC = 'Usa 1 campo dati se impostato a "True" o 3 separati campi dati se impostato a "False".';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LOG_TITLE = 'Registra eventi';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LOG_DESC = 'Registrare le chiamate alle funzioni Sripe?';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_METHOD_TITLE = 'Metodo di transazione';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_METHOD_DESC = 'Il metodo di elaborazione da utilizzare per ogni transazione.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_NEW_ORDER_TITLE = 'Imposta nuovo stato ordine';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_NEW_ORDER_DESC = 'Imposta lo stato degli ordini creati con questo modulo di pagamento su questo valore';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_PROCESSED_TITLE = 'Imposta lo stato di elaborazione dell\'ordine';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_PROCESSED_DESC = 'Imposta lo stato degli ordini elaborati correttamente con questo modulo di pagamento su questo valore';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TRANSACTION_TITLE = 'Stato dell\'ordine di transazione';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TRANSACTION_DESC = 'Includi le informazioni sulla transazione in questo livello di stato dell\'ordine';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_ZONE_TITLE = 'Zona di pagamento';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_ZONE_DESC = 'Se è selezionata una zona, abilitare questo metodo di pagamento solo per quella zona.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_SSL_TITLE = 'Verifica certificato SSL';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_SSL_DESC = 'Verificare il certificato SSL del server gateway durante la connessione?';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_PROXY_TITLE = 'Proxy Server';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_PROXY_DESC = 'Invia richieste API tramite questo server proxy. (host:porta, ad esempio: 123.45.67.89:8080 o proxy.example.com:8080)';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_EMAIL_TITLE = 'Indirizzo e-mail di debug';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_EMAIL_DESC = 'Tutti i parametri di una transazione non valida verranno inviati a questo indirizzo email.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_DAYS_DELETE_TITLE = 'Giorni di attesa per eliminare la preparazione degli ordini Stripe.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_DAYS_DELETE_DESC = 'Dopo quanti giorni gli ordini Stripe non completati devono essere eliminati automaticamente? Lascia vuoto per disabilitare.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_SORT_TITLE = 'Ordine di visualizzazione.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_SOR_DESC = 'Ordine di visualizzazione. Il valore più basso, diverso da zero, viene visualizzato per primo.';

  const MODULE_PAYMENT_STRIPE_SCA_CREDITCARD_NEW = 'Inserisci una nuova cartq';
  const MODULE_PAYMENT_STRIPE_SCA_CREDITCARD_OWNER = 'Nome del titolare';
  const MODULE_PAYMENT_STRIPE_SCA_CREDITCARD_TYPE = 'Numero della carta > Data di scadenza > 3 numeri sul retro (CVC)';
  const MODULE_PAYMENT_STRIPE_SCA_CREDITCARD_NUMBER = 'Numero di carta';
  const MODULE_PAYMENT_STRIPE_SCA_CREDITCARD_EXPIRY = 'Data di scadenza (MM/AA)';
  const MODULE_PAYMENT_STRIPE_SCA_CREDITCARD_CVC = '3 numeri sul posteriore (CVC)';
  const MODULE_PAYMENT_STRIPE_SCA_CREDITCARD_SAVE = 'Vuoi salvare la carta per il prossimo acquisto?';
  const MODULE_PAYMENT_STRIPE_SCA_MISSING_INTENT = 'Intent id mancante';
  const MODULE_PAYMENT_STRIPE_SCA_MISSING_CUSTOMER_TOKEN = 'Token cliente mancante';
  const MODULE_PAYMENT_STRIPE_SCA_MISSING_CARD_FOR_TOKEN = 'Nessun dettaglio della carta trovato per il token ';

  const MODULE_PAYMENT_STRIPE_SCA_WEBHOOK_PARAMETER = 'il valore di un parametro parametro è inaspettato';
  const MODULE_PAYMENT_STRIPE_SCA_SECRET_ERROR = 'webhook signing secret invalido';
  const MODULE_PAYMENT_STRIPE_SCA_WEBHOOK_SERVER = 'Errore del server - controllare i log';

  const MODULE_PAYMENT_STRIPE_SCA_ERROR_TITLE = 'Si è verificato un errore durante l\'elaborazione della tua carta di credito';
  const MODULE_PAYMENT_STRIPE_SCA_ERROR_GENERAL = 'Riprova e se i problemi persistono, prova un altro metodo di pagamento.';
  const MODULE_PAYMENT_STRIPE_SCA_ERROR_CARDSTORED = 'Impossibile trovare la carta salvata. Riprova e, se il problema persiste, prova un altro metodo di pagamento.';

  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_LINK_TITLE = 'Test API Server Connection';
  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_TITLE = 'API Server Connection Test';
  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_GENERAL_TEXT = 'Test della connessione al server.';
  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_BUTTON_CLOSE = 'Chiudi';
  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_TIME = 'Tempo di connessione:';
  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_SUCCESS = 'Concluso con successo!';
  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_FAILED = 'Errore! Controlla le impostazioni di verifica del certificato SSL e riprova.';
  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_ERROR = 'Si è verificato un errore. Aggiorna la pagina, controlla le impostazioni e riprova.';

  const MODULE_PAYMENT_STRIPE_SCA_PROCESSING_TEXT = 'Grazie. Stiamo effettuando l\'ordine...';
  const MODULE_PAYMENT_STRIPE_SCA_FINALIZE_TEXT = ' Finalize and Make Payment';
