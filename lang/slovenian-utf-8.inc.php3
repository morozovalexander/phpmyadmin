<?php
/* $Id$ */

/* By: uros kositer <urosh@agenda.si> */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Ned', 'Pon', 'Tor', 'Sre', 'Čet', 'Pet', 'Sob');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Avg', 'Sep', 'Okt', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y ob %I:%M %p';


$strAccessDenied = 'Dostop zavrnjen';
$strAction = 'Akcija';
$strAddDeleteColumn = 'Dodaj/Odstrani stolpec \'Polje\'';
$strAddDeleteRow = 'Dodaj/Odstrani vrstico \'Kriterij\'';
$strAddNewField = 'Dodaj novo polje';
$strAddPriv = 'Dodaj nov privilegij';
$strAddPrivMessage = 'Dodali ste nov privilegij.';
$strAddSearchConditions = 'Dodaj iskalne pogoje (telo "where" stavka):';
$strAddToIndex = 'Dodaj indeksu &nbsp;%s&nbsp;stolpec(ce)';
$strAddUser = 'Dodaj novega uporabnika';
$strAddUserMessage = 'Dodali ste novega uporabnika.';
$strAffectedRows = 'Spremenjene vrstice:';
$strAfter = 'Po %s';
$strAfterInsertBack = 'Nazaj na prejšnjo stran';
$strAfterInsertNewInsert = 'Vstavi še eno novo vrstico';
$strAll = 'Vse/Vsi';
$strAllTableSameWidth = 'prikažem vse tabele enake širine?';
$strAlterOrderBy = 'Spremeni vrstni red prikaza tabele za';
$strAnalyzeTable = 'Analiziraj tabelo';
$strAnd = 'In';
$strAnIndex = 'Na %s je dodan indeks';
$strAny = 'Katerikoli';
$strAnyColumn = 'Katerikoli stolpec';
$strAnyDatabase = 'Katerakoli podatkovna baza';
$strAnyHost = 'Katerikoli gostitelj';
$strAnyTable = 'Katerakoli tabela';
$strAnyUser = 'Katerikoli uporabnik';
$strAPrimaryKey = 'Na %s je dodan primarni ključ';
$strAscending = 'Naraščajoče';
$strAtBeginningOfTable = 'Na začetku tabele';
$strAtEndOfTable = 'Na koncu tabele';
$strAttr = 'Atributi';

$strBack = 'Nazaj';
$strBinary = 'Binarno';
$strBinaryDoNotEdit = 'Binarno - ne urejaj';
$strBookmarkDeleted = 'Zaznamek je odstranjen.';
$strBookmarkLabel = 'Nalepka';
$strBookmarkQuery = 'Označena SQL-poizvedba';
$strBookmarkThis = 'Označi to SQL-poizvedbo';
$strBookmarkView = 'Samo pogled';
$strBrowse = 'Prebrskaj';
$strBzip = '"bzipano"';

