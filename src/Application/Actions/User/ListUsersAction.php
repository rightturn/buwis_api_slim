<?php
declare(strict_types=1);

namespace App\Application\Actions\User;
use Illuminate\Database\Capsule\Manager as DB;

use Psr\Http\Message\ResponseInterface as Response;

class ListUsersAction extends UserAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        return $this->respondWithData(DB::table('users')->get());
        $users = $this->userRepository->findAll();

        $this->logger->info("Users list was viewed.");

        return $this->respondWithData($users);
    }
}
