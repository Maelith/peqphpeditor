<?php

$sp_traveltypes = array(
    0  => "Unknown",
    3  => "Unknown",
    16 => "Unknown"
);

$sp_daytimes = array(
    0 => "Any",
    1 => "Daytime",
    2 => "Nighttime"
);

$sp_acttypes = array(
   -1 => "-1",
    0 => "0",
    1 => "1"
);

$sp_lighttypes = array(
    0 => "Unknown",
    1 => "Unknown",
    2 => "Unknown",
    3 => "Unknown",
    4 => "Unknown",
    5 => "Unknown",
    6 => "Unknown",
    7 => "Unknown",
    8 => "Unknown"
);

$sp_buffformulas = array(
    0    => "Not a Buff",
    1    => "Lowest of Level / 2 or Duration",
    2    => "Duration / 5 * 3",
    3    => "Lowest of Level * 30 or Duration",
    4    => "Duration if not 0, else 50",
    5    => "Lowest of Duration or 3",
    6    => "Lowest of Level / 2 or Duration",
    7    => "Duration if not 0, else Level",
    8    => "Lowest of Level + 10 or Duration",
    9    => "Lowest of Level * 2 + 10 or Duration",
    10   => "Lowest of Level * 3 + 10 or Duration",
    11   => "Duration",
    12   => "Duration",
    50   => "72000 (5 Days)",
    3600 => "Duration if not 0, else 3600"
);

$sp_formulas = array(
    1   => "Effect Base + Level * Multiplier (use text entry)",
    60  => "Effect Base / 100",
    100 => "Effect Base Value",
    101 => "Effect Base + Level / 2",
    102 => "Effect Base + Level",
    103 => "Effect Base + Level * 2",
    104 => "Effect Base + Level * 3",
    105 => "Effect Base + Level * 4",
    107 => "Effect Base + Level / 2",
    108 => "Effect Base + Level / 3",
    109 => "Effect Base + Level / 4",
    110 => "Effect Base + Level / 5 **",
    111 => "Effect Base + 6 * (Level - Spell Level)",
    112 => "Effect Base + 8 * (Level - Spell Level)",
    113 => "Effect Base + 10 * (Level - Spell Level)",
    114 => "Effect Base + 15 * (Level - Spell Level)",
    115 => "Effect Base + 6 * (Level - Spell Level) **",
    116 => "Effect Base + 8 * (Level - Spell Level) **",
    117 => "Effect Base + 12 * (Level - Spell Level) **",
    118 => "Effect Base + 20 * (Level - Spell Level) **",
    119 => "Effect Base + Level / 8 **",
    121 => "Effect Base + Level / 3 **",
    122 => "Splurt",
    123 => "Random (Effect Base, Effect Max) **",
    203 => "Effect Max"
);

$sp_zonetypes = array(
   -1  => "None",
    0   => "Indoor",
    1   => "Outdoor",
    2   => "Dungeon",
    255 => "Any"
);

$sp_envtypes = array(
    0  => "Everywhere",
    8  => "Unknown",
    12 => "Cities",
    24 => "Planes"
);

$sp_classnums = array(
    1  => "Warrior",
    2  => "Cleric",
    3  => "Paladin",
    4  => "Ranger",
    5  => "Shadowknight",
    6  => "Druid", 
    7  => "Monk",
    8  => "Bard",
    9  => "Rogue",
    10 => "Shaman",
    11 => "Necromancer",
    12 => "Wizard",
    13 => "Magician",
    14 => "Enchanter",
    15 => "Beastlord",
    16 => "Berserker"
);

$sp_deities = array(
    0  => "Agnostic",
    1  => "Bertoxxulos",
    2  => "Brell Serilis",
    3  => "Cazic Thule",
    4  => "Erollisi Marr",
    5  => "Bristlebane",
    6  => "Innoruuk",
    7  => "Karana",
    8  => "Mithaniel Marr",
    9  => "Prexus",
    10 => "Quellious",
    11 => "Rallos Zek",
    12 => "Rodcet Nife",
    13 => "Solusek Ro",
    14 => "The Tribunal",
    15 => "Tunare",
    16 => "Veeshan"
);

