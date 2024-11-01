<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use LdapRecord\Laravel\Auth\LdapAuthenticatable;

class User extends Authenticatable implements LdapAuthenticatable
{
    /** @use HasFactory<\Database\Factor    ies\UserFactory> */
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
    ];

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
    function getLdapDomain(): string|null
    {
        return $this->ldapDomain;
    }
function getLdapDomainColumn(): string
{
    return 'domain';
}
function getLdapGuid(): string|null
{
    return $this->ldapGuid;
}
function getLdapGuidColumn(): string
{
    return 'guid';
}
function setLdapDomain(string|null $domain): void
{
    $this->ldapDomain = $domain;
}
function setLdapGuid(string|null $domain): void
{
    $this->ldapGuid = $domain;
}


}
