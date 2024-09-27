# Имя файла: Makefile

# Переменные
DC = docker-compose

# Команды по умолчанию
all: up

# Команда для запуска docker-compose
up:
	@echo "#################################################"
	@echo ""
	$(DC) up -d
	@echo ""
	@echo "Доступен Nginx на: http://localhost:8080/"
	@echo "Доступен PhpMyAdmin на: http://localhost:8081/"
	@echo ""
	@echo "#################################################"

# Команда для остановки контейнеров
down:
	@echo "Останавливаем и удаляем контейнеры..."
	$(DC) down

# Перезапуск контейнеров
restart:
	@echo "Перезапускаем контейнеры..."
	$(DC) restart
	@echo "Контейнеры успешно перезапущены!"

# Лог контейнеров
logs:
	@echo "Вывод логов контейнеров..."
	$(DC) logs

# Вывод статуса контейнеров
status:
	@echo "Статус контейнеров:"
	$(DC) ps

# Чистка системных данных
clean:
	@echo "Очищаем неиспользуемые контейнеры, образы и данные..."
	docker system prune -af