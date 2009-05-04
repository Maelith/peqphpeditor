<?php

$yesno = array(0 => "No", 1 => "Yes");

$genders = array(0=>"Male", 1=>"Female", 2=>"Neuter");
/*
	BT_Humanoid			= 1,
	BT_Lycanthrope		= 2,
	BT_Undead			= 3,
	BT_Giant			= 4,
	BT_Construct		= 5,
	BT_Extraplanar		= 6,
	BT_Magical			= 7,	//this name might be a bit off,
	BT_SummonedUndead	= 8,
	//					...
	BT_NoTarget			= 11,	//no name, can't target this bodytype
	BT_Vampire			= 12,
	BT_Atenha_Ra		= 13,
	BT_Greater_Akheva	= 14,
	BT_Khati_Sha		= 15,
	//					...
	BT_Zek				= 19,
	BT_Luggald			= 20,
	BT_Animal			= 21,
	BT_Insect			= 22,
	BT_Monster			= 23,
	BT_Summoned			= 24,	//Elemental?
	BT_Plant			= 25,
	BT_Dragon			= 26,
	BT_Summoned2		= 27,
	BT_Summoned3		= 28,
	//					  29
	BT_VeliousDragon	= 30,	//might not be a tight set
	//					...
	BT_Dragon3			= 32,
	BT_Boxes			= 33,
	BT_Muramite			= 34,	//tribal dudes
	//					...
	BT_NoTarget2		= 60,
	//					...
	BT_SwarmPet			= 63,	//is this valid, or made up?
	//					...
	BT_InvisMan			= 66,	//no name, seen on 'InvisMan', can be /targeted
	BT_Special			= 67
} bodyType;
*/


$bodytypes = array (
0 => 'Unknown0',
1 => 'Humanoid',
2 => 'Lycanthrope',
3 => 'Undead',
4 => 'Giant',
5 => 'Construct',
6 => 'Extraplanar',
7 => 'Magical',
8 => 'Summoned Undead',
9 => 'BaneGiant',
10 => 'Unknown10',
11 => 'NoTarget',
12 => 'Vampire',
13 => 'Atenha_Ra',
14 => 'Greater_Akheva',
15 => 'Khati_Sha',
16 => 'Seru',
17 => 'Unknown17',
18 => 'Unknown18',
19 => 'Zek',
20 => 'Luggald',
21 => 'Animal',
22 => 'Insect',
23 => 'Monster',
24 => 'Summoned',
25 => 'Plant',
26 => 'Dragon',
27 => 'Summoned2',
28 => 'Summoned3',
29 => 'Dragon',
30 => 'Velious Dragon',
31 => 'Familiar',
32 => 'Dragon 3',
33 => 'Boxes',
34 => 'Muramite',
35 => 'Unknown35',
36 => 'Unknown36',
37 => 'Unknown37',
38 => 'Unknown38',
39 => 'Unknown39',
40 => 'Unknown40',
41 => 'Unknown41',
42 => 'Unknown42',
43 => 'Unknown43',
44 => 'Unknown44',
45 => 'Unknown45',
46 => 'Unknown46',
47 => 'Unknown47',
48 => 'Unknown48',
49 => 'Unknown49',
50 => 'Unknown50',
51 => 'Unknown51',
52 => 'Unknown52',
53 => 'Unknown53',
54 => 'Unknown54',
55 => 'Unknown55',
56 => 'Unknown56',
57 => 'Unknown57',
58 => 'Unknown58',
59 => 'Unknown59',
60 => 'NoTarget2',
61 => 'Unknown61',
62 => 'Unknown62',
63 => 'SwarmPet',
64 => 'Unknown64',
65 => 'Trap',
66 => 'InvisMan',
67 => 'Special',
68 => 'Unknown68'
);

