<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 6/25/2014
 * Time: 11:51 AM
 */

namespace TGLD\Repositories\Club;

/**
 * Interface MemberRepositoryInterface
 * @package TGLD\Repositories\Member
 */
interface ClubRepositoryInterface
{
    /**
     * @param $arena_id
     * @param $model
     * @return mixed
     */
    public function byId($arena_id, $model);

    /**
     * @param $user_id
     * @param $model
     * @return mixed
     */
    public function byUserId($user_id, $model);
} 