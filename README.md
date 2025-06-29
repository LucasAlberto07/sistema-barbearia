# ✂️ Sistema de Agendamento para Barbearia

![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?logo=php)
![MySQL](https://img.shields.io/badge/MySQL-5.7+-4479A1?logo=mysql)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-7952B3?logo=bootstrap)

Sistema completo para gerenciamento de agendamentos em barbearias, desenvolvido como projeto acadêmico.

## 📌 Sumário

- [Funcionalidades](#-funcionalidades)
- [Tecnologias](#-tecnologias)
- [Instalação](#-instalação)
- [Estrutura do Projeto](#-estrutura-do-projeto)
- [Telas do Sistema](#-telas-do-sistema)
- [Como Contribuir](#-como-contribuir)
- [Licença](#-licença)

## ✨ Funcionalidades

- **Autenticação segura** de barbeiros
- **Cadastro de agendamentos** com data e hora
- **Visualização completa** da agenda organizada por data
- **Exclusão segura** de agendamentos
- **Interface responsiva** com Bootstrap 5
- **Proteção contra SQL Injection** usando prepared statements
- **Sessões seguras** para controle de acesso

## 🛠️ Configuração do Banco de Dados

Execute no MySQL:

```sql
CREATE DATABASE barbearia;
USE barbearia;

-- -- Criação do banco barbearia
CREATE DATABASE IF NOT EXISTS barbearia;
USE barbearia;

-- Tabela de barbeiros
CREATE TABLE barbeiro (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    senha VARCHAR(32) NOT NULL
);

-- Tabela de agendamentos
CREATE TABLE agendamentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_cliente VARCHAR(100) NOT NULL,
    data_agendamento DATE NOT NULL,
    hora_agendamento TIME NOT NULL,
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Usuário padrão (senha: 123456)
INSERT INTO barbeiro (nome, usuario, senha) VALUES 
('Administrador', 'admin', MD5('123456'));
```
## 🛠️ Tecnologias

| Tecnologia | Finalidade |
|------------|------------|
| PHP 7.4+ | Lógica do sistema |
| MySQL 5.7+ | Armazenamento de dados |
| Bootstrap 5 | Interface do usuário |
| Font Awesome | Ícones profissionais |
| Git | Controle de versão |

## 🚀 Instalação

### Requisitos
- Servidor web (XAMPP, WAMP ou similar)
- PHP 7.4+
- MySQL 5.7+

### Passo a passo
1. Clone o repositório:
```bash
git clone https://github.com/LucasAlberto07/sistema-barbearia.git
cd sistema-barbearia
