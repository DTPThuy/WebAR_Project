# Làm quen với Shapespark

## Nhập mô hình 3D vào Shapespark

## Thêm ánh sáng thực tế

## Bake bản nháp của lightmap
Sau khi nướng bản nháp với các thông số:

![Outside](https://user-images.githubusercontent.com/91117385/138549155-f8dff618-90ab-4d14-8465-90f4aaf380a5.png)

Kết quả sau khi Bake bản nháp của lightmap

![image](https://user-images.githubusercontent.com/91117385/138563252-e27440b7-33bd-4234-9603-cda099e11520.png)

![image](https://user-images.githubusercontent.com/91117385/138563245-c0c1d218-2dc0-4898-852a-f18cd857a6a1.png)

![image](https://user-images.githubusercontent.com/91117385/138563208-0c454a1e-adc7-42fa-978f-2f96ce9ff3d1.png)

## Đánh bóng hiện trường: cấu hình vật liệu phản chiếu
Để đánh bóng cảnh, trong mỗi phòng chính cần:
1. Thêm một đầu dò ánh sáng (Light probe)

![thêm đầu dò sáng](https://user-images.githubusercontent.com/74582114/138589226-14d52ea9-2a0b-4ecf-aeb0-f0b83dc01a40.png)
Có thể điều chỉnh vị trí đầu dò ánh sáng bằng cách thay đổi các giá trị trong bảng điều khiển phía bên phải hoặc sử dụng các điều khiển trong trình xem
![đầu dò ánh sáng](https://user-images.githubusercontent.com/74582114/138589262-d12477b6-1199-4bdc-8c5b-6e1511394c3f.png)

2. Định cấu hình vật liệu phản chiếu:
- Chuyển sang tab Materials: chọn một đối tượng trong cửa sổ trình xem, vật liệu của nó sẽ được đánh dấu trong danh sách vật liệu

![chọn vật liệu để đánh bóng](https://user-images.githubusercontent.com/74582114/138589452-01df5311-1e64-4552-9610-d80cdc7e4e1b.png)

- Đối với từng vật liệu muốn tạo phản xạ:
+ Đối với vật liệu kim loại: Metallic: 1; Roughness: từ 0-0.4 đối với bề mặt nhẵn, từ 0.41-0.99 đối với bề mặt nhám, mờ

![điều chỉnh thông số vật liệu kim loại](https://user-images.githubusercontent.com/74582114/138589685-4d5c26e6-befa-40ed-afb8-01bfaa6e5fbb.png)

+ Đối với vật liệu phi kim loại: Metallic: 0; Roughness: 0-0.4 đối với bề mặt nhẵn, 0.41-0.99 đối với bề mặt thô, mờ bề mặt

![vật liệu phi kim loại](https://user-images.githubusercontent.com/74582114/138589796-fcb4649b-774e-4bc8-ad65-427e2ef02663.png)

Căn phòng sau khi đánh bóng hiện trường: vật liệu phản chiếu

![phòng ngủ sau khi được đánh bóng](https://user-images.githubusercontent.com/74582114/138589886-2340a679-685a-4bdd-922b-06edefc75505.png)

## Thêm các viewer được xác định trước

Toàn cảnh ngôi nhà từ dưới lên trên gồm:
- 2 phòng ngủ
- 1 phòng trống
- Không gian giữa của căn nhà.
![Outside](https://user-images.githubusercontent.com/84367730/138488651-b61bfb12-157a-451d-a358-80c42bc1ce48.png)


Viewer của badroom 1: 

- View nhìn từ cửa phòng 
![badroom 1 1](https://user-images.githubusercontent.com/84367730/138488751-c8d3a7d4-95a3-4e78-b009-eded677967a5.png)

- View nhìn từ cửa kính
![badroom 1 2](https://user-images.githubusercontent.com/84367730/138488830-1a4b9582-e78f-4153-a4ce-60a019e69dc2.png)

Viewer của Room 2: 
![room2](https://user-images.githubusercontent.com/84367730/138488903-e7eb4ac6-a879-4c73-bca3-fad1a01d18ac.png)

Viewer của badroom 3: 
- View nhìn từ cửa kính
![badroom 3 1](https://user-images.githubusercontent.com/84367730/138488968-e6675405-2d8d-4574-8882-4493d938d5cf.png)

- View nhìn từ cửa phòng
![badroom 3 2](https://user-images.githubusercontent.com/84367730/138489012-4a22ff95-558d-42e3-9260-15ef5101fad5.png)

- View nhìn từ giường 
![badroom 3 3](https://user-images.githubusercontent.com/84367730/138489058-61a08473-d862-4db2-9ef2-3b122f29672e.png)


## Tải cảnh nháp lên website
