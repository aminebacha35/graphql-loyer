<?php

namespace App\GraphQL\Queries;

use App\Models\Immeuble;

class ImmeubleQuery
{
    public function __invoke($root, $args)
    {
        if (isset($args['id'])) {
            return Immeuble::find($args['id']);        }
    }
}
