<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart - 2025 Sergio Strati

  Released under the GNU General Public License
*/

const NAVBAR_TITLE = 'Controllo Sicurezza';
const HEADING_TITLE = 'Controllo Sicurezza';

const TEXT_INFORMATION = <<<'EOT'
Abbiamo notato che il tuo browser ha generato un differente SSL Session ID rispetto a quello delle nostre pagine web.<br><br>
Per ragioni di sicurezza devi accedere nuovamente al tuo account per continuare a comprare online.<br><br>
Alcuni browser come Konqueror 3.1 non hanno la possibilità di generare un SSL Session ID sicura automaticamente come noi richiediamo. Se hai un browser che non ha questa capacità, ti consigliamo di utilizzare un browser come <a href="http://www.microsoft.com/ie/" target="_blank">Microsoft Internet Explorer</a>, <a href="http://channels.netscape.com/ns/browsers/download_other.jsp" target="_blank">Netscape</a>, o <a href="http://www.mozilla.org/releases/" target="_blank">Mozilla</a>, per continuare a comprare online.<br><br>
Abbiamo preso queste misure di sicurezza per il tuo beneficio, e ci scusiamo per eventuali inconvenienti.<br><br>
<a class="btn btn-success" role="button" href="%s">Contattaci</a> se hai domande riguardo SSL Session ID, oppure continua a comprare prodotti offline.
EOT;

const BOX_INFORMATION_HEADING = 'Privacy e sicurezza';
const BOX_INFORMATION = <<<'EOT'
Noi convalidiamo la SSL Session ID automaticamente generata dal tuo browser su ognuna della pagine sicure richieste su questo server.<br><br>
La convalida assicura che sei proprio tu che stai navigando con il tuo account e non qualcun\'altro da un\'altro computer.
EOT;