$sp_targets = array(
    0  => "Rag'Zhezum Special",
    1  => "Line of Sight",
    3  => "Group v1",
    4  => "PB AE",
    5  => "Single",
    6  => "Self",
    8  => "Targeted AE",
    9  => "Animal",
    10 => "Undead",
    11 => "Summoned",
    13 => "Lifetap",
    14 => "Pet",
    15 => "Corpse",
    16 => "Plant",
    17 => "Uber Giants",
    18 => "Uber Dragons",
    20 => "Targeted AE, Tap",
    24 => "AE Undead",
    25 => "AE Summoned",
    32 => "AE Caster2",
    33 => "NPC Hatelist",
    34 => "Dungeon Object",
    35 => "Muramite",
    36 => "Area - PC Only",
    37 => "Area - NPC Only",
    38 => "Summoned Pet",
    39 => "Group No Pets",
    40 => "AE PC v2",
    41 => "Group v2",
    42 => "Self (Directional)",
    43 => "Group With Pets",
    44 => "Beam"
);

$sp_npccats = array(
    0 => "Not Applicable (Non NPC Spell)",
    1 => "AOE Detrimental",
    2 => "Single Target Detrimental",
    3 => "Buffs",
    4 => "Pet Spells",
    5 => "Healing Spells",
    6 => "Gate or last cast",
    7 => "Debuffs",
    8 => "Dispells"
);

