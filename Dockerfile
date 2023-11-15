# Use the official PHP 8.0 image as the base
FROM php:apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    && docker-php-ext-install zip pdo_mysql

# Copy the application files to the container
COPY . .

# Set the working directory
WORKDIR /Docker

EXPOSE 5000

