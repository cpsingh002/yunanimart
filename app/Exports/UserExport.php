<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\Support\Resposable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\Withheadings;
use Maatwebsite\Excel\Concerns\WithEvents;


class UserExport implements FromCollection, ShouldAutoSize,WithMapping, WithHeadings, WithEvents
{
    use Exportable;
    private $fileName = "users.xlsx";
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
    }
    public function map($user): array 
    {
        return [
            $user->id,
            $user->email,
            $user->created_at,
        ];
    }
    public function heading() : array
    { 
        return [
            '#',
            'Email',
            'Ceared at',
        ] ;

    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getStyle('A1:C1')->applyFromArray([
                    'font' => [
                        'bold' => true
                    ],
                ]);
            } 
        ];

    }
}
