<?php
/**
 * Objects Collection
 *
 * @category Core
 * @package  Application
 * @author   XG Proyect Team
 * @license  http://www.xgproyect.org XG Proyect
 * @link     http://www.xgproyect.org
 * @version  3.0.0
 */
$resource = [
    1 => "building_metal_mine",
    2 => "building_crystal_mine",
    3 => "building_deuterium_sintetizer",
    4 => "building_solar_plant",
    12 => "building_fusion_reactor",
    14 => "building_robot_factory",
    15 => "building_nano_factory",
    21 => "building_hangar",
    22 => "building_metal_store",
    23 => "building_crystal_store",
    24 => "building_deuterium_tank",
    31 => "building_laboratory",
    33 => "building_terraformer",
    34 => "building_ally_deposit",
    41 => "building_mondbasis",
    42 => "building_phalanx",
    43 => "building_jump_gate",
    44 => "building_missile_silo",
    106 => "research_espionage_technology",
    108 => "research_computer_technology",
    109 => "research_weapons_technology",
    110 => "research_shielding_technology",
    111 => "research_armour_technology",
    113 => "research_energy_technology",
    114 => "research_hyperspace_technology",
    115 => "research_combustion_drive",
    117 => "research_impulse_drive",
    118 => "research_hyperspace_drive",
    120 => "research_laser_technology",
    121 => "research_ionic_technology",
    122 => "research_plasma_technology",
    123 => "research_intergalactic_research_network",
    124 => "research_astrophysics",
    199 => "research_graviton_technology",
    202 => "ship_small_cargo_ship",
    203 => "ship_big_cargo_ship",
    204 => "ship_light_fighter",
    205 => "ship_heavy_fighter",
    206 => "ship_cruiser",
    207 => "ship_battleship",
    208 => "ship_colony_ship",
    209 => "ship_recycler",
    210 => "ship_espionage_probe",
    211 => "ship_bomber",
    212 => "ship_solar_satellite",
    213 => "ship_destroyer",
    214 => "ship_deathstar",
    215 => "ship_battlecruiser",
    401 => "defense_rocket_launcher",
    402 => "defense_light_laser",
    403 => "defense_heavy_laser",
    404 => "defense_gauss_cannon",
    405 => "defense_ion_cannon",
    406 => "defense_plasma_turret",
    407 => "defense_small_shield_dome",
    408 => "defense_large_shield_dome",
    502 => "defense_anti-ballistic_missile",
    503 => "defense_interplanetary_missile",
    601 => "premium_officier_commander",
    602 => "premium_officier_admiral",
    603 => "premium_officier_engineer",
    604 => "premium_officier_geologist",
    605 => "premium_officier_technocrat",
];

$requeriments = [
    12 => [3 => 5, 113 => 3],
    15 => [14 => 10, 108 => 10],
    21 => [14 => 2],
    33 => [15 => 1, 113 => 12],
    42 => [41 => 1],
    43 => [41 => 1, 114 => 7],
    44 => [21 => 1],
    106 => [31 => 3],
    108 => [31 => 1],
    109 => [31 => 4],
    110 => [31 => 6, 113 => 3],
    111 => [31 => 2],
    113 => [31 => 1],
    114 => [31 => 7, 113 => 5, 110 => 5],
    115 => [31 => 1, 113 => 1],
    117 => [31 => 2, 113 => 1],
    118 => [31 => 7, 114 => 3],
    120 => [31 => 1, 113 => 2],
    121 => [31 => 4, 113 => 4, 120 => 5],
    122 => [31 => 5, 113 => 8, 120 => 10, 121 => 5],
    123 => [31 => 10, 108 => 8, 114 => 8],
    124 => [31 => 3, 106 => 4, 117 => 3],
    199 => [31 => 12],
    202 => [21 => 2, 115 => 2],
    203 => [21 => 4, 115 => 6],
    204 => [21 => 1, 115 => 1],
    205 => [21 => 3, 111 => 2, 117 => 2],
    206 => [21 => 5, 117 => 4, 121 => 2],
    207 => [21 => 7, 118 => 4],
    208 => [21 => 4, 117 => 3],
    209 => [21 => 4, 115 => 6, 110 => 2],
    210 => [21 => 3, 115 => 3, 106 => 2],
    211 => [21 => 8, 117 => 6, 122 => 5],
    212 => [21 => 1],
    213 => [21 => 9, 114 => 5, 118 => 6],
    214 => [21 => 12, 114 => 6, 118 => 7, 199 => 1],
    215 => [21 => 8, 114 => 5, 118 => 5, 120 => 12],
    401 => [21 => 1],
    402 => [21 => 2, 113 => 1, 120 => 3],
    403 => [21 => 4, 113 => 3, 120 => 6],
    404 => [21 => 6, 113 => 6, 109 => 3, 110 => 1],
    405 => [21 => 4, 121 => 4],
    406 => [21 => 8, 122 => 7],
    407 => [21 => 1, 110 => 2],
    408 => [21 => 6, 110 => 6],
    502 => [21 => 1, 44 => 2],
    503 => [21 => 1, 44 => 4, 117 => 1],
];

