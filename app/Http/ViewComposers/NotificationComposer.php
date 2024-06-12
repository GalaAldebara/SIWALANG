<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\NotifModel;
use Illuminate\Support\Facades\Auth;

class NotificationComposer
{
    public function compose(View $view)
    {
        $userId = Auth::id();
        $notificationCount = $userId ? NotifModel::where('user_id', $userId)->where('status_lihat', 'belum')->count() : 0;

        $view->with('notificationCount', $notificationCount);
    }
}
