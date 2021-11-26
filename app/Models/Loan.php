<?php

namespace App\Models;

use App\Models\Book;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Loan extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'tanggal_tenggat',
        'user_id',
        'book_id',
        'status',
    ];

    protected $dates = ['created_at', 'tanggal_tenggat', 'tanggal_dikembalikan', 'updated_at'];

    protected $guarded = [
        'id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
