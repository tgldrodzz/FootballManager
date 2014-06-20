<?php

namespace TGLD\FacadeServices\Member;

use TGLD\Repositories\Member\MemberRepositoryInterface;
use User;

class MemberService
{
    /**
     * @var \TGLD\Repositories\Member\MemberRepositoryInterface
     */
    protected $memberRepo;

    /**
     * @param MemberRepositoryInterface $memberRepo
     */
    public function __construct(MemberRepositoryInterface $memberRepo)
    {
        $this->memberRepo = $memberRepo;
    }

    /**
     * @param $input
     * @return \Illuminate\Database\Eloquent\Model|static
     */
    public function create($input)
    {
        return $this->memberRepo->createUser($input);
    }
} 