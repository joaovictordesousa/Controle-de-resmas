-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Jul-2022 às 20:19
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `solic_resmas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_14_180655_create_table_setores', 1),
(6, '2022_06_14_180808_create_table_solicitacoes', 1),
(7, '2022_06_14_190115_create_table_setores_solicitacoes', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `setores`
--

CREATE TABLE `setores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sigla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `setores`
--

INSERT INTO `setores` (`id`, `Nome`, `Sigla`, `created_at`, `updated_at`) VALUES
(1, 'Presidência ', 'PRES', '2022-07-06 20:22:56', '2022-07-06 20:22:56'),
(2, 'Secretaria-Geral da Presidência ', 'SECRE', '2022-07-06 20:22:56', '2022-07-06 20:22:56'),
(3, 'Subsecretaria-Geral ', 'SUBSEC', '2022-07-06 20:22:56', '2022-07-06 20:22:56'),
(4, 'Subsecretaria dos Órgãos Colegiados ', 'SUBSEO', '2022-07-06 20:22:56', '2022-07-06 20:22:56'),
(5, 'Subsecretaria de Governança ', 'SUBGOV', '2022-07-06 20:22:56', '2022-07-06 20:22:56'),
(6, 'Coordenação de Planejamento ', 'COOP', '2022-07-06 20:22:56', '2022-07-06 20:22:56'),
(7, 'Coordenação de Relações Instucionais ', 'COORI', '2022-07-06 20:22:56', '2022-07-06 20:22:56'),
(8, 'Assessoria de Comunicação Social ', 'ASCOM', '2022-07-06 20:22:56', '2022-07-06 20:22:56'),
(9, 'Ouvidoria Geral ', 'OUVID', '2022-07-06 20:22:56', '2022-07-06 20:22:56'),
(10, 'Diretoria de Edificações', 'DE', '2022-07-06 20:22:56', '2022-07-06 20:22:56'),
(11, 'Departamento de Edificações ', 'DEDIF', '2022-07-06 20:22:56', '2022-07-06 20:22:56'),
(12, 'Divisão de Fiscalização ', 'DIFIS', '2022-07-06 20:22:56', '2022-07-06 20:22:56'),
(13, 'Divisão de Execução, Conservação e Reparos ', 'DICOR', '2022-07-06 20:22:56', '2022-07-06 20:22:56'),
(14, 'Departamento Técnico ', 'DETEC', '2022-07-06 20:22:56', '2022-07-06 20:22:56'),
(15, 'Divisão de Planejamento e Orçamento ', 'DIPLO', '2022-07-06 20:22:56', '2022-07-06 20:22:56'),
(16, 'Divisão de Projetos ', 'DIPRO', '2022-07-06 20:22:56', '2022-07-06 20:22:56'),
(17, 'Diretoria de Urbanização', 'DU', '2022-07-06 20:22:56', '2022-07-06 20:22:56'),
(18, 'Departamento de Infraestrutura Urbana ', 'DEINFRA', '2022-07-06 20:22:56', '2022-07-06 20:22:56'),
(19, 'Núcleo de Produção e Distribuição de Asfaltos ', 'NUASF', '2022-07-06 20:22:56', '2022-07-06 20:22:56'),
(20, 'Divisão de Projetos ', 'DIPROJ', '2022-07-06 20:22:56', '2022-07-06 20:22:56'),
(21, 'Divisão de Obras ', 'DIOB', '2022-07-06 20:22:56', '2022-07-06 20:22:56'),
(22, 'Divisão de Manutenção e Execução de Obras de Drenagem Pluvial ', 'DIMAD', '2022-07-06 20:22:56', '2022-07-06 20:22:56'),
(23, 'Divisão de Manutenção e Conservação de Via ', 'DIMAV', '2022-07-06 20:22:56', '2022-07-06 20:22:56'),
(24, 'Divisão de Obras Diretas de Pavimentação Asfáltica ', 'DIOD', '2022-07-06 20:22:56', '2022-07-06 20:22:56'),
(25, 'Divisão de Apoio Técnico ', 'DIATEC', '2022-07-06 20:22:56', '2022-07-06 20:22:56'),
(26, 'Divisão de Meio Ambiente ', 'DIMAM', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(27, 'Departamento de Parques e Jardins ', 'DPJ', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(28, 'Divisão de Agronomia ', 'DIAGRO', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(29, 'Divisão de Projetos de Paisagismo ', 'DIPROP', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(30, 'Divisão de Implantação de Áreas Verdes ', 'DIAVE', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(31, 'Divisão de Manutenção de Áreas Verdes ', 'DIMAVE', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(32, 'Divisão de Orçamento e Controle ', 'DIOC', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(33, 'Diretoria Administrativa', 'DA', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(34, 'Coordenação de Monitoramento ', 'COMON', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(35, 'Departamento de Gestão de Pessoas ', 'DEGEP', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(36, ' Divisão de Gestão de Pessoas ', 'DIGEP', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(37, 'Divisão de Segurança, Medicina e Assistência ', 'DISMED', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(38, 'Divisão de Recrutamento, Capacitação e Benefícios ', 'DIBEN', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(39, 'Departamento de Materiais, Patrimônio e Gestão de Documentos ', 'DEMAP', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(40, 'Divisão de Patrimônio e Acervo Documental ', 'DIPAD', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(41, 'Divisão de Material, Almoxarifado e Controle de Estoque ', 'DIMAE', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(42, 'Divisão de Segurança e Eventos ', 'DISEV', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(43, 'Divisão de Conservação, Limpeza e Manutenção Interna', 'DICOL', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(44, 'Departamento de Compras ', 'DECOMP', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(45, 'Divisão de Compras ', 'DICOM', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(46, 'Divisão de Licitações e Contratos ', 'DILIC', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(47, 'Departamento de Transporte e Manutenção ', 'DETRA', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(48, 'Divisão de Operações ', 'DIOP', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(49, 'Divisão de Manutenção ', 'DIMAN', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(50, 'Departamento de Informática ', 'DEINF', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(51, 'Divisão de Redes ', 'DIRED', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(52, 'Divisão de Desenvolvimento ', 'DIDES', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(53, 'Diretoria Financeira', 'DF', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(54, 'Departamento Financeiro ', 'DEFIN', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(55, 'Divisão de Finanças ', 'DIFIN', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(56, ' Divisão de Liquidação ', 'DILIQ', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(57, 'Divisão Elaboração e Controle Orçamentário ', 'DIECO', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(58, 'Departamento de Contabilidade ', 'DECON', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(59, 'Divisão de Contabilidade Orçamentária e Financeira ', 'DICON', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(60, 'Divisão de Contabilidade Patrimonial ', 'DICOP', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(61, 'Diretoria Jurídica', 'DJ', '2022-07-06 20:22:57', '2022-07-06 20:22:57'),
(62, 'Departamento Jurídico Trabalhista ', 'DEJUT', '2022-07-06 20:22:58', '2022-07-06 20:22:58'),
(63, 'Divisão de Cálculo ', 'DICAL', '2022-07-06 20:22:58', '2022-07-06 20:22:58'),
(64, 'Departamento Jurídico Cível ', 'DEJUC', '2022-07-06 20:22:58', '2022-07-06 20:22:58'),
(65, 'Departamento Jurídico Consultivo ', 'DECONS', '2022-07-06 20:22:58', '2022-07-06 20:22:58'),
(66, 'Divisão de Apoio Administrativo ', 'DIAPO', '2022-07-06 20:22:58', '2022-07-06 20:22:58'),
(67, 'Divisão de Elaboração de Contratos ', 'DIELC', '2022-07-06 20:22:58', '2022-07-06 20:22:58');

-- --------------------------------------------------------

--
-- Estrutura da tabela `setores_solicitacoes`
--

CREATE TABLE `setores_solicitacoes` (
  `id_setor` bigint(20) UNSIGNED NOT NULL,
  `id_solicitacoes` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacoes`
--

CREATE TABLE `solicitacoes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quant_resmas` int(11) NOT NULL,
  `id_setor` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `solicitacoes`
--

INSERT INTO `solicitacoes` (`id`, `quant_resmas`, `id_setor`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-07-06 20:32:16', '2022-07-06 20:32:16'),
(2, 1, 1, '2022-07-06 20:37:14', '2022-07-06 20:37:14'),
(3, 2, 2, '2022-07-06 20:38:31', '2022-07-06 20:38:31'),
(4, 2, 6, '2022-07-06 20:39:18', '2022-07-06 20:39:18'),
(5, 1, 2, '2022-07-06 20:42:54', '2022-07-06 20:42:54'),
(6, 1, 1, '2022-07-06 21:40:36', '2022-07-06 21:40:36'),
(7, 3, 1, '2022-07-07 19:48:47', '2022-07-07 19:48:47'),
(8, 5, 61, '2022-07-12 19:05:22', '2022-07-12 19:05:22'),
(9, 18, 9, '2022-07-12 19:09:50', '2022-07-12 19:09:50'),
(10, 5, 3, '2022-07-12 19:57:46', '2022-07-12 19:57:46'),
(11, 1, 1, '2022-07-12 19:58:52', '2022-07-12 19:58:52'),
(12, 1, 14, '2022-07-14 19:02:33', '2022-07-14 19:02:33'),
(13, 3, 2, '2022-07-14 19:02:46', '2022-07-14 19:02:46'),
(14, 1, 1, '2022-07-14 19:03:18', '2022-07-14 19:03:18'),
(15, 6, 5, '2022-07-18 20:54:41', '2022-07-18 20:54:41'),
(16, 10, 5, '2022-07-20 15:51:15', '2022-07-20 15:51:15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `setores`
--
ALTER TABLE `setores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `setores_solicitacoes`
--
ALTER TABLE `setores_solicitacoes`
  ADD PRIMARY KEY (`id_setor`,`id_solicitacoes`),
  ADD KEY `setores_solicitacoes_id_solicitacoes_foreign` (`id_solicitacoes`);

--
-- Índices para tabela `solicitacoes`
--
ALTER TABLE `solicitacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `solicitacoes_id_setor_foreign` (`id_setor`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `setores`
--
ALTER TABLE `setores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de tabela `solicitacoes`
--
ALTER TABLE `solicitacoes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `setores_solicitacoes`
--
ALTER TABLE `setores_solicitacoes`
  ADD CONSTRAINT `setores_solicitacoes_id_setor_foreign` FOREIGN KEY (`id_setor`) REFERENCES `setores` (`id`),
  ADD CONSTRAINT `setores_solicitacoes_id_solicitacoes_foreign` FOREIGN KEY (`id_solicitacoes`) REFERENCES `solicitacoes` (`id`);

--
-- Limitadores para a tabela `solicitacoes`
--
ALTER TABLE `solicitacoes`
  ADD CONSTRAINT `solicitacoes_id_setor_foreign` FOREIGN KEY (`id_setor`) REFERENCES `setores` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
