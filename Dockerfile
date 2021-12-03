FROM mariadb:latest

ENV MARIADB_ROOT_PASSWORD=qwerty
ENV MARIADB_USER=mayra
ENV MARIADB_PASSWORD=qwerty
ENV MARIADB_DATABASE=proyecto_jsp

COPY ./proyecto_jsp.sql /docker-entrypoint-initdb.d/

VOLUME [ "/var/lib/mysql" ]