$races = array (
  0 => 'Soldier',
  1 => 'Human',
  2 => 'Barbarian',
  3 => 'Erudite',
  4 => 'Wood Elf',
  5 => 'High Elf',
  6 => 'Dark Elf',
  7 => 'Half Elf',
  8 => 'Dwarf',
  9 => 'Troll',
  10 => 'Ogre',
  11 => 'Halfling',
  12 => 'Gnome',
  13 => 'Aviak',
  14 => 'Werewolf',
  15 => 'Brownie',
  16 => 'Centaur',
  17 => 'Golem',
  18 => 'Giant/Cyclops',
  19 => 'Trakanon',
  20 => '4-arm/Venril Sathir',
  21 => 'Evil Eye',
  22 => 'Beetle',
  23 => 'Kerra',
  24 => 'Fish',
  25 => 'Fairy',
  26 => 'Froglok',
  27 => 'Froglok Ghoul',
  28 => 'Fungusman',
  29 => 'Gargoyle',
  30 => 'Gasbag',
  31 => 'Gelatinous Cube',
  32 => 'Ghost',
  33 => 'Ghoul',
  34 => 'Giant Bat',
  35 => 'Giant Eel',
  36 => 'Giant Rat',
  37 => 'Giant Snake',
  38 => 'Giant Spider',
  39 => 'Gnoll',
  40 => 'Goblin',
  41 => 'Gorilla',
  42 => 'Wolf',
  43 => 'Bear',
  44 => 'Freeport Guards',
  45 => 'Demi Lich',
  46 => 'Imp',
  47 => 'Griffin',
  48 => 'Kobold',
  49 => 'Dragons',
  50 => 'Lion',
  51 => 'Lizard Man',
  52 => 'Mimic',
  53 => 'Minotaur',
  54 => 'Orc',
  55 => 'Human Beggar',
  56 => 'Pixie',
  57 => 'Dracnid',
  58 => 'Solusek Ro',
  59 => 'Bloodgills',
  60 => 'Skeleton',
  61 => 'Shark',
  62 => 'Tunare',
  63 => 'Tiger',
  64 => 'Treant',
  65 => 'Vampire',
  66 => 'Statue of Rallos Zek',
  67 => 'Highpass Citizen',
  68 => 'Tentacle',
  69 => 'Wisp',
  70 => 'Zombie',
  71 => 'Qeynos Citizen',
  72 => 'Ship',
  73 => 'Launch',
  74 => 'Piranha',
  75 => 'Elemental',
  76 => 'Puma',
  77 => 'Neriak Citizen',
  78 => 'Erudite Citizen',
  79 => 'Bixie',
  80 => 'Reanimated Hand',
  81 => 'Rivervale Citizen',
  82 => 'Scarecrow',
  83 => 'Skunk',
  84 => 'Snake Elemental',
  85 => 'Spectre',
  86 => 'Sphinx',
  87 => 'Armadillo',
  88 => 'Clockwork Gnome',
  89 => 'Drake',
  90 => 'Halas Citizen',
  91 => 'Alligator',
  92 => 'Grobb Citizen',
  93 => 'Oggok Citizen',
  94 => 'Kaladim Citizen',
  95 => 'Cazic Thule',
  96 => 'Cockatrice',
  97 => 'Daisy Man',
  98 => 'Elf Vampire',
  99 => 'Denizen',
  100 => 'Dervish',
  101 => 'Efreeti',
  102 => 'Froglok Tadpole',
  103 => 'Phinigel Autropos',
  104 => 'Leech',
  105 => 'Swordfish',
  106 => 'Felguard',
  107 => 'Mammoth',
  108 => 'Eye of Zomm',
  109 => 'Wasp',
  110 => 'Mermaid',
  111 => 'Harpie',
  112 => 'Fayguard',
  113 => 'Drixie',
  114 => 'Ghost Ship',
  115 => 'Clam',
  116 => 'Sea Horse',
  117 => 'Unknown',
  118 => 'Unknown',
  119 => 'Unknown',
  120 => 'Wolf Elemental',
  121 => 'Gorgon',
  122 => 'Dragon Skeleton',
  123 => 'Innoruuk',
  124 => 'Unicorn',
  125 => 'Pegasus',
  126 => 'Djinn',
  127 => 'Invisible Man',
  128 => 'Iksar',
  129 => 'Scorpion',
  130 => 'Vah Shir',
  131 => 'Sarnak',
  132 => 'Draglock',
  133 => 'Lycanthrope',
  134 => 'Mosquito',
  135 => 'Rhino',
  136 => 'Xalgoz',
  137 => 'Kunark Goblin',
  138 => 'Yeti',
  139 => 'Iksar Citizen',
  140 => 'Forest Giant',
  141 => 'Boat',
  142 => 'Minor Illusion',
  143 => 'Tree Illusion',
  144 => 'Burynai',
  145 => 'Goo',
  146 => 'Spectral Sarnak',
  147 => 'Spectral Iksar',
  148 => 'Kunark Fish',
  149 => 'Iksar Scorpion',
  150 => 'Erollisi',
  151 => 'Tribunal',
  152 => 'Bertoxxulous',
  153 => 'Bristlebane',
  154 => 'Fay Drake',
  155 => 'Sarnak Skeleton',
  156 => 'Ratman',
  157 => 'Wyvern',
  158 => 'Wurm',
  159 => 'Devourer',
  160 => 'Iksar Golem',
  161 => 'Iksar Skeleton',
  162 => 'Man Eating Plant',
  163 => 'Raptor',
  164 => 'Sarnak Golem',
  165 => 'Water Dragon',
  166 => 'Iksar Hand',
  167 => 'Succulent',
  168 => 'Holgresh',
  169 => 'Brontotherium',
  170 => 'Snow Dervish',
  171 => 'Dire Wolf',
  172 => 'Manticore',
  173 => 'Totem',
  174 => 'Cold Spectre',
  175 => 'Enchanted Armor',
  176 => 'Snow Bunny',
  177 => 'Walrus',
  178 => 'Rock-gem Men',
  179 => 'Unknown179',
  180 => 'Unknown180',
  181 => 'Yak man/Faun',
  182 => 'Unknown182',
  183 => 'Coldain',
  184 => 'Velious Dragons',
  185 => 'Hag',
  186 => 'Hippogriff',
  187 => 'Siren',
  188 => 'Frost Giant',
  189 => 'Storm Giant',
  190 => 'Otterman',
  191 => 'Walrus Man',
  192 => 'Clockwork Dragon',
  193 => 'Abhorrent',
  194 => 'Sea Turtle',
  195 => 'Black and White Dragons',
  196 => 'Ghost Dragon',
  197 => 'Ronnie Test',
  198 => 'Prismatic Dragon',
  199 => 'Shiknar',
  200 => 'Rockhopper',
  201 => 'Underbulk',
  202 => 'Grimling',
  203 => 'Vacuum Worm',
  204 => 'Evan Test',
  205 => 'Kahli Shah',
  206 => 'Owlbear',
  207 => 'Rhino Beetle',
  208 => 'Vampyre',
  209 => 'Earth Elemental',
  210 => 'Air Elemental',
  211 => 'Water Elemental',
  212 => 'Fire Elemental',
  213 => 'Wetfang Minnow',
  214 => 'Thought Horror',
  215 => 'Tegi',
  216 => 'Horse',
  217 => 'Shissar',
  218 => 'Fungal Fiend',
  219 => 'Vampire Volatalis',
  220 => 'StoneGrabber',
  221 => 'Scarlet Cheetah',
  222 => 'Zelniak',
  223 => 'Lightcrawler',
  224 => 'Shade',
  225 => 'Sunflower',
  226 => 'Khati Sha',
  227 => 'Shrieker',
  228 => 'Galorian',
  229 => 'Netherbian',
  230 => 'Akhevan',
  231 => 'Spire Spirit',
  232 => 'Sonic Wolf',
  233 => 'Ground Shaker',
  234 => 'Vah Shir Skeleton',
  235 => 'Mutant Humanoid',
  236 => 'Lord Inquisitor Seru',
  237 => 'Recuso',
  238 => 'Vah Shir King',
  239 => 'Vah Shir Guard',
  240 => 'Teleport Man',
  241 => 'Lujein',
  242 => 'Naiad',
  243 => 'Nymph',
  244 => 'Ent',
  245 => 'Wrinnfly',
  246 => 'Coirnav',
  247 => 'Solusek Ro',
  248 => 'Clockwork Golem',
  249 => 'Clockwork Brain',
  250 => 'Spectral Banshee',
  251 => 'Guard of Justice',
  252 => 'PoM Castle',
  253 => 'Disease Boss',
  254 => 'Solusek Ro Guard',
  255 => 'Bertoxxulous',
  256 => 'New Tribunal',
  257 => 'Terris Thule',
  258 => 'Vegerog',
  259 => 'Crocodile',
  260 => 'Bat',
  261 => 'Slarghilug',
  262 => 'Tranquilion',
  263 => 'Tin Soldier',
  264 => 'Nightmare Wraith',
  265 => 'Malarian',
  266 => 'Knight of Pestilence',
  267 => 'Lepertoloth',
  268 => 'Bubonian Boss',
  269 => 'Bubonian Underling',
  270 => 'Pusling',
  271 => 'Water Mephit',
  272 => 'Stormrider',
  273 => 'Junk Beast',
  274 => 'Broken Clockwork',
  275 => 'Giant Clockwork',
  276 => 'Clockwork Beetle',
  277 => 'Nightmare Goblin',
  278 => 'Karana',
  279 => 'Blood Raven',
  280 => 'Nightmare Gargoyle',
  281 => 'Mouts of Insanity',
  282 => 'Skeletal Horse',
  283 => 'Saryrn',
  284 => 'Fennin Ro',
  285 => 'Tormentor',
  286 => 'Necromancer Priest',
  287 => 'Nightmare',
  288 => 'New Rallos Zek',
  289 => 'Tallon Zek',
  290 => 'Vallon Zek',
  291 => 'Air Mephit',
  292 => 'Earth Mephit',
  293 => 'Fire Mephit',
  294 => 'Nightmare Mephit',
  295 => 'Zebuxoruk',
  296 => 'Mithaniel Marr',
  297 => 'Knightmare Rider',
  298 => 'Rathe Councilman',
  299 => 'Xegony',
  300 => 'Balrog/Demon',
  301 => 'Unknown301',
  302 => 'Lobster Monster',
  303 => 'Phoenix',
  304 => 'Quarm',
  305 => 'New Bear',
  306 => 'Earth Golem',
  307 => 'Iron Golem',
  308 => 'Storm Golem',
  309 => 'Air Golem',
  310 => 'Wood Golem',
  311 => 'Fire Golem',
  312 => 'Water Golem',
  313 => 'Veiled Gargoyle',
  314 => 'Lynx',
  315 => 'Squid',
  316 => 'Frog',
  317 => 'Flying Serpent',
  318 => 'Tactics Soldier',
  319 => 'Armored Boar',
  320 => 'Djinni',
  321 => 'Boar',
  322 => 'Knight of Marr',
  323 => 'Armor of Marr',
  324 => 'Nightmare Knight',
  325 => 'Rallos Ogre',
  326 => 'Arachnid',
  327 => 'Crystal Arachnid',
  328 => 'Tower Model',
  329 => 'Portal',
  330 => 'Froglok',
  331 => 'Troll Crew Member',
  332 => 'Pirate Deckhand',
  333 => 'Broken Skull Pirate',
  334 => 'Pirate Ghost',
  335 => 'One-armed Pirate',
  336 => 'Spiritmaster Nadox',
  337 => 'Broken Skull Taskmaster',
  338 => 'Gnome Pirate',
  339 => 'Dark Elf Pirate',
  340 => 'Ogre Pirate',
  341 => 'Human Pirate',
  342 => 'Erudite Pirate',
  343 => 'Unknown343',
  344 => 'Undead Pirate',
  345 => 'Luggald Worker',
  346 => 'Luggald Soldier',
  347 => 'Luggald Disciple',
  348 => 'Drogmor',
  349 => 'Froglok Skeleton',
  350 => 'Undead Froglok',
  351 => 'Knight of Hate',
  352 => 'Warlock of Hate',
  353 => 'Highborn',
  354 => 'Highborn Diviner',
  355 => 'Highborn Crusader',
  356 => 'Chokidai',
  357 => 'Undead Chokidai',
  358 => 'Unknown',
  359 => 'Undead Vampire',
  360 => 'Vampire',
  361 => 'Rujarkian Orc',
  362 => 'Decaying Mutant',
  363 => 'Prismatic Spirit',
  364 => 'Takish Elves',
  365 => 'Master Vampire',
  366 => 'Master Orc',
  367 => 'New Skeleton',
  368 => 'Crypt Creeper',
  369 => 'New Goblin',
  370 => 'Burrower Bug',
  371 => 'Froglok Ghost',
  372 => 'Vortex',
  373 => 'Shadow',
  374 => 'Golem Beast',
  375 => 'Watchful Eye',
  376 => 'Box',
  377 => 'Barrel',
  378 => 'Chest',
  379 => 'Vase',
  380 => 'Frozen Table',
  381 => 'Weapon Rack',
  382 => 'Coffin',
  383 => 'Skull and Bones',
  384 => 'Jester',
  385 => 'Talosian Native',
  386 => 'Talosian Evoker',
  387 => 'Talosian Golem',
  388 => 'Talosian Wolf',
  389 => 'Talosian Amphibian Creature',
  390 => 'Talosian Mountain Beast',
  391 => 'Talosian Stonemite',
  392 => 'Ukan War Hound',
  393 => 'Ixt Centaur',
  394 => 'Ikaav Snakewoman',
  395 => 'Aneuk',
  396 => 'Kyv Hunter',
  397 => 'Noc Sprayblood',
  398 => 'Ratuk Brute',
  399 => 'Ixt',
  400 => 'Huvul',
  401 => 'Mastruq Warfiend',
  402 => 'Mastruq',
  403 => 'Unknown403',
  404 => 'Ship',
  405 => 'New Golem',
  406 => 'Overlord Mata Muram',
  407 => 'Lighting warrior',
  408 => 'Pirylien fire mob',
  409 => 'Bazu',
  410 => 'Feran',
  411 => 'Pirylien fire mob',
  412 => 'Chimera',
  413 => 'Dragorn',
  414 => 'Murkglider',
  415 => 'Rat new skin',
  416 => 'Bat new skin',
  417 => 'Frost Pyrilien',
  418 => 'Discordling',
  419 => 'Girplan',
  420 => 'HanvarArchMagus',
  421 => 'Unknown421',
  422 => 'Unknown422',
  423 => 'Unknown423',
  424 => 'Unknown424',
  425 => 'Crystal Model',
  426 => 'Unknown426',
  427 => 'Large Purse',
  428 => 'Rock Pile',
  429 => 'Unknown429',
  430 => 'Undead Drake',
  431 => 'Dervishes',
  432 => 'New Drake',
  433 => 'New Goblin',
  434 => 'Kirrin',
  435 => 'Tirranun',
  436 => 'New Basilisk',
  437 => 'Kessdona/Rikkukin',
  438 => 'Yar`Lir',
  439 => 'Puma',
  440 => 'Default new spider',
  441 => 'Boss new spider',
  442 => 'Guardian of the Sands',
  443 => 'Unknown443',
  444 => 'Unknown444',
  445 => 'Dragon Egg',
  446 => 'Crystal Dragon',
  447 => 'Smoldering bluish-purple ball',
  448 => 'Statue, sparkly hands',
  449 => 'Spider Egg Sack',
  450 => 'Lava Spider',
  451 => 'Large-abdomen Lava Spider ',
  452 => 'Vishimtar ',
  453 => 'Rome-Looking Warrior',
  454 => 'New Werewolf',
  455 => 'New Kobold',
  456 => 'New Mushroom Man',
  457 => 'Gnomework',
  458 => 'New Orc',
  459 => 'Corathus',
  460 => 'Coral(?) ',
  461 => 'a cocoon',
  462 => 'Unknown462',
  463 => 'Unknown463',
  464 => 'New Gargoyle',
  465 => 'witheran',
  466 => 'Unknown466',
  467 => 'Shilskin',
  468 => 'Unknown468',
  469 => 'New Eye',
  470 => 'Tauren',
  471 => 'Unknown471',
  472 => 'Mechnical Boar',
  473 => 'New Fairy',
  474 => 'Unknown474');

