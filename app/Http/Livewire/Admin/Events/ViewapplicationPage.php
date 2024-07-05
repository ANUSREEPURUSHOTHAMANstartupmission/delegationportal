<?php

namespace App\Http\Livewire\Admin\Events;

use App\Exports\ApplicationExport;
use App\Http\Livewire\BasePage;

use App\Models\Application;
use App\Models\Events;
use Razorpay\Api\Api;
use Maatwebsite\Excel\Facades\Excel;

use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\TagsColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Support\Facades\Http;
use Filament\Tables\Filters\SelectFilter;

class ViewapplicationPage extends BasePage
{
  public $title = "Applications";
  public $permission = "admin:application:";
  public $activity;
  public $event;
  public $applications;

  public $actions = [
    [
        "label" => "Export",
        "perms" => "admin:application:create",
        "icon" => "download",
        "action" => "export",
        "class" => "bg-green-800 text-white  font-semibold"
    ],
  ];

  public function mount(Events $event)
  {
    
    $this->event = $event;
  }

  protected function deleteItem(Application $record){
    $record->delete();
  }

  
  protected function showItem(Application $record){
    return redirect()->route('admin.application.show',[$record->hid]);
  }

  protected function pstatus(Application $record)
  {

    $paymentLinkId=$record->paymentlink;
    
    if($paymentLinkId){

    $apikey=env('RAZORPAY_KEY');
    $secretkey=env('RAZORPAY_SECRET');

    $api = new Api($apikey, $secretkey);


    $response = $api->paymentLink->fetch($paymentLinkId);;
        
      
            $record->paymentstatus = $response->status;
            $record->save();
        
    }
    
  }

  protected function getTableColumns(): array
  {
    return [
        
       
        TextColumn::make('startup.name')->searchable()->sortable()->label('Startup Name'),
        TextColumn::make('status')->searchable()->sortable()->label('Application Status'),
        TextColumn::make('paymentstatus')->searchable()->sortable()->label('Payment Status'),
        
    ];
  }

  protected function getTableQuery(): Builder
  {
      return Application::query()->where('event_id',$this->event->id);   
  }

  public function export() 
  {
      return Excel::download(new ApplicationExport($this->event), $this->event->name.'.xlsx');

  }

  protected function getTableActions(): array
  {
      return [
       
          ActionGroup::make([
              Action::make('View Application')
                  ->action(function($record){
                      $this->showItem($record);
                  })
                  ->visible(function($record){
                      return auth()->user()->can($this->permission.'view');
                  })->icon('heroicon-s-eye')->color('primary'),
            
                ]),
          
          
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