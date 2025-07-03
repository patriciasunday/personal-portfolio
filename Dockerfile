FROM php:8.2-cli
WORKDIR /portfolio
COPY . .
CMD ["php", "-S", "0.0.0.0.10000", "-t", "."]