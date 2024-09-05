<?php

namespace App\Services;

interface AuthProviderInterface
{
    public function redirectToProvider();
    public function handleProviderCallback();
}
