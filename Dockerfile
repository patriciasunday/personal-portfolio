FROM php:8.2-cli
WORKDIR /portfolio
COPY . .
CMD ["php", "-S", "0.0.0.0:9999", "-t", "."]