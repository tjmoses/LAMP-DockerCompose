# LAMP-Docker-Compose
====================

## Setup
This project is mainly for local development testing of a LAMP stack setup using docker v17+ and docker-compose v3+.
If you have a Mac, click [here] download docker (https://docs.docker.com/v17.12/docker-for-mac/install/).
Docker for Mac and Docker Toolbox already include Compose along with other Docker apps, so Mac users do not need to install Compose separately. Sorry Windows guys, you are on your own.

## To Get Going
```bash
git clone https://github.com/tjmoses/LAMP-DockerCompose &&
cd LAMP-DockerCompose/docker &&
docker-compose up -d
```

## Other Helpful Commands
```docker
docker-compose build // buid the containers
docker-compose stop -v // stop the containers and remove them
docker system prune // purge all docker images
```
