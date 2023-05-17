<?php
namespace App\Traits;

use App\Models\Audit;
use Illuminate\Support\Facades\Auth;

Trait AuditTrait
{
    public function logChanges($log, $action)
    {
        $user = Auth::user();

        $audit = new Audit;
        $audit->log = $log;
        $audit->action = $action;
        $audit->user_id = $user->id;
        $audit->save();
    }
}

?>