$strCantLoadMySQL = 'ni mogoče naložiti MySQL ekstenzij,<br /> prosimo, preverite PHP konfiguracijo.';
$strCantLoadRecodeIconv = 'Ni mogoče naložiti iconv ali recode ekstenzij, ki so potrebne za pretvorbe kodnih tabel, konfigurirajte php tako, da bo omogočal uporabo teh ekstenzij ali onemogočite pretvarjanje kodnih tabel v phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Indeksa ni mogoče preimenovati v PRIMARY!';
$strCantUseRecodeIconv = 'Ni mogoče uporabljati iconv, libiconv ali recode_string funkcij, čeprav so ekstenzije normalno naložene. Preverite konfiguracijo php.';
$strCardinality = 'Kardinalnost';
$strCarriage = 'Znak za pomik na začetek vrste (Carriage return): \\r';
$strChange = 'Spremeni';
$strChangeDisplay = 'Izberite polje za prikaz';
$strChangePassword = 'Spremeni geslo';
$strCheckAll = 'Označi vse';
$strCheckDbPriv = 'Preveri privilegije podatkovne baze';
$strCheckTable = 'Preveri tabelo';
$strChoosePage = 'Izberite stran za urejanje';
$strComments = 'Komentarji';
$strColComFeat = 'Prikazovanje komentarjev stolpcev';
$strColumn = 'Stolpec';
$strColumnNames = 'Imena stolpcev';
$strCompleteInserts = 'Popolne \'insert\' poizvedbe';
$strConfigFileError = 'phpMyAdmin ni mogel prebrati konfiguracijske datoteke!<br />To se lahko zgodi, če php pri prevajanju konfiguracijske datoteke najde napako ali pa ne najde datoteke.<br />Prosimo, odprite konfiguracijsko datoteko s povezavo, ki je navedena spodaj in preberite dobljeno sporočilo o napaki. V večini primerov gre za manjkajoči narekovaj ali podpičje.<br />Če dobite prazno stran, je vse v redu.';
$strConfigureTableCoord = 'Prosimo, konfigurirajte koordinate za tabelo %s';
$strConfirm = 'Ali res želite to storiti?';
$strCookiesRequired = 'Če želite še dalje uporabljati program, morate omogočiti piškotke.';
$strCopyTable = 'Kopiraj tabelo v (podatkovna_baza<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s je skopirana v %s.';
$strCreate = 'Ustvari';
$strCreateIndex = 'Ustvari indeks na&nbsp;%s&nbsp;stolpcih';
$strCreateIndexTopic = 'Ustvari nov indeks';
$strCreateNewDatabase = 'Ustvari novo podatkovno bazo';
$strCreateNewTable = 'Ustvari novo tabelo v podatkovni bazi %s';
$strCreatePage = 'Ustvari novo stran';
$strCreatePdfFeat = 'Ustvarjanje PDF datotek';
$strCriteria = 'Kriteriji';

$strData = 'Podatki';
$strDatabase = 'Podatkovna baza ';
$strDatabaseHasBeenDropped = 'Podatkovna baza %s je zavržena.';
$strDatabases = 'podatkovne baze';
$strDatabasesStats = 'Statistika podatkovnih baz';
$strDatabaseWildcard = 'Podatkovna baza (nadomestni znaki dovoljeni):';
$strDataOnly = 'Samo podatki';
$strDefault = 'Privzeto';
$strDelete = 'Izbriši';
$strDeleted = 'Vrstica je izbrisana';
$strDeletedRows = 'Izbrisane vrstice:';
$strDeleteFailed = 'Brisanje ni uspelo!';
$strDeleteUserMessage = 'Izbrisali ste uporabnika %s.';
$strDescending = 'Padajoče';
$strDisabled = 'Onemogočeno';
$strDisplay = 'Prikaži';
$strDisplayFeat = 'Prikaži lastnosti';
$strDisplayOrder = 'Vrstni red prikaza:';
$strDisplayPDF = 'Prikaži PDF shemo';
$strDoAQuery = 'Izvedi "query by example" (nadomestni znak: "%")';
$strDocu = 'Dokumentacija';
$strDoYouReally = 'Ali res želite ';
$strDrop = 'Zavrži';
$strDropDB = 'Zavrži podatkovno bazo %s';
$strDropTable = 'Zavrži tabelo';
$strDumpingData = 'Odloži podatke za tabelo';
$strDumpXRows = 'Odloži %s vrstic, začni z zapisom # %s.';
$strDynamic = 'dinamično';

$strEdit = 'Uredi';
$strEditPDFPages = 'Uredi PDF strani';
$strEditPrivileges = 'Uredi privilegije';
$strEffective = 'Učinkovito';
$strEmpty = 'Izprazni';
$strEmptyResultSet = 'MySQL je vrnil kot rezultat prazno množico (npr. nič vrstic).';
$strEnabled = 'Omogočeno';
$strEnd = 'Konec';
$strEnglishPrivileges = ' Opomba: Imena MySQL privilegijev so zapisana v angleščini ';
$strError = 'Napaka';
$strExplain = 'Razloži SQL stavek';
$strExport = 'Izvozi';
$strExportToXML = 'Izvozi v XML obliko';
$strExtendedInserts = 'Razširjene \'insert\' poizvedbe';
$strExtra = 'Dodatno';

