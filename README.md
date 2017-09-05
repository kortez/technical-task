# Amadeus It Group PHP Developer Technical Task

# Instruction for run application
docker run --rm --interactive --tty --volume $PWD:/app composer install
docker-compose build
docker-compose up

# Test application
docker run --rm dhorytskyi/amadeus-tech-task vendor/bin/phpunit tests --bootstrap vendor/autoload.php
