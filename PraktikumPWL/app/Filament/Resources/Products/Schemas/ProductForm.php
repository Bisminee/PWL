<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Wizard;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Schemas\Components\Group;
use Filament\Forms\Components\MarkDownEditor;
use Filament\Forms\Components\TextInput;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                Wizard::make([
                    Step::make('Product Info')
                        ->description('Isi informasi dasar produk')
                        ->schema([
                            Group::make([
                                TextInput::make('name')
                                    ->required(),
                                TextInput::make('sku')
                                    ->required(),
                            ])->columns(2),
                            MarkdownEditor::make('description')
                        ]),
                    Step::make('Pricing & Stock')
                        ->description('Isi harga dan jumlah stok')
                        ->schema([
                            TextInput::make('price')
                                ->numeric()
                                ->required(),
                            TextInput::make('stock')
                                ->numeric()
                                ->required(),
                        ]),
                ])->columnSpanFull(),
            ]);
    }
}
