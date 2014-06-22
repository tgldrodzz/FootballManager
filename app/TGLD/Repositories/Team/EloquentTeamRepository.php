<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 6/20/2014
 * Time: 5:09 PM
 */

namespace TGLD\Repositories\Team;

use Arena;


class EloquentTeamRepository implements TeamRepositoryInterface
{

    public function getArena($user)
    {
        $arena_id = $user->team->team_arena;
        return Arena::where('id', '=', $arena_id)->first();
    }
} 