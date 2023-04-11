<?php 

namespace App\GraphQL\Types;

use App\Models\User;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;


class UserType extends GraphQLType
{

    protected $attributes = [
        'name'          => 'User',
        'description'   => 'A user',
        // Note: only necessary if you use `SelectFields`
        'model'         => User::class,
    ];

    public function fields(): array
    {
    return [
        'id' => [
            'type' => Type::int(),
       
        ],
        'email' => [
            'type' => Type::string(),

        ],

        'name'=>[
'type'=>Type::string()
        ],

   'book'=>[

   'type'=> Type::listOf(GraphQL::type('book')),

   ],
        ];

        }

}


?>