<?php
/**
 * MyBB 1.9 Turkish Language Pack
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 */

$l['warning_system'] = "Uyarı Sistemi";
$l['warning_types'] = "Uyarı Tipleri";
$l['warning_types_desc'] = "Buradan, personelin kullanıcılara verebileceği farklı uyarı tiplerini yönetebilirsiniz.";
$l['add_warning_type'] = "Yeni Uyarı Tipi Ekle";
$l['add_warning_type_desc'] = "Buradan yeni bir ön tanımlı uyarı tipi oluşturabilirsiniz. Uyarı tipleri, kullanıcıları uyarırken seçilebilir ve bu tip için eklenecek puan sayısını ve bu tipteki uyarıların süresinin dolacağı zaman aralığını tanımlayabilirsiniz.";
$l['edit_warning_type'] = "Uyarı Tipini Düzenle";
$l['edit_warning_type_desc'] = "Buradan bu uyarı tipini düzenleyebilirsiniz. Uyarı tipleri, kullanıcıları uyarırken seçilebilir ve bu tip için eklenecek puan sayısını ve bu tipteki uyarıların süresinin dolacağı zaman aralığını tanımlayabilirsiniz.";
$l['warning_levels'] = "Uyarı Seviyeleri";
$l['warning_levels_desc'] = "Uyarı Seviyeleri, bir kullanıcı belirli bir uyarı seviyesine (maksimum uyarı puanının yüzdesi) ulaştığında ne olacağını tanımlar. Kullanıcıları yasaklayabilir veya ayrıcalıklarını askıya alabilirsiniz.";
$l['add_warning_level'] = "Yeni Uyarı Seviyesi Ekle";
$l['add_warning_level_desc'] = "Buradan yeni bir uyarı seviyesi oluşturabilirsiniz. Uyarı seviyeleri, kullanıcılar maksimum uyarı seviyesinin belirli bir yüzdesine ulaştığında onlara karşı alınacak eylemlerdir.";
$l['edit_warning_level'] = "Uyarı Seviyesini Düzenle";
$l['edit_warning_level_desc'] = "Uyarı seviyeleri, kullanıcılar maksimum uyarı seviyesinin belirli bir yüzdesine ulaştığında onlara karşı alınacak eylemlerdir.";

$l['percentage'] = "Yüzde";
$l['action_to_take'] = "Alınacak Eylem";
$l['move_banned_group'] = "{1} {2} boyunca yasaklı gruba ({3}) taşı";
$l['move_banned_group_permanent'] = "Kalıcı olarak yasaklı gruba ({1}) taşı";
$l['suspend_posting'] = "Gönderi ayrıcalıklarını {1} {2} boyunca askıya al";
$l['suspend_posting_permanent'] = "Gönderi ayrıcalıklarını Kalıcı olarak askıya al";
$l['moderate_new_posts'] = "Yeni gönderileri {1} {2} boyunca denetle";
$l['moderate_new_posts_permanent'] = "Yeni gönderileri Kalıcı olarak denetle";
$l['no_warning_levels'] = "Şu anda forumunuzda hiç uyarı seviyesi bulunmamaktadır.";

$l['warning_type'] = "Uyarı Tipi";
$l['points'] = "Puanlar";
$l['expires_after'] = "Süresi Dolma";
$l['no_warning_types'] = "Şu anda forumunuzda hiç uyarı tipi bulunmamaktadır.";

$l['warning_points_percentage'] = "Maksimum Uyarı Puanı Yüzdesi";
$l['warning_points_percentage_desc'] = "Lütfen 1 ile 100 arasında sayısal bir değer girin.";
$l['action_to_be_taken'] = "Alınacak Eylem";
$l['action_to_be_taken_desc'] = "Kullanıcılar yukarıdaki seviyeye ulaştığında alınmasını istediğiniz eylemi seçin.";
$l['ban_user'] = "Kullanıcıyı Yasakla";
$l['banned_group'] = "Yasaklı grup:";
$l['ban_length'] = "Yasak süresi:";
$l['suspend_posting_privileges'] = "Gönderi Ayrıcalıklarını Askıya Al";
$l['suspension_length'] = "Askıya alma süresi:";
$l['moderate_posts'] = "Gönderileri Denetle";
$l['moderation_length'] = "Denetleme süresi:";
$l['save_warning_level'] = "Uyarı Seviyesini Kaydet";

$l['title'] = "Başlık";
$l['points_to_add'] = "Eklenecek Puanlar";
$l['points_to_add_desc'] = "Bir kullanıcının uyarı seviyesine eklenecek puan sayısı.";
$l['warning_expiry'] = "Uyarı Bitiş Süresi";
$l['warning_expiry_desc'] = "Bu uyarı verildikten ne kadar süre sonra geçerliliğini yitirmesini istiyorsunuz?";
$l['save_warning_type'] = "Uyarı Tipini Kaydet";

$l['expiration_hours'] = "Saat";
$l['expiration_days'] = "Gün";
$l['expiration_weeks'] = "Hafta";
$l['expiration_months'] = "Ay";
$l['expiration_never'] = "Asla";
$l['expiration_permanent'] = "Kalıcı";

$l['error_invalid_warning_level'] = "Belirtilen uyarı seviyesi mevcut değil.";
$l['error_invalid_warning_percentage'] = "Bu uyarı seviyesi için geçerli bir yüzde değeri girmediniz. Yüzde değeriniz 1 ile 100 arasında olmalıdır.";
$l['error_invalid_warning_type'] = "Belirtilen uyarı tipi mevcut değil.";
$l['error_missing_action_type'] = "Lütfen bu yeni uyarı seviyesiyle atanacak eylemlerden birini seçin.";
$l['error_missing_type_title'] = "Bu uyarı tipi için bir başlık girmediniz";
$l['error_missing_type_points'] = "Bu tipte uyarı verirken eklenecek geçerli bir puan sayısı girmediniz. 0'dan büyük ancak {1}'den büyük olmayan bir sayı girmelisiniz";

$l['success_warning_level_created'] = "Uyarı seviyesi başarıyla oluşturuldu.";
$l['success_warning_level_updated'] = "Uyarı seviyesi başarıyla güncellendi.";
$l['success_warning_level_deleted'] = "Seçilen uyarı seviyesi başarıyla silindi.";
$l['success_warning_type_created'] = "Uyarı tipi başarıyla oluşturuldu.";
$l['success_warning_type_updated'] = "Uyarı tipi başarıyla güncellendi.";
$l['success_warning_type_deleted'] = "Seçilen uyarı tipi başarıyla silindi.";

$l['confirm_warning_level_deletion'] = "Bu uyarı seviyesini silmek istediğinizden emin misiniz?";
$l['confirm_warning_type_deletion'] = "Bu uyarı tipini silmek istediğinizden emin misiniz?";
