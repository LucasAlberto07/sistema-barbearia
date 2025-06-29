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

| Tecnologia | Finalidade | Ícone |
|------------|------------|-------|
| PHP 7.4+ | Lógica do sistema | <img src="https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white" width="80"> |
| MySQL 5.7+ | Armazenamento de dados | <img src="https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=white" width="80"> |
| Bootstrap 5 | Interface do usuário | <img src="https://img.shields.io/badge/Bootstrap-7952B3?logo=bootstrap&logoColor=white" width="80"> |
| Font Awesome | Ícones profissionais | <img src="https://img.shields.io/badge/Font_Awesome-528DD7?logo=fontawesome&logoColor=white" width="80"> |
| Git | Controle de versão | <img src="https://img.shields.io/badge/Git-F05032?logo=git&logoColor=white" width="80"> |

## 🚀 Instalação

## 📋 Requisitos do Sistema

| Requisito | Versão | Ícone |
|-----------|--------|-------|
| Servidor web | XAMPP/WAMP/LAMP | <img src="https://img.shields.io/badge/XAMPP-FB7A24?logo=xampp&logoColor=white" width="80"> |
| PHP | 7.4+ | <img src="https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white" width="80"> |
| MySQL | 5.7+ | <img src="https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=white" width="80"> |
## 📸 Demonstração do Sistema


## 📸 Telas do Sistema

### Tela de Login
![Loguin](https://github.com/user-attachments/assets/e7c5eb5d-adc6-4ce2-a907-a2be69167c8c)  
🔒 **Função:** Permite que o barbeiro ou administrador acesse o sistema usando login e senha. Após a autenticação, o usuário é direcionado ao painel de agendamentos.

---

### Painel de Agendamentos
![agendamento pronto](https://github.com/user-attachments/assets/c20bb481-8de1-4c34-b71f-da9467ffec01)  
📋 **Função:** Exibe a lista de todos os agendamentos cadastrados, com nome do cliente, data, horário e opções para editar ou excluir. Acesso restrito a usuários logados.

---

### Agendamentos Feitos
![agendamentos a](https://github.com/user-attachments/assets/dfa3b9c3-ccb6-4083-af50-67174a2164ec)  
🗓️ **Função:** Mostra os agendamentos realizados de forma organizada por data e horário. Facilita a visualização de horários já reservados.

---

### Confirmação de Agendamento
![agendamento realizado a](https://github.com/user-attachments/assets/84a59e22-d2e4-49d4-b310-ef75db73e893)  
✅ **Função:** Exibe uma mensagem de sucesso confirmando que o agendamento foi realizado corretamente. Serve como retorno visual para o usuário.

---

## 🛠️ Passo a Passo

1. Clone o repositório:
```bash
git clone https://github.com/LucasAlberto07/sistema-barbearia.git
cd sistema-barbearia
