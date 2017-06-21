<?php

namespace App\Http\Controllers\User;

use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\Request;
use Auth;
use DB;
use Log;

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

    public function active(Request $request, $email, $token_confirm)
    {
        DB::beginTransaction();
        try {
            $input = $this->repository->active($email, $token_confirm);

            if (!$input) {
                throw new Exception('Can not active account');
            }

            if (Auth::attempt(['email' => $input['email'], 'password' =>  $input['password'], 'token_confirm' => null])) {
                DB::commit();

                return redirect()->intended(action($input['level'] == config('users.level.admin')
                    ? 'Admin\BaseController@index'
                    : 'User\ProductController@index'));
            }

            throw new Exception('Can not login after active account');
        } catch(Exception $e) {
            DB::rollback();
            Log::error($e);

            return redirect()->action('User\ProductController@index');
        }
    }
}
