docker compose run php composer install     
docker compose run php composer dump-autoload       
docker compose build                      
docker compose up                      
docker compose run php ../vendor/bin/phpunit --configuration ../phpunit.xml
