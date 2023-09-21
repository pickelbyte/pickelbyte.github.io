<?php

/*

https://q.appnaz.com/code/makeSimilar.php?cat=Sports&num=30

https://3kh0.co/code/createListHtml.php?cat=String3

https://v.appnaz.com/nhap/createListHtml.php?cat=String1

cd /var/www/3kh0.co/html/code;
php makeRequest.php


*/



$Popular="

	retro-bowl, drive-mad, g-switch-3, tunnel-rush, temple-run-2, stickman-hook, raft-wars, stick-merge, temple-of-boom, dreadhead-parkour, blumgi-rocket, monster-tracks, sausage-flip, stick-defenders, stacktris, blumgi-ball, gobble, blumgi-slime, brain-test-tricky-puzzles, soccer-skills-world-cup, basketball-stars, tiny-fishing, smash-karts, moto-x3m, moto-x3m-2, moto-x3m-winter, getaway-shootout, the-impossible-quiz, rooftop-snipers, we-become-what-we-behold, house-of-hazards, master-chess, football-legends, rocket-soccer-derby, n-gon, big-shot-boxing, football-masters, murder, idle-digging-tycoon, city-car-driving-stunt-master, top-speed-3d, gold-digger-frvr, idle-lumber-inc, tiger-simulator-3d, soccer-skills-champions-league, eugenes-life, stickman-bike, who-is, pop-it-master, merge-cyber-racers, crazy-cars, penalty-shooters-2, idle-ants, tag, water-color-sort, swingo, jumping-shell, chicken-merge, stickman-climb-2, battle-wheels, escaping-the-prison, stack, subway-surfers-newyork, merge-round-racers, masked-forces, moto-road-rash-3d, top-speed-racing-3d, 8-ball-pool, drift-hunters, madalin-stunt-cars-2, red-ball-4

";




$String2="
retro-bowl, drive-mad, g-switch-3, tunnel-rush, temple-run-2, stickman-hook, raft-wars-2, eggy-car, stick-merge, temple-of-boom, dreadhead-parkour, blumgi-rocket, monster-tracks, sausage-flip, stick-defenders, stacktris, blumgi-ball, gobble, blumgi-slime, brain-test-tricky-puzzles, soccer-skills-world-cup, burger-bounty, stickman-climb-2, blumgi-castle, thumb-fighter-christmas, soccer-skills-euro-cup, subway-surfers-beijing, subway-surfers-newyork, subway-surfers-monaco, slope

";


//Running

$Running="

	subway-surfers, subway-surfers-bejing, subway-surfers-newyork, subway-surfers-houston, g-switch-3, temple-run-2, slope, geometry-dash, dinosaur-game, electron-dash, cluster-rush, death-run-3d, slope-city, color-tunnel-2, running-fred, crazy-tunnel-3d, two-ball-3d-dark, tag, athletics-hero, stickman-school-run, slope-2-multiplayer, subway-runner, shortcut-race, run-3-editor, subway-surfers-beijing, tetris-flash

";

//Skill

$Skill="

	crossy-road, tunnel-rush, temple-run-2, doodle-jump, monster-tracks, sausage-flip, stacktris,  dinosaur-game, duck-life-4, house-of-hazards, stack, worlds-hardest-game-2, jelly-truck, parking-fury, short-life, color-switch, duck-life-3-evolution, worlds-hardest-game-3, candy-jump, tomb-of-the-mask, parking-fury-2, bunny-hop, sketchbook-04, murder, running-fred, flying-car-simulator, icy-purple-head-3, tag, swingo, stickman-climb-2, tower-of-destiny, blumgi-castle, bubble-trouble, superbattle-2, bubble-trouble-3, tube-jumpers, basketball-line, bowling-stars, jollyworld, cannon-strike, golf-champions, neon-war,  noob-drive, moto-maniac, stickman-bridge-constructor, fancy-pants-2, perfect-peel, puppet-master, arithmetica, soccer-skills-euro-cup, stupid-zombies, impossible-tic-tac-toe

";



//Racing

$Racing="

	moto-x3m-2, moto-x3m-winter, moto-x3m-spooky-land, moto-road-rash-3d, drift-boss, car-rush, earn-to-die, doodle-champion-island, snow-rider-3d, top-speed-racing-3d, death-chase, adventure-drivers, hover-racer, parking-fury-2, stunt-car-challenge-3, cyber-cars-punk-racing, merge-cyber-racers, 3d-moto-simulator-2, bike-trials-winter-2, super-star-car, burnin-rubber-crash-n-burn, rally-champion, super-tunnel-rush, cars-thief,  super-bike-the-champion, grand-prix-hero, my-pony-my-little-race, superbike-hero, super-racing-gt-drag-pro, mad-day, monsters-wheels-special, real-simulator-monster-truck, mad-truck-challenge-special, blocky-trials, tricks, car-climb-racing, city-bike-stunt-2, extreme-car-driving-simulator, speed-boat-extreme-racing, traffic-rider