$sp_spellgroups = array(
   -100  => "Other (Use Text Field)",
   -99   => "NPC",
   -1    => "AA Procs",
    0    => "Unknown",
    1    => "Dir. Dmg [Magic]",
    2    => "Dir. Dmg [Undead]",
    3    => "Dir. Dmg [Summoned]",
    4    => "Dir. Dmg [Lifetaps]",
    5    => "Dir. Dmg [Plant]",
    6    => "Dir. Dmg [Velious Races]",
    7    => "DoT [Magic]",
    8    => "DoT [Undead]",
    9    => "DoT [Lifetaps]",
    10   => "Targeted Ae Dmg",
    11   => "PB AE Dmg",
    12   => "AE Rain",
    13   => "Dir. Dmg [Bolt]",
    14   => "Stun [Targeted AE]",
    15   => "Stun [Targeted]",
    16   => "Stun [PB AE]",
    17   => "Drains [HP Mana]",
    18   => "Drains [Stats]",
    19   => "Contact Innates",
    20   => "Heal [Instant]",
    21   => "Heal [Duration]",
    22   => "Group Heal [Instant]",
    23   => "Group Heal [Duration]",
    24   => "Regen [Single]",
    25   => "Regen [Group]",
    26   => "Heal [Own Pet]",
    27   => "Resurrect",
    28   => "Necro Life Transfer",
    29   => "Cure [Poison]",
    30   => "HP Buffs [Single]",
    32   => "AC Buff [Single]",
    34   => "Hate Mod Buffs",
    35   => "Haste [Single]",
    36   => "Haste [Pet]",
    37   => "Haste [Group]",
    38   => "Slow [Single]",
    39   => "Slow [Targeted Area]",
    40   => "Cannabalize",
    41   => "Move Speed [Single]",
    42   => "Move Speed [Group]",
    43   => "Wolf Form",
    44   => "Move Speed [Pet]",
    45   => "Illusion [Self]",
    46   => "Lich",
    47   => "Bear Form",
    48   => "Tree Form",
    49   => "Dead Man Floating",
    50   => "Root",
    51   => "Summon Pet",
    52   => "Summon Corpse",
    53   => "Sense Undead",
    54   => "Invulnerability",
    55   => "Gate [Combat Portal]",
    56   => "Gate [Self Gates]",
    58   => "Translocate",
    59   => "Shadow Step",
    60   => "Enchant Item",
    61   => "Summon [Misc Item]",
    62   => "Fear",
    63   => "Fear [Animal]",
    64   => "Fear [Undead]",
    65   => "Dmg Shield [Single]",
    66   => "Dmg Shield [Group]",
    67   => "Mark Of Karn",
    68   => "Dmg Shield [Self]",
    69   => "Resist Debuffs",
    70   => "Resist Buffs",
    71   => "BST Pet Buffs",
    72   => "Summon Familiar",
    73   => "STR Buff",
    74   => "DEX Buff",
    75   => "AGI Buff",
    76   => "STA Buff",
    77   => "INT Buff",
    78   => "CHA Buff",
    79   => "Stat Debuffs",
    80   => "Invis Undead",
    81   => "Invis Animals",
    82   => "Invisibility",
    83   => "Absorb Damage",
    84   => "Casting Level Buffs",
    85   => "Clarity Line",
    86   => "Max Mana Buffs",
    87   => "Drain Mana",
    88   => "Mana Transfer",
    89   => "Instant Gain Mana",
    90   => "Lower Hate [Jolt]",
    91   => "Increase Archery",
    92   => "ATK Buff",
    93   => "Vision",
    94   => "Water Breathing",
    95   => "Improve Faction",
    96   => "Charm",
    97   => "Dispell",
    98   => "Lull",
    99   => "Mezmerise",
    100  => "Spell Focus Items",
    101  => "Snare [single]",
    102  => "Snare [AE]",
    105  => "Feign Death",
    106  => "Identify",
    107  => "Reclaim Energy",
    108  => "Find Corpse",
    109  => "Summon Player",
    110  => "Spell Shield",
    112  => "Blindness",
    113  => "Levitation",
    114  => "Extinquish Fatigue",
    115  => "Death Pact",
    116  => "Mem Blur",
    118  => "Height",
    119  => "Add Hate",
    120  => "Iron Maiden",
    121  => "Focus Spells",
    122  => "Melee Guard",
    125  => "Dir. Dmg [Fire]",
    126  => "Dir. Dmg [Ice]",
    127  => "Dir. Dmg [Poison]",
    128  => "Dir. Dmg [Disease]",
    129  => "DoT [Fire]",
    130  => "DoT [Ice]",
    131  => "DoT [Poison]",
    132  => "DoT [Disease]",
    133  => "INT Caster Chest Opening",
    134  => "INT Caster Chest Trap Appraisal",
    135  => "INT Caster Chest Trap Disarm",
    136  => "WIS Caster Chest Trap Disarm",
    137  => "WIS Caster Chest Trap Appraisal",
    138  => "WIS Caster Chest Opening",
    140  => "Destroy [Undead]",
    141  => "Destroy [Summoned]",
    142  => "Targetted AE [Fire]",
    143  => "Targetted AE [Ice]",
    146  => "PB AE [Fire]",
    147  => "PB AE [Ice]",
    150  => "Rain [Fire]",
    151  => "Rain [Ice]",
    152  => "Rain [Poison]",
    154  => "Fear Song",
    155  => "Fast Heals",
    156  => "Mana to Hitpoints",
    157  => "Pet Siphons",
    159  => "Cure [Disease]",
    160  => "Cure [Curse]",
    161  => "Cure [Multiple]",
    162  => "Cure [Blind]",
    163  => "Group Cure [Multiple]",
    164  => "Misc Effects",
    165  => "Shielding",
    166  => "PAL/RNG/BST HP Buffs",
    167  => "Symbols",
    168  => "Aegolism Line",
    169  => "Paladin AC Buffs",
    170  => "Spell Damage Mitigate",
    171  => "Spell/Melee Block",
    172  => "Spell Reflect",
    173  => "Hybrid AC Buffs",
    174  => "HP/Mana Regen",
    175  => "Aggro Decreasers",
    200  => "Misc Spells",
    201  => "Disciplines",
    202  => "Melee Haste",
    203  => "AE Slow",
    204  => "Summon Air Pet",
    205  => "Summon Water Pet",
    206  => "Summon Fire Pet",
    207  => "Summon Earth Pet",
    208  => "Summon Monster Pet",
    209  => "Transport [Antonica]",
    210  => "Transport [Odus]",
    211  => "Transport [Faydwer]",
    212  => "Transport [Kunark]",
    213  => "Transport [Velious]",
    214  => "Transport [Luclin]",
    215  => "Transport [Planes]",
    216  => "Transport [Gates/Omens]",
    217  => "Summon [Weapon]",
    218  => "Summon [Focus]",
    219  => "Summon [Food/Drink]",
    220  => "Summon [Armor]",
    999  => "AA / Abilities",
    1000 => "Unknown"
);

