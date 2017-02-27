<!DOCTYPE html>
<html>
	<head>
		<title>Verkefni 4</title>
	</head>
	<body>

		<p>1. Ég er ekki búinn að fá kennslu hvernig á að nota MySQLi með PHP, þannig það eina sem ég get sagt um muninn er að PDO er OOP en ekki MySQLi og PDO hefur parameter binding.</p>
		<p>2. Til að segja PDO objectinu hvaða server það á að tengjast í, hvaða username það á að nota og hvað lykilorðið er.</p>
		<p>3. Notað til að keyra SQL skipanir. skilar tölu gildi, sem fer eftir hversu margar "affected rows" voru.</p>
		<p>4. Notað til að keyra SQL skipanir sem sækja gögn. skilar gögnonum (oftast í "key-value array" og bara ein lína í einu).</p>
		<p>5. Það er klasinn með öllum aðferðonum til að gera hluti eins og $connection->execute() aðferðina.</p>
		<p>6. "PDO::FETCH_NUM: returns an array indexed by column number as returned in your result set, starting at column 0".</p>
		<p>7. "PDO::FETCH_CLASS: returns a new instance of the requested class, mapping the columns of the result set to named properties in the class, and calling the constructor afterwards, unless PDO::FETCH_PROPS_LATE is also given. If fetch_style includes PDO::FETCH_CLASSTYPE (e.g. PDO::FETCH_CLASS | PDO::FETCH_CLASSTYPE) then the name of the class is determined from a value of the first column.".</p>
		<p>8. Nær í name og colour frá fruit og skilar´annari línu úr niðurstöðunni.</p>
		<p>9. Að gera SQL skipunina tilbúnna og setja inn breytur sem hægt er að gefa gildi áður en maður keyrir skipunina með $statement->execute()</p>
		<p>10. svoldið sjálfsagt ef maður kann ensku. "it binds a value". Það er hjálpsamlegt ef þú þarft dynamic kóða.</p>

		<a href="./verk/index.php">Kóðadæmi.</a>

		<a href="https://github.com/sindripa/VEF2A_Verkefni_4">Kóðinn af kóðadæminu.</a>

	</body>
</html>