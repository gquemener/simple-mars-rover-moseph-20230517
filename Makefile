WORKING_DIR := $(shell pwd)

test:
	docker run --rm -it -v ${WORKING_DIR}:/app -w /app php:8.2-cli-alpine bin/phpunit
