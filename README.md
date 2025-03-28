### Local Storage
Local Storage - це веб-механізм збереження даних у браузері з необмеженим терміном зберігання. Основні характеристики:
- Зберігає інформацію у форматі "ключ-значення"
- Максимальний обсяг зазвичай становить 5-10 МБ
- Дані не видаляються після закриття браузера
- Доступний через JavaScript API
- Підтримується всіма сучасними браузерами
- Використовується для збереження налаштувань, авторизаційних токенів, кешування даних

### Session Storage
Session Storage подібний до Local Storage, але з обмеженим терміном зберігання:
- Дані зберігаються лише протягом однієї сесії браузера
- Автоматично очищується при закритті вкладки або вікна
- Максимальний обсяг також становить 5-10 МБ
- Унікальний для кожної вкладки браузера
- Корисний для тимчасового збереження службової інформації

### Cookies
Cookies - невеликі текстові файли для обміну інформацією між клієнтом і сервером:
- Розмір обмежений 4 КБ
- Автоматично передаються з кожним HTTP-запитом
- Можуть мати термін життя (постійні або сесійні)
- Використовуються для автентифікації, відстеження сесій, збереження налаштувань
- Мають властивості безпеки (HttpOnly, Secure)

### IP (Internet Protocol)
IP - фундаментальний протокол мережевої комунікації:
- Унікальний числовий ідентифікатор пристрою в мережі
- Може бути статичним або динамічним
- Існує два основні формати: IPv4 (4 байти) та IPv6 (16 байт)
- Забезпечує маршрутизацію пакетів даних між пристроями
- Працює на мережевому рівні моделі OSI

### DNS (Domain Name System)
DNS - розподілена система перетворення доменних імен:
- Транслює зрозумілі людині доменні імена у IP-адреси
- Використовує ієрархічну структуру серверів
- Включає кешування для прискорення резолвінгу
- Забезпечує відмовостійкість через резервування
- Підтримує різні типи записів (A, AAAA, MX, TXT тощо)

### HTTP/HTTPS
HTTP/HTTPS - протоколи передачі гіпертекстових документів:
- HTTP визначає правила обміну даними між клієнтом і сервером
- Використовує модель запит-відповідь
- HTTPS додає шифрування та автентифікацію
- Підтримує різні методи: GET, POST, PUT, DELETE, PATCH
- Використовує статусні коди для індикації результатів операцій

### TLS (Transport Layer Security)
TLS - криптографічний протокол захищеної комунікації:
- Забезпечує конфіденційність та цілісність даних
- Використовує асиметричне та симетричне шифрування
- Виконує перевірку сертифікатів для автентифікації
- Підтримує різні алгоритми шифрування
- Є наступником протоколу SSL


### HTTP-Запит
Складові HTTP-запиту:
- Метод (GET, POST, тощо)
- URI - адреса ресурсу
- Версія протоколу
- Заголовки з метаданими
- Опціональне тіло запиту

### HTTP-Відповідь
Складові HTTP-відповіді:
- Статусний код (200 OK, 404 Not Found)
- Версія протоколу
- Заголовки з інформацією про відповідь
- Тіло відповіді з вмістом

Детальний Процес Рендерингу Веб-Сторінки
Рендеринг веб-сторінки включає декілька етапів, кожен з яких відповідає за перетворення отриманих даних у візуальне представлення в браузері.

1. Отримання Ресурсів
Запити до сервера: Браузер ініціює HTTP-запити для завантаження HTML-документа, CSS-файлів, JavaScript-коду, зображень та інших ресурсів.

Паралельне завантаження: Сучасні браузери використовують паралельну обробку запитів, що дозволяє прискорити процес отримання ресурсів.

2. Парсинг HTML та Побудова DOM-дерева
Аналіз HTML: Браузер розбирає HTML-код та створює внутрішню модель документа — DOM-дерево, що відображає ієрархічну структуру елементів.

Обробка скриптів: При зустрічі з тегами <script> процес парсингу може тимчасово зупинятися для виконання JavaScript, що може вплинути на швидкість побудови DOM.

3. Парсинг CSS та Побудова CSSOM-дерева
Розбір стилів: CSS-файли або вбудовані стилі аналізуються для створення CSSOM (CSS Object Model), що містить правила стилізації.

Розрахунок специфічності: Під час побудови CSSOM враховуються правила спадкування, специфічність селекторів та каскадність, що впливають на остаточне застосування стилів.

4. Побудова Render Tree
Об’єднання даних: На основі DOM та CSSOM формується Render Tree — структура, що містить лише ті елементи, які відображаються на екрані.

Оптимізація: Елементи, позначені як невідображувані (наприклад, з властивістю display: none), виключаються з цієї структури.

5. Layout (Обчислення Макету)
Розрахунок позицій: На цьому етапі браузер проходить по Render Tree для визначення точного розташування, розмірів та пропорцій кожного елемента.

Reflow: У випадку змін в DOM або CSSOM відбувається повторний розрахунок макету, що може вплинути на продуктивність.

6. Painting (Малювання)
Візуалізація: Браузер малює кожен елемент згідно з обчисленим макетом, застосовуючи стилі, кольори, фони, шрифти та інші візуальні ефекти.

Шаровість: Процес малювання може відбуватись по шарах, що дозволяє ізолювати окремі області для оптимізації подальших оновлень.

7. Compositing (Композиція)
Об’єднання шарів: Якщо веб-сторінка розбита на декілька шарів (наприклад, для реалізації анімації чи трансформацій), ці шари компонуются в остаточне зображення, яке відображається користувачу.

Оптимізація продуктивності: Це дозволяє змінювати окремі шари без повного перерахунку або перерисування всієї сторінки.

8. Виконання JavaScript та Оновлення DOM
Інтерактивність: Після початкового рендерингу виконується JavaScript-код, який може змінювати DOM або CSSOM, впроваджувати інтерактивні елементи та обробляти події.

Динамічне оновлення: Зміни, внесені через JavaScript, можуть призводити до повторного розрахунку макету (reflow) або перерисування (repaint) певних елементів.

9. Асинхронні Операції
Фонове завантаження: Технології, як-от AJAX та Fetch API, дозволяють завантажувати додаткові дані без перезавантаження сторінки, забезпечуючи плавний користувацький досвід.

Двосторонній зв’язок: Використання WebSocket забезпечує постійне TCP-з’єднання, що дозволяє серверу та клієнту обмінюватися даними в реальному часі, підвищуючи інтерактивність додатка.

