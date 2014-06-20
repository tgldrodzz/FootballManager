<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 6/20/2014
 * Time: 5:09 PM
 */

namespace TGLD\Repositories\Member;
use User;

class EloquentMemberRepository implements MemberRepositoryInterface
{
    public function createUser($input)
    {
        return User::create($input);
    }
} 