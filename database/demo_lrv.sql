

INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Áo quần', 1, '2022-10-17 23:58:40', '2022-10-17 23:58:40', NULL),
(2, 'Túi xách', 1, '2022-10-17 23:58:46', '2022-10-17 23:58:46', NULL),
(3, 'Ví da xịn', 1, '2022-10-17 23:58:56', '2022-10-17 23:58:56', NULL),
(4, 'Đồng hồ', 1, '2022-10-17 23:59:00', '2022-10-17 23:59:00', NULL);


INSERT INTO `products` (`id`, `name`, `image`, `price`, `sale_price`, `status`, `category_id`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ÁO sơ mi nam đồng bộ', 'ao2.jpeg', 7000000.000, 1500000.000, 1, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia nam numquam, eligendi exercitationem optio quos, at, veniam doloribus neque sunt voluptas. Cumque, non? Nulla veniam ex omnis illo. Quod, iure?', '2022-10-18 00:11:03', '2022-10-18 00:11:03', NULL),
(2, 'Áo thun đôi', 'ao1.jpg', 250000.000, 250000.000, 1, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia nam numquam, eligendi exercitationem optio quos, at, veniam doloribus neque sunt voluptas. Cumque, non? Nulla veniam ex omnis illo. Quod, iure?', '2022-10-18 00:11:45', '2022-10-18 00:11:45', NULL),
(3, 'Quần đùi trẻ em cực chất', 'quan2.jpg', 7900000.000, 500000.000, 1, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia nam numquam, eligendi exercitationem optio quos, at, veniam doloribus neque sunt voluptas. Cumque, non? Nulla veniam ex omnis illo. Quod, iure?', '2022-10-18 00:12:20', '2022-10-18 00:12:20', NULL),
(4, 'Túi xách nữ thời trang cao cấp', 'tui3.jpg', 750000.000, 450000.000, 1, 2, 'Túi xách nữ thời trang cao cấp 12', '2022-10-18 00:12:49', '2022-10-18 00:21:38', NULL);


INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Manager', 'admin@gmail.com', NULL, '$2y$10$DGDtzroUhkpPQKguy0pzAOLzii3mKx3/p3YGfbGjadypqBrFiFSV2', NULL, NULL, NULL);