<?php

namespace App\Http\Livewire\Admin\Dashboard;

use App\Models\Events;
use App\Models\Fund;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Applicationtable extends Component implements HasTable
{
  use InteractsWithTable;

  public $title = "Applications Details";
  public $permission = "admin:dashboard:";
 
  public $application;

 


  protected function getTableColumns(): array
  {
      return [
          TextColumn::make('name')->searchable()->sortable()->label('Event Name'),
          TextColumn::make('applications_count')->sortable()->label('Applications'),
          TextColumn::make('selected_count')->sortable()->label('Selected'),
          TextColumn::make('paymentstatus_completed_count')->sortable()->label('Payment Completed'),
          TextColumn::make('paymentstatus_completed_sum_fee')->sortable()->label('Total Amount'),
      ];
  }

  protected function getTableQuery(): Builder
  {
      return Events::query()
          ->withCount(['applications'])
          ->select('events.id', 'events.name') // Add other columns you need in the select statement
          ->groupBy('events.id', 'events.name') // Group by the non-aggregate columns
          ->addSelect(DB::raw('(SELECT COUNT(*) FROM applications WHERE events.id = applications.event_id) AS applications_count'))
          ->addSelect(DB::raw('(SELECT COUNT(*) FROM applications WHERE events.id = applications.event_id AND status = \'Selected\') AS selected_count'))
          ->addSelect(DB::raw('(SELECT COUNT(*) FROM applications WHERE events.id = applications.event_id AND paymentstatus = \'Payment Completed\') AS paymentstatus_completed_count'))
          ->addSelect(DB::raw('(SELECT SUM(CASE WHEN paymentstatus = \'Payment Completed\' THEN CAST(fee AS NUMERIC) ELSE 0 END) FROM applications WHERE events.id = applications.event_id) AS paymentstatus_completed_sum_fee'))->latest();
  }
  

  public function render()
  {
    return view('livewire.application-page');
  }



}
