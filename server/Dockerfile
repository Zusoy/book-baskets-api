FROM nginx:1.18.0-alpine

ARG APP_ENV=prod
ARG APP_HOST=localhost
ARG APP_SCHEME=http

RUN \
  apk add --no-cache \
    gettext=0.20.1-r2 \
    apache2-utils=2.4.43-r0
    
RUN rm /var/log/nginx/error.log

COPY config/server.conf /etc/nginx/nginx.conf.dist

RUN \
  envsubst \
    '$APP_HOST $APP_SCHEME' \
      < /etc/nginx/nginx.conf.dist \
      > /etc/nginx/nginx.conf \
  && \
  rm /etc/nginx/nginx.conf.dist

WORKDIR /usr/src/app
