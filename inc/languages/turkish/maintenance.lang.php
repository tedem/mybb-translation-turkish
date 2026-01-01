<?php

/**
 * Language strings used on maintenance pages and in Process interfaces.
 *
 * Strings in this file may need to remain readable after `strip_tags()` is applied
 */

#region Process - common
$l['operation_error_title'] = '{1} — Hata';
$l['operation_error_message'] = 'İşlem başarısız oldu. Lütfen ayrıntılar için <code>error.log</code> dosyasını kontrol edin.';
$l['operation_warning_title'] = '{1} — Uyarı';

// navigation
$l['retry'] = 'Tekrar dene';
$l['retry_step'] = 'Tekrar denensin mi?';
$l['retry_operation_confirm'] = 'İşleme devam etmeden önce tekrar denensin mi?';
$l['retry_parameter_input'] = 'Parametre değerleri değiştirilsin mi?';
$l['step_finish'] = 'İleri';
$l['step_final_finish'] = 'Bitir';
$l['waiting_for_operation'] = '{1} bekleniyor…';
$l['waiting_for_operation_hidden'] = 'Bekleniyor…';
$l['redirecting'] = 'Yönlendiriliyor…';
#endregion

#region CLI
$l['operation_error_details_cli'] = 'Ek ayrıntılar "-v" (ayrıntılı) parametresi ile kullanılabilir.';

$l['using_env_parameter_value'] = '{1} için ortam değişkeni <{3}> kullanılıyor';
$l['using_env_parameter_value_revealed'] = '{1} için ortam değişkeni <{3}> kullanılıyor: "{2}"';

$l['using_default_parameter_value'] = '{1} için varsayılan parametre değeri kullanılıyor';
$l['using_default_parameter_value_revealed'] = '{1} için varsayılan parametre değeri kullanılıyor: "{2}"';

$l['unknown_operation'] = 'Bilinmeyen işlem "{1}"';
$l['unknown_parameter'] = 'Bilinmeyen işlem parametresi "{1}"';
#endregion

#region GUI
$l['operation_error_details_http'] = 'Ek ayrıntılar web konsolunda bulunabilir.';

$l['optional'] = 'isteğe bağlı';
$l['show_password'] = 'Şifreyi Göster';
$l['weak_password'] = 'Zayıf şifre';

// language select
$l['select_language'] = 'Dil Seçimi';
$l['change_language'] = 'Değiştir';

// versionCheck action
$l['version_check'] = 'En Son Sürümü Kontrol Et';
$l['version_check_active'] = 'Güncellemeler kontrol ediliyor…';
$l['version_check_newer'] = 'En son sürüm <a href="https://mybb.com/download" target="_blank">{1}</a>';
$l['version_check_latest'] = 'En son sürüm';
$l['version_check_error'] = 'Otomatik olarak kontrol edilemedi — ziyaret edin <a href="https://mybb.com" target="_blank" rel="noreferrer">MyBB.com</a>';

// insecure transport warning
$l['insecure_transport'] = 'Güvensiz Bağlantı Protokolü Algılandı';
$l['insecure_transport_message'] = 'Buraya girilen hassas bilgiler başkaları tarafından görülebilir. Sunucunun HTTPS desteklediğinden emin olmalı ve devam etmeden önce <code>https://</code> protokolünü kullanmalısınız.';

// miscellaneous
$l['support'] = 'Yardıma mı ihtiyacınız var? MyBB <a href="https://docs.mybb.com" target="_blank">Dokümantasyon</a> ve <a href="https://mybb.com/support" target="_blank">Destek kanallarını</a> kontrol edin.';
$l['powered_by_phrases'] = 'Yeni forum oluşturuluyor
İnsanları bir araya getiriyor
Hazırlanıyor
İnsanları birbirine bağlıyor
Tam doğru bir topluluk
Potansiyel aşılıyor
Harfi harfine forum
Yakında çalışacak';
#endregion

#region fatal errors
$l['locked_title'] = 'Devam Etmek İçin Kilidi Açın';
$l['locked'] = 'Lütfen <code>{1}</code> dosyasını <code>install/</code> dizininden kaldırın ve bu MyBB forumunu kurmak veya yükseltmek için tekrar deneyin.';

