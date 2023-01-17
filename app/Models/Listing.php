<?php
    namespace App\Models;

    class Listing {
        public static function all() {
            return [
                [
                    'id' => 1,
                    'title' => 'Listing One',
                    'desc' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima enim ullam officia praesentium. Architecto maiores temporibus ex? Tenetur neque quae numquam, vel nihil placeat labore excepturi dolores doloribus nobis officiis.' 
                ],
                [
                    'id' => 2,
                    'title' => 'Listing Two',
                    'desc' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima enim ullam officia praesentium. Architecto maiores temporibus ex? Tenetur neque quae numquam, vel nihil placeat labore excepturi dolores doloribus nobis officiis.' 
                ]
            ];
        }
        public static function getList($id) {
            $listings = self::all();
             
            foreach ($listings as $listing) {
                if($listing['id'] == $id) {
                    return $listing;
                }
            }
        }
    }