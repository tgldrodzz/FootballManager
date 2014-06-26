<?php   namespace TGLD\Club;
use TGLD\Repositories\Club\ClubRepositoryInterface;


/**
 * Class MemberService
 * @package TGLD\Member
 */
class ClubService
{
    /**
     * @var \TGLD\Repositories\Club\ClubRepositoryInterface
     */
    protected $club;

    /**
     * @param ClubRepositoryInterface $club
     */
    public function __construct(ClubRepositoryInterface $club)
    {
        $this->club = $club;
    }

    /**
     * @param $user
     * @return mixed
     */
    public function getArenaByUser($user)
    {
        $arena_id = $user->team->team_arena;

        return $this->club->byId($arena_id, 'Arena');
    }

    public function getAllPlayersByUserId($user_id)
    {
        return $this->club->byUserId($user_id, 'Player');
    }
} 