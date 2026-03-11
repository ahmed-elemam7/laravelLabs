<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            [
                'id' =>1,
                'title' => 'first post',
                'description' => 'some description',
                'created_at' => '2026-03-11 10:00:00',
                'creator' => [
                    'name' => 'Ahmed',
                    'email' => 'ahmed@gmail.com',
                    'created_at' => '2024-09-01 08:00:00'
                ]
            ],
            [
                'id' =>2,
                'title' => 'second post',
                'description' => 'some description 2',
                'created_at' => '2026-03-11 10:00:00',
                'creator' => [
                    'name' => 'Mohamed',
                    'email' => 'mohamed@gmail.com',
                    'created_at' => '2024-09-01 08:00:00'
                ]
                ],
                [
                    'id' =>3,
                    'title' => 'third post',
                    'description' => 'some description 2',
                    'created_at' => '2026-03-11 10:00:00',
                    'creator' => [
                        'name' => 'Ali',
                        'email' => 'Ali@gmail.com',
                        'created_at' => '2024-09-01 08:00:00'
                    ]
                ]
        ];
    
        return view('posts.index',[
            'posts' => $posts,
        ]);
    }

    public function show($id)
    {
        $posts = [
        1 => [
            'title' => 'first post',
            'description' => 'some description 1',
            'created_at' => '2026-03-11 10:00:00',
            'creator' => [
                'name' => 'Ahmed',
                'email' => 'ahmed@gmail.com',
                'created_at' => '2024-09-01 08:00:00'
            ]
        ],
        2 => [
            'title' => 'second post',
            'description' => 'some description 2',
            'created_at' => '2026-03-12 11:00:00',
            'creator' => [
                'name' => 'Ali',
                'email' => 'ali@gmail.com',
                'created_at' => '2024-08-15 09:30:00'
            ]
        ],
        3 => [
            'title' => 'third post',
            'description' => 'some description 3',
            'created_at' => '2026-03-13 12:00:00',
            'creator' => [
                'name' => 'Sara',
                'email' => 'sara@gmail.com',
                'created_at' => '2024-09-01 08:00:00'
            ]
        ]
    ];
    
    $innerPost= $posts[$id] ?? null;

    if(!$innerPost){
        abort(404);
    }   
    
        return view('posts.show',[
            'post' => $innerPost
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        return to_route('posts.index');
    }

    public function edit($id){
        $posts = [
            1 => [
                'id' => 1,
                'title' => 'first post',
                'description' => 'some description 1',
                'creator_id' => 1,
            ],
            2 => [
                'id' => 2,
                'title' => 'second post',
                'description' => 'some description 2',
                'creator_id' => 2,
            ],
            3 => [
                'id' => 3,
                'title' => 'third post',
                'description' => 'some description 3',
                'creator_id' => 3,
            ],
        ];
        $creators = [
            1 => 'Ahmed',
            2 => 'Ali',
            3 => 'Sara',
        ];

        $post = $posts[$id] ?? null;

        if (!$post) {
            abort(404);
        }

        return view('posts.edit', [
            'post' => $post,
            'creators' => $creators 
        ]);
    }
    public function update($id){
        return to_route('posts.index');
    }

    public function destroy($id){
        return to_route('posts.index');
    }
}
