fix:
	php-cs-fixer fix ./

build:
	make fix
	git add .


version:
	./version.sh 0.0.0 bug