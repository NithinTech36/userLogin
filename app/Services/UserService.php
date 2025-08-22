<?php

namespace App\Services;
use App\Repositories\User\UserRespositoryInterface;
use App\DTO\UserDto;
use App\Actions\SaveUserAction;
use App\Mapper\UserMapper;


class UserService
{
    /**
     * Create a new class instance.
     */
    protected $userRepository;
    protected $userMapper;

    public function __construct(UserRespositoryInterface $userRepository, UserMapper $userMapper)
    {
        $this->userRepository = $userRepository;
        $this->userMapper = $userMapper;
    }
    public function inviteUser($data)
    {
        $userDto = $this->userMapper->mapRequestToDto($data);

        $userDto = $this->userMapper
             ->mapModelToDto((new SaveUserAction($this->userRepository))
             ->execute($userDto->convertDtoToArray()));
        return $this->userMapper->mapDtoToResponseData($userDto);
    }
}
