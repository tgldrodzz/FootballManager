<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 6/25/2014
 * Time: 11:51 AM
 */

namespace TGLD\Repositories\Member;

/**
 * Interface MemberRepositoryInterface
 * @package TGLD\Repositories\Member
 */
interface MemberRepositoryInterface
{
    /**
     * @param $username
     * @return mixed
     */
    public function byUsername($username);

    public function byUsernameWithTeam($username);
} 