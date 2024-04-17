<?php

namespace App\Exports;

use App\Models\Supplier;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExportSupplier implements FromCollection, WithTitle, WithHeadings, WithStyles, ShouldAutoSize, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Supplier::select('identification','legal_document','name','first_last_name','second_last_name','phone','second_phone','email','company_name')->get();
    }

    public function title(): string{
        return 'Proveedores';
    }
    public function headings(): array{
        return ['Cedula','Cedula Juridica','Nombre','Primer Apellido','Segundo Apellido','Telefono','Telefono secundario','Correo electrónico','Nombre de la empresa'];
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
