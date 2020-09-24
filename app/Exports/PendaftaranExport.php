<?php

namespace App\Exports;

use App\Pendaftaran;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PendaftaranExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    
    public function collection()
    {
        $pendaftaran = Pendaftaran::select('id', 'nama', 'nim', 'fakultas', 'jurusan', 'minat', 'divisi', 'whatsapp', 'instagram', 'email', 'created_at')->get();
        return $pendaftaran;
    }

    public function headings(): array
    {
        return [
            '#',
            'Nama',
            'NIM',
            'Fakultas',
            'Jurusan',
            'Minat',
            'Divisi',
            'Whatsapp',
            'Instagram',
            'Email',
            'Tanggal Daftar',
        ];
    }    
}