$l['empty_config_to_reinstall_title'] = 'MyBB\'yi Yeniden Yüklemeden Önce';
$l['empty_config_to_reinstall'] = '<p>Mevcut forumun üzerine yazmak ve MyBB\'yi tekrar yüklemek istediğinizden emin iseniz, yapılandırma dosyasını <code>inc/config.php</code> boşaltın veya silin ve bu sayfayı yenileyin.
<br><br>
<p>Forumunuzu yükseltmeyi planlıyorsanız, lütfen <a href="./upgrade.php"><strong>buraya tıklayın</strong></a>.';

$l['upgrade_initialization_failed_title'] = 'Başlatma Başarısız Oldu';
$l['upgrade_initialization_failed'] = 'MyBB\'yi yükseltmek için çalışan bir forum gereklidir. Yeni bir forum kurmayı planlıyorsanız, bunun yerine <a href="./index.php?process=install"><strong>kurulum sürecini</strong></a> başlatın.';

$l['upgrade_not_authorized_title'] = 'Yükseltme Yetkisi Gerekli';
$l['upgrade_not_authorized'] = 'Kurulum dizininde <code>{1}</code> adlı bir dosya oluşturun ve bu sayfayı yenileyin.';

$l['upgrade_not_needed_title'] = 'Zaten Güncel';
$l['upgrade_not_needed'] = 'Bu sürüm için yükseltme işlemi gerekli değildir.<br><br>Bu bir hata olduğunu düşünüyorsanız, <a href="./index.php?process=upgrade&force=1">yükseltmeyi zorlayabilirsiniz</a>. Aksi takdirde, kurulum dizinini silebilirsiniz.</p>';
#endregion

#region common operations content
// flag listing
$l['flags'] = 'Özel Seçenekler';
$l['flag_value'] = '{1}: {2}';
$l['flag_development_mode'] = 'Geliştirme modu';
$l['flag_no_discovery'] = 'Veritabanı önerisi yok';
$l['flag_force'] = 'Güncellemeyi zorla';
$l['flag_fast'] = 'Geliştirme modu ve varsayılanları kullan';

// installation state
$l['installation_state'] = 'Mevcut Durum';
$l['installation_state_none'] = 'Yüklenmedi';
$l['installation_state_none_description'] = 'Yüklü bir MyBB forumu tespit edilmedi.';
$l['installation_state_configuration_file'] = '<abbr title="inc/config.php">Yapılandırma dosyası</abbr> ile çalışan veritabanı bağlantısı yok';
$l['installation_state_configuration_file_description'] = 'Bir <abbr title="inc/config.php">Yapılandırma dosyası</abbr> mevcut, ancak çalışan bir veritabanı bağlantısı kurulamadı.';
$l['installation_state_database_connection'] = '<abbr title="inc/config.php">Yapılandırma dosyası</abbr> ile geçerli veritabanı kimlik bilgileri, veritabanında veri yok';
$l['installation_state_database_connection_description'] = 'Geçerli veritabanı kimlik bilgilerine sahip bir <abbr title="inc/config.php">Yapılandırma dosyası</abbr> mevcut, ancak veritabanında veri bulunamadı.';
$l['installation_state_installed'] = '{1} veya daha yeni sürüm yüklendi';
#endregion

#region data seeding
$l['board_name_default'] = 'MyBB';
$l['welcome_thread_username'] = 'MyBB Bot';
$l['welcome_thread_subject'] = 'MyBB\'ye Hoş Geldiniz!';
$l['welcome_thread_message'] = 'Forumunuz başarıyla kuruldu.

