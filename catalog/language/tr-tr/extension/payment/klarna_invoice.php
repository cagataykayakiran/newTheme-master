<?php
/* Turkceye Ceviren Dataçarışı Yazılım - https://www.datacarsi.com */

// Text
$_['text_title']          = 'Klarna Invoice - Pay within 14 days';
$_['text_terms_fee']      = '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']   = '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']      = 'Klarna Hesabı, siparişinizi işleme koymadan önce bazı ek bilgilere ihtiyaç duyar.';
$_['text_male']            = 'Erkek';
$_['text_female']          = 'Kadın';
$_['text_year']            = 'Yıl';
$_['text_month']           = 'Ay';
$_['text_day']             = 'Gün';
$_['text_comment']        = 'Klarna\'s Invoice ID: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']         = 'Cinsiyet';
$_['entry_pno']            = 'Birey Numarası';
$_['entry_dob']            = 'Doğum Tarihi';
$_['entry_phone_no']       = 'Telefon Numarası';
$_['entry_street']         = 'Sokak';
$_['entry_house_no']       = 'Ev No';
$_['entry_house_ext']      = 'Ev Uzantısı';
$_['entry_company']        = 'Şirket Kayıt Numarası';

// Help
$_['help_pno']             = 'Lütfen sosyal güvenlik numaranızı buraya giriniz.';
$_['help_phone_no']        = 'Lütfen telefon numaranızı giriniz';
$_['help_street']          = 'Teslimatın yalnızca Klarna ile ödeme yapıldığında kayıtlı adrese yapılabileceğini unutmayın';
$_['help_house_no']        = 'Lütfen ev numaranızı giriniz.';
$_['help_house_ext']       = 'Lütfen ev uzantınızı buraya gönderin. E.g. A, B, C, Red, Blue ect.';
$_['help_company']         = 'Lütfen firmanızı giriniz\'s kayıt numarası';

// Error
$_['error_deu_terms']      = 'Klarna kabul etmelisin \'s gizlilik politikası (Datenschutz)';
$_['error_address_match']  = 'Klarna Payments kullanmak istiyorsanız fatura ve gönderim adresi eşleşmelidir.';
$_['error_network']        = 'Klarna bağlanırken bir hata oluştu. Lütfen daha sonra tekrar deneyiniz.';