";

//Car

$Car="

	drift-hunters, scrap-metal, car-rush, parking-fury, earn-to-die, doodle-champion-island, rocket-soccer-derby, draw-the-hill, top-speed-racing-3d, death-chase, merge-round-racers, evo-city-driving, madalin-stunt-cars-2, madalin-stunt-cars-3, parking-fury-2, top-speed-3d, stunt-car-challenge-3, merge-cyber-racers, crazy-cars, flying-car-simulator, demolition-derby-crash-racing, 3d-car-simulator,  real-cars-in-city, super-star-car, burnin-rubber-crash-n-burn, rally-champion, cats, battle-wheels, super-tunnel-rush, burnin-rubber-5-xs,   stock-car-hero, grand-prix-hero,  mad-day, real-simulator-monster-truck, burnout-drift-seaport-max, mad-truck-challenge-special,  school-bus-demolition-derby, brain-for-monster-truck,  cars-thief-tank-edition, zombie-derby-pixel-survival, offroader-v5, blocky-cars, tinytownracing, city-rider, soccar, 4x4-drive-offroad, furious-racing-3d, real-city-driving-2, rocket-pult

";










/*-----------------------------------------------------------*/








$Sports='
retro-bowl, dreadhead-parkour, blumgi-ball, tiny-fishing, basket-bros, tanuki-sunset, football-legends, n-gon, big-shot-boxing, football-masters, stickman-bike, cyber-cars-punk-racing, crazy-cars, basket-and-ball, head-soccer-2023, real-cars-in-city, tag, wrassling, tennis-masters, skiing-fred, dunkbrush, linebacker-alley-2, cricket-world-cup, pool-club, ping-pong-html5, a-small-world-cup, free-kick-shooter, air-hockey-championship-deluxe, kix-dream-soccer, unicycle-hero, stock-car-hero, super-bike-the-champion, aqua-thrills, grand-prix-hero, stickman-school-run, stickman-bike-pr, gravity-soccer, heads-arena-soccer-all-stars, power-badminton, foot-chinko, rowdy-city-wrestling, jollyworld, superbike-hero, street-ball-jam, golf-champions, stickman-boxing-ko-champion, tinytownracing, city-rider, soccer-skills-euro-cup, soccar, volleyball-challenge, volley-random
';

$Idle='
stick-merge, cookie-clicker, tiny-fishing, idle-breakout, idle-miner, merge-round-racers, idle-digging-tycoon, idle-lumber-inc, merge-cyber-racers, merge-cakes, idle-mining-empire, idle-ants, burger-bounty, puppet-master, idle-startup-tycoon, grindcraft-remastered
';


$Running='
subway-surfers, subway-surfers-bejing, subway-surfers-newyork, subway-surfers-houston, subway-surfers-monaco, crossy-road, g-switch-3, temple-run-2, slope, geometry-dash, dinosaur-game, slope-3, electron-dash, cluster-rush, death-run-3d, slope-city, slope-tunnel, slope-2, color-tunnel-2, running-fred, crazy-tunnel-3d, two-ball-3d-dark, tag, athletics-hero, stickman-school-run, slope-2-multiplayer, subway-runner, shortcut-race, run-3-editor, subway-surfers-beijing, super-mario-bros
';

$Puzzle='
brain-test-3-tricky-quests, brain-test-tricky-puzzles, 2048,  minesweeper, among-us, wordle-unlimited, cat-trap, there-is-no-game, big-tall-small, riddle-school, factory-balls-forever, block-the-pig, who-is, pop-it-master, super-hexbee-merger, marble-dash, icy-purple-head-3, maze-path-of-light, water-color-sort, roly-poly-monsters, brain-for-monster-truck, detective-loupe-puzzle, free-the-key, word-city-crossed, plactions, mosaic-puzzle-art, word-city-uncrossed, heart-star-html5, panda-bubble-shooter, arithmetica, recoil, energy, infinity-loop, cubes-king, impossible-tic-tac-toe, 2048-multitask, maze-planet-3d, tetris-flash, super-santa-kicker
';

$Stickman='

stickman-hook, stick-merge, stick-defenders, vex-5, fancy-pants, vex-7, vex-4, stickman-ragdoll-crash-fun, the-spear-stickman, stickman-fighter-mega-brawl, stick-fighter, stickman-climb-2, unicycle-hero, stickman-school-run, stickman-bike-pr, stickman-army-team-battle, stickman-fighter-epic-battle-2, stickman-boxing-ko-champion, stickman-bridge-constructor, fancy-pants-3, fancy-pants-2, stickman-army-the-resistance, escaping-the-prison, fleeing-the-complex, breaking-the-bank, stealing-the-diamond,  vex-6, paper-fighter-3d, shoot-stickman
';

