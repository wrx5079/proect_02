-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 16 2020 г., 16:47
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `magazin_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `under_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brand`
--

INSERT INTO `brand` (`id`, `title`, `under_category_id`) VALUES
(1, 'Samsung', 1),
(2, 'Lg', 1),
(3, 'Philips', 1),
(4, 'Toshiba', 1),
(5, 'Sony', 1),
(6, 'Acer', 2),
(7, 'Lenovo', 2),
(8, 'Apple', 2),
(9, 'Xiaomi', 2),
(10, 'Asus', 2),
(11, 'Apple', 3),
(12, 'Lenovo', 3),
(13, 'Acer', 3),
(14, 'Huawei', 3),
(15, 'Samsung', 3),
(16, 'Yokohama', 4),
(17, 'Brigestone', 4),
(18, 'Agate', 4),
(19, 'Centara', 4),
(20, 'Firemax', 4),
(21, 'AEZ', 5),
(22, 'BBC', 5),
(23, 'Enkei', 5),
(24, 'Konig', 5),
(25, 'Rays', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `parent_category`
--

CREATE TABLE `parent_category` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `parent_category`
--

INSERT INTO `parent_category` (`id`, `title`) VALUES
(1, 'Электроника'),
(2, 'Автотовары');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `under_category_id` int(11) NOT NULL,
  `parent_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `price`, `brand_id`, `under_category_id`, `parent_category_id`) VALUES
