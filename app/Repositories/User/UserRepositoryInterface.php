<?php

namespace App\Repositories\User;

interface UserRepositoryInterface
{
    public function create($data = []);

    public function active($email, $token_confirm);
}
