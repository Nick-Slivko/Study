Rendering Engine
Основна задача Rendering Engine – отримання HTML, CSS та інших ресурсів (зображення, шрифти, скрипти) з метою перетворення їх на візуальне зображення.

Основні етапи рендерингу
Парсинг HTML та побудова DOM-дерева

Браузер аналізує HTML-код для формування DOM-дерева (Document Object Model).

Якщо в HTML вбудовані JavaScript-блоки, парсинг може бути призупинений для їх виконання.

Парсинг CSS та побудова CSSOM-дерева

Завантажені CSS-файли аналізуються та інтерпретуються.

Створюється CSSOM-дерево (CSS Object Model), що містить всі стилі, застосовані до елементів.

Розрахунок специфічності селекторів визначає, які стилі застосовуються до кожного елементу.

Побудова Render Tree (дерева відображення)

Render tree формується шляхом об’єднання DOM- та CSSOM-дерев.

Воно містить лише ті елементи, які будуть видимими на екрані, разом із застосованими стилями.

Layout (Обчислення макету)

На основі Render tree браузер обчислює точні розміри та позиції кожного елементу.

Враховуються CSS-властивості, такі як відступи, поля та позиціонування.

Painting (Малювання)

Після обчислення макету браузер відображає кожен елемент, задаючи кольори, шрифти, фони, тіні та інші візуальні ефекти.

Цей процес може бути розділений на декілька шарів (layers) для оптимізації.

Compositing (Композиція)

Якщо сторінка містить декілька шарів (наприклад, для анімацій чи трансформацій), браузер об’єднує їх у фінальне зображення.

Цей етап дозволяє ефективно оновлювати лише частини сторінки без повного перерендерингу.

JavaScript-двигун
JavaScript-двигун відповідає за обробку та виконання JavaScript-коду, що визначає динаміку сторінки. Основні функції:

Виконання скриптів, що змінюють DOM або CSSOM.

Обробка подій та взаємодія з сервером через асинхронні запити (AJAX, Fetch API).

Керування колбеками та оновленням вмісту сторінки.

Мережева підсистема
Мережева підсистема відповідає за завантаження ресурсів із мережі та взаємодію з різними протоколами:

HTTP/HTTPS – протоколи передачі даних.

DNS – перетворення доменних імен в IP-адреси.

TLS – забезпечення безпечної передачі даних за допомогою шифрування.

Модель процесів та потоків
Сучасні браузери можуть використовувати багатопроцесну або багатопотокову архітектуру для ізоляції:

Вкладок

Розширень

Різних підсистем

Це сприяє підвищенню стабільності та безпеки, оскільки помилка в одній вкладці не впливає на інші.

Подієвий цикл (Event Loop)
Браузери використовують подієвий цикл для:

Обробки подій (натискання кнопок, мережеві запити тощо).

Виконання колбеків після завершення асинхронних операцій.

Це дозволяє забезпечити чуйність навіть при великій кількості завдань.

Зберігання даних на стороні клієнта
Браузери використовують кілька механізмів для збереження даних:

Local Storage – зберігання даних на невизначений термін (до явного видалення).

Session Storage – зберігання даних протягом сесії (дані видаляються після закриття вкладки).

Cookies – невеликі текстові файли для збереження інформації про сесію, налаштувань та відстеження активності.

HTTP: Заголовки та Тіло
Заголовки (Headers)
Містять метадані запиту або відповіді: тип контенту, авторизація, кешування, дані про браузер, куки тощо.

Тіло (Body)
Основний вміст повідомлення.

При запиті: дані форми, JSON, файли.

При відповіді: HTML, зображення, JSON-дані тощо.

TLS (Transport Layer Security)
TLS забезпечує безпечне з’єднання між клієнтом та сервером через:

Шифрування даних.

Автентифікацію.

Структура HTTP-запиту
Основні компоненти:
Метод запиту:

GET – отримання ресурсу.

POST – надсилання даних на сервер.

PUT, DELETE, PATCH – оновлення або видалення даних.

Запитний рядок (Request Line):
Складається з методу, URI (універсальний ідентифікатор ресурсу) та версії протоколу (наприклад, HTTP/1.1).

Заголовки (Headers):
Метадані запиту з інформацією про тип вмісту, кешування, авторизацію тощо.

Тіло запиту (Body):
Містить дані, які передаються на сервер (не завжди використовується).

Структура HTTP-відповіді
Основні компоненти:
Статусний рядок:
Містить версію протоколу, статусний код (наприклад, 200, 404, 500) та короткий опис.

Заголовки відповіді:
Інформація про тип вмісту, розмір, кешування, сервер, дату тощо.

Тіло відповіді:
Основний вміст (HTML-документ, зображення, JSON-дані).

Основні етапи взаємодії через HTTP
Встановлення з’єднання:
Клієнт відкриває TCP-з’єднання із сервером (HTTP/1.1 підтримує збереження з’єднання для декількох запитів).

Відправка запиту:
Браузер формує HTTP-запит згідно зі структурою та надсилає його на сервер.

Обробка запиту сервером:
Сервер приймає запит, взаємодіє з базою даних чи іншими сервісами та формує відповідь.

Отримання відповіді:
Клієнт отримує HTTP-відповідь, аналізує статусний код, заголовки та тіло відповіді.

Закриття або повторне використання з’єднання:
Залежно від заголовків (наприклад, Connection: keep-alive), з’єднання може бути збережено для подальших запитів або закрито.

Парсинг та побудова дерев
Парсинг HTML та побудова DOM-дерева
HTML Парсинг:
Аналіз коду та створення DOM-дерева для динамічних змін.

Парсинг CSS та побудова CSSOM-дерева
CSS Парсинг:
Аналіз CSS-файлів, формування CSSOM-дерева з урахуванням специфічності та каскадності.

Побудова Render Tree
Об’єднання DOM та CSSOM:
Формування Render tree, що містить видимі елементи та застосовані стилі.

Layout, Painting та Compositing
Layout:
Обчислення розташування елементів на сторінці.

Painting:
Малювання елементів з використанням кольорів, шрифтів, фонів та ефектів.

Compositing:
Об’єднання декількох шарів для створення фінального зображення.

Виконання JavaScript та оновлення DOM
JavaScript-двигун:
Виконує скрипти, які можуть змінювати DOM та CSSOM.

Асимхронні операції:
Використання AJAX, Fetch API або WebSocket для оновлення сторінки без повного перезавантаження.

Реалізація оновлень:
Зміни в DOM можуть спричиняти повторний розрахунок макету (reflow) або повторне малювання (repaint).
