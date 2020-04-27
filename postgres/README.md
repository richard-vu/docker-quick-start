# docker-quick-start

docker run --name postgres-java -v hostpath:/var/lib/postgresql/data -p 5432:5432 -e POSTGRES_PASSWORD=postgres -d postgres