-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Set 21, 2018 alle 12:06
-- Versione del server: 10.1.35-MariaDB
-- Versione PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Museo-Storico`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_09_20_111019_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preview` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `posts`
--

INSERT INTO `posts` (`id`, `title`, `preview`, `post_slug`, `content`, `post_type`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Il museo apre le porte alle aziende', 'Già sono molte le aziende che hanno aderito all’iniziativa di visitare il Museo storico dei Pompieri e della Croce Rossa Italiana, coi', 'il-museo-apre-le-porte-alle-aziende', 'Già sono molte le aziende che hanno aderito all’iniziativa di visitare il Museo storico dei Pompieri e della Croce Rossa Italiana, coinvolgendo i propri dipendenti e collaboratori con i rispettivi familiari. Uniformi, documenti, mezzi, attrezzature, illustrazioni, fotografie d’epoca: rappresentano una testimonianza storica di notevole impatto.\r\n\r\nLa scelta di allestire il museo nella “Cittadella della Sicurezza e della Formazione”, nuova sede di Euroambiente, è finalizzata a  promuovere la cultura della sicurezza attraverso un viaggio nel tempo che racconta l’evoluzione storica e tecnologica della lotta agli incendi e del pronto soccorso. A tal proposito, sono previste convenzioni con i clienti di Euroambiente.\r\n\r\nPresso il museo è possibile organizzare un buffet, al termine della visita.\r\nPer info e prenotazioni:\r\ntel. 0884/541995 oppure 340/0852706\r\n\r\nVai in Prenota il Tour', 'post', '2018-09-20 14:24:54', '2018-09-20 14:24:54', 1),
(4, 'Il museo apre le porte alle aziende', 'Già sono molte le aziende che hanno aderito all’iniziativa di visitare il Museo storico dei Pompieri e della Croce Rossa Italiana, coi', 'il-museo-apre-le-porte-alle-aziende', 'Già sono molte le aziende che hanno aderito all’iniziativa di visitare il Museo storico dei Pompieri e della Croce Rossa Italiana, coinvolgendo i propri dipendenti e collaboratori con i rispettivi familiari. Uniformi, documenti, mezzi, attrezzature, illustrazioni, fotografie d’epoca: rappresentano una testimonianza storica di notevole impatto.\r\n\r\nLa scelta di allestire il museo nella “Cittadella della Sicurezza e della Formazione”, nuova sede di Euroambiente, è finalizzata a  promuovere la cultura della sicurezza attraverso un viaggio nel tempo che racconta l’evoluzione storica e tecnologica della lotta agli incendi e del pronto soccorso. A tal proposito, sono previste convenzioni con i clienti di Euroambiente.\r\n\r\nPresso il museo è possibile organizzare un buffet, al termine della visita.\r\nPer info e prenotazioni:\r\ntel. 0884/541995 oppure 340/0852706\r\n\r\nVai in Prenota il Tour', 'post', '2018-09-20 15:37:03', '2018-09-20 15:37:03', 1),
(5, 'Il Gran Tour in moto \"Terrazze del Gargano\" fa tappa al Museo', 'Sabato 1° settembre gli equipaggi dei Club Aste e Bilancieri e A.C.S. Dauno visiteranno il nostro Museo, come tappa del Gran Tour in Moto \"Le Terrazze del Gargano\"', 'il-gran-tour-in-moto', 'Sabato 1° settembre gli equipaggi dei Club Aste e Bilancieri e A.C.S. Dauno visiteranno il nostro Museo, come tappa del Gran Tour in Moto \"Le Terrazze del Gargano\". \r\n\r\nAl termine della visita all\'interno del Museo - prevista per le 11:00 - dove si ripercorrerà la storia dei Pompieri e della Croce Rossa Italiana, i motociclisti e le loro famiglie proseguiranno il Tour verso Monte Sant\'Angelo.', 'post', '2018-09-20 15:52:50', '2018-09-20 15:52:50', 1),
(6, 'Notizia esempio 2', 'OOOOOIDIFIFIGKGKFKFKFJGJ', 'notizia-esempio-2', 'djfsondkvinosinfiehnvwjpfciejfksodjfmcisjfviuspefuhnehsfcljshdflcsjdfnsjeifcefsefbsertghgymjjknghyfghnjrytfhnfrtfhrt', 'post', '2018-09-20 18:14:47', '2018-09-20 18:14:47', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@mail.com', NULL, '$2y$10$ECato6h0hMcaoYh.abN54u8YV9/kGcYd0MPS1hX2wfGrTbgvXbbvG', 'of6QjFqK2vqZ6uzM4yxmO431mWWeRL8Xe5Dz378B2a6VEVUxoOZRgnhIYDTu', '2018-09-20 10:29:56', '2018-09-20 10:29:56');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indici per le tabelle `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
