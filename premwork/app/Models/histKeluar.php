<?php
namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class history extends Model
{

    public function historykeluarIndo()
    {
        return Carbon::parse($this->attributes['keluar_waktu'])
            ->locale('id')
            ->isoFormat('dddd, D MMMM YYYY');
    }
}
