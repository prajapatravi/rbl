<?php
namespace App\Imports;

use App\Agency;
use App\Model\Region;
use App\Model\State;
use App\Model\City;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AgencyImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // Ensure that the 'agencyname' field is present
        if (!isset($row['agencyname']) || empty($row['agencyname'])) {
            // Skip this row or handle it as per your requirements
            return null;
        }
    
        // Check for region, state, and city from respective tables
        $region = Region::where('name', $row['region'])->first();
        $state = State::where('name', $row['state'])->first();
        $city = City::where('name', $row['city'])->first();
        return new Agency([
            'name' => $row['agencyname'], // Now it's guaranteed not to be null
            'email' => isset($row['email']) ? $row['email'] : null,
            'mobile_number' => isset($row['mobilenumber']) ? $row['mobilenumber'] : null,
            'region_id' => optional($region)->id, // Will be null if not found
            'state' => optional($state)->id,      // Will be null if not found
            'city_id' =>  optional($city)->id,      // Will be null if not found
            'agency_id' => isset($row['code']) ? $row['code'] : null,
            'agency_manager' => isset($row['agency_manager']) ? $row['agency_manager'] : null,
            'location' => isset($row['location']) ? $row['location'] : null,
            'address' => isset($row['address']) ? $row['address'] : null,
            'agency_phone' => isset($row['mobilenumber']) ? $row['mobilenumber'] : null,
        ]);
    }
}
