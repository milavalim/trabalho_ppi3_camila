<p align="center"><a href="https://www.gravatai.ifsul.edu.br/" target="_blank"><img src="https://congressoti.passofundo.ifsul.edu.br/assets/img/logo.png" width="400" alt="IFSul Logo"></a></p>
<p align=center>Programação para Internet 3 | Camila Valim Dias</p>

## Descrição do Projeto

Este projeto é uma aplicação web de gerenciamento de receitas, desenvolvida com Laravel.
Funcionalidades principais:

- CRUD completo de receitas (Criar, Ler, Atualizar, Excluir).
- Autenticação de usuários (registro e login).
- Políticas de acesso (somente o dono pode editar/excluir suas receitas).
- Layout com Bootstrap.
- Integração com MariaDB (xampp).


## Pré-requisitos

- PHP >= 8.1
- MariaDB (xampp)
- Composer
- Node.js + npm

## Estrutura

Trabalho_ppi3_camila_/
│
├── app/                # Código Laravel
├── bootstrap/
├── config/
├── database/
│   ├── migrations/     # Criação de tabelas
│   └── seeders/        # Dados de exemplo
├── public/
├── resources/
│   ├── views/          # Blade templates
│   └── css/            # CSS customizado
├── routes/
├── .env.example        # Variáveis de ambiente
├── composer.json
├── package.json
└── README.md

## Configuração do ambiente

### Instale as dependências que faltam
composer install
npm install
npm run build

### Importe o banco
No painel do Xampp > Admin > Importar 
Escolha o arquivo .sql do zip e importe o banco de dados. 

## Funcionalidades

- Página inicial: lista de receitas (somente título e resumo).
- Criar receita: formulário com validação.
- Detalhes da receita: título, ingredientes, descrição, arquivo.
- Editar/Excluir receita: acessível apenas para o usuário dono da receita.
- Autenticação: registro, login e logout.

## Em suma

Este projeto demonstra:

- Estrutura MVC do Laravel (Models, Views, Controllers).
- Uso de policies para autorização.
- Integração com MariaDB via migrations e seeders.
- Criação de formulários e validação.
- Uso de Bootstrap customizado para layout.
