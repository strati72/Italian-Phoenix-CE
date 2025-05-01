<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2024 Phoenix Cart

  Released under the GNU General Public License
*/

  const MODULE_NAVBAR_ACCOUNT_TITLE = 'Profilo';
  const MODULE_NAVBAR_ACCOUNT_DESCRIPTION = 'Mostra l\'accesso al profilo degli utente nella barra di navigazione.';
  
  const MODULE_NAVBAR_ACCOUNT_LOGGED_OUT = <<<'LI'
   '<i title="Il mio Profilo" class="fas fa-user fa-fw"></i><span class="d-inline d-sm-none d-md-inline"> Il mio Profilo</span>
LI;
  
  const MODULE_NAVBAR_ACCOUNT_LOGGED_IN = <<<'LI'
  <span class="position-relative">
    <i title="Il mio Profilo" class="fas fa-user fa-fw"></i>
    <span class="d-none d-sm-inline position-absolute top-0 start-100 translate-middle badge">
      <i class="fas fa-check fa-2xl text-info"></i>
    </span>
  </span>
    <span class="d-inline d-sm-none">%s, sei disconnesso</span>
LI;

  const MODULE_NAVBAR_ACCOUNT_LOGIN = '<i class="fas fa-sign-in-alt fa-fw"></i> Accedi';
  const MODULE_NAVBAR_ACCOUNT_LOGOFF = '<i class="fas fa-sign-out-alt fa-fw"></i> Disconnetti';
  const MODULE_NAVBAR_ACCOUNT = 'Il mio Profilo';
  const MODULE_NAVBAR_ACCOUNT_HISTORY = 'I miei ordini';
  const MODULE_NAVBAR_ACCOUNT_EDIT = 'dettagli';
  const MODULE_NAVBAR_ACCOUNT_ADDRESS_BOOK = 'I miei indirizzi';
  const MODULE_NAVBAR_ACCOUNT_PASSWORD = 'La mia Password';
  const MODULE_NAVBAR_ACCOUNT_REGISTER = '<i class="fas fa-fw fa-pencil-alt"></i> Registra';

  