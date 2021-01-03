Na "www.zelnaky.cz" naleznete funkční vypracování nasledujícího úkolu:

Za použití jazyka PHP vytvořte:
1. formulář pro zadávání IČO
2. formulář bude napojen na ARES (https://wwwinfo.mfcr.cz/ares/ares_xml.html.cz)
3. po odeslání formuláře bude kontaktována služba ARES a z této služby budou získané údaje o firmě podle zadaného IČO
4. vyhledané údaje společně se zadaným hledaným ICO a datumem vyhledání uložit do databáze
5. vytvořit stránku, na které se budou propisovat vyhledané ICO výrazy a jejich výsledky z databáze s možností řazení dle názvu firmy a data vyhledání vzestupně a sestupně a přidat stránkování po 3

Bonusové body:
- pro nastylování použijte některý z frameworků (např. Bootstrap)
- získávejte data pomocí AJAX volání (bez reloadu stránky)
- bod 5.
    - na stránce zobrazit jen vyhledaný výraz a datum, po kliknutí na daný výraz vyskočí modal s detailem, data ziskávat pomocí ajax dotazu a dynamicky propisovat
    - přidat filtr na název firmy