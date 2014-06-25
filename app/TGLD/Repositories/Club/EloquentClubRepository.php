<?php   namespace TGLD\Repositories\Club;

use Arena;

/**
 * Class EloquentMemberRepository
 * @package TGLD\Repositories\Member
 */
class EloquentClubRepository implements ClubRepositoryInterface
{
    public function byId($arena_id)
    {
        return Arena::find($arena_id);
    }
} 