-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 20, 2013 at 03:29 PM
-- Server version: 5.1.67-rel14.3-log
-- PHP Version: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jahnet_joomla`
--

-- --------------------------------------------------------

--
-- Table structure for table `newyear`
--

CREATE TABLE IF NOT EXISTS `newyear` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` text,
  `price` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  `published` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `newyear`
--

INSERT INTO `newyear` (`id`, `name`, `description`, `price`, `phone`, `mobile`, `email`, `created_at`, `published`) VALUES
(1, 'test', '<p>test</p>\n', '25', '065/756-877', '065/222-555', 'drakulaab-@hotmail.com', '2013-12-17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `created_at` date DEFAULT NULL,
  `social` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `title`, `content`, `created_at`, `social`) VALUES
(1, 'Istorija Planine', '<p>Jahorina pripada dinarskom planinskom sistemu. Dužina masiva koji dominira i koji nema jasnih morfolo&scaron;kih, biolo&scaron;kih, hidrolo&scaron;kih međa, kao ni jasne granice između susjednih planina je 25-30 kilometara, a &scaron;irine od 5-15 kilometara. Najvi&scaron;i vrh je Ogorjelica &ndash; 1916 metara. To &scaron;to se nalazi na mjestu uticaja dvije klime (mediteranske i kontinentalne) njen reljef, geolo&scaron;ki sastav, vegetecioni pokrivač i riječni slivovi kao značajni modifikatori klime daju joj određene specifičnosti. Snijeg na ovoj planini ima oko 180 dana u godini, od novembra do aprila. Prosječna visina mu je skoro 100 cm a najniže temperature su u januaru sa prosječnom dnevnom od -9,9 stepeni Celzijusovih. Magle su rijetke i javljaju se s proljeća i jeseni. Nema jakog vjetra sa sjevera, a na vrhovima Jahorine duvaju vjetrovi južnih smjerova.</p>\r\n\r\n<p style="text-align:justify">Ostaci srednjevijekovnih gradova i utvrđenja i nekropole stećaka srednjevjekovnih spomenika zanimljivi su kulturni &ndash; istorijski spomenici koji svjedoče da je ovaj kraj nekada bio raskrsnica svih važnijih puteva, ali i centar zemlje Pavlovića jedne od najmoćnijih i najuglednijih porodica bosanske države u vrijeme kralja Tvrtka Kotromanića.</p>\r\n\r\n<p style="text-align:justify">Mada nedovoljno istraženi kao svjedoci jednog vremena su ostaci grada Pavlovca kod Prače koji su sagrađeni 1415. godine. Na lokalitetu Prače postoje dva izvora mineralne vode od kojih se jedan zove Kiseljak. Po narodnom predanju ova voda liječi stomačna oboljenja i u njenu ljekovitost vjerovali su jo&scaron; i stari Rimljani o čemu svjedoče ostaci cijevi rimskog vodovoda i keramike.</p>\r\n\r\n<p style="text-align:justify">Iz srednjeg vijeka su i ostaci utvrđenog dvora na vrelu Paljanske Miljacke koji je pripadao čuvenoj srpskoj despotici Jerini, ženi despota Đurađa Brankovića. Vjeruje sa da su tu u maloj nekropoli sahranjeni gospodari zemlje Pavlovića. Na ne pristupačnom terenu iznad mjesta gdje se sastaju Paljanska i Mokranjska Miljacka u Bulozima, o starom gradu Litovac danas svjedoče oskudni istorijski podaci &ndash; kameni ostaci kao i narodna predanja koja nas vode i do Starog Grada &ndash; Hadidjeda gdje se nekada kovao novac za srednjevjekovnu bosansku državu. Sve ovo kao i zanimljiva mjesta, poput pećina kao &scaron;to je Orlovača koja se nalazi u istoimenimm stijenama u Mokrom na 16-tom kilometru puta od Sarajeva ka Sokocu i koja prema mi&scaron;ljenju stručnjaka spada u red najljep&scaron;ih i najzanimljivijih na prostorima biv&scaron;e Jugoslavije, zatim smje&scaron;tana visoko u stijenama mitske gore Romanije Novakova pećina čuvena po hajduku Starini Novaku, pa pećina u Bogovićima, Litovac u koritu Miljacke, te pećina Lednjača iz koje se jo&scaron; prije 20-tak godina vadio led u vrijeme ljetnih vrućina, predstavlja rijetko zanimljiv i sa turističkog aspekta atrakrivan region.</p>\r\n', '2013-12-17', 'Jahorina pripada dinarskom planinskom sistemu. Dužina masiva koji dominira i koji nema jasnih morfoloških, bioloških, hidroloških međa, kao ni jasne granice između susjednih planina je 25-30 kilometara, a širine od 5-15 kilometara. Najviši vrh je Ogorjeli'),
(2, 'Turizam', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vestibulum nec ipsum nec iaculis. Duis interdum lectus vitae turpis accumsan, tempus posuere enim tempor. Praesent consequat risus vitae vestibulum mattis. In nec auctor nisl. Mauris sodales gravida scelerisque. Sed adipiscing convallis metus, ut dignissim erat iaculis eget. Aliquam erat volutpat. Phasellus aliquam tellus enim, at vestibulum enim malesuada sit amet. Aliquam posuere ut eros vitae lobortis. Curabitur egestas vitae sem at tempor.</p>\r\n\r\n<p>Ut malesuada ipsum eu lectus laoreet, a hendrerit mauris pulvinar. In at tempor leo. Morbi non ullamcorper magna. Duis nec consectetur ante. Mauris rutrum consequat porttitor. Quisque a diam purus. Sed eu pellentesque massa, euismod viverra diam. Etiam magna felis, scelerisque eget lacus a, ultricies aliquam ante. Ut gravida scelerisque sem, eget scelerisque urna ornare eu.</p>\r\n\r\n<p>Cras in ante vitae nunc vulputate scelerisque ac in orci. Nulla quis dolor tempus, bibendum nulla id, imperdiet lorem. Praesent eu lacus faucibus, blandit arcu at, tristique mauris. Vestibulum tempus ut nibh a scelerisque. Aenean laoreet scelerisque sodales. Curabitur blandit rutrum massa ut facilisis. Proin magna risus, ornare quis tellus vitae, tincidunt dignissim ligula. Quisque ligula lacus, dapibus id adipiscing nec, malesuada et turpis.</p>\r\n', '2013-12-16', 'Turizam'),
(3, 'Sport i rekreacija', '<p>Rijetka su mjesta kao &scaron;to je <strong>Jahorina</strong>, gdje je priroda bila tako izda&scaron;na i daroval joj sve &scaron;to je čini primamljivom i prihvatljivom svima vrhunskim sportistima, rekreativcima, lovcima, ribolovcima, planinarima, stočarima kao i onim čija su čula željna uživanja i spokoja u prirodnim ljepotama. Čist planinski vazduh odmara ne samo tijelo, već i du&scaron;u. <strong>Jahorina</strong> nije kao ostale planine. Tu nikad niste sami, jer ona je sva u vama i pred vama. Svojom ti&scaron;inom, dalekim i prekrasnim vidicima ili snijegom pokrivenim obroncima, vrelima i potocima, svojom raznovrsnom florom i faunom predstavlja najljep&scaron;i u nizu dragulja <strong>Republike Srpske</strong>.</p>\r\n\r\n<p>Zahvaljujući geolo&scaron;kom sastavu, koji ne propu&scaron;ta vodu <strong>Jahorina</strong> obiluje mnogobrojnim izvorima, posebno u gornjim dijelovima i obično na istoj nadmorskoj visini. Stotinjak vrela i izvora se poput paukove mreže pletu prema rijekama Miljacki, Prači i Željeznici. Hladna, bistra i čista voda jahorinskih potoka i rijeka bogata je ribom, pa i najstrasniji ribolovci ovdje mogu zadovoljiti svoje strasti. Na prvom mjestu je potočna pastrmka, zatim klijen, krku&scaron;a, lipljan i mladica a ima i riječnih rakova.</p>\r\n\r\n<p style="text-align:justify">&Scaron;ume na <strong>Jahorini</strong> zauzimaju veliko prostranstvo. Zeleni dekor četinarskih &scaron;uma dijeluje umirujuće, a miris četinarske smole osvježava organizam. Od prvih proplanaka i dalje prema vrhu smjenjuju se pojasi hrastovih, bukovo &ndash; jelovih i jelivo &ndash; smrčevih &scaron;uma. Iznad njih su brdski i gorski javor. Pri vrhu &scaron;uma postaje rjeđa sa poleglim stablima kleka a na najvi&scaron;im vrhovima obrasla je mahovinom.</p>\r\n\r\n<p style="text-align:justify">Od niskog &scaron;umskog rastinja <strong>Jahorina</strong> je bogata borovnicom, brusnicom, malinom, kupinom, jagodom, nanom, lincurom, kantarionom, maslačkom, zovom i svim vrstama gljiva.</p>\r\n\r\n<p style="text-align:justify">Svojim četinarskim i listopadnim &scaron;umama, čistom vodom i &scaron;umskim plodovima <strong>Jahorina</strong> pruža izvanredne uslove za stani&scaron;te brojnih &scaron;umskih životinja, kako plemenite i rijetke divljači, tako i najkrupnijeg divljeg zvjerinja.</p>\r\n\r\n<p style="text-align:justify">Teritorija jahorinskog lovi&scaron;ta na 12.500 hektara je na nadmorskoj visini od 590-1910 metara. Lovačka dru&scaron;tva kao i lokalno stanovni&scaron;tvo opremili su lovi&scaron;te čekama mečili&scaron;tima za odstrel medvjeda, uredili mjesta za izlaganje hrane i soli, obezbjedili pojili&scaron;ta i zasijali gomoljastu hranu. Od životinja koje su svoje stani&scaron;te na&scaron;le na prostorima <strong>Jahorine</strong> treba izdvojiti srneću divljač, koje ima na cijelom lovi&scaron;tu, te medvjeda kao najatraktivniju divljač. Tu su jo&scaron; i divlja svinja, divojarac i divokoze, vuk, lisica, jazavac, divlja mačka, kuna zlatna i kuna bjelica, zec i vidra koja nastanjuje potoke i rijeke.</p>\r\n\r\n<p style="text-align:justify">Povremeni i privremeni stanovnici <strong>Jahorine</strong> su i jarebica kamenjarka, lje&scaron;tarka, tetrijeb, ptice selice koje se na putu ka jugu neko vrijeme zadržavaju na <strong>Jahorini</strong>, te jastreb i orao kao stalni stanari.</p>\r\n\r\n<p style="text-align:justify">Mada nije adekvatno iskori&scaron;ten zdravstveni turizam ima svoju perspektivu na <strong>Jahorini</strong>, koja ima povoljnije klimatske elemente koji blagotvorno djeluju na zdravlje čovjeka. To se prije svega odnosi na hronične plućne bolesti, zatvorenu TBC, malokrvnost a čist vazduh bogat kiseonikom i ozonom bez aletgena ima smirujuće dejstvo na lak&scaron;e nervne bolesti i povoljno utiče na oporavak od težih bolesti.</p>\r\n\r\n<p style="text-align:justify">Ali ipak kad neko pomene <strong>Jahorinu</strong> prva asocijacija je snijeg i skijanje, jer samo <strong>Jahorina</strong> ima Rajsku dolinu. Ovaj Repu&scaron;in do, kako ga zovu mje&scaron;tani, zbog njegove ljepote i osobenosti skija&scaron;i su prizvali Rajskim. Od 1923. godine kada su na goloj <strong>Jahorini</strong> prvi put, na visoravni Vukelina voda, upotrijebljene skije, ova planina pruža izuzetne uslove ne samo vrhunskim sportistima već i svim ljubiteljima zimskih sportova i igara i radosti na snijegu. Svoje prve korake na snijegu ovde su napravili olimpijci: Zoran Ćosić, Tomislav Lopatić, Momo Skokić, Vlado Lučić, Mirjana Granzov, i Jelena Lolović, koji su na olimpijskim igrama u alpskim i nordijskim disciplinama, slavu bijelog sporta i Isročnog Sarajeva pronosili &scaron;irom Svijeta, zbog čega se ovaj grad njima posebno ponosi.Danas na <strong>Jahorini</strong>, na koju se iz Sarajeva lako i brzo dolazi iz dva pravca: magistralnim putem u dužini od 28 km preko Pala i 32 km preko Trebevića, skija&scaron;ima je na raspolaganju vi&scaron;e od 20 km odlično uređenih staza za alpsko skijanje povezanih žičarama i ski &ndash; liftovima ukupnog kapaciteta 10. 500 skija&scaron;a na sat, a za najmlađe uvijek je u funkciji bebi &ndash; lift.</p>\r\n', '2013-12-17', 'Rijetka su mjesta kao što je Jahorina, gdje je priroda bila tako izdašna i daroval joj sve što je čini primamljivom i prihvatljivom svima vrhunskim sportistima, rekreativcima, lovcima, ribolovcima, planinarima, stočarima kao i onim čija su čula željna uži'),
(4, 'Jahorina info', '<p>Jahorina se nalazi jugoistočnom dijelu BiH, udaljena je 28 km od Sarajeva i 12 km od Pala. Do Jahorine se može doći i novoizgrađenim putem od aerodroma preko Lukavice i Trebevića. Jahorina je od Banja Luke udaljena 210 km, Beograda 320 km, Novog Sada 290 km , Zagreba 350 km, Splita 320 i Podgorice 270 km.</p>\r\n\r\n<p><strong>Važniji telefoni:</strong></p>\r\n\r\n<p>Pozivni broj za BiH je +387, a za Jahorinu 057.<br />\r\nAerodrom Sarajevo +387 (0)33 289 100<br />\r\nAutobuska stanica Sarajevo +387 (0)33 213 100; +387 (0)57 317 377<br />\r\nAutobuska stanica Pale +387 (0)57 222 900<br />\r\nDom zdravlja Pale +387 (0)57 223 383<br />\r\nInformacije Federacija BIH +387 1182<br />\r\nInformacije Republika Srpska +387 1185<br />\r\nKlinički centar Sarajevo +387 (0)33 297 000; +387 (0)33 666 620<br />\r\nStanje prohodnosti puteva +387 1282<br />\r\nPomoć na cesti RS +387 1285<br />\r\nPolicija Pale +387 (0)57 223031; 057204100; 122 (besplatni telefon)<br />\r\nPo&scaron;ta Pale +387 (0)57 226 001<br />\r\nPo&scaron;ta Jahorina +387 (0)57 270 212<br />\r\nTaxi Sarajevo +387 (0)33 660 666<br />\r\nTaxi Pale +387 (0)57 340 200<br />\r\nVatrogasna služba Pale +387 (0)57 223 159<br />\r\nŽeleznička stanica Sarajevo +387 (0)33/655-330<br />\r\nAmbasada Srbije +387 (0)33 260 090; +387 (0)33 260 0 800<br />\r\nAmbasada Hrvatske +387 (0)33 271 270<br />\r\nAmbasada Slovenije +387 (0)33 442 59</p>\r\n', '2013-12-17', 'Jahorina se nalazi jugoistočnom dijelu BiH, udaljena je 28 km od Sarajeva i 12 km od Pala. Do Jahorine se može doći i novoizgrađenim putem od aerodroma preko Lukavice i Trebevića. Jahorina je od Banja Luke udaljena 210 km, Beograda 320 km, Novog Sada 290 ');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `created_at` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `published` tinyint(1) DEFAULT NULL,
  `social` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_post_user_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `created_at`, `user_id`, `published`, `social`) VALUES
