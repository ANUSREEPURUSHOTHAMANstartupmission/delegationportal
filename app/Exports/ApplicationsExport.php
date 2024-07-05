<?php

namespace App\Exports;

use App\Models\Application;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
class ApplicationsExport implements FromCollection,WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Application::all();
    }
   
    public function map($application): array
    {
        
        
        return [
            $application->event->name,
            $application->event->startdate,
            $application->event->enddate,
            $application->event->fee,
            $application->event->venue,
            $application->event->lastdate,
            $application->startup->name,
            $application->startup->founder_name,
            $application->startup->email,
            $application->startup->website,
            $application->startup->contact_num,
            $application->startup->location,
            $application->startup->unique_id,
            $application->startup->founding_year,
            $application->startup->product_details,
            $application->startup->product_usecase,
            $application->startup_stage,
            $application->business_sector,
            $application->revenue_generated_current,
            $application->revenue_generated_previous,
            $application->investment_raised,
            $application->why_participate,
            $application->willing_to_pay,
            $application->remark_select,
            $application->status,
            $application->paymentstatus

            
        ];
    }

    public function headings(): array
    {
        return [
            'Event Name',
            'Start Date',
            'End Date',
            'Fee',
            'Venue',
            'Last Date',
            'Startup Name',
            'Founder Name',
            'Email',
            'Website',
            'Contact Number',
            'Location',
            'Unique Id',
            'Founding Year',
            'Product Details',
            'Product Usecase',
            'Startup Stage',
            'Business Sector',
            'Revenue Generated Current FY',
            'Revenue Generated Previous FY',
            'Investment Raised',
            'Why do you want to participate in this delegation?',
            'I accept the terms and is willing to pay the registration fee',
            'Remark',
            'Application Status',
            'Payment Status'



           
        ];
    }
}
