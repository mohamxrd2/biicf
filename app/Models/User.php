<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'prenom_user',
        'username',
        'actor_type',
        'gender',
        'age',
        'social_status',
        'company_size',
        'service_type',
        'organization_type',
        'second_organization_type',
        'communication_type',
        'mena_type',
        'mena_status',
        'sector',
        'industry',
        'construction',
        'commerce',
        'services',
        'country',
        'phone',
        'local_area',
        'address',
        'active_zone',
        'photo',
        'admin_id',
    ];

    public function Admin()
    {
        return $this->belongsTo(Admin::class);
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
