<?php
/**
 * MyBB 1.9 Turkish Language Pack
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 */

// Tabs
$l['attachments'] = "Ekler";
$l['stats'] = "İstatistikler";
$l['find_attachments'] = "Ek Ara";
$l['find_attachments_desc'] = "Ek arama sistemini kullanarak, kullanıcıların forumlarınıza eklediği belirli dosyaları arayabilirsiniz. Aşağıya bazı arama terimleri girerek başlayın. Tüm alanlar isteğe bağlıdır ve bir değer içermedikleri sürece kriterlere dahil edilmeyecektir.";
$l['find_orphans'] = "Sahipsiz Ekleri Bul";
$l['find_orphans_desc'] = "Sahipsiz ekler, veritabanında veya dosya sisteminde bir nedenden dolayı eksik olan eklerdir. Bu araç, onları bulmanıza ve kaldırmanıza yardımcı olacaktır.";
$l['attachment_stats'] = "Ek İstatistikleri";
$l['attachment_stats_desc'] = "Aşağıda, forumunuzda şu anda bulunan ekler için bazı genel istatistikler bulunmaktadır.";

// Errors
$l['error_nothing_selected'] = "Lütfen silmek için bir veya daha fazla ek seçin.";
$l['error_no_attachments'] = "Forumunuzda henüz hiç ek yok. Bir ek gönderildiğinde bu bölüme erişebileceksiniz.";
$l['error_not_all_removed'] = "Sadece bazı sahipsiz ekler başarıyla silindi, diğerleri yüklemeler dizininden kaldırılamadı.";
$l['error_count'] = '{1} ek kaldırılamadı.';
$l['error_invalid_username'] = "Girdiğiniz kullanıcı adı geçersiz.";
$l['error_invalid_forums'] = "Seçtiğiniz bir veya daha fazla forum geçersiz.";
$l['error_no_results'] = "Belirtilen arama kriterlerine sahip ek bulunamadı.";
$l['error_not_found'] = "Ek dosyası yüklemeler dizininde bulunamadı.";
$l['error_not_attached'] = "Ek 24 saatten daha uzun bir süre önce yüklendi ancak bir mesaja eklenmedi.";
$l['error_does_not_exist'] = "Bu ek için konu veya mesaj artık mevcut değil.";

// Success
$l['success_deleted'] = "Seçilen ekler başarıyla silindi.";
$l['success_orphan_deleted'] = "Seçilen sahipsiz ek(ler) başarıyla silindi.";
$l['success_count'] = '{1} ek başarıyla kaldırıldı.';
$l['success_no_orphans'] = "Forumunuzda sahipsiz ek bulunmamaktadır.";

// Confirm
$l['confirm_delete'] = "Seçilen ekleri silmek istediğinizden emin misiniz?";

// == Pages
// = Stats
$l['general_stats'] = "Genel İstatistikler";
$l['stats_attachment_stats'] = "Ekler - Ek İstatistikleri";
$l['num_uploaded'] = "<strong>Yüklenen Ek Sayısı</strong>";
$l['space_used'] = "<strong>Kullanılan Ek Alanı</strong>";
$l['bandwidth_used'] = "<strong>Tahmini Bant Genişliği Kullanımı</strong>";
$l['average_size'] = "<strong>Ortalama Ek Boyutu</strong>";
$l['size'] = "Boyut";
$l['posted_by'] = "Gönderen";
$l['thread'] = "Konu";
$l['downloads'] = "İndirmeler";
$l['date_uploaded'] = "Yükleme Tarihi";
$l['popular_attachments'] = "En Popüler 5 Ek";
$l['largest_attachments'] = "En Büyük 5 Ek";
$l['users_diskspace'] = "En Çok Disk Alanı Kullanan 5 Kullanıcı";
$l['username'] = "Kullanıcı Adı";
$l['total_size'] = "Toplam Boyut";

// = Orphans
$l['orphan_results'] = "Sahipsiz Ek Arama - Sonuçlar";
$l['orphan_attachments_search'] = "Sahipsiz Ek Arama";
$l['reason_orphaned'] = "Sahipsiz Kalma Nedeni";
$l['reason_not_in_table'] = "Ekler tablosunda yok";
$l['reason_file_missing'] = "Ekli dosya eksik";
$l['reason_thread_deleted'] = "Konu silinmiş";
$l['reason_post_never_made'] = "Mesaj hiç oluşturulmamış";
$l['unknown'] = "Bilinmiyor";
$l['results'] = "Sonuçlar";
$l['step1'] = "Adım 1";
$l['step2'] = "Adım 2";
$l['step1of2'] = "Adım 1 / 2 - Dosya Sistemi Taraması";
$l['step2of2'] = "Adım 2 / 2 - Veritabanı Taraması";
$l['step1of2_line1'] = "Lütfen bekleyin, dosya sistemi şu anda sahipsiz ekler için taranıyor.";
$l['step2of2_line1'] = "Lütfen bekleyin, veritabanı şu anda sahipsiz ekler için taranıyor.";
$l['step_line2'] = "Bu işlem tamamlandığında otomatik olarak bir sonraki adıma yönlendirileceksiniz.";
$l['scanning'] = 'Taranıyor&hellip;';

// = Attachments / Index
$l['index_find_attachments'] = "Ekler - Ek Ara";
$l['find_where'] = "Ekleri şurada ara&hellip;";
$l['name_contains'] = "Dosya adı şunu içerir";
$l['name_contains_desc'] = "Dosya adında verilen sorguyu içeren ekleri arayın. Örneğin, .zip dosya uzantısını kullanan ekleri bulmak için .zip girin.";
$l['type_contains'] = "Dosya türü şunu içerir";
$l['forum_is'] = "Forum şudur";
$l['username_is'] = "Gönderenin kullanıcı adı şudur";
$l['poster_is'] = "Gönderen şudur";
$l['poster_is_either'] = "Kullanıcı veya Ziyaretçi";
$l['poster_is_user'] = "Sadece Kullanıcılar";
$l['poster_is_guest'] = "Sadece Ziyaretçiler";
$l['more_than'] = "Şundan fazla";
$l['greater_than'] = "Şundan büyük";
$l['is_exactly'] = "Tam olarak";
$l['less_than'] = "Şundan küçük";
$l['date_posted_is'] = "Gönderilme tarihi";
$l['days_ago'] = "gün önce";
$l['file_size_is'] = "Dosya boyutu";
$l['kb'] = "KB";
$l['download_count_is'] = "İndirme sayısı";
$l['display_options'] = "Görüntüleme Seçenekleri";
$l['filename'] = "Dosya Adı";
$l['filesize'] = "Dosya Boyutu";
$l['download_count'] = "İndirme Sayısı";
$l['post_username'] = "Mesaj Kullanıcı Adı";
$l['asc'] = "Artan";
$l['desc'] = "Azalan";
$l['sort_results_by'] = "Sonuçları şuna göre sırala";
$l['results_per_page'] = "Sayfa başına sonuç";
$l['in'] = "yönü";

// Buttons
$l['button_delete_orphans'] = "İşaretli Sahipsizleri Sil";
$l['button_delete_attachments'] = "İşaretli Ekleri Sil";
$l['button_find_attachments'] = "Ek Ara";
