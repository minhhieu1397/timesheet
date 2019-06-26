<?php

namespace App\Http\Validation;
use Illuminate\Contracts\Validation\Rule;

class ValidationName implements Rule
{

	public function passes($attribute, $value)
	{
		return false;
	}

	public function messenge()
	{
		return 'false';
	}
}
