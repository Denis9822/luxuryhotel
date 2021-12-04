
-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 04 2021 г., 05:11
-- Версия сервера: 10.5.12-MariaDB-102+deb11u1-log
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `denis9513`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blocks`
--

CREATE TABLE `blocks` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `blocks`
--

INSERT INTO `blocks` (`id`, `name`) VALUES
(1, 'HOTELS'),
(2, 'INSPIRATION'),
(3, 'The Best Luxury Hotels'),
(4, 'Hotel'),
(5, 'Check In - Out'),
(6, 'Search'),
(7, 'Top Inspirations'),
(8, 'Discover the Best Hotels with our Handpicked Hotel Guides.'),
(9, '5 Star Best Paris Luxury Hotels'),
(10, 'Load more'),
(11, 'The Top 5 Star Luxury Hotels Compared.'),
(12, 'We find you the best luxury hotels worldwide from high end unique accommodation to 5 star deluxe resort rooms. Whether you are booking a luxury hotel in Rome, New York, Milan, Paris, London or Venice, we compare thousands of luxe accommodation options. Simply enter your destination for the best rates. For the latest in cool boutique hotels to the very best trendy and funky design hotels, LuxuryHotelsGuides.com is your guide to top 5 star lux accommodation deals.'),
(13, 'Our site lists over 1,000,000 hotel and accommodation options - boutique, expensive and cool high end hotels worldwide with facilities such as swimming pool, restaurants, bars and much more.'),
(14, 'Copyright © 2021 by Luxury Hotels'),
(15, 'Privacy Policy'),
(16, 'About Us'),
(17, 'Luxury Hotels Inspirations'),
(18, 'Explore the place'),
(19, 'View More'),
(20, 'More Inspirations'),
(21, 'Search for'),
(22, 'More Accommodation'),
(23, 'Hotels, Holiday Rentals, Apartments'),
(24, 'Not scored'),
(25, 'FREE Cancellation.'),
(26, 'NO PREPAYMENT. Pay at property.'),
(27, 'Watch'),
(28, 'price per day:');

-- --------------------------------------------------------

--
-- Структура таблицы `currency`
--

CREATE TABLE `currency` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortcut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'AED,AFN,ALL,AMD,ANG,AOA,ARS,AUD,AWG,AZN,BAM,BBD,BDT,BGN,BHD,BIF,BMD,BND,BOB,BRL,BSD,BTN,BWP,BYN,BYR,BZD,CAD,CDF,CHF,CLP,CNY,COP,CRC,CUP,CVE,CYP,CZK,DJF,DKK,DOP,DZD,EEK,EUR,EGP,ETB,FJD,GBP,GEL,GHS,GMD,GNF,GRD,GTQ,GYD,HKD,HNL,HRK,HTG,HUF,IDR,ILS,INR,IQD,IRR,ISK,JMD,JOD,JPY,KES,KGS,KHR,KMF,KRW,KWD,KYD,KZT,LAK,LBP,LKR,LRD,LSL,LTL,LVL,LYD,MAD,MDL,MGA,MKD,MMK,MNT,MOP,MRO,MTL,MUR,MVR,MWK,MXN,MYR,MZN,NAD,NGN,NIO,NOK,NPR,NZD,OMR,PAB,PEN,PGK,PHP,PKR,PLN,PYG,QAR,ROL,RON,RSD,RUB,RWF,SAR,SBD,SCR,SDG,SEK,SGD,SIT,SKK,SLL,SOS,SRD,STD,SVC,SYP,SZL,THB,TJS,TMM,TND,TOP,TRY,TTD,TWD,TZS,UAH,UGX,USD,UYU,UZS,VEB,VEF,VES,VND,VUV,WST,XAF,XCD,XOF,XPF,YER,ZAR,ZMK,ZMW',
  `type` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `currency`
--

INSERT INTO `currency` (`id`, `name`, `shortcut`, `type`, `created_at`, `updated_at`) VALUES
(1, 'US Dollar', 'USD', 1, NULL, NULL),
(2, 'Russia Ruble', 'RUB', 2, NULL, NULL),
(3, 'Euro', 'EUR', 1, NULL, NULL),
(4, 'UK Pound', 'GBP', 1, NULL, NULL),
(5, 'Australian Dollar', 'AUD', 1, NULL, NULL),
(6, 'Canadian Dollar', 'CAD', 1, NULL, NULL),
(7, 'Brazilian Real', 'BRL', 1, NULL, NULL),
(8, 'Swiss Franc', 'CHF', 1, NULL, NULL),
(9, 'Japanese Yen', 'JPY', 1, NULL, NULL),
(10, 'Indian Rupee', 'INR', 2, NULL, NULL),
(11, 'NZ Dollar', 'NZD', 2, NULL, NULL),
(12, 'Singapore Dollar', 'SGD', 2, NULL, NULL),
(13, 'Philippine Peso', 'PHP', 2, NULL, NULL),
(14, 'UAE Dirham', 'AED', 2, NULL, NULL),
(15, 'Thai Bhat', 'THB', 2, NULL, NULL),
(16, 'S.A. Rand', 'ZAR', 2, NULL, NULL),
(17, 'Chinese Yuan', 'CNY', 2, NULL, NULL),
(18, 'H.K. Dollar', 'HKD', 2, NULL, NULL),
(19, 'Mexican Peso', 'MXN', 2, NULL, NULL),
(20, 'Malaysian Ringgit', 'MYR', 2, NULL, NULL),
(21, 'Argentine Peso', 'ARS', 2, NULL, NULL),
(22, 'Chilean Peso', 'CLP', 2, NULL, NULL),
(23, 'Israeli Shekel', 'ILS', 2, NULL, NULL),
(24, 'Norwegian Krone', 'NOK', 2, NULL, NULL),
(25, 'Danish Kroner', 'DKK', 2, NULL, NULL),
(26, 'Czech Krona', 'CZK', 2, NULL, NULL),
(27, 'Indonesian Rupiah', 'IDR', 2, NULL, NULL),
(28, 'Saudi Riyal', 'SAR', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `inspirations`
--

CREATE TABLE `inspirations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preview_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `inspirations`
--

