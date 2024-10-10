FROM mysql:latest

COPY create_test_db.sh /docker-entrypoint-initdb.d/

RUN chmod +x /docker-entrypoint-initdb.d/create_test_db.sh
