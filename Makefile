install:
	composer install

bg:
	./bin/brain-games

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin

 be:
	./bin/brain-even

 bc:
	./bin/brain-calc

bgcd:
	./bin/brain-gcd
bp:
	./bin/brain-progression