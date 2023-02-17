# **SIAKAD - KELOMPOK 2 - SI**: Membuat Sistem Informasi Akademik.

**Anggota Kelompok 2:**

- Hendri
- Widi
- Hariawan
- Farouk

## **Dibutuhkan:**

**Software**

- [VSCode Setup Lastest Version](https://code.visualstudio.com/sha/download?build=stable&os=win32-x64-user)
- [XAMPP Setup Lastest Version](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.0/xampp-windows-x64-8.2.0-0-VS16-installer.exe)
- [Composer Setup Lastest Version](https://getcomposer.org/Composer-Setup.exe)

### **Konfigurasi: XAMPP**

- Download XAMPP, dan Composer melalui link yang disediakan.
- Install XAMPP.
- Download file pada repository ini.
- Extract to Share Xampp on LAN by HK 'Share Xampp on LAN by HK.rar'
- buka file './hosts/host dengan notepad'.

#### -- Ubah Pengaturan Hosts Default --

- Pergi ke direktori host sistem operasi anda (C:\Windows\System32\drivers\etc\).
- Klik tab 'view' pada jendela windows explorer
- Pilih 'Folder Options -> Tab View', dan uncheck 'show hidden files'.
- Lalu akan muncul file konfigurasi default (bawaan) sistem operasi anda. Silahkan buka file tersebut dengan notepad.
- Tambahkan :

```
    127.0.0.1 localhost
    127.0.0.1 192.168.1.8	#Wifi (cek menggunakan ipconfig dicmd, ipv4 address)
    127.0.0.1 192.168.163.219	#Phone Theter (cek menggunakan ipconfig dicmd, ipv4 address)
```

- Save.

#### -- Ubah pengaturan Apache Default (httpd.conf) --

- Kembali ke hasil extract tadi, buka folder './apache/conf'.
- Pergi ke lokasi anda meng-install xampp, Pergi ke lokasi konfigurasi apache (xampp\apache\conf). Buka file httpd.conf dengan notepad.
- Hilangkan tanda '#' pada baris yang berisikan 'httpd-vhosts.conf'.

```
    # Virtual hosts
    Include conf/extra/httpd-vhosts.conf
```

- Save

#### -- Ubah pengaturan Xampp Default (httpd-xampp.conf) --

- Kembali ke hasil extract tadi, buka folder './apache/conf/extra'. Buka file 'httpd-xampp.conf' dengan notepad.
- Tambahkan :

```
    Require all granted
```

Pada bagian konfigurasi :

- Alias /licenses "H:/xampp/licenses/"
- Alias /phpmyadmin "H:/xampp/phpMyAdmin/"
- Alias /webalizer "H:/xampp/webalizer/"
  Contoh penempatan:

```
    </IfModule>
    	Require all granted
```

- Save.

#### -- Ubah pengaturan Apache Default (httpd-vhosts.conf) --

- Kembali ke hasil extract tadi, buka folder './apache/conf/extra'. Buka file 'httpd-vhosts.conf' dengan notepad.
- Tambahkan :

```
## VIRTUAL HOST HTTP CONFIG FOR PROJECT 1 - website1 http
<VirtualHost localhost:80>
	ServerAdmin webmaster@website1.com
	DocumentRoot "H:/xampp/htdocs/"
	ServerName localhost
	ServerAlias www.localhost
	ErrorLog "logs/localhost-error.log"
	CustomLog "logs/localhost-access.log" common
	<Directory "H:/xampp/htdocs/">
		AllowOverride All
		Order allow,deny
		Allow from all
	</Directory>
</VirtualHost>


##VIRTUAL HOST HTTPS CONFIG FOR PROJECT 1 - website1 https
<VirtualHost localhost:80>
	ServerAdmin webmaster@localhost.com
	DocumentRoot "H:/xampp/htdocs/"
	ServerName localhost
	ServerAlias www.localhost
	SSLEngine On
	SSLCertificateFile "H:/xampp/apache/conf/ssl.crt/server.crt"
	SSLCertificateKeyFile "H:/xampp/apache/conf/ssl.key/server.key"
	ErrorLog "logs/localhost-error.log"
	CustomLog "logs/localhost-access.log" common
	<Directory "H:/xampp/htdocs/">
		AllowOverride All
		Order allow,deny
		Allow from all
	</Directory>
</VirtualHost>
```

- Save.

#### -- Ubah pengaturan Php Default (php.ini) --

- Pergi ke direktori php yang ada pada lokasi anda menginstall XAMPP (xampp\php\php.ini)
- Hilangkan tanda '#' pada baris yang berisikan '#extension=intl'.

```
    extension=intl
```
- Perhatikan bagian ini --> H:/xampp/htdocs/ , ubah sesuai direktori lokasi htdocs anda.
- Save.

### **Konfigurasi: CodeIgniter 'htdocs'**

- Pergi ke direktori xampp/htdocs/
- Hapus semua isi folder yang ada pada, xampp/htdocs/
- Download/ Git Clone semua file pada repository ini.

### **Konfigurasi: CodeIgniter '.env'**

- Pergi ke direktori xampp/htdocs/
- Buka file '.env' dengan menggunakan notepad (Perhatian!!! Jangan salah ubah!!!), ubah bagian 'app.baseURL' seperti ini:

```
    app.baseURL = 'http://192.168.163.219'
```

Catatan:

- baseUrl merupakan ip anda yang diperiksa dengan menggunakan cmd.

```
    Microsoft Windows [Version 10.0.18363.1679]
    (c) 2019 Microsoft Corporation. All rights reserved.
    C:\Users\Administrator>ipconfig

Wireless LAN adapter Wi-Fi:
   Connection-specific DNS Suffix  . :
   Link-local IPv6 Address . . . . . : fe80::3169:517a:a5af:17ba%9
   IPv4 Address. . . . . . . . . . . : 192.168.163.219  <--- Ini
```

### **Konfigurasi: CodeIgniter '.env ==> Database'**

- Jangan lupa, pengaturan database nya (1 file dengan file .env).

```
#--------------------------------------------------------------------
# DATABASE
#--------------------------------------------------------------------

database.default.hostname = localhost
database.default.database = siakad
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.DBPrefix =
database.default.port = 3306			#sesuaikan pd port xampp
```

### **Konfigurasi: phpMyAdmin 'htpp://localhost/phpMyAdmin'**

- Pilih tabmenu 'Import' > Pilih file 'Choose file',
- Arahkan ke file '127_0_0_1.sql', klik 'Import'.
- Apabila tidak bisa melakukan import langsung/error, buat database secara manual (siakad) buka file '127_0_0_1.sql' di notepad dan copy bagian table nya saja.


### **Konfigurasi: Composer**

- Install Composer.
- Pilih lokasi php yang ingin dikaitkan dengan composer ('xampp\php\php.ini').
- Install.