$strField = 'Polje';
$strFieldHasBeenDropped = 'Polje %s je zavrženo';
$strFields = 'Polja';
$strFieldsEmpty = ' Števec polj je prazen! ';
$strFieldsEnclosedBy = 'Polja obdana z';
$strFieldsEscapedBy = 'Polja izognjena z';
$strFieldsTerminatedBy = 'Polja zaključena z';
$strFixed = 'fiksno';
$strFlushTable = 'Počisti tabelo ("FLUSH")';
$strFormat = 'Oblika';
$strFormEmpty = 'V obliki manjka vrednost !';
$strFullText = 'Polna besedila';
$strFunction = 'Funkcija';

$strGenBy = 'Ustvaril';
$strGeneralRelationFeat = 'Splošne lastnosti relacij';
$strGenTime = 'Čas nastanka';
$strGo = 'Izvedi';
$strGrants = 'Dovoljenja';
$strGzip = '"gzipano"';

$strHasBeenAltered = 'je bil spremenjen(a).';
$strHasBeenCreated = 'je bil ustvarjen(a).';
$strHaveToShow = 'Za prikaz morate izbrati morate vsaj en stolpec';
$strHome = 'Domov';
$strHomepageOfficial = 'Uradna domača stran phpMyAdmin';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Download Page';
$strHost = 'Gostitelj';
$strHostEmpty = 'Ime gostitelja je prazno!';

$strIdxFulltext = 'Polno besedilo';
$strIfYouWish = 'Če bi radi naložili samo nekatere stolpce tabele, jih navedite v seznamu, kjer jih ločite z vejico.';
$strIgnore = 'Prezri';
$strIndex = 'Indeks';
$strIndexes = 'Indeksi';
$strIndexHasBeenDropped = 'Indeks %s je zavržen';
$strIndexName = 'Ime indeksa&nbsp;:';
$strIndexType = 'Vrsta indeksa&nbsp;:';
$strInsert = 'Vstavi';
$strInsertAsNewRow = 'Vstavi kot novo vrstico';
$strInsertedRows = 'Vstavljene vrstice:';
$strInsertNewRow = 'Vstavi novo vrstico';
$strInsertTextfiles = 'V tabelo vstavi podatke iz datoteke z besedilom';
$strInstructions = 'Navodila';
$strInUse = 'v uporabi';
$strInvalidName = 'beseda "%s" je rezervirana, zato je ne morete uporabiti kot ime podatkovne baze/tabele/polja.';

$strKeepPass = 'Ne spreminjaj gesla';
$strKeyname = 'Ime ključa';
$strKill = 'Ubij proces';

$strLanguage = 'Jezik';
$strLength = 'Dolžina';
$strLengthSet = 'Dolžina/Vrednosti*';
$strLimitNumRows = 'Število vrstic na stran';
$strLineFeed = 'Pomik v novo vrsto (Linefeed): \\n';
$strLines = 'Vrstice';
$strLinesTerminatedBy = 'Vrstice zaključene z';
$strLinkNotFound = 'Povezave ni mogoče najti';
$strLinksTo = 'Povezave z';
$strLocationTextfile = 'Lokacija datoteke z besedilom';
$strLogin = 'Prijava';
$strLogout = 'Odjava';
$strLogPassword = 'Geslo:';
$strLogUsername = 'Uporabniško ime:';

$strMissingBracket = 'Manjkajoč oklepaj';
$strModifications = 'Spremembe so shranjene';
$strModify = 'Spremeni';
$strModifyIndexTopic = 'Spremeni indeks';
$strMoveTable = 'Premakni tabelo v (podatkovna_baza<b>.</b>tabela):';
$strMoveTableOK = 'Tabela %s je bila premaknjena v %s.';
$strMySQLCharset = 'MySQL kodna tabela';
$strMySQLReloaded = 'MySQL ponovno naložen.';
$strMySQLSaid = 'MySQL je vrnil: ';
$strMySQLServerProcess = 'MySQL %pma_s1% teče na %pma_s2% kot %pma_s3%';
$strMySQLShowProcess = 'Pokaži procese';
$strMySQLShowStatus = 'Pokaži tekoče informacije o MySQL';
$strMySQLShowVars = 'Pokaži sistemske spremenljivke MySQL';

