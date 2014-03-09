<?php 
/**
* This is a kodex pagecontroller.
*
*/
 
// Include the essential config-file which also creates the $kodex variable with its defaults.
include(__DIR__.'/config.php');

$cmenu = new CNavigation();
$kodex['navigation'] = CNavigation::GenerateMenu($kodex['menu']);

// Do it and store it all in variables in the kodex container.
$kodex['title'] = "Kodex | Förstasidan!";



$kodex['main'] = <<<EOD

<h1><span class="icon-home"></span> Min hemsida på BTU</h1>
<article>

	<p>
	
	Hej! Jag heter Åsa. Jag jobbar med webbprogrammering och i viss mån även med webbdesign. Jag har pysslat med datorer sedan jag var liten. Då hade vi en Atari. På Atari programmerade jag i BASIC (Beginner's All-purpose Symbolic Instruction Code). Jag gjorde då små textbaserade äventyrsspel. De kunde se ut så här
	</p>

	<blockquote>
	Du står framför två dörrar. Den ena är blå och den andra är röd. Väljer du den blå dörren?<br/>
	-Ja<br/>
	-Nej
	</blockquote>
	<p>
	När internet kom så blev jag intresserad av webbutveckling. Jag började jobba som HTML-kodare 1998. Mellan 2003 och 2011 tog jag ett avbrott från webbutvecklingen och pluggade sociologi, kriminologi m.m. på universitetet. Nu driver jag sedan sommaren 2012 enskild firma huvudsakligen inriktad på utveckling av hemsidor med WordPress.
	</p>
	<p>
	Jag är mestadels självlärd. När man jobbar på kundprojekt finns sällan tid att förkovra sig i detaljer eller ändra dåliga vanor. Därför har jag avsatt tid för att göra det på den här kursen under våren!
	</p>
	<p>
	Den tid som blir kvar ägnar jag mest åt min hund Pirre. Jag tycker också om att spela dataspel, företrädesvis FPS (First Person Shooter) och MMORPG (Massively Multiplayer Online Role Playing Games). Är även intresserad av fotografi och olika typer av hantverk t.ex. stickning och virkning, sömnad och bygga möbler.
	</p>
	<p>
	Jag tycker att htdocs är ett vackrare ord än public_html. :)
	</p>
</article>

EOD;

// Finally, leave it all to the rendering phase of kodex.
include(kodex_THEME_PATH);
