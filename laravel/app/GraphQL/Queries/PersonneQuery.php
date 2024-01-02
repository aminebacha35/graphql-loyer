<?php

namespace App\GraphQL\Queries;

use App\Models\Personne;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class PersonneQuery
{
    public function __invoke($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $personnes = Personne::all();

    }
}
