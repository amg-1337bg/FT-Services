# FT Services (Kubernetes Project)
![alt text](https://www.devteam.space/wp-content/uploads/2017/07/dockerkubernetes.jpg)

## This is a System Administration and Networking project.

The project consists of setting up an infrastructure of different services. To do this, you
must use Kubernetes. You will need to set up a multi-service cluster.
Each service will have to run in a dedicated container.
Each container must bear the same name as the service concerned and for performance
reasons, containers have to be build using Alpine Linux.
Also, they will need to have a Dockerfile written by you which is called in the setup.sh.
You will have to build yourself the images that you will use. It is forbidden to take
already build images or use services like DockerHub.

> the project got several docker containers running in minikube kubernetes cluster, the section Above contain details about each container:

1. Nginx
    - Listening on ports 80, 443 and 22
    - **Nginx** Web server, redirects you to https server (443)
        - **nginx location /wordpress**, redirection of type 307 that redirects you to wordpress server
        - **nginx location /phpmyadmin**, redirection of type Reverse Proxy that redirects you to phpmyadmin server
    - **ssh** process that provide a Secured Shell for the users of the nginx Container
    - **telegraf** process Used for monitoring the container
2. Wordpress
    - Listening on port 5050
    - **Nginx** Web Server
    - **PHP-FPM** processes
    - **Wodpress** folder connected with mysql Container
    - **Telegraf** process used for monitoring the container, and store data on influxdb container
3. PhpMyAdmin
    - Listening on port 5000
    - **Nginx** Web Server
    - **PHP-FPM** processes
    - **PHPMYADMIN** folder connected with mysql Container
    - **Telegraf** process used for monitoring the container, and store data on influxdb container
4. Grafana
    - Listening on port 3000
    - **Grafana** Server
    - Connected to influxdb container. convert monitored data to graphic dashboards.
    - initialized dashboard for each container (CPU, DISK)
    - **Telegraf** process used for monitoring the container, and store data on influxdb container
5. Ftps
    - Listening on port 21 (Secured Port with ssl Certs)
    - **vsftpd** process, to give the users the ability to upload and download files to his home path (/home/$USER/)
    - **Telegraf** process used for monitoring the container, and store data on influxdb container
6. Mysql
    - Listening on port 3306
    - **mysql** server, contains database for wordpress and can managed with phpmyadmin
    - **Telegraf** process used for monitoring the container, and store data on influxdb container
7. Influxdb
    - Listening on port 8086
    - **Influxdb** server, contains databases for each container and keeps the monitored data (CPU Usage and DISK) on it.
    - **Telegraf** process used for monitoring the container, and store data on influxdb container

***All those Containers are created with Dockerfile based On Alpine and Running on minikube Cluster with YAML files***

## RUN
- ### Requirements
  - [minikube](https://minikube.sigs.k8s.io/docs/start/) is local Kubernetes, focusing on making it easy to learn and develop for Kubernetes.
  - [VirtualBox](https://minikube.sigs.k8s.io/docs/drivers/virtualbox/) is minikube’s original driver. It may not provide the fastest start-up time, but it is the most stable driver available for users of Microsoft Windows Home.
- ### RUN Setup.sh
  - Clone the repo.
  - Enter the root and Run `sh setup.sh`
