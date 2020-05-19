# Greentips!
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
| *Nutrition Calculator* | Menghitung nutrisi makanan yang ingin dicari |
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
- Development time 	: Trello
- API			: Open Weather Map

### Deskripsi perangkat lunak
Greentips! adalah aplikasi berbasis web. Greentips ini akan memberikan tips-tips harian berkaitan dengan kesehatan dan lingkungan yang bisa diterapkan oleh pengguna, menyediakan kalkulator bmi untuk menghitung bmi, news, article, dan nutrition of food untuk mencari tahu kandungan pada suatu makanan.

### Analisis user(user profiles)
- Target user 
- user persona

### User story
Sebagai *webuser*, saya ingin menghitung bmi dengan memasukkan data berupa berat badan dan tinggi badan, dengan satuan yang bisa dipilih cm atau inch dan kg atau lb. Bisa juga melihat hasil hitungannya beserta kategorinya. Saya juga ingin melihat tips harian beserta artikel dan berita yang terkait dengan tips tersebut. Saya juga ingin membaca artikel dan berita kesehatan. Saya juga ingin mengetahui nutrisi makanan.

### Use case diagram


### Use case description

| Nama Use Case | Membaca *Article* |
| ------------- | --------------- |
| Aktor | *Web user* |
| Deskripsi | Menjelaskan cara untuk membaca *article* |
| *Successful Completion* | *Web user* menekan tab *article*, *Web user* memilih *article* yang ingin dibaca, *Web user* membaca artikel |
| Alternatif | Tidak ada |
| *Precondition* | *Web user* sudah *log in* terlebih dahulu |
| *Post Condition* | Sistem menampilkan *article* yang sudah dipilih *web user*, *web user* membaca *article* |
| Asumsi | Tidak ada |

| Nama Use Case | Mengakses *News* |
| ------------- | ---------------- |
| Aktor | *Web user* |
| Deskripsi | Menjelaskan cara untuk mengakses *news* |
| *Succesful Completion* | *Web user* menekan tab *news*, *Web user* memilih *news* yang ingin dibaca, *Web user* membaca *news* | 
| Alternatif | Tidak ada |
| *Precondition* | *Web user log in* terlebih dahulu |
| *Post Condition* | Sistem menampilkan *news* yang sudah dipilih, *web user* membaca *news* |
| Asumsi | Tidak ada | 

| Nama Use Case | Mengetahui Nutrisi dari Makanan | 
| ------------ | ------------------------------- |
| Aktor | *Web user* |
| Deskripsi | Menjelaskan cara untuk mengetahui nutrisi dari makanan |
| *Successful Completion* | *Web user* menekan tab *Nutrition of Food*, *Web user* memilih |

| Nama Use Case | Menggunakan *BMI Calculator* | 
| ------------- | ---------------------------- | 
| Aktor | *Web user* |
| Deskripsi | Menjelaskan cara untuk menggunakan *BMI Calculator* |
| *Successful Completion* | *Web user* menekan tab *BMI Calculator*, *Web user* memberikan input berat badan dan tinggi badan, Sistem akan mengeluarkan output hasil hitungan dan kategorinya |
| Alternatif | Tidak ada |
| *Precondition* | *Web user log in* terlebih dahulu |
| *Post Condition* | *Web user* dapat melihat hasilnya |
| Asumsi | Tidak ada |

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
![Activity Diagram Article](https://user-images.githubusercontent.com/54407018/82315668-d5ba1200-99f5-11ea-99e8-98fd5433f07c.png)
![Activity Diagram BMI Calculator](https://user-images.githubusercontent.com/54407018/82315986-5c6eef00-99f6-11ea-8628-1917f655d814.png)
![Activity Diagram Health News](https://user-images.githubusercontent.com/54407018/82316544-2716d100-99f7-11ea-9aa7-5320a2b3e81d.png)
![Activity Diagram Daily Tips](https://user-images.githubusercontent.com/54407018/82317307-3cd8c600-99f8-11ea-958d-122b4559ab0a.png)

### Gantt chart

### ERD
![greentips (1)](https://user-images.githubusercontent.com/54407018/82300215-b49af680-99e0-11ea-931f-d9c8eadefcde.png)

### Hasil implementasi pernagkat lunak
Tampilan log in / sign in:

Tampilan Sign up:

Tampilan Daily Tips:
 
Tampilan News:

Tampilan Article:

Tampilan Nutrition of Food:

Tampilan Profile:

Tampilan Edit Profile:
