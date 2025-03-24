Рендеринговий двигун (Rendering Engine)
Основна задача цього компонента – отримати HTML, CSS, а також інші ресурси (зображення, шрифти, скрипти) і перетворити їх на візуальне зображення. Процес рендерингу включає:

Парсинг HTML для побудови DOM-дерева (Document Object Model).
Обробку CSS для створення CSSOM-дерева.
Обчислення макета (Layout), коли браузер визначає точне розташування кожного елементу.
Побудову шарів та фарбування (Painting), коли браузер малює вміст на екрані.
JavaScript-двигун
Він відповідає за обробку та виконання JavaScript-коду, що впливає на динаміку сторінки. Скрипти можуть змінювати DOM, керувати подіями та здійснювати асинхронні запити до сервера.

Мережева підсистема
Відповідає за завантаження ресурсів із мережі. Вона працює з такими протоколами, як HTTP/HTTPS, реалізовує взаємодію з DNS-серверами для перетворення доменних імен в IP-адреси та використовує протоколи шифрування (TLS) для забезпечення безпечної передачі даних.

Модель процесів та потоків
Сучасні браузери можуть використовувати багатопроцесну або багатопотокову архітектуру для ізоляції вкладок, розширень та різних підсистем. Це підвищує стабільність і безпеку, оскільки помилка в одній вкладці не впливає на інші.

Подієвий цикл (Event Loop)
Браузер використовує подієвий цикл для обробки подій (натискання кнопок, мережеві запити тощо) та виконання колбеків після завершення асинхронних операцій. Це дозволяє браузеру залишатися чуйним, навіть під час обробки великої кількості завдань.

Зберігання даних на стороні клієнта
Для збереження даних браузери використовують кілька механізмів, що дозволяють зберігати інформацію навіть після закриття вкладки або браузера (див. нижче про local storage, session storage та cookies).

Визначення ключових термінів
IP (Internet Protocol)
IP-адреса — це унікальний числовий ідентифікатор пристрою в мережі. Він дозволяє маршрутизаторам і серверам правильно передавати дані між пристроями в Інтернеті.

DNS (Domain Name System)
DNS — це система доменних імен, яка перетворює зрозумілі для людини доменні імена (наприклад, example.com) у числові IP-адреси, необхідні для встановлення мережевого з'єднання.

HTTP (HyperText Transfer Protocol)
HTTP — це протокол для передачі гіпертекстових документів (веб-сторінок). Він визначає, як формуються запити від клієнта до сервера та як сервер повинен відповідати, передаючи контент (текст, зображення, скрипти).

HTTPS (HTTP Secure)
HTTPS — це захищена версія HTTP, яка використовує протокол шифрування TLS для забезпечення конфіденційності та цілісності даних під час їх передачі між клієнтом і сервером.

HTTP: Заголовки та тіло (headers & body)

Заголовки (Headers): Метадані, що передаються разом із HTTP-запитом або відповіддю. Вони містять інформацію про тип контенту, метод авторизації, кешування, куки, дані про браузер та інше.
Тіло (Body): Основний вміст повідомлення. У випадку запиту — це дані, що надсилаються на сервер (наприклад, дані форми), а у випадку відповіді — HTML-код, зображення, JSON-дані тощо.
TLS (Transport Layer Security)
TLS — це криптографічний протокол, який забезпечує безпечне з'єднання між клієнтом і сервером. Він захищає дані від перехоплення та змін під час передачі, використовуючи шифрування та автентифікацію.

Local Storage
Local Storage — це механізм веб-зберігання, який дозволяє зберігати дані в браузері на невизначений термін (до явного видалення). Він дозволяє зберігати великі об’єми даних, не передаючи їх щоразу на сервер.

Session Storage
Session Storage — схожий на local storage, але дані зберігаються лише протягом сесії (тобто, поки відкрита вкладка або вікно браузера). Після закриття сесії дані автоматично видаляються.

Cookies
Cookies — невеликі текстові файли, які веб-сервери зберігають на комп’ютері користувача. Вони використовуються для збереження інформації про сесію, налаштування, персоналізацію контенту та відстеження активності користувача.

WebSocket
WebSocket — протокол, що забезпечує двосторонній (full-duplex) зв’язок між клієнтом і сервером через постійне TCP-з’єднання. Це дозволяє обом сторонам надсилати дані в реальному часі без необхідності постійного встановлення нового з’єднання.

Структура HTTP-запиту
Метод запиту:
HTTP використовує різні методи, що визначають тип операції. Найпоширеніші:

GET: Запит на отримання ресурсу.
POST: Надсилання даних на сервер (наприклад, заповнена форма).
PUT, DELETE, PATCH та інші використовуються для оновлення або видалення даних.
Запитний рядок (Request Line):
Складається з методу, URI (універсальний ідентифікатор ресурсу) та версії протоколу (наприклад, HTTP/1.1).

Заголовки (Headers):
Метадані, які надають додаткову інформацію про запит: тип вмісту, інформацію про клієнта, параметри кешування, автентифікацію тощо.

Тіло запиту (Body):
Не завжди використовується, але може містити дані, які необхідно передати серверу (наприклад, дані форми при POST-запиті).

2. Структура HTTP-відповіді
Статусний рядок:
Включає версію протоколу, статусний код (наприклад, 200, 404, 500) та короткий опис статусу.

Заголовки відповіді:
Інформація про тип вмісту, розмір, кешування, сервер, дату та інші метадані.

Тіло відповіді:
Основний вміст, який надсилається клієнту, наприклад, HTML-документ, зображення, JSON-дані тощо.

3. Основні етапи взаємодії через HTTP
Встановлення з’єднання:
Клієнт відкриває TCP-з’єднання із сервером (часто використовується HTTP/1.1, який підтримує збереження з’єднання для кількох запитів).

Відправка запиту:
Браузер формує HTTP-запит згідно зі структурою, зазначеною вище, і надсилає його на сервер.

Обробка запиту сервером:
Сервер приймає запит, обробляє його (за потреби взаємодіє з базою даних, іншими сервісами) та формує відповідь.

Отримання відповіді:
Клієнт отримує HTTP-відповідь, аналізує статусний код, заголовки та тіло відповіді.

Закриття або повторне використання з’єднання:
В залежності від заголовків та налаштувань (наприклад, Connection: keep-alive), з’єднання може бути збережено для подальших запитів або закрито.

Отримання ресурсів
Завантаження HTML:
Браузер надсилає HTTP-запит до сервера і отримує HTML-документ.

Паралельне завантаження:
Після отримання HTML браузер починає завантажувати пов’язані ресурси: CSS-файли, JavaScript, зображення, шрифти тощо.
(Багато з цих ресурсів завантажуються паралельно, що прискорює процес рендерингу.)

2. Парсинг HTML та побудова DOM-дерева
Парсинг HTML:
Браузер аналізує HTML-код та будує DOM-дерево (Document Object Model) — внутрішнє представлення структури документа, яке дозволяє динамічно змінювати елементи сторінки.

Вбудовані скрипти:
Якщо в HTML знаходяться блоки JavaScript, браузер може зупинити парсинг для їх виконання. Це може призвести до блокування рендерингу, тому важливо оптимізувати порядок розміщення скриптів.

3. Парсинг CSS та побудова CSSOM-дерева
Парсинг CSS:
Завантажені CSS-файли аналізуються та інтерпретуються. Браузер створює CSSOM-дерево (CSS Object Model), яке містить всі стилі, що застосовуються до елементів.

Розрахунок специфічності:
При парсингу враховується спадковість, специфічність селекторів та каскадність, що визначає, які правила застосовуються до кожного елемента.

4. Побудова Render Tree (дерева відображення)
Об’єднання DOM та CSSOM:
Render tree формується шляхом об’єднання DOM-дерева і CSSOM-дерева. Воно містить лише ті елементи, які будуть видимі на екрані, разом із стилями, які до них застосовуються.
5. Layout (Обчислення макету)
Визначення розташування елементів:
Браузер проходить по Render tree і обчислює розміри та позиції кожного елемента. Цей процес називається layout або reflow. На цьому етапі враховуються властивості CSS, такі як відступи, поля, розміри та позиціонування.
6. Painting (Малювання)
Відтворення вмісту:
Після обчислення макету браузер переходить до процесу painting. Він відображає кожен елемент, задає кольори, шрифти, фон, тіні та інші візуальні ефекти.
Цей етап може бути розділений на декілька шарів (layers) для оптимізації рендерингу.
7. Compositing (Композиція)
Об’єднання шарів:
Якщо сторінка має декілька шарів (наприклад, елементи, що використовують CSS-анімації або трансформації), браузер складає їх у фінальне зображення.
Цей етап дозволяє ефективно відображати анімації та змінювати окремі частини сторінки без повного перерендерингу.
8. Виконання JavaScript та оновлення DOM
JavaScript-двигун:
Після початкового рендерингу браузер може виконувати JavaScript, який змінює DOM або CSSOM (наприклад, через маніпуляції з елементами, додавання анімацій, асинхронні запити).
Такі зміни можуть спричиняти reflow (повторне обчислення макету) або repaint (перемалювання) для відображення оновлень.

Асинхронні операції:
Використання AJAX, Fetch API або WebSocket дозволяє оновлювати частини сторінки без повного перезавантаження, зберігаючи користувацький досвід плавним і чуйним.
Впорядкуй все доповни щоб все виглядало гарно та відповідало формату readme.md на гіт хаб по інструкціям зверху
