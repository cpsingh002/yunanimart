<?php
 
namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\EXcel\Concerns\SkipOnError;
use Maatwebsite\EXcel\Concerns\WithValidation;
use Maatwebsite\EXcel\Concerns\SkipsOnFailure;
use Throwable;
class UserImport implements ToModel, WithHeadningRow, SkipsOnError, 
    WithValidation,SkipsOnFailure
{
    use Importable, SkipsErrors, SkipsFailures;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'name' => $row['name'],
            'email' => $row['email'],
            'password' => Hash::make('poassword'),
            'phone' => '7877380735'
        ]);
    }

    // public function onError(Throwable $error)
    // {
 
    // }

    public function rules(): array
    {
        return [
            '*.email' =>['email','unique:users,email']
        ];
    }
     public function onFailure(Failure  ...$failure)
     {

     }
}
