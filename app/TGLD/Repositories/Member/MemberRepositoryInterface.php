<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 6/20/2014
 * Time: 5:10 PM
 */

namespace TGLD\Repositories\Member;


interface MemberRepositoryInterface
{
    public function createUser($input);

    public function getAllUserData($username);
} 