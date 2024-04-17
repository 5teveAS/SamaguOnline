<?php

namespace App\Exports;

use App\Models\Expense;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExportExpenses implements FromCollection, WithTitle, WithHeadings, WithStyles, ShouldAutoSize, WithEvents, WithColumnFormatting
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Expense::select('project_id','bill_id','expense_name','expense_description','unique_expense')->get();
    }

    public function title(): string{
        return 'Gastos';
    }
    public function headings(): array{
        return ['Nombre del gasto','Descripcion','Numero de factura','Nombre del proyecto','Gasto Unico'];
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
            'E' =>'"₡ "#,##0.00_-'
        ];
    }
    
}
