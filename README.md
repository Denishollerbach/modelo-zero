# Modelo Padrão para Início de Projeto

## 🚀 Introdução

Este projeto consiste em um modelo padrão para o início de novos projetos, fornecendo uma estrutura básica definida e recursos essenciais para o desenvolvimento. O modelo inclui funcionalidades que permitem a realização de consultas a uma API e a manipulação de dados para cadastro em um banco de dados.

## 🚧 Desenvolvimento do Projeto

- **PHP 7 ou Superior**: Utilizado para o desenvolvimento do backend.
- **Banco de Dados MySQL**: Utilizado com MySQLi para manipulação de dados.
- **Bootstrap 5**: Framework de frontend para estilização e layout responsivo.
- **Variáveis de Cores**: Seguidas conforme o styleguide do projeto para uma manutenção mais fácil.
- **Otimização de Imagens**: Realizada no início do projeto para melhorar o desempenho.
- **Estruturação em Seções Inline**: Utilizada para otimizar o tempo de desenvolvimento.
- **Modo Pomodoro**: Aplicado durante o desenvolvimento para aumentar a produtividade.
- **Testes de Velocidade e Performance**: Realizados no final do projeto com ferramentas como PageSpeed do Google, Front-end Checklist e Validador W3.

## 📂 Estrutura de Pastas
```
api/
├── user-delete.php
├── user-insert.php
├── user-select.php
├── user-update.php
assets/
├── css/
├── fonts/
├── img/
├── js/
  ├── API
    ├── conectaApi.js
  ├── user
    ├── user-delete.js
    ├── user-insert.js
    ├── user-select.js
    ├── user-update.js
    ├── user-validate.js
  ├── vendor
  ├── custom-main-min.js
  ├── custom-main.js
  ├── main-min.js
  ├── main.js
└── sass/
└── sounds/
└── svg/
└── videos/
includes/
└── db_connection.php
├── query.sql
temp/
├── testes de velocidades
└── ...
templates/
├── footer.php
├── functions.php
└── header.php
.gitignore 
anotations.txt 
index.php 
```
markdown


- **assets**: Contém recursos estáticos como arquivos Sass, CSS e JavaScript.
- **includes**: Contém arquivos importantes, como `db_connection.php`, para a conexão com o banco de dados.
- **temp**: Pasta para arquivos temporários e de teste.
- **templates**: Contém arquivos reutilizáveis, como `header.php` e `footer.php`.
- **index.php**: Arquivo principal do projeto.

## 📝 Scripts

Os scripts JavaScript são carregados no `footer.php`. 

O arquivo principal, `main.js`, é minificado para `main-min.js`.

## 🛡️ Tecnologias Utilizadas

- PHP: Linguagem de programação utilizada para o desenvolvimento do backend.
- HTML: Linguagem de marcação para estruturação e organização do conteúdo.
- SASS: Pré-processador CSS que oferece uma sintaxe mais poderosa e elegante.
- CSS: Linguagem de estilo utilizada para estilizar elementos HTML.
- Bootstrap: Framework de frontend que facilita o desenvolvimento de interfaces responsivas e atraentes.
- JavaScript: Linguagem de programação utilizada para adicionar interatividade e dinamismo às páginas web.
- SQL/MySQL: Linguagem de consulta estruturada utilizada para gerenciar e manipular bancos de dados relacionais.
- MySQLi: Extensão do PHP que oferece uma interface para interagir com o banco de dados MySQL.
- Sweet Alert: Biblioteca JavaScript utilizada para criar alertas personalizados e atraentes.
- APIs: Utilizadas para integração com serviços externos e obtenção de dados adicionais.
- Manipulação de Dados: Realizada para armazenar, recuperar e modificar informações no banco de dados.

## 🚀 Tecnologias Utilizadas

<div>
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white">
  <img src="https://img.shields.io/badge/HTML-239120?style=for-the-badge&logo=html5&logoColor=white">
  <img src="https://img.shields.io/badge/Sass-CC6699?style=for-the-badge&logo=sass&logoColor=white">
  <img src="https://img.shields.io/badge/CSS-239120?&style=for-the-badge&logo=css3&logoColor=white">
  <img src="https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white">
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black">
   <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white">
</div>

<br>
<br>

<br>
<br>

# Time

[<img loading="lazy" src="https://media.licdn.com/dms/image/D4D03AQGhmfVNk8TD4w/profile-displayphoto-shrink_200_200/0/1683990076758?e=1709164800&v=beta&t=ce3h7fNwsEHxgx_HBfr2bYHtHFFWEVOyZLhREo_kKA8" width=115><br><sub>Denis Hollerbach</sub>](https://github.com/Denishollerbach)
<!-- Badges: https://dev.to/envoy_/150-badges-for-github-pnk -->

Este README fornece uma visão geral detalhada do projeto, incluindo sua estrutura, tecnologias utilizadas, membros da equipe e aprendizados ao longo do desenvolvimento.