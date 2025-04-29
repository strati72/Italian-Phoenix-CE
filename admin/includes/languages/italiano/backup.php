<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2022 Phoenix Cart - 2025 Sergio Strati

  Released under the GNU General Public License
*/

const HEADING_TITLE = 'Gestione Salvataggio Database';

const TABLE_HEADING_TITLE = 'Titolo';
const TABLE_HEADING_FILE_DATE = 'Data';
const TABLE_HEADING_FILE_SIZE = 'Dimensione';
const TABLE_HEADING_ACTION =  'Azione';

const TEXT_INFO_HEADING_NEW_BACKUP =  'Nuovo Salvataggio';
const TEXT_INFO_HEADING_RESTORE_LOCAL =  'Ripristina Locale';
const TEXT_INFO_NEW_BACKUP = 'Non interrompere il processo di salvataggio, potrebbe durare diversi minuti.';
const TEXT_INFO_UNPACK = '<br><br>(dopo aver scompattato il file dall\' archivio)';
const TEXT_INFO_RESTORE = 'Non interrompere il processo di ripristino.<br><br>La durata del processo dipende dalla grandezza del Database!<br><br>Se possibile usa un client Mysql.<br><br>Per esempio:<br><br><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s';
const TEXT_INFO_RESTORE_LOCAL = 'Non interrompere il processo di ripristino.<br><br>La durata del processo dipende dalla grandezza del Database!<';
const TEXT_INFO_RESTORE_LOCAL_RAW_FILE =  'Il file importato deve essere un file.sql!';
const TEXT_INFO_DATE ='Data: %s';
const TEXT_INFO_SIZE =  'Dimensione: %s';
const TEXT_INFO_COMPRESSION =  'Compressione: %s';
const TEXT_INFO_USE_GZIP = 'Usa GZIP';
const TEXT_INFO_USE_ZIP = 'Usa ZIP';
const TEXT_INFO_USE_NO_COMPRESSION = 'Non Compresso (solo SQL)';
const TEXT_INFO_DOWNLOAD_ONLY = 'Solo Download (non depositare lato server)';
const TEXT_INFO_BEST_THROUGH_HTTPS =  'Meglio tramite connessione HTTPS';
const TEXT_DELETE_INTRO =  'Sicuro di voler cancellare questo salvataggio?';
const TEXT_NO_EXTENSION = 'Nessuna';
const TEXT_BACKUP_DIRECTORY =  'Directory di salvataggio:';
const TEXT_LAST_RESTORATION = 'Ultimo Ripristino:';
const TEXT_FORGET = 'Dimenticare';

const PHP_DATE_TIME_FORMAT = 'd/m/Y H:i:s'; // this is used for date()

const ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST = '<strong>Errore: </strong>La Directory di salvataggio non esiste. Imposta i parametri in configure.php.';
const ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE = '<strong>Errore:</strong> La Directory di salvataggio non &egrave; scrivibile.';
const ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE = '<strong>Errore:</strong> Il Link del Download non &egrave; accettabile.';
const ERROR_INVALID_FILE = 'Il file [%s] non è riconosciuto come un file di salvataggio database valido. Verificare che l\estensione .sql esista  ed abbia dimesioni ragionevoli.';
const ERROR_FILE_TOO_LARGE = 'Il file è di "%d" bytes ma il limite è "%s".';
const ERROR_PATH_NOT_REMOVEABLE = '<strong>Errore:</strong> Impossibile rimuovere "%s"';
const SUCCESS_LAST_RESTORE_CLEARED = '<strong>Operazione riuscita:</strong> L\'ultima data di ripristino &egrave; stata eliminata\'.';
const SUCCESS_DATABASE_SAVED =  '<strong>Operazione riuscita:</strong> Il Database &egrave; stato salvato.';
const SUCCESS_DATABASE_RESTORED ='<strong>Operazione riuscita:</strong> Il Database &egrave; stato ripristinato.';
const SUCCESS_BACKUP_DELETED =  '<strong>Operazione riuscita:</strong> Il File di salvataggio &egrave; stato rimosso.';
const TEXT_INFO_BACKUP_SIZE ='%s MB';

const GET_HELP_LINK = 'https://phoenixcart.org/phoenixcartwiki/index.php?title=Database_Backup';
?>
