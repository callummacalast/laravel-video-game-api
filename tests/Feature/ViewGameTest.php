<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Http;


class ViewGameTest extends TestCase
{
    /** @test */
   public function the_game_test_shows_correct_game_info()
   {

        Http::fake([
            '' => $this->fakeSingleGame(),
        ]);
        $response = $this->get(route('games.show', 'my-older-sister-left-the-computer-so-i-got-on-and-found-myself-trying-to-coordinate-a-raid-in-a-game-and-i-dont-play-mmos'));

        $response->assertSuccessful();
       }

    private function fakeSingleGame()
    {
        return Http::response([
            0 =>  [
              "id" => 146394,
              "category" => 0,
              "cover" =>  [
                "id" => 138362,
                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2yre.jpg",
              ],
              "created_at" => 1619564044,
              "external_games" =>  [
                0 => 2003604,
                1 => 2003605,
              ],
              "first_release_date" => 1617235200,
              "game_engines" =>  [
                0 => 305,
              ],
              "genres" =>  [
                0 =>  [
                  "id" => 12,
                  "name" => "Role-playing (RPG)",
                ],
            ],
              "involved_companies" =>  [
                0 =>  [
                  "id" => 127039,
                  "company" =>  [
                    "id" => 27217,
                    "name" => "Cannibal Interactive",
                  ],
                ],
            ],
              "keywords" =>  [
                0 => 413,
                1 => 2710,
                2 => 17865,
                3 => 24592,
              ],
              "name" => "My Older Sister Left The Computer So I Got On & Found Myself Trying To Coordinate A Raid In A Game & I Don't Play MMO's",
              "platforms" =>  [
                0 =>  [
                  "id" => 6,
                  "abbreviation" => "PC",
                ],
            ],
              "player_perspectives" =>  [
                0 => 4,
              ],
              "release_dates" =>  [
                0 => 241492,
              ],
              "screenshots" =>  [
                0 =>  [
                  "id" => 438686,
                  "alpha_channel" => false,
                  "animated" => false,
                  "game" => 146394,
                  "height" => 720,
                  "image_id" => "sc9ehq",
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc9ehq.jpg",
                  "width" => 1280,
                  "checksum" => "67e91410-470f-f3d1-3e1d-f07ba7910cbf",
                ],
                1 =>  [
                  "id" => 438687,
                  "alpha_channel" => false,
                  "animated" => false,
                  "game" => 146394,
                  "height" => 720,
                  "image_id" => "sc9ehr",
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc9ehr.jpg",
                  "width" => 1280,
                  "checksum" => "f15b42ba-175a-d313-185f-dd8881335fe7",
                ],
                2 =>  [
                  "id" => 438688,
                  "alpha_channel" => false,
                  "animated" => false,
                  "game" => 146394,
                  "height" => 720,
                  "image_id" => "sc9ehs",
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc9ehs.jpg",
                  "width" => 1280,
                  "checksum" => "90ca7eff-e7c1-d309-032f-ee3aedaaea66",
                ],
                3 =>  [
                  "id" => 438689,
                  "alpha_channel" => false,
                  "animated" => false,
                  "game" => 146394,
                  "height" => 720,
                  "image_id" => "sc9eht",
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc9eht.jpg",
                  "width" => 1280,
                  "checksum" => "f881f8cf-b374-8def-88df-3ddfde8921be",
                ],
                4 =>  [
                  "id" => 438690,
                  "alpha_channel" => true,
                  "animated" => false,
                  "game" => 146394,
                  "height" => 720,
                  "image_id" => "sc9ehu",
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc9ehu.jpg",
                  "width" => 1280,
                  "checksum" => "1f4e0fb0-d622-eeab-526b-2f191d862f67",
                ],
            ],
              "similar_games" => 0 [
                0 =>  [
                  "id" => 19164,
                  "cover" =>  [
                    "id" => 94287,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co20r3.jpg",
                  ],
                  "name" => "Borderlands 3",
                  "platforms" =>  [
                    0 =>  [
                      "id" => 6,
                      "abbreviation" => "PC",
                    ],
                    1 =>  [
                      "id" => 48,
                      "abbreviation" => "PS4",
                    ],
                    2 =>  [
                      "id" => 49,
                      "abbreviation" => "XONE",
                    ],
                    3 =>  [
                      "id" => 167,
                      "abbreviation" => "PS5",
                    ],
                    4 =>  [
                      "id" => 169,
                      "abbreviation" => "Series X",
                    ],
                    5 =>  [
                      "id" => 170,
                      "abbreviation" => "Stadia",
                    ],
                ],
                  "rating" => 79.503315565335,
                  "slug" => "borderlands-3",
            ],
                1 =>  [
                  "id" => 54775,
                  "cover" =>  [
                    "id" => 75809,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1mht.jpg",
                  ],
                  "name" => "Shadows: Awakening",
                  "platforms" =>  [
                    0 =>  [
                      "id" => 6,
                      "abbreviation" => "PC",
                    ],
                    1 =>  [
                      "id" => 48,
                      "abbreviation" => "PS4",
                    ],
                    2 =>  [
                      "id" => 49,
                      "abbreviation" => "XONE",
                    ],
                ],
                  "rating" => 62.941176470588,
                  "slug" => "shadows-awakening",
            ],
                2 =>  [
                  "id" => 96217,
                  "cover" =>  [
                    "id" => 72919,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1k9j.jpg",
                  ],
                  "name" => "Eternity: The Last Unicorn",
                  "platforms" =>  [
                    0 =>  [
                      "id" => 6,
                      "abbreviation" => "PC",
                    ],
                    1 =>  [
                      "id" => 48,
                      "abbreviation" => "PS4",
                    ],
                    2 =>  [
                      "id" => 49,
                      "abbreviation" => "XONE",
                    ],
                ],
                  "rating" => 60.0,
                  "slug" => "eternity-the-last-unicorn",
            ],
                3 =>  [
                  "id" => 99118,
                  "cover" =>  [
                    "id" => 82223,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1rfz.jpg",
                  ],
                  "name" => "Dragalia Lost",
                  "platforms" =>  [
                    0 =>  [
                      "id" => 34,
                      "abbreviation" => "Android",
                    ]
                    1 =>  [
                      "id" => 39,
                      "abbreviation" => "iOS",
                    ],
                ],
                  "rating" => 89.610275933621,
                  "slug" => "dragalia-lost",
                ]
                4 =>  [
                  "id" => 103303
                  "cover" =>  [
                    "id" => 91145
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1ybt.jpg"
                  ]
                  "name" => "The Elder Scrolls: Blades"
                  "platforms" =>  [
                    0 =>  [
                      "id" => 34
                      "abbreviation" => "Android"
                    ]
                    1 =>  [
                      "id" => 39
                      "abbreviation" => "iOS"
                    ]
                    2 =>  [
                      "id" => 130
                      "abbreviation" => "Switch"
                    ]
                  ]
                  "rating" => 42.570985498896
                  "slug" => "the-elder-scrolls-blades"
                ]
                5 =>  [
                  "id" => 106987
                  "cover" =>  [
                    "id" => 130983
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2t2f.jpg"
                  ]
                  "name" => "Torchlight III"
                  "platforms" =>  [
                    0 =>  [
                      "id" => 6
                      "abbreviation" => "PC"
                    ]
                    1 =>  [
                      "id" => 48
                      "abbreviation" => "PS4"
                    ]
                    2 =>  [
                      "id" => 49
                      "abbreviation" => "XONE"
                    ]
                    3 =>  [
                      "id" => 130
                      "abbreviation" => "Switch"
                    ]
                  ]
                  "rating" => 31.554527784082
                  "slug" => "torchlight-iii"
                ]
                6 =>  [
                  "id" => 112191
                  "cover" =>  [
                    "id" => 82253
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1rgt.jpg"
                  ]
                  "name" => "Epic Seven"
                  "platforms" =>  [
                    0 =>  [
                      "id" => 34
                      "abbreviation" => "Android"
                    ]
                    1 =>  [
                      "id" => 39
                      "abbreviation" => "iOS"
                    ]
                  ]
                  "rating" => 98.967132524696
                  "slug" => "epic-seven"
                ]
                7 =>  [
                  "id" => 113636
                  "cover" =>  [
                    "id" => 82689
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1rsx.jpg"
                  ]
                  "name" => "Rangers of Oblivion"
                  "platforms" =>  [
                    0 =>  [
                      "id" => 34
                      "abbreviation" => "Android"
                    ]
                    1 =>  [
                      "id" => 39
                      "abbreviation" => "iOS"
                    ]
                  ]
                  "slug" => "rangers-of-oblivion"
                ]
                8 =>  [
                  "id" => 113910
                  "cover" =>  [
                    "id" => 70723
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1ikj.jpg"
                  ]
                  "name" => "Forged Fantasy"
                  "platforms" =>  [
                    0 =>  [
                      "id" => 34
                      "abbreviation" => "Android"
                    ]
                    1 =>  [
                      "id" => 39
                      "abbreviation" => "iOS"
                    ]
                  ]
                  "slug" => "forged-fantasy"
                ]
                9 =>  [
                  "id" => 115653
                  "cover" =>  [
                    "id" => 92737
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1zk1.jpg"
                  ]
                  "name" => "Pokémon Shield"
                  "platforms" =>  [
                    0 =>  [
                      "id" => 130
                      "abbreviation" => "Switch"
                    ]
                  ]
                  "rating" => 67.260537414662
                  "slug" => "pokemon-shield"
                ]
              ]
              "slug" => "my-older-sister-left-the-computer-so-i-got-on-and-found-myself-trying-to-coordinate-a-raid-in-a-game-and-i-dont-play-mmos"
              "summary" => ""My Older Sister Left The Computer So I Got On And Found Myself Trying To Coordinate A Raid In A Game And I Don't Play MMO's" is a game where you attempt to coordinate a raid in an MMO and give people orders while not knowing how to actually accomplish that due to inexperience."
              "tags" =>  [
                0 => 17
                1 => 27
                2 => 268435468
                3 => 536871325
                4 => 536873622
                5 => 536888777
                6 => 536895504
              ]
              "themes" =>  [
                0 => 17
                1 => 27
              ]
              "updated_at" => 1619595866
              "url" => "https://www.igdb.com/games/my-older-sister-left-the-computer-so-i-got-on-and-found-myself-trying-to-coordinate-a-raid-in-a-game-and-i-dont-play-mmos"
              "websites" =>  [
                0 =>  [
                  "id" => 179584
                  "category" => 15
                  "game" => 146394
                  "trusted" => true
                  "url" => "https://cannibalinteractive.itch.io/myoldersisterleftthecomputersoigotonfoundmyselftryingtocoordinatearaidinagameido"
                  "checksum" => "8b555152-d1d1-fa7b-be7f-280e312201d1"
                ]
              ]
              "checksum" => "9a73968f-e597-48af-5660-bae12a6446a6"
            ]
          ]
          .                                                                   1 / 1 (100%)
          
          Time: 00:00.918, Memory: 22.00 MB
          
          OK (1 test, 1 assertion)
          ❯  ./vendor/bin/phpunit tests/Feature/ViewGameTest.php
          PHPUnit 9.5.4 by Sebastian Bergmann and contributors.
          
           [
            0 =>  [
              "id" => 146394
              "category" => 0
              "cover" =>  [
                "id" => 138362
                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2yre.jpg"
              ]
              "created_at" => 1619564044
              "external_games" =>  [
                0 => 2003604
                1 => 2003605
              ]
              "first_release_date" => 1617235200
              "game_engines" =>  [
                0 => 305
              ]
              "genres" =>  [
                0 =>  [
                  "id" => 12
                  "name" => "Role-playing (RPG)"
                ]
              ]
              "involved_companies" =>  [
                0 =>  [
                  "id" => 127039
                  "company" =>  [
                    "id" => 27217
                    "name" => "Cannibal Interactive"
                  ]
                ]
              ]
              "keywords" =>  [
                0 => 413
                1 => 2710
                2 => 17865
                3 => 24592
              ]
              "name" => "My Older Sister Left The Computer So I Got On & Found Myself Trying To Coordinate A Raid In A Game & I Don't Play MMO's"
              "platforms" =>  [
                0 =>  [
                  "id" => 6
                  "abbreviation" => "PC"
                ]
              ]
              "player_perspectives" =>  [
                0 => 4
              ]
              "release_dates" =>  [
                0 => 241492
              ]
              "screenshots" =>  [
                0 =>  [
                  "id" => 438686
                  "alpha_channel" => false
                  "animated" => false
                  "game" => 146394
                  "height" => 720
                  "image_id" => "sc9ehq"
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc9ehq.jpg"
                  "width" => 1280
                  "checksum" => "67e91410-470f-f3d1-3e1d-f07ba7910cbf"
                ]
                1 =>  [
                  "id" => 438687
                  "alpha_channel" => false
                  "animated" => false
                  "game" => 146394
                  "height" => 720
                  "image_id" => "sc9ehr"
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc9ehr.jpg"
                  "width" => 1280
                  "checksum" => "f15b42ba-175a-d313-185f-dd8881335fe7"
                ]
                2 =>  [
                  "id" => 438688
                  "alpha_channel" => false
                  "animated" => false
                  "game" => 146394
                  "height" => 720
                  "image_id" => "sc9ehs"
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc9ehs.jpg"
                  "width" => 1280
                  "checksum" => "90ca7eff-e7c1-d309-032f-ee3aedaaea66"
                ]
                3 =>  [
                  "id" => 438689
                  "alpha_channel" => false
                  "animated" => false
                  "game" => 146394
                  "height" => 720
                  "image_id" => "sc9eht"
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc9eht.jpg"
                  "width" => 1280
                  "checksum" => "f881f8cf-b374-8def-88df-3ddfde8921be"
                ]
                4 =>  [
                  "id" => 438690
                  "alpha_channel" => true
                  "animated" => false
                  "game" => 146394
                  "height" => 720
                  "image_id" => "sc9ehu"
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc9ehu.jpg"
                  "width" => 1280
                  "checksum" => "1f4e0fb0-d622-eeab-526b-2f191d862f67"
                ]
              ]
              "similar_games" => 0 [
                0 =>  [
                  "id" => 19164
                  "cover" =>  [
                    "id" => 94287
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co20r3.jpg"
                  ]
                  "name" => "Borderlands 3"
                  "platforms" =>  [
                    0 =>  [
                      "id" => 6
                      "abbreviation" => "PC"
                    ]
                    1 =>  [
                      "id" => 48
                      "abbreviation" => "PS4"
                    ]
                    2 =>  [
                      "id" => 49
                      "abbreviation" => "XONE"
                    ]
                    3 =>  [
                      "id" => 167
                      "abbreviation" => "PS5"
                    ]
                    4 =>  [
                      "id" => 169
                      "abbreviation" => "Series X"
                    ]
                    5 =>  [
                      "id" => 170
                      "abbreviation" => "Stadia"
                    ]
                  ]
                  "rating" => 79.503315565335
                  "slug" => "borderlands-3"
                ]
                1 =>  [
                  "id" => 54775
                  "cover" =>  [
                    "id" => 75809
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1mht.jpg"
                  ]
                  "name" => "Shadows: Awakening"
                  "platforms" =>  [
                    0 =>  [
                      "id" => 6
                      "abbreviation" => "PC"
                    ]
                    1 =>  [
                      "id" => 48
                      "abbreviation" => "PS4"
                    ]
                    2 =>  [
                      "id" => 49
                      "abbreviation" => "XONE"
                    ]
                  ]
                  "rating" => 62.941176470588
                  "slug" => "shadows-awakening"
                ]
                2 =>  [
                  "id" => 96217
                  "cover" =>  [
                    "id" => 72919
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1k9j.jpg"
                  ]
                  "name" => "Eternity: The Last Unicorn"
                  "platforms" =>  [
                    0 =>  [
                      "id" => 6
                      "abbreviation" => "PC"
                    ]
                    1 =>  [
                      "id" => 48
                      "abbreviation" => "PS4"
                    ]
                    2 =>  [
                      "id" => 49
                      "abbreviation" => "XONE"
                    ]
                  ]
                  "rating" => 60.0
                  "slug" => "eternity-the-last-unicorn"
                ]
                3 =>  [
                  "id" => 99118
                  "cover" =>  [
                    "id" => 82223
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1rfz.jpg"
                  ]
                  "name" => "Dragalia Lost"
                  "platforms" =>  [
                    0 =>  [
                      "id" => 34
                      "abbreviation" => "Android"
                    ]
                    1 =>  [
                      "id" => 39
                      "abbreviation" => "iOS"
                    ]
                  ]
                  "rating" => 89.610275933621
                  "slug" => "dragalia-lost"
                ]
                4 =>  [
                  "id" => 103303
                  "cover" =>  [
                    "id" => 91145
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1ybt.jpg"
                  ]
                  "name" => "The Elder Scrolls: Blades"
                  "platforms" =>  [
                    0 =>  [
                      "id" => 34
                      "abbreviation" => "Android"
                    ]
                    1 =>  [
                      "id" => 39
                      "abbreviation" => "iOS"
                    ]
                    2 =>  [
                      "id" => 130
                      "abbreviation" => "Switch"
                    ]
                  ]
                  "rating" => 42.570985498896
                  "slug" => "the-elder-scrolls-blades"
                ]
                5 =>  [
                  "id" => 106987
                  "cover" =>  [
                    "id" => 130983
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2t2f.jpg"
                  ]
                  "name" => "Torchlight III"
                  "platforms" =>  [
                    0 =>  [
                      "id" => 6
                      "abbreviation" => "PC"
                    ]
                    1 =>  [
                      "id" => 48
                      "abbreviation" => "PS4"
                    ]
                    2 =>  [
                      "id" => 49
                      "abbreviation" => "XONE"
                    ]
                    3 =>  [
                      "id" => 130
                      "abbreviation" => "Switch"
                    ]
                  ]
                  "rating" => 31.554527784082
                  "slug" => "torchlight-iii"
                ]
                6 =>  [
                  "id" => 112191
                  "cover" =>  [
                    "id" => 82253
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1rgt.jpg"
                  ]
                  "name" => "Epic Seven"
                  "platforms" =>  [
                    0 =>  [
                      "id" => 34
                      "abbreviation" => "Android"
                    ]
                    1 =>  [
                      "id" => 39
                      "abbreviation" => "iOS"
                    ]
                  ]
                  "rating" => 98.967132524696
                  "slug" => "epic-seven"
                ]
                7 =>  [
                  "id" => 113636
                  "cover" =>  [
                    "id" => 82689
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1rsx.jpg"
                  ]
                  "name" => "Rangers of Oblivion"
                  "platforms" =>  [
                    0 =>  [
                      "id" => 34
                      "abbreviation" => "Android"
                    ]
                    1 =>  [
                      "id" => 39
                      "abbreviation" => "iOS"
                    ]
                  ]
                  "slug" => "rangers-of-oblivion"
                ]
                8 =>  [
                  "id" => 113910
                  "cover" =>  [
                    "id" => 70723
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1ikj.jpg"
                  ]
                  "name" => "Forged Fantasy"
                  "platforms" =>  [
                    0 =>  [
                      "id" => 34
                      "abbreviation" => "Android"
                    ]
                    1 =>  [
                      "id" => 39
                      "abbreviation" => "iOS"
                    ]
                  ]
                  "slug" => "forged-fantasy"
                ]
                9 =>  [
                  "id" => 115653
                  "cover" =>  [
                    "id" => 92737
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1zk1.jpg"
                  ]
                  "name" => "Pokémon Shield"
                  "platforms" =>  [
                    0 =>  [
                      "id" => 130
                      "abbreviation" => "Switch"
                    ]
                  ]
                  "rating" => 67.260537414662
                  "slug" => "pokemon-shield"
                ]
              ]
              "slug" => "my-older-sister-left-the-computer-so-i-got-on-and-found-myself-trying-to-coordinate-a-raid-in-a-game-and-i-dont-play-mmos"
              "summary" => ""My Older Sister Left The Computer So I Got On And Found Myself Trying To Coordinate A Raid In A Game And I Don't Play MMO's" is a game where you attempt to coordinate a raid in an MMO and give people orders while not knowing how to actually accomplish that due to inexperience."
              "tags" =>  [
                0 => 17
                1 => 27
                2 => 268435468
                3 => 536871325
                4 => 536873622
                5 => 536888777
                6 => 536895504
              ]
              "themes" =>  [
                0 => 17
                1 => 27
              ]
              "updated_at" => 1619595866
              "url" => "https://www.igdb.com/games/my-older-sister-left-the-computer-so-i-got-on-and-found-myself-trying-to-coordinate-a-raid-in-a-game-and-i-dont-play-mmos"
              "websites" =>  [
                0 =>  [
                  "id" => 179584
                  "category" => 15
                  "game" => 146394
                  "trusted" => true
                  "url" => "https://cannibalinteractive.itch.io/myoldersisterleftthecomputersoigotonfoundmyselftryingtocoordinatearaidinagameido"
                  "checksum" => "8b555152-d1d1-fa7b-be7f-280e312201d1"
                ]
              ]
              "checksum" => "9a73968f-e597-48af-5660-bae12a6446a6"
            ]
          ])
    }
}
