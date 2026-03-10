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
use Filament\Forms\Components\DatePicker;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Group;
use Filament\Support\Icons\Heroicon;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                Section::make("Post Details")
                    ->description("Fill in the details of the post")
                    ->icon('heroicon-o-document-text')
                    ->Schema([

                        TextInput::make('title')
                            // ->rule('required')
                            // ->required()
                            ->rules(["required", "min:3", "max:50"]),
                        TextInput::make('slug')
                            ->required()
                            ->unique(),
                        Select::make('category_id')
                            ->label('Category')
                            ->options(
                                \App\Models\Category::all()->pluck('name', 'id')
                            )
                            ->required(),
                        ColorPicker::make("color"),
                        MarkdownEditor::make('body'),
                    ]),
                Group::make([

                    Section::make('Image Upload')
                        ->schema([
                            FileUpload::make('image')
                                ->disk('public')
                                ->directory('post'),
                        ])
                ]),

                Section::make('Meta')
                    ->schema([
                        TagsInput::make('tags'),
                        Checkbox::make('published'),
                        DatePicker::make('published_at'),
                    ]),
            ])->columns(2);
    }
}
