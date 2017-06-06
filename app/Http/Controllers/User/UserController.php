<?php

namespace App\Http\Controllers\User;

use App\Repositories\User\UserRepositoryInterface;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;
use Exception;
use Log;


class UserController extends BaseController
{
    // use AuthenticatesUsers;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        parent::__construct($userRepository);
    }

    public function index()
    {
        dd('ts day');
    }

    public function active(Request $request, $email, $token_confirm)
    {
        \DB::beginTransaction();
        try {
            $input = $this->repository->active($email, $token_confirm);

            if (!$input) {
                throw new Exception('Can not active account');
            }
            dd($input, Auth::attempt(['email' => $input['email'], 'password' => decrypt($input['password']), 'token_confirm' => null]));
            dd(Auth::attempt(['email' => $input['email'], 'token_confirm' => null]));
            if (Auth::attempt(['email' => $input['email'], 'token_confirm' => null])) {
                \DB::commit();

                return redirect()->intended(action($input['level'] == 1 ? 'Admin\BaseController@index' : 'User\ProductController@index'));
            } else {
                throw new Exception('Can not login after active account');
            }
        } catch(Exception $e) {
            \DB::rollback();
            dd($e);
            Log::error($e);
        }

        return redirect()->action('User\ProductController@index');
    }
}