$classes = array (
  0 => 'Soldier',
  1 => 'Warrior',
  2 => 'Cleric',
  3 => 'Paladin',
  4 => 'Ranger',
  5 => 'Shadowknight',
  6 => 'Druid',
  7 => 'Monk',
  8 => 'Bard',
  9 => 'Rogue',
  10 => 'Shaman',
  11 => 'Necromancer',
  12 => 'Wizard',
  13 => 'Magician',
  14 => 'Enchanter',
  15 => 'Beastlord',
  16 => 'Berserker',
  17 => 'Banker',
  18 => 'Unknown18',
  19 => 'Unknown19',
  20 => 'Warrior GM',
  21 => 'Cleric GM',
  22 => 'Paladin GM',
  23 => 'Ranger GM',
  24 => 'Shadowknight GM',
  25 => 'Druid GM',
  26 => 'Monk GM',
  27 => 'Bard GM',
  28 => 'Rogue GM',
  29 => 'Shaman GM',
  30 => 'Necromancer GM',
  31 => 'Wizard GM',
  32 => 'Magician GM',
  33 => 'Enchanter GM',
  34 => 'Beastlord GM',
  35 => 'Berserker GM',
  36 => 'Unknown36',
  37 => 'Unknown37',
  38 => 'Unknown38',
  39 => 'Unknown39',
  40 => 'Banker',
  41 => 'Shopkeeper',
  42 => 'Unknown42',
  43 => 'Unknown43',
  44 => 'Unknown44',
  45 => 'Unknown45',
  46 => 'Unknown46',
  47 => 'Unknown47',
  48 => 'Unknown48',
  49 => 'Unknown49',
  50 => 'Unknown50',
  51 => 'Unknown51',
  52 => 'Unknown52',
  53 => 'Unknown53',
  54 => 'Unknown54',
  55 => 'Unknown55',
  56 => 'Unknown56',
  57 => 'Unknown57',
  58 => 'Unknown58',
  59 => 'Unknown59',
  60 => 'Unknown60',
  61 => 'LDoN Adventure Merchant',
  62 => 'Unknown62',
  63 => 'Tribute Master');

