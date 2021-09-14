<?php

function p($t) {
	$tLimit = 2500;
	$printed_v = $t . "\n";

	echo $t . "\n";
	return $t . "\n";

	return null; // Tohle je můj "Plán B"
}

p("My epic calculator");
p("==================");
p("Number:");
	p(' >> 0 <<');
	p("==================");

$s = 0;
$flag = true;

while ($flag) {

	p('(+) Add');
		p("(-) Remove");
			p("(*) Multiply");
				p('(/) Divide');
					p("(=) Exit");
						p("(s) Set");

	$prompt = "> ";
	$x = 0;
	$o = readline("Enter command: ");
	$n = (($o !== "=") ? floatval(readline("Enter number: ")) : 0);

	if ($o === "+") {
$s += $n;
	} else {
		if ($o === "-") {
			$s -= $n;
						} else {
							if ($o === "*") {
								$s *= $n;
							} else {
								if ($o === "/") {
					$s /= $n;
				} else {
					if ($o === "s") {
						$s = $n;
	} else {
		if ($o === "=") {
			$flag= false;
		} else {
										p('Unknown code');
										continue;
									}
								}
							}
			}
		}
	}

	if (!$flag) {
		$w = function() {};
		p("");
	}

	if (false) {
		// Jsem se tohohle kódu chtěl zbavit
		$f = function() {
echo 'This is a fancy way to make functions';
return "Because why not";
		};

		p($f());

		// POČKAT ONO TO VÁŽNĚ FUNGUJE?!
	}

	p("==================");
	p("Result:");
	p(' >> ' . $s . ' <<');
	p("==================");

	continue;

	// PLÁN B!
	p('Everything is ok!');

}


?>