(1, 'QLED ТЕЛЕВИЗОР SAMSUNG QE55Q67RAUXCE', 'Больше экран - больше впечатлений Испытайте уникальный игровой опыт, прочувствуйте каждую секунду любимой игры, ощутите каждый взрыв, каждое движение - будьте в эпицентре игровых событий. На большом экране игра становится более реальной.Процессор Quantum 4KОбновленный процессор Quantum 4K создаст невероятные ощущения от просмотра ТВ в совершенно новом формате. Наслаждайтесь изображением с удивительной четкостью деталей даже при ярком дневном свете и звуком, оптимизированным для каждой сцены.', 'img2.png', 89000, 1, 1, 1),
(2, 'НОУТБУК ACER E5-576G-343A', 'Превосходная функциональностьБыстро и безопасно открывайте веб-страницы, общайтесь и смотрите видео онлайн на ноутбуке Aspire с процессором Intel Core. Наслаждайтесь комфортной работой на экране 15.6', 'img_0_62_1274_1.png', 29000, 6, 2, 1),
(3, 'ПЛАНШЕТ APPLE IPAD 10.2″ 32GB WI-FI', 'С iPad все рабочие задачи решаются элементарно. Вы можете редактиро­вать текст, сидеть в интернете и одновременно звонить коллегам по FaceTime. Все ваши документы собраны в приложении «Файлы». А чтобы начать печатать текст курсовой работы или презентации, достаточно открыть экранную клавиатуру или подключить полноразмерную клавиатуру Smart Keyboard.Ведёте вы конспект лекции или составляете список дел — с Apple Pencil всё получается легко и естественно.1 Подпишите договор, сделайте пометки в документе и запишите идею, которая пришла в голову минуту назад. Пользоваться Apple Pencil так же удобно, как и обычным карандашом, только умеет он намного больше.С iPad ваше любопытство не ограничено ничем. В App Store вы обнаружите множество приложений, которые помогут подтянуть оценки по геометрии, выучить новый язык и сочинить собственную симфонию. А с дополненной реальностью учёба превратится в увлекательное приключение. Смотрите, как прямо из вашей комнаты взлетает космический корабль, а герои книг буквально сходят со страниц.', 'img_0_64_531_3.png', 28700, 11, 3, 1),
(4, 'Yokohama Geolandar G057', 'Yokohama Geolandar X-CV G057 – асимметричные шины класса Highway Terrain для SUV-автомобилей, созданные для эксплуатации в летних погодных условиях. К их ключевым особенностям производитель относит надёжность сцепления на мокрой поверхности, ездовой комфорт, топливную экономичность и высокий эксплуатационный ресурс.', 'yokohama.png', 8700, 16, 4, 2),
(5, 'AEZ литый диск', 'AEZ делает ставку на высокое качество продукции. Все диски AEZ проходят многочисленные испытания и строго проверяются. Сертификация немецким независимым институтом тестов TUV является обязательным элементом перед отправкой колёс. Логистический центр AEZ в городе Siegburg, что недалеко от Кёльна, насчитывает около 300,000 дисков на складе. Этот запас обеспечивает доступность готовой продукции и быструю доставку в Россию. Высокое качество колёсных дисков AEZ и инновационные идеи, постоянно адаптирующиеся к текущим тенденциям, также дают положительную динамику для устойчивого и успешного роста.', 'aez.png', 22000, 21, 5, 2),
(10, 'LED ТЕЛЕВИЗОР LG 49SM8200PLA', 'NanoCell TV — это самый совершенный LED-телевизор LG с превосходным качеством изображения, достигаемым благодаря фирменной технологии NanoCell™, улучшающей чистоту цветопередачи в диапазоне RGB.', 'img3.png', 20000, 2, 1, 1),
(11, 'LED ТЕЛЕВИЗОР PHILIPS 43PFS5813', 'USB для воспроизведения мультимедийного контента\r\nДелитесь впечатлениями. Подключите USB-накопитель, цифровую камеру, MP3-плеер или другое мультимедийное устройство через USB-вход телевизора и смотрите фотографии, видео или слушайте музыку, используя удобный экранный обозреватель.\r\n\r\nТонкая, изящная подставка рождает ощущение невесомости\r\nПриступая к разработке новой модели телевизора, наша команда тщательно продумывает каждую деталь: от технологии до дизайна. Новая подставка с угловыми ножками, в отличие от традиционных, позволяет усилить впечатления от просмотра благодаря свободному пространству под телевизором. Смелое и надежное решение!\r\n\r\nPixel Plus HD для превосходного изображения, которое не оставит вас равнодушными\r\nПроцессор Philips Pixel Plus HD оптимизирует качество изображения и обеспечивает кристальную четкость и великолепную контрастность. При потоковой передаче или просмотре дисков вы всегда будете наслаждаться четким изображением с яркими оттенками белого и глубокими оттенками черного.', 'img_0_95_1465_2.png', 27290, 3, 1, 1),
(12, 'LED ТЕЛЕВИЗОР TOSHIBA 43U7752EV', '43U7752EV имеет встроенное Программное Обеспечение SMART и предустановленную Операционную Систему Android. Подключение к сети Интернет может быть осуществлено посредством беспроводной связи Wi-Fi. Поддерживаемые форматы файлов мультимедиа: MP3, WMA, MPEG4, MKV, JPEG.\r\n\r\nМощность акустической системы звука 16 Вт (2х8 Вт) обеспечивают два динамика. Используется система обработки стереосигнала NICAM и функция объёмного звучания Sound Surround.\r\n\r\nВнешний интерфейс (связь с другими устройствами) поддерживается стандартными входными и выходными разъёмами: антенный вход (RF), AV, компонентный, HDMI x3, MHL, USB x2, Ethernet (RJ-45), Wi-Fi 802.11n. Предусмотрен выход для подключения наушников.\r\n\r\nЦифровой тюнер способен принимать телевизионные каналы в стандартах DVB-T MPEG4 , DVB-C , DVB-T2 \r\n\r\n', 'img_0_95_1475_0.png', 18990, 4, 1, 1),
(13, 'LED ТЕЛЕВИЗОР SONY KD55XG8096BR', 'С 4K X-Reality™ PRO разрешение каждого изображения повышается, чтобы максимально приблизить его к качеству 4K и добиться невероятной четкости. Всё происходит в режиме реального времени, обеспечивая тонкую проработку деталей.\r\n\r\nКрасочное изображение, которое оживает на экране\r\nТехнология Triluminos™ Display способна воспроизводить широкую гамму живых цветов, и изображение на экране приобретает более реалистичные тона и оттенки.\r\n\r\n', 'img_0_95_1460_3.png', 74990, 5, 1, 1),
(14, 'НОУТБУК LENOVO IDEAPAD S145-15AST', 'Модель IdeaPad S145 весит всего 1,85 и поэтому идеально подходит для путешествий. Узкая рамка делает дизайн более лаконичным и увеличивает видимую область экрана. Ноутбук представлен в разных цветах с фактурной или глянцевой отделкой и при этом продается по привлекательной цене.\r\n\r\nНезависимо от того, смотрите ли вы видео, слушаете потоковую музыку или общаетесь в видеочате, вам непременно понравится звучание, которое обеспечивают динамики IdeaPad S145 с поддержкой технологии Dolby Audio™. Кроме того, вас также приятно удивит изображение на 15,6-дюймовом дисплее стандарта HD или FHD с антибликовым покрытием.\r\n\r\n\r\n', 'img_0_62_867_0.png', 19890, 7, 2, 1),
(15, 'НОУТБУК APPLE MACBOOK AIR 13″ I5 1.8/8GB/128SSD SILVER (MQD32)', 'Тонкий, легкий, надежный\r\n\r\nФлэш-накопители позволяют сделать MacBook Air невероятно тонким и легким — его толщина всего 1,7 см, а вес 1,35 кг. Кроме того, в них используются полупроводниковые технологии без подвижных частей. А значит, они надежны, прочны и бесшумны. И занимают намного меньше места, чем традиционный жесткий диск — примерно на 90% меньше. Это освобождает пространство для других важных компонентов, например, для аккумулятора большей емкости. Поэтому вы получаете ноутбук, который почти ничего не весит и работает целый день. Настоящее воплощение мобильности.\r\n\r\nКлавиатура в наилучшем свете\r\n\r\nУ MacBook Air полноразмерная клавиатура — такая же удобная, как клавиатура настольного компьютера. А благодаря подсветке вы можете набирать текст даже при тусклом освещении. Встроенный датчик реагирует на изменения в освещении и автоматически настраивает яркость клавиатуры и экрана, обеспечивая оптимальный уровень подсветки в любых условиях.', 'img_0_62_1075_0.png', 79000, 8, 2, 1),
(16, 'НОУТБУК XIAOMI MI NOTEBOOK AIR 12,5\"', 'Ультратонкий цельнометаллический корпус\r\nВысококачественные детали материнской платы обеспечивают более точную работу устройства. А сочетание различных технологий сделали дисплей более тонким, при этом количество заряда батареи высокой плотности не снизилось, хотя ее объём сравнительно уменьшился. Целый ряд применения инновационных технологий позволили создать красивый ультратонкий цельнометаллический ноутбук высокой производительности.\r\n\r\n\r\nУлучшенные характеристики\r\nДанное устройсво с высокой производительностью внешне обладает красотой и изяществом. Mi Book Air годен не только для работы в интернете и офисной работы, но также может использоваться для создания, редактирования видео или для различных игр. Более быстрый процессор Intel 6-го поколения, ускоренная работа DDR4 RAM, PCIe SSD, дискретной видеокарты и GDDR5 видеопамяти. Теперь вы больше не будете выбирать между тонким дизайном и высокой производительностью.\r\n\r\n\r\nыстрая зарядка\r\nMi Вook Air не только отличается более длительной продолжительностью непрерывного использования, но также поддерживает технологию быстрой зарядки. Эффективность использования технологии быстрой зарядки 1С на 30% выше от ноутбуков, которые не оснащены данной функцией. На 30% более быстрее, чем зарядка от технологии 0.7С.', 'img_0_62_1285_1.png', 57990, 9, 2, 1),
(17, 'НОУТБУК ASUS VIVOBOOK X403FA-EB021T', 'Аккумулятор\r\nРаботает круглые сутки\r\nВам вряд ли захочется проводить за рабочим столом целый день, и ноутбук VivoBook 14 не будет вас к нему привязывать. Его аккумулятор способен продержаться до 24 часов без подзарядки, поэтому постоянно носить с собой блок питания вовсе не обязательно.\r\nДисплей NanoEdge\r\nЗавораживающее изображение\r\n\r\nПора избавляться от рамок – вместе с VivoBook 14! В этом ноутбуке используется дисплей NanoEdge, который занимает практически всю доступную площадь крышки. Теперь ничто не будет отвлекать ваш взгляд от работы или игры, ведь изображение на таком безрамочном экране выглядит невероятно завораживающим.\r\n\r\nКомпактный размер\r\nМеньше размер, больше удобства\r\nНоутбук VivoBook 14 наделен дисплеем NanoEdge с невероятно узкой рамкой, поэтому его корпус существенно уменьшился по сравнению с предыдущей моделью. Он не займет много места на вашем рабочем столе.', 'img_0_62_1621_1.jpg', 59990, 10, 2, 1),
(18, 'ПЛАНШЕТ LENOVO (TB-7305X) ', 'Тонкий и легкий планшет Lenovo Tab 7 Essential весит 254 грамма и имеет толщину около 8,8 мм — едва ли вы почувствуете, что держите его в руке.\r\n\r\nПланшет Lenovo Tab 7 Essential работает на ОС Android™ 7.0 Nougat. Эта «чистая» версия Android обеспечивает порядок в приложениях и высокую производительность.\r\n\r\nКаждый пользователь может создать собственную учетную запись с индивидуальным паролем, настройками, обоями и аккаунтами в социальных сетях. На планшете могут работать несколько человек, не беспокоясь о конфиденциальности: благодаря вводу пароля для входа в учетную запись личные данные надежно защищены.\r\n\r\nОснащенный модулем Wi-Fi или LTE, планшет Lenovo Tab 7 Essential позволит вам оставаться на связи в любом месте.', 'img_0_64_573_0.png', 8590, 12, 3, 1),
(19, 'ПЛАНШЕТ ACER ICONIA ONE 10″ 16GB WI-FI', 'ЧЁТКОЕ ИЗОБРАЖЕНИЕ\r\n7-дюймовый экран с разрешением 1024х600 пикселей воспроизводит яркую, детализированную картинку. Он изготовлен по технологии UPS. Что обеспечивает реалистичную цветопередачу и широкий угол обзора: можно позвать родственников и друзей посмотреть вместе фотографии, кино или сериал.\r\n\r\nХОРОШАЯ АВТОНОМНОСТЬ\r\nВам не придётся часто подзаряжать аккумулятор, ведь запаса энергии в нём хватит примерно на 8 часов непрерывной работы.\r\n\r\nВСЁ ДЛЯ ВИДЕОСВЯЗИ\r\nФронтальная камера, динамик и микрофон дают возможность общаться по «Скайпу» и принимать участие в веб-конференциях.\r\n\r\nРАСШИРЕНИЕ ПАМЯТИ\r\nВнутреннее хранилище для файлов можно увеличить с помощью карты формата microSD: к имеющимся 8 Гб вы можете добавить ещё до 128 Гб.\r\n\r\n', 'img_0_64_476_1.png', 11990, 13, 3, 1),
(20, 'ПЛАНШЕТ HUAWEI MEDIAPAD T3 7″ ', 'ЧЁТКОЕ ИЗОБРАЖЕНИЕ\r\n7-дюймовый экран с разрешением 1024х600 пикселей воспроизводит яркую, детализированную картинку. Он изготовлен по технологии UPS. Что обеспечивает реалистичную цветопередачу и широкий угол обзора: можно позвать родственников и друзей посмотреть вместе фотографии, кино или сериал.\r\n\r\nХОРОШАЯ АВТОНОМНОСТЬ\r\nВам не придётся часто подзаряжать аккумулятор, ведь запаса энергии в нём хватит примерно на 8 часов непрерывной работы.\r\n\r\nВСЁ ДЛЯ ВИДЕОСВЯЗИ\r\nФронтальная камера, динамик и микрофон дают возможность общаться по «Скайпу» и принимать участие в веб-конференциях.\r\n\r\nРАСШИРЕНИЕ ПАМЯТИ\r\nВнутреннее хранилище для файлов можно увеличить с помощью карты формата microSD: к имеющимся 8 Гб вы можете добавить ещё до 128 Гб.\r\n\r\n', 'img_0_64_375_0.png\r\n', 7790, 14, 3, 1),
(21, 'ПЛАНШЕТ SAMSUNG GALAXY TAB S3 9.7', 'Захватывающий опыт развлечений\r\nПросматривайте видео в режиме HDR на высококонтрастном и ярком superAMOLED дисплее Galaxy Tab S3, а четыре динамика, настроенные AKG, подарят объемный звук, создав атмосферу полного погружения.\r\n\r\n\r\nГотов к любому контенту\r\nМощный процессор Snapdragon 820 и 4 ГБ оперативной памяти позволят Вам с легкостью выполнять сложные задачи, обеспечивают работу с несколькими приложениями одновременно, возможность играть в самые современные игры. Высококонтрастный экран Super AMOLED обеспечивает точную передачу всего цветового диапазона.\r\n\r\nУлучшенная система динамиков\r\nот AKG\r\nКуда бы вы ни пошли, Galaxy Tab S3 заполнит ваше пространство высококачественным звуком. Это первый планшет Samsung с четырьмя адаптивными динамиками, благодаря чему вам будет доступен многоканальный звук, даже на ходу. ', 'img_0_64_347_0.png', 42990, 15, 3, 1),
(22, 'BRIDGESTONE Alenza 001', 'Bridgestone Alenza 001 – летние шины для премиальных городских внедорожников, сочетающие в себе образцовые дорожные манеры и спортивную направленность. Модель 2017 года, которая стала «первой ласточкой» нового глобального суб-бренда японского производителя. Она характеризуется отменной динамикой на сухой дорожной поверхности, надёжной управляемостью на мокрой дороге, лёгкостью качения, а также длительностью срока эксплуатации.\r\n\r\nАвтошины Bridgestone Alenza 001 (Бриджстоун Аленза 001)ориентированы на автомобили класса SUV, которые в последние годы набирают всё большую популярность. К их ключевым особенностям стоит отнести усиленную конструкцию каркаса с модифицированной структурой борта, которая поддерживает необходимую для обеспечения высокой «сухой» производительности жёсткость, и асимметричный ненаправленный дизайн протектора с увеличенным количеством блоков, обеспечивающими уверенное сцепление как на сухом асфальте, так и на мокром, вне зависимости от направления передвижения.\r\n\r\nВ данной модели была использована запатентованная технология NanoPro–Tech. Обеспечивая контроль над совместимостью полимеров, наполнителей и прочих составляющих резинового компаунда на молекулярном уровне, она позволяет создавать соединения для производства покрышек.', '50.jpg', 11500, 17, 4, 2),
(23, 'AGATE HF313', 'Летняя шина Agate HF313 используется на ведущих осях грузовых автомобилей. Данная модель пользуется большой популярностью у потребителей, так как отличается прекрасным качеством и доступной стоимостью. Этого удалось достичь в результате применения современных материалов и технологического оборудования. При ее разработке особое внимание уделялось протектору и каркасу.\r\n\r\nКаркас повышенной прочности\r\nВсе грузовые шины постоянно подвергаются повышенным нагрузкам, что приводит к различным повреждениям. Чтобы это предотвратить в данной модели использовался каркас повышенной прочности. При его разработке применялся специальный корд и стальные кольца, обеспечивающие надежную защиту от возможных разрывов и повреждений. Теперь шина прекрасно справляется с повышенными нагрузками и отличается минимальным процентом повреждений. ', '13.jpg', 14600, 18, 4, 2),
(24, 'CENTARA Grand Tourer H/T', 'Современный рисунок протектора модели Centara Grand Tourer H/T отличается от своих конкурентов прежде всего своей надежностью. Усиленный внутренний корд обеспечивает отличную износостойкость шины на любых видах поверхности. Модель обладает хорошими характеристиками на асфальтированных дорогах.', '48.jpg', 5200, 19, 4, 2),
(25, 'FIREMAX FM501', 'Шины производятся по современным технологиям из качественного каучука. Электронный контроль гарантирует стабильность качества готовой продукции. Разработанный рисунок протектора обеспечивает надежный контакт шины с дорожным покрытием и оптимальное поведение автомобиля на дороге.', '12.jpg', 6100, 20, 4, 2),
(26, 'BBS CH-R 9x20/5x112 D66.5 ET25 MB', 'Диски BBS RM являются составными и имеют две части.Губа или обод ,который прикручивается 30 болтами к самому диску.Также сверловка закрывается пластиковым колпачком с логотипом BBS.\r\n\r\nЭти колеса ставились на машины в комплектации GTI 16v в 91-92 годах. Достаточно мягкие и дорогие колеса и при замене у дилера люди отдавали за них немалые деньги.', '18.png', 44300, 22, 5, 2),
(27, 'Enkei Kojin', 'Япония – родина многих производителей колесных дисков, но до наших дней добрались лишь немногие из них. Enkei существует с 1950 года и зарекомендовала себя как лучший производитель с Востока. Они делают любые колеса: для тюнинга, для внедорожников, для грузовиков и для автомобилей старой школы 1970-х и 80-х.', '4.png', 14800, 23, 5, 2),
(28, 'Konig Hotswap', 'Konig — один из лидеров рынка США по производству литых дисков для автомобилей всех классов. Компания работает с 1983 года, и с тех пор неустанно совершенствует не только технологию производства, но и повышает квалификацию своих сотрудников. Благодаря ответственному подходу, продукция компании стала популярна во всём мире, и о её высочайшем качестве знает каждый автолюбитель.', '40.png', 24700, 24, 5, 2),
(29, 'Yokatta Rays YA 1733', 'Японская компания Rays производит диски сразу под несколькими брендами: Volk Racing (крутые кованые диски), Gram Lights (стильные и легкие литые диски), Black Fleet (классика и эксклюзивные кованые диски). На самом деле у них вы найдете диск абсолютно для любого автомобиля. И это будут крутые колеса.', '42.png', 18000, 25, 5, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `under_category`
--

CREATE TABLE `under_category` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `under_category`
--

INSERT INTO `under_category` (`id`, `title`) VALUES
(1, 'Телевизоры'),
(2, 'Ноутбуки'),
(3, 'Планшеты'),
(4, 'Шины'),
(5, 'Диски');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `parent_category`
--
ALTER TABLE `parent_category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `under_category`
--
ALTER TABLE `under_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблицы `parent_category`
--
ALTER TABLE `parent_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `under_category`
--
ALTER TABLE `under_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
