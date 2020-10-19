# Tray-Contacts

Uma API em Laravel utilizando PostGres e Redis em Docker como estruturas para armazenamento e
protegida por JWT, com funções de login de usuários assim como de cadastro e gerenciamento de 
contatos linkados a aquele usuário.

## Rotas da API.
Para uma documentação mais detalhada sobre os endpoints da API, visite o diretório [docs](https://github.com/tray-contacts/api/tree/master/docs).
![Preview](public/images/routes.png?raw=true "Preview")

## Instalação 
Para a containerização da API utilizei [Docker Compose](https://docs.docker.com/compose/).

Utilizando o [Composer](https://getcomposer.org/) instale as dependências do projeto na pasta raiz.
```bash
    composer install
```

Prepare as variáveis de ambiente do sistema.
```bash
    cp .env.example .env
```

No arquivo `.env` as seguintes variáveis precisam estar populadas, 
onde serão utilizadas no proprio sistema quanto no docker.
```javascript
    DB_CONNECTION
    DB_HOST
    DB_PORT
    DB_DATABASE
    DB_USERNAME
    DB_PASSWORD
    DB_AUTHENTICATION_DATABASE

    REDIS_HOST
    REDIS_PASSWORD
    REDIS_PORT

    MAIL_MAILER
    MAIL_HOST
    MAIL_PORT
    MAIL_USERNAME
    MAIL_PASSWORD
    MAIL_ENCRYPTION
    MAIL_FROM_ADDRESS
    MAIL_FROM_NAME

```

Gere uma chave da API.
```bash
    php artisan key:generate 
```

Gere uma chave para ser utilizada no processo de autenticação JWT.
```bash
    php artisan jwt:secret
```

Gere as imagens do docker.
```bash
    docker-compose up -d --build 
```

Crie a estrutura de Jobs para a API.
```bash
    php artisan queue:table
```

Cria o banco de dados e o popule.
```bash
    php artisan migrate:fresh --seed
```

Tudo pronto, execute o servidor.
```bash
    php artisan serve
```

## TODO List: 
- [x] Docker (Postgres, Php, Nginx).
- [x] Autenticaçao da API utilizando JWT.
- [x] Criação e população do Banco de dados.
- [x] CRUD de contatos.
- [x] Documentação [/docs].
- [x] Disparo de Emails.
- [x] Classes Mailable.
- [x] Disparo de Emails em segundo plano.
- [x] Docker Redis.
