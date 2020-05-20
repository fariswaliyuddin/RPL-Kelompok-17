# ![logo](https://user-images.githubusercontent.com/60166714/82419794-0a3ad600-9aa9-11ea-8b20-ae7b999f3e42.PNG)
Greentips! adalah web yang menyediakan layanan seputar tips kesehatan setiap harinya. Web ini dibuat oleh kelompok 17 beranggotakan :

  - Muhammad Faris Waliyuddin (G64180067)
  - Tia Isnawati Noor (G64180034)
  - Ihsan Fadhillah Wika Putra (G64180071)
### Latar Belakang
Banyak warga Indonesia yang memiliki banyak aktivitas dalam kesehariannya. Sehingga banyak yang tidak memiliki waktu luang untuk memedulikan kesehatan dan lingkungannya masing-masing serta mengabaikannya. Hal itu mengakibatkan munculnya banyak penyakit beresiko di kemudian hari. Solusinya adalah butuhnya pengingat akan gaya hidup agar kesehatan selalu terjaga. Portal berita maupun bacaan penting bagi kesehatan dan lingkungan yang tersebar di internet pun tidak dibaca dikarenakan kurangnya minat membaca warga Indonesia. Oleh karena itu, kami ingin memberikan informasi dan kebiasaan yang benar untuk menjaga kesehatan dan lingkungan dengan tulisan seminim mungkin namun tidak meninggalkan nilai penting yang harus disampaikan. Dan kami memutuskan membuat Greentips ini sebagai solusinya.

### Tujuan
Greentips! bertujuan agar masyarakat Indonesia dapat menerapkan hidup pola sehat dengan mudah. Kami berharap dengan adanya web ini, masyarakat Indonesia menjadi lebih memperhatikan kondisi tubuh mereka.

### Fitur
Fitur yang kami sediakan berdasarkan kuisioner yang disebar kepada beberapa mahasiswa di Institut Pertanian Bogor.

| Fitur | Keterangan |
| ----- | ---------- |
| *Heatlh News* | Menyediakan berita terkini mengenai kesehatan |
| *Article* | Intinya sama kaya *Health News* cuman artikel |
| *BMI Calculator* | Menyediakan kalkulator untuk menghitung *Body Mass Index* dan kategorinya |
| *Nutrition of Food* | Melihat gizi dari makanan yang dipilih |
| *Daily Tips* | Menyediakan tips sebagai pengingat untuk tetap memiliki gaya hidup sehat |

### Ruang Lingkup
Perangkat Keras 
- Prosesor 	: Intel i7 7700HK 2.8Ghz
- Memori	: DDR4 8GB
- Graphic card 	: GDDR5 GTX 1050 4GB
- Storage 	: SSD 256 GB dan HDD 1TB

Perangkat Lunak 				
- Database 		: MySQL
- Server 			: Apache PHP server
- Text Editor/IDE	: Sublime text

Lainnya 
- Development time 	: Trello, TeamGantt

### Deskripsi perangkat lunak
Greentips! adalah aplikasi berbasis web. Greentips ini akan memberikan tips-tips harian berkaitan dengan kesehatan dan lingkungan yang bisa diterapkan oleh pengguna, menyediakan kalkulator bmi untuk menghitung bmi, news, article, dan nutrition of food untuk mencari tahu kandungan pada suatu makanan.

### Analisis user(user profiles)
1. User : membaca *news*, membaca *article*, memasukkan tinggi badan dan berat badan untuk menghitung bmi, membaca *daily tips*, memilih kategori makanan untuk melihat nutrisi makanan
2. Administrator: memasukkan resource *daily tips, article, news* ke database

### User story
**Fitur Article**
Saya ingin membaca artikel mengenai kesehatan dan gaya hidup sehat, sehingga saya bisa melihat artikel yang tersedia.

**Fitur Health Newss**
Saya ingin membaca berita mengenai kesehatan, sehingga saya bisa melihat berita yang tersedia.

**Fitur Daily Tips**
Saya ingin diingatkan untuk selalu menerapkan gaya hidup sehat, sehingga saya bisa membaca reminder yang tersedia.

**Fitur BMI Calculator**
Saya ingin mengetahui apakah saya sudah cukup ideal menurut bmi, sehingga saya bisa mengetahui kategori fisik saya dalam bmi.

**Fitur Nutrition of Food**
Saya ingin mengetahui kandungan apa saja yang terkandung pada makanan, sehingga saya bisa melihat kandungan makanannya.

