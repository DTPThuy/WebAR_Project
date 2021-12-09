# Yêu cầu khi xây dựng hệ thống 

Thông tin đề tài

Đặc tả đề tài :

Sử dụng công nghệ Shapespark để làm WebVR. Dựa trên API của shapespark và Three.js để code ứng dụng WebVR. 

Yêu cầu là có thể thay thế, chỉnh sửa đối tượng 3D trên scene. Bao gồm thay vật liệu, thay đổi vị trí, kích thước, thay đổi ánh sáng

![image](https://user-images.githubusercontent.com/91117385/145334419-f667dff8-ab5c-43f1-a4ba-e4a9d0d8acf2.png)

![image](https://user-images.githubusercontent.com/91117385/145334492-48d2a215-fa14-4f2c-b819-16e036e47dea.png)


Hệ thống phải đáp ứng các chức năng sau:

	Chức năng xem chi tiết sản phẩm: bao gồm việc giới thiệu thông tin chi tiết về sản phẩm (tên sản phẩm, vật liệu,...)

	Chức năng login, phân quyền: đăng nhập vào hệ thống, phân chia công việc.

	Chức năng quản lí cảnh: chỉnh sửa các cảnh,cập nhật và lưu cảnh khi chỉnh sửa. 

	Chức năng chỉnh sửa sản phẩm: chỉnh sửa màu sắc, ẩn hiện các sản phẩm

	Chức năng thay thế sản phẩm: hiển thị danh sách các sản phẩm có thể thay thế vào vị trí đã kích

	Chức năng thay thế các biến thể sản phẩm trong scene:Ở màn hình player frontend khi thực hiện bấm nút hiện popup danh sách các sản phẩm có thể thay thế vào vị trí đó. Khi thực hiện chọn sản phẩm thì scene sẽ thực hiện thay thế các sản phẩm vào vị trí tương ứng.

	Chức năng tìm kiếm: Công cụ tra cứu nhanh, giúp khách hàng giảm thời gian tìm kiếm.

	Chức năng quản lý các điểm Anchor : Phân loại Anchor. Cách hành sử tương ứng với từng loại

## Phân tích yêu cầu của hệ thống

a. Yêu cầu của khách hàng ( người dùng)

	Giao diện dễ sử dụng và có tính thẩm mỹ cao.

	Xem và thay đổi cách cảnh một cách dễ dàng, tiện ích.

	Đăng ký tài khoản, cho phép đăng nhập, chỉnh sửa thông tin tài khoản.

	Trải nghiệm thực tế và chân thật đến từng sản phẩm, không gian.

	Cho phép chỉnh sửa, thay thế sản phẩm.

	Cho phép ẩn hiện sản phẩm và cảnh.

	Thông tin sản phẩm chi tiết, dầy đủ.

	Thông tin các cảnh chi tiết, dầy đủ.

	Các mesh trong scense : có cả chức năng tự thêm thủ công để đánh dấu trong scene

	Gắn sản phẩm có thể thay thế theo mesh

	Có thể lưu các sản phẩm, cảnh sau khi thay đổi.


b. Yêu cầu của admin

	Quản lý cảnh: Tìm kiếm, thêm, sửa, xóa thông tin cảnh.

	Quản lý sản phẩm: Tìm kiếm, xóa, ẩn hiện sản phẩm, thêm, sửa, xóa thông tin sản phẩm, gán tag các sản phẩm.

	Quản lý các mesh: thêm, sửa, xóa thông tin các mesh, gắn sản phẩm có thể thay thế theo mesh

	Quản lý khách hàng: phân nhóm và chỉnh sửa quyền khách hàng.

	Quản lý  Anchor: phân loại các Anchor, cách hành sử tương ứng với từng loại.

2.2 Xác định mô tả các tác nhân

Một tác nhân (actor) là một người hay một đối tượng giữ vai trò nào đó trong nghiệp vụ như một bộ phận hay một hệ phần mềm  riêng biệt.

	Từ yêu cầu hệ thống ta có các tác nhân liên quan như sau:  
	Khách Hàng: Đăng kí, đăng nhập, xem cảnh và xem thông tin chi tiết của từng cảnh, từng sản phẩm trong cảnh , chỉnh sửa, thay thế cảnh, chỉnh sửa, thay thế, ẩn hiện các sản phẩm, lưu cảnh sau khi đã được chỉnh sửa.

	Admin: Quản lý cảnh, quản lý sản phẩm, quản lý khách hàng, quản lý Anchor, quản lí các mesh.

![image](https://user-images.githubusercontent.com/91117385/145334559-a9759150-e45b-49bc-9da3-afd46fc268d7.png)


## Sơ đồ use case
a. Sơ đồ use case tổng quan
 
 ![image](https://user-images.githubusercontent.com/91117385/145333802-6cdae230-cd30-4a4d-929e-4dd5a58fbc3c.png)


b. Sơ đồ use case phía người dùng
 
 ![image](https://user-images.githubusercontent.com/91117385/145333781-88ecab0f-3747-4725-89c3-234b05230d63.png)

c. Sơ đồ use case phía admin

 ![image](https://user-images.githubusercontent.com/91117385/145333762-d84483b8-f101-4e28-8725-4c6c1833154f.png)

Xác định các lớp

Để xác định các lớp ứng viên ta dựa vào các gợi ý sau:

	Lớp ứng viên thường là các danh từ được trích ra từ các kịch bản

	Là các tác nhân (Actor)

	Biên (Boundaries)

Các danh từ là ứng viên cho các lớp thực thể thu được từ kịch bản là:

	Customer (Khách hàng), Admin (Quản lý), Account (Tài khoản), CustomerType (Loại khách hàng), Product (Sách), Category (Danh mục), Scene (Cảnh).
  
  
Sơ đồ lớp thực thể pha phân tích
 
![image](https://user-images.githubusercontent.com/91117385/145334765-14d433bc-230a-4d8b-bf4f-d1c776b45588.png)


## Tài liệu phân tích và thiết kế shapespark rõ ràng bản online

https://docs.google.com/document/d/1CgGSDITJMadTHmGl89xeoZgeK-qpvi8f/edit?rtpof=true