$pricelist = [
    1 => ['metal' => 60, 'crystal' => 15, 'deuterium' => 0, 'energy' => 0, 'factor' => 3 / 2],
    2 => ['metal' => 48, 'crystal' => 24, 'deuterium' => 0, 'energy' => 0, 'factor' => 1.6],
    3 => ['metal' => 225, 'crystal' => 75, 'deuterium' => 0, 'energy' => 0, 'factor' => 3 / 2],
    4 => ['metal' => 75, 'crystal' => 30, 'deuterium' => 0, 'energy' => 0, 'factor' => 3 / 2],
    12 => ['metal' => 900, 'crystal' => 360, 'deuterium' => 180, 'energy' => 0, 'factor' => 1.8],
    14 => ['metal' => 400, 'crystal' => 120, 'deuterium' => 200, 'energy' => 0, 'factor' => 2],
    15 => ['metal' => 1000000, 'crystal' => 500000, 'deuterium' => 100000, 'energy' => 0, 'factor' => 2],
    21 => ['metal' => 400, 'crystal' => 200, 'deuterium' => 100, 'energy' => 0, 'factor' => 2],
    22 => ['metal' => 1000, 'crystal' => 0, 'deuterium' => 0, 'energy' => 0, 'factor' => 2],
    23 => ['metal' => 1000, 'crystal' => 500, 'deuterium' => 0, 'energy' => 0, 'factor' => 2],
    24 => ['metal' => 1000, 'crystal' => 1000, 'deuterium' => 0, 'energy' => 0, 'factor' => 2],
    31 => ['metal' => 200, 'crystal' => 400, 'deuterium' => 200, 'energy' => 0, 'factor' => 2],
    33 => ['metal' => 0, 'crystal' => 50000, 'deuterium' => 100000, 'energy_max' => 1000, 'factor' => 2],
    34 => ['metal' => 20000, 'crystal' => 40000, 'deuterium' => 0, 'energy' => 0, 'factor' => 2],
    41 => ['metal' => 20000, 'crystal' => 40000, 'deuterium' => 20000, 'energy' => 0, 'factor' => 2],
    42 => ['metal' => 20000, 'crystal' => 40000, 'deuterium' => 20000, 'energy' => 0, 'factor' => 2],
    43 => ['metal' => 2000000, 'crystal' => 4000000, 'deuterium' => 2000000, 'energy' => 0, 'factor' => 2],
    44 => ['metal' => 20000, 'crystal' => 20000, 'deuterium' => 1000, 'energy' => 0, 'factor' => 2],
    106 => ['metal' => 200, 'crystal' => 1000, 'deuterium' => 200, 'energy' => 0, 'factor' => 2],
    108 => ['metal' => 0, 'crystal' => 400, 'deuterium' => 600, 'energy' => 0, 'factor' => 2],
    109 => ['metal' => 800, 'crystal' => 200, 'deuterium' => 0, 'energy' => 0, 'factor' => 2],
    110 => ['metal' => 200, 'crystal' => 600, 'deuterium' => 0, 'energy' => 0, 'factor' => 2],
    111 => ['metal' => 1000, 'crystal' => 0, 'deuterium' => 0, 'energy' => 0, 'factor' => 2],
    113 => ['metal' => 0, 'crystal' => 800, 'deuterium' => 400, 'energy' => 0, 'factor' => 2],
    114 => ['metal' => 0, 'crystal' => 4000, 'deuterium' => 2000, 'energy' => 0, 'factor' => 2],
    115 => ['metal' => 400, 'crystal' => 0, 'deuterium' => 600, 'energy' => 0, 'factor' => 2],
    117 => ['metal' => 2000, 'crystal' => 4000, 'deuterium' => 600, 'energy' => 0, 'factor' => 2],
    118 => ['metal' => 10000, 'crystal' => 20000, 'deuterium' => 6000, 'energy' => 0, 'factor' => 2],
    120 => ['metal' => 200, 'crystal' => 100, 'deuterium' => 0, 'energy' => 0, 'factor' => 2],
    121 => ['metal' => 1000, 'crystal' => 300, 'deuterium' => 100, 'energy' => 0, 'factor' => 2],
    122 => ['metal' => 2000, 'crystal' => 4000, 'deuterium' => 1000, 'energy' => 0, 'factor' => 2],
    123 => ['metal' => 240000, 'crystal' => 400000, 'deuterium' => 160000, 'energy' => 0, 'factor' => 2],
    124 => ['metal' => 4000, 'crystal' => 8000, 'deuterium' => 4000, 'energy' => 0, 'factor' => 1.75],
    199 => ['metal' => 0, 'crystal' => 0, 'deuterium' => 0, 'energy_max' => 300000, 'factor' => 3],
    202 => ['metal' => 2000, 'crystal' => 2000, 'deuterium' => 0, 'energy' => 0, 'factor' => 1, 'consumption' => 10, 'consumption2' => 20, 'speed' => 5000, 'speed2' => 10000, 'capacity' => 5000],
    203 => ['metal' => 6000, 'crystal' => 6000, 'deuterium' => 0, 'energy' => 0, 'factor' => 1, 'consumption' => 50, 'consumption2' => 50, 'speed' => 7500, 'speed2' => 7500, 'capacity' => 25000],
    204 => ['metal' => 3000, 'crystal' => 1000, 'deuterium' => 0, 'energy' => 0, 'factor' => 1, 'consumption' => 20, 'consumption2' => 20, 'speed' => 12500, 'speed2' => 12500, 'capacity' => 50],
    205 => ['metal' => 6000, 'crystal' => 4000, 'deuterium' => 0, 'energy' => 0, 'factor' => 1, 'consumption' => 75, 'consumption2' => 75, 'speed' => 10000, 'speed2' => 10000, 'capacity' => 100],
    206 => ['metal' => 20000, 'crystal' => 7000, 'deuterium' => 2000, 'energy' => 0, 'factor' => 1, 'consumption' => 300, 'consumption2' => 300, 'speed' => 15000, 'speed2' => 15000, 'capacity' => 800],
    207 => ['metal' => 45000, 'crystal' => 15000, 'deuterium' => 0, 'energy' => 0, 'factor' => 1, 'consumption' => 500, 'consumption2' => 500, 'speed' => 10000, 'speed2' => 10000, 'capacity' => 1500],
    208 => ['metal' => 10000, 'crystal' => 20000, 'deuterium' => 10000, 'energy' => 0, 'factor' => 1, 'consumption' => 1000, 'consumption2' => 1000, 'speed' => 2500, 'speed2' => 2500, 'capacity' => 7500],
    209 => ['metal' => 10000, 'crystal' => 6000, 'deuterium' => 2000, 'energy' => 0, 'factor' => 1, 'consumption' => 300, 'consumption2' => 300, 'speed' => 2000, 'speed2' => 2000, 'capacity' => 20000],
    210 => ['metal' => 0, 'crystal' => 1000, 'deuterium' => 0, 'energy' => 0, 'factor' => 1, 'consumption' => 1, 'consumption2' => 1, 'speed' => 100000000, 'speed2' => 100000000, 'capacity' => 5],
    211 => ['metal' => 50000, 'crystal' => 25000, 'deuterium' => 15000, 'energy' => 0, 'factor' => 1, 'consumption' => 700, 'consumption2' => 700, 'speed' => 4000, 'speed2' => 5000, 'capacity' => 500],
    212 => ['metal' => 0, 'crystal' => 2000, 'deuterium' => 500, 'energy' => 0, 'factor' => 1, 'consumption' => 0, 'consumption2' => 0, 'speed' => 0, 'speed2' => 0, 'capacity' => 0],
    213 => ['metal' => 60000, 'crystal' => 50000, 'deuterium' => 15000, 'energy' => 0, 'factor' => 1, 'consumption' => 1000, 'consumption2' => 1000, 'speed' => 5000, 'speed2' => 5000, 'capacity' => 2000],
    214 => ['metal' => 5000000, 'crystal' => 4000000, 'deuterium' => 1000000, 'energy' => 0, 'factor' => 1, 'consumption' => 1, 'consumption2' => 1, 'speed' => 100, 'speed2' => 100, 'capacity' => 1000000],
    215 => ['metal' => 30000, 'crystal' => 40000, 'deuterium' => 15000, 'energy' => 0, 'factor' => 1, 'consumption' => 250, 'consumption2' => 250, 'speed' => 10000, 'speed2' => 10000, 'capacity' => 750],
    401 => ['metal' => 2000, 'crystal' => 0, 'deuterium' => 0, 'energy' => 0, 'factor' => 1],
    402 => ['metal' => 1500, 'crystal' => 500, 'deuterium' => 0, 'energy' => 0, 'factor' => 1],
    403 => ['metal' => 6000, 'crystal' => 2000, 'deuterium' => 0, 'energy' => 0, 'factor' => 1],
    404 => ['metal' => 20000, 'crystal' => 15000, 'deuterium' => 2000, 'energy' => 0, 'factor' => 1],
    405 => ['metal' => 2000, 'crystal' => 6000, 'deuterium' => 0, 'energy' => 0, 'factor' => 1],
    406 => ['metal' => 50000, 'crystal' => 50000, 'deuterium' => 30000, 'energy' => 0, 'factor' => 1],
    407 => ['metal' => 10000, 'crystal' => 10000, 'deuterium' => 0, 'energy' => 0, 'factor' => 1],
    408 => ['metal' => 50000, 'crystal' => 50000, 'deuterium' => 0, 'energy' => 0, 'factor' => 1],
    502 => ['metal' => 8000, 'crystal' => 0, 'deuterium' => 2000, 'energy' => 0, 'factor' => 1],
    503 => ['metal' => 12500, 'crystal' => 2500, 'deuterium' => 10000, 'energy' => 0, 'factor' => 1],
    601 => ['darkmatter_week' => 10000, 'darkmatter_month' => 100000, 'img_big' => 'commander_stern_gross', 'img_small' => 'commander_ikon'],
    602 => ['darkmatter_week' => 5000, 'darkmatter_month' => 50000, 'img_big' => 'ogame_admiral', 'img_small' => 'admiral_ikon'],
    603 => ['darkmatter_week' => 5000, 'darkmatter_month' => 50000, 'img_big' => 'ogame_ingenieur', 'img_small' => 'ingenieur_ikon'],
    604 => ['darkmatter_week' => 12500, 'darkmatter_month' => 125000, 'img_big' => 'ogame_geologe', 'img_small' => 'geologe_ikon'],
    605 => ['darkmatter_week' => 10000, 'darkmatter_month' => 100000, 'img_big' => 'ogame_technokrat', 'img_small' => 'technokrat_ikon'],
];

