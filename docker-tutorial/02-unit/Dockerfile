# Updated as of May 16, 2020
# FROM specified which image i want to download
# Needs to be provided before any other section of code.
FROM nginx:latest

#Author of the Docker File
# MAINTAINER Pictolearn Note: MAINTAINER has been deprecated for LABEL, 
# LABEL is a key value pair 
LABEL "Maintainer"="Richard"

# Copy httpd.conf with changes to the root directory
COPY default.conf /etc/nginx/conf.d/

# Copy the following directory
COPY code-sample/ /usr/share/nginx/html/richard 