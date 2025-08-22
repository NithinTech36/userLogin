<?php

namespace App\Services;
use App\Repositories\User\UserRespositoryInterface;
use App\Actions\SaveUserAction;
use App\Mapper\UserMapper;
use App\Events\UserInvite;


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
        $userDto->setToken(uniqid());

        $userDtoResponse = $this->userMapper
             ->mapModelToDto((new SaveUserAction($this->userRepository))
             ->execute($userDto->convertDtoToArray()));
         //dispatch event
         event(new UserInvite($userDto));
        return $this->userMapper->mapDtoToResponseData($userDtoResponse);
    }
    public function getUserByToken($token)
    {
        $user = $this->userRepository->getUserByToken($token);
        if ($user) {
            return $this->userMapper->mapModelToDto($user);
        }
        return null;
    }   
}
