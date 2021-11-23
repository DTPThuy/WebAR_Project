Cài đặt Yii2-started-kit và đăng nhập với quyền admin

#Tìm hiểu API Custom Shapespark

##Thông báo về lần nhấp nút
Để nhận thông báo khi người dùng nhấp vào một nút, có thể sử dụng hàm API sau:
  Viewer.onNodeTypeClicked([nodeTypeName], callback) - callbackđược gọi với ba đối số:
- Các Node đối tượng được nhấp. Trong hệ thống phân cấp nút, một lần nhấp có thể được quy cho một nút con (ví dụ: đệm) cũng như cho bất kỳ tổ tiên nào của nó (ví dụ: ghế sofa có chứa đệm). Lệnh gọi lại được cung cấp cho nút cấp thấp nhất (đệm trong ví dụ trên).
- Điểm nhấp chuột trong tọa độ thế giới 3D dưới dạng một THREE.Vector3 đối tượng, khoảng cách từ máy ảnh đến điểm nhấp chuột tính bằng đơn vị thế giới. Nếu nodeTypeName đối số tùy chọn được đưa ra, thì đối số này callback chỉ được gọi cho các nhấp chuột trong các nút thuộc loại này. Nếu không, callback nó được gọi cho các nhấp chuột trong tất cả các nút.

##Thay thế kết cấu bằng hình ảnh hoặc video từ nguồn bên ngoài.

###Các hàm API sau đây tạo kết cấu từ hình ảnh hoặc video không được nhúng trong mô hình:
  Viewer.createTextureFromHTMLImage(image, hasAlpha=false) trả về một đối tượng kết cấu được tạo từ HTMLImageElement đã cho. Phần tử hình ảnh có thể được xác định trong HTML bằng thẻ  <img> hoặc được tạo trong JavaScript bằng cách sử dụng hàm tạo hình ảnh tích hợp sẵn . Hàm Image() tạo tạo một HTMLImageElementthể hiện mới . Nó tương đương về mặt chức năng với document.createElement('img'). Nếu has Alpha đối số là true, kênh alpha của hình ảnh có sẵn trong kết cấu.
  Viewer.createTextureFromHTMLVideo(video) trả về một đối tượng kết cấu được tạo từ HTMLVideoElement đã cho . Phần tử video có thể được xác định trong HTML bằng thẻ <video> hoặc được tạo bằng JavaScript với lệnh gọi DOM API document.createElement('video').	
Để video bắt đầu, hãy tự động đặt thuộc tính autoplay của phần tử và nếu video có đoạn âm thanh cũng đặt thuộc tính muted (không thể bắt đầu video có âm thanh không tắt tiếng mà không có sự tương tác của người dùng); để video lặp lại, hãy đặt thuộc tính loop.
Để đặt kết cấu được trả về ở một trong các vật liệu trong cảnh, vật liệu đó cần được đánh dấu là có thể chỉnh sửa. Điều này cần được thực hiện trước khi tải cảnh. Để cải thiện hiệu suất, trình tải cảnh Shapespark hợp nhất các vật liệu có các thuộc tính giống hệt nhau, sau khi hợp nhất các kết cấu và các thuộc tính vật liệu khác không thể thay đổi được: Viewer.setMaterialEditable (materialName)- nếu materialName là một chuỗi, nó đánh dấu một vật liệu duy nhất với tên đã cho là có thể chỉnh sửa; nếu materialName là một biểu thức chính quy, nó đánh dấu tất cả các tài liệu có tên phù hợp với biểu thức chính quy là có thể chỉnh sửa được.
  Viewer.setAllMaterialsEditable() - đánh dấu tất cả các vật liệu trong cảnh là có thể chỉnh sửa.
###Nguyên liệu có thể được lấy bằng hai cách:
  Viewer.getEditableMaterials() - trả về một mảng các đối tượng Material chứa tất cả các vật liệu có thể chỉnh sửa trong cảnh.
  Viewer.findMaterial(materialName) - trả về một đối tượng Material cho vật liệu có thể chỉnh sửa với tên đã cho.
Các đối tượng Material trả về có các thuộc tính kết cấu sau đây có thể được thay đổi:
  Material.baseColorTexture
  Material.roughnessTexture
  Material.metallicTexture
  Material.bumpTexture
Để tiết kiệm tài nguyên GPU và CPU, Shapespark không hiển thị cảnh khi máy ảnh không di chuyển. Do đó, sau khi thay đổi kết cấu, lệnh gọi sau là cần thiết để buộc hiển thị lại cảnh:
  Viewer.requestFrame() - buộc người xem phải kết xuất khung hình.