$CombatCaps = [
    202 => ['shield' => 10, 'attack' => 5, 'sd' => [202 => 0, 203 => 0, 204 => 0, 205 => 0, 206 => 0, 207 => 0, 208 => 0, 209 => 0, 210 => 5, 211 => 0, 212 => 5, 213 => 0, 214 => 0, 215 => 0, 401 => 0, 402 => 0, 403 => 0, 404 => 0, 405 => 0, 406 => 0, 407 => 0, 408 => 0]],
    203 => ['shield' => 25, 'attack' => 5, 'sd' => [202 => 0, 203 => 0, 204 => 0, 205 => 0, 206 => 0, 207 => 0, 208 => 0, 209 => 0, 210 => 5, 211 => 0, 212 => 5, 213 => 0, 214 => 0, 215 => 0, 401 => 0, 402 => 0, 403 => 0, 404 => 0, 405 => 0, 406 => 0, 407 => 0, 408 => 0]],
    204 => ['shield' => 10, 'attack' => 50, 'sd' => [202 => 0, 203 => 0, 204 => 0, 205 => 0, 206 => 0, 207 => 0, 208 => 0, 209 => 0, 210 => 5, 211 => 0, 212 => 5, 213 => 0, 214 => 0, 215 => 0, 401 => 0, 402 => 0, 403 => 0, 404 => 0, 405 => 0, 406 => 0, 407 => 0, 408 => 0]],
    205 => ['shield' => 25, 'attack' => 150, 'sd' => [202 => 3, 203 => 0, 204 => 0, 205 => 0, 206 => 0, 207 => 0, 208 => 0, 209 => 0, 210 => 5, 211 => 0, 212 => 5, 213 => 0, 214 => 0, 215 => 0, 401 => 0, 402 => 0, 403 => 0, 404 => 0, 405 => 0, 406 => 0, 407 => 0, 408 => 0]],
    206 => ['shield' => 50, 'attack' => 400, 'sd' => [202 => 0, 203 => 0, 204 => 6, 205 => 0, 206 => 0, 207 => 0, 208 => 0, 209 => 0, 210 => 5, 211 => 0, 212 => 5, 213 => 0, 214 => 0, 215 => 0, 401 => 10, 402 => 0, 403 => 0, 404 => 0, 405 => 0, 406 => 0, 407 => 0, 408 => 0]],
    207 => ['shield' => 200, 'attack' => 1000, 'sd' => [202 => 0, 203 => 0, 204 => 0, 205 => 0, 206 => 0, 207 => 0, 208 => 0, 209 => 0, 210 => 5, 211 => 0, 212 => 5, 213 => 0, 214 => 0, 215 => 0, 401 => 0, 402 => 0, 403 => 0, 404 => 0, 405 => 0, 406 => 0, 407 => 0, 408 => 0]],
    208 => ['shield' => 100, 'attack' => 50, 'sd' => [202 => 0, 203 => 0, 204 => 0, 205 => 0, 206 => 0, 207 => 0, 208 => 0, 209 => 0, 210 => 5, 211 => 0, 212 => 5, 213 => 0, 214 => 0, 215 => 0, 401 => 0, 402 => 0, 403 => 0, 404 => 0, 405 => 0, 406 => 0, 407 => 0, 408 => 0]],
    209 => ['shield' => 10, 'attack' => 1, 'sd' => [202 => 0, 203 => 0, 204 => 0, 205 => 0, 206 => 0, 207 => 0, 208 => 0, 209 => 0, 210 => 5, 211 => 0, 212 => 5, 213 => 0, 214 => 0, 215 => 0, 401 => 0, 402 => 0, 403 => 0, 404 => 0, 405 => 0, 406 => 0, 407 => 0, 408 => 0]],
    210 => ['shield' => 0.01, 'attack' => 0.01, 'sd' => [202 => 0, 203 => 0, 204 => 0, 205 => 0, 206 => 0, 207 => 0, 208 => 0, 209 => 0, 210 => 0, 211 => 0, 212 => 0, 213 => 0, 214 => 0, 215 => 0, 401 => 0, 402 => 0, 403 => 0, 404 => 0, 405 => 0, 406 => 0, 407 => 0, 408 => 0]],
    211 => ['shield' => 500, 'attack' => 1000, 'sd' => [202 => 0, 203 => 0, 204 => 0, 205 => 0, 206 => 0, 207 => 0, 208 => 0, 209 => 0, 210 => 5, 211 => 0, 212 => 5, 213 => 0, 214 => 0, 215 => 0, 401 => 20, 402 => 20, 403 => 10, 404 => 5, 405 => 10, 406 => 5, 407 => 0, 408 => 0]],
    212 => ['shield' => 1, 'attack' => 1, 'sd' => [202 => 0, 203 => 0, 204 => 0, 205 => 0, 206 => 0, 207 => 0, 208 => 0, 209 => 0, 210 => 1, 211 => 0, 212 => 0, 213 => 0, 214 => 0, 215 => 0, 401 => 0, 402 => 0, 403 => 0, 404 => 0, 405 => 0, 406 => 0, 407 => 0, 408 => 0]],
    213 => ['shield' => 500, 'attack' => 2000, 'sd' => [202 => 0, 203 => 0, 204 => 0, 205 => 0, 206 => 0, 207 => 0, 208 => 0, 209 => 0, 210 => 5, 211 => 0, 212 => 5, 213 => 0, 214 => 0, 215 => 2, 401 => 0, 402 => 10, 403 => 0, 404 => 0, 405 => 0, 406 => 0, 407 => 0, 408 => 0]],
    214 => ['shield' => 50000, 'attack' => 200000, 'sd' => [202 => 250, 203 => 250, 204 => 200, 205 => 100, 206 => 33, 207 => 30, 208 => 250, 209 => 250, 210 => 1250, 211 => 25, 212 => 1250, 213 => 5, 214 => 0, 215 => 15, 401 => 200, 402 => 200, 403 => 100, 404 => 50, 405 => 100, 406 => 0, 407 => 0, 408 => 0]],
    215 => ['shield' => 400, 'attack' => 700, 'sd' => [202 => 3, 203 => 3, 204 => 0, 205 => 4, 206 => 4, 207 => 7, 208 => 0, 209 => 0, 210 => 5, 211 => 0, 212 => 5, 213 => 0, 214 => 0, 215 => 0, 401 => 0, 402 => 0, 403 => 0, 404 => 0, 405 => 0, 406 => 0, 407 => 0, 408 => 0]],
    401 => ['shield' => 20, 'attack' => 80, 'sd' => [202 => 0, 203 => 0, 204 => 0, 205 => 0, 206 => 0, 207 => 0, 208 => 0, 209 => 0, 210 => 0, 211 => 0, 212 => 0, 213 => 0, 214 => 0, 215 => 0]],
    402 => ['shield' => 25, 'attack' => 100, 'sd' => [202 => 0, 203 => 0, 204 => 0, 205 => 0, 206 => 0, 207 => 0, 208 => 0, 209 => 0, 210 => 0, 211 => 0, 212 => 0, 213 => 0, 214 => 0, 215 => 0]],
    403 => ['shield' => 100, 'attack' => 250, 'sd' => [202 => 0, 203 => 0, 204 => 0, 205 => 0, 206 => 0, 207 => 0, 208 => 0, 209 => 0, 210 => 0, 211 => 0, 212 => 0, 213 => 0, 214 => 0, 215 => 0]],
    404 => ['shield' => 200, 'attack' => 1100, 'sd' => [202 => 0, 203 => 0, 204 => 0, 205 => 0, 206 => 0, 207 => 0, 208 => 0, 209 => 0, 210 => 0, 211 => 0, 212 => 0, 213 => 0, 214 => 0, 215 => 0]],
    405 => ['shield' => 500, 'attack' => 150, 'sd' => [202 => 0, 203 => 0, 204 => 0, 205 => 0, 206 => 0, 207 => 0, 208 => 0, 209 => 0, 210 => 0, 211 => 0, 212 => 0, 213 => 0, 214 => 0, 215 => 0]],
    406 => ['shield' => 300, 'attack' => 3000, 'sd' => [202 => 0, 203 => 0, 204 => 0, 205 => 0, 206 => 0, 207 => 0, 208 => 0, 209 => 0, 210 => 0, 211 => 0, 212 => 0, 213 => 0, 214 => 0, 215 => 0]],
    407 => ['shield' => 2000, 'attack' => 1, 'sd' => [202 => 0, 203 => 0, 204 => 0, 205 => 0, 206 => 0, 207 => 0, 208 => 0, 209 => 0, 210 => 0, 211 => 0, 212 => 0, 213 => 0, 214 => 0, 215 => 0]],
    408 => ['shield' => 10000, 'attack' => 1, 'sd' => [202 => 0, 203 => 0, 204 => 0, 205 => 0, 206 => 0, 207 => 0, 208 => 0, 209 => 0, 210 => 0, 211 => 0, 212 => 0, 213 => 0, 214 => 0, 215 => 0]],
    502 => ['shield' => 1, 'attack' => 1],
    503 => ['shield' => 1, 'attack' => 12000],
];

