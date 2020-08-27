<?php

namespace App\Repositories\Joins;

use App\Repositories\Joins\JoinsRepositoryInterface;
use App\Models\Joins;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class JoinsRepository implements JoinsRepositoryInterface
{
    public function __construct(Joins $joins)
    {
        $this->joins = $joins;
    }

    /**
     * 参加承認済件数の取得
     * 
     * @return $result
     */
    public function getJoinsCount($meeting_id)
    {
        Log::debug("START");
        $result = $this->joins->where('meeting_id', '=', $meeting_id)->where('approval', '=', 1)->count();
        Log::debug("END");
        return $result;
    }

    /**
     * 参加申込処理
     * 
     * @return $result
     */
    public function meetJoinRequest($meeting_id)
    {
        Log::debug("START");
        $id = Auth::id();
        $check = $this->joins->where('user_id', '=', $id)->where('meeting_id', '=', $meeting_id)->exists();
        if ($check) {
            Log::debug("END");
            return '申請に失敗しました。この勉強会は既に申請済です。';
        } else {
            $this->joins->create([
                'user_id' => $id,
                'meeting_id' => $meeting_id,
                'approval' => 0,
            ]);
            Log::debug("END");
            return '申請が完了しました。';
        }
    }
}