### Use case diagram
![Use Case Diagram](https://user-images.githubusercontent.com/54407018/82333338-d0b68c00-9a10-11ea-98d4-256348f4650e.png)

### Use case description

Article

| Nama Use Case | Membaca *Article* |
| ------------- | --------------- |
| Aktor | *Web user* |
| Deskripsi | Menjelaskan cara untuk membaca *article* |
| *Successful Completion* | *Web user* menekan tab *article*, *Web user* memilih *article* yang ingin dibaca, *Web user* membaca artikel |
| Alternatif | Tidak ada |
| *Precondition* | *Web user* sudah *log in* terlebih dahulu |
| *Post Condition* | Sistem menampilkan *article* yang sudah dipilih *web user*, *web user* membaca *article* |
| Asumsi | Tidak ada |

Helath News

| Nama Use Case | Mengakses *News* |
| ------------- | ---------------- |
| Aktor | *Web user* |
| Deskripsi | Menjelaskan cara untuk mengakses *news* |
| *Succesful Completion* | *Web user* menekan tab *news*, *Web user* memilih *news* yang ingin dibaca, *Web user* membaca *news* | 
| Alternatif | Tidak ada |
| *Precondition* | *Web user log in* terlebih dahulu |
| *Post Condition* | Sistem menampilkan *news* yang sudah dipilih, *web user* membaca *news* |
| Asumsi | Tidak ada | 

Nutrition of Food

| Nama Use Case | Mengetahui Nutrisi dari Makanan | 
| ------------ | ------------------------------- |
| Aktor | *Web user* |
| Deskripsi | Menjelaskan cara untuk mengetahui nutrisi dari makanan |
| *Successful Completion* | *Web user* menekan tab *Nutrition of Food*, *Web user* memilih kategori makanan, pilih makanan, *web user* membaca hasil |
| Alternatif | Tidak ada |
| *Precondition* | *Web user log in* terlebih dahulu |
| *Post Condition* | Sistem menampilkan nutrisi makanan yang sudah dipilih |
| Asumsi | Tidak ada |

BMI Calculator

| Nama Use Case | Menggunakan *BMI Calculator* | 
| ------------- | ---------------------------- | 
| Aktor | *Web user* |
| Deskripsi | Menjelaskan cara untuk menggunakan *BMI Calculator* |
| *Successful Completion* | *Web user* menekan tab *BMI Calculator*, *Web user* memberikan input berat badan dan tinggi badan, Sistem akan mengeluarkan output hasil hitungan dan kategorinya |
| Alternatif | Tidak ada |
| *Precondition* | *Web user log in* terlebih dahulu |
| *Post Condition* | *Web user* dapat melihat hasilnya |
| Asumsi | Tidak ada |

Daily Tips

| Nama Use Case | Mengakses *Daily Tips* |
| ------------- | ---------------------- |
| Aktor | *Web user* | 
| Deskripsi | Menjelaskan cara untuk mengakses *Daily Tips* |
| *Successful Completion* | *Web user* menekan tab *Daily Tips*, *Web user* akan melihat *daily tips* |
| Alternatif | Tidak ada |
| *Precondition* | *Web user* sudah *log in* terlebih dahulu |
| *Post Condition* | Sistem menampilkan *daily tips* |
| Asumsi | Tidak ada |


### Activity diagram
![Activity Diagram Article](https://user-images.githubusercontent.com/54407018/82328436-115ed700-9a0a-11ea-8537-c90a9eccbdf0.png)
![Activity Diagram BMI Calculator](https://user-images.githubusercontent.com/54407018/82315986-5c6eef00-99f6-11ea-8628-1917f655d814.png)
![Activity Diagram Health News](https://user-images.githubusercontent.com/54407018/82316544-2716d100-99f7-11ea-9aa7-5320a2b3e81d.png)
![Activity Diagram Daily Tips](https://user-images.githubusercontent.com/54407018/82317307-3cd8c600-99f8-11ea-958d-122b4559ab0a.png)
![Activity Diagram Nutrition of Food](https://user-images.githubusercontent.com/54407018/82392643-9a0f5e80-9a6e-11ea-9ffb-dd6162644793.png)

### Gantt chart
![gantt (2)](https://user-images.githubusercontent.com/54407018/82387815-367f3400-9a62-11ea-92cf-4fded5ec25c6.png)

### ERD
![greentips (1)](https://user-images.githubusercontent.com/54407018/82300215-b49af680-99e0-11ea-931f-d9c8eadefcde.png)

### Hasil implementasi perangkat lunak
Tampilan log in / sign in:
![loginpage](https://user-images.githubusercontent.com/60166714/82418545-51c06280-9aa7-11ea-88dc-28c1a456b4b0.PNG)

Tampilan Sign up:
![register](https://user-images.githubusercontent.com/60166714/82418993-f5117780-9aa7-11ea-9d7f-15275a132520.PNG)

Tampilan Daily Tips:
![tips (2)](https://user-images.githubusercontent.com/54407018/82377106-607a2b80-9a4d-11ea-9dac-09d75371459d.png)

Tampilan News:
![news (2)](https://user-images.githubusercontent.com/54407018/82388789-a68eb980-9a64-11ea-84f6-64b2a3052062.png)

Tampilan BMI Calculator:
![bmi (2)](https://user-images.githubusercontent.com/54407018/82341222-53901480-9a1a-11ea-870d-5e953daf85b2.png)

Tampilan Article:
![article (2)](https://user-images.githubusercontent.com/54407018/82388489-f15c0180-9a63-11ea-97d6-a22a3866e8b4.png)

Tampilan Nutrition of Food:
![NoF](https://user-images.githubusercontent.com/54407018/82392805-fb373200-9a6e-11ea-91bb-842f3e1643bb.jpg)

Tampilan Profile:
![profile (2)](https://user-images.githubusercontent.com/54407018/82377630-29584a00-9a4e-11ea-8ef9-9a500c063f39.png)

Tampilan Edit Profile:
![editprofile (2)](https://user-images.githubusercontent.com/54407018/82377829-763c2080-9a4e-11ea-871a-202fde7a6bcd.png)
