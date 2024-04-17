<?php

namespace App\Exports;

use App\Models\Project;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExportProject implements FromCollection, WithTitle, WithHeadings, WithStyles, ShouldAutoSize, WithEvents, WithColumnFormatting
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Project::select('customer_id','project_name','in_charge','start_date','finish_date','budget')->get();
    }

    public function title(): string{
        return 'Proyectos';
    }
    public function headings(): array{
        return ['Nombre del proyecto','Cliente','Persona encargada','Fecha de inicio','Fecha de Finalización','Presupuesto'];
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
    public function columnFormats(): array
    {
        return[
            'F' =>'"₡ "#,##0.00_-',
            /* 
                Estos es para formatear la fecha pero no la esta acomodando recheck
            'D' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            'E' => NumberFormat::FORMAT_DATE_DDMMYYYY, */
            
        ];
    }
    
}
