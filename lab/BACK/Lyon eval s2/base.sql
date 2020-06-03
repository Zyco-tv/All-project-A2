-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mer. 11 mars 2020 à 15:48
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `evalsde`
--

-- --------------------------------------------------------

--
-- Structure de la table `application`
--

CREATE TABLE `application` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `application`
--

INSERT INTO `application` (`id`, `name`, `mail`, `message`, `user_id`) VALUES
(42, 'ertgh', 'ertyh', 'erghrergrerfgfrerfgrerfg', 17),
(43, 'fghjk', 'cfghjk', 'ghjkvbn', 17),
(44, 'pol', 'tltititt', 'zeazeaze', 17);

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

CREATE TABLE `competence` (
  `id` int(11) NOT NULL,
  `titre` text NOT NULL,
  `img` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `competence`
--

INSERT INTO `competence` (`id`, `titre`, `img`, `description`) VALUES
(1, 'HTML', 'https://www.programmation-facile.com/wp-content/uploads/2014/03/html5.png', 'Ceci est HTML et c facile'),
(2, 'srdfgh', 'https://cdn.iconscout.com/icon/free/png-256/php-28-226043.png', 'fdsgdsfg'),
(3, 'tghgfd', 'https://cdn.iconscout.com/icon/free/png-256/php-28-226043.png', 'cvbn'),
(4, 'fghgfds', 'https://cdn.iconscout.com/icon/free/png-256/php-28-226043.png', 'klmklk'),
(5, 'fgfd', 'https://cdn.iconscout.com/icon/free/png-256/php-28-226043.png', 'ùmlmùml'),
(6, 'vbnjhjk', 'hjkl', 'n,bhjhhb'),
(7, 'pol', 'azeaze', 'azeazeazeazeazeaze');

-- --------------------------------------------------------

--
-- Structure de la table `deventure`
--

CREATE TABLE `deventure` (
  `id` int(11) NOT NULL,
  `prenom` text NOT NULL,
  `job` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `deventure`
--

INSERT INTO `deventure` (`id`, `prenom`, `job`) VALUES
(1, 'Tom Litaudon', 'Developpeur');

-- --------------------------------------------------------

--
-- Structure de la table `moi`
--

CREATE TABLE `moi` (
  `id` int(11) NOT NULL,
  `contenue` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `moi`
--

INSERT INTO `moi` (`id`, `contenue`) VALUES
(1, 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `id` int(11) NOT NULL,
  `titre` text NOT NULL,
  `contenue` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id`, `titre`, `contenue`, `url`) VALUES
(2, 'Projet 2', 'aze', 'https://www.google.fr/'),
(3, 'hgf', 'hgf', 'hgfc'),
(4, 'ertghg', 'ghgfd', 'fd'),
(5, 'gfd', 'gfd', 'fd'),
(6, 'gfds', 'gfd', 'vcds'),
(7, 'jklmkj', 'klk', 'lklklklklk'),
(8, 'l:::k', 'l:llll', 'lkjhgfds'),
(9, 'pol', 'azazzaazaz', 'bababa');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `password`, `email`, `admin`) VALUES
(17, 'tom', '$2y$10$zO9azsyiAKkz9N2rFw6vvu1EUmg.EFRji2iojsJ26rX0KcvsaVMge', NULL, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `firstname` (`mail`),
  ADD KEY `FK_user` (`user_id`);

--
-- Index pour la table `competence`
--
ALTER TABLE `competence`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `deventure`
--
ALTER TABLE `deventure`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `moi`
--
ALTER TABLE `moi`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `competence`
--
ALTER TABLE `competence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `deventure`
--
ALTER TABLE `deventure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `moi`
--
ALTER TABLE `moi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `FK_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
