<?php

namespace App\Http\Livewire\Admin\Events;

use App\Exports\ApplicationsExport;
use App\Http\Livewire\BasePage;

use App\Models\Application;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\TagsColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\ActionGroup;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Tables\Filters\SelectFilter;

class ApplicationPage extends BasePage
{

  public $actions = [
    [
        "label" => "Export",
        "perms" => "admin:application:create",
        "icon" => "download",
        "action" => "export",
        "class" => "bg-green-800 text-white  font-semibold"
    ],
  ];

  public function export() 
    {
        return Excel::download(new ApplicationsExport, 'Applications.xlsx');
    }

  public $title = "All Applications";
  public $permission = "admin:application:";

  protected function deleteItem(Application $record){
    $record->delete();
  }

  

  
  protected function showItem(Application $record){
    return redirect()->route('admin.application.show',[$record->hid]);
  }



  protected function getTableColumns(): array
  {
    return [
        
        TextColumn::make('event.name')->searchable()->sortable()->label('Event Name'),

        TextColumn::make('startup.name')->searchable()->sortable()->label('Startup Name'),
        TextColumn::make('status')->searchable()->sortable()->label('Application Status'),

    ];
  }

  protected function getTableQuery(): Builder
  {
      return Application::query()->latest();   
  }

  protected function getTableActions(): array
  {
      return [
        
          ActionGroup::make([
              Action::make('View Applications')
                  ->action(function($record){
                      $this->showItem($record);
                  })
                  ->visible(function($record){
                      return auth()->user()->can($this->permission.'view');
                  })->icon('heroicon-s-eye')->color('primary'),
            
          ])
      ];
  }

  protected function getTableFilters(): array
{
    return [
      SelectFilter::make('status')->name('Application Status')
      ->options([
          'Selected' => 'Selected',
          'Rejected' => 'Rejected',
          
      ])
      ->attribute('status')
    ];
}
 

}