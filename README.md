# TasksManager-API

Это REST API для управления задачами на Laravel 12.  
В проекте реализован API с CRUD-операциями, также реализована валидация данных.

---

## 📦 Как установить и запустить:

1. Клонировать репозиторий:
```
git clone https://github.com/your-username/TasksManager-API.git
cd TasksManager-API
```
2. Установить зависимости:
```
composer install
```
3. Создать `.env` файл:
```
cp .env.example .env
```
4. Сгенерировать ключ приложения:
```
php artisan key:generate
```
5. Выполнить миграции:
```
php artisan migrate
```
6. Запустить сервер:
```
php artisan serve
```
Сервер будет доступен по адресу: http://localhost:8000

## Тестирование API с помощью Postman:  

<h3>1) Создание задачи (пример):</h3>  

URL: `POST` `http://localhost:8000/api/tasks`

Пример тела запроса (Body):
```
{
    "title": "Задача 5",
    "description": "Описание задачи 5",
    "status": "в ожидании"
}
```
![image](https://github.com/user-attachments/assets/e0662956-12ec-4a22-9853-1b48c3371051)  

### Результат:  
![image](https://github.com/user-attachments/assets/c1b5563c-5883-4ea1-8581-dcaf029ed3de)     

______

<h3>2) Просмотр списка задач (пример):</h3>  

URL: `GET` `http://localhost:8000/api/tasks`

![image](https://github.com/user-attachments/assets/81dadc8f-5d59-4570-9c85-b379cc4e896f)

### Результат:  
![image](https://github.com/user-attachments/assets/1be6d5f5-e559-4063-be47-2014406325d2)

______

<h3>3) Просмотр одной задачи (пример):</h3>  

URL: `GET` `http://localhost:8000/api/tasks/6`  

![image](https://github.com/user-attachments/assets/f952e2a6-3934-4284-98c1-3cbaad5624ad)

### Результат:  
![image](https://github.com/user-attachments/assets/3da1b1d1-e7fb-4dcd-82c8-93b8c243d65f)

______

<h3>4) Обновление задачи (пример):</h3>  

Задача  
![image](https://github.com/user-attachments/assets/e5bae152-fed9-4d83-9567-d6809c597350)   

URL: `PUT` `http://localhost:8000/api/tasks/6`  

![image](https://github.com/user-attachments/assets/1287e6fe-34d7-4103-b504-c4a7734ba370)

### Результат:  
![image](https://github.com/user-attachments/assets/497028f0-756a-48fc-89cd-60e215bed2b8)


______

<h3>5) Удаление задачи (пример):</h3>  

URL: `DELETE` `http://localhost:8000/api/tasks/6`  

![image](https://github.com/user-attachments/assets/454e1950-9f74-482e-804e-94ff704204b0)  

### Результат:  
![image](https://github.com/user-attachments/assets/19c2b3e4-ffd2-4bae-a424-13e84c632137)  

Проверка выполнения запроса  
![image](https://github.com/user-attachments/assets/b6137a63-e839-475d-a57f-064b51c89df7)


## 🛠 Используемые технологии
- Laravel 12
- PHP 8.2
- SQLite
- Composer
