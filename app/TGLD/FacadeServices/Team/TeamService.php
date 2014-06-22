<?php

namespace TGLD\FacadeServices\Team;

use TGLD\Repositories\Team\TeamRepositoryInterface;

class TeamService
{
    /**
     * @var \TGLD\Repositories\Team\TeamRepositoryInterface
     */
    protected $teamRepo;

    /**
     * @param TeamRepositoryInterface $teamRepo
     */
    public function __construct(TeamRepositoryInterface $teamRepo)
    {
        $this->teamRepo = $teamRepo;
    }

   public function getArenaData($user)
   {
       return $this->teamRepo->getArena($user);
   }
} 