$Moto='
moto-x3m-2, moto-x3m-winter, moto-x3m-spooky-land, moto-x3m-pool-party, moto-road-rash-3d, 3d-moto-simulator-2, bike-trials-winter-2, moto-trial-racing-2, super-bike-the-champion, stickman-bike-pr, jollyworld, superbike-hero, blocky-trials, bike-trials-winter-1, tricks, moto-maniac, moto-maniac-2, bike-trials-offroad-1
';


$Adventure='
temple-run-2, temple-of-boom, eggy-car, duck-life, duck-life-4, rooftop-snipers, super-mario-64, we-become-what-we-behold, vex-5, fancy-pants, deepest-sword, there-is-no-game, vex-7, iron-snout, short-life, adventure-drivers, duck-life-2-world-champion, duck-life-3-evolution, vex-4, short-ride, murder, gold-digger-frvr, eugenes-life, merge-harvest, cats, raft-wars-multiplayer, tube-jumpers,  aqua-thrills, detective-loupe-puzzle, fancy-pants-3, fancy-pants-2, cat-gunner-super-zombie-shoot, life-the-game, escaping-the-prison, fleeing-the-complex, breaking-the-bank, stealing-the-diamond,  vex-6
';


$twoPlayer='g-switch-3, tunnel-rush, temple-of-boom, blumgi-slime, basketball-stars, getaway-shootout, rooftop-snipers, basket-bros, house-of-hazards, master-chess, football-legends, soccer-random, gun-mayhem-2, iron-snout, poor-bunny, football-masters, cyber-cars-punk-racing, crazy-cars, go-kart-go-ultra, head-soccer-2023, two-ball-3d-dark, real-cars-in-city, stick-fighter, tag, thumb-fighter, stickman-climb-2, battle-wheels, tictactoe, minibattles, fortz, wrassling, tennis-masters, ludo-multiplayer, squish-run, bumper-cars-soccer, blumgi-castle, 3d-arena-racing, rowdy-wrestling, bearsus, bubble-trouble, dunkers, boxing-physics-2, moto-trial-racing-2, superbattle-2, thumb-fighter-christmas, bubble-trouble-3, tube-jumpers, rooftop-snipers-2,  tank-trouble-2, heads-arena-soccer-all-stars, striker-dummies, basket-swooshes, heart-star-html5, 12-minibattles, two-neon-boxes, volleyball-challenge, volley-random, paper-fighter-3d';
$threeD='
drive-mad, temple-run-2, monster-tracks,  smash-karts, drift-boss, super-mario-64, tanuki-sunset, bullet-force, curve-ball-3d, a-dance-of-fire-and-ice, slope-3, parking-fury, masked-forces, cluster-rush, funny-shooter-2, stack-ball, snow-rider-3d, slope-city, slope-tunnel, turbo-moto-racer, highway-rider-extreme, slope-2, madalin-stunt-cars-2, madalin-stunt-cars-3, parking-fury-2, idle-digging-tycoon, idle-lumber-inc, tiger-simulator-3d, soccer-skills-champions-league, cyber-cars-punk-racing, crazy-cars, 3d-moto-simulator-2, running-fred, flying-car-simulator, 3d-car-simulator, crazy-tunnel-3d, stair-race-3d, highway-racer-3d, real-cars-in-city, super-liquid-soccer, super-star-car, idle-ants, burnin-rubber-crash-n-burn, burger-bounty,  super-tunnel-rush, cars-thief, skiing-fred, bumper-cars-soccer, free-kick-shooter, stock-car-hero, athletics-hero, super-bike-the-champion, bowling-stars, aqua-thrills, grand-prix-hero, superbike-hero, golf-champions, real-simulator-monster-truck, school-bus-demolition-derby, tricks, pixwars-2, perfect-peel, zombie-derby-pixel-survival, hammer-2-reloaded, striker-dummies, puppet-master, offroader-v5, horse-simulator-3d, panda-simulator-3d, blocky-cars, horse-shoeing, deer-simulator, tinytownracing, city-rider, soccer-skills-euro-cup, hover-racer-drive, stack-bump-3d
';
$Multiplayer='
g-switch-3, temple-of-boom,  basketball-stars, smash-karts, getaway-shootout, rooftop-snipers, bullet-force, house-of-hazards, paper-io-2, iron-snout, masked-forces, leader-strike, pixel-gun-survival, soccer-skills-champions-league, cyber-cars-punk-racing, stick-fighter, thumb-fighter, stickman-climb-2,  raft-wars-multiplayer, tictactoe, minibattles, fortz, wrassling, bumper-cars-soccer,  bearsus, dunkers, superbattle-2, thumb-fighter-christmas, rooftop-snipers-2, heads-arena-soccer-all-stars, power-badminton, pixwars-2, toon-off, blocky-cars, basket-swooshes, 12-minibattles, soccer-skills-euro-cup';


