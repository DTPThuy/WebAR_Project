# Ý tưởng và mô tả website VR tour

VR là viết tắt của cụm từ Virtual Reality có nghĩa là thực tế ảo, đây là công nghệ giúp cho con người có thể cảm nhận một môi trường giả lập đang hiện ra trước mắt một cách chân thật nhất bằng các thiết bị hỗ trợ như máy tính hoặc kính thực tế ảo.

website VR cho phép khách hàng trải nghiệm khám phá không gian, sự vật, sự việc ở cả 3 chiều thay vì các hình phẳng 2 chiều như website thông thường

Là một công nghệ nhập vai, nó cho phép người dùng đi vào môi trường 3D tương tác, mang đến cho họ cơ hội khám phá các công trình thiết kế ảo của một căn phòng, một tầng nhà hoặc một tòa nhà cụ thể nói chung dù chưa được xây dựng.

## Ý tưởng website VR:

Web được chia làm 2 phần 

Phần 1 : cho phép người dùng : dịch chuyển vị trí đối tượng, thay đổi vật liệu đối tượng, ẩn hiện đối tượng

![image](https://user-images.githubusercontent.com/91117385/141721337-e158ce26-adb0-41ab-bb7c-e3fe31852ea1.png)


Phần 2 : cảnh vật căn phòng sẽ hiển thị theo từng di chuyển và thay đổi của người dùng 
  
  ![image](https://user-images.githubusercontent.com/91117385/141721346-15e52df9-bd55-4899-b6c3-d5584d15534f.png)


Bản mô phỏng trang web:

![image](https://user-images.githubusercontent.com/91117385/141721333-0de8deba-0e3c-49c5-be84-456e6887de18.png)

 
Chức năng chính hệ thống:

i.	Đăng nhập cho quản trị viên

ii.	Chức năng cho phép tải lên tour

iii.	Trình diễn tour đã tải lên.

iv.	Chức năng biên tập nội dung ảnh tour : dịch chuyển vị trí đối tượng, thay đổi vật liệu đối tượng, ẩn hiện đối tượng, gán nhãn ( khi click vào đối tương gán nhãn hiện popup thông tin đối tượng).

v.	Thực hiện phân tích thiết kế ứng dụng viết vào tài liệu.

## Mô tả Website VR:
1. Mô tả chung:
Web 360 VR tour được tạo ra bằng cách liên kết những tấm ảnh 360 độ lại với nhau, giúp người dùng sử dụng điện thoại hoặc máy tính khi truy cập có thể tương tác hoàn chỉnh, di chuyển, quan sát tất cả các góc nhìn khác nhau đến tất cả các vị trí xung quanh như chính họ đang đứng quan sát, di chuyển trong các căn phòng, địa điểm mà hình ảnh chụp thông thường không bao giờ thực hiện được 
2. Tính năng nổi bật: 

# Host scenes on your own server with IIS Server 

## Sau khi cài đặt trong IIS server ta sẽ bundle cảnh trên Shapespark về để có thể tạo một gói cảnh của mình chứa tất cả các tệp được yêu cầu - HTML, kết cấu, JavaScrip, v.v. như sau:

![bund](https://user-images.githubusercontent.com/84367730/141714247-cd93001b-c853-41bd-b5ce-a5a0244875fc.png)

- Bundle xong sẽ được file zip như sau và tiếp tục giải nén:

![1](https://user-images.githubusercontent.com/84367730/141714463-f4159e22-5307-4901-b048-5d84076bd323.png)

- Trong folder giải nén sẽ chứa tất cả các tệp được yêu cầu:

![2](https://user-images.githubusercontent.com/84367730/141714486-ee572485-951d-40ce-89cf-5d1841c98532.png)

## Tại thư mục "C:\inetpub\wwwroot" 
- Tạo 1 folder chứa tất cả các file mà ta đã bundle được từ Shapespark

![3](https://user-images.githubusercontent.com/84367730/141714898-d8aa1f6c-8a37-4cf9-b09b-eebd229478d4.png)

![4](https://user-images.githubusercontent.com/84367730/141714925-6ea6e4d0-fc82-4a0b-afc2-0c9721f78263.png)

## Tại IIS Manager sẽ thêm website cần tạo được
- Site name: tên host name 
- Physical path: là địa chỉ thư mục từ bundle Shapespark mà mình mới tạo ở trên

![5](https://user-images.githubusercontent.com/84367730/141715568-e4051a08-4deb-4439-bb17-5b66d50b8ebb.png)

## Để có thể truy cập được vào hosting
- Ta cần phải thêm ip và host name vào file host trong folder sau: "C:\Windows\System32\drivers\etc"

![6](https://user-images.githubusercontent.com/84367730/141715956-e8cad3e5-5473-4d04-ad6f-5c524dddfc8a.png)

## Sau khi hoàn thành và truy cập bằng host name thì được một server chứa cảnh Shapespark 

![7](https://user-images.githubusercontent.com/84367730/141716152-3616ef56-c593-42b3-b8e1-11b0fc78baf4.png)

- Note: Nếu server bị error có thể trong file web.config chứa những câu lệnh server không đọc được. Ta sẽ xóa <rewrite>...</rewrite> bên trong đi và sẽ chạy lại. 


