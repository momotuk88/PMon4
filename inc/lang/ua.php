<?php
if (!defined('PONMONITOR')){
	die("Hacking attempt!");
}
if (!defined('LANG')){
	die("Hacking attempt!");
}
$nova_ukraine = array(
'btn_olt_' => '',
'delet_onu_mon' => 'Видалити onu з моніторинга',
'inserttimemonitor' => 'Встановлено час моніторингу',
'enable_monitor' => 'Включено моніторинг',
'disable_monitor' => 'Виключено моніторинг',
'addnewdevice' => 'Додано новий пристрій',
'checkapisystem' => 'Потрібно перевірити внутрішній сервіс АРІ',
'gocheckcron' => 'Ініціалізована перевірка комутатора',
'emptytemponu' => 'Неможливо отримати інформацію з комутатора (потрібно перевірити SNMP,OID)',
'port' => 'Порти',
'statport' => 'Статус портів коммутатора',
'serial' => 'SN/Серійний номер',
'curport' => 'Журнал статусу портів за сьогодні',
'sennametg' => 'Сповіщення в телеграм',
'sennametgdescr' => 'Виключення, включення порта, збільшення помилок',
'indescrerr' => 'Моніторити ifInErrors, ifOutErrors',
'indescrerr' => 'Кількість пакетів, отриманих з помилкою, через яку пакети не були доставлені',
'olterr' => 'Помилки на портах - за сьогодні',
'dilen' => 'Ділення',
'sfpconn' => 'Підключено',
'portbadrx' => 'Поганих сигналів',
'monport' => 'Моніторинг портів',
'monportdescr' => 'Моніторити активність порта: включення, виключення',
'listonunoreg' => 'Список onu',
'cfg_statusport_name' => 'Журнал, список статусу портів',
'cfg_statusport_descr' => 'Показувати список статусу портів коли виключався',
'cfg_err_name' => 'Показувати помилки',
'cfg_err_descr' => 'Показувати помилки на портах в деталях комутатора',
'temp' => 'Температура',
'lastoffline' => 'Дата виключення',
'title_group' => 'Список всіх груп',
'addgroup' => 'Додати групу',
'descr_group' => 'Список всіх груп',
'15min' => '15 хвилин',
'30min' => '30 хвилин',
'typereg' => 'Тип реєстрації ONU',
'langcountonu' => 'Всього ONU на порті',
'supportcountonu' => 'Коефіцієнт поділу',
'uptimeolt' => 'Дата перевірки',
'show' => 'Показати',
'hide' => 'Сховати',
'upsswitch' => 'ДБЖ',
'onuonlinelist' => 'ONU які оффлайн',
'allonus' => 'ONU',
'allonile' => 'Онлайн ONU',
'alloffile' => 'Оффлайн ONU',
'allbadrx' => 'Поганих RX ONU',
'allsw' => 'Комутаторів',
'allerr' => 'Помилок за 24год',
'lastrx' => 'Попередній сигнал RX',
'keygraphsignal' => 'Графік сигналів',
'savecfg' => 'Зберегти конфігурацію',
'rereason' => 'Попередній раз включалось через',
'allmac' => 'Всі MAC',
'listvlan' => 'Список всіх Vlan',
'cfgonu' => 'Показати конфігурація ONU',
'dereg' => 'Деактивація',
'sfp_1' => 'Онлайн ONU',
'sfp_2' => 'Оффлайн ONU',
'sfp_3' => 'Всього піключено ONU',
'sfp_4' => 'Підтримує ONU',
'class_1' => 'Монтажник',
'class_2' => 'Ремонтник',
'class_3' => 'Оператор',
'class_4' => 'Завсклад',
'class_5' => 'Старший',
'class_6' => 'Адмін',
'class_7' => 'Маг',
'cfg_rx' => 'Логувати сигнали',
'cfg_pon_onugraph' => 'Вести журнал сигналів',
'noworks' => 'Відсутні задачі для виконання',
'mainpondog' => 'Список задач для моніторингу стану устаткування',
'lang_search' => 'Шукати ONU',
'lang_page_search' => 'Пошук ONU',
'btn_menu_device' => 'Обладнання',
'btn_menu_list' => 'Список комутаторів',
'btn_menu_cron' => 'Моніторинг комутаторів',
'btn_menu_search_ont' => 'Пошук ONU',
'btn_menu_sys' => 'Система',
'btn_menu_conf' => 'Налаштування',
'btn_menu_user' => 'Користувачі',
'btn_menu_oid_m' => 'OID менеджер',
'btn_menu_exit' => 'Вихід',
'bdcom_vlan' => 'Влан',
'allmac' => 'Всі MAC',
'log_onu' => 'Журнал ONU',
'close' => 'Закрити',
'list_mac_port' => 'Список всіх MAC на порту',
'edit_vlan' => 'Прописано новий VLAN ',
'reboot_onu_users' => 'ONU перезавантажено ',
'btn_olt_allconn' => 'Комутація портів',
'btn_olt_allonu' => 'Список всіх ONU',
'btn_olt_allinfo' => 'Повна інформація',
'cfg_root' => 'Основна папка',
'cfg_root_descr' => 'Директорія розміщення основних файлів',
'cfg_url_descr' => 'Direct Link (Пряме посилання)',
'edit_config' => 'Змінив налаштування системи',
'setup_pon' => 'Налаштування системи',
'cfg_count' => 'К-ть терміналів',
'cfg_count_descr' => 'К-ть терміналів відображено на одній сторінці',
'cfg_api_descr' => 'Основий URL api Системи',
'cfg_style_descr' => 'Шаблон системи (CSS,JS,TPL)',
'cfg_geo_lan' => 'Довгота',
'cfg_geo_lon' => 'Широта',
'cfg_geo_lan_descr' => 'Географічні координати Провайдера',
'cfg_comm_onu' => 'Коментарі до термналів',
'cfg_comm_onu_decr' => 'Коментарі до терміналів для полегшення інформативності клієнта',
'cfg_pon_descr' => 'Понбокси, сплітери, ВОЛС, маркування',
'cfg_tmc_sklad' => 'ТМЦ/Склад',
'cfg_tmc_sklad_descr' => 'Облік основних пристроїв',
'cfg_port' => 'Налаштування портів',
'cfg_port_descr' => 'Комутація портів, опис портів, підключення портів',
'cfg_unit' => 'Вузол зв`язку',
'cfg_unit_descr' => 'Всі вузли зв`язку',
'cfg_telegran_sms' => 'Модуль для сповіщення',
'cfg_telegran_token' => 'Ключ для використання бота',
'cfg_telegran_chat' => 'Ідентифікатор чата в Телеграмі',
'portswitch' => 'Порт коммутатора',
'noneinfo' => 'Щось пішло не так!',
'stekyvania' => 'Стекувати',
'stekyvaniatree' => 'Стекувати дерево',
'stekyvania_descr_dialog' => 'Стекування Пон дерева з фізичним портом комутатора',
'geounit' => 'Зберегти координа розташування вузла', 
'unitnote' => 'Нотатки для вузла', 
'monitorapi' => 'Урл API системи', 
'descrmonitorapi' => 'Пряме посилання на API системи', 
'cachetime' => 'Час очищення кешу', 
'descrcachetime' => 'Час через який очистить кэш системи', 
'snmpmode' => 'SNMP Режим', 
'descrsnmpmode' => 'Тип підключення до мережевого обладнання', 
'countlistsitelog' => 'К-ть записів на сторінці', 
'descrcountlistsitelog' => 'Кількість записів на одній сторінці ЛОГ', 
'criticcpuolt' => 'Пік критичного завантаження ЦП обладання', 
'descrcriticcpuolt' => 'Пік при якому система фіксує даний показник', 
'critictemp' => 'Пік критичної температури обладання', 
'descrcriticcpuolt' => 'Пік при якому система фіксує даний показник', 
'criticsignal' => 'Пік критичної зміни сигналу RX ONU', 
'descrcriticsignal' => 'Пік при якому система фіксує даний показник', 
'geolan' => 'Географічні координати Довгота', 
'geolon' => 'Географічні координати Широта', 
'geodescr' => 'Географічне розташування Провайдера в Україні', 
'moduletag' => 'Модуль Теги/ONU', 
'descrmoduletag' => 'Внутрішній модуль для позначення/маркування ONU', 
'modulepon' => 'Модуль Pon Мережа', 
'descrmodulepon' => 'Побудова власної мережі для полегшення обслуговування і моніторингу', 
'modulesklad' => 'Модуль ТМЦ', 
'descrmodulesklad' => 'Облік обладання', 
'moduleconfigport' => 'Модуль Порт', 
'descrmoduleconfigport' => 'Можливість налаштування та комутація портів', 
'modulecomm' => 'Модуль коментарі', 
'descrmodulecomm' => 'Можливість додавання коментарів до терміналів', 
'vol1' => 'ОК 1 вол', 
'vol2' => 'ОК 2 вол',
'vol4' => 'ОК 4 вол',
'vol8' => 'ОК 8 вол',
'vol12' => 'ОК 12 вол',
'vol16' => 'ОК 16 вол',
'vol18' => 'ОК 18 вол',
'vol24' => 'ОК 24 вол',
'vol48' => 'ОК 48 воло',
'spliter1' => 'Дільник 1*2',
'spliter2' => 'Дільник 1*3',
'spliter3' => 'Дільник 1*4',
'spliter4' => 'Дільник 1*6',
'spliter5' => 'Дільник 1*8',
'spliter6' => 'Дільник 1*16',
'spliter7' => 'Дільник 1*32',
'spliter8' => 'Дільник 1*64',
'spliter9' => 'Дільник 1*128',
'spliter10' => 'Розгалужувач 5/95%',
'spliter11' => 'Розгалужувач 10/90%',
'spliter12' => 'Розгалужувач 15/85%',
'spliter13' => 'Розгалужувач 20/80%',
'spliter14' => 'Розгалужувач 25/75%',
'spliter15' => 'Розгалужувач 30/70%',
'spliter16' => 'Розгалужувач 35/65%',
'spliter17' => 'Розгалужувач 40/60%',
'spliter18' => 'Розгалужувач 45/55%',
'spliter19' => 'Розгалужувач 50/50%',
'delet_spliter' => 'Ви дійсно хочете видалити?',
'emptytempdataonu' => 'Невідома причина: системний SNMPWALK - працює, преверіте налаштування CRON',
'emptyarraydata' => 'Неможливо сформувати масив для опитування комутатора',
'emptysnmpwalk' => 'Неможливо отримати інформацію через SNMPWALK - преверіте правильність OID',
'log_addnew_unit' => 'Додано в базу новий вузол звязку: ',
'log_add_device_unit' => 'Додано в вузол звязку новий пристрій ',
'emptyslovoponbox' => 'Розподільчий оптичний бокс порожній',
'nameponbox' => 'Назва понбокса',
'emptyslovo' => 'Порожньо',
'signal' => 'Сигнал',
'volokno' => 'Волокно',
'register' => 'Реєстрація',
'online' => 'Онлайн',
'offline' => 'Оффлайн',
'countdevice' => 'Всього пристроїв',
'class7' => 'Директор',
'class6' => 'Адмін',
'class5' => 'Старший',
'class4' => 'Складовщик',
'class3' => 'Оператор',
'class2' => 'Ремонтник',
'class1' => 'Монтажник',
'class' => 'Группа',
'edit_password' => 'Редагувати пароль',
'edit_users' => 'Редагувати користувача',
'usname' => 'Імя',
'newpassword' => 'Новий пароль',
'delet_users' => 'Ви дійсно хочете видалити користувача?',
'delet_us' => 'Видалення користувача',
'geo' => 'Координати',
'add_geo_base' => 'Зберегти координати локації в базу',
'location' => 'Локації',
'group' => 'Групи',
'listlocation' => 'Список локацій',
'getlocation' => 'Встановити місце локації',
'addlocation' => 'Додати нову локацію',
'editlocation' => 'Редагувати локації',
'locationdetail' => 'Інформація про локацію',
'pt_add' => 'Новий пристрій',
'pd_add' => 'Додати в базу новий пристрій',
'pl_device' => 'Список обладнання',
'pd_device' => 'Повний список обладнання',
'pt_detail' => 'Повна інформація про пристрій',
'pd_detail' => 'Детальна інформація про пристрій',
'pt_oid' => 'OID менеджер',
'pd_oid' => 'OID менеджер, редагування, видалення',
'pt_apibilling' => 'API Billing',
'pd_apibilling' => 'Налаштування доступу до API Billing',
'pt_onu' => 'Повна інформація про пристрій',
'pd_onu' => 'Інформація в реальному часі',
'pt_location' => 'Всі локації',
'pd_location' => 'Список локацій',
'addssl' => 'Налаштування доступу до пристрою',
'add_location' => 'Додати локацію',
'oid_edit' => 'Редагувати OID',
'oid_add' => 'Додати OID',
'oid_del' => 'Видалити OID',
'oid_save' => 'Зберегти зміни',
'1h' => '1 година',
'2h' => '2 години',
'3h' => '3 години',
'4h' => '4 години',
'sec' => 'секунд',
'setup' => 'Налаштування',
'timeinterval' => 'Інтервал перевірки',
'timecheck' => 'Час перевірки',
'timecheckport' => 'Час перевірки портів',
'timecheckrx' => 'Час знімання сигналів',
'timework' => 'Час виконання перевірки',
'timeworklast' => 'Попередній час виконання',
'empty' => 'інформація відсутня',
'oid_cpu' => 'Поточна завантаженість процесора',
'oid_ifinerrors' => 'Кількість вхідних пакетів, отриманих з помилкою.',
'oid_ifouterrors' => 'Кількість вихідних пакетів, отриманих з помилкою.',
'load_cpu' => 'Завантаженість процесора',
'load_temp' => 'Температура',
'count_port' => 'К-ть підключених ONT',
'count_port_pon' => 'Всього PON портів',
'oid_list_mac' => 'Список MAC',
'oid_epon_wan' => 'Поточний стан Eth інтерфейсу',
'oid_epon_reason' => 'Причина вимкнення пристрою',
'oid_epon_device' => 'Інформація про пристрій',
'oid_temp' => 'Температура пристрою',
'oid_uptime' => 'Час роботи пристрою',
'oid_epon_bias_curent' => 'Струм зміщення лазера (це постійна складова струму)',
'oid_list_port' => 'Список портів',
'oid_epon_time_offline' => 'Час вимкнення пристрою',
'oid_olt_port_status' => 'Поточний стан інтерфейсу',
'oid_epon_lan_mode' => '',
'oid_gpon_status' => 'Поточний стан інтерфейсу',
'oid_gpon_dist' => 'Довжина волокна до пристрою',
'oid_gpon_name' => 'Назви пристрою',
'oid_gpon_descr' => 'Опис пристрою',
'oid_gpon_reason' => 'Причина вимкнення пристрою',
'oid_gpon_timeup' => 'Час роботи пристрою',
'oid_gpon_timedown' => 'Час увімкнення пристрою',
'oid_gpon_rxolt' => 'Значення оптичної потужності Rx від ONT ло OLT',
'oid_gpon_rx' => 'Значення оптичної потужності Rx від OLT до ONT',
'oid_gpon_model' => 'Модель виробника пристрою',
'oid_gpon_operstatus' => 'Поточний стан oper',
'oid_gpon_count_mac' => 'Кількість МАС включених в пристрій',
'oid_gpon_type_reg' => 'Тип авторизації пристрою',
'oid_gpon_admin_status' => 'Поточний стан admin',
'oid_epon_all_name' => 'Список всіх назв пристроїв',
'oid_epon_mac' => 'МАС пристрою',
'oid_epon_dist' => 'Довжина волокна до пристрою',
'oid_epon_status' => 'Поточний стан oper',
'oid_epon_rx' => 'Значення оптичної потужності Rx від OLT до ONT',
'oid_epon_temp' => 'Поточна температура пристрою',
'oid_epon_tx' => 'Значення оптичної потужності Tx від ONT',
'oid_epon_inface' => 'Inface пристрою',
'oid_epon_vendor' => 'Vendor пристрою',
'oid_epon_model' => 'Model пристрою',
'oid_epon_eth' => 'Поточний стан Eth інтерфейсу',
'oid_epon_volt' => 'Струм зміщення лазера (це постійна складова струму)',
'oid_epon_rxolt' => 'Значення оптичної потужності Rx від ONT ло OLT',
'oid_epon_list_port' => 'Список всіх інтерфейсів OLT',
'oid_epon_port_satus' =>'Поточний стан інтерфейсу OLT oper',
'oid_epon_switch_temp' => 'Поточна температура прострою',
'oid_status_220' => '',
'oid_volt_battery' => '',
'newdevice' => 'Новий пристрій',
'olt' => 'Концетратор OLT',
'model' => 'Модель',
'uptime' => 'Час безперервної роботи',
'edit_monitor' => 'Моніторинг',
'edit_descr' => 'Редагувати опис',
'add_descr' => 'Додати опис',
'port' => 'Порт',
'port' => 'Порт',
'update' => 'Обновити',
'switch' => 'Свіч',
'switchl2' => 'Свіч L2',
'wanport' => 'Eth порт',
'volt' => 'Напруга живлення модуля ONU',
'dist' => 'Довжина волокна',
'metr' => 'метр',
'models' => 'Виробник',
'emlist' => 'Відсутні термінали onu',
'onuoffline' => 'Термінал оффлайн',
'noactive' => 'Неактивний',
'active' => 'Активний',
'online' => 'Онлайн',
'offline' => 'Оффлайн',
'sfp' => 'SFP модуль',
'on' => 'включити',
'ons' => 'включено',
'modchecker' => 'SNMP Checker',
'delet' => 'Видалити',
'checker' => 'Перевірити',
'photo' => 'Фото',
'usersbilling' => 'Користувач',
'logrx' => 'Графік Rx',
'connects' => 'Комутація',
'log' => 'Журнал',
'save' => 'Зберегти',
'dogovor' => '№ договору/UID клієнта',
'commentar' => 'Коментар',
'marker' => 'Маркер/тег',
'marker_cfg' => 'Маркування терміналів для полегшення пошуку',
'edit' => 'Редагувати',
'reboot' => 'Перезавантажити',
'rebootall' => 'Перезавантажити всі ONU',
'map' => 'Карта',
'map_cfg' => 'Потужний інструмент для інтерактивної візуалізації мережі',
'alldevice' => 'Всі пристрої',
'add' => 'Додати',
'blockonline' => 'К-ть онлайн',
'blockoffline' => 'К-ть оффлайн',
'on' => 'включити',
'off' => 'виключити',
'offs' => 'виключено',
'list' => 'Список',
'listdevice' => 'Список обладнання',
'curentconnectport' => 'Поточний порт куди увімкнений SFP модуль',
'selectconnectdevice' => 'Виберіть підключаємий пристрій/порт зі списку',
'modeldevice' => 'Модель пристрою',
'connect' => 'Підключити',
'typevolokno' => 'Тип волокна',
'typevoloknodescr' => 'Тип волокна з яким може працювати',
'typeconnector' => 'Тип конектора',
'signalwav' => 'Частота модуля',
'maxdist' => 'Максимальна довжина',
'sfpspeed' => 'Швидкість модуля',
'setups' => 'Налаштувати',
'photo_info' => 'не повинно перевищувати 3 Мб',
'addpondog' => 'Додати комутатор для перевірки',
'type_priority' => 'Тип перевірки',
'priority1' => 'Первина перевірка',
'priority2' => 'Стандартна перевірка',
'priority3' => 'Стандартна перевірка (RX)',
'photo' => 'Фото',
'name' => 'Назва',
'addnewdevice' => 'Додати новий пристрій в базу ',
'sfpname' => 'Можна вказувати тільки назву а для себе можна модель',
'delet_location' => 'Ви дійсно хочете видалити локацію?',
'connectto' => 'З`єднати з ',
'connectport' => 'Порт куди увімкнений SFP модуль',
'deletconnect' => 'Розірвати комутацію',
'newconnect' => 'Створення віртуальної комутації порта',
'addphoto' => 'Додати фото',
'alllocation' => 'Всі локації',
'allunit' => 'Вузли звязку',
'users' => 'Користувачі',
'add_new_users' => 'Створити нового користувача',
'view' => 'Показати',
'hide' => 'Приховати',
'username' => 'Логін',
'password' => 'Пароль',
'mail' => 'Пошта',
'device' => 'Комутатор',
'currentdevice' => 'Поточний комутатор',
'selectsfp' => 'Виберіть підключаємий SFP-модуль зі списку',
'select' => 'Вибрати',
'selectdevice' => 'Виберіть підключаємий пристрій зі списку',
'inputnamedevice' => 'Введіть назву пристрою',
'ip' => 'IP-адреса',
'countport' => 'Кількість портів на свічу',
'ipdescr' => 'Ідентифікатор мережевого рівня',
'typeakb' => 'Тип акамулятора',
'powerakb' => 'Потужність',
'powerakbw' => 'Вихідна потужність Вт',
'mac' => 'MAC-адрес',
'sn' => 'SerialNumber',
'supporttmc' => 'Використовується в ТМЦ (модулі)',
'snmp' => 'SNMP - доступ',
'descrgraphrx' => 'Графічне зображення коливань сигнів RX',
'savesetup' => 'Зберегти налаштування',
'current' => 'Поточний',
'apibilling_urlapi' => 'Посилання на API',
'apibilling_urlapidescr' => 'Пряме посилання на API',
'apibilling_alluid' => 'Всього UID',
'apibilling_alluiddescr' => 'Кількість вказаних/прописаних UID',
'apibilling_keyapi' => 'Ключ від API',
'apibilling_keyapidescr' => 'Ключ авторизації в API',
'apibilling_type' => 'Тип модуля',
'apibilling_typedescr' => 'Вибрати з списку Billing',
'apibilling_statusdescr' => 'Поточний стан модуля API Billing',
'apibilling_status' => 'Стан модуля',
'apibilling_setup' => 'Налаштування API Billing',
'billnamedescr' => '№ договору облікового запису',
'billname' => 'Номер договру',
'billdate' => 'Дата реєстрації',
'billdatedescr' => 'Реєстрація облікового запису',
'billbalance' => 'Баланс користувача',
'billbalancedescr' => '',
'billpib' => 'П.І.Б',
'billlogin' => 'Логін',
'billpass' => 'Пароль',
'billcomm' => 'Коментар',
'edituid' => 'Редагувати UID для ONT',
'editmark' => 'Редагувати маркер для ONT',
'err_api_ont' => 'Error Ajax api',
'reason' => 'Причина вимкнення',
'err0' => 'Offline',
'err1' => 'POWER - втрата живлення (dying-gasp)',
'err2' => '(laser-always-on)',
'err3' => '(admin-control)',
'err4' => '(temp-omcc-problem)',
'err5' => 'Невідомо (unknown)',
'err6' => 'LOS (Loss of signal - втрата сигналу)',
'err7' => '(lcdg)',
'err8' => '(wire-down)',
'err9' => '(omci-mismatch)',
'err10' => '(omci-linkdown)',
'err11' => 'Гасло не співпало (password-mismatch)',
'err12' => 'Перезавантажено (reboot)',
'err13' => '(ranging-failed)',
'err14' => 'ONU відключено на ОLTі (disable-onu)',
'err15' => '(ack-timeout)',
'err16' => '(sfi)',
'err18' => '(onu-alarm)',
'err19' => '(loki)',
'err20' => 'Невідомо (none)',
'err21' => 'Потрібно перевірити ONU',
'err22' => 'authFailed',
'err23' => 'syncMib',
'err24' => 'logging',
'err25' => 'logging',
'err26' => 'LOSi',
'err27' => 'admin-down',
'err28' => 'omcc-down',
'err29' => 'password-mismatch',	
'err30' => 'mpcp-down',
'err31' => 'oam-down',
'err32' => 'firmware-download',
'err33' => 'illegal-mac',
'err34' => 'llid-admin-down',			
'err35' => 'reboot telnet pmon',			
'err36' => 'LOSi(Loss of signal for ONUi) or LOBi (Loss of burst for ONUi)',			
'err37' => 'LOFI(Loss of frame of ONUi)',			
'err38' => 'SFI(Signal fail of ONUi)',			
'err39' => 'LOAI(Loss of acknowledge with ONUi)',			
'err40' => 'LOAMI(Loss of PLOAM for ONUi)',			
'err41' => 'deactive ONT fails',			
'err42' => 'deactive ONT success',			
'err43' => 'reset ONT',			
'err44' => 're-register ONT',			
'err45' => 'pop up fail',			
'err46' => 'LOKI(Loss of key synch with ONUi)',			
'err47' => 'deactived ONT due to the ring',			
'err48' => 'shut down ONT optical module',			
'err49' => 'reset ONT by ONT command',			
'err50' => 'reset ONT by ONT reset button',			
'err51' => 'reset ONT by ONT software',			
'err52' => 'deactived ONT due to broadcast attack',			
'err53' => 'operator check fail',			
'err54' => 'a rogue ONT detected by itself',
'err55' => 'deactiveSucc',
'err56' => 'deactiveFail',
'err57' => 'unauthorized',
'err58' => 'snDisabled',	
);
?>