FROM alpine:3.9
LABEL maintainer="leafney <babycoolzx@126.com>"

RUN apk add --no-cache mysql mysql-client mariadb-server-utils && \
	addgroup mysql mysql && \
	mkdir /scripts && \
	rm -rf /var/cache/apk/*

COPY ./startup.sh /scripts/startup.sh
RUN chmod +x /scripts/startup.sh

VOLUME ["/var/lib/mysql"]
EXPOSE 3306

ENTRYPOINT ["/scripts/startup.sh"]