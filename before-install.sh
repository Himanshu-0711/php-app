#!/bin/bash

# Update the package list and install Nginx
sudo apt-get update
sudo apt-get install -y nginx

# Start the Nginx service
sudo systemctl start nginx

# Enable Nginx to start on boot
sudo systemctl enable nginx

# Print a message indicating the installation is complete
echo "Nginx is installed and running."
