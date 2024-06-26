<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Exercícios API com PHP e Laravel

Este projeto contém uma série de exercícios práticos para trabalhar com API e retorno dos dados no formato JSON usando a linguagem PHP e o framework Laravel.

## Requisitos

Certifique-se de ter os seguintes requisitos atendidos antes de começar a trabalhar nos exercícios:

- PHP instalado
- Composer instalado
- Laravel Framework instalado
- 7-Zip instalado
- Git instalado
- Editor de código de sua preferência

## Como utilizar este repositório

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
```
copy .env.example .env
```
5. Acessar o Visual Studio Code
```
code .
```
# Insomnia

[![Run in Insomnia}](https://insomnia.rest/images/run.svg)](https://insomnia.rest/run/?label=Exerc%C3%ADcios%20-%20API&uri=https%3A%2F%2Fraw.githubusercontent.com%2Falexfigueirinha%2Fexercicios-api%2Fmain%2FInsomnia.json)


## Licença

Este projeto está licenciado sob a [MIT License](LICENSE), o que significa que você pode utilizá-lo livremente para fins educacionais, comerciais ou pessoais.

## Contato

Em caso de dúvidas, sugestões ou problemas, sinta-se à vontade para entrar em contato através do email: seu_email@example.com.

**Aviso**: Certifique-se de substituir "seu_usuario" no link de clonagem e "seu_email@example.com" na seção de contato pelos valores correspondentes do seu próprio usuário do GitHub e endereço de e-mail.

Este é apenas um modelo básico de README.md, você pode adaptar e melhorar conforme suas necessidades específicas de projeto. Certifique-se de incluir informações importantes sobre como configurar, executar e testar os exercícios, bem como qualquer outra documentação relevante para tornar o repositório mais amigável e útil para outros desenvolvedores.

## Comandos úteis
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
