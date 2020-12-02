<?php
declare(strict_types=1);

namespace App\Application\Actions\User;

use App\Application\Actions\Action;
use App\Domain\User\UserRepository;
use Illuminate\Database\Capsule\Manager;
use Psr\Log\LoggerInterface;

abstract class UserAction extends Action
{
    /**
     * @var UserRepository
     */
    protected $userRepository;
    protected $db;

    /**
     * @param LoggerInterface $logger
     * @param UserRepository  $userRepository
     */
    public function __construct(LoggerInterface $logger, UserRepository $userRepository,Manager $db)
    {
        parent::__construct($logger);
        $this->userRepository = $userRepository;
        $this->db = $db;
    }
}
