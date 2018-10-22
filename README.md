[![Build Status](https://travis-ci.com/Darkmira/extranet.svg?branch=develop)](https://travis-ci.com/Darkmira/extranet)
[![Build Status](https://semaphoreci.com/api/v1/cvilleger/extranet/branches/develop/shields_badge.svg)](https://semaphoreci.com/cvilleger/extranet)
[![CircleCI](https://circleci.com/gh/Darkmira/extranet.svg?style=shield)](https://circleci.com/gh/Darkmira/extranet)

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/cdc54ae85a0b4252b7d82450b2fac056)](https://www.codacy.com/app/cvilleger/extranet)
[![Codacy Badge](https://api.codacy.com/project/badge/Coverage/cdc54ae85a0b4252b7d82450b2fac056)](https://www.codacy.com/app/cvilleger/extranet)
[![Heroku](http://heroku-badge.herokuapp.com/?app=darkmira-extranet&style=flat&svg=1)](https://darkmira-extranet.herokuapp.com/)

# Extranet
*Controlled private network platform reachable from employees and partners to a subset of the information accessible from an organization.*

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
