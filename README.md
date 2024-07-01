<<<<<<< HEAD
## Problem Track

"Problem Track" is the ultimate solution for organizations seeking to enhance their problem resolution processes, drive operational efficiency, and deliver exceptional customer experiences.
=======
## Schenduling for barbershop

Our Barber Booking System is the perfect solution for busy professionals and individuals looking to manage their grooming appointments effortlessly. Customers can easily browse available time slots, select their preferred barber, and book their appointment online.
>>>>>>> a49ae8b61cc583cb98714d571cec44d684fe81bc

### Dependências

- Docker
- Docker Compose

### To run

#### Clone Repository

```
<<<<<<< HEAD
$ git clone git@github.com:SI-DABE/problem-track.git
$ cd problem-track
```

#### Define the env variables

```
$ cp .env.example .env
```

#### Install the dependencies

```
$ ./run composer install
```

#### Up the containers

```
$ docker compose up -d
```

ou

```
$ ./run up -d
```

#### Create database and tables

```
$ ./run db:reset
```

#### Populate database

```
$ ./run db:populate
```

### Fixed uploads folder permission

```
sudo chown www-data:www-data public/assets/uploads
```

#### Run the tests

```
$ docker compose run --rm php ./vendor/bin/phpunit tests --color
```

ou

```
$ ./run test
```

#### Run the linters

[PHPCS](https://github.com/PHPCSStandards/PHP_CodeSniffer/)

```
$ ./run phpcs
```

[PHPStan](https://phpstan.org/)

```
$ ./run phpstan
```

Access [localhost](http://localhost)

### Teste de API

```shell
curl -H "Accept: application/json" localhost/problems
```
=======
$ git clone https://github.com/GabrielHenriqueRibas/Scheduling_for_barbershop
$ cd scheduling_for_barbershop
```
>>>>>>> a49ae8b61cc583cb98714d571cec44d684fe81bc
