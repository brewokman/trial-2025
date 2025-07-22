<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Models\Student;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Filters\SelectFilter;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;
    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationLabel = 'Data Mahasiswa';
    protected static ?string $pluralLabel = 'Data Mahasiswa';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Mahasiswa')
                    ->schema([
                        TextInput::make('nim')
                            ->label('NIM')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(20),
                        
                        TextInput::make('nama')
                            ->label('Nama Lengkap')
                            ->required()
                            ->maxLength(100),
                        
                        Select::make('jurusan')
                            ->label('Jurusan')
                            ->options([
                                'Teknik Informatika' => 'Teknik Informatika',
                                'Sistem Informasi' => 'Sistem Informasi',
                                'Teknik Komputer' => 'Teknik Komputer',
                                'Manajemen Informatika' => 'Manajemen Informatika',
                            ])
                            ->required(),
                        
                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->required()
                            ->unique(ignoreRecord: true),
                        
                        TextInput::make('no_telp')
                            ->label('No. Telepon')
                            ->tel()
                            ->maxLength(15),
                        
                        Textarea::make('alamat')
                            ->label('Alamat')
                            ->rows(3),
                        
                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'aktif' => 'Aktif',
                                'non-aktif' => 'Non-Aktif',
                            ])
                            ->default('aktif')
                            ->required(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nim')
                    ->label('NIM')
                    ->searchable()
                    ->sortable(),
                
                TextColumn::make('nama')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),
                
                TextColumn::make('jurusan')
                    ->label('Jurusan')
                    ->searchable()
                    ->sortable(),
                
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
                
                Tables\Columns\BadgeColumn::make('status')
                    ->label('Status')
                    ->colors([
                        'success' => 'aktif',
                        'danger' => 'non-aktif',
                    ])
                    ->icons([
                        'heroicon-o-check-circle' => 'aktif',
                        'heroicon-o-x-circle' => 'non-aktif',
                    ]),
                
                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('jurusan')
                    ->options([
                        'Teknik Informatika' => 'Teknik Informatika',
                        'Sistem Informasi' => 'Sistem Informasi',
                        'Teknik Komputer' => 'Teknik Komputer',
                        'Manajemen Informatika' => 'Manajemen Informatika',
                    ]),
                
                SelectFilter::make('status')
                    ->options([
                        'aktif' => 'Aktif',
                        'non-aktif' => 'Non-Aktif',
                    ]),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'view' => Pages\ViewStudent::route('/{record}'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }
}