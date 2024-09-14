DOCKER_COMPOSE = docker-compose -f docker-compose.yml

up : 
	$(DOCKER_COMPOSE) up -d --build

down : 
	$(DOCKER_COMPOSE) down

restart :	
	$(DOCKER_COMPOSE) down
	$(DOCKER_COMPOSE) up -d

nuke :  
	$(DOCKER_COMPOSE) down -v
	docker system prune -f --volumes
	docker network prune -f
	docker volume prune -f
	docker image prune -a -f
	docker container prune -f

rebuild: nuke up

.PHONY: up down nuke list
