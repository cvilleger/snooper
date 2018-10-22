[![Build Status](https://travis-ci.com/cvilleger/snooper.svg?branch=develop)](https://travis-ci.com/cvilleger/snooper)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/ae4ee848bd824bd680e7bf8b0040c60a)](https://www.codacy.com/app/cvilleger/snooper)
[![Codacy Badge](https://api.codacy.com/project/badge/Coverage/ae4ee848bd824bd680e7bf8b0040c60a)](https://www.codacy.com/app/cvilleger/snooper)

# Snooper
*Yet Another Testing Quality Continuous Integration.*

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

What things you need to install the software and how to install them

- [Docker CE](https://www.docker.com/community-edition)

### Install

**1.** Copy `.env.dist` to `.env`

```
cp .env.dist .env
```

**2.** Copy `docker-compose.override.yml.dist` to `docker-compose.override.yml`

```
cp docker-compose.override.yml.dist docker-compose.override.yml
```

**3.** Builds, (re)creates and starts containers in the background

```
docker-compose up -d
```

**4.** Install dependencies

```
docker-compose exec --user=application web composer install
```

**5.** Drop, create and update your database

```
docker-compose exec web php bin/console doctrine:database:drop --force
docker-compose exec web php bin/console doctrine:database:create
docker-compose exec web php bin/console doctrine:schema:update --force
```

**6.** Done

Web
```
http://localhost
```

phpMyAdmin
```
http://localhost:8080
```
