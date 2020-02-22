# api-ChemicalElements

##### 1. Crie um diretório e faça o clone do repositório:
```bash
$ mkdir nome-do-diretorio
$ cd nome-do-diretorio
$ git clone https://github.com/yanevasquez/api-ChemicalElements.git
```
##### 2. Crie a base de dados: 
```bash
$ mysql -u root -p 
> create database nomedobanco;
```
##### 3. Copie o arquivo .env.example para o .env:
```bash
$ cp .env.example .env
```
##### 4. Configure os paramêtros no arquivo .env: 
```
DB_DATABASE=nomedobanco
DB_USERNAME=root
DB_PASSWORD=sua_senha_de_usario_root
```
##### 5. Rode o script de instalação de dependências:

```bash
$ sh install.sh
```
##### 4. O servidor do laravel irá informar um endereço, de acordo com a ação do endpoint altere o URI:

http://localhost:3000/

#### API Endpoints:

Método HTTP | URI          | Ação
:---------  |:------------:|:----------------------------------:
GET/HEAD    | api/elements |    retorna todos os elementos químicos
GET/HEAD    |  ...         | ...
POST        |  ...         | ...
PUT/PATCH   |  ...         | ...
DELETE      |  ...         | ...
      
*Em andamento* 