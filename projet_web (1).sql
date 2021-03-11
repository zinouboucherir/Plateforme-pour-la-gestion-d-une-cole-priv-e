-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 02 mars 2021 à 20:38
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_web`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE `adresse` (
  `id` int(11) NOT NULL,
  `adresse` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO `adresse` (`id`, `adresse`) VALUES
(1, 'Didouche mourade Constantine');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `descr` text NOT NULL,
  `lien` varchar(1000) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `descr`, `lien`, `type`, `date`) VALUES
(59, 'l\'algérie ', 'Algeria, large, predominantly Muslim country of North Africa. From the Mediterranean coast, along which most of its people live, Algeria extends southward deep into the heart of the Sahara, a forbidding desert where the Earth’s hottest surface temperatures have been recorded and which constitutes more than four-fifths of the country’s area. The Sahara and its extreme climate dominate the country. The contemporary Algerian novelist Assia Djebar has highlighted the environs, calling her country “a dream of sand.”', 'images/photo-1509062522246-3755977927d7.jfif', 'tout', '2021-02-24 23:00:00'),
(70, 'l\'algérie mon pays', 'Algeria, large, predominantly Muslim country of North Africa. From the Mediterranean coast, along which most of its people live, Algeria extends southward deep into the heart of the Sahara, a forbidding desert where the Earth’s hottest surface temperatures have been recorded and which constitutes more than four-fifths of the country’s area. The Sahara and its extreme climate dominate the country. The contemporary Algerian novelist Assia Djebar has highlighted the environs, calling her country “a dream of sand.”', 'images/photo-1509062522246-3755977927d7.jfif', 'secondaire', '2021-02-24 23:00:00'),
(71, 'l\'algérie mon pays', 'Algeria, large, predominantly Muslim country of North Africa. From the Mediterranean coast, along which most of its people live, Algeria extends southward deep into the heart of the Sahara, a forbidding desert where the Earth’s hottest surface temperatures have been recorded and which constitutes more than four-fifths of the country’s area. The Sahara and its extreme climate dominate the country. The contemporary Algerian novelist Assia Djebar has highlighted the environs, calling her country “a dream of sand.”', 'images/photo-1509062522246-3755977927d7.jfif', 'tout', '2021-02-24 23:00:00'),
(72, 'l\'algérie mon pays', 'Algeria, large, predominantly Muslim country of North Africa. From the Mediterranean coast, along which most of its people live, Algeria extends southward deep into the heart of the Sahara, a forbidding desert where the Earth’s hottest surface temperatures have been recorded and which constitutes more than four-fifths of the country’s area. The Sahara and its extreme climate dominate the country. The contemporary Algerian novelist Assia Djebar has highlighted the environs, calling her country “a dream of sand.”', 'images/photo-1509062522246-3755977927d7.jfif', 'moyen', '2021-02-24 23:00:00'),
(76, 'l\'algérie ', 'Algeria, large, predominantly Muslim country of North Africa. From the Mediterranean coast, along which most of its people live, Algeria extends southward deep into the heart of the Sahara, a forbidding desert where the Earth’s hottest surface temperatures have been recorded and which constitutes more than four-fifths of the country’s area. The Sahara and its extreme climate dominate the country. The contemporary Algerian novelist Assia Djebar has highlighted the environs, calling her country “a dream of sand.”', 'images/photo-1509062522246-3755977927d7.jfif', 'primaire', '2021-02-24 23:00:00'),
(77, 'l\'algérie mon pays', 'Algeria, large, predominantly Muslim country of North Africa. From the Mediterranean coast, along which most of its people live, Algeria extends southward deep into the heart of the Sahara, a forbidding desert where the Earth’s hottest surface temperatures have been recorded and which constitutes more than four-fifths of the country’s area. The Sahara and its extreme climate dominate the country. The contemporary Algerian novelist Assia Djebar has highlighted the environs, calling her country “a dream of sand.”', 'images/photo-1509062522246-3755977927d7.jfif', 'tout', '2021-02-24 23:00:00'),
(78, 'l\'algérie mon pays', 'Algeria, large, predominantly Muslim country of North Africa. From the Mediterranean coast, along which most of its people live, Algeria extends southward deep into the heart of the Sahara, a forbidding desert where the Earth’s hottest surface temperatures have been recorded and which constitutes more than four-fifths of the country’s area. The Sahara and its extreme climate dominate the country. The contemporary Algerian novelist Assia Djebar has highlighted the environs, calling her country “a dream of sand.”', 'images/photo-1509062522246-3755977927d7.jfif', 'enseignant', '2021-02-24 23:00:00'),
(82, 'article10', 'Algeria, large, predominantly Muslim country of North Africa. From the Mediterranean coast, along which most of its people live, Algeria extends southward deep into the heart of the Sahara, a forbidding desert where the Earth’s hottest surface temperatures have been recorded and which constitutes more than four-fifths of the country’s area. The Sahara and its extreme climate dominate the country. The contemporary Algerian novelist Assia Djebar has highlighted the environs, calling her country “a dream of sand.”', 'images/photo-1509062522246-3755977927d7.jfif', 'enseignant', '2021-02-28 20:41:22');

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `annee` int(10) NOT NULL,
  `numroClasse` int(10) NOT NULL,
  `cycle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `classes`
