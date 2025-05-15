# Analisi PHPStan Livello 2 per il modulo CloudStorage

Data: Wed Apr 23 21:21:11 CEST 2025

## Errore di esecuzione

```
Note: Using configuration file /var/www/html/_bases/base_quaeris_fila3_mono/laravel/phpstan.neon.
  0/17 [░░░░░░░░░░░░░░░░░░░░░░░░░░░░]   0%[1G[2K 17/17 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100%

{"totals":{"errors":0,"file_errors":1},"files":{"/var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/CloudStorage/app/Services/GoogleDriveService.php":{"errors":1,"messages":[{"message":"Call to an undefined method Modules\\User\\Models\\User::getProviderField().","line":36,"ignorable":true,"identifier":"method.notFound"}]}},"errors":[]}```
