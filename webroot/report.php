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

<h1><span class="icon-pencil"></span>Redovisningar</h1>
<article>
	<h2>Kmom01: Kom igång med programmering i PHP</h2>
	
<p>
Php short tags (från guiden ”20 steg för att komma igång med PHP”) funkar inte i lokala miljö. Detta för att short tags inte är påslaget i min php.ini. Det vore ju trevligt att kunna skriva kortare, särskilt där mycket php blandas med html. Dock har jag valt att inte slå på det. I princip all kod jag skriver måste gå att överföra mellan olika utvecklingsmiljöer och i många fall har man inte tillgång till php.ini. Skriver jag kort kommer jag att få ångra det senare.
</p><p>
Jag har ju hygglig koll på PHP sedan tidigare. Dock ger läsningen ändå utdelning. Jag visste att static variabler fanns men jag har av någon anledning aldrig använt dem. Väldigt dumt. Nu har jag skrivit lite kod med statiska variabler och inser ju hur mycket mer effektiva vissa av mina funktioner blir.
</p><p>
Globala variabler har jag alltid hört att man skall undvika. Man gör det ju väldigt lätt för sig om man deklarerar en variabel global så fort man stöter på ett scope problem. Men samtidigt tappar man ju logik i hierarkin. Och risken finns ju (i vissa fall) att variabeln kan bli ”kapad”. Det fina med statiska variabler är just att de i många fall löser scope problematik utan att förstöra hierarkin eller medföra säkerhetsrisker.
</p><p>
Git har jag inte jobbat med förut så det var jättebra att äntligen komma igång med.
</p><p>
Jag har utgått ifrån Anax i mitt ramverk. Jag tyckte det kändes mer lärorikt att luska ut hur den är uppbyggd och försöka expandera den istället för att börja på något sätt som jag är van vid. Jag har döpt min till ”Kodex”. Kodex kan betyda en samling skrifter och/eller ett regelsystem. 
</p><p>
Jag har byggt om javascript inkluderingsfunktionen. Istället för att lägga modernizer och jquery separat så har jag lagt till en parameter för javascript includes som kan vara ”top” eller ”bottom”. ”Top” innebär att scriptet inkluderas i header och ”bottom” att det inkluderas i slutet av sidan.
</p><p>
Jag har lagt till en funktion för att inkludera google fonts i ramverket. Den funkar som de redan befintliga css/javascript-inkluderingsfunktionerna. Jag har äv lagt in conditional statements i index.tpl för header och footer eftersom att man inte kan styla dem om de dyker upp även när de är tomma. En sak till jag lagt till är en config parameter som heter ”slug” den skrivs ut på body taggen om den är definierad. På så sätt kan man styla samma element på olika sätt beroende på vilken sida de visas på. Main får vi förutsättas att det alltid finns.
</p><p>
Sen har jag också moddat navigationsklassen så att den ger en ”active” class på själva a-taggen om man är på sida som stämmer överens med vad som är definierat i meny-arrayen. Jag har alltså gjort navigationen som en egen modul.
</p><p>
Jag har moddat robots.txt så att sidan inte intexeras av sökmotorer. Känns som man skulle gjort det i förra momentet. Känns lite skräpigt att skräpa ner sökmotorer med mina övningsfiler. Jag har också nullat google analytics.
</p><p>
Det knepigaste med denna övning var lustigt nog att integrera source.php. Jag försökte nämligen på egen hand innan jag insåg att det fanns specifika instruktioner för detta längre ner på sidan med instruktioner för source. Använde mig då av fel source.php och det blev en del strul med dir/fil parametrarna.
</p><p>
Jag har gjort extrauppgiften med github eftersom jag tyckte jag behövde lära mig det.
</p>
</article>

EOD;

// Finally, leave it all to the rendering phase of kodex.
include(kodex_THEME_PATH);