$strName = 'Ime';
$strNext = 'Naslednji';
$strNo = 'Ne';
$strNoDatabases = 'Brez podatkovnih baz';
$strNoDescription = 'brez opisa';
$strNoDropDatabases = '"DROP DATABASE" poizvedbe so izključene.';
$strNoExplain = 'Preskoči razlago SQL stavka';
$strNoFrames = 'phpMyAdmin je prijaznejši z brskalnikom, ki podpira okvirje.';
$strNoIndex = 'Ni definiranega indeksa!';
$strNoIndexPartsDefined = 'Ni definiranega dela indeksa!';
$strNoModification = 'Brez sprememb';
$strNone = 'Brez';
$strNoPassword = 'Brez gesla';
$strNoPhp = 'Brez kode PHP';
$strNoPrivileges = 'Brez privilegijev';
$strNoQuery = 'Brez SQL poizvedbe!';
$strNoRights = 'Nimate dovolj pravic, da bi bili sedaj tukaj!';
$strNoTablesFound = 'V podatkovni bazi ni mogoče najti tabel.';
$strNotNumber = 'To ni število!';
$strNotOK = 'Ni v redu';
$strNotSet = 'Tabele <b>%s</b> ni mogoče najti ali pa ni v %s';
$strNotValidNumber = ' ni veljavna številka vrstice!';
$strNoUsersFound = 'Ni mogoče najti uporabnika(ov).';
$strNoValidateSQL = 'Preskoči preverjanje pravilnosti SQL stavka';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s zadetek(ov) v tabeli <i>%s</i>';
$strNumSearchResultsTotal = '<b>Skupaj:</b> <i>%s</i> zadetek(ov)';

$strOftenQuotation = 'Pogosti narekovaji. OPCIJSKO pomeni, da so samo polja tipa \'char\' in \'varchar\' obdana s temi znaki.';
$strOK = 'V redu';
$strOperations = 'Operacije';
$strOptimizeTable = 'Optimiraj tabelo';
$strOptionalControls = 'Opcijsko. Narekuje način pisanja in branja posebnih znakov.';
$strOptionally = 'OPCIJSKO';
$strOptions = 'Možnosti';
$strOr = 'Ali';
$strOverhead = 'Presežek';

$strPageNumber = 'Številka strani:';
$strPartialText = 'Delna besedila';
$strPassword = 'Geslo';
$strPasswordEmpty = 'Geslo je prazno!';
$strPasswordNotSame = 'Gesli se ne ujemata!';
$strPdfDbSchema = 'Shema podatkovne baze "%s" - Stran %s';
$strPdfInvalidPageNum = 'Nedefinirna številka PDF strani!';
$strPdfInvalidTblName = 'Tabela "%s" ne obstaja!';
$strPdfNoTables = 'Ni tabel';
$strPhp = 'Ustvari PHP kodo';
$strPHPVersion = 'Različica PHP';
$strPmaDocumentation = 'phpMyAdmin dokumentacija';
$strPmaUriError = 'Ukaz <tt>$cfg[\'PmaAbsoluteUri\']</tt> mora biti definiran v konfiguracijski datoteki!';
$strPos1 = 'Začetek';
$strPrevious = 'Prejšnji';
$strPrimary = 'Primarni';
$strPrimaryKey = 'Primarni ključ';
$strPrimaryKeyHasBeenDropped = 'Primarni ključ je zavržen';
$strPrimaryKeyName = 'Ime primarnega ključa mora biti... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>mora</b> biti ime <b>samo</b> primarnega ključa!)';
$strPrintView = 'Pogled postavitve tiskanja';
$strPrivileges = 'Privilegiji';
$strProperties = 'Lastnosti';

$strQBE = 'Poizvedba';
$strQBEDel = 'Briši';
$strQBEIns = 'Vstavi';
$strQueryOnDb = 'SQL-poizvedba na podatkovni bazi <b>%s</b>:';