INSERT INTO `inspirations` (`id`, `name`, `description`, `order`, `slug`, `preview_image`, `background_image`, `seo_title`, `seo_description`, `seo_img`, `created_at`, `updated_at`) VALUES
(1, 'Rome', 'Rome, the capital city of Italy, takes you on a perfect ride through history as every nook and cranny of the city breathes and resonates with over 3000 years of history. It is one of the most historically and culturally dense cities on Earth, mostly because of the great care that has been taken to persevere its heritage even against the prodding of the modern world. You can head on over to the Vatican City to behold the might of the Roman Catholic Church, or you can visit the ruins of the Colosseum where Gladiators used to fight for the entertainment of the Roman elite. In this article we’ve listed out the top 10 luxury five star hotels in Rome that will only enhance your experience of the city.', 1, 'rome', 'https://cf.bstatic.com/xdata/images/district/350x350/38000.jpg?k=809c6ce98ce99576b240c51a8c7d9c96f248ef8dba53a48b0a25992ef2631736&o=', NULL, '1', '1', 'img1.JPG', NULL, '2021-11-28 16:22:08'),
(2, 'New York', '\r\nNew York City, lovingly known as the Big Apple, is amongst the world’s most popular cultural destinations. At its heart lies Manhattan, which is the financial and commercial center of the city. Some of the most iconic and world famous tourist sites offered by the city are the Statue of Liberty in New York Harbour, the 103-storey tall Empire State Building, and the vast Central Park area. Tourists who go to New York also love to visit Times Square, and perhaps watch a play at Broadway Theatre, which is arguably the most famous theatre in the world. With all the variety that New York offers, you should find a luxury five star hotel that can help you take in the city with comfort. In this article we’ll describe the top 10 luxury hotels in New York.', 2, 'new-york', 'https://cf.bstatic.com/xdata/images/city/350x350/856674.jpg?k=70a9589c2f7d2fc175c3ac02c55702c2e433f588866756a394cddfe215170f38&o=', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Dubai', 'Dubai, the crown jewel of the United Arab Emirates, is known around the world as one of the most expensive, lavish, and fashionable cities known to man. People go to Dubai to embark upon shopping sprees, or to hit the city and party through the night, or to behold the wonders of some of the most astonishing works of modern architecture in the world. Dubai also features the world’s tallest skyscraper, the Burj Khalifa, rising high at 830m. If you go to Dubai, then it is an absolute must for you to stay at a luxury five star hotel, there’s really no other way to explore the city. Below we’ve listed out the top 10 luxury hotels in Dubai.\r\n\r\n', 3, 'dubai', 'https://cf.bstatic.com/xdata/images/city/350x350/619923.jpg?k=4fb13225390240a51ee5aa1d76318d03dc0de8a046ddc06e4598f17b287bdcc9&o=', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Las Vegas', 'Las Vegas, a city in Nevada, US, is known around the world as the foremost party and nightlife destination. This is the most popular destination for bachelor and bachelorette parties, for grad students to go backpacking through, and for people just looking for an extravagant escape from life. The city is home to several theme-based luxury hotels and casinos that stay open and buzzing throughout the day and night. When you’re in Las Vegas, you can’t possibly settle for anything less than sheer extravagance and opulence. Go through this list of the top 10 luxury hotels in Las Vegas and decide where you want to be!\r\n\r\n', 4, 'las-vegas', 'https://cf.bstatic.com/xdata/images/city/350x350/349717.jpg?k=15138e712e1083b40d0c1164fad96f5adce36dbe3707fe483f516a555765e561&o=', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Sydney', 'Sydney is undoubtedly the crown jewel of Australia, and its reputation as one of the hottest travel destinations in the world has been well earned. Sydney is one of the world’s leading metropolitan cities, and the fact that it has been built around a stunning harbour only adds to its majesty. A trip down to Sydney, whether long or short, offers a lot of splendor. You can enjoy a night of culture at Sydney Opera House, the world’s most renowned performing arts venue. You can take a solitary walk down the stunning Sydney Harbour Bridge, and simply appreciate the beauty of the city lights reflected off the clear blue waters. Or you can simply stroll over to Bondi Beach and soak up some much needed sun as the waves kiss your toes.\r\n\r\nWith so much wonder to take in, it is crucial that your stay in Sydney should appropriately reflect the majesty of the city itself. Which is why you should take some time to consider which luxury hotel you’d like to stay at. To that end, we’ve listed out 10 of the best luxury hotels in Sydney so that you can make a more informed decision about where you’d like to stay during your travels!', 5, 'sydney', 'https://cf.bstatic.com/xdata/images/city/350x350/682535.jpg?k=5a668b67965282725185c1ae8ba566c1a5edb7b72ae7d1e203b00a36d7eb6b96&o=', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'London', '\r\nLondon, the capital of England, is a really popular travel destination mostly because of the way it perfectly juxtaposes the old with the new, the way modern architectures stand alongside monuments that have been standing since the days of the Roman Empire. This gives one the delightful feeling of constantly walking with one foot in the present and the other in a romantic past. Some of the great wonders to behold, while in London, are the Big Ben Clock Tower, Westminster Abbey, the Thames River, and the London Eye Observatory Wheel. London is also quite a sprawling city, and as such it’s important that when you visit you should stay in a location that is equidistant from the various attractions of London. In addition to the location, which is crucial, it is also important that your stay itself should closely mirror the majesty and romantic classicism of the city itself. As such, we’ve compiled a list of the top 10 luxury hotels in London. You can go through this list and make a more informed decision about which hotel you’d like to stay at so as to really make your stay grand!', 6, 'london', 'https://cf.bstatic.com/xdata/images/city/350x350/613094.jpg?k=f751e035ae2c0ac97263ed7d150bae607ffa17a88c55e81cec907941d6bb078b&o=', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Paris', '\r\nParis, the city of Love, doesn\'t really need much of an introduction, does it? It’s universally acknowledged to be the most romantic place on Earth, and it’s the world’s cultural center, replete with brilliant roadside cafes, art shows, fashion shows, and other cultural activities that never cease. However, to really enjoy Paris in all its romantic splendor, you need to stay at a boutique five-star hotel. Below, we’ve compiled a list of some of the most expensive and luxurious Five star hotels from which you can truly enjoy the City of Light in all its glory.', 7, 'paris', 'https://cf.bstatic.com/xdata/images/city/350x350/613087.jpg?k=68ce65e52a527819c35c13c3d0e8a925263a71aab15a89577b4083c021855481&o=', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Milan', 'Milan is one of the world’s leading capitals in terms of fashion and design. It’s a sprawling metropolis in Italy’s northern Lombardy region. Besides art and fashion, it’s also known for its high end restaurant and boutique shopping outlets. Some of its prime monuments and attractions are the Milan Cathedral; Sforza Castle, which houses antique artworks; and Brera, which is the prime shopping center in the city. This is enough to establish the city’s long-standing dedication to art and culture. As such, visitors who come to Milan should ideally find luxury five star hotels that can match the charming intellect and culture of the city itself. Below we’ve listed out the top 10 luxury five star hotels in Milan.', 8, 'milan', 'https://cf.bstatic.com/xdata/images/city/350x350/619638.jpg?k=e980f7c3da0641771f66054169cf330522b10141a04e3c31916135e2ff3e3ceb&o=', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Barselona', '\r\nBarcelona, the capital of Spain’s Catalonia region, also happens to be the cosmopolitan, cultural, and architectural capital of Europe. This city generally consists of modern and contemporary expressions of art and architecture, such as the Sagrada Família church. However, it is also a city with some great archaeological sites wherein you can go back into the annals of time. Barcelona has a number of great boutique luxury hotels from which you can visit different sites in the city. Below we’ve described the top 10 luxury hotels in Barcelona so that you can plan your travel in an informed manner.', 9, 'barselona', 'https://cf.bstatic.com/xdata/images/hotel/350x350/264825687.jpg?k=e570125eebe93d896767f58803c3ce6aaae06da21c682fc5cea3548ab296da26&o=', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Amsterdam', '\r\nAmsterdam is a popular and thriving city known across the world for its heady excesses. It’s the capital city of the Netherlands, and is popular for its artistic and cultural heritage dating back to its “Golden Age” circa 17th century. Amsterdam attracts mostly two kinds of tourists — young backpackers looking for a lively and liberated city to party at, and Art and Culture enthusiasts drawn to the Museum District housing works by renowned artists like Van Gogh, Vermeer, Rembrandt, and other luminaries. If you’re traveling to Amsterdam, you should make sure that you’re staying in a luxury five star hotel that is well suited to cater to your particular needs. We’ve listed out and described the top 10 luxury hotels in Amsterdam so that you can make an intelligent decision.', 10, 'amsterdam', 'https://cf.bstatic.com/xdata/images/district/350x350/37911.jpg?k=af4a44aa99734d936cb6064a112d9c758ec8f3fbae90cf9edf79baf0513e6ec7&o=', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Venice', '\r\nWhen you think of Venice, you probably think of riding in romantic gondolas down the canals of the city. That is a fair impression, and it accounts for the primary reason why this capital city from Italy’s Veneto region draws tourists from across the globe. It is quite possibly one of the most romantic getaways in the world, with a culture and architectural aesthetic that seems untouched by the prodding fingers of modernity. Most of the city features Renaissance and Gothic architectural influences, which accounts for the rustic and otherworldly aura of the city. In this article we’ve listed out the top 10 luxury five star hotels that accurately represent and embody the essence of the city of Venice.', 11, 'venice', 'https://cf.bstatic.com/xdata/images/city/350x350/626990.jpg?k=a701afb0ab075c80dc01035d3069763d983493a4fea74ea8a07905962642c3c7&o=', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Dublin', '\r\nDublin is the capital of the Republic of Ireland, located on the mouth of the river Liffey, on the east coast of the country. Dublin is popular as the city brimming and breathing in history, as most of its structures and buildings are remnants from the 12th and 13th centuries. Some of the popular landmarks in Dublin are the Dublin Castle and the St Patrick’s Cathedral, the latter of which was made back in 1191. When staying in this historically lively city, you should go for a luxury five star hotel that is equidistant to all of the popular landmarks, while also embodying the spirit of the city it lives in.', 12, 'dublin', 'https://cf.bstatic.com/xdata/images/city/350x350/682069.jpg?k=14bfdddeba8202c2dfa95e7d5b2fd28b8a2051275c352529b51c76c4bead3c2c&o=', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Hong Kong', '\r\nHong Kong is an autonomous administrative region on the south of China. It used to be a British Colony, but ever since its independence it has grown into one of the world’s leading financial hubs with a thriving economy and a landscape that is resplendent with tall skyscrapers. Tourists usually visit Hong Kong to shop in one of its famous shopping centers, or to simply appreciate the sheer modernity of the city and its architectural marvels such as I.M. Pei’s Bank of China Tower. Families and kids can also enjoy the Ocean Park and Hong Kong Disneyland. When visiting China, it is essential that you stay in one of its many boutique luxury hotels. To that end, below we’ve listed out and described the top 10 luxury hotels in Hong Kong.', 13, 'hong-kong', 'https://cf.bstatic.com/xdata/images/city/350x350/674774.jpg?k=005b0a36640f9f14ad740e3e28e729230078d89418c95073396380243b060af7&o=', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Miami', '\r\nMiami is a lively and buzzing beach-side city in Florida, United States. The Miami beach is amongst the most famous in the world because of its clear seas, white soft sands, friendly neighborhoods, gorgeous buildings, and buzzing nightlife. Miami also has a very heavy Cuban immigrant population, and as such the Cuban cultural influence in Miami is palpable, with several boutique shopping centers and cigar shops available in localities like Little Havana. When visiting Miami, you have to stay in a luxury five star hotel that can help you immerse into the culture. In this article we’ve taken the liberty to describe the top 10 luxury hotels in Miami.', 14, 'miami', 'https://cf.bstatic.com/xdata/images/city/350x350/689601.jpg?k=31342f25f07377f6f303fde3f6cd84d8e4d68b7e77f88e547c52fab6d19fb452&o=', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Singapore', '\r\nSingapore is an independent island city-state on the south of Malaysia. It’s an incredibly modern and thriving city, one of the world’s foremost financial centers, and has a buzzing nightlife and a culture that is really a melting pot from around the world. In addition to the modern skyscrapers and nightlife, Singapore has also preserved some of its heritage in the form of monuments such as the Buddha Tooth Relic Temple, which is said to harbor one of the Buddha’s teeth. In this article, we’ve listed out the top 10 luxury hotels in Singapore so that you can stay in a location and hotel that can supplement and enhance your experience of Singapore.', 15, 'singapore', 'https://cf.bstatic.com/xdata/images/city/350x350/619666.jpg?k=504b97635641d489438feb63780d4ae80ce8a2fd08a1fcb6183485738a87e6ad&o=', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `localization`
--

CREATE TABLE `localization` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortcut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `flag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `localization`
--

INSERT INTO `localization` (`id`, `name`, `shortcut`, `created_at`, `updated_at`, `flag`, `active`) VALUES
(1, 'English (UK)', 'en-gb', NULL, NULL, 'gb', 1),
(2, 'English (US)', 'en-us', NULL, '2021-12-02 01:13:26', 'gb', 1),
(3, 'Francais', 'fr', NULL, '2021-12-02 01:14:58', 'fr', 1),
(4, 'Deutsch', 'de', NULL, '2021-12-01 21:19:22', 'de', 1),
(5, 'Espanol', 'es', NULL, NULL, 'es', 1),
(6, 'Portugues', 'pt-pt', NULL, NULL, 'pt', 1),
(7, 'Italiano', 'it', NULL, NULL, 'it', 1),
(8, 'Türk', 'tr', NULL, NULL, 'tr', 1),
(9, 'Русский', 'ru', NULL, NULL, 'ru', 1),
(10, 'العربية', 'ar', NULL, NULL, 'ar', 1),
(13, '简体中文', 'zh-cn', NULL, NULL, 'cn', 1),
(16, 'Bahasa', 'id', NULL, NULL, 'id', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_26_191338_create_currency_table', 1),
(6, '2021_11_26_220739_create_localization_table', 2),
(7, '2021_11_26_221312_add_column_to_localization_table', 3),
(8, '2021_11_26_234423_create_inspirations_table', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_description` varchar(255) DEFAULT NULL,
  `seo_img` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `name`, `slug`, `seo_title`, `seo_description`, `seo_img`) VALUES