$specialattacks = array(
  "S" => "Summon",
  "E" => "Enrage",
  "R" => "Rampage",
  "r" => "AE Rampage",
  "F" => "Flurry",
  "T" => "Triple Attack",
  "Q" => "Quad Attack",
  "U" => "Unslowable",
  "M" => "Unmezable",
  "C" => "Uncharmable",
  "N" => "Unstunable",
  "I" => "Unsnareable",
  "D" => "Unfearable",
  "A" => "Immune to Melee",
  "B" => "Immune to Magic",
  "f" => "Immune to Fleeing",
  "W" => "Immune to non-Magical Melee",
  "O" => "Immune to non-Bane Melee",
  "H" => "Will Not Aggro"
);

$tradeskills = array(
  59 => "Alchemy",
  60 => "Baking",
  63 => "Blacksmithing",
  65 => "Brewing",
  55 => "Fishing",
  64 => "Fletching",
  68 => "Jewelcraft",
  56 => "Make Poison",
  69 => "Pottery",
  75 => "Quest Combines",
  58 => "Research",
  61 => "Tailoring",
  57 => "Tinkering"
);

$BagtypeToTradeskill = array(
  9 => 59,
  10 => 57,
  12 => 56,
  13 => 75,
  14 => 60,
  15 => 60,
  16 => 61,
  18 => 64,
  20 => 68,
  30 => 69,
  24 => 58,
  25 => 58,
  26 => 58,
  27 => 58,
  46 => 55
);