$sp_skills = array(
   -1  => "All Skills",
    0  => "1H Blunt",
    1  => "1H Slashing",
    2  => "2H Blunt",
    3  => "2H Slashing",
    4  => "Abjuration",
    5  => "Alteration",
    6  => "Apply Poison",
    7  => "Archery",
    8  => "Backstab",
    9  => "Bind Wound",
    10 => "Bash",
    11 => "Block",
    12 => "Brass Instruments",
    13 => "Channeling",
    14 => "Conjuration",
    15 => "Defense",
    16 => "Disarm",
    17 => "Disarm Traps",
    18 => "Divination",
    19 => "Dodge",
    20 => "Double Attack",
    21 => "Dragon Punch",
    22 => "Dual Wield",
    23 => "Eagle Strike",
    24 => "Evocation",
    25 => "Feign Death",
    26 => "Flying Kick",
    27 => "Forage",
    28 => "Hand To Hand",
    29 => "Hide",
    30 => "Kick",
    31 => "Meditate",
    32 => "Mend",
    33 => "Offense",
    34 => "Parry",
    35 => "Pick Lock",
    36 => "Piercing",
    37 => "Riposte",
    38 => "Round Kick",
    39 => "Safe Fall",
    40 => "Sense Heading",
    41 => "Sing",
    42 => "Sneak",
    43 => "Specialize Abjure",
    44 => "Specialize Alteration",
    45 => "Specialize Conjuration",
    46 => "Specialize Divinatation",
    47 => "Specialize Evocation",
    48 => "Pick Pockets",
    49 => "Stringed Instruments",
    50 => "Swimming",
    51 => "Throwing",
    52 => "Tiger Claw",
    53 => "Tracking",
    54 => "Wind Instruments",
    55 => "Fishing",
    56 => "Make Poison",
    57 => "Tinkering",
    58 => "Research",
    59 => "Alchemy",
    60 => "Baking",
    61 => "Tailoring",
    62 => "Sense Traps",
    63 => "Blacksmithing",
    64 => "Fletching",
    65 => "Brewing",
    66 => "Alcohol Tolerance",
    67 => "Begging",
    68 => "Jewelry Making",
    69 => "Pottery",
    70 => "Percussion Instruments",
    71 => "Intimidation",
    72 => "Berserking",
    73 => "Taunt",
    74 => "Frenzy",
    75 => "Unknown75",
    76 => "Unknown76",
    77 => "Unknown77",
    78 => "Unknown78",
    79 => "Unknown79",
    80 => "Unknown80",
    81 => "Unknown81",
    82 => "Unknown82",
    83 => "Unknown83",
    84 => "Unknown84",
    85 => "Unknown85",
    86 => "Unknown86",
    87 => "Unknown87",
    88 => "Unknown88",
    89 => "Unknown89",
    90 => "Unknown90",
    91 => "Unknown91",
    92 => "Unknown92",
    93 => "Unknown93",
    94 => "Unknown94",
    95 => "Unknown95",
    96 => "Unknown96",
    97 => "Unknown97",
    98 => "Unknown98"
);

