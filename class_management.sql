-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 01 avr. 2021 à 01:12
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `class_management`
--

-- --------------------------------------------------------

--
-- Structure de la table `briefs`
--

CREATE TABLE `briefs` (
  `brief_id` int(255) NOT NULL,
  `brief_title` varchar(255) NOT NULL,
  `brief_author` varchar(255) NOT NULL,
  `brief_img` varchar(255) NOT NULL,
  `brief_tag` varchar(255) NOT NULL,
  `brief_comp` varchar(255) NOT NULL,
  `brief_deadline` date NOT NULL,
  `brief_content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `briefs`
--

INSERT INTO `briefs` (`brief_id`, `brief_title`, `brief_author`, `brief_img`, `brief_tag`, `brief_comp`, `brief_deadline`, `brief_content`) VALUES
(1, 'Test Brief', '', 'Slice321.jpg', 'test', 'test', '2021-04-03', 'ceci est un test \r\n\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe dolor minima, velit quis tempora veritatis maiores expedita id excepturi molestiae, nam aliquid rerum voluptatum dolore possimus esse hic quod quasi!\r\n Suscipit ipsam, quisquam voluptatem voluptatum impedit magnam deserunt repudiandae quae consectetur nisi illo, eius veniam officiis et doloremque error nemo dolore animi explicabo enim. Ut eaque nisi enim incidunt dolores?\r\n Libero aliquam tenetur maxime corrupti ipsa unde deserunt nesciunt laborum consequatur. Aperiam reprehenderit fuga veniam harum necessitatibus aut, repellendus amet facilis nulla. Aliquid, impedit rem. Mollitia voluptatibus necessitatibus omnis fugit!\r\n Sunt dolores placeat rem corporis enim adipisci blanditiis mollitia molestiae aut! Natus, reprehenderit? Corporis quibusdam soluta nostrum earum ea at nihil nam dolore ratione velit, dolorum consequuntur eligendi quo error!\r\n Placeat magni cum maiores explicabo ratione! Id suscipit incidunt necessitatibus hic quasi? Eius quae repellat saepe sint minima corporis at est temporibus sed cumque reprehenderit minus, autem ipsa velit magnam.\r\n Minima inventore pariatur dignissimos dolor doloribus distinctio deserunt enim dolorum temporibus voluptates laborum ut quis, laudantium modi, dolorem fugiat commodi expedita velit aperiam officia quia atque ipsa necessitatibus. Modi, hic?\r\n Enim temporibus quod aperiam minus ducimus explicabo laboriosam! Deserunt explicabo harum maiores beatae maxime accusamus odio praesentium perferendis molestiae omnis dignissimos, possimus nam soluta voluptatibus laborum labore accusantium cum! Odio!\r\n Optio consequuntur dolorem molestiae libero, sunt nesciunt iusto dicta quae itaque maxime commodi perferendis quaerat provident perspiciatis quam ex laboriosam non harum ullam aliquam exercitationem! Amet nesciunt aspernatur tenetur rerum.\r\n Eligendi, dolores. Voluptates, placeat vel. Natus est similique suscipit, rem reiciendis minus laudantium dicta perspiciatis ipsum animi sit nesciunt at sunt officia. Cum similique veritatis nobis dolore, animi pariatur recusandae!\r\n Ab autem expedita minus assumenda dolorum laborum sunt, adipisci in ea eius explicabo quas dignissimos delectus doloribus inventore ratione magni sapiente unde numquam quidem quibusdam quaerat eveniet! Debitis, illo fugit.\r\n Doloribus nisi nemo quis voluptate vitae? Molestias voluptate aspernatur alias voluptatum sequi magnam debitis! Quisquam voluptate veritatis necessitatibus consequuntur voluptates cupiditate quam ipsum, dolores nobis, dignissimos hic, atque odio minus!\r\n Maxime, animi facilis voluptatem impedit molestias eius omnis, cumque perferendis culpa rem repudiandae quaerat, voluptatibus delectus ad earum ullam reiciendis maiores nulla. Expedita consectetur consequatur voluptatum ipsum tenetur dolores incidunt!\r\n Illum asperiores, facilis sed ex hic quo. Minus at optio facere odio tenetur suscipit doloribus alias molestiae porro, quidem, quod ullam earum corporis explicabo quaerat fuga consequatur quas sit illo.\r\n Itaque officiis atque quia at amet corporis, est harum alias, possimus voluptatum explicabo earum qui architecto impedit ipsum magnam quae aliquam quis. Ad rerum expedita id iusto placeat atque repudiandae!\r\n Accusantium quo praesentium nobis, impedit totam doloremque? Ratione, explicabo. Asperiores eligendi reprehenderit magni blanditiis obcaecati placeat. Animi ut laudantium vel. Aperiam eius facere possimus, vero doloribus debitis nulla dolores asperiores.');

-- --------------------------------------------------------

--
-- Structure de la table `brief_comp`
--

CREATE TABLE `brief_comp` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `competances`
--

CREATE TABLE `competances` (
  `comp_id` int(11) NOT NULL,
  `comp_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `competances`
--

INSERT INTO `competances` (`comp_id`, `comp_name`) VALUES
(3, 'Join tables');

-- --------------------------------------------------------

--
-- Structure de la table `quizz_qst`
--

CREATE TABLE `quizz_qst` (
  `qst_id` int(11) NOT NULL,
  `qst_cont` varchar(255) NOT NULL,
  `ans_1` varchar(255) NOT NULL,
  `ans_2` varchar(255) NOT NULL,
  `ans_3` varchar(255) NOT NULL,
  `ans_4` varchar(255) NOT NULL,
  `ans_true` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `user_birthday` date NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `user_class` int(10) NOT NULL,
  `user_comp` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_fname`, `user_lname`, `user_birthday`, `user_role`, `user_class`, `user_comp`, `user_email`, `user_password`) VALUES
(2, 'Youssef', 'Diouani', '1996-09-26', '', 0, '', 'diouani.youssef@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Structure de la table `user_comp`
--

CREATE TABLE `user_comp` (
  `id` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user_comp`
--

INSERT INTO `user_comp` (`id`) VALUES
(3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `briefs`
--
ALTER TABLE `briefs`
  ADD PRIMARY KEY (`brief_id`);

--
-- Index pour la table `brief_comp`
--
ALTER TABLE `brief_comp`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `competances`
--
ALTER TABLE `competances`
  ADD PRIMARY KEY (`comp_id`);

--
-- Index pour la table `quizz_qst`
--
ALTER TABLE `quizz_qst`
  ADD PRIMARY KEY (`qst_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Index pour la table `user_comp`
--
ALTER TABLE `user_comp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `briefs`
--
ALTER TABLE `briefs`
  MODIFY `brief_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `brief_comp`
--
ALTER TABLE `brief_comp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `competances`
--
ALTER TABLE `competances`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `quizz_qst`
--
ALTER TABLE `quizz_qst`
  MODIFY `qst_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `user_comp`
--
ALTER TABLE `user_comp`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
