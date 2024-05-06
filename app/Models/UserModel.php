<?php

namespace App\Models;

use App\Models\LevelModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Casts\Attribute;



// class UserModel extends Model
// {
//     use HasFactory;

//     protected $table = 'm_user';
//     protected $primaryKey = 'user_id';

//     protected $fillable = ['level_id', 'username', 'nama', 'password'];

//     public function level(): BelongsTo
//     {
//         return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
//     }
// }

// class UserModel extends Authenticatable
// {
//     use HasFactory;
//     protected $table = 'm_user';

//     protected $primaryKey = 'user_id';
//     protected $fillable = ['level_id', 'username', 'nama', 'password'];
//     public function level(): BelongsTo
//     {
//         return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
//     }
// }

// class UserModel extends Authenticatable implements JWTSubject
// {
//     public function getJWTIdentifier()
//     {
//         return $this->getKey();
//     }

//     public function getJWTCustomClaims()
//     {
//         return [];
//     }

//     public function level(): BelongsTo
//     {
//         return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
//     }

//     protected $table = 'm_user';
//     protected $primaryKey = 'user_id';
//     protected $guarded = [];
// }

class UserModel extends Authenticatable implements JWTSubject
{

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    protected $table = 'm_user';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'username', 'nama', 'password', 'level_id', 'image' //tambahan
    ];

    public function level()
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($image) => url('/storage/posts/' . $image),
        );
    }
}
