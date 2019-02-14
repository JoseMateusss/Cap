-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Nov-2018 às 01:34
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caponline`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `comentario` varchar(250) NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fk_usuario` int(11) DEFAULT NULL,
  `fk_forum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `comentario`, `data`, `fk_usuario`, `fk_forum`) VALUES
(15, 'Resposta', '2018-10-16 13:11:26', 2, 12),
(16, 'sdfsdfsdf', '2018-10-16 13:31:02', 2, 13),
(17, 'Era para colocar a resposta aqui', '2018-10-16 13:32:11', 2, 14),
(18, 'sim', '2018-10-17 09:18:06', 2, 16),
(19, 'resposta\r\n', '2018-10-18 07:22:50', 2, 17),
(20, 'Claro!!! Qual está sendo sua maior dificuldade?', '2018-11-27 20:50:01', 10, 30),
(21, 'Não consegui entender muito bem o que a questão pede.', '2018-11-27 20:51:43', 9, 30);

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudos`
--

CREATE TABLE `conteudos` (
  `id` int(11) NOT NULL,
  `serie` int(3) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(250) DEFAULT NULL,
  `fk_disciplina` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `conteudos`
--

INSERT INTO `conteudos` (`id`, `serie`, `nome`, `descricao`, `fk_disciplina`) VALUES
(1, 1, 'Artes medieval', 'Um conteúdo de uma disciplina, eh isto...', 12),
(2, 1, 'Artes na modernidade', 'conteudo ', 12),
(4, 2, 'Artes medieval 2º', 'fsdfsdfsdfsdfdf', 12),
(5, 2, '2º', '2º', 12),
(6, 2, '2º', '2', 12),
(7, 2, '2º', 'fsdfsdfsdf', 12),
(8, 1, 'teste', 'dfdfdsfsd', 12),
(9, 3, 'teste 3º ano', 'fgdfgdfgdf', 12),
(10, 1, 'Conjuntos numéricos', NULL, 10),
(12, 1, 'Domínio, contra domínio e imagem', NULL, 10),
(13, 1, 'Plano cartesiano', NULL, 10),
(14, 1, 'Funções', NULL, 10),
(15, 1, 'Função afim', NULL, 10),
(16, 1, 'Função quadrática', NULL, 10),
(17, 1, 'Função exponencial', NULL, 10),
(18, 2, 'Análise combinatória', NULL, 10),
(19, 2, 'Probabilidade', NULL, 10),
(20, 2, 'Razões trigonométricas', NULL, 10),
(21, 2, 'Relações trigonométricas', NULL, 10),
(22, 2, 'Funções trigonométricas', NULL, 10),
(23, 2, 'Geometria espacial', NULL, 10),
(24, 2, 'Matrizes ', NULL, 10),
(25, 3, 'Polinomio', NULL, 10),
(26, 3, 'Números complexos', NULL, 10),
(27, 3, 'Geometria analítica', NULL, 10),
(28, 3, 'Estatística', NULL, 10),
(29, 3, 'Noções de derivada', NULL, 10),
(31, 1, 'Cinética', NULL, 8),
(32, 1, 'Dinâmica', NULL, 8),
(33, 1, 'Estática', NULL, 8),
(34, 1, 'Hidrostática', NULL, 8),
(35, 1, 'Gravitação universal', NULL, 8),
(36, 2, 'Termometria', NULL, 8),
(37, 2, 'Calorimetria', NULL, 8),
(38, 2, 'Termodinâmica', NULL, 8),
(39, 2, 'Estudo dos gases', NULL, 8),
(40, 2, 'Dilatação', NULL, 8),
(41, 3, 'Movimento Harmônico Simples( MHS )', NULL, 8),
(42, 3, 'Acústica', NULL, 8),
(43, 3, 'Ondas', NULL, 8),
(44, 1, 'Eletrostática', NULL, 8),
(45, 1, 'Força magnética', NULL, 8),
(46, 1, 'Campo magnético', NULL, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `id_disciplina` int(11) NOT NULL,
  `nome_disciplina` varchar(50) NOT NULL,
  `icone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`id_disciplina`, `nome_disciplina`, `icone`) VALUES
(1, 'Biologia', 2),
(3, 'Sociologia', 10),
(7, 'Química', 9),
(8, 'Física', 3),
(9, 'Língua portuguêsa', 8),
(10, 'Matemática', 7),
(11, 'Geografia', 4),
(12, 'Artes', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `favoritos`
--

CREATE TABLE `favoritos` (
  `id_favoritos` int(11) NOT NULL,
  `fk_disciplina` int(11) DEFAULT NULL,
  `fk_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `foruns`
--

CREATE TABLE `foruns` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `topico` varchar(1000) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fk_usuario` int(11) DEFAULT NULL,
  `fk_conteudo` int(11) DEFAULT NULL,
  `fk_disciplina` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  `arquivo` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `foruns`
--

INSERT INTO `foruns` (`id`, `titulo`, `topico`, `data`, `fk_usuario`, `fk_conteudo`, `fk_disciplina`, `status`, `arquivo`) VALUES
(12, 'teste', 'fdfsdfsdfsdf', '2018-11-27 23:48:05', 2, NULL, 1, 0, NULL),
(13, 'teste', 'fsdfsdfsdf', '2018-11-27 23:48:08', 2, NULL, 12, 0, NULL),
(14, 'teste', 'rexposta com X', '2018-11-27 23:48:10', 2, NULL, 12, 0, NULL),
(16, 'Testando aplicação ', 'testando...', '2018-11-27 23:07:42', 5, NULL, 12, 0, NULL),
(17, 'Pergunta de teste', 'Testando...', '2018-11-27 23:07:41', 2, NULL, 3, 0, NULL),
(18, 'Ahuahsuahsuahsuahsu', 'hfghfghgfhfghfghfghfgh', '2018-10-19 15:51:01', 2, NULL, 12, 0, NULL),
(19, 'Título', 'Essa é pergunta', '2018-11-13 19:44:25', NULL, NULL, 12, 0, NULL),
(20, 'hfghgfh', 'gfhgfhgfh', '2018-11-13 19:44:25', NULL, NULL, 12, 0, NULL),
(21, 'Pergunta', 'fdsfdsfdsf', '2018-11-13 19:44:25', NULL, NULL, 12, 0, NULL),
(22, 'fsdfdsfds', 'dfdsfdsf', '2018-11-13 19:10:15', 2, NULL, 12, 0, NULL),
(23, 'fsdf', 'fdsfdsf', '2018-11-13 19:20:55', NULL, NULL, 12, 1, NULL),
(24, 'sfddsf', 'dsfdsfds', '2018-11-13 19:45:00', 2, NULL, 12, 0, NULL),
(25, 'dsfdsf', 'fddsfdsfds', '2018-11-13 19:44:25', 2, NULL, 12, 0, NULL),
(26, 'Pergunta 1', 'fsdfdsfdsfds', '2018-11-13 19:44:25', 2, NULL, 12, 0, 'papel_de_parede_pqn8.jpg'),
(27, 'Pergunta atual', 'teste1', '2018-11-13 19:44:25', 2, NULL, 12, 0, 'papel_de_parede_pqn81.jpg'),
(28, 'sasas', 'saasasasasasasasas', '2018-11-27 23:09:58', 2, NULL, 11, 0, NULL),
(29, 'Cinemática', 'Estou tendo dificuldades para resolver a questão 33 da lista de exercícios de cinemática. Alguém poderia me ajudar?', '2018-11-09 23:26:23', 8, NULL, 8, 1, 'Sem_título.png'),
(30, 'Conjuntos Numericos', 'Alguém poderia me explicar o Exemplo 13 da apostila de conjuntos numericos?\r\n\r\nExemplo 13: A equação x2 ? 3x +5= x2 ? 5x + 11 é equivalente à equação 2x ? 6=0\r\nque é do primeiro grau e tem conjunto solução S = {3} (verifique!).', '2018-11-13 23:42:06', 9, NULL, 10, 1, NULL),
(31, 'Orações Coordenadas', 'Alguém bom com português poderia me dar uma mãozinha com orações coordenadas?', '2018-11-02 23:46:17', 10, NULL, 9, 1, NULL),
(32, 'Arte barroca', 'qual a importancia da arte barroca na história da arte?', '2018-11-05 23:47:38', 10, NULL, 12, 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `icones`
--

CREATE TABLE `icones` (
  `id` int(11) NOT NULL,
  `arquivo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `icones`
--

INSERT INTO `icones` (`id`, `arquivo`) VALUES
(1, 'artes.png'),
(2, 'biologia.png'),
(3, 'fisica.png'),
(4, 'geografia.png'),
(5, 'historia.png'),
(6, 'ingles.png'),
(7, 'matematica.png'),
(8, 'portugues.png'),
(9, 'quimica.png'),
(10, 'sociologia.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `materiais`
--

CREATE TABLE `materiais` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `link` varchar(250) DEFAULT NULL,
  `arquivo` varchar(255) DEFAULT NULL,
  `fk_conteudo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `materiais`
--

INSERT INTO `materiais` (`id`, `tipo`, `nome`, `link`, `arquivo`, `fk_conteudo`) VALUES
(2, '3', 'Introdução à cinética', NULL, 'https://www.youtube.com/embed/zIxf6sox_hg', 31),
(3, '1', 'Aula 1', NULL, 'cinetica_fisica1.pdf', 31),
(4, '1', 'Aula 2', NULL, 'cinetica2_fisica1.pdf', 31),
(8, '2', 'Exercicios', NULL, 'problemas_fisica7.pdf', 31),
(9, '1', 'Aula 3', NULL, 'cinetica3_fisica1.pdf', 31),
(12, '3', 'cinética aula 2', NULL, 'https://www.youtube.com/embed/ATnxMuB6U4I', 31),
(13, '3', 'cinética aula 3', NULL, 'https://www.youtube.com/embed/K70fYF3mpBQ', 31),
(14, '3', 'Conjuntos Numéricos aula 1', NULL, 'https://www.youtube.com/embed/Y_mYgLkuEl4', 10),
(15, '1', 'Aula 1', NULL, 'conjuntoN1.pdf', 10),
(16, '3', 'Conjuntos Numéricos aula 2', NULL, 'https://www.youtube.com/embed/NYAeWhz53NM', 10),
(17, '3', 'Conjuntos Numéricos aula 3', NULL, 'https://www.youtube.com/embed/J4vD5RpOqJY', 10),
(18, '2', 'Exercicios', NULL, 'conjuntoEXER1.pdf', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `foto` longblob,
  `tipo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `email`, `senha`, `foto`, `tipo`) VALUES
(1, 'Manoel ', 'mf.mf98.23@gmail.com', 'e3c8cd4b01367df668814cc206060ef8', NULL, NULL),
(2, 'admin', 'admin@admin', '202cb962ac59075b964b07152d234b70', NULL, 1),
(3, 'Oscar', 'oscar@oscar', '202cb962ac59075b964b07152d234b70', NULL, NULL),
(4, 'mateus', 'admin@admin2', '202cb962ac59075b964b07152d234b70', NULL, NULL),
(5, 'Jão', 'otavio@otavio', '202cb962ac59075b964b07152d234b70', NULL, NULL),
(8, 'Osmar Fernandes', 'osmar.fernandes@gmail.com', '25f9e794323b453885f5181f1b624d0b', NULL, NULL),
(9, 'Jose Felipe', 'jose.felipe@gmail.com', '25f9e794323b453885f5181f1b624d0b', NULL, NULL),
(10, 'Paula', 'paula@gmail.com', '25f9e794323b453885f5181f1b624d0b', NULL, NULL),
(11, 'Jadson', 'jadson@gmail.com', '25f9e794323b453885f5181f1b624d0b', NULL, NULL),
(12, 'Jadson', 'jadson@gmail.com', '25f9e794323b453885f5181f1b624d0b', NULL, NULL),
(13, 'Jadson', 'jadson@gmail.com', '25f9e794323b453885f5181f1b624d0b', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `fk_usuario` (`fk_usuario`),
  ADD KEY `fk_forum` (`fk_forum`);

--
-- Indexes for table `conteudos`
--
ALTER TABLE `conteudos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_disciplina` (`fk_disciplina`);

--
-- Indexes for table `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`id_disciplina`),
  ADD KEY `icone` (`icone`);

--
-- Indexes for table `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`id_favoritos`),
  ADD KEY `fk_disciplina` (`fk_disciplina`),
  ADD KEY `fk_usuario` (`fk_usuario`);

--
-- Indexes for table `foruns`
--
ALTER TABLE `foruns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario` (`fk_usuario`),
  ADD KEY `fk_conteudo` (`fk_conteudo`);

--
-- Indexes for table `icones`
--
ALTER TABLE `icones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materiais`
--
ALTER TABLE `materiais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_conteudo` (`fk_conteudo`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `conteudos`
--
ALTER TABLE `conteudos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `disciplinas`
--
ALTER TABLE `disciplinas`
  MODIFY `id_disciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `id_favoritos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foruns`
--
ALTER TABLE `foruns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `icones`
--
ALTER TABLE `icones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `materiais`
--
ALTER TABLE `materiais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`fk_forum`) REFERENCES `foruns` (`id`);

--
-- Limitadores para a tabela `conteudos`
--
ALTER TABLE `conteudos`
  ADD CONSTRAINT `conteudos_ibfk_1` FOREIGN KEY (`fk_disciplina`) REFERENCES `disciplinas` (`id_disciplina`);

--
-- Limitadores para a tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD CONSTRAINT `disciplinas_ibfk_1` FOREIGN KEY (`icone`) REFERENCES `icones` (`id`);

--
-- Limitadores para a tabela `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `favoritos_ibfk_1` FOREIGN KEY (`fk_disciplina`) REFERENCES `disciplinas` (`id_disciplina`),
  ADD CONSTRAINT `favoritos_ibfk_2` FOREIGN KEY (`fk_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Limitadores para a tabela `foruns`
--
ALTER TABLE `foruns`
  ADD CONSTRAINT `foruns_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `foruns_ibfk_2` FOREIGN KEY (`fk_conteudo`) REFERENCES `conteudos` (`id`);

--
-- Limitadores para a tabela `materiais`
--
ALTER TABLE `materiais`
  ADD CONSTRAINT `materiais_ibfk_1` FOREIGN KEY (`fk_conteudo`) REFERENCES `conteudos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
