<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 6/25/2014
 * Time: 11:47 AM
 */

namespace TGLD\Member;


use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use TGLD\Repositories\Member\MemberRepositoryInterface;

/**
 * Class MemberService
 * @package TGLD\Member
 */
class MemberService
{
    /**
     * @var \TGLD\Repositories\Member\MemberRepositoryInterface
     */
    protected $member;

    /**
     * @param MemberRepositoryInterface $member
     */
    public function __construct(MemberRepositoryInterface $member)
    {
        $this->member = $member;
    }

    /**
     * @param $username
     * @return mixed
     */
    public function getAllByUsername($username)
    {
        $user = $this->member->byUsernameWithTeam($username);

        if(! $user)
        {
            throw new UsernameNotFoundException;
        }

        return $user;
    }

    public function getUserIdByUsername($username)
    {
        $user = $this->member->byUsername($username);

        if(! $user)
        {
            throw new UsernameNotFoundException;
        }

        $user_id = $user->id;

        return $user_id;
    }
} 