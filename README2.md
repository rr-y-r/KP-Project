# KP-Project
information system using PHP, with codeigniter as framework

tipe user ada 2 :

user1
	username : user1
	password : user1
	
	user1 memiliki privileges lebih seperti wewenang untuk memanipulasi data (bertindak sebagai admin dalam sistem informasi)
	
user2
	username : user2
	password : user2
	
	user2 memiliki privileges layaknya guest
	
	
installasi

requirement
1. XAMPP
2. Web Browser

step by step
1. buka folder installasi XAMPP, kemudian buka folder apache2 -> htdocs 
	(contoh : XAMPP\htdocs\)
2. buat folder baru bernama telkomsel, dan letakan semua file hasil download didalamnya
	(contoh: XAMPP\htdocs\telkomsel
									\:application
									 :assets
									 :system
									 :user_guide
									 :..)
3. buat tabel database baru dengan nama telkomsel, kemudian pada database telkomsel, klik tab import, dan import file bernama "telkomsel.sql"
	yang dapat ditemui pada folder "telkomsel"
	
4. Ubah konfigurasi file PHP pada XAMPP\php\php.ini pada line 226 pada kode "short_open_tag=Off" menjadi "short_open_tag=ON"
	
5. masukan url berikut dalam browser untuk mengakses aplikasi 
	url : http://localhost/telkomsel/index.php/login