$sp_spelltypes = array(
    1    => "Nuke",
    2    => "Heal",
    4    => "Root",
    8    => "Buff",
    16   => "Escape",
    32   => "Pet",
    64   => "Lifetap",
    128  => "Snare",
    256  => "DOT",
    512  => "Dispel",
    1024 => "In Combat Buff",
    2048 => "Mez",
    4096 => "Charm"
);

$sp_beneficial = 2 | 8 | 16 | 32 | 1024;
$sp_detrimental = 1 | 4 | 64 | 128 | 256 | 512 | 2048 | 4096;

$sp_goodeffect = array(
    0 => "Detrimental",
    1 => "Beneficial",
    2 => "Beneficial, Group Only"
);

$sp_resisttype = array(
    0 => "Unresistable",
    1 => "Magic",
    2 => "Fire",
    3 => "Cold",
    4 => "Poison",
    5 => "Disease",
    6 => "Chromatic",
    7 => "Prismatic",
    8 => "Physical",
    9 => "Unknown"
);

$sp_effects = array(
    0   => "HP/DD (Ticks)",
    1   => "AC",
    2   => "ATK",
    3   => "Movement",
    4   => "STR",
    5   => "DEX",
    6   => "AGI",
    7   => "STA",
    8   => "INT",
    9   => "WIS",
    10  => "CHA",
    11  => "Attack Speed",
    12  => "Invisibility",
    13  => "See Invis",
    14  => "Water Breathing",
    15  => "Mana (Ticks)",
    18  => "Lull",
    19  => "Add Faction",
    20  => "Blind",
    21  => "Stun",
    22  => "Charm",
    23  => "Fear",
    24  => "Stamina (Invigor)",
    25  => "Bind Affinity",
    26  => "Gate",
    27  => "Cancel Magic",
    28  => "Invis VS Undead",
    29  => "Invis VS Animals",
    30  => "Change Frenzy Radius",
    31  => "Mezmerize",
    32  => "Summon Item",
    33  => "Summon Pet",
    35  => "Disease Counter",
    36  => "Poison Counter",
    40  => "Divine Aura",
    41  => "Destroy (Disintegrate, Banish)",
    42  => "Shadow Step",
    44  => "Lycanthropy",
    46  => "Resist Fire",
    47  => "Resist Cold",
    48  => "Resist Poison",
    49  => "Resist Disease",
    50  => "Resist Magic",
    52  => "Sense Dead",
    53  => "Sense Summoned",
    54  => "Sense Animals",
    55  => "Rune",
    56  => "True North",
    57  => "Levitate",
    58  => "Illusion",
    59  => "Damage Shield",
    61  => "Identify",
    63  => "Wipe Hate List",
    64  => "Spin Target",
    65  => "Infravision",
    66  => "Ultravision",
    67  => "Eye of Zomm",
    68  => "Reclaim Pet",
    69  => "Total HP",
    71  => "Necro Pet",
    73  => "Bind Sight",
    74  => "Feign Death",
    75  => "Voice Graft",
    76  => "Sentinel",
    77  => "Locate Corpse",
    78  => "Absorb Magic Attack (Rune for Spells)",
    79  => "HP Once (Heals and Nukes)",
    81  => "Revive / Res",
    82  => "Summon PC",
    83  => "Teleport",
    84  => "Toss Up / Gravity Flux",
    85  => "Weapon Proc",
    86  => "Harmony",
    87  => "Magnify Vision",
    88  => "Succor",
    89  => "Model Size (Shrink/Grow)",
    90  => "Cloak",
    91  => "Summon Corpse",
    92  => "Calm",
    93  => "Stop Rain",
    94  => "Negate If Combat (like Spirit of Scale)",
    95  => "Sacrifice",
    96  => "Silence",
    97  => "Mana Pool",
    98  => "Attack Speed 2 (Melody of Ervaj)",
    99  => "Root",
    100 => "Heal Over Time",
    101 => "Complete Heal",
    102 => "Fearless",
    103 => "Call Pet",
    104 => "Translocate",
    105 => "Anti Gate (Anchor)",
    106 => "Summon Bst Pet",
    108 => "Familiar",
    109 => "Summon Item Into Bag",
    111 => "Resist All",
    112 => "Casting Level",
    113 => "Summon Horse",
    114 => "Change Aggro (Horrifying Visage)",
    115 => "Hunger",
    116 => "CurseCounter",
    117 => "Magic Weapon",
    118 => "Singing Skill",
    119 => "Attack Speed 3 (Frenzied Burnout)",
    120 => "HealRate??",
    121 => "Reverse Damage Shield",
    123 => "Screech (Form of Defense)",
    124 => "Improved Damage",
    125 => "Improved Heal",
    126 => "Spell Resist Reduction",
    127 => "Increase Spell Haste",
    128 => "Increate Spell Duration",
    129 => "Increate Range",
    130 => "Spell Hate Mod",
    131 => "Reduce Reagent Cost",
    132 => "Reduce Mana Cost",
    134 => "Limit: Max Level",
    135 => "Limit: Resist",
    136 => "Limit: Target",
    137 => "Limit: Effect",
    138 => "Limit: Spell Type",
    139 => "Limit: Spell",
    140 => "Limit: Min Duration",
    141 => "Limit: Instant",
    142 => "Limit: Min Level",
    143 => "Limit: Cast Time",
    145 => "Teleport2 (Banishment of the Pantheon)",
    147 => "Percent Heal",
    148 => "Stacking Command Block",
    149 => "Stacking Command Overwrite",
    150 => "Death Save",
    151 => "Suspend Pet",
    152 => "Temporary Pets (Swarm?)",
    153 => "Balance HP (Divine Arbitration)",
    154 => "Dispel Detrimental",
    156 => "Illusion Copy",
    157 => "Spell Damage Shield (Petrad's Protection)",
    158 => "Reflect",
    159 => "All Stats",
    160 => "Make Drunk",
    161 => "Mitigate Spell Damage",
    162 => "Mitigate Melee Damage",
    163 => "Negate Attacks",
    164 => "Appraise LDoN Chest",
    165 => "Disarm LDoN Trap",
    166 => "Unlock LDoN Chest",
    167 => "Pet Power Increase",
    168 => "Melee Mitigation",
    169 => "Critical Hit Chance",
    170 => "Spell Crit Chance",
    171 => "Crippling Blow Chance",
    172 => "Avoid Melee Chance",
    173 => "Riposte Chance",
    174 => "Dodge Chance",
    175 => "Parry Chance",
    176 => "Dual Wield Chance",
    177 => "Double Attack Chance",
    178 => "Melee LIfetap",
    179 => "All Instrument Mod",
    180 => "Resist Spell Chance",
    181 => "Resist Fear Chance",
    182 => "Hundred Hands",
    183 => "Melee Skill Check",
    184 => "Hit Chance",
    185 => "Damage Modifier",
    186 => "Min Damage Modifier",
    188 => "Increase Block Chance",
    189 => "Current Endurance",
    190 => "Endurance Pool",
    191 => "Amnesia",
    192 => "Hate 2",
    193 => "Skill Attack",
    194 => "Fading Memories",
    195 => "Stun Resist",
    196 => "Strikethrough",
    197 => "Skill Damage Taken",
    198 => "Current Endurance Once",
    199 => "Taunt (% chance)",
    200 => "Proc Chance",
    201 => "Ranged Proc",
    202 => "Illusion Other",
    203 => "Mass Group Buff",
    204 => "Group Fear Immunity",
    205 => "Rampage",
    206 => "AOE Taunt",
    207 => "Flesh To Bone",
    209 => "Fading Memories 2",
    210 => "Pet Shield",
    211 => "AOE Melee",
    212 => "Prolonged Destruction",
    214 => "Max HP Change",
    216 => "Accuracy",
    218 => "Pet Critical Hit",
    219 => "Slay Undead",
    220 => "Skill Damage Amount",
    221 => "Packrat",
    224 => "Give Double Riposte",
    225 => "Give Double Attack",
    226 => "Two Hand Bash",
    227 => "Reduce Skill Timer",
    229 => "Persistent Casting",
    232 => "Divine Save",
    235 => "Channeling Chance",
    237 => "Give Pet Group Target",
    246 => "Set Breath Level",
    248 => "Secondary Forte",
    249 => "Secondary Dmg Inc",
    254 => "Blank",
    257 => "Pet Discipline (/pet hold)",
    258 => "Triple Backstab",
    259 => "Combat Stability",
    260 => "Add Instrument Mod",
    262 => "Raise Stat Cap",
    263 => "Trade Skill Mastery",
    264 => "Hastened AA Skill",
    265 => "Mastery Of Past",
    266 => "Extra Attack Chance",
    267 => "Pet Discipline 2 (/pet focust /pet no cast)",
    268 => "Reduce Tradeskill Fail",
    271 => "Base Movement Speed",
    272 => "Casting Level 2",
    273 => "Critical Dot Chance",
    274 => "Critical Heal Chance",
    276 => "Ambidexterity",
    278 => "Finishing Blow",
    279 => "Flurry",
    280 => "Pet Flurry",
    285 => "Nimble Evasion",
    286 => "Spell Damage",
    287 => "Focus Combat Duration Mod",
    289 => "Improved Spell Effect",
    291 => "Purify",
    294 => "Critical Spell Chance",
    296 => "Spell Vulnerability",
    297 => "Empathy",
    298 => "Change Height",
    299 => "Wake the Dead",
    300 => "Doppelganger",
    304 => "Offhand Ripose Fail",
    305 => "Mitigate Damage Shield",
    306 => "Wake the Dead 2",
    307 => "Appraisal",
    308 => "Suspend Minion",
    309 => "Yet Another Gate",
    310 => "Reduce Reuse Timer",
    311 => "No Combat Skills",
    312 => "Sanctuary",
    314 => "Invisibility 2",
    315 => "Invis VS Undead 2",
    318 => "Item Mana Regen Cap Increase",
    319 => "Critical Heal Over Time",
    321 => "Reduce Hate",
    322 => "Gate To Home City",
    323 => "Defenseive Proc",
    324 => "HP To Mana",
    326 => "Spell Slot Increase",
    327 => "Mystical Attune",
    328 => "Delay Death",
    329 => "Mana Absorb Percent Damage",
    330 => "Critical Damage Mob",
    331 => "Salvage",
    332 => "Summon To Corpse",
    333 => "Effect On Fade",
    334 => "Bard AOE Dot",
    335 => "Unknown335",
    337 => "Percent XP Increase",
    338 => "Summon and Res All Corpses",
    339 => "Trigger On Cast",
    340 => "Lifeshard Chance",
    342 => "Immune to Fleeing",
    343 => "Interrupt Casting",
    348 => "Unkown348",
    350 => "Manaburn",
    351 => "Persistent Effect",
    352 => "Unknown352",
    353 => "Unknown353",
    354 => "Unknown354",
    355 => "Unknown355",
    358 => "Current Mana Once",
    360 => "Spell On Kill",
    361 => "Unknown361",
    365 => "Spell On Death",
    366 => "Unkown366",
    367 => "Add Body Type",
    368 => "Faction Mod",
    369 => "Corruption Counter",
    370 => "Resist Corruption",
    371 => "Inhibit Melee Attacks",
    373 => "Cast On Wear Off",
    374 => "Apply Effect",
    377 => "Boss Spell Trigger",
    379 => "Shadow Step Directional",
    380 => "Knockdown",
    382 => "Block Damage Shield",
    383 => "Decrease Hitpoints",
    384 => "Leap"
);

