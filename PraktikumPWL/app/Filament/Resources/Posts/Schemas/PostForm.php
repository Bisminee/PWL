<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DateTimePicker;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('title')->required(),
                TextInput::make('slug')->required(),
                Select::make('category_id')
                    ->label('Category')
                    ->options(
                        \App\Models\Category::all()->pluck('name', 'id')
                    )
                    ->required(),
                ColorPicker::make("color"),
                MarkdownEditor::make('body'),
                FileUpload::make("image")
                    ->disk("public")
                    ->directory("post"),
                TagsInput::make('tags'),
                Checkbox::make('published'),
                dateTimePicker::make('published_at'),
            ]);
    }
}
