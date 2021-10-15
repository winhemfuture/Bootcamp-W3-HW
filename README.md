[![Open in Visual Studio Code](https://classroom.github.com/assets/open-in-vscode-f059dc9a6f8d3a56e377f745f24479a46679e63a5d9fe6f495e02850cd0d8118.svg)](https://classroom.github.com/online_ide?assignment_repo_id=5942978&assignment_repo_type=AssignmentRepo)
# php-symfony-patika-bootcamp-assignment3

#	ARAŞTIRMA KONUSU (20 puan)
- Symfony kullanmanın avantajları nedir? Kendi cümlelerinizle açıklayınız.
- Symfony ile environment (ortam) ayarlaması nasıl yapılır?
- Yeni bir Symfony projesi oluşturmak için kullanılar composer komutu nedir?
- Laravel framework ve Symfony framework arasındaki temel farklardan iki tanesini yazınız.


#	SYMFONY UYGULAMASI OLUŞTRMA (80 puan)
Ders esnasında composer ile oluşturmuş olduğunuz ilk Symfony uygulamasını Repo’ya yükleyiniz.






# MNM PHP Bootcamp 3. Ödev Kerem BASMACI  
  
  
## 1 - Symfony kullanmanın avantajları nedir?  
Genel olarak Symfony ve benzeri frameworklerle çalışmanın en büyük avantajı hızlı proje geliştirmektir. Tekrar kullanılabilir komponentleri sayesinde benzer projelerimize ya da aynı teknolojiyi kullanmak istediğimiz projelere entegre edilebilir. MVC yapısıyla çalıştığı için modüller ayrı olarak kullanılabilir. Geliştirilen bir komponent yapısı projeden sonradan çıkarılmış olsa bile bir başka projeye entegre edilebilir. Kullanım açısından kullanıcı dostu olarak nitelendirilebilir. Fonksiyonel yapısı sayesinde yeni başlayan biri ya da profesyonel bir kullanıma cevap verebilir. Esnek yapısı sayesinde pek çok teknolojiye adapte edilebilir. Bunun sebebi de Symfony frameworkün arkasında 120'den fazla ülkeden 600.000 civarında geliştiricinin bulunmasıdır.  
  
## 2 - Symfony ile enviroment(ortam) ayarlaması nasıl yapılır?  
Symfony proje dosyamızın içinde .env uzantılı dosyayı kullanarak APP_ENV adlı değişkene dev , prod ya da test olarak eşitleyerek. Ortam ayarlaması yapılabilir. dev ortamında uygulamayı geliştirme esnasında bilgi akışını görerek hatalarımızı giderebilir. İşleyişi tam olarak inceleyebiliriz. prod ortamında bu bilgi akışını azaltıp optimize edilen bir hale geldiği için hızlı olarak ürünü kullanabiliriz. Aynı zaman da ortam dosyasında proje içerisinde kullanılacak database bağlantı parametleri belirtilebilir.  
## 3 - Yeni bir Symfony projesi oluşturmak için kullanılar composer komutu nedir?  
Symfony ile proje oluşturmak için  
symfony new my_project_name --version=4.4 --full  
Komutu kullanılabilir. Composer yardımıyla bu projeyi oluşturmak istersek. composer create-project symfony/website-skeleton:"^4.4" my_project_name  
Komutu ile istediğiniz versiyonu da belirterek proje dosyası oluşturabiliriz.  
## 4 -  Laravel framework ve Symfony framework arasındaki temel farklardan iki tanesini yazınız.  
  
- Symfony ile büyük ölçekli projeleri geliştirmemiz. Laravel'e göre  daha kolay tekrar kullanılabilir modüler komponentleri mevcuttur. Bu sayede karmaşık ve büyük projelerde daha etkili olur.
- Symfony, Laravel'e göre database konusunda daha fazla seçenek sunar. Oracle bunlardan biridir.