MyBB destek kaynaklarına, belgelere erişmek, sorunları gidermek veya geri bildirimde bulunmak için lütfen [url=https://mybb.com/support/]mybb.com/support[/url] adresini ziyaret edin.

Kullanıcılar, web yöneticileri, eklenti yazarları ve geliştiricilerden oluşan MyBB Topluluğunun bir parçası olmanız için sizi [url=https://community.mybb.com]Topluluk Forumları[/url]na katılmaya davet ediyoruz.

Teşekkürler,
MyBB Ekibi[color=#ffffff]. [i]Ücretsiz olmak hiç bu kadar güzel olmamıştı.[/i][/color]
';
$l['welcome_thread_message_devmode'] = 'MyBB {2}, {3} tarihinde geliştirme modunda [i]{4}[/i] ile [i]{5}[/i] kullanılarak kuruldu.

[list]
[*][url={1}?process=install][color=#007AC8][b]Yeniden Kur[/b][/color][/url]
[*][url={1}?process=install&dev][color=#007AC8][b]Yeniden Kur[/b] (geliştirme modunda)[/color][/url]
[*][url={1}?process=install&fast][color=#007AC8][b]Hızlı Yeniden Kur[/b] (geliştirme modu ve varsayılanları kullan)[/color][/url]
[/list]
[list]
[*][url={1}?process=upgrade][color=#218463][b]Yükselt[/b][/color][/url]
[*][url={1}?process=upgrade&dev][color=#218463][b]Yükselt[/b] (geliştirme modunda)[/color][/url]
[*][url={1}?process=upgrade&fast][color=#218463][b]Hızlı Yükselt[/b] (geliştirme modu ve varsayılanları kullan)[/color][/url]
[/list]';
#endregion

#region miscellaneous
$l['task_versioncheck_ran'] = 'Sürüm kontrol görevi başarıyla çalıştı.';
$l['task_versioncheck_ran_errors'] = "Sürüm kontrolü için MyBB\'ye bağlanılamadı.";
$l['na'] = 'N/A';
#endregion

#region Process Model: install
// general
$l['install_page_title'] = 'MyBB Kurulumu';
$l['install_header_title'] = 'Kurulum';

// steps
$l['install_step_start_title'] = 'Başlangıç';
$l['install_step_database_title'] = 'Veritabanı';
$l['install_step_settings_title'] = 'Ayarlar';
$l['install_step_account_title'] = 'Hesabım';

// step pages
$l['install_step_start_heading'] = 'Yeni Forum Kur';
$l['install_step_start_heading_reinstall'] = 'Forumu Yeniden Kur';
$l['install_step_start_description'] = 'MyBB kurulumuna hoş geldiniz. Bu işlem sırasında forum yazılımı sunucunuza kurulacaktır.';
$l['install_step_start_description_reinstall'] = 'MyBB kurulumuna hoş geldiniz. Bu işlem sırasında forum yazılımı sunucunuza yeniden kurulacak ve mevcut forum üzerine yazılacaktır. Yeni bir forum oluşturulacak — mevcut konular, mesajlar, kullanıcılar ve diğer bilgiler silinecektir (<a href="./index.php?process=upgrade"><strong>yerine yükseltme yap?</strong></a>?).';
$l['install_step_start_description_reinstall_cli'] = 'MyBB kurulumuna hoş geldiniz. Bu işlem sırasında forum yazılımı sunucunuza yeniden kurulacak ve mevcut forum üzerine yazılacaktır. Yeni bir forum oluşturulacak ve mevcut konular, mesajlar, kullanıcılar ve diğer bilgiler silinecektir.';
$l['install_step_database_heading'] = 'Veritabanına Bağlan';
$l['install_step_database_instructions'] = 'Forum içeriğinin saklanacağı veritabanı için bağlantı bilgilerini sağlayın. Bu bilgileri bilmiyorsanız, genellikle web barındırıcınızdan alınabilir veya barındırma kontrol panelinizde bir veritabanı oluşturulabilir.';

$l['install_step_settings_heading'] = 'Forum Ayarlarını Yapılandır';
$l['install_step_settings_instructions'] = 'Yeni forumunuz için temel ayarları yapılandırın ve gözden geçirin. Bunlar daha sonra kolayca değiştirilebilir.';

$l['install_step_account_heading'] = 'Yönetici Hesabı Oluştur';
$l['install_step_account_instructions'] = 'Yönetici yetkilerine sahip hesabınız için giriş bilgilerini ayarlayın.';

// operations
$l['operation_requirements_check_title'] = 'Gereksinim Kontrolü';
$l['operation_file_verification_title'] = 'Dosya Doğrulama';
$l['operation_statistics_title'] = 'İstatistikler';
$l['operation_configuration_file_title'] = 'Yapılandırma Dosyası';
$l['operation_database_structure_title'] = 'Veritabanı Yapısı';
$l['operation_database_population_title'] = 'Veritabanı Doldurma';
$l['operation_board_settings_title'] = 'Forum Ayarları';
$l['operation_user_account_title'] = 'Kullanıcı Hesabı';
$l['operation_build_cache_title'] = 'Önbellek Oluşturma';
$l['operation_lock_title'] = 'Kurulum Kilidi';
$l['operation_requirements_check_error_title'] = 'Bazı gereksinimler karşılanmadı';

// parameters
$l['parameter_send_specifications_title'] = 'Tek seferlik anonim istatistikleri sunucu özellikleri ile birlikte göndererek MyBB\'yi geliştirmeye yardımcı olun <a href="https://docs.mybb.com/1.8/install/anonymous-statistics/" target="_blank" rel="noreferrer" title="More information on MyBB.com" class="information"><i class="fas fa-info-circle"></i></a>';

$l['parameter_db_engine_title'] = 'Veritabanı Motoru';
$l['parameter_db_host_title'] = 'Veritabanı Sunucusu';
$l['parameter_db_user_title'] = 'Veritabanı Kullanıcı Adı';
$l['parameter_db_password_title'] = 'Veritabanı Parolası';
$l['parameter_db_name_title'] = 'Veritabanı Adı';
$l['parameter_db_path_title'] = 'Veritabanı Yolu';
$l['parameter_db_table_prefix_title'] = 'Tablo Öneki';

$l['parameter_bbname_title'] = 'Forum Adı';
$l['parameter_bbname_value'] = 'Forumlar';
$l['parameter_bburl_title'] = 'Forum URL\'si';
$l['parameter_adminemail_title'] = 'Yönetici E-posta Adresi';
$l['parameter_adminemail_description'] = 'Giden e-postalar ve iletişim formu için kullanılır.';
$l['parameter_cookiedomain_title'] = 'Çerez Alanı';
$l['parameter_cookiepath_title'] = 'Çerez Yolu';
$l['parameter_acp_pin_title'] = 'Yönetici Kontrol Paneli PIN\'i';
$l['parameter_acp_pin_description'] = 'Bireysel hesap parolalarına ek olarak, Yönetici Kontrol Paneline giriş için gereken isteğe bağlı bir koddur.';

$l['parameter_account_username_title'] = 'Kullanıcı Adı';
$l['parameter_account_email_title'] = 'E-posta Adresi';
$l['parameter_account_password_title'] = 'Parola';

// parameter notes
$l['deferred_default_parameter_note_db_host'] = 'Çalışan sunucu keşfedildi';
$l['deferred_default_parameter_note_db_user'] = 'Kabul edilen kimlik bilgileri keşfedildi';
$l['deferred_default_parameter_note_db_name'] = 'Erişilebilir veritabanı keşfedildi';

// parameter feedback
$l['parameter_feedback_settings_bburl_loopback'] = 'Loopback adresi diğer cihazlarda kullanılamayabilir';

$l['parameter_feedback_database_check_server_success'] = 'Bağlanabiliyor';
$l['parameter_feedback_database_check_server_error'] = 'Bağlanamıyor';
$l['parameter_feedback_database_check_authentication_success'] = 'Kimlik doğrulaması başarılı';
$l['parameter_feedback_database_check_authentication_error'] = 'Kimlik doğrulaması başarısız';
$l['parameter_feedback_database_check_database_success'] = 'Veritabanı kullanılabilir';
$l['parameter_feedback_database_check_database_error'] = 'Veritabanı kullanılamıyor';
$l['parameter_feedback_database_check_prefix_tables_success'] = 'Bu önekle mevcut tablo yok';
$l['parameter_feedback_database_check_prefix_tables_warning'] = '{1} mevcut tablo bu önekle üzerine yazılacak';

// operations content
$l['version_to_be_installed'] = 'Yüklenecek Sürüm';

$l['php_version_incompatible'] = ' PHP {1} veya daha yenisi gereklidir (şu anda sürüm {2} kullanılıyor)';
$l['no_multi_byte_extensions'] = 'Çok baytlı destek için PHP uzantısı yok (<code>mbstring</code>, <code>iconv</code>) ';
$l['no_database_drivers'] = 'Kullanılabilir veritabanı motoru sürücüsü yok (MySQL, PostgreSQL, SQLite)';
$l['no_xml_support'] = 'XML desteği için PHP uzantısı yok (<code>xml</code>)';
$l['directory_not_writable'] = '<code>{1}</code> dizini yazılabilir değil. Lütfen yazılabilir olması için <a href="https://docs.mybb.com/1.8/administration/security/file-permissions" target="_blank" rel="noreferrer">izinleri ayarlayın</a>.';
$l['file_not_writable'] = '<code>{1}</code> dosyası yazılabilir değil. Lütfen yazılabilir olması için <a href="https://docs.mybb.com/1.8/administration/security/file-permissions" target="_blank" rel="noreferrer">izinleri ayarlayın</a>.';
$l['lock_file_not_writable'] = '<code>{1}</code> kilit dosyası oluşturulamadı. Lütfen forumunuza devam etmeden önce kurulum dizinini kaldırın.';

$l['file_verification_checksums_missing'] = 'Dosyalar doğrulanamadı çünkü <code>{1}</code> dosyası eksik. Dosyayı <a href="https://mybb.com/download" target="_blank" rel="noreferrer">orijinal MyBB paketinden</a> indirebilirsiniz. Bu dosya sadece geliştirme sürümlerinde bulunmayabilir.';
$l['file_verification_failed'] = 'Aşağıdaki dosyalar ({1}) bozuk olabilir. Devam etmeden önce bunları <a href="https://mybb.com/download" target="_blank">orijinal paketten</a> tekrar kopyalamalısınız.';
$l['file_verification_changed'] = 'Değiştirildi: {1}';
$l['file_verification_missing'] = 'Eksik: {1}';

$l['could_not_write_configuration_file'] = 'Yapılandırma dosyasına veri yazılamadı.';
$l['could_not_connect_to_database'] = 'Kaydedilen parametreler kullanılarak veritabanına bağlanılamadı.';
$l['database_parameter_check_failed'] = 'Sağlanan parametreler kullanılarak veritabanına bağlanılamadı.';
$l['configuration_file_not_installed'] = 'Yüklü yapılandırma dosyası bulunamadı.';
#endregion

#region Process Model: upgrade
// general
$l['upgrade_page_title'] = 'MyBB Yükseltmesi';
$l['upgrade_header_title'] = 'Yükseltme';

// steps
$l['upgrade_step_start_title'] = 'Başlat';
$l['upgrade_step_migration_title'] = 'Veri Taşıma';
$l['upgrade_step_rebuilding_title'] = 'Yeniden Oluşturma';

// step pages
$l['upgrade_step_start_heading'] = 'MyBB Yazılımını Yükselt';
$l['upgrade_step_start_description'] = 'MyBB yükseltmesine hoş geldiniz. Bu işlem, forumu yeni yazılım sürümünü kullanacak şekilde güncelleyecektir.<br><br>Yükseltmeden önce veritabanınızın ve dosyalarınızın yedeğini oluşturmanızı ve doğrulamanızı şiddetle tavsiye ederiz.';
$l['upgrade_step_start_description_link'] = 'MyBB yükseltmesine hoş geldiniz. Bu işlem, forumu yeni yazılım sürümünü kullanacak şekilde güncelleyecektir (<a href="./index.php?process=install"><strong>yerine yeniden yükleme</strong></a>?).<br><br>Yükseltmeden önce veritabanınızın ve dosyalarınızın yedeğini oluşturmanızı ve doğrulamanızı şiddetle tavsiye ederiz.';

$l['upgrade_step_migration_heading'] = 'Veri Taşıma';
$l['upgrade_step_migration_description'] = 'Uygulanabilir yükseltme betikleri şimdi yürütülecektir.';

$l['upgrade_step_rebuilding_heading'] = 'Bilgi Yeniden Oluşturma';
$l['upgrade_step_rebuilding_description'] = 'Ortak bilgiler ve önbellekler yeniden oluşturulacaktır.';

// operations
$l['operation_upgrade_plan_title'] = 'Yükseltme Planlaması';
$l['operation_update_settings_title'] = 'Ayarların Yeniden Oluşturulması';

// parameters
$l['parameter_upgrade_start_title'] = 'Başlangıç Sürüm Numarası';
$l['parameter_upgrade_start_description'] = 'Seçilen yükseltme ve daha yüksek sürümlere sahip tüm yükseltmeler uygulanacaktır.';

// operations content
$l['upgrade_version_to_be_installed'] = 'Yükseltme Sonrası Sürüm';
$l['upgrades_to_apply'] = 'Uygulanacak Yükseltmeler';
$l['upgrade_to_apply'] = '#{1} (sürüm {2}\'den)';
