up:
	docker-compose down
	docker-compose up --build

down:
	docker-compose down

bash:
	docker-compose exec php bash

test:
	docker-compose exec php ./vendor/bin/phpunit
