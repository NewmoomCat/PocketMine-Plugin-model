<?php
$phar=new Phar("MenuCat.phar");
$phar->buildFromDirectory("plugins/MenuCat");
$phar->setStub($phar->createDefaultStub('mian.php'));
$phar->stopBuffering();