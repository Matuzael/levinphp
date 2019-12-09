-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Dez-2019 às 05:45
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `levin`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `idCarrinho` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `nomeProduto` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `valorProduto` float NOT NULL,
  `tipoProduto` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `fotoProduto` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`idCarrinho`, `idUsuario`, `nomeProduto`, `valorProduto`, `tipoProduto`, `fotoProduto`) VALUES
(19, 1007, 'matuzael', 323, 'Vinho', 'wine.png'),
(20, 1007, 'pitu', 75, 'Cerveja', 'checkout.png'),
(21, 1007, 'bola', 100, 'Cerveja', 'smartphone.png'),
(22, 1, 'Pitú Cola', 5, 'Cachaça', 'pitu-cola.png'),
(23, 1002, 'Vinho Canção Tinto Suave 750ml', 50, 'Vinho', 'cancao-750ml-tinto-suave.png'),
(24, 1002, 'Kit Vinhos Heróis da Literatura com 3 garrafas', 240, 'Vinho', 'vinhos-dq.png'),
(25, 1008, 'Vinho Canção Tinto Suave 750ml', 50, 'Vinho', 'cancao-750ml-tinto-suave.png'),
(26, 1008, 'Kit Vinhos Heróis da Literatura com 3 garrafas', 240, 'Vinho', 'vinhos-dq.png'),
(27, 1008, 'Pitú Cola', 5, 'Cachaça', 'pitu-cola.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `idEnd` int(11) NOT NULL,
  `endereco` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `cidade` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cep` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`idEnd`, `endereco`, `numero`, `cidade`, `estado`, `cep`) VALUES
(48, '', 0, '', '', 0),
(49, 'rua ', 0, 'joao pessoa', 'RN', 59565000),
(50, '', 0, '', '', 0),
(51, 'Rua Dom marcolino', 223, 'Dom marcoli', 'jiejfi', 94848);

-- --------------------------------------------------------

--
-- Estrutura da tabela `metodopagamento`
--

CREATE TABLE `metodopagamento` (
  `idPag` int(11) NOT NULL,
  `tipo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nomeCartao` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numCartao` int(11) DEFAULT NULL,
  `validade` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codSeguranca` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `metodopagamento`
--

INSERT INTO `metodopagamento` (`idPag`, `tipo`, `nomeCartao`, `numCartao`, `validade`, `codSeguranca`) VALUES
(55, 'Escolha', '', 0, '', 0),
(56, 'credito', '45454', 2, '2002', 123),
(57, 'Escolha', '', 0, '', 0),
(58, 'debito', 'Lucas freitas', 54545, '644', 545454);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `idPedido` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `endereco` int(11) NOT NULL,
  `pagamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`idPedido`, `idUsuario`, `endereco`, `pagamento`) VALUES
(21, 1008, 51, 58);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `valor` float NOT NULL,
  `foto` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `tipo`, `valor`, `foto`) VALUES
(9, 'Vinho Canção Tinto Suave 750ml', 'Vinho', 50, 'cancao-750ml-tinto-suave.png'),
(10, 'Vinho Português Porto Tawny Special TAYLOR\'S Garrafa 750ml ', 'Vinho', 134, 'vinho-portugues.png'),
(11, 'Vinho Português Porto Garrafa 750ml ', 'Vinho', 134, 'vinho-portugues.png'),
(12, 'Kit Vinhos Heróis da Literatura com 3 garrafas', 'Vinho', 240, 'vinhos-dq.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtosvendidos`
--

CREATE TABLE `produtosvendidos` (
  `idPVendido` int(11) NOT NULL,
  `idPedido` int(11) NOT NULL,
  `produto` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `produtosvendidos`
--

INSERT INTO `produtosvendidos` (`idPVendido`, `idPedido`, `produto`) VALUES
(39, 21, 'Vinho Canção Tinto Suave 750ml'),
(40, 21, 'Kit Vinhos Heróis da Literatura com 3 garrafas'),
(41, 21, 'Pitú Cola');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nome` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nome`, `sobrenome`, `email`, `senha`) VALUES
(1, 'admin', 'admin', 'admin@levin', 'admin'),
(1002, 'matuzael', 'dias', 'matuzaeldias@hotmail.com', '123'),
(1005, 'rodrigo', 'soares', 'rodrigo@rodrigo.com', '123'),
(1007, 'Bernardo', 'Vilela', 'bernardo@bernardo.com', '123'),
(1008, 'Lucas', 'Freitas', 'lucasfreitas@ifrn.com', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`idCarrinho`),
  ADD KEY `carrinho_ibfk_1` (`idUsuario`);

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`idEnd`);

--
-- Índices para tabela `metodopagamento`
--
ALTER TABLE `metodopagamento`
  ADD PRIMARY KEY (`idPag`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idPedido`),
  ADD KEY `pedidos_ibfk_1` (`idUsuario`),
  ADD KEY `pedidos_ibfk_2` (`endereco`),
  ADD KEY `pagamento` (`pagamento`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtosvendidos`
--
ALTER TABLE `produtosvendidos`
  ADD PRIMARY KEY (`idPVendido`),
  ADD KEY `produtosvendidos_ibfk_1` (`idPedido`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `idCarrinho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `idEnd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de tabela `metodopagamento`
--
ALTER TABLE `metodopagamento`
  MODIFY `idPag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `produtosvendidos`
--
ALTER TABLE `produtosvendidos`
  MODIFY `idPVendido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1009;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD CONSTRAINT `carrinho_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE,
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`endereco`) REFERENCES `endereco` (`idEnd`) ON DELETE CASCADE,
  ADD CONSTRAINT `pedidos_ibfk_3` FOREIGN KEY (`pagamento`) REFERENCES `metodopagamento` (`idPag`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `produtosvendidos`
--
ALTER TABLE `produtosvendidos`
  ADD CONSTRAINT `produtosvendidos_ibfk_1` FOREIGN KEY (`idPedido`) REFERENCES `pedidos` (`idPedido`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
