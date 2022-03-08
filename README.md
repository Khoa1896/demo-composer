## Composer là gì ? 

### Định nghĩa :
Composer là một Dependency Management trong PHP, công cụ quản lý các thư viện mà project Php của bạn sử dụng. Một cách chính xác hơn Composer quản lý sự phụ thuộc các tài nguyên trong dự án. Nó cho phép khai báo các thư viện mà dự án của bạn sử dụng, composer sẽ tự động tải code của các thư viện. Nó tạo ra các file cần thiết vào project của bạn, và cập nhật các thư viện khi có phiên bản mớài đặt global. Chính vì thế nó còn được gọi là Dependency Manager. (Những package được cài đặt được gọi là Dependency, còn Composer là công cụ quản lý các Dependency)

### Lợi ích của Composer : 
Trước đây khi bạn triển khai các dự án dựa trên các, bạn sẽ phải đối mặt một số việc sau:
<ul>
<li>Dự án của bạn có sử dụng một số thư viện ở ngoài. Bạn phải tải chúng rồi cho vào folder của project rồi mới sử dụng được.
<li>Một số các thư viện đó lại sử dụng (phụ thuộc) các thư viện khác.
<li>Bạn sẽ gặp những khó khăn trong việc cập nhật phiên bản của các thư viện. Nếu thư viện A, có sử dụng thư viện B, thư viện B sử dụng thư viện C. Thì nếu một trong các thư viện này có update, bạn sẽ phải tự mình lần mò về phần gốc của nó để update.
</ul>
Tuy nhiên, công việc sẽ thật dễ dàng với Composer, bạn sẽ làm được:
<ul>
<li>Khai báo các thư viện mà dự án sử dụng. Quản lý tập trung các thư viện đang sử dụng cho project và cả phiên bản của chúng dễ dàng qua file composer.json.
<li>Tìm các phiên bản của package có thể cài đặt và cần thiết cho dự án, sau đó cài đặt chúng vào dự án tức là tải chúng về project.
</ul>