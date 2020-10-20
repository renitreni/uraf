<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;

class TabangExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return DB::table('tbl_tabang')->get();
    }

    public function headings(): array
    {
        return [
            "first_name",
            "middle_name",
            "last_name",
            "gender",
            "occupation",
            "passport",
            "iqama",
            "email_address",
            "contact_number",
            "contact_number2",
            "location_ksa",
            "employer_name",
            "employer_contact",
            "saudi_agency",
            "agency",
            "complain",
            "actual_langitude",
            "actual_longitude",
            "image1",
            "image2",
            "image3",
            "date_created",
        ];
    }
}
