-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 28 juin 2024 à 13:41
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lepanier`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int NOT NULL AUTO_INCREMENT,
  `img` varchar(1000) NOT NULL,
  `price` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `descri` varchar(1000) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `img`, `price`, `name`, `descri`, `link`) VALUES
(1, 'K650.jpg', 50, 'K650', 'Profitez du confort et de la polyvalence du Logitech Signature K650. Avec ses touches silencieuses, son repose-poignet intégré et sa compatibilité multi-systèmes (Windows, macOS, Linux, Chrome OS), ce clavier sans fil est idéal pour toutes vos tâches. Connexion Bluetooth ou USB et longue autonomie de batterie pour une productivité sans interruption. Clavier pour de la bureautique, en membrane. Disponible aussi en blanc. Taille du clavier : 100%.', 'https://www.amazon.fr/Logitech-Ergonomique-Repose-Poignets-Silencieuses-Compatible/dp/B07W6GVS5P/ref=sr_1_1_sspa?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&sr=8-1-spons&sp_csd=d2lkZ2V0TmFtZT1zcF9hdGY&psc=1'),
(2, 'g213.webp', 70, 'G213', 'Découvrez le Logitech G213 Prodigy, un clavier gaming performant conçu pour les joueurs exigeants. Doté de touches ultra-réactives et résistantes, d\'un éclairage RGB personnalisable, et d\'un repose-poignet intégré, il offre un confort et une précision inégalés. Résistant aux éclaboussures et avec des contrôles multimédia dédiés. Améliorez votre expérience de jeu avec le Logitech G213 Prodigy. Clavier mécanique en 100%.', 'https://www.amazon.fr/Logitech-Eclairage-%C3%89claboussures-Personnalisable-Multim%C3%A9dia/dp/B01L6L45ES'),
(3, 'MK470.jpg', 50, 'MK470', 'Optez pour le Logitech MK470, un ensemble clavier et souris sans fil ultra-mince et élégant. Son design compact et moderne s\'adapte parfaitement à tout espace de travail. Équipé de touches à ciseaux, le clavier offre une frappe confortable, silencieuse et réactive, idéale pour la bureautique et une utilisation quotidienne prolongée. Avec une connectivité sans fil fiable et une longue autonomie. Parfait pour être productif. Disponible en blanc. Taille du clavier : 100%.\r\n', 'https://www.amazon.fr/Logitech-Ensemble-Clavier-Souris-Ultra-fin/dp/B07VCS18BK'),
(4, 'logitechmx.webp', 120, 'MX KEYS S', 'Découvrez le Logitech MX Keys S, un clavier sans fil haut de gamme conçu pour les professionnels. Il offre une frappe précise, fluide et silencieuse. Parfait pour une utilisation intensive, le MX Keys S est compatible avec plusieurs dispositifs et systèmes d\'exploitation. Avec une autonomie prolongée et une conception ergonomique, le Logitech MX Keys S est le choix idéal pour ceux qui recherchent confort et efficacité au quotidien. Taille du clavier : 100%.', 'https://www.amazon.fr/Logitech-Rechargeable-R%C3%A9tro%C3%A9clair%C3%A9-Programmables-Fran%C3%A7ais-Gris/dp/B07W6JFM87/ref=sr_1_3?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&s=computers&sr=1-3'),
(5, 'corsair-k55-rgb-pro-xt.jpg', 85, 'CORSAIR K55 PRO XT ', 'Découvrez le Corsair K55 Pro XT, un clavier gaming conçu pour offrir une performance optimale aux joueurs. Doté de switches à membrane réactive, il assure une frappe confortable et silencieuse. Le K55 Pro XT est équipé de six touches macro programmables pour des commandes personnalisées et un contrôle accru en jeu. Son rétroéclairage RGB dynamique et personnalisable, avec des effets lumineux vibrants, permet une expérience de jeu immersive. Résistant aux éclaboussures et aux poussières, ce clavier est durable et parfait pour des sessions de jeu intensives. Le clavier Corsair K55 Pro XT un choix idéal pour les gamers grâce à son confort, ses performances, son look et ses caractéristiques qui le fait sortir du lot. Taille du clavier : 100%.\r\n', 'https://www.amazon.fr/CORSAIR-Clavier-Filaire-Membrane-%C3%A9claboussures/dp/B08Y5XVK9C/ref=sr_1_3?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&s=computers&sr=1-3'),
(6, 'corsair k65.jpg', 100, 'CORSAIR K65', 'Découvrez le Corsair K65, un clavier mécanique compact conçu pour les gamers exigeants. Équipé de switches Cherry MX Red, il offre une frappe linéaire et réactive, parfaite pour les jeux nécessitants rapidité et précision. Son format tenkeyless (sans pavé numérique) permet de gagner de l\'espace sur le bureau et facilite le transport pour les sessions de jeu en déplacement. Le rétroéclairage RGB dynamique et personnalisable offre une expérience de jeu immersive avec des effets lumineux saisissants. Fabriqué avec un châssis en aluminium brossé, le Corsair K65 est robuste et durable. Ce clavier garantit une performance sans faille, même lors des actions les plus intenses. Taille du clavier : 100%.\r\n', 'https://www.amazon.fr/Corsair-R%C3%A9tro%C3%A9clairage-personnalisable-m%C3%A9caniques-Technologie/dp/B08XKD8R69/ref=sr_1_4?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&s=computers&sr=1-4'),
(7, 'hunt.jpg', 115, 'Huntsman Mini', 'Découvrez le Razer Huntsman Mini, un clavier mécanique compact conçu pour les gamers exigeants. Équipé de switches optiques Razer, il offre une frappe ultra-rapide et réactive, parfaite pour les jeux nécessitant rapidité et précision. Son format 60% permet de gagner de l\'espace sur le bureau et facilite le transport pour les sessions de jeu en déplacement. Le rétroéclairage Chroma RGB dynamique et personnalisable offre une expérience de jeu immersive avec des effets lumineux saisissants. Fabriqué avec un châssis en aluminium de qualité, le Razer Huntsman Mini est robuste et durable. Ce clavier garantit une performance sans faille et perte de données, même lors des actions les plus intenses. Taille du clavier : 60%.', 'https://www.amazon.fr/Razer-Huntsman-Mini-Switches-Rouges/dp/B08CY2PWPJ/ref=sr_1_1_sspa?s=computers&sr=1-1-spons&sp_csd=d2lkZ2V0TmFtZT1zcF9hdGY&psc=1'),
(8, 'apex.jpeg', 200, 'Apex Pro Mini', 'Découvrez l\'Apex Pro Mini, un clavier mécanique compact conçu pour les gamers exigeants. Équipé de switches OmniPoint ajustables, il offre une frappe personnalisable et ultra-réactive, idéale pour les jeux nécessitant rapidité et précision. Son format compact sans pavé numérique permet de gagner de l\'espace sur le bureau et facilite le transport pour les sessions de jeu en déplacement. Le rétroéclairage RGB dynamique et personnalisable offre une expérience de jeu immersive avec du RGB. Fabriqué avec un châssis en aluminium, l\'Apex Pro Mini est à la fois léger et durable. Ce clavier garantit une performance optimale dans toutes les situations de jeu, assurant une expérience fluide et sans compromis. Taille du clavier : 60%, TKL ou 100%.\r\n', 'https://www.amazon.fr/SteelSeries-Apex-Pro-Mini-Actionnement/dp/B0B2X26TD3/ref=sr_1_3?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&s=computers&sr=1-3'),
(9, 'cIYx.jpg', 50, 'CIY X77', 'Découvrez le CIY X77 toutes les touches du clavier mécanique X77 peuvent être programmées. Son design Ergonomic Angle and RGB Backlit peut être ajusté à la façon dont vous souhaitez qu\'il se comporte via le pilote. Tous les commutateurs utilisent des commutateurs remplaçables à chaud, vous pouvez les changer à volonté, le câble détachable de type -C peut être très pratique pour vous de stocker ou de transporter, conserve les touches fléchées autonomes, Anti-Ghosting vous permet de jouer à divers jeux vidéo librement. Taille du clavier : TKL.\r\n', 'https://www.amazon.fr/CIY-M%C3%A9canique-R%C3%A9tro%C3%A9clair%C3%A9-Anti-Ghosting-Programmable/dp/B09YXSXHLZ/ref=sr_1_1_sspa?sr=8-1-spons&sp_csd=d2lkZ2V0TmFtZT1zcF9hdGY&psc=1'),
(10, 'glab.jpg', 50, 'G-LAB KEYZ CARBON E', 'Découvrez le G-LAB KEYZ Carbon E, un clavier mécanique conçu pour les gamers exigeants. Équipé de switches Outemu Blue, il offre une frappe tactile et audible, idéale pour les jeux nécessitant rapidité et précision. Son format complet permet une utilisation polyvalente pour le jeu comme pour la bureautique. Le rétroéclairage RGB dynamique et personnalisable offre une expérience de jeu immersive avec des effets lumineux saisissants. Fabriqué avec un châssis robuste en plastique renforcé, le G-LAB KEYZ Carbon E est durable et fiable. Taille du clavier : 100%.', 'https://www.amazon.fr/Clavier-M%C3%A9canique-Switches-Pr%C3%A9cis-R%C3%A9tro-%C3%89clairage/dp/B07YG1VBGW/ref=sr_1_5?sr=8-5'),
(11, 'vulcan.jpg', 160, 'ROCCAT VULCAN II', 'Découvrez le ROCCAT Vulcan II, un clavier mécanique conçu pour les gamers exigeants. Équipé de switches Titan II, sont parfaites pour les jeux nécessitants rapidité et précision. Son format TKL (sans pavé numérique) permet de gagner de l\'espace sur le bureau et facilite le transport. Le rétroéclairage AIMO RGB dynamique et personnalisable offre une expérience de jeu immersive avec des effets lumineux saisissants. Fabriqué avec un châssis en aluminium de qualité, le ROCCAT Vulcan II est robuste et durable. Taille du clavier : 100% ou TKL.', 'https://www.amazon.fr/Roccat-Vulcan-R%C3%A9tro-%C3%89clair%C3%A9es-Personnalisables-Repose-Poignet/dp/B097BWNKSW/ref=sr_1_5?sr=8-5'),
(12, 'clavier-wooting-60he.jpg', 200, 'WOOTING 60HE+', 'Découvrez le Wooting 60HE+, un clavier mécanique compact conçu pour les gamers exigeants. Équipé de switches Lekker, il offre une frappe linéaire et réactive, parfaite pour les jeux nécessitants rapidité et précision. Son format 60% permet de gagner de l\'espace sur le bureau et facilite le transport. Le rétroéclairage RGB dynamique et personnalisable offre une expérience de jeu immersive avec des effets lumineux saisissants. Fabriqué avec un châssis robuste et durable, le Wooting 60HE+ est conçu pour résister aux gros chocs. Taille du clavier : 60%.\r\n', 'https://wooting.io/wooting-60he');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
