#!/bin/bash
docker compose exec basededatos bash -c 'mysqldump -u root -p$MYSQL_ROOT_PASSWORD prestashop' > backup.sql