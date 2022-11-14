## Dependencias
    - php7.4
    - php7.4-pgsql
    - composer
## Para rodar o projeto.
    - cp .env-example .env
    - docker compose -f .\docker-compose.yml up -d
    - php artisan migrate --seed
    - php artisan serve
    - curl --silent http://localhost:8000/api/orders | jq
