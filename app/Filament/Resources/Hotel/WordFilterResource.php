<?php

namespace App\Filament\Resources\Hotel;

use Filament\Tables;
use Filament\Forms\Form;
use App\Models\WordFilter;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use App\Filament\Traits\TranslatableResource;
use App\Filament\Resources\Hotel\WordFilterResource\Pages;

class WordFilterResource extends Resource
{
    use TranslatableResource;

    protected static ?string $model = WordFilter::class;

    protected static ?string $navigationIcon = 'heroicon-o-eye-slash';

    protected static ?string $navigationGroup = 'Hotel';

    public static string $translateIdentifier = 'wordfilter';

    protected static ?string $slug = 'hotel/wordfilters';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('key')
                    ->label(__('filament::resources.inputs.key'))
                    ->unique('wordfilter', 'key', ignoreRecord: true)
                    ->required(),

                TextInput::make('replacement')
                    ->label(__('filament::resources.inputs.replacement'))
                    ->maxLength(16)
                    ->required(),

                Select::make('hide')
                    ->native(false)
                    ->label(__('filament::resources.inputs.hideable'))
                    ->default('0')
                    ->options([
                        '0' => __('filament::resources.options.no'),
                        '1' => __('filament::resources.options.yes'),
                    ]),

                Select::make('report')
                    ->native(false)
                    ->label(__('filament::resources.inputs.reportable'))
                    ->default('0')
                    ->options([
                        '0' => __('filament::resources.options.no'),
                        '1' => __('filament::resources.options.yes'),
                    ]),

                TextInput::make('mute')
                    ->label(__('filament::resources.inputs.mute_time'))
                    ->columnSpanFull()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('key')
                    ->label(__('filament::resources.columns.key'))
                    ->searchable(),

                TextColumn::make('replacement')
                    ->label(__('filament::resources.columns.replacement'))
                    ->searchable(),

                IconColumn::make('hide')
                    ->label(__('filament::resources.columns.hideable'))
                    ->options([
                        'heroicon-o-x-circle' => fn ($state, $record): bool => ! $record->hide,
                        'heroicon-o-check-circle' => fn ($state, $record): bool => !! $record->hide,
                    ])
                    ->colors([
                        'danger' => '0',
                        'success' => '1',
                    ]),

                IconColumn::make('report')
                    ->label(__('filament::resources.columns.reportable'))
                    ->options([
                        'heroicon-o-x-circle' => fn ($state, $record): bool => ! $record->report,
                        'heroicon-o-check-circle' => fn ($state, $record): bool => !! $record->report,
                    ])
                    ->colors([
                        'danger' => '0',
                        'success' => '1',
                    ]),

                TextColumn::make('mute')
                    ->label(__('filament::resources.columns.mute_time'))
                    ->searchable(),
            ])
            ->filters([

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageWordFilters::route('/'),
        ];
    }
}
