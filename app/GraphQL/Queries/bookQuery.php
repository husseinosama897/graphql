<?php

namespace App\GraphQL\Queries;

use Closure;
use App\Models\book;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;

class bookQuery extends Query
{
    protected $attributes = [
        'name' => 'book',
    ];

    public function type(): Type
    {
        return Type::nonNull(Type::listOf(Type::nonNull(GraphQL::type('book'))));
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id', 
                'type' => Type::string(),
            ],
            'name' => [
                'name' => 'name', 
                'type' => Type::string(),
                
            ],
            'user_id' => [
                'name' => 'user_id', 
                'type' => Type::int(),
                
            ]
        ];
    }


    public function resolve($root, array $args )
    {
        if (isset($args['id'])) {
            return User::where('id' , $args['id'])->get();
        }

        if (isset($args['email'])) {
            return User::where('email', $args['email'])->get();
        }

      return  book::get();


    }
    
}

    ?>