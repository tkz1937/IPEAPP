-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 23 Mai 2018 à 16:32
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ecole_frais`
--
CREATE DATABASE IPEAPP;
-- --------------------------------------------------------

--
-- Structure de la table `annee_scolaire`
--

CREATE TABLE `annee_scolaire` (
  `id` int(11) NOT NULL,
  `debut` smallint(6) NOT NULL,
  `fin` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `montant` int(11) NOT NULL,
  `intitule` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `id` int(11) NOT NULL,
  `nom_classe` varchar(30) NOT NULL,
  `nbre_place` int(11) NOT NULL,
  `nbre_eleve` int(11) NOT NULL,
  `niveau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

CREATE TABLE `eleve` (
  `matricule` varchar(10) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `postnom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `genre` enum('M','F') NOT NULL,
  `adresse` text NOT NULL,
  `nationalite` varchar(30) NOT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(50) NOT NULL,
  `responsable` varchar(60) NOT NULL,
  `tel_responsable` varchar(15) NOT NULL,
  `adresse_responsable` text NOT NULL,
  `pieceJointe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `frais`
--

CREATE TABLE `frais` (
  `id` int(11) NOT NULL,
  `id_inscription` int(11) NOT NULL,
  `montant` int(11) NOT NULL,
  `motif` varchar(25) NOT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(11) NOT NULL,
  `mat_eleve` varchar(10) NOT NULL,
  `id_classe` int(11) NOT NULL,
  `id_annee_scolaire` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE `paiement` (
  `id` int(11) NOT NULL,
  `id_inscription` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `montant` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utlisateur`
--

CREATE TABLE `utlisateur` (
  `id` int(11) NOT NULL,
  `login` varchar(10) NOT NULL,
  `nom_complet` varchar(65) NOT NULL,
  `mot_de_passe` varchar(8) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `niveauAcces` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `annee_scolaire`
--
ALTER TABLE `annee_scolaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `eleve`
--
ALTER TABLE `eleve`
  ADD PRIMARY KEY (`matricule`);

--
-- Index pour la table `frais`
--
ALTER TABLE `frais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_inscription_frais` (`id_inscription`),
  ADD KEY `fk_categorie_frais` (`id_categorie`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_eleve_inscription` (`mat_eleve`),
  ADD KEY `fk_classe_inscription` (`id_classe`),
  ADD KEY `fk_annee_scolaire_inscription` (`id_annee_scolaire`),
  ADD KEY `fk_utilisateur_inscription` (`id_utilisateur`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_inscription_paiement` (`id_inscription`),
  ADD KEY `fk_utilisateur_paiement` (`id_utilisateur`);

--
-- Index pour la table `utlisateur`
--
ALTER TABLE `utlisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `annee_scolaire`
--
ALTER TABLE `annee_scolaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `classe`
--
ALTER TABLE `classe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `frais`
--
ALTER TABLE `frais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `paiement`
--
ALTER TABLE `paiement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utlisateur`
--
ALTER TABLE `utlisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `frais`
--
ALTER TABLE `frais`
  ADD CONSTRAINT `fk_categorie_frais` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id`),
  ADD CONSTRAINT `fk_inscription_frais` FOREIGN KEY (`id_inscription`) REFERENCES `inscription` (`id`);

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `fk_annee_scolaire_inscription` FOREIGN KEY (`id_annee_scolaire`) REFERENCES `annee_scolaire` (`id`),
  ADD CONSTRAINT `fk_classe_inscription` FOREIGN KEY (`id_classe`) REFERENCES `classe` (`id`),
  ADD CONSTRAINT `fk_eleve_inscription` FOREIGN KEY (`mat_eleve`) REFERENCES `eleve` (`matricule`),
  ADD CONSTRAINT `fk_utilisateur_inscription` FOREIGN KEY (`id_utilisateur`) REFERENCES `utlisateur` (`id`);

--
-- Contraintes pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD CONSTRAINT `fk_inscription_paiement` FOREIGN KEY (`id_inscription`) REFERENCES `inscription` (`id`),
  ADD CONSTRAINT `fk_utilisateur_paiement` FOREIGN KEY (`id_utilisateur`) REFERENCES `utlisateur` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
