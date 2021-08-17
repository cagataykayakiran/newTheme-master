<?php
// Text
$_['text_new_card']                     = '+ Yeni kart ekle';
$_['text_loading']                      = 'Yükleniyor... Lütfen Bekleyin...';
$_['text_card_details']                 = 'Kart Detayları';
$_['text_saved_card']                   = 'Kayıtlı Kartı Kullan:';
$_['text_card_ends_in']                 = 'Mevut ile öde %s sonu biten kart XXXX XXXX XXXX %s';
$_['text_card_number']                  = 'Kart Numarası:';
$_['text_card_expiry']                  = 'Kart Son Kullanma Tarihi (MM/YY):';
$_['text_card_cvc']                     = 'Kart Güvenlik Kodu (CVC):';
$_['text_card_zip']                     = 'Kart Posta Kodu';
$_['text_card_save']                    = 'Gelecekte kullanmak üzere kaydedilsin mi ?';
$_['text_trial']                        = '%s tüm %s %s için %s ödemeler ';
$_['text_recurring']                    = '%s her %s %s';
$_['text_length']                       = ' %s ödemeler için';
$_['text_cron_subject']                 = 'Square CRON iş özeti';
$_['text_cron_message']                 = 'Square uzantınız tarafından gerçekleştirilen tüm CRON görevlerinin listesi:';
$_['text_squareup_profile_suspended']   = 'Yinelenen ödemeleriniz askıya alındı. Daha fazla bilgi için lütfen bizimle iletişime geçin.';
$_['text_squareup_trial_expired']       = ' Deneme süreniz sona erdi.';
$_['text_squareup_recurring_expired']   = ' Yinelenen ödemelerinizin süresi doldu. Bu senin son ödemendi.';
$_['text_cron_summary_token_heading']   = 'Erişim belirtecinin yenilenmesi:';
$_['text_cron_summary_token_updated']   = 'Erişim belirteci başarıyla güncellendi!';
$_['text_cron_summary_error_heading']   = 'İşlem Hataları:';
$_['text_cron_summary_fail_heading']    = 'Başarısız İşlemler(Profiller Askıya Alındı):';
$_['text_cron_summary_success_heading'] = 'Başarılı İşlemler:';
$_['text_cron_fail_charge']             = 'Profile <strong>#%s</strong> could not get charged with <strong>%s</strong>';
$_['text_cron_success_charge']          = 'Profile <strong>#%s</strong> was charged with <strong>%s</strong>';
$_['text_card_placeholder']             = 'XXXX XXXX XXXX XXXX';
$_['text_cvv']                          = 'CVV';
$_['text_expiry']                       = 'MM/YY';
$_['text_default_squareup_name']        = 'Kredi / Banka Kartı:';
$_['text_token_issue_customer_error']   = 'Ödeme sistemimizde teknik bir kesinti yaşıyoruz. Lütfen daha sonra tekrar deneyiniz.';
$_['text_token_revoked_subject']        = 'Square erişim jetonunuz iptal edildi!';
$_['text_token_revoked_message']        = "Square hesabınızda Square ödeme uzantıları erişimi, Square Dashboard üzerinden iptal edildi. Uzantı ayarlarında uygulama kimlik bilgilerinizi doğrulamanız ve tekrar bağlammanız gerekir.";
$_['text_token_expired_subject']        = 'Suare erişim jetonunuzun süresi doldu!';
$_['text_token_expired_message']        = "Onu Square hesabınıza bağlayan Square ödeme uzantıları erişim belirtecinin süresi doldu. Uzantı ayarlarında uygulama kimlik bilgilerinizi ve CORN işinizi doğrulamanız ve tekrar bağlanmanız gerekir.";

// Error
$_['error_browser_not_supported']       = 'Hata: Ödeme sistemi artık web tarayıcınızı desteklemiyor. Lütfen güncelleyin veya farklı bir tane kullanın.';
$_['error_card_invalid']                = 'Hata: Kart geçersiz!';
$_['error_squareup_cron_token']         = 'Hata: Erişim belirteci yenilenemedi. Lütfen Square Ödeme uzantınızı OpenCart yönetici paneli aracılığı ile bağlayın.';

// Warning
$_['warning_test_mode']                 = 'Uyarı: Sandbox modu etkinleştirildi! İşlemler tamamlanmış gibi görünecek, ancak herhangi bir ücret alınmayacaktır.';

// Statuses
$_['squareup_status_comment_authorized']    = 'Kart işlemine izin verildi ancak henüz kaydedilmedi.';
$_['squareup_status_comment_captured']      = 'Kart işlemi yetkilendirildi ve ardından yakalandı (i.e., tamamlandı).';
$_['squareup_status_comment_voided']        = 'Kart işlemi yetkilendirildi ve ardından iptal edildi (i.e., iptal edildi).   ';
$_['squareup_status_comment_failed']        = 'Kart işlemi başarısız oldu.';

// Override errors
$_['squareup_override_error_billing_address.country']       = 'Ödeme adresi ülkesi geçerli değil. Lütfen düzenle ve tekra dene.';
$_['squareup_override_error_shipping_address.country']      = 'Sevkiyat adresi ülkesi geçerli değil. Lütfen düzenle ve tekra dene.';
$_['squareup_override_error_email_address']                 = 'Müşteri e-posta adresi geçerli değil. Lütfen düzenle ve tekrar dene.';
$_['squareup_override_error_phone_number']                  = 'Müşteri telefon numarası geçerli değil. Lütfen düzenle ve tekrar dene';
$_['squareup_error_field']                                  = ' Alan: %s';