$worldObjectsToTradeskills = array(
  9 => 59,
  15 => 60,
  16 => 61,
  17 => 63,
  18 => 64,
  19 => 65,
  20 => 68,
  21 => 69,
  22 => 60,
  23 => 0,
  24 => 58,
  25 => 58,
  26 => 58,
  27 => 58,
  32 => 63,
  33 => 63,
  34 => 63,
  46 => 55,
  48 => 63,
  53 => 0
);

$trade_containers = array(
  0x09 => "MEDICINEBAG",
  0x0F => "OVEN",
  0x10 => "SEWINGKIT",
  0x11 => "FORGE",
  0x12 => "FLETCHINGKIT",
  0x13 => "BREWBARREL",
  0x14 => "JEWELERSKIT",
  0x15 => "POTTERYWHEEL",
  0x16 => "KILN",
  0x17 => "KEYMAKER",
  0x18 => "WIZARDLEX",
  0x19 => "MAGELEX",
  0x1A => "NECROLEX",
  0x1B => "ENCHLEX",
  0x20 => "TEIRDALFORGE",
  0x21 => "OGGOKFORGE",
  0x22 => "STORMGUARDF",
  0x2E => "TACKLEBOX",
  0x30 => "FIERDALF",
  0x35 => "AUGMENT"
);

