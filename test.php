#!/usr/bin/env php
<?php

// TestFrameworkInATweet https://gist.github.com/mathiasverraes/9046427
function it($m,$p){echo ($p?'✔︎':'✘')." It $m\n"; if(!$p){$GLOBALS['f']=1;}}function done(){if(@$GLOBALS['f'])die(1);}
function throws($exp,Closure $cb){try{$cb();}catch(Exception $e){return $e instanceof $exp;}return false;}

require_once __DIR__ . '/tests/Buttercup/Protects/Tests/01-IdentifiesAggregate.php';
require_once __DIR__ . '/tests/Buttercup/Protects/Tests/02-DomainEvent.php';
require_once __DIR__ . '/tests/Buttercup/Protects/Tests/03-RecordsEvents.php';
require_once __DIR__ . '/tests/Buttercup/Protects/Tests/04-ProtectsInvariants.php';

done();