$strRecords = 'Zapisi';
$strReferentialIntegrity = 'Preveri referenčno integriteto:';
$strRelationNotWorking = 'Dodatne funkcije za delo s povezanimi tabelami so bile izkjučene. Če želite izvedeti zakaj, kliknite %stukaj%s.';
$strRelationView = 'Pogled relacij';
$strReloadFailed = 'Ponovno nalaganje MySQL ni uspelo.';
$strReloadMySQL = 'Ponovno naloži MySQL';
$strRememberReload = 'Ne pozabite ponovno naložiti strežnika.';
$strRenameTable = 'Preimenuj tabelo v';
$strRenameTableOK = 'Tabela %s je preimenovana v %s';
$strRepairTable = 'Popravi tabelo';
$strReplace = 'Zamenjaj';
$strReplaceTable = 'Podatke v tabeli zamenjaj z datoteko';
$strReset = 'Ponastavi';
$strReType = 'Ponovno vnesi';
$strRevoke = 'Odvzemi';
$strRevokeGrant = 'Odvzemi dovoljenje';
$strRevokeGrantMessage = 'Odvzeli ste dovoljenje (Grant) za %s';
$strRevokeMessage = 'Odvzeli ste privilegije za %s';
$strRevokePriv = 'Odvzemi privilegije';
$strRowLength = 'Dolžina vrstice';
$strRows = 'Vrstice';
$strRowsFrom = 'vrstice naprej od zapisa #';
$strRowSize = ' Velikost vrstice ';
$strRowsModeHorizontal = 'vodoravnem';
$strRowsModeOptions = 'v %s načinu in ponovi glavo po %s celicah';
$strRowsModeVertical = 'navpičnem';
$strRowsStatistic = 'Statistika vrstic';
$strRunning = 'teče na %s';
$strRunQuery = 'Izvedi poizvedbo';
$strRunSQLQuery = 'Izvedi SQL poizvedbo/poizvedbe na podatkovni bazi %s';

$strSave = 'Shrani';
$strScaleFactorSmall = 'Faktor povečava je premajhen, da bi spravili shemo na eno stran';
$strSearch = 'Iskanje';
$strSearchFormTitle = 'Išči v podatkovni bazi';
$strSearchInTables = 'V tabelah:';
$strSearchNeedle = 'Iskane besede ali vrednosti (nadomestni znak: "%"):';
$strSearchOption1 = 'katerokoli besedo';
$strSearchOption2 = 'vse besede';
$strSearchOption3 = 'točno določeno frazo';
$strSearchOption4 = 'kot \'regular expression\'';
$strSearchResultsFor = 'Rezultati iskanja "<i>%s</i>" %s:';
$strSearchType = 'Najdi:';
$strSelect = 'Izberi';
$strSelectADb = 'Prosimo, izberite podatkovno bazo';
$strSelectAll = 'Izberi vse';
$strSelectFields = 'Izberite polja (vsaj eno):';
$strSelectNumRows = 'in poizvedba';
$strSelectTables = 'Izberi tabele';
$strSend = 'Shrani kot datoteko';
$strServerChoice = 'Izbira strežnika';
$strServerVersion = 'Različica strežnika';
$strSetEnumVal = 'Če je polje vrste "enum" ali "set", navedite vrednosti v obliki: \'a\',\'b\',\'c\'...<br /> Če želite med vrednostmi uporabiti poševnico ("\") ali enojni narekovaj ("\'"), pred tem znakom vnesite poševnico (n.pr. \'\\\\xyz\' ali \'a\\\'b\').';
$strShow = 'Pokaži';
$strShowAll = 'Pokaži vse';
$strShowColor = 'Pokaži barvo';
$strShowCols = 'Pokaži stolpce';
$strShowGrid = 'Pokaži mrežo';
$strShowingRecords = 'Prikazujem vrstice';
$strShowPHPInfo = 'Pokaži podatke o PHP';
$strShowTableDimension = 'Pokaži dimenzije tabel';
$strShowTables = 'Pokaži tabele';
$strShowThisQuery = ' Ponovno pokaži poizvedbo v tem oknu ';
$strSingly = '(posamezno)';
$strSize = 'Velikost';
$strSort = 'Sortiraj';
$strSpaceUsage = 'Poraba prostora';
$strSplitWordsWithSpace = 'Besede so ločene s presledkom (" ").';
$strSQL = 'SQL';
$strSQLQuery = 'SQL-poizvedba';
$strSQLResult = 'Rezultat SQL';
$strStatement = 'Izjave';
$strStrucCSV = 'CSV podatki';
$strStrucData = 'Struktura in podatki';
$strStrucDrop = 'Dodaj \'drop table\' poizvedbo';
$strStrucExcelCSV = 'CSV podatki za Ms Excel';
$strStrucOnly = 'Samo struktura';
$strStructPropose = 'Predlagaj strukturo tabele';
$strStructure = 'Struktura';
$strSubmit = 'Pošlji';
$strSuccess = 'SQL-poizvedba je bila uspešno izvedena';
$strSum = 'Vsota';

