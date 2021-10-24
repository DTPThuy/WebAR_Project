# Làm quen với Shapespark

## Nhập mô hình 3D vào Shapespark

## Thêm ánh sáng thực tế
Định cấu hình các vật liệu trong suốt: Trong Material tab dùng Opacity để thay đổi độ mờ của vật liệu. Đặc biệt, cửa sổ nên cho phép ánh sáng bên ngoài chiếu vào nội thất.
Trước khi thay đổi phải mở biểu tượng khóa Opacity  (Nhấp vào biểu tượng này sẽ hủy liên kết giá trị này khỏi cài đặt chương trình tạo mô hình 3D. Các giá trị không yêu thích sẽ không bị ghi đè khi mô hình 3D được cập nhật.)

- Opacity của cửa sổ:

![2 1](https://user-images.githubusercontent.com/91942026/138594260-b0345811-af36-4fef-a61e-c6b43a70a545.png)

- Opacity của tủ quần áo:

![2](https://user-images.githubusercontent.com/91942026/138594270-23118c71-356a-439f-8b91-897d54cf20ca.png)

Xem trước đèn trong ảnh dùng Preview. Mục tiêu của bản xem trước là cho biết quang cảnh sẽ trông như thế nào sau khi nướng. Tiếng ồn có thể được bỏ qua; thông thường, không có ích gì khi đợi bản xem trước kết thúc - nó có thể được đóng lại ngay khi bạn đã xem đủ.

![preview](https://user-images.githubusercontent.com/91942026/138594345-c44c6304-8c13-4362-b8bc-f2e9165dcb95.png)

Điều chỉnh cài đặt của ánh sáng Mặt trời và Bầu trời. Giá trị mặc định Strength của Sun ánh sáng và Sky nên được tốt cho phần lớn các mô hình. Tuy nhiên, nếu mô hình của bạn quá tối hoặc quá sáng, hãy thử tăng gấp đôi hoặc giảm một nửa Cường độ tương ứng.

![sun](https://user-images.githubusercontent.com/91942026/138594603-fb841da5-9b4d-4c13-a5b6-ce0b2d434fec.png)

Để điều chỉnh cài đặt của Bầu trời, hãy chuyển đến tab Nướng và thay đổi giá trị Cường độ của Bầu trời.

![sky](https://user-images.githubusercontent.com/91942026/138594676-00055547-2cd4-4b80-9ff5-4f8c7ddc8ea8.png)

Thêm đèn nhân tạo vì để chiếu sáng các phòng không có ánh sáng bên ngoài chiếu trực tiếp, chẳng hạn như phòng tắm hoặc tủ quần áo. (Nếu không có đèn trong phòng, khung cảnh của bạn sẽ tối sau khi nướng.)

- Đèn ngủ:

![đèn ngủ](https://user-images.githubusercontent.com/91942026/138594932-7fa7b93f-b67e-4dee-a155-c90c7c482e70.png)

- Đèn trần nhà:

![đèn trần](https://user-images.githubusercontent.com/91942026/138594939-78e42dad-6be8-42dd-92f0-fe5c1f1492b0.png)


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
