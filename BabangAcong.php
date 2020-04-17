<? php
date_default_timezone_set ( 'Asia / Jakarta' );
termasuk  "function.php" ;
 warna gema ( "hijau" , "# # # # # # # # # # # # # # # # # # # # # \ n" );
 warna gema ( "kuning" , "[•] Waktu:" . date ( '[dmY] [H: i: s]' ). "\ n" );
 warna gema ( "kuning" , "[•] proses menunggu ..... \ n" );
 warna gema ( "kuning" , "[•] cara menulis nomor pakai 62xxxxxxxxxx \ n" );
 warna gema ( "hijau" , "# # # # # # # # # # # # # # # # # # # # # \ n" );
 perubahan fungsi () {
        $ nama = nama ();
        $ email = str_replace ( "" , "" , $ nama ). mt_rand ( 100 , 999 );
        ulang:
         warna gema ( "nevy" , "(•) Nomor:" );
        $ no = trim ( fgets ( STDIN ));
        $ data = '{"email": "' . $ email . '@ gmail.com", "name": "' . $ nama . '", "phone": "+' . $ no . '", " signed_up_country ":" ID "} ' ;
        $ register = request ( "/ v5 / customers" , null , $ data );
        if ( strpos ( $ register , '"otp_token"' )) {
        $ otptoken = getStr ( '"otp_token": "' , '"' , $ register );
         warna gema ( "hijau" , "+] Kode verifikasi sudah di kirim" ). "\ n" ;
        otp:
         warna gema ( "nevy" , "?] Otp:" );
        $ otp = trim ( fgets ( STDIN ));
        $ data1 = '{"client_name": "gojek: cons: android", "data": {"otp": "' . $ otp . '", "otp_token": "' . $ otptoken . '"}, " client_secret ":" 83415d06-ec4e-11e6-a41b-6c40088ab51e "} ' ;
        $ verif = permintaan ( "/ v5 / pelanggan / telepon / verifikasi" , null , $ data1 );
        if ( strpos ( $ verif , '"access_token"' )) {
         warna gema ( "hijau" , "+] Berhasil mendaftar" );
        $ token = getStr ( '"access_token": "' , '"' , $ verif );
        $ uuid = getStr ( '"resource_owner_id":' , ',' , $ verif );
        gema  "\ n" . warna ( "kuning" , "+] Token akses Anda:" . $ token . "\ n \ n" );
        save ( "token.txt" , $ token );
        gema  "\ n" . color ( "nevy" , "?] Mau Redeem Voucher ?: y / n" );
        $ pilihan = trim ( fgets ( STDIN ));
        if ( $ pilihan == "y" || $ pilihan == "Y" ) {
         warna gema ( "merah" , "=========== (REDEEM VOUCHER) ===========" );
        gema  "\ n" . color ( "yellow" , "!] Klaim voc GOFOOD 15 + 10 + 5" );
        gema  "\ n" . warna ( "kuning" , "!] Harap tunggu" );
        untuk ( $ a = 1 ; $ a <= 3 ; $ a ++) {
         warna gema ( "kuning" , "." );
        tidur ( 3 );
        }
        $ code1 = permintaan ( '/ promosi-pergi / v1 / promosi / pendaftaran' , $ token , '{"promo_code": "COBAGOFOOD160420A"}' );
        $ message = fetch_value ( $ code1 , '"message": "' , '"' );
        if ( strpos ( $ code1 , 'Promo kamu sudah bisa dipakai' )) {
        gema  "\ n" . color ( "green" , "+] Pesan:" . $ message );
        goto gocar;
        } lain {
        gema  "\ n" . color ( "red" , "-] Pesan:" . $ message );
        gocar:
        gema  "\ n" . color ( "yellow" , "!] Klaim voc GOFOOD 10 + 10 + 10" );
        gema  "\ n" . warna ( "kuning" , "!] Harap tunggu" );
        untuk ( $ a = 1 ; $ a <= 3 ; $ a ++) {
         warna gema ( "kuning" , "." );
        tidur ( 20 );
        }
        $ code1 = permintaan ( '/ promosi-pergi / v1 / promosi / pendaftaran' , $ token , '{"promo_code": "COBAGOFOOD160420B"}' );
        $ message = fetch_value ( $ code1 , '"message": "' , '"' );
        if ( strpos ( $ code1 , 'Promo kamu sudah bisa dipakai' )) {
        gema  "\ n" . color ( "green" , "+] Pesan:" . $ message );
        goto gofood;
        } lain {
        gema  "\ n" . color ( "red" , "-] Pesan:" . $ message );
        reff:
        $ data = '{"referral_code": "G-75SR565"}' ;    
        $ klaim = permintaan ( "/ customer_referrals / v1 / kampanye / pendaftaran" , $ token , $ data );
        $ message = fetch_value ( $ klaim , '"message": "' , '"' );
        if ( strpos ( $ claim , 'Promo kamu sudah bisa dipakai' )) {
        gema  "\ n" . color ( "green" , "+] Pesan:" . $ message );
        goto gofood;
        } lain {
        gema  "\ n" . color ( "red" , "-] Pesan:" . $ message );
        }
        gofood:
        gema  "\ n" . color ( "yellow" , "!] Klaim voc GOCAR pot 14K" );
        gema  "\ n" . warna ( "kuning" , "!] Harap tunggu" );
        untuk ( $ a = 1 ; $ a <= 3 ; $ a ++) {
         warna gema ( "kuning" , "." );
        tidur ( 3 );
        }
        $ code1 = permintaan ( '/ pergi-promosi / v1 / promosi / pendaftaran' , $ token , '{"promo_code": "COBAGOCAR14"}' );
        $ message = fetch_value ( $ code1 , '"message": "' , '"' );
        if ( strpos ( $ code1 , 'Promo kamu sudah bisa dipakai' )) {
        gema  "\ n" . color ( "green" , "+] Pesan:" . $ message );
        tidur ( 1 );
        tidur ( 3 );
        $ cekvoucher = request ( '/ gopoints / v3 / wallet / voucher? limit = 10 & halaman = 1' , $ token );
        $ total = fetch_value ( $ cekvoucher , '"total_vouchers":' , ',' );
        $ voucher3 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "3" );
        $ voucher1 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "1" );
        $ voucher2 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "2" );
        $ voucher4 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "4" );
        $ voucher5 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "5" );
        $ voucher6 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "6" );
        gema  "\ n" . color ( "yellow" , "!] Total voucher" . $ total . ":" );
         warna gema ( "hijau" , "1." . $ voucher1 );
        gema  "\ n" . warna ( "hijau" , "2." . $ voucher2 );
        gema  "\ n" . warna ( "hijau" , "3." . $ voucher3 );
        gema  "\ n" . warna ( "hijau" , "4." . $ voucher4 );
        gema  "\ n" . warna ( "hijau" , "5." . $ voucher5 );
        gema  "\ n" . warna ( "hijau" , "6." . $ voucher6 );
        $ expired1 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '1' );
        $ expired2 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '2' );
        $ expired3 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '3' );
        $ expired4 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '4' );
        $ expired5 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '5' );
        $ expired6 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '6' );
         Setpin:
         gema  "\ n" . warna ( "nevy" , "?] Mau mengatur pin ?: y / n" );
         $ pilih1 = trim ( fgets ( STDIN ));
         if ( $ pilih1 == "y" || $ pilih1 == "Y" ) {
         // if ($ pilih1 == "y" && strpos ($ no, "628")) {
          warna gema ( "merah" , "======== (PIN ANDA = KEPO DEHH ....) ========" ). "\ n" ;
         $ data2 = '{"pin": "192211"}' ;
         $ getotpsetpin = request ( "/ wallet / pin" , $ token , $ data2 , null , null , $ uuid );
         gema  "Otp set pin:" ;
         $ otpsetpin = trim ( fgets ( STDIN ));
         $ verifotpsetpin = request ( "/ wallet / pin" , $ token , $ data2 , null , $ otpsetpin , $ uuid );
         echo  $ verifotpsetpin ;
         } lain  jika ( $ pilih1 == "n" || $ pilih1 == "N" ) {
         mati ();
         } lain {
          warna gema ( "merah" , "-] GAGAL !!! \ n" );
         }
         }
         }
         }
         } lain {
         goto setpin;
         }
         } lain {
          warna gema ( "merah" , "-] Otp yang Anda masukan salah" );
         echo "\ n ================================== \ n \ n" ;
          warna gema ( "kuning" , "!] Silakan masukan kembali \ n" );
         pergi otp;
         }
         } lain {
          warna gema ( "merah" , "NOMOR SUDAH TERDAFTAR / SALAH !!!" );
         echo  "\ nMau ulang? (y / n):" ;
         $ pilih = trim ( fgets ( STDIN ));
         if ( $ pilih == "y" || $ pilih == "Y" ) {
         echo  "\ n ============== Mendaftar ============== \ n" ;
         goto ulang;
         } lain {
         echo  "\ n ============== Mendaftar ============== \ n" ;
         goto ulang;
  }
 }
}
 perubahan gema (). "\ n" ; ?>
