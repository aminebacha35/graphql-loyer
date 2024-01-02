<?php declare(strict_types=1);

namespace App\GraphQL\Interfaces;

use App\GraphQL\Types\ProprietaireType;
use App\GraphQL\Types\LocataireType;
use GraphQL\Type\Definition\Type;
use Nuwave\Lighthouse\Execution\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

final class Personne
{
    public function __construct()
    {
        // Vous pouvez injecter d'autres dépendances ici si nécessaire
    }

    /**
     * Decide which GraphQL type a resolved value has.
     *
     * @param  mixed  $root The value that was resolved by the field. Usually an Eloquent model.
     */
    public function __invoke($root, GraphQLContext $context, ResolveInfo $resolveInfo): Type
    {
        // Ajoutez votre logique de résolution ici
        if ($root instanceof \App\Models\Proprietaire) {
            return $this->typeRegistry->get(ProprietaireType::class);
        } elseif ($root instanceof \App\Models\Locataire) {
            return $this->typeRegistry->get(LocataireType::class);
        }

        // Si le type n'est pas reconnu, vous pouvez retourner un type par défaut
        return $this->typeRegistry->get(\App\GraphQL\Types\PersonneType::class);
    }
}
