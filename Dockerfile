# Use the official PHP image from the Docker Hub
FROM php:7.4-apache

# Copy project files into the container
COPY . /var/www/html/

# Set the working directory
WORKDIR /var/www/html/

# Expose port 80 to the host
EXPOSE 80
