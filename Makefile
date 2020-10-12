current_dir = $(shell pwd)

phpstan:
	docker pull phpstan/phpstan
	docker run --rm -v $(current_dir):/app phpstan/phpstan --no-interaction --no-progress analyse --error-format=github