(1, 'Отели', 'hotel.show', 'Luxury hotels for $name', 'Luxury hotels for $name', NULL),
(2, 'Статическая Главная', 'main.index', '1', '1', NULL),
(3, 'Статическая Города', 'inspirations.index', NULL, NULL, NULL),
(4, 'Статическая О нас', 'page.about_us', NULL, NULL, NULL),
(5, 'Статическая Контакты', 'page.contacts', NULL, NULL, NULL),
(6, 'Статическая Политика Конфиденциальности', 'page.policy', 'teste', 'test', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `preview_title` varchar(255) DEFAULT NULL,
  `value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `name`, `preview_title`, `value`) VALUES
(6, 'order', 'Сортировка отелей по умолчанию', 'class_descending'),
(7, 'referral', 'Реферальный код', '1250365'),
(8, 'logo', 'Логотип', 'logo.svg');

-- --------------------------------------------------------

--
-- Структура таблицы `texts`
--

CREATE TABLE `texts` (
  `id` int(11) NOT NULL,
  `lang` varchar(255) NOT NULL,
  `text` text DEFAULT NULL,
  `block_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `texts`
--

INSERT INTO `texts` (`id`, `lang`, `text`, `block_id`) VALUES
(1, 'en-gb', 'HOTELS', 1),
(2, 'id', '123', 1),
(3, 'en-us', 'adsdas', 1),
(4, 'ru', 'ОТЕЛИ', 1),
(5, 'en-gb', 'INSPIRATIONS', 2),
(6, 'en-us', 'INSPIRATIONS', 2),
(7, 'ru', 'ГОРОДА', 2),
(8, 'en-gb', 'The Best Luxury Hotels', 3),
(9, 'en-us', 'The Best Luxury Hotels', 3),
(10, 'ru', 'Лучшие отели', 3),
(11, 'en-gb', 'Hotel', 4),
(12, 'en-us', 'Hotel', 4),
(13, 'ru', 'Отель', 4),
(14, 'en-gb', 'Check In - Out', 5),
(15, 'en-us', 'Check In - Out', 5),
(16, 'en-gb', 'Search', 6),
(17, 'en-us', 'Search', 6),
(18, 'en-gb', 'Top Inspirations', 7),
(19, 'en-us', 'Top Inspirations', 7),
(20, 'en-gb', 'Discover the Best Hotels with our Handpicked Hotel Guides.', 8),
(21, 'en-us', 'Discover the Best Hotels with our Handpicked Hotel Guides.', 8),
(22, 'en-gb', '5 Star Best Paris Luxury Hotels', 9),
(23, 'en-us', '5 Star Best Paris Luxury Hotels', 9),
(24, 'en-gb', 'Load more', 10),
(25, 'en-us', 'Load more', 10),
(26, 'en-gb', 'The Top 5 Star Luxury Hotels Compared.', 11),
(27, 'en-us', 'The Top 5 Star Luxury Hotels Compared.', 11),
(28, 'en-gb', 'We find you the best luxury hotels worldwide from high end unique accommodation to 5 star deluxe resort rooms. Whether you are booking a luxury hotel in Rome, New York, Milan, Paris, London or Venice, we compare thousands of luxe accommodation options. Simply enter your destination for the best rates. For the latest in cool boutique hotels to the very best trendy and funky design hotels, LuxuryHotelsGuides.com is your guide to top 5 star lux accommodation deals.', 12),
(29, 'en-us', 'We find you the best luxury hotels worldwide from high end unique accommodation to 5 star deluxe resort rooms. Whether you are booking a luxury hotel in Rome, New York, Milan, Paris, London or Venice, we compare thousands of luxe accommodation options. Simply enter your destination for the best rates. For the latest in cool boutique hotels to the very best trendy and funky design hotels, LuxuryHotelsGuides.com is your guide to top 5 star lux accommodation deals.', 12),
(30, 'en-gb', 'Our site lists over 1,000,000 hotel and accommodation options - boutique, expensive and cool high end hotels worldwide with facilities such as swimming pool, restaurants, bars and much more.', 13),
(31, 'en-us', 'Our site lists over 1,000,000 hotel and accommodation options - boutique, expensive and cool high end hotels worldwide with facilities such as swimming pool, restaurants, bars and much more.', 13),
(32, 'en-gb', 'Copyright © 2021 by Luxury Hotels', 14),
(33, 'en-us', 'Copyright © 2021 by Luxury Hotels', 14),
(34, 'en-gb', 'Privacy Policy', 15),
(35, 'en-us', 'Privacy Policy', 15),
(36, 'en-gb', 'About Us', 16),
(37, 'en-us', 'About Us', 16),
(38, 'en-gb', 'Luxury Hotels Inspirations', 17),
(39, 'en-us', 'Luxury Hotels Inspirations', 17),
(40, 'en-gb', 'Explore the place', 18),
(41, 'en-us', 'Explore the place', 18),
(42, 'en-gb', 'View More', 19),
(43, 'en-us', 'View More', 19),
(44, 'en-gb', 'More Inspirations', 20),
(45, 'en-us', 'More Inspirations', 20),
(46, 'en-gb', 'Search for', 21),
(47, 'en-us', 'Search for', 21),
(48, 'en-gb', 'More Accommodation', 22),
(49, 'en-us', 'More Accommodation', 22),
(50, 'en-gb', 'Hotels, Holiday Rentals, Apartments', 23),
(51, 'en-us', 'Hotels, Holiday Rentals, Apartments', 23),
(52, 'en-gb', 'Not scored', 24),
(53, 'en-us', 'Not scored', 24),
(54, 'en-gb', 'FREE Cancellation.', 25),
(55, 'en-us', 'FREE Cancellation.', 25),
(56, 'en-gb', 'NO PREPAYMENT. Pay at property.', 26),
(57, 'en-us', 'NO PREPAYMENT. Pay at property.', 26),
(58, 'en-gb', 'Watch', 27),
(59, 'en-us', 'Watch', 27),
(60, 'en-gb', 'price per day:', 28),
(61, 'en-us', 'price per day:', 28);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$lacNSfKLkQzaInUA58x1veWun.p2zvceYxc2B4SDaOSlFfrb0FydG', NULL, '2021-11-28 14:19:16', '2021-11-28 14:19:16');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `inspirations`
--
ALTER TABLE `inspirations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `localization`
--
ALTER TABLE `localization`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `texts`
--
ALTER TABLE `texts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `currency`
--
ALTER TABLE `currency`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `inspirations`
--
ALTER TABLE `inspirations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `localization`
--
ALTER TABLE `localization`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `texts`
--
ALTER TABLE `texts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