--

INSERT INTO `classes` (`id`, `annee`, `numroClasse`, `cycle`) VALUES
(1, 0, 0, '0'),
(22, 4, 1, 'moyen'),
(23, 3, 2, 'secondaire'),
(25, 3, 1, 'primaire'),
(26, 2, 1, 'moyen'),
(27, 3, 1, 'moyen');

-- --------------------------------------------------------

--
-- Structure de la table `elevclasse`
--

CREATE TABLE `elevclasse` (
  `id` int(11) NOT NULL,
  `classe_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `elevclasse`
--

INSERT INTO `elevclasse` (`id`, `classe_id`) VALUES
(26, 22),
(36, 22),
(30, 23),
(34, 23),
(35, 25),
(29, 26);

-- --------------------------------------------------------

--
-- Structure de la table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `email`
--

INSERT INTO `email` (`id`, `email`) VALUES
(1, 'zineddinnezinou@yahoo.fr'),
(3, 'hm_boucherir@esi.dz');

-- --------------------------------------------------------

--
-- Structure de la table `emploidutemps`
--

CREATE TABLE `emploidutemps` (
  `id` int(11) NOT NULL,
  `jour` varchar(100) NOT NULL,
  `t1` varchar(100) NOT NULL,
  `t2` varchar(100) NOT NULL,
  `t3` varchar(100) NOT NULL,
  `t4` varchar(100) NOT NULL,
  `t5` varchar(100) NOT NULL,
  `t6` varchar(100) NOT NULL,
  `t7` varchar(100) NOT NULL,
  `t8` varchar(100) NOT NULL,
  `t9` varchar(100) NOT NULL,
  `cycle` varchar(100) NOT NULL,
  `classe_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `emploidutemps`
--

INSERT INTO `emploidutemps` (`id`, `jour`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `t7`, `t8`, `t9`, `cycle`, `classe_id`) VALUES
(6, 'dimanche', 'mathematique', 'arabe', 'physique', '/', '/', 'mathematique', 'anglais', 'francais', 'mathematique', 'moyen', 22),
(7, 'lundi', 'math', 'arabe', 'physique', 'science', '/', 'science islamique', 'anglais', 'francais', 'mathematique', 'moyen', 22),
(8, 'mardi', 'mathema', 'science', 'islamique', 'science', 'islamique', 'science islamique', 'anglais', 'francais', '/', 'moyen', 22),
(9, 'mercredi', 'science', 'science', 'physique', '/', '/', 'science islamique', 'anglais', '/', '/', 'moyen', 22),
(10, 'jeudi', 'math', 'science', 'islamique', 'science', 'islamique', '/', 'anglais', '/', 'mathematique', 'moyen', 22),
(11, 'dimanche', 'math', 'arabe', 'physique', '/', '/', 'science islamique', '/', 'francais', 'mathematique', 'secondaire', 23),
(12, 'lundi', 'science', 'arabe', 'physique', '/', '/', 'science islamique', 'anglais', 'francais', '/', 'secondaire', 23),
(13, 'mardi', 'mathematique', 'arabe', 'islamique', 'science', 'islamique', 'science islamique', 'anglais', 'francais', 'mathematique', 'secondaire', 23),
(14, 'mercredi', 'science', 'science', 'islamique', 'science', 'islamique', 'mathematique', 'anglais', 'francais', 'mathematique', 'secondaire', 23),
(15, 'jeudi', 'science', 'science', 'histoire', 'géographie', 'islamique', '/', '/', '/', '/', 'secondaire', 23),
(16, 'dimanche', 'science', 'science', 'islamique', 'science', 'islamique', 'science islamique', '/', '/', '/', 'primaire', 25);

-- --------------------------------------------------------

--
-- Structure de la table `ensclasse`
--

CREATE TABLE `ensclasse` (
  `id` int(11) NOT NULL,
  `id_classe` int(11) NOT NULL,
  `id_ens` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ensclasse`
--

INSERT INTO `ensclasse` (`id`, `id_classe`, `id_ens`) VALUES
(11, 25, 1),
(12, 23, 6),
(14, 22, 7),
(15, 26, 7),
(16, 26, 1);

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `matiere` varchar(255) NOT NULL,
  `jourRec` varchar(255) NOT NULL,
  `heureRec` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`id`, `nom`, `prenom`, `matiere`, `jourRec`, `heureRec`) VALUES
(1, 'Chalal', 'Yacine', 'arabe', 'dimanche', '9H-10H'),
(6, 'Hassini', 'Sabrina', 'anglais', 'mardi', '13H-14H'),
(7, 'Bouidaine', 'Diaeddine', 'arabe', 'lundi', '11H-12H');

-- --------------------------------------------------------

--
-- Structure de la table `fax`
--

CREATE TABLE `fax` (
  `id` int(11) NOT NULL,
  `fax` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `fax`
--

INSERT INTO `fax` (`id`, `fax`) VALUES
(2, '031236567'),
(3, '021213456'),
(4, '031456787');

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `matiere` varchar(100) NOT NULL,
  `cc` int(11) NOT NULL,
  `devoir` int(11) NOT NULL,
  `examen` int(11) NOT NULL,
  `eleve_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `notes`
--

INSERT INTO `notes` (`id`, `matiere`, `cc`, `devoir`, `examen`, `eleve_id`) VALUES
(1, 'mathématique', 16, 19, 20, 26),
(2, 'français', 16, 18, 18, 26),
(3, 'arabe', 16, 16, 16, 26),
(4, 'histoire', 20, 20, 20, 26),
(5, 'physique', 20, 16, 16, 29),
(6, 'science', 20, 20, 18, 29),
(7, 'informatique', 16, 17, 15, 29),
(8, 'mathématique', 16, 17, 17, 29),
(9, 'anglais', 20, 20, 16, 30),
(10, 'géographie', 20, 20, 20, 30),
(11, 'science islamiques', 16, 19, 16, 30),
(12, 'sport', 20, 20, 20, 30);

-- --------------------------------------------------------

--
-- Structure de la table `parenteleve`
--

CREATE TABLE `parenteleve` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `parenteleve`
--

INSERT INTO `parenteleve` (`id`, `parent_id`) VALUES
(26, 4),
(34, 33),
(35, 33),
(36, 33);

-- --------------------------------------------------------

--
-- Structure de la table `presentation`
--

CREATE TABLE `presentation` (
  `id` int(11) NOT NULL,
  `texte` text NOT NULL,
  `image` varchar(1000) NOT NULL,
  `titre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `presentation`
--

INSERT INTO `presentation` (`id`, `texte`, `image`, `titre`) VALUES
(3, 'l’école au Trésor-du-Boisé accueille près de 860 élèves (2019-2020) de la maternelle à la sixième année issus de plusieurs milieux ethniques et socioéconomiques différents.\r\n\r\nSon architecture permet d’offrir des services adaptés aux besoins des enfants. Une grande bibliothèque et une salle polyvalente qui présentent une grande luminosité ajoutent sans contredit au bien-être des élèves\r\n\r\nLe respect de l’environnement est à l’honneur puisque le bâtiment et son mobilier répondent aux normes (LEED®)  (Leadership in Energy and Environmental Design) pour les habitations écologiques et saines qui promeuvent et stimulent la construction grâce à une approche globale de développement durable.\r\n\r\nLes volets d’apprentissage proposés assurent une grande motivation chez l’élève et lui permettent d’explorer et de développer ses compétences selon trois grands centres d’intérêt : univers social et langues, sports et plein air ou musique.\r\n\r\nEnfin, le personnel, les parents et la communauté de l’école  au Trésor-du-Boisé s’impliquent dans de nombreux projets afin de rendre le séjour des enfants des plus agréables et enrichissants.', 'images/photo-1456513080510-7bf3a84b82f8.jfif', 'présentation de la bibliothéque'),
(4, 'l’école au Trésor-du-Boisé accueille près de 860 élèves (2019-2020) de la maternelle à la sixième année issus de plusieurs milieux ethniques et socioéconomiques différents. Son architecture permet d’offrir des services adaptés aux besoins des enfants. Une grande bibliothèque et une salle polyvalente qui présentent une grande luminosité ajoutent sans contredit au bien-être des élèves Le respect de l’environnement est à l’honneur puisque le bâtiment et son mobilier répondent aux normes (LEED®) (Leadership in Energy and Environmental Design) pour les habitations écologiques et saines qui promeuvent et stimulent la construction grâce à une approche globale de développement durable. Les volets d’apprentissage proposés assurent une grande motivation chez l’élève et lui permettent d’explorer et de développer ses compétences selon trois grands centres d’intérêt : univers social et langues, sports et plein air ou musique. Enfin, le personnel, les parents et la communauté de l’école au Trésor-du-Boisé s’impliquent dans de nombreux projets afin de rendre le séjour des enfants des plus agréables et enrichissants.', 'images/photo-1509062522246-3755977927d7.jfif', 'la localisation de l\'école'),
(5, 'l’école au Trésor-du-Boisé accueille près de 860 élèves (2019-2020) de la maternelle à la sixième année issus de plusieurs milieux ethniques et socioéconomiques différents. Son architecture permet d’offrir des services adaptés aux besoins des enfants. Une grande bibliothèque et une salle polyvalente qui présentent une grande luminosité ajoutent sans contredit au bien-être des élèves Le respect de l’environnement est à l’honneur puisque le bâtiment et son mobilier répondent aux normes (LEED®) (Leadership in Energy and Environmental Design) pour les habitations écologiques et saines qui promeuvent et stimulent la construction grâce à une approche globale de développement durable. Les volets d’apprentissage proposés assurent une grande motivation chez l’élève et lui permettent d’explorer et de développer ses compétences selon trois grands centres d’intérêt : univers social et langues, sports et plein air ou musique. Enfin, le personnel, les parents et la communauté de l’école au Trésor-du-Boisé s’impliquent dans de nombreux projets afin de rendre le séjour des enfants des plus agréables et enrichissants.', 'images/photo-1587620962725-abab7fe55159.jfif', 'nos étudiants');

-- --------------------------------------------------------

--
-- Structure de la table `restauration`
--

CREATE TABLE `restauration` (
  `id` int(11) NOT NULL,
  `jour` varchar(255) NOT NULL,
  `entrée` varchar(255) NOT NULL,
  `principale` varchar(255) NOT NULL,
  `dessert` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `restauration`
--

INSERT INTO `restauration` (`id`, `jour`, `entrée`, `principale`, `dessert`) VALUES
(1, 'dimanche', 'hamburger', 'lentille', 'Yaourt'),
(2, 'lundi', 'souflet', 'soupe de poisson', 'banane'),
(3, 'mardi', 'salade variée', 'frite omlette', 'jus d\'orange'),
(4, 'mercredi', 'bourak', 'chorba frik', 'salade de fruits'),
(7, 'jeudi', 'salade variée', 'soupe de poisson', 'banane');

-- --------------------------------------------------------

--
-- Structure de la table `telephone`
--

CREATE TABLE `telephone` (
  `id` int(11) NOT NULL,
  `numero` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `telephone`
--

INSERT INTO `telephone` (`id`, `numero`) VALUES
(1, '0791970008'),
(2, '0554676543'),
(3, '077656545');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` text NOT NULL,
  `tlfn1` varchar(10) NOT NULL,
  `tlfn2` varchar(10) NOT NULL,
  `tlfn3` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `adresse`, `tlfn1`, `tlfn2`, `tlfn3`, `email`) VALUES
(4, 'boucherir', 'mohamed cherif', 'constantint, Algérie', '0556545657', '0765686649', '0665454323', 'cherif.boucherir@gmail.com'),
(26, 'Boucherir', 'Mohamed Siradj eddine', 'Ddouche Mourad Constantine', '0558976768', '0558976768', '0558976768', 'nazimbtw@gmail.com'),
(29, 'Boucherir', 'zineddine', 'constantine, Algérie', '0558976768', '0558976768', '0558976768', 'zineddinnezinou@yahoo.com'),
(30, 'Boucherir', 'seif el islem', 'Ddouche Mourad Constantine', '0558976768', '0558976768', '0558976768', 'islem@gmail.com'),
(31, 'khefif', 'mahdia', 'Ddouche Mourad Constantine', '0558976768', '0558976768', '0558976768', 'mahdia@gmail.com'),
(32, 'Dellys', 'hachemi', 'alger Algérie', '0558976768', '0558976768', '0558976768', 'dellys@esi.dz'),
(33, 'zatout', 'badreddine', 'batna', '0558976768', '0558976768', '0558976768', 'hb_zatout@esi.dz'),
(34, 'Bouidaine', 'Diaeddine', 'palestine ', '0558976768', '0558976768', '0558976768', 'hd_bouidaine@esi.dz'),
(35, 'haddad', 'zineddine', 'skikda', '0558976768', '0558976768', '0558976768', 'hz_haddad@esi.dz'),
(36, 'saleh ', 'djehaiche', 'setif', '0558976768', '0558976768', '0558976768', 'hs_djehaiche@esi.dz');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`, `type`) VALUES
(4, 'cherif', '91e2f4b9722fd4beb73fa2edd68d9f47', 3),
(26, 'nazim', '1d1a7a585571d574457456a39506fd2e', 2),
(29, 'zinou', '1d1a7a585571d574457456a39506fd2e', 2),
(30, 'islem', '1d1a7a585571d574457456a39506fd2e', 2),
(31, 'mahdia', '1d1a7a585571d574457456a39506fd2e', 3),
(32, 'administrateur', '1d1a7a585571d574457456a39506fd2e', 1),
(33, 'badro', '1d1a7a585571d574457456a39506fd2e', 3),
(34, 'diaa', '1d1a7a585571d574457456a39506fd2e', 2),
(35, 'zinou', '1d1a7a585571d574457456a39506fd2e', 2),
(36, 'saleh', '1d1a7a585571d574457456a39506fd2e', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `elevclasse`
--
ALTER TABLE `elevclasse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classe_id` (`classe_id`);

--
-- Index pour la table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `emploidutemps`
--
ALTER TABLE `emploidutemps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emploidutemps_ibfk_1` (`classe_id`);

--
-- Index pour la table `ensclasse`
--
ALTER TABLE `ensclasse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ensclasse_ibfk_2` (`id_ens`),
  ADD KEY `ensclasse_ibfk_1` (`id_classe`);

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fax`
--
ALTER TABLE `fax`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notes_ibfk_1` (`eleve_id`);

--
-- Index pour la table `parenteleve`
--
ALTER TABLE `parenteleve`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Index pour la table `presentation`
--
ALTER TABLE `presentation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `restauration`
--
ALTER TABLE `restauration`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `telephone`
--
ALTER TABLE `telephone`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT pour la table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `elevclasse`
--
ALTER TABLE `elevclasse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `emploidutemps`
--
ALTER TABLE `emploidutemps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `ensclasse`
--
ALTER TABLE `ensclasse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `enseignant`
--
ALTER TABLE `enseignant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `fax`
--
ALTER TABLE `fax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `parenteleve`
--
ALTER TABLE `parenteleve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `presentation`
--
ALTER TABLE `presentation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `restauration`
--
ALTER TABLE `restauration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `telephone`
--
ALTER TABLE `telephone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `elevclasse`
--
ALTER TABLE `elevclasse`
  ADD CONSTRAINT `elevclasse_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `elevclasse_ibfk_2` FOREIGN KEY (`classe_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `emploidutemps`
--
ALTER TABLE `emploidutemps`
  ADD CONSTRAINT `emploidutemps_ibfk_1` FOREIGN KEY (`classe_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ensclasse`
--
ALTER TABLE `ensclasse`
  ADD CONSTRAINT `ensclasse_ibfk_1` FOREIGN KEY (`id_classe`) REFERENCES `classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ensclasse_ibfk_2` FOREIGN KEY (`id_ens`) REFERENCES `enseignant` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`eleve_id`) REFERENCES `elevclasse` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `parenteleve`
--
ALTER TABLE `parenteleve`
  ADD CONSTRAINT `parenteleve_ibfk_1` FOREIGN KEY (`id`) REFERENCES `elevclasse` (`id`),
  ADD CONSTRAINT `parenteleve_ibfk_2` FOREIGN KEY (`parent_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id`) REFERENCES `utilisateurs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