$sp_fields = array(
    "name",
    "player_1",
    "teleport_zone",
    "you_cast",
    "other_casts",
    "cast_on_you",
    "cast_on_other",
    "spell_fades",
    "`range`",
    "aoerange",
    "pushback",
    "pushup",
    "cast_time",
    "recovery_time",
    "recast_time",
    "buffdurationformula",
    "buffduration",
    "AEDuration",
    "mana",
    "effect_base_value1",
    "effect_base_value2",
    "effect_base_value3",
    "effect_base_value4",
    "effect_base_value5",
    "effect_base_value6",
    "effect_base_value7",
    "effect_base_value8",
    "effect_base_value9",
    "effect_base_value10",
    "effect_base_value11",
    "effect_base_value12",
    "effect_limit_value1",
    "effect_limit_value2",
    "effect_limit_value3",
    "effect_limit_value4",
    "effect_limit_value5",
    "effect_limit_value6",
    "effect_limit_value7",
    "effect_limit_value8",
    "effect_limit_value9",
    "effect_limit_value10",
    "effect_limit_value11",
    "effect_limit_value12",
    "max1",
    "max2",
    "max3",
    "max4",
    "max5",
    "max6",
    "max7",
    "max8",
    "max9",
    "max10",
    "max11",
    "max12",
    "icon",
    "memicon",
    "components1",
    "components2",
    "components3",
    "components4",
    "component_counts1",
    "component_counts2",
    "component_counts3",
    "component_counts4",
    "NoexpendReagent1",
    "NoexpendReagent2",
    "NoexpendReagent3",
    "NoexpendReagent4",
    "formula1",
    "formula2",
    "formula3",
    "formula4",
    "formula5",
    "formula6",
    "formula7",
    "formula8",
    "formula9",
    "formula10",
    "formula11",
    "formula12",
    "LightType",
    "goodEffect",
    "Activated",
    "resisttype",
    "effectid1",
    "effectid2",
    "effectid3",
    "effectid4",
    "effectid5",
    "effectid6",
    "effectid7",
    "effectid8",
    "effectid9",
    "effectid10",
    "effectid11",
    "effectid12",
    "targettype",
    "basediff",
    "skill",
    "zonetype",
    "EnvironmentType",
    "TimeOfDay",
    "classes1",
    "classes2",
    "classes3",
    "classes4",
    "classes5",
    "classes6",
    "classes7",
    "classes8",
    "classes9",
    "classes10",
    "classes11",
    "classes12",
    "classes13",
    "classes14",
    "classes15",
    "classes16",
    "CastingAnim",
    "TargetAnim",
    "TravelType",
    "SpellAffectIndex",
    "field124",
    "field125",
    "deities1",
    "deities2",
    "deities3",
    "deities4",
    "deities5",
    "deities6",
    "deities7",
    "deities8",
    "deities9",
    "deities10",
    "deities11",
    "deities12",
    "deities13",
    "deities14",
    "deities15",
    "deities16",
    "field142",
    "field143",
    "new_icon",
    "spellanim",
    "uninterruptable",
    "ResistDiff",
    "dot_stacking_exempt",
    "deleteable",
    "RecourseLink",
    "field151",
    "field152",
    "field153",
    "short_buff_box",
    "descnum",
    "typedescnum",
    "effectdescnum",
    "field158",
    "field159",
    "field160",
    "field161",
    "bonushate",
    "field163",
    "field164",
    "field165",
    "EndurCost",
    "EndurTimerIndex",
    "field168",
    "field169",
    "field170",
    "field171",
    "field172",
    "HateAdded",
    "EndurUpkeep",
    "field175",
    "numhits",
    "pvpresistbase",
    "pvpresistcalc",
    "pvpresistcap",
    "spell_category",
    "field181",
    "field182",
    "field183",
    "field184",
    "can_mgb",
    "nodispell",
    "npc_category",
    "npc_usefulness",
    "field189",
    "field190",
    "field191",
    "field192",
    "nimbuseffect",
    "field194",
    "field195",
    "field196",
    "field197",
    "field198",
    "field199",
    "field200",
    "field201",
    "field202",
    "field203",
    "field204",
    "field205",
    "field206",
    "spellgroup",
    "field208",
    "field209",
    "field210",
    "field211",
    "field213",
    "field214"
);
?>
