# docker-quick-start
01. docker --version : Check docker version

## Docker Images
01.  docker pull nameimage:tag : pull a image from dockerhub
02.  docker images : Show all images in docker
03.  docker run [imageName] : run a container
04.  docker rmi [imageName] : Remove a image
05.  docker rmi $(docker images -q) : Delete All images

## Docker Container
01.  docker ps : Show all container is running
02.  docker ps -a : Show all container is running and stop
03.  docker start [containerId] : Start container when it is stop
04.  docker stop [containerId] : Start container when it is start
05.  docker restart [containerId] : Restart a container
06.  docker rm [containerId] : Remove a container when it is stop
07.  docker stop $(docker ps -a -q): Stop all container is running
08.  docker rm $(docker ps -a -q): Delete All container
09.  docker container attach containerid : Go to terminal container is running
10.  CTRL + P + Q : Exit terminal, but container is running
11.  docker history name_or_id_of_image : The history of container or images
12.  docker diff container-name-or-id : diff
13.  docker logs -f container-name-or-id : Log container
14.  docker stats container-name-or-id : Stats


## Network in Docker
01. docker network ls: Show all list networks
02. docker network create --driver [driverOption] networkName : Create a network
 driverOption:
  - bridge
  - ...
03. docker network disconnect : Disconnect a container from a network
04. docker network inspect : Display detailed information on one or more networks
05. docker network prune : Remove all unused networks
06. docker network rm :	Remove one or more networks

## Docker Compose
01. docker-compose up : run file docker-compose.yml
02. docker-compose down : Stop and delete container