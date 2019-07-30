-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2019 at 12:30 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `main_pic` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `main_pic`, `creation_date`, `update_date`) VALUES
(1, 'Flowers', 'A flower, sometimes known as a bloom or blossom, is the reproductive structure found in flowering plants (plants of the division Magnoliophyta, also called angiosperms). The biological function of a flower is to effect reproduction, usually by providing a mechanism for the union of sperm with eggs. Flowers may facilitate outcrossing (fusion of sperm and eggs from different individuals in a population) or allow selfing (fusion of sperm and egg from the same flower). Some flowers produce diaspores without fertilization (parthenocarpy). Flowers contain sporangia and are the site where gametophytes develop. Many flowers have evolved to be attractive to animals, so as to cause them to be vectors for the transfer of pollen. After fertilization, the ovary of the flower develops into fruit containing seeds.\r\n\r\nIn addition to facilitating the reproduction of flowering plants, flowers have long been admired and used by humans to bring beauty to their environment, and also as objects of romance, ritual, religion, medicine and as a source of food.\r\nStructure\r\nAlthough the arrangement described above is considered \"typical\", plant species show a wide variation in floral structure.[1] These modifications have significance in the evolution of flowering plants and are used extensively by botanists to establish relationships among plant species.\r\n\r\nThe four main parts of a flower are generally defined by their positions on the receptacle and not by their function. Many flowers lack some parts or parts may be modified into other functions and/or look like what is typically another part. In some families, like Ranunculaceae, the petals are greatly reduced and in many species the sepals are colorful and petal-like. Other flowers have modified stamens that are petal-like; the double flowers of Peonies and Roses are mostly petaloid stamens.[2] Flowers show great variation and plant scientists describe this variation in a systematic way to identify and distinguish species.\r\n\r\nSpecific terminology is used to describe flowers and their parts. Many flower parts are fused together; fused parts originating from the same whorl are connate, while fused parts originating from different whorls are adnate; parts that are not fused are free. When petals are fused into a tube or ring that falls away as a single unit, they are sympetalous (also called gamopetalous). Connate petals may have distinctive regions: the cylindrical base is the tube, the expanding region is the throat and the flaring outer region is the limb. A sympetalous flower, with bilateral symmetry with an upper and lower lip, is bilabiate. Flowers with connate petals or sepals may have various shaped corolla or calyx, including campanulate, funnelform, tubular, urceolate, salverform or rotate.\r\n\r\nReferring to \"fusion,\" as it is commonly done, appears questionable because at least some of the processes involved may be non-fusion processes. For example, the addition of intercalary growth at or below the base of the primordia of floral appendages such as sepals, petals, stamens and carpels may lead to a common base that is not the result of fusion.', 'https://cdn.pixabay.com/photo/2016/06/07/20/20/water-lily-1442497_960_720.jpg', '2019-07-30 07:45:34', '2019-07-30 07:45:34'),
(2, 'Birds', 'Birds, also known as Aves or avian dinosaurs, are a group of endothermic vertebrates, characterised by feathers, toothless beaked jaws, the laying of hard-shelled eggs, a high metabolic rate, a four-chambered heart, and a strong yet lightweight skeleton. Birds live worldwide and range in size from the 5 cm (2 in) bee hummingbird to the 2.75 m (9 ft) ostrich. They rank as the world\'s most numerically-successful class of tetrapods, with approximately ten thousand living species, more than half of these being passerines, sometimes known as perching birds. Birds have wings which are more or less developed depending on the species; the only known groups without wings are the extinct moa and elephant birds. Wings, which evolved from forelimbs, gave birds the ability to fly, although further evolution has led to the loss of flight in flightless birds, including ratites, penguins, and diverse endemic island species of birds. The digestive and respiratory systems of birds are also uniquely adapted for flight. Some bird species of aquatic environments, particularly seabirds and some waterbirds, have further evolved for swimming.\r\n\r\nThe fossil record demonstrates that birds are modern feathered dinosaurs, having evolved from earlier feathered dinosaurs within the theropod group, which are traditionally placed within the saurischian dinosaurs. The closest living relatives of birds are the crocodilians. Primitive bird-like dinosaurs that lie outside class Aves proper, in the broader group Avialae, have been found dating back to the mid-Jurassic period, around 170 million years ago. Many of these early \"stem-birds\", such as Archaeopteryx, retained primitive characteristics such as teeth and long bony tails. DNA-based evidence finds that birds diversified dramatically around the time of the Cretaceous–Palaeogene extinction event 66 million years ago, which killed off the pterosaurs and all the non-avian dinosaur lineages. But birds, especially those in the southern continents, survived this event and then migrated to other parts of the world while diversifying during periods of global cooling. This makes them the sole surviving dinosaurs according to cladistics.\r\n\r\nSome birds, especially corvids and parrots, are among the most intelligent animals; several bird species make and use tools, and many social species pass on knowledge across generations, which is considered a form of culture. Many species annually migrate great distances. Birds are social, communicating with visual signals, calls, and bird songs, and participating in such social behaviours as cooperative breeding and hunting, flocking, and mobbing of predators. The vast majority of bird species are socially monogamous (referring to social living arrangement, distinct from genetic monogamy), usually for one breeding season at a time, sometimes for years, but rarely for life. Other species have breeding systems that are polygynous (arrangement of one male with many females) or, rarely, polyandrous (arrangement of one female with many males). Birds produce offspring by laying eggs which are fertilised through sexual reproduction. They are usually laid in a nest and incubated by the parents. Most birds have an extended period of parental care after hatching. Some birds, such as hens, lay eggs even when not fertilised, though unfertilised eggs do not produce offspring.\r\n\r\nMany species of birds are economically important as food for human consumption and raw material in manufacturing, with domesticated and undomesticated birds (poultry and game) being important sources of eggs, meat, and feathers. Songbirds, parrots, and other species are popular as pets. Guano (bird excrement) is harvested for use as a fertiliser. Birds prominently figure throughout human culture. About 120–130 species have become extinct due to human activity since the 17th century, and hundreds more before then. Human activity threatens about 1,200 bird species with extinction, though efforts are underway to protect them.[3] Recreational birdwatching is an important part of the ecotourism industry.', 'https://cdn.pixabay.com/photo/2017/05/08/13/15/spring-bird-2295434_960_720.jpg', '2019-07-30 07:47:37', '2019-07-30 07:47:37'),
(3, 'Mamals', 'Mammals (from Latin mamma \"breast\") are vertebrate animals constituting the class Mammalia (/məˈmeɪliə/), and characterized by the presence of mammary glands which in females produce milk for feeding (nursing) their young, a neocortex (a region of the brain), fur or hair, and three middle ear bones. These characteristics distinguish them from reptiles and birds, from which they diverged in the late Triassic, 201–227 million years ago. There are around 5,450 species of mammals. The largest orders are the rodents, bats and Soricomorpha (shrews and others). The next three are the Primates (apes, monkeys, and others), the Cetartiodactyla (cetaceans and even-toed ungulates), and the Carnivora (cats, dogs, seals, and others).\r\n\r\nIn cladistics, which reflect evolution, mammals—along with dinosaurs, and by extension, birds—are classified as endothermic amniotes. This trait evolved separately in both cases and is an example of convergent evolution. Mammals are the only living members of the clade Synapsida, which together with Sauropsida (reptiles and birds) form the Amniota clade. The early synapsid mammalian ancestors were sphenacodont pelycosaurs, a group that produced the non-mammalian Dimetrodon. At the end of the Carboniferous period around 300 million years ago, this group diverged from the sauropsid line that led to today\'s reptiles and birds. The line following the stem group Sphenacodontia split into several diverse groups of non-mammalian synapsids—sometimes incorrectly referred to as mammal-like reptiles—before giving rise to Therapsida in the Early Permian period. The modern mammalian orders arose in the Paleogene and Neogene periods of the Cenozoic era, after the extinction of non-avian dinosaurs, and have been among the dominant terrestrial animal groups from 66 million years ago to the present.\r\n\r\nThe basic body type is quadruped, and most mammals use their four extremities for terrestrial locomotion; but in some, the extremities are adapted for life at sea, in the air, in trees, underground, or on two legs. Mammals range in size from the 30–40 mm (1.2–1.6 in) bumblebee bat to the 30-meter (98 ft) blue whale—possibly the largest animal to have ever lived. Maximum lifespan varies from two years for the shrew to 211 years for the bowhead whale. All modern mammals give birth to live young, except the five species of monotremes, which are egg-laying mammals. The most species-rich group of mammals, the cohort called placentals, have a placenta, which enables the feeding of the fetus during gestation.\r\n\r\nMost mammals are intelligent, with some possessing large brains, self-awareness, and tool use. Mammals can communicate and vocalize in several different ways, including the production of ultrasound, scent-marking, alarm signals, singing, and echolocation. Mammals can organize themselves into fission-fusion societies, harems, and hierarchies—but can also be solitary and territorial. Most mammals are polygynous, but some can be monogamous or polyandrous.\r\n\r\nDomestication of many types of mammals by humans played a major role in the Neolithic revolution, and resulted in farming replacing hunting and gathering as the primary source of food for humans. This led to a major restructuring of human societies from nomadic to sedentary, with more co-operation among larger and larger groups, and ultimately the development of the first civilizations. Domesticated mammals provided, and continue to provide, power for transport and agriculture, as well as food (meat and dairy products), fur, and leather. Mammals are also hunted and raced for sport, and are used as model organisms in science. Mammals have been depicted in art since Palaeolithic times, and appear in literature, film, mythology, and religion. Decline in numbers and extinction of many mammals is primarily driven by human poaching and habitat destruction, primarily deforestation.', 'https://cdn.pixabay.com/photo/2013/12/12/03/09/kitten-227011_960_720.jpg', '2019-07-30 07:49:06', '2019-07-30 08:44:27');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(20) NOT NULL,
  `username` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `username`, `message`, `time`) VALUES
(1, 'Elion', 'Hello world', '2019-07-28 21:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
