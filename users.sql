-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/10/2025 às 16:23
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `kaua-1d`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `senha` varchar(12) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `senha`, `email`) VALUES
(1, 'Kaua', '1234', 'kaua@gmail.com'),
(2, 'Kauan', '4321', 'kauan@gmail.com'),
(5, 'João Silva', 'senha123', 'joao.silva@gmail.com'),
(6, 'Maria Oliveira', 'senha456', 'maria.oliveira@gmail.com'),
(7, 'Pedro Santos', 'senha789', 'pedro.santos@gmail.com'),
(8, 'Ana Costa', 'senha321', 'ana.costa@gmail.com'),
(9, 'Lucas Pereira', 'senha654', 'lucas.pereira@gmail.com'),
(10, 'Juliana Almeida', 'senha987', 'juliana.almeida@gmail.com'),
(11, 'Carlos Souza', 'senha654', 'carlos.souza@gmail.com'),
(12, 'Fernanda Lima', 'senha135', 'fernanda.lima@gmail.com'),
(13, 'Gabriel Rocha', 'senha246', 'gabriel.rocha@gmail.com'),
(14, 'Patricia Martins', 'senha369', 'patricia.martins@gmail.com'),
(15, 'Ricardo Oliveira', 'senha258', 'ricardo.oliveira@gmail.com'),
(16, 'Isabela Ramos', 'senha369', 'isabela.ramos@gmail.com'),
(17, 'Thiago Silva', 'senha147', 'thiago.silva@gmail.com'),
(18, 'Camila Santos', 'senha258', 'camila.santos@gmail.com'),
(19, 'Raul Ferreira', 'senha369', 'raul.ferreira@gmail.com'),
(20, 'Luana Costa', 'senha741', 'luana.costa@gmail.com'),
(21, 'Vitor Pereira', 'senha852', 'vitor.pereira@gmail.com'),
(22, 'Sofia Martins', 'senha963', 'sofia.martins@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