(1, 'Otvorena zimska turistička sezona na Jahorini', '<p>Ministar trgovine i turizma Republike Srpske Maida Ibri&scaron;agić&ndash;Hrstić svečano je na Jahorini otvorila zimsku turističku sezonu 2013/2014.</p>\r\n\r\n<p>Izražavajući zadovoljstvo &scaron;to ima čast da otvori novu zimsku sezonu nakon uspje&scaron;ne pro&scaron;logodi&scaron;nje, Hrstićeva je na svečanosti istakla da su vremenske prilike i količina snijega obećavajući da će skija&scaron;i i turisti imati najbolje uslove u ovoj godini.</p>\r\n\r\n<p>Ona je izrazila nadu da će veliku posjećenost imati i ostale planine u Republici Srpskoj.</p>\r\n\r\n<p>&bdquo;Otvaranje zimske sezone prilika je za promociju Jahorine kao destinacije na kojoj je moguće jednako uspje&scaron;no razvijati zimski, planinski, avanturistički i omladinski turizam&ldquo;, istakla je ministar trgovine i turizma Srpske.</p>\r\n\r\n<p>Hrstićeva je podsjetila da je Vlada Republike Srpske uložila značajna sredstva u izgradnju trećeg &scaron;estosjeda kako bi Jahorina zadovoljila potrebe skija&scaron;a i ljubitelja zimskih sportova, čime je postala veoma konkurentna u odnosu na planine u okruženju.</p>\r\n\r\n<p>&bdquo;U narednom periodu biće nastavljen rad na razvoju ostalih kapaciteta i sadržaja za različite grupe turista&ldquo;, rekla je Hrstićeva.</p>\r\n\r\n<p>Zvaničnom otvaranju zimske sezone na Jahoroni, koje je organizovalo Ministarstvo trgovine i turizma, prisustvovali su ministri porodice, omladine i sporta Republike Srpske Nada Te&scaron;anović, uprave i lokalne samouprave Lejla Re&scaron;ić, te pravde Gorana Zlatković.</p>\r\n\r\n<p>Ceremoniji otvaranja prisustvovali su i predsjedavajući Doma naroda Parlamentarne skup&scaron;tine BiH Sta&scaron;a Ko&scaron;arac, poslanik u Predstavničkom domu Parlamentarne skup&scaron;tine BiH Bo&scaron;ko Tomić i novi ministar spoljne trgovine i ekonomskih odnosa u Savjetu ministara BiH Boris Tučić.</p>\r\n\r\n<p>Vr&scaron;ilac dužnosti generalnog direktora Olimpijskog centra &bdquo;Jahorina&ldquo; Neven Ćosović uručio je sezonski ski-pas alpskoj skija&scaron;ici Maji Klepić, koja jedina nije na pripremama za takmičenja. Ski-pasovi su obezbijeđeni za sve ostale olimpijce iz Srpske i biće im uručeni naknadno.</p>\r\n\r\n<p>U sklopu obilježavanja otvaranja zimske turističke sezone organizovan je i prigodan program, a goste na svečanosti u Hotelu &bdquo;Bistrica&ldquo; zabavljao je ansambl &bdquo;Ko&scaron;ava&ldquo;. Srna</p>\r\n', '2013-12-17', 3, 1, 'Ministar trgovine i turizma Republike Srpske Maida Ibrišagić–Hrstić svečano je na Jahorini otvorila zimsku turističku sezonu 2013/2014.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `hotel` varchar(45) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `hotel`, `role`) VALUES
(1, 'Igor', 'Golub', '1bed2e6bba53bf08328ab88464771d2c', NULL, 'admin'),
(2, 'Ilija', 'itesic', '276c8fd70023b216de65de073c2fed15', NULL, 'admin'),
(3, 'Hotel', 'hotel', 'e919c49d5f0cd737285367810a3394d0', 'hotel', 'hotel'),
(4, 'Mirko', 'mirko', '03d1fe9e67ec9fe9bd06f4702d421f0b', NULL, 'admin');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_post_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
