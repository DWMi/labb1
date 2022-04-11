# labb1
inlämningsuppgift 1


Målet för den första inlämningsuppgiften är att skapa ett fungerande tema utifrån HTML filer. Du ska förvandla den statiska HTML koden till ett WordPress tema.

Instruktioner
Ni har fått en zip-fil med statiska HTML-filer för olika sidmallar.
Alla mallar ska implementeras i temat
Lämna php-kommentar med snabb  beskrivning vid varje WordPress-funktion ni använder.  
HTML-strukturen i er färdiga WordPress installation skall vara närapå identisk den i HTML-filerna.  
Det är fritt fram att bygga egna funktioner i functions.php.
All css och js som ni behöver finns med i zip-filen, ni behöver alltså inte lägga till egen.  
Den överliggande menyn ska gå att styra genom Utseende > Menyer i adminpanelen  
Kontrollera även att menyn fungerar på mindre skärmar.  
Sidomenyn på undersidorna ska lista syskonsidor.
För VG  
• Innehållet i sidfoten samt bloggens sidokolumn kunna redigeras ifrån admin-panelen.
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Kommentar från mig:


Styling:
Jag har ändrat lite i style.css la till kommentarer som står antingen "lagt till av mig" eller ändrat av mig. kö en ctrl + f eller CMD + f för att snabbt söka fram det jag har ändrat. 

TAGS:
Jag la även till kategori 1,2,3 som etiketter / tags. Då det är en tag icon så jag tyckte att det passade bättre för att efterlikna mockupen så mycket som möjligt.

Sidebar:
Jag har använt en mix av widgets och meny för att efterlikna mockupen så mycket som möjligt i "sidor" ,rubriken är widget och innehållet är meny.
Förutom arkiv och kategorier innehållet då hela den blocken är en widget.


Pagination:
Jag har även lagt till en extra inlägg för att kunna få en fungerande pagination. Alltså är det nu 4st inlägg istället för de 3 som medföljde i blogg sidan. Dock så kan jag inte få till pagination i category sidan samt Författarsidan, för att få pagination att dyka upp där också så måste jag sänka inlägg per sida till 1 inlägg mindre för att pagination skall dyka upp men det går bara att ändra på blogginläggs sidan. Det finns säkert någon smart kod man kan knappa in men det känns som överkurs.

HTML DOCTYPE:
Det saknades tydligen bara <meta name="viewport" content="width=device-width, initial-scale=1.0"> för att det skulle funka i mobila enheter. Du bifogade med en "gammal HTML DOCTYPE". haha


Github länk: https://github.com/DWMi/labb1