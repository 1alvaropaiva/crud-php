# Crud-php
  Sistema construído com PHP e Bootstrap para administrar uma lista de usuários.
## Funções implementadas
1. Criação de novos usuários, contendo nome, email, data de nascimento, senha e ID.
2. Remoção de usuários.
3. Exibição de todos os usuários.
4. Alteração de usuários direto no banco de dados.
## Tecnologias utilizadas
![MariaDB](https://img.shields.io/badge/MariaDB-003545?style=for-the-badge&logo=mariadb&logoColor=white)
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![Bootstrap](https://img.shields.io/badge/bootstrap-%238511FA.svg?style=for-the-badge&logo=bootstrap&logoColor=white)
## Funções importantes
### Password-hash
Cria um código hash da senha fornecida pelo usuário de forma única. Senhas iguais de usuários diferentes terão códigos diferentes.
## Instalação do aplicativo
### Pré-requisitos
XAMPP: https://www.apachefriends.org/pt_br/download.html
<br>
Vscode: https://code.visualstudio.com/download
<br>
MySQl Workbench: https://dev.mysql.com/downloads/workbench/
<br>
Git: https://git-scm.com/downloads
### Como instalar
Primeiramente, iremos clonar o repositório.
##### No seu terminal, digite o seguinte comando: 
    git clone https://github.com/1alvaropaiva/crud-php.git
##### Agora, navegue até a pasta em que foi baixado o repositório e digite o seguinte comando:
    code crud-php
Para configurarmos o banco de dados, devemos fazer o seguinte:
##### 1 - Abrir o XAMPP
##### 2 - Iniciar todos os servidores
##### 3 - Abrir o Phpmyadmin ou a IDE de banco de dados da sua escolha e digitar os seguintes comandos:

      CREATE DATABASE `alvarodb`

      CREATE TABLE `alvarodb`.`usuarios` 
      (`id` INT NOT NULL AUTO_INCREMENT , 
      `nome` VARCHAR(100) NOT NULL , 
      `senha` VARCHAR(255) NOT NULL , 
      `email` VARCHAR(100) NOT NULL , 
      `data_nascimento` DATE NOT NULL , 
      PRIMARY KEY (`id`)) 
      ENGINE = InnoDB;






