<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\BaseRepository;
use App\Jobs\SendEmail;
use Exception;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function model()
    {
        return User::class;
    }

    public function create($data = [])
    {
        $user = parent::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'token_confirm' => $data['email'],
            'level' => 1, // 0 is user 1 is admin => config later
        ]);

        if ($user) {
            $path = 'emails.email_active_account';
            $info = [
                'emails' => $user->email,
                'subject' => 'Confirm to register account',
            ];

            $fields = [
                'name' => $user->name,
                'link' => action('User\UserController@active', [
                    'email' => $user->email, 
                    'token_confirm' => $user->token_confirm,
                ]),
                'content' => $user->name . ', Please confirm to active your account. Thank you so much!!!',
            ];

            $job = (new SendEmail($path, $info, $fields))->onConnection('database')->onQueue('emails');
            dispatch($job);
        } else {
            throw new Exception();
        }

        return true;
    }

    public function active($email, $token_confirm)
    {
        if (func_num_args() != 2) {
            return redirect()->action('User\ProductController@index');
        }
        
        $user = $this->where([
                'email' => $email,
                'token_confirm' => $token_confirm,
            ])
            ->where('token_confirm', '<>', null)
            ->get();

        if (!$user || empty($user)) {
            return false;
        }
        
        $this->singleUpdate($user->first()->id, ['token_confirm' => null]);

        return [
            'email' => $user->first()->email,
            'password' => $user->first()->password,
            'level' => $user->first()->level,
        ];
    }
}
