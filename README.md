# Cadastro e verificação por email com o Laravel 9
Páginas de login e cadastro feitas com o [Laravel 9](https://laravel.com/docs/9.x/releases). Autenticação e verificação por email implementadas manualmente, sem o uso dos *starter kits*.
## Requerimentos
- `MySQL` (verifique as configurações em `/env`).
## Uso
- `composer install`.
- Configure o banco em `/.env` e migre com `artisan migrate`.
- Instale e inicie o `MailHog`: https://github.com/mailhog/MailHog#installation.
- Sirva com `artisan serve`.
- Após o cadastro, para realizar login, verifique a conta por email através do cliente do `MailHog` (`http://localhost:8052`)
