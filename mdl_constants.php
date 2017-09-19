<?php

define("BD", "bethoven3");
define("PAROL", "");
define("POLZOVATEL", "root");
define("Max_Rows_Page", "10");
define("Speed", "4");
define("TIME", "10");
define("SELECT_jurnal", "SELECT jurnal.Nomer, jurnal.DataPriema, jurnal.NomerSotrudnika, jurnal.NomerPovtornogoPriema, jurnal.Nomer_vida_jivot, jurnal.kind, jurnal.DataPovtornogoPriema, jurnal.Klichka, jurnal.Pol, jurnal.Vozrast, jurnal.Phone, jurnal.Prichina, jurnal.Lechenie, jurnal.Symma, jurnal.Dolg, jurnal.Kassa, jurnal.Dom, jurnal.kv, jurnal.klient, jurnal.Ulica2, jurnal.Ulica AS KodUlica, CONCAT(street.SOCR, '. ', street.NAME) AS Ulica, jurnal.Nomer_diagnoza1, jurnal.Nomer_diagnoza2, jurnal.Nomer_diagnoza3, jurnal.Nomer_diagnoza4, jurnal.Nomer_diagnoza5, jurnal.Nomer_vakcin1, jurnal.Nomer_vakcin2, jurnal.Nomer_vakcin3, jurnal.Nomer_vakcin4, jurnal.Nomer_vakcin5 FROM jurnal left JOIN street ON (jurnal.Ulica = street.CODE)");

?>