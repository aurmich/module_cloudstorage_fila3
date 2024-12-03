<?php

declare(strict_types=1);

namespace Modules\CloudStorage\Filament\Pages;

use Filament\Pages\Page;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Modules\CloudStorage\Services\GoogleDriveService;

// implements HasTable

class GoogleDriveFileListPage extends Page
{
    // use InteractsWithTable;
    protected static string $view = 'cloudstorage::filament.pages.google-drive-file-list';
    protected static ?string $navigationIcon = 'heroicon-o-cloud';
    protected static ?string $navigationGroup = 'Cloud Storage';

    protected GoogleDriveService $driveService;

    public function mount(GoogleDriveService $driveService): void
    {
        $this->driveService = $driveService;

        dddx('a');
    }

    /*
    public function __construct()
    {
        dddx('b');
    }
        */

    public function setUp()
    {
        dddx('c');
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label(__('File Name'))
                    ->searchable(),

                TextColumn::make('mimeType')
                    ->label(__('Type')),

                TextColumn::make('modifiedTime')
                    ->label(__('Modified'))
                    ->dateTime('Y-m-d H:i:s'),

                TextColumn::make('size')
                    ->label(__('Size'))
                    ->formatStateUsing(fn ($state): string => $this->formatFileSize((int) $state)),
            ])
            ->actions([
                Action::make('view')
                    ->icon('heroicon-o-eye')
                    ->tooltip(__('View File'))
                    ->url(fn ($record) => $record['webViewLink'], true),
                /*
                Action::make('share')
                    ->icon('heroicon-o-share')
                    ->tooltip(__('Share to Corporate Folder'))
                    ->action(fn ($record) => $this->shareFileToCorporate($record['id'])),
                */
            ]);
    }

    protected function getFilesQuery(): array
    {
        return $this->driveService->getFiles();
    }

    /*
    protected function shareFileToCorporate(string $fileId): void
    {
        $corporateFolderId = config('cloudstorage.corporate_folder_id'); // Set in config
        $this->driveService->shareFile($fileId, $corporateFolderId);

        // You can log or notify the user about the sharing status.
    }
    */
    protected function formatFileSize(int $size): string
    {
        if ($size >= 1073741824) {
            return number_format($size / 1073741824, 2).' GB';
        } elseif ($size >= 1048576) {
            return number_format($size / 1048576, 2).' MB';
        } elseif ($size >= 1024) {
            return number_format($size / 1024, 2).' KB';
        }

        return $size.' bytes';
    }
}
