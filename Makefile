install:
	composer install

run:
	./bin/demo

test:
	composer exec phpunit tests