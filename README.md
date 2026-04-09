<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# 🚀 Exercícios API com PHP e Laravel

Projeto com exercícios práticos para construção de APIs REST utilizando **PHP** e o framework **Laravel**, com foco em boas práticas, validação de dados e retorno estruturado em **JSON**.

## 📌 Objetivo

Este repositório foi desenvolvido para praticar:

* Criação de APIs REST
* Organização de código no Laravel
* Validação de requisições
* Retorno de dados em JSON
* Testes de endpoints com Insomnia

## ⚙️ Tecnologias e Requisitos

Este projeto foi desenvolvido utilizando:

- PHP
- Laravel Framework
- 7-Zip
- Composer
- Insomnia
- Git
- Editor de código de sua preferência (ex: VS Code)
- MySQL

Certifique-se de ter essas ferramentas instaladas no seu ambiente antes de executar o projeto.

## 🚀 Como utilizar este repositório

1. Clone este repositório para o seu ambiente de desenvolvimento local utilizando o comando:
```
 git clone https://github.com/alexfigueirinha/exercicios-api.git
```
2. Acesse o diretório do projeto:
```
cd exercicios-api
```
3. Inicializando o Repositorio
```
composer update
```
4. Copiando o .env do exemplo

**Windows:**
```
copy .env.example .env
```
**Linux/Mac:**
```
cp .env.example .env
```
5. Acessar o Visual Studio Code
```
code .
```
6. Execute o servidor
```
php artisan serve
```
## 📬 Testando a API
# Insomnia
Você pode importar a coleção do Insomnia clicando abaixo:
[![Run in Insomnia}](https://insomnia.rest/images/run.svg)](https://insomnia.rest/run/?label=Exerc%C3%ADcios%20-%20API&uri=https%3A%2F%2Fraw.githubusercontent.com%2Falexfigueirinha%2Fexercicios-api%2Fmain%2FInsomnia.json)

## 🛠️ Comandos úteis
Model e Migration:
```
php artisan make:model SuaModel -m 
```
Controller: 
```
php artisan make:controller SeuController
```
Criar rota store no arquivo api.php
FormRequest: 
```
php artisan make:request SeuRequest
```


## 📄 Licença

Este projeto está licenciado sob a [MIT License](LICENSE), o que significa que você pode utilizá-lo livremente para fins educacionais, comerciais ou pessoais.

## 👨‍💻 Autor

Desenvolvido por **Alex**

GitHub: https://github.com/alexfigueirinha

