cd C:\Users\1144001722\Desktop\stocker
docker stop stocker666_wordpress_1
docker rm stocker666_wordpress_1
docker rmi stocker:wordpress
docker build -t stocker:wordpress .
docker-compose up -d
pause