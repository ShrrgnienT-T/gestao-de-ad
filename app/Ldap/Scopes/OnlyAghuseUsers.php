<?php

namespace App\Ldap\Scopes;

use LdapRecord\Models\Model;
use LdapRecord\Models\Scope;
use LdapRecord\Query\Model\Builder;

class OnlyAghuseUsers implements Scope
{
    /**
     * Apply the scope to the given query.
     *
     * @param Builder $query
     * @param Model   $model
     *
     * @return void
     */
    public function apply(Builder $query, Model $model): void
    {

        $dn = 'OU=AGHUSE,OU=HOSPITAIS,DC=aghuse,DC=int';

        // You can also make this "environment aware" if needed:
        // $dn = env('LDAP_USER_SCOPE');

        $query->in($dn);
    }
}
