<?php

namespace App\Filament\Pages;

use App\Models\Expert;
use App\Models\Goal;
use App\Models\Hero;
use App\Models\Service;
use App\Models\ServiceCategory;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Pages\Page;

class LandingPageSettings extends Page implements HasForms
{
    use InteractsWithForms;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.landing-page-settings';

    public ?array $data = [];

    public $heroes;
    public $goals;
    public $experts;
    public $servicesCategories;

    public function getTitle(): string
    {
        return 'صفحة الهبوط';
    }
    public static function getNavigationLabel(): string
    {
        return 'صفحة الهبوط';
    }

    public function mount(): void
    {
        $this->form->fill([
            'heroes' => Hero::orderBy('order')->get()->toArray(),
            'goals' => Goal::orderBy('order')->get()->toArray(),
            'experts' => Expert::orderBy('order')->get()->toArray(),
            'servicesCategories' => ServiceCategory::orderBy('order')->with('services')->get()->toArray(),
        ]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Repeater::make('heroes')
                    ->defaultItems(0)
                    ->label('الأقسام المميزة')
                    ->reorderable()
                    ->schema([
                        TextInput::make('title')
                            ->label('العنوان'),
                        TextInput::make('description')
                            ->label('الوصف'),
                        FileUpload::make('image_path')
                            ->disk('public')
                            ->directory('images')
                            ->label('الصورة'),
                        Toggle::make('isActive')
                            ->default(true)
                            ->label('مفعلة؟'),
                    ]),
                Repeater::make('goals')
                    ->defaultItems(0)
                    ->label('الأهداف')
                    ->reorderable()
                    ->schema([
                        TextInput::make('title')
                            ->label('العنوان'),
                    ]),
                Repeater::make('experts')
                    ->defaultItems(0)
                    ->label('الخبراء')
                    ->reorderable()
                    ->schema([
                        TextInput::make('name')
                            ->label('الإسم'),
                        TextInput::make('description')
                            ->label('الوصف'),
                        FileUpload::make('image_path')
                            ->disk('public')
                            ->directory('images')
                            ->label('الصورة'),
                        Toggle::make('isLeader')
                            ->label('القائد؟')
                            ->default(false),
                    ]),
                Repeater::make('servicesCategories')
                    ->defaultItems(0)
                    ->label('تصنيفات الخدمات')
                    ->reorderable()
                    ->schema([
                        TextInput::make('title')
                            ->label('العنوان'),
                        Repeater::make('services')
                            ->defaultItems(0)
                            ->label('الخدمات')
                            ->reorderable()
                            ->schema([
                                TextInput::make('title')
                                    ->label('العنوان'),
                                FileUpload::make('image_path')
                                    ->disk('public')
                                    ->directory('images')
                                    ->label('الصورة'),
                            ]),
                    ]),

            ]);
    }

    public function save(): void
    {
        $data = $this->form->getState();

        $counter = 0;
        foreach ($data['heroes'] as $heroData) {
            ++$counter;
            Hero::updateOrCreate(
                ['id' => $heroData['id'] ?? null], // Use the 'id' to determine if it's an update or create
                [
                    'title' => $heroData['title'],
                    'description' => $heroData['description'],
                    'image_path' => $heroData['image_path'],
                    'isActive' => $heroData['isActive'] ?? false,
                    'order' => $counter,
                ]
            );
        }

        $counter = 0;
        foreach ($data['goals'] as $goalData) {
            ++$counter;
            Goal::updateOrCreate(
                ['id' => $goalData['id'] ?? null],
                [
                    'title' => $goalData['title'],
                    'order' => $counter,
                ]
            );
        }

        $counter = 0;
        foreach ($data['experts'] as $expertData) {
            ++$counter;
            Expert::updateOrCreate(
                ['id' => $expertData['id'] ?? null],
                [
                    'name' => $expertData['name'],
                    'description' => $expertData['description'],
                    'image_path' => $expertData['image_path'],
                    'isLeader' => $expertData['isLeader'] ?? false,
                    'order' => $counter,
                ]
            );
        }

        $counter = 0;
        foreach ($data['servicesCategories'] as $categoryData) {
            ++$counter;
            $category = ServiceCategory::updateOrCreate(
                ['id' => $categoryData['id'] ?? null],
                [
                    'title' => $categoryData['title'],
                    'order' => $counter,
                ]
            );

            $servicesCounter = 0;
            foreach ($categoryData['services'] as $serviceData) {
                ++$servicesCounter;
                Service::updateOrCreate(
                    ['id' => $serviceData['id'] ?? null],
                    [
                        'title' => $serviceData['title'],
                        'image_path' => $serviceData['image_path'],
                        'service_category_id' => $category->id,
                        'order' => $servicesCounter,
                    ]
                );
            }
        }
    }

}
