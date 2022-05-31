fix:
	php-cs-fixer fix ./

build:
	make version
	make fix
	./commit.sh

version:
	./version.sh 0.0.0 bug