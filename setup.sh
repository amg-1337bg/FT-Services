brew install minikube

minikube start
minikube addons enable metallb
kubectl apply -f srcs/metallb.yaml
eval $(minikube -p minikube docker-env)
docker build -t ngx-depl srcs/nginx/.
kubectl apply -f srcs/nginx/nginx-deploy.yaml
kubectl apply -f srcs/nginx/teste.yaml