$Shooting='
raft-wars-2, raft-wars, stick-merge, 1v1lol, getaway-shootout, rooftop-snipers, jetpack-joyride, bullet-force, masked-forces, gunspin, funny-shooter-2, orbital-survival, leader-strike, pixel-gun-survival, cubito-mayhem, archery-world-tour, gun-mayhem, wizard-mike, drunken-duel, raft-wars-multiplayer, rusher-crusher, bubble-trouble, bubble-trouble-3, rooftop-snipers-2, pixwars-2, zombie-derby-pixel-survival, hammer-2-reloaded, puppet-master, blocky-cars, cat-gunner-super-zombie-shoot, recoil, stupid-zombies, gun-mayhem-3, sniper-gun-shooting, shoot-stickman
';


$New="
drive-mad, dreadhead-parkour, blumgi-rocket, monster-tracks, sausage-flip, stacktris, blumgi-ball, blumgi-slime, we-become-what-we-behold, football-legends, poor-bunny, idle-digging-tycoon, soccer-skills-champions-league, eugenes-life, who-is, pop-it-master, cyber-cars-punk-racing, crazy-cars, idle-mining-empire, real-cars-in-city, super-liquid-soccer, stick-fighter, super-star-car, idle-ants, burnin-rubber-crash-n-burn, maze-path-of-light, water-color-sort, jumping-shell, fairy-dressup, roly-poly-monsters, chicken-merge, rally-champion, stickman-climb-2, tennis-masters, super-tunnel-rush, blumgi-castle, bearsus, bubble-trouble, superbattle-2, pool-club, ping-pong-html5, 4th-and-goal-2022, athletics-hero, super-bike-the-champion, street-ball-jam, noob-drive, detective-loupe-puzzle, fancy-pants-3, fancy-pants-2, blocky-cars, wood-blocks-3d, plactions, where-is-my-cat, panda-bubble-shooter, tinytownracing, arithmetica, cat-gunner-super-zombie-shoot, golfinity, idle-startup-tycoon
";

$Random="
subway-surfers, monster-tracks, blumgi-slime, brain-test-tricky-puzzles, slope, scrap-metal, paper-io-2, soccer-random, awesome-tanks-2, electron-dash, short-life, masked-forces, football-masters, madalin-stunt-cars-2, vex-4, gold-digger-frvr, extreme-car-parking, basket-and-ball, highway-racer-3d, tag, wrassling, rusher-crusher, boxing-physics-2, basketball-line, stickman-bike-pr, monsters-wheels-special, real-simulator-monster-truck, school-bus-demolition-derby, blocky-cars, 2048-multitask
";


$String3="
drive-mad	,
stickman-hook	,
tomb-of-the-mask	,
monkey-mart	,
basketball-stars	,
cluster-rush	,
madalin-stunt-cars-2	,
slope	,
scrap-metal	,
1v1-lol	,
cookie-clicker	,
retro-bowl	,
temple-run-2	,
tetris-flash	,
subway-surfers	,
smash-karts	,
2048	,
geometry-dash	,
flappy-bird	,
soccer-random	,
paper-io-2	,
the-impossible-quiz	,
death-run-3d	,
slope-2	,
among-us	,
crossy-road	,
bloons-tower-defense-1	,
madalin-stunt-cars-3	,
worlds-hardest-game-2	,
soccer-skills-world-cup	,
getaway-shootout	,
doodle-jump	,
draw-the-hill	,
moto-x3m	,
rooftop-snipers	,
doge-miner	,
n-gon	,
jetpack-joyride	,
moto-x3m-2	,
10-minutes-till-dawn	,
minecraft-1.5.2	,
chrome-dino	,
tunnel-rush	,
vex-6	,
bloxorz	,
elastic-man	,
duck-life-3-evolution	,
there-is-no-game	,
super-mario-bros	,
moto-x3m-pool-party	,
stack	
";




$allGameString=$Running.', '.$Skill.', '.$Racing.', '.$Car.', '.$Popular.', '.$Stickman.', '.$Moto.', '.$Adventure.', '.$Puzzle.', '.$twoPlayer.', '.$threeD.', '.$Idle.', '.$Sports.', '.$Multiplayer.', '.$Shooting.', '.$String1.', '.$String2.', '.$String3;

$allGameString='flappy-bird';



/*




*/

?>