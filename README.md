# docker-quick-start

## Docker Images and Container manager
01.  docker --version : Check docker version
02.  docker pull nameimage:tag : pull a image from dockerhub
03.  docker images : Show all images in docker
04.  docker run [imageName] : run a container
05.  docker ps : Show all container is running
06.  docker ps : Show all container is running and stop
07.  docker start [containerId] : Start container when it is stop
08.  docker stop [containerId] : Start container when it is start
09.  docker restart [containerId] : Restart a container
10.  docker rm [containerId] : Remove a container when it is stop
11.  docker rmi [imageName] : Remove a image
12.  docker stop $(docker ps -a -q): Stop all container is running
13.  docker rm $(docker ps -a -q): Delete All container

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