<?php
/**
 * MyBB 1.9 Turkish Language Pack
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 */

$l['task_manager'] = "Görev Yöneticisi";
$l['add_new_task'] = "Yeni Görev Ekle";
$l['add_new_task_desc'] = "Buradan forumunuzda otomatik olarak çalıştırılacak yeni zamanlanmış görevler oluşturabilirsiniz.";
$l['edit_task'] = "Görevi Düzenle";
$l['edit_task_desc'] = "Aşağıdan bu zamanlanmış görev için çeşitli ayarları düzenleyebilirsiniz.";
$l['task_logs'] = "Görev Kayıtları";
$l['view_task_logs'] = "Görev Kayıtlarını Görüntüle";
$l['view_task_logs_desc'] = "Bir görev çalıştığında ve kayıt tutma etkinleştirildiğinde, sonuçlar veya hatalar aşağıda listelenir. 30 günden eski kayıtlar otomatik olarak silinir.";
$l['scheduled_tasks'] = "Zamanlanmış Görevler";
$l['scheduled_tasks_desc'] = "Buradan forumunuzda otomatik olarak çalıştırılan görevleri yönetebilirsiniz. Bir görevi şimdi çalıştırmak için görevin sağındaki simgeye tıklayın.";

$l['title'] = "Başlık";
$l['short_description'] = "Kısa Açıklama";
$l['task_file'] = "Görev Dosyası";
$l['task_file_desc'] = "Bu görevin çalıştırmasını istediğiniz görev dosyasını seçin.";
$l['time_minutes'] = "Zaman: Dakika";
$l['time_minutes_desc'] = "Bu görevin çalışması gereken dakikaların (0-59) virgülle ayrılmış bir listesini girin. Bu görevin her dakika çalışması gerekiyorsa '*' girin.";
$l['time_hours'] = "Zaman: Saat";
$l['time_hours_desc'] = "Bu görevin çalışması gereken saatlerin (0-23) virgülle ayrılmış bir listesini girin. Bu görevin her saat çalışması gerekiyorsa '*' girin.";
$l['time_days_of_month'] = "Zaman: Ayın Günleri";
$l['time_days_of_month_desc'] = "Bu görevin çalışması gereken günlerin (1-31) virgülle ayrılmış bir listesini girin. Bu görevin her gün çalışması gerekiyorsa veya aşağıda bir hafta günü belirtmek istiyorsanız '*' girin.";
$l['every_weekday'] = "Hafta İçi Her Gün";
$l['sunday'] = "Pazar";
$l['monday'] = "Pazartesi";
$l['tuesday'] = "Salı";
$l['wednesday'] = "Çarşamba";
$l['thursday'] = "Perşembe";
$l['friday'] = "Cuma";
$l['saturday'] = "Cumartesi";
$l['time_weekdays'] = "Zaman: Haftanın Günleri";
$l['time_weekdays_desc'] = "Bu görevin haftanın hangi günlerinde çalışacağını seçin. CTRL tuşuna basılı tutarak birden fazla gün seçebilirsiniz. Bu görevin hafta içi her gün çalışmasını istiyorsanız veya yukarıda önceden tanımlanmış bir gün girdiyseniz 'Hafta İçi Her Gün' seçeneğini seçin.";
$l['every_month'] = "Her Ay";
$l['time_months'] = "Zaman: Aylar";
$l['time_months_desc'] = "Bu görevin hangi aylarda çalışacağını seçin. CTRL tuşuna basılı tutarak birden fazla ay seçebilirsiniz. Bu görevin her ay çalışmasını istiyorsanız 'Her Ay' seçeneğini seçin.";
$l['enabled'] = "Görev etkinleştirilsin mi?";
$l['enable_logging'] = "Kayıt Tutma Etkinleştirilsin mi?";
$l['save_task'] = "Görevi Kaydet";
$l['task'] = "Görev";
$l['date'] = "Tarih";
$l['data'] = "Veri";
$l['no_task_logs'] = "Şu anda zamanlanmış görevlerin hiçbiri için kayıt girişi bulunmamaktadır.";
$l['next_run'] = "Sonraki Çalıştırma";
$l['run_task_now'] = "Bu görevi şimdi çalıştır";
$l['disable_task'] = "Görevi Devre Dışı Bırak";
$l['run_task'] = "Görevi Çalıştır";
$l['enable_task'] = "Görevi Etkinleştir";
$l['delete_task'] = "Görevi Sil";

$l['error_invalid_task'] = "Belirtilen görev mevcut değil.";
$l['error_missing_title'] = "Bu zamanlanmış görev için bir başlık girmediniz.";
$l['error_missing_description'] = "Bu zamanlanmış görev için bir açıklama girmediniz.";
$l['error_invalid_task_file'] = "Seçtiğiniz görev dosyası mevcut değil.";
$l['error_invalid_minute'] = "Girdiğiniz dakika geçersiz.";
$l['error_invalid_hour'] = "Girdiğiniz saat geçersiz.";
$l['error_invalid_day'] = "Girdiğiniz gün geçersiz.";
$l['error_invalid_weekday'] = "Seçtiğiniz hafta günü geçersiz.";
$l['error_invalid_month'] = "Seçtiğiniz ay geçersiz.";

$l['success_task_created'] = "Görev başarıyla oluşturuldu.";
$l['success_task_updated'] = "Seçilen görev başarıyla güncellendi.";
$l['success_task_deleted'] = "Seçilen görev başarıyla silindi.";
$l['success_task_enabled'] = "Seçilen görev başarıyla etkinleştirildi.";
$l['success_task_disabled'] = "Seçilen görev başarıyla devre dışı bırakıldı.";
$l['success_task_run'] = "Seçilen görev başarıyla çalıştırıldı.";

$l['confirm_task_deletion'] = "Bu zamanlanmış görevi silmek istediğinizden emin misiniz?";
$l['confirm_task_enable'] = "<strong>UYARI:</strong> Yalnızca cron aracılığıyla çalıştırılması amaçlanan bir görevi etkinleştirmek üzeresiniz (Daha fazla bilgi için lütfen <a href=\"https://docs.mybb.com/1.8/administration/task-manager\" target=\"_blank\" rel=\"noopener\">MyBB Belgelerine</a> bakın). Devam edilsin mi?";
$l['no_tasks'] = "Şu anda forumunuzda hiç görev bulunmamaktadır.";
