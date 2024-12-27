<?php

declare(strict_types=1);

namespace Modules\CloudStorage\Services;

class GoogleDriveService
{
    protected \Google_Service_Drive $drive;

    public function __construct()
    {
        $client = new \Google_Client();
        $client->setAuthConfig(storage_path('app/google/credentials.json')); // Your Google OAuth credentials
        $client->addScope(\Google_Service_Drive::DRIVE);
        $client->setAccessType('offline');
        $this->drive = new \Google_Service_Drive($client);
    }

    public function listFiles(): array
    {
        $files = $this->drive->files->listFiles([
            'pageSize' => 20, // Customize as needed
            'fields' => 'nextPageToken, files(id, name, mimeType, modifiedTime, size)',
        ]);

        return $files->getFiles();
    }

    public function shareFile(string $fileId, string $corporateFolderId): \Google_Service_Drive_DriveFile
    {
        $file = new \Google_Service_Drive_DriveFile([
            'parents' => [$corporateFolderId],
        ]);

        return $this->drive->files->update($fileId, $file);
    }

    public function getFileMetadata(string $fileId): \Google_Service_Drive_DriveFile
    {
        return $this->drive->files->get($fileId, [
            'fields' => 'id, name, mimeType, modifiedTime, size, webViewLink',
        ]);
    }
}