$strTable = 'tabela ';
$strTableComments = 'Komentar tabele';
$strTableEmpty = 'Ime tabele je prazno!';
$strTableHasBeenDropped = 'Tabela %s je zavržena';
$strTableHasBeenEmptied = 'Tabela %s je izpraznjena';
$strTableHasBeenFlushed = 'Tabela %s je osvežena';
$strTableMaintenance = 'Vzdrževanje tabele';
$strTables = '%s tabel';
$strTableStructure = 'Struktura tabele';
$strTableType = 'Vrsta tabele';
$strTextAreaLength = ' Zaradi njegove dolžine<br /> polja ne bo mogoče urejati ';
$strTheContent = 'Vsebina datoteke je vnešena.';
$strTheContents = 'Vsebina datoteke zamenja vsebino izbrane tabele v vrsticah z identičnim primarnim ali unikatnim ključem.';
$strTheTerminator = 'Zaključni znak polj.';
$strTotal = 'skupaj';
$strType = 'Vrsta';

$strUncheckAll = 'Odznači vse';
$strUnique = 'Unikaten';
$strUnselectAll = 'Prekliči izbor vsega';
$strUpdatePrivMessage = 'Posodobili ste privilegije za %s.';
$strUpdateProfile = 'Posodobi profil:';
$strUpdateProfileMessage = 'Profil je posodobljen.';
$strUpdateQuery = 'Osveži poizvedbo';
$strUsage = 'Uporaba';
$strUseBackquotes = 'Obdaj imena tabel in polj z enojnimi poševnimi narekovaji';
$strUser = 'Uporabnik';
$strUserEmpty = 'Uporabniško ime je prazno!';
$strUserName = 'Uporabniško ime';
$strUsers = 'Uporabniki';
$strUseTables = 'Uporabi tabele';

$strValidateSQL = 'Preveri pravilnost SQL stavka';
$strValue = 'Vrednost';
$strViewDump = 'Preglej dump (shemo) tabele';
$strViewDumpDB = 'Preglej dump (shemo) podatkovne baze';

$strWelcome = 'Dobrodošli v %s';
$strWithChecked = 'Z označenim:';
$strWrongUser = 'Napačno uporabniško ime/geslo. Dostop zavrnjen.';

$strYes = 'Da';

$strZip = '"zipano"';

// To translate
$strCharsetOfFile = 'Character set of the file:'; //to translate
$strBeginCut = 'BEGIN CUT';  //to translate
$strEndCut = 'END CUT';  //to translate
$strSQPBugInvalidIdentifer = 'Invalid Identifer';  //to translate
$strSQPBugUnknownPunctuation = 'Unknown Punctuation String';  //to translate
$strSQPBugUnclosedQuote = 'Unclosed quote';  //to translate
$strBeginRaw = 'BEGIN RAW';  //to translate
$strEndRaw = 'END RAW';  //to translate
$strSQLParserUserError = 'There seems to be an error in your SQL query. The MySQL server error output below, if there is any, may also help you in diagnosing the problem';  //to translate
$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:';  //to translate
?>
