Инструкция по запуску веб приложения на сервере:

На новом созданном сервере нужно выполнить действия (в примере команды для Ubuntu):
    sudo apt update
    sudo apt upgrade
    sudo apt install openssh-server

Запускаем службу ssh:
    sudo systemctl start ssh 
Включаем автозапуск службы ssh:
    sudo systemctl enable ssh 
Узнаем ip-адрес сервера:
    ip addr 

На клиенте с проектом:
Необязательно, проверка возможности подключения к серверу:
    ssh <userserver>@<ipserver> 
Копируем ssh-ключ на сервер:
    ssh-copy-id <userserver>@<ipserver> 

В файле inventory.ini вносим изменения для нашего сервера 

В папке с Плейбуком (web-app/ansible) запускаем команду: 
    ansible-playbook -i inventory.ini playbook.yml

Теперь идем в браузер и подключаемся по ip сервера, проверяем работу

