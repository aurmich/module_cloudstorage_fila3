# PHPStan Report - Livello 10

## Errori rilevati
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/CloudStorage/app/Filament/Pages/GDriveFileListPage.php: Binary operation "/" between mixed and 1024 results in an error. (line 30)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/CloudStorage/app/Filament/Pages/GoogleDriveFileListPage.php: Method Modules\CloudStorage\Filament\Pages\GoogleDriveFileListPage::setUp() has no return type specified. (line 42)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/CloudStorage/app/Filament/Pages/GoogleDriveFileListPage.php: Cannot cast mixed to int. (line 64)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/CloudStorage/app/Filament/Pages/GoogleDriveFileListPage.php: Cannot access offset 'webViewLink' on mixed. (line 70)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/CloudStorage/app/Services/GoogleDriveService.php: Call to an undefined method Modules\User\Models\User::getProviderField(). (line 36)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/CloudStorage/app/Services/GoogleDriveService.php: Parameter #1 $token of method Google\Client::setAccessToken() expects array|string, mixed given. (line 37)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/CloudStorage/app/Services/GoogleDriveService.php: Cannot call method getFiles() on mixed. (line 50)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/CloudStorage/app/Services/GoogleDriveService.php: Cannot call method listFiles() on mixed. (line 50)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/CloudStorage/app/Services/GoogleDriveService.php: Method Modules\CloudStorage\Services\GoogleDriveService::getFiles() should return array but returns mixed. (line 50)

## Soluzioni proposte

> TODO: descrivere soluzioni architetturali e funzionali

## Collegamenti

- Torna all'indice principale: [Indice Report PHPStan Moduli](/docs/phpstan_modules_index.md)
