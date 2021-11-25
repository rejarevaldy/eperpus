<?php

namespace App\Models;

use App\Models\Loan;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use OwenIt\Auditing\Contracts\Auditable;

class User extends Authenticatable  implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    protected $guarded = [
        'id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $jurusan =  ['MM', 'RPL', 'DI', 'PS', 'KI', 'ANMS'];
    protected $kelas = [10, 11, 12];
    protected $gender = ['Pria', 'Wanita'];
    protected $agama = ['Islam', 'Kristen', 'Buddha', 'Hindu'];
    
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
}