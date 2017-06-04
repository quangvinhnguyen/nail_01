<?php

namespace App\Http\Controllers\User;

use App\Repositories\User\UserRepositoryInterface;
use Auth;

class UserController extends BaseController
{
    public function __construct(UserRepositoryInterface $userRepository)
    {
        parent::__construct($userRepository);
    }

    public function index()
    {
        dd('ts day');
    }

    public function active($email, $token_confirm)
    {
        if (func_num_args() != 2) {
            return redirect()->action('User\ProductController@index');
        }

        $user = $this->repository
            ->where('email', $email)
            // ->where('token_confirm', '<>', null)
            ->get();

        if (!$user || empty($user)) {
            return false;
        }

        $this->repository->singleUpdate($user->first()->id, ['token_confirm' => null]);
        $input = [
            'email' => $user->first()->email,
            'password' => $user->first()->password,
        ];
        
        Auth::login($input);

        return redirect()->intended(action($user->level == 1 ? 'Admin\BaseController@index' : 'User\ProductController@index'));
    }
}
