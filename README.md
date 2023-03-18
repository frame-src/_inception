# inception

  This project aim to create 3 Docker container, NGINX, Wordpress, and MariaDB and create a docker-network that establishes the connection between your       containers

https://www.nginx.com/resources/wiki/start/topics/examples/full/

sudo apt install docker.io docker-compose -y

sudo docker run --name web -itd -p 8080:80 nginx


nice explanation of EXPOSE and -p difference:
https://stackoverflow.com/questions/22111060/what-is-the-difference-between-expose-and-publish-in-docker

The EXPOSE instruction exposes ports for use within links.

https://docs.docker.com/network/links/

sudo docker network create {portfolio} --subnet 192.168.92.0/24