$ProdGrid = [
    1 => ['metal' => 40, 'crystal' => 10, 'deuterium' => 0, 'energy' => 0, 'factor' => 3 / 2,
        'formule' => [
            'metal' => 'return   (30 * $BuildLevel * pow((1.1), $BuildLevel)) * (0.1 * $BuildLevelFactor);',
            'crystal' => 'return   "0";',
            'deuterium' => 'return   "0";',
            'energy' => 'return - (10 * $BuildLevel * pow((1.1), $BuildLevel)) * (0.1 * $BuildLevelFactor);'],
    ],
    2 => ['metal' => 30, 'crystal' => 15, 'deuterium' => 0, 'energy' => 0, 'factor' => 1.6,
        'formule' => [
            'metal' => 'return   "0";',
            'crystal' => 'return   (20 * $BuildLevel * pow((1.1), $BuildLevel)) * (0.1 * $BuildLevelFactor);',
            'deuterium' => 'return   "0";',
            'energy' => 'return - (10 * $BuildLevel * pow((1.1), $BuildLevel)) * (0.1 * $BuildLevelFactor);'],
    ],
    3 => ['metal' => 150, 'crystal' => 50, 'deuterium' => 0, 'energy' => 0, 'factor' => 3 / 2,
        'formule' => [
            'metal' => 'return   "0";',
            'crystal' => 'return   "0";',
            'deuterium' => 'return  ((10 * $BuildLevel * pow((1.1), $BuildLevel)) * (1.44 - 0.004 * $BuildTemp))  * (0.1 * $BuildLevelFactor);',
            'energy' => 'return - floor(20 * $BuildLevel * pow((1.1), $BuildLevel)) * (0.1 * $BuildLevelFactor);'],
    ],
    4 => ['metal' => 50, 'crystal' => 20, 'deuterium' => 0, 'energy' => 0, 'factor' => 3 / 2,
        'formule' => [
            'metal' => 'return   "0";',
            'crystal' => 'return   "0";',
            'deuterium' => 'return   "0";',
            'energy' => 'return   (20 * $BuildLevel * pow((1.1), $BuildLevel)) * (0.1 * $BuildLevelFactor);'],
    ],
    12 => ['metal' => 500, 'crystal' => 200, 'deuterium' => 100, 'energy' => 0, 'factor' => 1.8,
        'formule' => [
            'metal' => 'return   "0";',
            'crystal' => 'return   "0";',
            'deuterium' => 'return - (10 * $BuildLevel * pow(1.1,$BuildLevel) * (0.1 * $BuildLevelFactor));',
            'energy' => 'return   (30 * $BuildLevel * pow((1.05 + $BuildEnergy * 0.01), $BuildLevel)) * (0.1 * $BuildLevelFactor);'],
    ],
    212 => ['metal' => 0, 'crystal' => 2000, 'deuterium' => 500, 'energy' => 0, 'factor' => 0.5,
        'formule' => [
            'metal' => 'return   "0";',
            'crystal' => 'return   "0";',
            'deuterium' => 'return   "0";',
            'energy' => 'return  ((($BuildTemp + 140) / 6) * (0.1 * $BuildLevelFactor) * $BuildLevel);'],
    ],
];

// new ogame
$reslist['resources'] = [1, 2, 3, 4, 12, 22, 23, 24];
$reslist['facilities'] = [14, 15, 21, 31, 33, 34, 41, 42, 43, 44];
$reslist['defenses'] = [401, 402, 403, 404, 405, 406, 407, 408];
$reslist['missiles'] = [502, 503];

// old ogame
$reslist['build'] = [1, 2, 3, 4, 12, 14, 15, 21, 22, 23, 24, 31, 33, 34, 41, 42, 43, 44];
$reslist['tech'] = [106, 108, 109, 110, 111, 113, 114, 115, 117, 118, 120, 121, 122, 123, 124, 199];
$reslist['fleet'] = [202, 203, 204, 205, 206, 207, 208, 209, 210, 211, 212, 213, 214, 215];
$reslist['defense'] = [401, 402, 403, 404, 405, 406, 407, 408, 502, 503];
$reslist['officier'] = [601, 602, 603, 604, 605];
$reslist['prod'] = [1, 2, 3, 4, 12, 212];

/* end of objects_collection.php */
