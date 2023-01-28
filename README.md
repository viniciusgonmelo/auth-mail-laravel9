# Cadastro e verificação por email com o Laravel 9
Páginas de login e cadastro feitas com o [Laravel 9](https://laravel.com/docs/9.x/releases). Autenticação e verificação por email implementadas manualmente, sem uso dos *starter kits*.
## Requerimentos
- [MailHog](https://github.com/mailhog/MailHog#installation).
## .env
```bash
MAIL_MAILER=smtp
MAIL_HOST=0.0.0.0
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
```
## Uso
- Configure o banco em `/.env`.
- Instale e inicie o `MailHog`: https://github.com/mailhog/MailHog#installation.
- `composer start`.
- Após o cadastro, verifique a conta através do cliente do `MailHog` (`http://0.0.0.0:8025/`)
##
![ezgif com-gif-maker (4)](https://user-images.githubusercontent.com/97701096/215248149-3a08e647-0201-4b12-b390-bb4bffa999a2.gif)
