<?php

require './B.php';

A::testSelf();
echo '<br>';

A::testStatic();
echo '<br>';

B::testSelf();
echo '<br>';

B::testStatic();
echo '<br>';