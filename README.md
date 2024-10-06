Инструкция по запуску веб приложения на сервере:

    На новом созданном сервере нужно выполнить действия (В примере команды для Ubuntu)
        sudo apt update
        sudo apt upgrade
        sudo apt install openssh-server
        sudo systemctl start ssh -запускаем службу ssh
        sudo systemctl enable ssh -включаем автозапуск службы
        ip addr -узнаем ip-адрес сервера

    На клиенте с проектом:
        ssh <userserver>@<ipserver> -необязательно, проверка возможности подключения к серверу
        ssh-copy-id <userserver>@<ipserver> -копируем ssh на сервер

        В файле inventory.ini вносим изменения для нашего сервера 

        В папке с Плейбуком (web-app/ansible) запускаем команду: 
            ansible-playbook -i inventory.ini playbook.yml

    Теперь идем в браузер и подключаемся по ip сервера, проверяем работу

