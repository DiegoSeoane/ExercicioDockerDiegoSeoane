#!/bin/bash
docker compose exec basededatos bash -c 'mysql -u $MYSQL_USER -p$MYSQL_PASSWORD prestashop < /backup/backup.sql'