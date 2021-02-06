#brew install minikube

minikube start --driver=virtualbox
minikube addons enable metallb
kubectl apply -f srcs/metallb.yaml
eval $(minikube -p minikube docker-env)

docker build -t ngx srcs/nginx/
docker build -t mys srcs/mysql/
docker build -t wordp srcs/wordpress/
docker build -t phpmy srcs/phpmyadmin/
docker build -t influx srcs/influxdb/
docker build -t grafa srcs/grafana/


#echo "-----------Create Volumes---------"

# kubectl apply -f srcs/mysql/create_volu.yaml
# kubectl apply -f srcs/wordpress/create_vol.yaml

kubectl apply -f srcs/mysql/mysql_service.yaml
kubectl apply -f srcs/wordpress/wp_service.yaml
kubectl apply -f srcs/nginx/nginx-dp-svc.yaml
kubectl apply -f srcs/phpmyadmin/phpmy_dp_svc.yaml
kubectl apply -f srcs/influxdb/influxdb_dp_svc.yaml
kubectl apply -f srcs/grafana/grafa_dp_svc.yaml


# kubectl apply -f srcs/mysql/mysql_service.yaml
# kubectl apply -f srcs/wordpress/wp_service.yaml

