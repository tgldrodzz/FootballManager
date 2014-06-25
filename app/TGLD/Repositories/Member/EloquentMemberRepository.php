<?php   namespace TGLD\Repositories\Member;

use User;

/**
 * Class EloquentMemberRepository
 * @package TGLD\Repositories\Member
 */
class EloquentMemberRepository implements MemberRepositoryInterface
{
    /**
     * @param $username
     * @return \Illuminate\Database\Eloquent\Model|null|static
     */
    public function byUsername($username)
    {
        return User::where('username', '=', $username)->first();
    }

    /**
     * @param $username
     * @return \Illuminate\Database\Eloquent\Model|null|static
     */
    public function byUsernameWithTeam($username)
    {
        return User::with('team')->where('username', '=', $username)->first();
    }
} 