$world_containers = array(
  1 => "UNKNOWN1",
  2 => "UNKNOWN2",
  3 => "UNKNOWN3",
  4 => "UNKNOWN4",
  5 => "UNKNOWN5",
  6 => "UNKNOWN6",
  7 => "UNKNOWN7",
  8 => "UNKNOWN8",
  9 => "MEDICINEBAG",
  10 => "TOOLBOX",
  12 => "MORTAR",
  13 => "SELFDUSTING",
  14 => "UNKNOWN14",
  15 => "OVEN",
  16 => "LOOM",
  17 => "FORGE",
  18 => "FLETCHINGKIT",
  19 => "BREWBARREL",
  20 => "JEWELERSKIT",
  21 => "POTTERYWHEEL",
  22 => "KILN",
  23 => "KEYMAKER",
  24 => "WIZARDLEX",
  25 => "MAGELEX",
  26 => "NECROLEX",
  27 => "ENCHLEX",
  28 => "UNKNWON28",
  29 => "UNKNOWN29",
  30 => "ALWAYSWORKS",
  31 => "FELWITHEF",
  32 => "TEIRDALFORGE",
  33 => "OGGOKFORGE",
  34 => "STORMGUARDF",
  35 => "AKANONFORGE",
  36 => "NORMANFORGE",
  37 => "UNKNOWN37",
  38 => "CABILISFORGE",
  39 => "ANTONICANF",
  40 => "ANTONICANF",
  41 => "VALELOOM",
  42 => "ERUDLOOM",
  43 => "FIERDALLOOM",
  44 => "FIERDALFLETCH",
  45 => "CABILISWHEEL",
  46 => "TACKLEBOX",
  47 => "GROBBFORGE",
  48 => "FIERDALF",
  49 => "VALEFORGE",
  50 => "ERUDFORGE",
  51 => "UNKNOWN51",
  52 => "UNKNOWN52",
  53 => "AUGMENT",
  255 => "TAANAN?"
);

?>
