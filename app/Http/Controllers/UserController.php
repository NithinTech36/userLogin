<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Requests\InviteRequest;
use App\DTO\ResponseDto;


class UserController extends Controller
{
    protected $userService;
  

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
   
    }

    public function inviteUser(InviteRequest $request)
    {
        if($request->validated()) {

            $responseData = $this->userService->inviteUser($request->all());
            return response()->json((new ResponseDto('User invited successfully',$responseData))->SendResponse(), 200);
        }
    }
}
