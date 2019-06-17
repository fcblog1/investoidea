<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Project;
use Illuminate\Support\Facades\DB;

class ValidAmount implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $projects = Project::all()->first();
        if($projects->min_amt <= $value){
          return true;
        }
        else{
          return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Minimun Investment Amount is 100';
    }
}
