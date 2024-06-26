<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmployeesResource\Pages;
use App\Filament\Resources\EmployeesResource\RelationManagers;
use App\Models\Employees;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Tabs;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;

class EmployeesResource extends Resource
{
    protected static ?string $model = Employees::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        
        return $form
        
        
            ->schema([
 
                Tabs::make('Heading')
                ->tabs([
                    Tabs\Tab::make('Overview')
                        ->schema([
                           
                            Forms\Components\TextInput::make('first_name'),
                            Forms\Components\TextInput::make('middele_name'),
                            Forms\Components\TextInput::make('last_name'),
                            Forms\Components\TextInput::make('full_name'),
                            Forms\Components\Select::make('gender')
                            ->options([
                            'Male' => 'Male',
                            'Female' => 'Female'
                            ]),
                            Forms\Components\DatePicker::make('date_of_brith'),
                            Forms\Components\DatePicker::make('date_of_joining'),
                        ])->columns(2),


                    Tabs\Tab::make('Address & Contact')
                        ->schema([
                            
                            Forms\Components\TextInput::make('mobile'),
                            Forms\Components\TextInput::make('address'),
                            Forms\Components\TextInput::make('personal_email'),
                            Forms\Components\TextInput::make('company_email'),
                            Forms\Components\TextInput::make('emergancy_phone'),
                            Forms\Components\TextInput::make('emergancy_contact_name'),
                        ])->columns(2),


                    Tabs\Tab::make('Personal')
                        ->schema([


                            Forms\Components\TextInput::make('marital_status'),
                            Forms\Components\TextInput::make('blood_group'),
                            Forms\Components\TextInput::make('health_details'),
                            Forms\Components\TextInput::make('iqama_details'),
                            Forms\Components\TextInput::make('driver_license'),
                            Forms\Components\TextInput::make('personal_id'),
                            Forms\Components\DatePicker::make('date_of_issue'),
                            Forms\Components\TextInput::make('valid_upto'),
                            Forms\Components\TextInput::make('place_issue'),

                        ])->columns(2),


                        Tabs\Tab::make('Profile')
                        ->schema([
                            Forms\Components\TextInput::make('education'),
                            Forms\Components\TextInput::make('functional_specialization'),
                            Forms\Components\TextInput::make('previous_works_experience'),
                            Forms\Components\DatePicker::make('history_in_company'),
                        ]),

                    ])
                    
               
              
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name'),
                Tables\Columns\TextColumn::make('mobile'),
                Tables\Columns\TextColumn::make('functional_specialization'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEmployees::route('/'),
            'create' => Pages\CreateEmployees::route('/create'),
            'edit' => Pages\EditEmployees::route('/{record}/edit'),
        ];
    }    
}
