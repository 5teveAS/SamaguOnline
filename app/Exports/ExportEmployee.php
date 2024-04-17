<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExportEmployee implements FromCollection, WithTitle, WithHeadings, WithStyles, ShouldAutoSize, WithEvents, WithColumnFormatting
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Employee::select('identification','name','first_last_name','second_last_name','gender','phone','emergency_phone','address','diseases','email','date_of_admission','salary')->get();
    }

    public function title(): string{
        return 'Empleados';
    }
    public function headings(): array{
        return ['Cédula','Nombre empleado','Primer apellido','Segundo apellido','Genero','Teléfono','Teléfono emergencia','Direccion exacta','Enfermedades o alergias','Correo electronico','Fecha ingreso','Salario neto'];
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
            'L' =>'"₡ "#,##0.00_-'
            /* 
                Estos es para formatear la fecha pero no la esta acomodando recheck
            'K' => NumberFormat::FORMAT_DATE_DDMMYYYY, */
        ];
    }
}
