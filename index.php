<?php
// $a = 10;
// $b = 11;
// if ($a < ++$a || $b < ++$b)
//     print "hello";
// else
//     print "hi";
print rand(1, 10);
for ($i = 0; $i < 3; $i++)
{
    for($j = $i; $j > 0; $j--)
        print " ";
    for($k = $j; $k < 3; $k++)
        print "*";
	print "\n";
}
