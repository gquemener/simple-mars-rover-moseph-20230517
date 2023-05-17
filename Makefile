test:
	docker run --rm -it -v ./:/app -w /app php:8.2-cli-alpine bin/phpunit
