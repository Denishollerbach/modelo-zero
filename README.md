# Modelo padrão para inicio de projeto

## 🔖 Template padrão

<p>Usado para inicio de projeto, já com uma estrutura básica definida</p>

<br>
Para facilitar a inclusão do header e do footer nas páginas desejadas, ambos estão localizados na pasta includes e podem ser incorporados usando o código PHP:

### php
```php
include_once("includes/header.php");
```
```hmtl
<main>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
      
        </div>
      </div>
    </div>
  </section>
</main>
```
```php
include_once("includes/footer.php");
```

### Estrutura de Pastas

    assets: Contém recursos estáticos como:
        SASS, CSS, JS, e Bootstrap.

        sass: Arquivos SASS para estilos personalizados.
        css: Arquivos compliados pelo css, pasta de saida do arquivo css.
        bootstrap: Biblioteca Bootstrap (pode ser usada localmente).
        js: Arquivos JavaScript, incluindo versões minificadas.
    
    includes: Contém arquivos reutilizáveis, como header.php e footer.php e functions.php que serve para criar funções php se necessário.
    index.php: Exemplo de arquivo principal.

#### Utilização do Bootstrap

O Bootstrap está disponível em assets/bootstrap. Caso deseje usar uma cópia local, ajuste o caminho no cabeçalho (header.php) conforme necessário.

### Scripts
Carregados no footer.php, os arquivos carregados são dos scripts minificados:

```html
<script src="assets/js/main-min.js"></script>
<script src="assets/js/custom-main-min.js"></script>
```
Onde o 'custom-main-min' é o arquivo minificado de 'custom-main' que é o arquivo disponivel para customização de novos scripts

<br>

## 🚀 Tecnologias Utilizadas
<div>
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white">
  <img src="https://img.shields.io/badge/HTML-239120?style=for-the-badge&logo=html5&logoColor=white">
  <img src="https://img.shields.io/badge/Sass-CC6699?style=for-the-badge&logo=sass&logoColor=white">
  <img src="https://img.shields.io/badge/CSS-239120?&style=for-the-badge&logo=css3&logoColor=white">
  <img src="https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white">
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black">
</div>

<br>
<br>

# Time

[<img loading="lazy" src="https://media.licdn.com/dms/image/D4D03AQGhmfVNk8TD4w/profile-displayphoto-shrink_200_200/0/1683990076758?e=1709164800&v=beta&t=ce3h7fNwsEHxgx_HBfr2bYHtHFFWEVOyZLhREo_kKA8" width=115><br><sub>Denis Hollerbach</sub>](https://github.com/Denishollerbach)
<!-- Badges: https://dev.to/envoy_/150-badges-for-github-pnk -->