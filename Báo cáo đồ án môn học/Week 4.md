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


