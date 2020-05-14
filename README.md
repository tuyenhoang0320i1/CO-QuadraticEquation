# CO-QuadraticEquation

[Bài tập] Xây dựng lớp QuadraticEquation (Phương trình bậc hai)
Mục tiêu
Luyện tập định nghĩa lớp, tạo đối tượng và sử dụng các phương thức của đối tượng.

Điều kiện
- Biết cách khai báo lớp (thuộc tính, phương thức)

- Biết cách khởi tạo đối tượng

- Biết cách sử dụng các phương thức của đối tượng

Mô tả
(Phương trình bậc 2) Thiết kế một lớp tên là QuadraticEquation cho một phương trình bậc hai (quadratic equation) ax2 + bx + x = 0. Lớp này gồm các thành phần:

Trường dữ liệu a, b, và c thuộc kiểu private double đại diện cho 3 hệ số. 

Phương thức khởi tạo với 3 tham số để khởi tạo các giá trị cho a, b và c. 

Phương thức gettter cho a, b và c. 

Phương thức getDiscriminant() trả về delta theo công thức delta = b2 - 4ac. 

Phương thức getRoot1() và getRoot2() trả về 2 nghiệm của phương trình là: 



Phương thức getRoot1() và getRoot2() thật sự hữu ích khi delta >= 0. Hai phương thức này trả về 0 khi delta < 0.

Vẽ sơ đồ UML cho lớp QuadraticEquation và cài đặt lớp.

Viết chương trình thực thi như sau:

Nhập vào 3 giá trị cho a, b, c và hiển thị kết quả dựa trên việc tính delta. Nếu delta >= 0, hiển thị 2 nghiệm. Nếu delta bằng 0, hiển thị một nghiệm (do 2 nghiệm bằng nhau). Còn lại hiển thị chuỗi “The equation has no roots”
Chú ý: Sử dụng Math.pow(x, 0.5) để tính căn bậc hai của x.

Chương trình chạy mẫu có thể tham khảo:



Hướng dẫn
Bước 1: Tạo lớp QuadraticEquation , khai báo các thuộc tính (properties), định nghĩa các phương thức khởi tạo (contructors).

Bước 2: Định nghĩa phương thức gettter cho a, b và c. 

Bước 3: Định nghĩa phương thức getDiscriminant() trả về delta theo công thức delta = b2 - 4ac. 

Bước 4: 

Viết chương trình thực thi như sau:

Nhập vào 3 giá trị cho a, b, c và hiển thị kết quả dựa trên việc tính delta. Nếu delta >= 0, hiển thị 2 nghiệm. Nếu delta bằng 0, hiển thị một nghiệm (do 2 nghiệm bằng nhau). Còn lại hiển thị chuỗi “The equation has no roots”
