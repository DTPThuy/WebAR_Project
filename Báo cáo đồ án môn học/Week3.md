#  Tìm hiểu về lập trình web php, mysql, sử dụng framework Yii2 ( template Yii2 starter kit)
## Tìm hiểu MySql
## Tìm hiểu Yii2 và cài đặt
## Tìm hiểu PHP
### 1. Giới thiệu:
- PHP (Personal Home Page) là ngôn ngữ lập trình kịch bản mã nguồn mở được dùng phổ biến để tạo ra các ứng dụng web chạy trên máy chủ. Mã lệnh PHP có thể được nhúng vào trong trang HTML nhờ sử dụng cặp thẻ PHP <?php ?>

![Hello World trong PHP](https://user-images.githubusercontent.com/74582114/140636260-d44bc030-a205-4288-b8ab-3a9f2c560eb4.png)

- Mã lệnh (Source Code): là một tập hợp các chỉ thị được viết để yêu cầu máy tính thực hiện một số tác vụ nhất định. Mã lệnh được viết dưới dạng văn bản thuần túy và con người có thể đọc được:

![dd](https://user-images.githubusercontent.com/74582114/140636368-e18e48fd-9124-420a-8a87-824165e72b8d.png)

Ví dụ đoạn mã lệnh trên đây yêu cầu máy tính thực hiện phép toán cộng giữa hai số và sau đó hiển thị ra màn hình kết quả

- Mã nguồn mở: PHP là ngôn ngữ lập trình mã nguồn mở và điều này có nghĩa là bạn có thể sử dụng PHP hoàn toàn miễn phí. PHP có thể chạy được trên nhiều nền tảng hệ điều hành khác nhau như Window, Mac OS và Linux. PHP đang là một trong những ngôn ngữ phổ biến hàng đầu được dùng trong lập trình web. 
- Tập tin PHP: các tập tin PHP chứa mã lệnh viết bằng ngôn ngữ PHP và được lưu trên máy tính (hoặc máy chủ) mới phần mở rộng là .php. Việc tạo và chỉnh sửa nội dung các tập tin này thường được thực hiện bởi một chương trình hiệu chỉnh văn bản (hay còn gọi là text editor). Dưới đây là danh sách các chương trình hiệu chỉnh mã lệnh phổ biến trên các hệ điều hành khác nhau:
    + Trên Windows: Notepad có sẵn hoặc Notepad++ (cần cài đặt thêm).
    + Trên Mac OSX: TextEdit.
    + Trên Ubuntu: Gedit hoặc Vim.
Các chương trình hiệu chỉnh mã lệnh sử dụng văn bản thuần túy để lưu trữ mã lệnh. Các ký tự trong văn bản thuần túy không chứa các định dạng format như màu sắc, cỡ chữ, phông chữ, dấu gạch dưới...
### 2. Cài đặt PHP:
Chương trình PHP có thể chạy được trên bất cứ máy tính (hoặc máy chủ) nào có cài đặt chương trình xử lý ngôn ngữ PHP. 
#### Cài đặt PHP trên Windows:
Bước 1: Tải XAMPP:
Để cài đặt XAMPP bạn truy cập vào địa chỉ apachefriends.org và tìm trong mục XAMPP for Windows để tải về phiên bản tương ứng với hệ điều hành của bạn.
Bước 2: Cài đặt XAMPP: 
Sau khi tải về XAMPP bạn nhấp đúp vào biểu tượng của tập tin để tiến hành cài đặt. Trong quá trình cài đặt máy tính sẽ hỏi bạn địa chỉ thư mục trên máy tính được sử dụng để lưu trữ tập tin thực thi chương trình xử lý PHP php.exe. Bạn có thể chọn địa chỉ mặc định là C:\xampp hoặc chọn một địa chỉ tùy ý khác.
Bước 3: Cập nhật biến môi trường:
Cuối cùng sau khi cài đặt xong PHP bạn cần thêm địa chỉ thư mục chứa tập tin php.exe vào biến môi trường (environment variables) để có thể sử dụng PHP trên cửa sổ dòng lệnh command prompt của Windows.
Bước 4: Chạy PHP:
Sau khi thực hiện các bước trên bạn có thể sử dụng cửa sổ dòng lệnh command promdt để chạy chương trình PHP. 
Để mở chương trình command prompt bạn gõ cụm từ cmd vào thanh tìm kiếm cạnh nút Start trên màn hình. Khi cửa sổ PHP hiện lên, bạn nhập câu lệnh C:\> php --version và gõ Enter. Câu lệnh sẽ hiển thị thông tin về trình xử lý PHP đã được cài đặt trên máy tính bạn.
#### Cài đặt PHP trên Mac OSX:
Trên các máy tính dùng hệ điều hành Mac OSX thì chương trình PHP thường đã được cài đặt sẵn. Để kiểm tra thông tin về phiên bản PHP đang dùng thì bạn hãy mở chương trình dòng lệnh cửa sổ terminal. Sau khi khởi động terminal, bạn có thể nhập vào câu lệnh $ php -- version và bấm Enter. Bạn sẽ thấy kết quả hiện ra như sau:

![s](https://user-images.githubusercontent.com/74582114/140637530-16e6f148-9768-49a6-b5a1-f9fe53cdca90.png)

Trường hợp trên máy tính bạn không có PHP hoặc bạn muốn nâng cấp lên phiên bản PHP mới hơn bạn có thể sử dụng chương trình Homebrew. Homebrew là chương trình dùng để quản lý các ứng dụng trên hệ điều hành Mac OSX. Việc cài đặt Homebrew được thực hiện khá đơn giản, bạn chỉ cần chạy một dòng lệnh dưới đây trên terminal:

![ss](https://user-images.githubusercontent.com/74582114/140637582-78fe8a11-93b5-4dcd-b741-14816ab89bae.png)

Sau khi cài đặt Homebrew bạn dùng câu lệnh sau để cài đặt PHP: $ brew install php
#### Cài đặt PHP trên Ubuntu:
Tương tự như Mac OSX trên hệ điều hành Ubuntu thì chương trình PHP cũng được cài đặt sẵn. Để kiểm tra phiên bản PHP đang sử dụng bạn cũng sử dụng chương trình cửa sổ dòng lệnh terminal và chạy câu lệnh giống như trên Mac.
Trên Ubuntu bạn có thể mở terminal sử dụng Launchpad hoặc sử dụng tổ hợp phím Ctrl + Alt + T. Sau khi mở terminal bạn chạy câu lệnh sau: $ php --version
Bạn sẽ thấy kết quả tương tự như trên Mac:

![hhh](https://user-images.githubusercontent.com/74582114/140637679-3b8dfe6e-334c-4afc-bcaf-1b983844cf31.png)

Trường hợp máy tính bạn không có PHP hoặc bạn muốn nâng cấp lên phiên bản PHP mới hơn bạn có thể sử dụng chương trình AptGet. AptGet là chương trình quản lý phần mềm tương tự như Homebrew nhưng dùng cho Ubuntu.
Trên cửa sổ terminal bạn chạy câu lệnh sau để cài đặt PHP: $ sudo apt-get install php55

