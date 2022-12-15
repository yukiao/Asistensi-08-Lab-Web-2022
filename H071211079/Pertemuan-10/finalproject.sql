-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 04:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Web Programming', 'web-programming', '2022-12-14 08:35:31', '2022-12-14 08:35:31'),
(2, 'Web Personal', 'personal', '2022-12-14 08:35:31', '2022-12-14 08:35:31'),
(3, 'Web Design', 'web-design', '2022-12-14 08:35:31', '2022-12-14 08:35:31');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_04_071214_category', 1),
(6, '2022_12_04_072739_post', 1),
(7, '2022_12_15_154427_add_is_admin_to_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `image`, `excerpt`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 'Alias ea rerum rerum et consequuntur similique eligendi.', 'omnis-voluptatem-tempora-voluptatem-amet-nihil-tempora-accusamus-nulla', NULL, 'Beatae sunt deserunt illum vel dolorem similique voluptatem debitis. Dolore occaecati voluptatum neque facilis. Qui laudantium et voluptatum dolorem deleniti dolor id.', '<p>Dolore sit nam maxime vero fugiat ea. Voluptates exercitationem hic iste amet deleniti omnis. Quis non saepe nesciunt numquam quaerat quia. Natus nulla iure earum iure aut eligendi omnis.</p><p>Beatae nihil tempore unde. Et laboriosam aperiam perferendis et unde.</p><p>Molestias reprehenderit perferendis porro accusamus tenetur incidunt sint. Temporibus nesciunt quia qui porro expedita at. Unde ipsum ducimus et voluptatem.</p><p>Quis dolore quia aut et autem amet. Ratione sed aut velit sapiente. Ab nisi illum suscipit omnis corrupti temporibus ad. Aspernatur distinctio earum debitis voluptas dolorem quia consectetur.</p><p>Velit dolorem dolores debitis assumenda. Eveniet eaque debitis ut porro. Odio eaque in ipsum praesentium ea autem. Expedita pariatur perferendis facilis est iure veritatis voluptatibus.</p>', NULL, '2022-12-14 08:35:31', '2022-12-14 08:35:31'),
(2, 2, 3, 'Voluptate cupiditate quasi maxime.', 'odit-quisquam-quo-nesciunt-nobis-dolores-earum', NULL, 'Eos ipsam vel adipisci porro nesciunt itaque iste. Nihil asperiores dolores in placeat. Totam iure et qui aperiam veritatis similique atque. Consequatur placeat nostrum omnis unde molestias excepturi totam. Reprehenderit nulla magnam omnis fuga et voluptatem.', '<p>Deserunt et delectus quos est. Asperiores et hic deserunt odit modi qui officiis. Totam sed laborum est totam earum culpa aperiam. Enim et qui minima earum ex.</p><p>Voluptatibus dolores facilis vitae temporibus aut deserunt aut. Odit aspernatur recusandae quia aspernatur voluptatem nemo doloribus voluptatibus. Consequatur odit et perspiciatis reprehenderit in sed sint qui. Sunt harum nisi rerum corporis.</p><p>Quia reprehenderit et optio sunt. Rem minima aut voluptatibus sed quod dolores. A velit nesciunt et enim quo. Occaecati et optio consequatur adipisci. Soluta tenetur eum iste ratione voluptates qui deleniti.</p><p>Autem soluta non optio et eos sunt tempore. Voluptatem rerum facilis voluptate ea quasi corporis nobis. Ratione velit nemo molestias sit qui accusamus. Consequuntur tempore qui quis nemo nam.</p><p>Repudiandae voluptate rerum itaque cupiditate nulla praesentium atque. Labore ut sit magnam inventore accusantium. At ut natus repudiandae harum molestias. Voluptatibus optio a voluptas vitae et dolor enim.</p><p>Repudiandae quo culpa aut nesciunt tempora velit blanditiis similique. Aut reprehenderit ut itaque perferendis. Laborum dolorem qui possimus voluptates deserunt possimus dolor eum. Maxime nostrum earum non nostrum.</p><p>Exercitationem officia est sit ea a eum. Temporibus mollitia quasi voluptatem rerum rerum. Quod occaecati consequatur voluptas aut.</p><p>In laudantium molestias quas id similique. Similique voluptas quam ut dolorem libero. Praesentium exercitationem tempore illum odit voluptas explicabo. Veritatis illum suscipit corporis id. Soluta iusto doloremque minima eos veniam quaerat accusamus dolorem.</p><p>Ipsa exercitationem et eos consequuntur. Eos ut et ut quis sapiente laboriosam. Eligendi molestiae perspiciatis porro officia facere. Non magni doloremque explicabo. Necessitatibus qui maxime suscipit repudiandae quam.</p><p>Inventore impedit in quos quia non qui et. Distinctio minus unde accusamus eum. Quaerat vel molestias id non eos tempora consequatur nihil.</p>', NULL, '2022-12-14 08:35:31', '2022-12-14 08:35:31'),
(3, 2, 3, 'Itaque maxime.', 'possimus-vel-iste-vel-quis-quidem', NULL, 'Commodi impedit nisi ad perferendis. Porro eos totam sint voluptates nam. Fuga reprehenderit maxime et quis veritatis voluptatem. Laboriosam ea sit architecto provident quibusdam nemo.', '<p>Minima eius suscipit molestiae doloribus ullam id. Non consectetur aut tempora ullam. Aliquam eum accusantium illum vel laudantium et non. Corporis quis perferendis asperiores non.</p><p>Ad consequuntur molestiae et nam dolorem ipsa. In et dolorum dolorum qui tenetur. Aut cum et delectus ea est fugit in repellendus.</p><p>Eveniet aut soluta laudantium et quidem dicta aut. A qui consequatur doloremque odit officia natus voluptas. Adipisci fuga sint minima ea vel. Repellat sit omnis aut animi ex similique.</p><p>Deserunt id in illo saepe minima consequuntur culpa. Quasi exercitationem officia ut quos vero. Eos dolores dolore porro rerum sunt. Eveniet et et iure itaque alias non.</p><p>Et consequatur alias esse atque. Sunt porro commodi ea amet est illo officia. Nemo corporis deleniti pariatur voluptates. Quas tempore ipsam doloribus doloremque.</p><p>Et omnis voluptatem amet doloribus excepturi. Et asperiores rerum sed in quisquam porro. Quia blanditiis libero soluta aut velit quis sed.</p><p>Asperiores sit recusandae placeat ut. Illum dolorem voluptas soluta. Voluptas quisquam maxime quia qui nihil ratione fuga. Ipsa deleniti quam porro aut sapiente est laborum laboriosam.</p><p>Omnis quo tenetur porro commodi delectus voluptatem ut. Qui eveniet sed nobis est commodi. Iusto est possimus reprehenderit ea est omnis et rerum. Suscipit aut accusamus nihil dolorem et. Quia unde eos libero quo voluptas repudiandae expedita.</p>', NULL, '2022-12-14 08:35:31', '2022-12-14 08:35:31'),
(4, 1, 1, 'Veniam a vitae.', 'a-deleniti-ut-quos-dolores-velit-accusamus-dolorem', NULL, 'Est corporis et consequuntur reiciendis. Qui eligendi deserunt et dolorum ut ut occaecati. Temporibus architecto natus dignissimos quo et. Rerum dolorem voluptatem corrupti rerum.', '<p>Eos temporibus enim et dicta eum exercitationem qui. Sed numquam doloremque et voluptas.</p><p>Dolor ipsam architecto voluptatem enim saepe aliquam expedita. Consectetur dolorum harum consequuntur. Dolore possimus qui voluptatem quisquam. Qui eum ea consequatur in repellat accusantium.</p><p>Cum totam voluptatem culpa assumenda. Explicabo sed explicabo temporibus rerum quis impedit sit. Esse sit doloribus ut saepe quibusdam consequatur consectetur. Voluptatem dolorem modi nulla amet quo magnam incidunt. Labore reiciendis pariatur voluptatibus tenetur facilis.</p><p>Harum magni similique qui exercitationem. Doloribus reiciendis quis ut veritatis itaque unde.</p><p>Ut impedit qui molestiae et repudiandae iusto. Quisquam cumque nisi saepe quaerat omnis. Consequatur amet et molestiae doloribus accusantium et. Incidunt quo consequatur cum voluptas autem ut et laboriosam.</p><p>Maxime repudiandae vitae sed quia autem dolorem. In at sed necessitatibus est. Officia ducimus necessitatibus quia odio. Ad est cumque beatae dolor blanditiis et corporis.</p>', NULL, '2022-12-14 08:35:31', '2022-12-14 08:35:31'),
(5, 2, 1, 'Et aut reiciendis dolor quod autem at.', 'deserunt-eos-non-consequatur-autem-consequatur-debitis-qui-unde', NULL, 'Ut quia doloribus nulla dolor. Quas ut quia occaecati. Nesciunt debitis repellat ut ab voluptatum aliquid dolorem similique. Omnis omnis rerum et est sit assumenda similique.', '<p>Consectetur id aut adipisci in iure est vero. Consequuntur aut illo illo repellat. Maiores nobis maiores iure commodi repudiandae quis voluptas. Saepe et et quam nulla quisquam.</p><p>Distinctio ut consequatur autem ut nisi. Accusamus optio saepe et natus quos modi. Fuga exercitationem quidem qui. Dicta officiis voluptatem fuga doloribus aspernatur quis.</p><p>Voluptatum reprehenderit eos vel neque veniam impedit. Ut magnam quod dicta aut laborum nam. Voluptatem placeat iure non iure deserunt ex.</p><p>Dolorem quisquam qui mollitia non omnis sint voluptatem. Magni eveniet est et iure eveniet error a. Quia dolor aut autem ea quos. Et rem dolorem sed id eum magnam.</p><p>Voluptatum eos est et doloremque et. Consequatur modi ut id officiis tempora consequatur nam. Aperiam quia neque nemo quibusdam nisi veritatis accusamus. Corporis velit laboriosam temporibus recusandae tenetur sapiente.</p>', NULL, '2022-12-14 08:35:31', '2022-12-14 08:35:31'),
(6, 1, 3, 'Voluptatem et veritatis ut ea.', 'vel-inventore-dolorum-provident-officia-error-quia-et', NULL, 'Accusamus perferendis vel minima tenetur praesentium. Autem beatae dicta et et ut. Repudiandae autem neque vero reprehenderit. A eaque quo eum quasi.', '<p>Aut doloremque eum provident delectus. Magnam nihil omnis enim suscipit deserunt quia. Est in rerum temporibus veniam.</p><p>Eligendi dolor repudiandae non ducimus ullam sed. Non nesciunt optio illum est.</p><p>Aut odit culpa deleniti culpa autem est recusandae. Est magnam deleniti molestias corporis vitae vel. Consequatur provident animi asperiores maxime molestias laborum.</p><p>Magni quaerat quia adipisci consequatur eum atque omnis. Esse perspiciatis qui id rerum asperiores unde. Corrupti harum qui cum occaecati velit consectetur minus. Ut dolor vel omnis nihil. Assumenda sunt nostrum qui natus.</p><p>Fuga sunt non id laboriosam. Veniam eos sit nam error delectus ducimus. Distinctio iusto ut est.</p>', NULL, '2022-12-14 08:35:31', '2022-12-14 08:35:31'),
(7, 1, 3, 'Non corrupti repellat animi provident quia nemo.', 'tenetur-at-itaque-consequatur-pariatur-repellat-quia-ea-dolorem', NULL, 'Quia deserunt beatae vel ipsam. Sed facilis ea quisquam voluptas consequatur. Quia earum consequatur dolorem et.', '<p>Est consequatur omnis voluptas commodi. Sit non eos aut est et neque odio. Voluptatem ratione asperiores blanditiis. Magni est tenetur maiores consequatur tempore ea doloremque.</p><p>Suscipit quaerat sit cupiditate fuga nostrum. Illo qui sed dolor et velit. Possimus assumenda numquam quisquam enim corporis suscipit sequi iure. Dolorem maxime facilis ipsa officia amet excepturi est. Omnis suscipit laboriosam ipsa qui magnam ipsa.</p><p>Ad mollitia et laboriosam cumque sit consequatur magnam. Et consequatur eos consectetur est atque. Dignissimos nesciunt voluptatem et commodi.</p><p>Quia soluta ab error et quaerat. Tempora sunt blanditiis at praesentium tenetur quae nobis enim. Aut qui et quibusdam.</p><p>Et voluptate et qui cum. Esse dolorem dolore eum voluptas doloribus. Tempore ex sit suscipit. Deserunt illo consequatur non est quam sequi sit libero.</p><p>Consequatur repudiandae vel neque quod quo deserunt nam. Et adipisci nemo praesentium accusamus et. Totam atque aut fugit suscipit.</p>', NULL, '2022-12-14 08:35:31', '2022-12-14 08:35:31'),
(8, 1, 2, 'Iure aliquid minima.', 'et-et-aliquam-omnis-aperiam-et', NULL, 'Quas sed nulla esse esse alias omnis consequatur consectetur. Sunt perspiciatis perspiciatis eum atque nihil quia. Dolorem dolorem minima minima nulla. Dolor consequatur dolorum sed.', '<p>Ad perferendis eum esse reprehenderit earum ut. Et vel veritatis eius maiores doloremque quo. Neque qui nemo quae odit quos qui. Voluptatem iusto quia dolorem cum harum occaecati.</p><p>Voluptatum iure voluptatem possimus vero. Vitae ducimus vel similique facere delectus rem saepe eos. Magnam a sunt ut delectus voluptatem et. Enim ea eaque quia est sapiente dolorem itaque. Nemo esse quisquam eius vel molestiae ratione.</p><p>Eos ipsum cum aut dolor praesentium modi velit. Et ab quis ipsam voluptatum sit. Iure eaque hic est officia. Voluptatum enim animi itaque ducimus et soluta. Quia consequatur alias veritatis id.</p><p>Nisi nihil sapiente ea ducimus. Nobis esse cum error veritatis qui modi. Deserunt sed magnam earum unde.</p><p>Qui officia qui et excepturi ea velit mollitia. Quo fugiat ratione qui voluptatem. Veritatis sed delectus eos soluta.</p><p>Quam laudantium sint iste. Error ipsam velit accusantium asperiores. Unde dolores doloribus vero id est sequi beatae necessitatibus. Magni similique quis minima atque sapiente.</p><p>Eos facere est iste neque. Omnis aliquid id eius est suscipit sed. Nihil quam odio voluptatem omnis qui eum porro quod. Pariatur consequatur deserunt rem sequi quam tenetur.</p><p>Assumenda facilis cupiditate pariatur distinctio molestiae ipsum alias voluptates. Optio id inventore ducimus molestiae suscipit. Modi dolores impedit dolorum et consequatur illum.</p><p>Distinctio est quia dolorem laborum. Voluptas cumque totam alias nesciunt eos ullam est. Dolorem autem necessitatibus inventore aspernatur sit veniam minus.</p><p>Dolores quia ullam voluptas dicta et reiciendis ipsum temporibus. Enim possimus enim aut in.</p>', NULL, '2022-12-14 08:35:31', '2022-12-14 08:35:31'),
(9, 2, 3, 'Et voluptatum maxime.', 'sed-et-quisquam-at-et-eos-non', NULL, 'Officia harum dolor id eligendi hic. Dolores quae vero sint et ut vel. Corrupti culpa at qui nostrum quos temporibus itaque modi. Aut architecto laboriosam facilis et perferendis eius omnis. Debitis doloremque molestiae aut placeat aliquid fugit itaque.', '<p>Perspiciatis enim similique corrupti similique corrupti. Libero ipsa soluta vitae quia. Ut sit consequatur iure corporis tempora. Cum dolorem hic fuga molestiae.</p><p>Ipsam quos fugiat nam sint dignissimos eos. Dolores voluptatibus ipsam voluptate ipsa voluptatem ratione occaecati. Distinctio blanditiis corporis ea commodi soluta. Sint aliquid unde eos.</p><p>Perspiciatis ad praesentium ut commodi. Officiis doloribus illum a est placeat. Alias ipsa dolorum facere quam vel assumenda. Aut veritatis et optio molestiae rerum laboriosam sed.</p><p>Non totam saepe ut non officiis sit. Omnis aut ipsa minus ullam. Laudantium sunt ea error repudiandae. Animi nostrum cumque cumque ipsa ducimus itaque.</p><p>Eligendi eaque facere voluptatibus enim repellat. Minus est sapiente dolorem dolor perspiciatis facilis. Ut libero ut praesentium enim hic. Mollitia doloribus tenetur in harum aspernatur. Sunt aut et magni minus aliquam autem officia.</p><p>Dicta fuga laborum sit eveniet. Cupiditate sunt cupiditate voluptatem expedita explicabo quisquam ipsa. Inventore ut libero eveniet quam quo. Vero aliquid consequatur labore.</p><p>Laudantium laudantium voluptatem autem omnis. Natus perferendis ab eum dolore facere veniam. Impedit provident id tempore excepturi sit commodi sequi.</p><p>Quaerat repellendus velit esse ut omnis. Animi et cupiditate rerum ut et. Eaque officia accusantium ipsam et ex eos. Sapiente facere exercitationem quas quam exercitationem ullam.</p><p>Aut omnis voluptatum illo nam doloremque. Nisi aut molestiae maxime mollitia eveniet aliquam libero.</p><p>Dolor eius aut quia deleniti voluptas adipisci deleniti. Et totam illo sint aut voluptas aut ut. Ea et quis repudiandae consequatur deserunt nostrum.</p>', NULL, '2022-12-14 08:35:31', '2022-12-14 08:35:31'),
(10, 1, 3, 'Ea sunt necessitatibus est dolorem praesentium odit voluptatem dicta.', 'ab-voluptatibus-nemo-quaerat-deleniti', NULL, 'Architecto illum iure et et nobis fugit. Dolorem quas beatae et rem. Consequatur eius iste dolores earum vel.', '<p>Quia sunt dolorem aperiam voluptatem. Quisquam consectetur eos exercitationem voluptate quibusdam. Sed est corrupti et doloribus.</p><p>Ut aspernatur ut et tenetur sint doloremque debitis. Eius sunt neque nisi non. Repellendus id amet ipsum temporibus sequi rerum provident labore. Voluptate enim omnis non molestiae aut voluptatem maxime.</p><p>Recusandae non est at ea. Voluptatem eos fugiat suscipit dolor ipsa est aliquid. Nam enim voluptatem provident. Id exercitationem id tenetur illum et non.</p><p>Tempora iure id atque praesentium dolorum facilis aspernatur. Recusandae veniam et vel itaque. Autem vitae dolorem dolore esse aspernatur earum.</p><p>Quisquam non deleniti velit. Laudantium tenetur facere dignissimos sed dolorum laborum maxime modi. In magnam officiis aspernatur assumenda.</p>', NULL, '2022-12-14 08:35:31', '2022-12-14 08:35:31'),
(11, 1, 3, 'Officia itaque nobis est qui consequatur commodi.', 'animi-voluptate-unde-eos-similique-unde', NULL, 'Debitis quos voluptas in eius cumque. Quisquam consequatur et quae laborum rerum.', '<p>Qui quae quia asperiores quo eligendi id. Laboriosam sunt facilis sit facere. Quam enim non et asperiores aut.</p><p>Quos asperiores ea voluptatibus vel consequuntur atque. Debitis ratione voluptatum rerum vero. Amet dicta doloremque quia voluptatem quasi.</p><p>Veritatis quisquam non odit qui maiores blanditiis sed. Incidunt soluta autem nisi perspiciatis illum enim eligendi omnis. Assumenda incidunt possimus est ipsam reiciendis.</p><p>Voluptas voluptatem inventore perferendis necessitatibus ut commodi et. Iusto velit beatae at blanditiis. Cum illum atque voluptatem.</p><p>Ipsam quidem at accusantium maxime. At officia pariatur veritatis possimus et saepe molestiae. A enim officiis asperiores.</p><p>Est voluptatem ducimus suscipit a dolor quas. Quo saepe perferendis aut repudiandae. Est aut iusto est eligendi.</p><p>Rerum esse quia dicta. Expedita nihil commodi ut optio quidem. Quidem reprehenderit minus repudiandae quod deserunt sunt eum. Voluptate aut ipsa quaerat modi.</p><p>In suscipit ducimus nisi aut voluptate. Reiciendis voluptatem eaque mollitia. Reiciendis aut pariatur et ipsa sit.</p><p>Ex porro cupiditate doloribus dolorem qui inventore. Explicabo qui rerum architecto quidem enim aliquam doloribus. Saepe culpa harum molestias vitae doloribus sed.</p><p>Ex explicabo alias labore quibusdam ipsam vel aut ut. Sed aliquid odio ea ut aut aut blanditiis voluptas. Nisi sit iusto quibusdam voluptates sint ab accusamus velit. Sed molestiae ratione suscipit quidem.</p>', NULL, '2022-12-14 08:35:31', '2022-12-14 08:35:31'),
(12, 2, 1, 'Qui impedit dolor sit.', 'voluptatem-tenetur-sed-molestiae-odit', NULL, 'Consequatur et eligendi dolorem veniam fugit amet modi. Aliquid harum ea id laudantium. Non omnis culpa ad ut omnis debitis ut. Ut esse fuga quo doloremque. Quo sint dolores sed.', '<p>Neque ullam architecto iste repudiandae sint repellat molestias autem. Perspiciatis ab temporibus est quas et quaerat quia. Ipsum aliquid voluptas fugiat qui et. Aut tempora et amet aliquid ut quaerat nulla.</p><p>Qui distinctio autem cum impedit nostrum. Provident laudantium fugiat dolorem est in accusamus. Sit et quia itaque vitae voluptatem.</p><p>Provident aut recusandae maxime modi qui. Repellendus molestiae perspiciatis distinctio natus. Nobis ex distinctio non excepturi pariatur necessitatibus.</p><p>Qui quia suscipit harum voluptas. Voluptatibus non quaerat explicabo porro vel sapiente voluptate quibusdam. Quisquam est molestias voluptas commodi molestias deleniti consequatur. Dignissimos deserunt ducimus tenetur ipsam vel debitis repellendus omnis.</p><p>Suscipit qui necessitatibus voluptate illo placeat. Dolor deserunt sit odio assumenda reprehenderit totam dolorem ut. Excepturi quis qui mollitia placeat. Quas sint id cumque officiis autem repudiandae.</p><p>Tempora et quos nisi beatae enim. Qui nisi inventore vel adipisci. Nihil aliquid sunt distinctio perspiciatis et. Quaerat ut dicta accusamus molestias et.</p><p>Perferendis nesciunt repudiandae esse itaque praesentium nam in ex. Vitae aspernatur quo aut omnis. Dolorum voluptatibus dicta autem rem.</p>', NULL, '2022-12-14 08:35:31', '2022-12-14 08:35:31'),
(13, 1, 1, 'Soluta eius.', 'consequatur-labore-nihil-inventore-modi-rerum-expedita-a', NULL, 'Facilis eveniet culpa ex nobis placeat est. Eligendi voluptatem illum unde ut hic. Qui est molestias est eveniet dicta.', '<p>Ipsum ducimus ipsa quia voluptas optio vero. Ea qui numquam dolor. Praesentium esse quo aut qui sit laudantium provident ut. Est assumenda blanditiis rerum reprehenderit aut nostrum est.</p><p>Quod et exercitationem ex quae adipisci labore porro. Quisquam quidem non inventore amet esse voluptatem molestiae. Voluptatem velit rerum veniam molestiae quas totam voluptatem omnis. Quia quidem quidem expedita est laborum. Vel dolore incidunt nisi neque aut eveniet officia.</p><p>Voluptatem aliquid numquam aut iure odio. Veritatis rem odio nemo et omnis veritatis. Sit officiis exercitationem voluptatem facere ut cupiditate recusandae. Sit est eius culpa ipsum ipsa. Est aspernatur animi et voluptates iure iure.</p><p>Doloremque labore corrupti animi rerum et et rerum. Dolore ab asperiores similique aut eos ea. Similique magnam labore ut sed optio minus saepe. Consequuntur quis modi nemo sunt sit ut sunt.</p><p>Quod consequatur et nihil. Ipsam ut cum est quae id. Nemo labore corrupti aliquid tenetur quis omnis. Inventore odio sunt minima sunt quia.</p><p>Numquam necessitatibus quis eaque debitis. Nihil debitis ducimus nemo totam dolorum voluptatem eum et. Omnis magni est possimus ipsa aspernatur. Tempora consequuntur perferendis libero ut.</p><p>Incidunt fugit dolore aut ad corrupti nihil magni. Qui esse tenetur itaque omnis occaecati.</p><p>Sed minima temporibus laudantium sequi est natus repellendus. Debitis inventore repudiandae qui dolor earum autem et et. Dicta vitae blanditiis veniam repudiandae eum facilis dolores tempora. Fugiat inventore est et voluptatibus quia a.</p>', NULL, '2022-12-14 08:35:31', '2022-12-14 08:35:31'),
(14, 1, 3, 'Hic vero quo odit maiores aut.', 'quam-eligendi-est-maiores-doloremque-rem-eos', NULL, 'Omnis impedit et voluptas iusto. Quidem molestias blanditiis sint voluptates. Sed qui dolores eos ut qui tempore. Nesciunt animi quam reiciendis fuga non.', '<p>Est omnis sequi libero quasi. Eum veniam labore est recusandae sapiente ducimus rem. Ut voluptatem fuga quibusdam consequatur.</p><p>In quia sed laudantium. Dolores ut ea est repellendus. Consequatur dolor perspiciatis debitis fugit et incidunt. Totam ea dolor neque ipsam fugit.</p><p>Ea soluta aperiam excepturi eligendi doloribus qui necessitatibus. Ut et voluptatem voluptas eius aspernatur. Molestiae non consequatur ut labore dolorum dolorem facere.</p><p>Numquam et fugiat architecto pariatur accusantium. Ut expedita rem odio. Sed amet neque natus cum amet ex aut.</p><p>Maiores laboriosam aut voluptatum est sed qui. Aut debitis rerum velit distinctio. Nulla aut quidem asperiores amet est quisquam iure.</p><p>Modi excepturi modi at ut dolor recusandae. Blanditiis molestiae nostrum aliquam laudantium similique sed doloremque optio. Amet officia assumenda sed sit labore consequatur quasi. Fugiat magnam sunt sed sint hic dicta fugit eius. Voluptatem quisquam fugiat quis architecto assumenda tempore quo.</p><p>Iste vel ipsum autem architecto reiciendis vel blanditiis qui. Numquam nihil enim omnis. Quos perferendis illum iusto at. Deserunt vero maiores voluptatibus necessitatibus ducimus quas repellendus. Nihil expedita est culpa soluta.</p><p>Voluptatum nulla consectetur vel ratione provident. Possimus et accusamus animi voluptatem est. Quas iusto et sed et. Et maxime excepturi rerum sit molestiae exercitationem earum. Id nam saepe nihil aspernatur illum.</p><p>Quis quia labore deserunt veritatis at. Facere quae minus commodi omnis explicabo delectus et. Accusantium omnis nam sapiente. Placeat non id accusamus tempora hic voluptatem.</p><p>Fuga dolorem praesentium nesciunt ex enim. Dolorum enim cupiditate veritatis quidem. Atque qui quae aspernatur est.</p>', NULL, '2022-12-14 08:35:31', '2022-12-14 08:35:31'),
(15, 1, 3, 'Tenetur eum iusto natus ipsam eum corrupti.', 'iure-officia-sunt-fuga-animi-voluptas-fugit', NULL, 'Esse dolorem nihil aut accusantium eum. Alias impedit officia ullam velit. Ex ut provident et est.', '<p>Similique vitae at hic molestiae sit. Facilis provident minima architecto a ratione. Omnis quidem occaecati id molestias veritatis dolores. Et animi voluptatum molestiae sunt iusto rerum officiis.</p><p>Voluptates ut aut aut suscipit facere. Dignissimos consequatur ipsa commodi earum cupiditate. Dolorem et voluptas ipsam sed quas consequatur. Est porro dolorem ipsum voluptatum dolor inventore.</p><p>Id eaque ratione blanditiis est et cumque voluptas. Ad laudantium earum dolorum porro maxime molestias.</p><p>Eius ut expedita totam. Deleniti qui pariatur quaerat nihil. Temporibus veritatis dolor ab ipsum optio est. Assumenda quasi iste aliquam veritatis voluptas ullam.</p><p>Illum ut quo earum ducimus reiciendis aut. Neque rem porro voluptatum rerum ad officiis sed. Quasi porro consequuntur eligendi ea est tempore.</p><p>Eum est sint perferendis hic omnis nostrum. Occaecati quis ipsam in minima distinctio iusto. Sapiente sunt voluptatem ut at iste.</p><p>Veniam et vel nemo doloribus hic hic sed sint. Perferendis expedita totam qui soluta culpa voluptatibus. Alias nemo ad dolorem ipsa nihil.</p><p>Quod velit quo aliquid. Labore eligendi facilis sapiente iusto quod. Culpa explicabo accusamus voluptatem ut. Sed labore asperiores neque hic.</p><p>Distinctio vel enim magni doloremque. Ipsa commodi non eos suscipit et. Maiores et sit in atque sequi.</p><p>Id ut qui quaerat nisi possimus. Ducimus quia sit et dicta et expedita impedit. Laudantium molestiae dolores est quis dicta odio inventore. Molestiae cumque nobis vel molestias nobis non cumque quis.</p>', NULL, '2022-12-14 08:35:31', '2022-12-14 08:35:31'),
(16, 1, 2, 'Qui aut alias adipisci itaque consequatur quibusdam.', 'corporis-deserunt-voluptatem-fugiat-ea-dolorem-nemo', NULL, 'Vel autem impedit repudiandae labore illo totam laborum dolor. Et quaerat maiores provident error nobis aut. Aut facere quisquam neque ab ab minus.', '<p>Quod nulla atque incidunt libero neque molestiae. Soluta veniam voluptatem assumenda dolores molestiae omnis facilis. Accusantium nulla vel porro autem tempore et ullam. Natus eius quos ut voluptas impedit dolorem id.</p><p>Unde deserunt quaerat numquam voluptates natus. Consequatur expedita cumque maiores sed. Eveniet quas sequi facere assumenda iste laudantium voluptatum. Pariatur laboriosam deleniti corporis consectetur omnis mollitia.</p><p>Consequatur possimus est tempore dolore. Soluta ex tempore velit ipsa nisi ullam modi. Numquam beatae veniam ratione nihil.</p><p>Recusandae cum quaerat earum sequi sint explicabo rerum. Et voluptas iusto vel provident est. Dignissimos atque velit veritatis sint. Deleniti nam impedit molestias.</p><p>Aut maiores aut nulla. Sint est hic ut velit. Numquam a architecto voluptas. Sint deserunt quasi magnam perferendis.</p><p>Voluptatem nobis libero veniam fugiat sit. In natus ratione nam minus nihil doloremque. Non aut et doloribus modi impedit rerum rerum consequuntur. Iure nesciunt doloremque et fugit pariatur velit atque odio.</p><p>Velit rem officia odio quaerat. Magni fugit deserunt velit ex. Quia ipsa molestias repudiandae ea ipsa minus.</p>', NULL, '2022-12-14 08:35:31', '2022-12-14 08:35:31'),
(17, 2, 1, 'Omnis sit rerum.', 'libero-voluptate-provident-accusamus-qui-ea', NULL, 'Aut consequatur sunt dolor. Dolorem molestiae reprehenderit praesentium enim provident. Ullam nulla aliquam ut earum. Possimus consectetur eaque provident qui maxime quo.', '<p>Accusamus adipisci iste voluptatem qui sint. Ullam in dolorum pariatur ex quo eum et voluptates. At harum laboriosam temporibus unde minima qui nam veritatis.</p><p>Earum culpa cumque deserunt ea qui. Voluptas debitis sed inventore. Ex sunt explicabo voluptatem porro cum vel incidunt.</p><p>Sunt inventore quia quisquam repudiandae. Animi sint velit quia doloribus et. Nihil voluptatem aliquam totam. Architecto nobis ut atque quisquam eum sed.</p><p>Laborum eligendi dignissimos temporibus nemo. Nisi laboriosam sint animi quia maxime. Natus dicta enim voluptatum et magni repellat. Voluptatem eos ratione suscipit eaque aut velit quae.</p><p>Et dolor ut ut vel sit consequatur dolor. Ea aliquid quo nam tenetur omnis minus. Voluptas unde aut architecto. Rem inventore saepe temporibus corporis consequatur maiores modi.</p><p>Veniam eos sit fuga quo ducimus minima officiis. Nesciunt magni hic et consequatur ut error et. Ex aliquam quia possimus quia. Est veniam cupiditate ut cumque quae.</p><p>Officiis sunt occaecati aliquam quae omnis libero sit. Ut adipisci quas rerum odit quia praesentium quos. Non vel libero non illum facilis. Aliquid et architecto necessitatibus.</p><p>Sint expedita voluptatem eum ipsum. Magnam ea et pariatur omnis pariatur. Sit atque et similique harum eligendi ut eaque. Fugit quasi omnis alias iste voluptatem mollitia molestiae.</p><p>Ex laboriosam ducimus ipsam nobis ducimus consequatur dignissimos. Sed quae nemo quaerat rerum. Ut voluptas quia fugiat et id rerum. Ut laudantium enim totam incidunt ea esse amet.</p>', NULL, '2022-12-14 08:35:31', '2022-12-14 08:35:31'),
(18, 1, 3, 'Aliquid amet sint.', 'perspiciatis-suscipit-unde-iure-nisi-tempore-id', NULL, 'Hic ratione et voluptatem recusandae. Quos laborum consequuntur aut ea atque at dolorem. Officia veritatis et ut consectetur rem vero. Quasi eius tempore occaecati architecto.', '<p>Praesentium in numquam consequatur et modi voluptates occaecati labore. Qui sed minima quo explicabo libero sed. Quae sapiente laborum omnis et inventore consectetur enim.</p><p>Architecto veritatis quia nostrum. Quod voluptate animi optio dolor dicta excepturi recusandae. Dolor dolore nam enim aut quia voluptas aspernatur. Qui eos eveniet non optio.</p><p>Sunt dolorem dolores officia qui quo quisquam. Officiis accusantium alias odit quia. Neque quidem alias quae minima vel magni.</p><p>Qui amet dolor dolores occaecati. Eum et vitae explicabo dolorum sit. Dolorum voluptatem incidunt fugit unde et.</p><p>Dolores voluptates expedita enim autem in. Officia illum pariatur illo veritatis cumque natus sint sit. Ducimus temporibus id recusandae ratione qui asperiores qui laborum. Nam accusamus harum consequatur quo et molestiae sit.</p>', NULL, '2022-12-14 08:35:31', '2022-12-14 08:35:31'),
(19, 1, 1, 'Incidunt esse recusandae ducimus.', 'maxime-ratione-aut-iure-nam-iure-illo', NULL, 'Aut minima velit autem rerum repellendus. Dolorum ea corporis aperiam aperiam eveniet et est excepturi. Autem nulla ipsam eos velit est voluptas eos.', '<p>Ad et consequatur atque at. Adipisci totam dolore et quia culpa. Inventore similique eaque eum repellat fugit rem officiis. Consectetur amet beatae id perferendis inventore aperiam dolorem.</p><p>Rerum eos beatae rerum enim animi nobis. Et dolorem modi vero atque et quo. Sint odio earum doloribus. Ut dicta ad a eius aut officiis aspernatur.</p><p>Libero iste voluptas aut possimus nisi ut. Rerum nihil esse est iusto amet qui consequatur. Sed sint commodi impedit nihil id praesentium.</p><p>Quo vel rerum quis consequuntur laboriosam repellendus. Ut aliquam voluptatem expedita laborum. Sapiente fugit repudiandae dolorem quia repellendus esse corrupti.</p><p>Repellat eos nihil velit inventore deleniti et quas. Ab laborum in inventore sit tempora dolore quod veniam. Animi minus est ab velit quia soluta.</p><p>Incidunt eum qui voluptas et neque. Laudantium blanditiis eum est sit facere omnis quos. Id esse eaque nobis optio ut. Et quia ut unde ea voluptas sed. Tenetur aperiam ut soluta reiciendis qui.</p>', NULL, '2022-12-14 08:35:31', '2022-12-14 08:35:31'),
(20, 1, 2, 'Voluptas quae.', 'a-commodi-nihil-ducimus-quo-sed', NULL, 'Rem voluptate consectetur ad rerum consequatur. Iure saepe sed in in pariatur nemo praesentium.', '<p>Voluptate qui perferendis corrupti voluptatum voluptates quod. Quasi corrupti consectetur optio aliquid. Consequuntur illum vel iusto at quasi ut.</p><p>Inventore quidem ipsa eos eos atque vel. Rerum aut aspernatur iure quis. Odit placeat eum quidem et quam et. Dicta ad minus eveniet.</p><p>Atque quisquam quas et eum. Consectetur voluptatem exercitationem doloribus cupiditate aliquid est ex. Cumque adipisci accusamus error odit rerum libero fuga. Optio nemo repellat enim id et.</p><p>Omnis in ducimus rerum omnis. Sapiente tempore dolor sunt aperiam quod. Itaque iure consequatur esse natus.</p><p>Quibusdam harum cum rerum. Sit quis facere possimus voluptas blanditiis blanditiis illum natus. Repudiandae et facere aperiam aut.</p><p>Deserunt necessitatibus quaerat voluptas sequi. Consectetur et est ut adipisci quasi. Quas asperiores soluta et iure assumenda. Soluta cumque consequatur quia dolor. Assumenda ipsa ut consequatur explicabo veniam voluptatem.</p><p>Aut voluptatem quia aut nihil. Voluptas est id quis ullam.</p><p>Enim et fugiat minima et possimus. Vero odio atque sed quisquam. Ut possimus est et magni. Enim et doloremque a unde.</p><p>Ratione ab labore numquam asperiores nisi. Perspiciatis quae et suscipit consequuntur neque aperiam voluptas. Enim exercitationem doloremque et possimus doloremque aut.</p><p>Quisquam sequi veniam a aspernatur sit vel. Asperiores dolores quo ea mollitia qui magni. Aliquam molestiae inventore quae omnis quod.</p>', NULL, '2022-12-14 08:35:31', '2022-12-14 08:35:31'),
(22, 1, 1, 'Cara Mengatasi MySQL Shutdown Unexpectedly pada XAMPP', 'cara-mengatasi-mysql-shutdown-unexpectedly-pada-xampp', 'post-images/6kGNhMAc0wtXGsIhRSrWX9atiuKtOpB2hZElNWHg.png', 'Langkah - langkah untuk mengatasi Error: MySQL shutdown unexpectedly1. Buka aplikasi XAMPP, lalu klik tombol Config pada modul yang error. Setelah itu pilih \"my.ini\".2, Kemudian, file tersebut akan te...', '<div><strong>Langkah - langkah untuk mengatasi Error: MySQL shutdown unexpectedly</strong><br><br>1. Buka aplikasi XAMPP, lalu klik tombol Config pada modul yang error. Setelah itu pilih \"my.ini\".<br>2, Kemudian, file tersebut akan terbuka di Notepad default anda. Kalau di sini saya menggunakan Sublime Text sebagai text editornya<br>3. Lalu, silahkan find semua angka \"3306\" pada file tersebut, dan ganti semua dengan angka \"3307\"<br>4. Maka modul yang error tadi bisa kembali diaktifkan<br><br><br><br></div>', NULL, '2022-12-15 06:21:20', '2022-12-15 06:21:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admmin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admmin`) VALUES
(1, 'Dhiyaa Unnisa', 'dhiyaaunnisa_', 'unnisadhiyaa25@gmail.com', NULL, '$2y$10$jfe4muFShLetkfz45GxH5ONgmZ6RX0tU0k27qb9Fz9nvNiUc3Y8Me', NULL, '2022-12-14 08:35:31', '2022-12-14 08:35:31', 1),
(2, 'Puput Usada', 'amandasari', 'niyaga.sitorus@example.net', '2022-12-14 08:35:31', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vP144H2H3i', '2022-12-14 08:35:31', '2022-12-14 08:35:31', 0),
(3, 'Paramita Kusmawati', 'uyainah.cawisadi', 'qyulianti@example.com', '2022-12-14 08:35:31', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ZXusGVuhEaMtJ96h6Iwb1ybkef5QInUY41gG3q6a7KfwpOIWDtAwq7LUItKg', '2022-12-14 08:35:31', '2022-12-14 08:35:31', 0),
(4, 'Prabowo Widodo S.I.Kom', 'wputra', 'twidiastuti@example.com', '2022-12-14 08:35:31', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'a8efXaigiMGXHCtLMhxewmygdXcrUmGBDlkzlk1ixIhdXsdm7awfZkoXZUoB', '2022-12-14 08:35:31', '2022-12-14 08:35:31', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
