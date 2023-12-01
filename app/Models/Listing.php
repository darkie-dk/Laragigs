<?php
    namespace App\Models;

    class Listing {
        public static function all() {
            return [
                    [
                        'id' => 1,
                        'title' => 'listing one',
                        'description' => 'The classic multiplayer roguelike, Risk of Rain, returns with an extra dimension and more challenging action. No run will ever be the same with randomized stages, enemies, bosses, and items. Play solo, or team up with up to four friends to fight your way through hordes of monsters, unlock new loot, and find a way to escape the planet.', 
                    ],
                    [
                        'id' => 2,
                        'title' => 'listing two',
                        'description' => 'The classic multiplayer roguelike, Risk of Rain, returns with an extra dimension and more challenging action. No run will ever be the same with randomized stages, enemies, bosses, and items. Play solo, or team up with up to four friends to fight your way through hordes of monsters, unlock new loot, and find a way to escape the planet.', 
                    ],
                    [
                        'id' => 3,
                        'title' => 'listing three',
                        'description' => 'The classic multiplayer roguelike, Risk of Rain, returns with an extra dimension and more challenging action. No run will ever be the same with randomized stages, enemies, bosses, and items. Play solo, or team up with up to four friends to fight your way through hordes of monsters, unlock new loot, and find a way to escape the planet.', 
                    ]
                    ];
        }

        public static function find($id) {
            $listings = self::all();
            foreach($listings as $listing) {
                if($listing['id'] == $id) {
                    return $listing;
                }
            };

        }
    };