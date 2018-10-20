# LAMP-Docker-Compose
====================

## Setup
This project is mainly for local development testing of a LAMP stack setup using docker v17+ and docker-compose v3+.
If you have a Mac, click [here](https://docs.docker.com/v17.12/docker-for-mac/install/) to download docker .
Docker for Mac and Docker Toolbox already include Compose along with other Docker apps, so Mac users do not need to install Compose separately. Sorry Windows guys, you are on your own. This LAMP stack also includes phpmyadmin.

## To Get Going
First make sure your docker machine is up on your Mac.
Run the following via the terminal
```docker
docker-machine start default && docker-machine env && eval $(docker-machine env)
```
Next, clone and then start the example up.
```bash
git clone https://github.com/tjmoses/LAMP-DockerCompose &&
cd LAMP-DockerCompose/docker &&
docker-compose up -d
```
You will also have to set your docker machine ip to a domain name in your /etc/hosts file, if you want easy browser testing. Run docker-machine ip to get your docker instance ip.

## Other Helpful Commands
```docker
docker-compose build // buid the containers
docker-compose stop -v // stop the containers and remove them
docker system prune // purge all docker images
```
