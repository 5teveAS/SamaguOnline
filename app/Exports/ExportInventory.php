<?php

namespace App\Exports;


use App\Models\Inventory;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExportInventory implements FromCollection, WithTitle, WithHeadings, WithStyles, ShouldAutoSize, WithEvents, WithColumnFormatting
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Inventory::select('product_name','type','description','quantity','cost')->get();
    }

    public function title(): string{
        return 'Inventario';
    }
    public function headings(): array{
        return ['Nombre del producto','Tipo','Descripción','Precio unitario','Cantidad'];
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
            'D' =>'"₡ "#,##0.00_-'
        ];
    }
}
