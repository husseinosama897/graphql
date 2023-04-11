<?php 

namespace App\GraphQL\Types;

use App\Models\book;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;


class BooksType extends GraphQLType
{

    protected $attributes = [
        'name'          => 'book',
        'description'   => 'A book',
        // Note: only necessary if you use `SelectFields`
        'model'         => book::class,
    ];

    public function fields(): array
    {
    return [

        'id' => [
            'type' => Type::int(),
       
        ],

        'user_id' => [
            'type' => Type::int(),
       
        ],
        'name' => [
            'type' => Type::string(),

        ],

        'name'=>[
'type'=>Type::string()
        ]
        ];
        }

}


?>