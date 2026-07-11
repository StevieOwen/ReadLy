<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Genre;
use App\Models\Library;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     *
     * @throws ValidationException
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'genre' => ['nullable', 'array'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        $user_id="cust_". random_int(100000,999999);

        $user =User::create([
            'user_id'=>$user_id,
            'firstName' => $input['firstName'],
            'lastName' => $input['lastName'],
            
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        if (!empty($input['genre'])) {
            $user->genres()->sync($input['genre']); 
        }
        return $user;
    }
}
