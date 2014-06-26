<?php   namespace TGLD\Repositories\Club;

use Arena;
use Player;

/**
 * Class EloquentMemberRepository
 * @package TGLD\Repositories\Member
 */
class EloquentClubRepository implements ClubRepositoryInterface
{
    /**
     * @param $arena_id
     * @param $model
     * @return mixed
     */
    public function byId($arena_id, $model)
    {
        return $model::find($arena_id);
    }

    /**
     * @param $user_id
     * @param $model
     * @return mixed
     */
    public function byUserId($user_id, $model)
    {
        return $model::where('user_id', '=', $user_id)->get();
    }
} 