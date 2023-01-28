#!/bin/sh

if ! lsof -i :1025 | grep -q MailHog; then
  printf "\nPor favor, instale/inicie o MailHog antes de iniciar a aplicação: https://github.com/mailhog/MailHog#installation\n\n"
  exit 1
fi

composer install

./artisan migrate
./artisan serve
