<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExportUser implements FromCollection, WithTitle, WithHeadings, WithStyles, ShouldAutoSize, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::select('employee_id','user_name','email','role')->get();
    }

    public function title(): string{
        return 'Usuarios';
    }
    public function headings(): array{
        return ['ID Empleado','Nombre de usuario','Correo Electronico','Rol'];
    }
    public function styles(Worksheet $sheet)
    {
     return [ 
         1 => ['font' => ['bold' => true]],
    ];
    }
    public function registerEvents(): array
    {
        return[
            AfterSheet::class => function(AfterSheet $event){
                $event->sheet->getDelegate()->getStyle('1')->getFont()->setSize(14);
            },
        ];
    }
}
