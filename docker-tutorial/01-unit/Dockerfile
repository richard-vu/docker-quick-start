# Updated as of May 16, 2020
# FROM specified which image i want to download
# Needs to be provided before any other section of code.
FROM httpd:2.4-bullseye

#Author of the Docker File
# MAINTAINER Pictolearn Note: MAINTAINER has been deprecated for LABEL, 
# LABEL is a key value pair
LABEL "Maintainer"="Richard"

# Copy the following directory
COPY code-sample/ /usr/local/apache2/htdocs/richard

# Copy httpd.conf with changes to the root directory
COPY httpd.conf /usr/local/apache2/conf