#  Tìm hiểu về lập trình web php, mysql, sử dụng framework Yii2 ( template Yii2 starter kit)

## Tìm hiểu Yii2 và cài đặt

Yii là một framework php được xây dựng để phát triển các hệ thống web quy mô lớn dựa trên nền tảng các component. Yii cho phép tái sử dụng tối đa các thành phần trong hệ thống nhằm tăng tốc độ ứng dụng.

Yii là một mô hình MVC framewkork nên rất dễ sử dụng và giúp cho code dễ đọc dễ control.

Yii rất nhẹ và được trang bị giải pháp cache tối ưu nên nó đặc biệt hữu dụng cho ứng dụng web có dung lượng dữ liệu trên đường truyền lớn như web portal, forum, CMS, e-commerce, v.v.

Yii có rất nhiều các Widget giups cho quá trình code trở nên nhanh chóng và dễ dàng hơn

Cài đặt

B1:Đảm bảo bạn đã cài đặt Xampp 

![image](https://user-images.githubusercontent.com/91117385/140639514-902e9b41-15b0-48e4-a080-7fc9505a1079.png)
 

B2: Tải về và chạy Composer-Setup.exe.

```
https://getcomposer.org/download/
```
![image](https://user-images.githubusercontent.com/91117385/140639586-8c831f84-8cc8-4d51-911c-e578f56c82cb.png)

Để nhanh chóng cài đặt Composer trong thư mục hiện tại, hãy chạy tập lệnh sau trong thiết bị đầu cuối của bạn. 

```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

Update composer

```
composer self-update.
```

Thực hiện các lệnh 
```
composer global require "fxp/composer-asset-plugin:^1.4.1"

composer create-project --prefer-dist yiisoft/yii2-app-basic basic
```

B3: Tải gói cài đặt từ yiiframework.com.

https://www.yiiframework.com/download

Giải nén file tải về vào một thư mục Web của ứng dụng cần chạy.

B4:Sửa đồi file config/web.php bởi nhập thông tin secret key cookieValidationKey ở mục cấu hình (này được thực hiện tự động nếu bạn đang cài đặt Yii sử dụng Composer):

Sau khi cài đặt, bạn có thể sử dụng trình duyệt để truy cập ứng dụng Yii được cài đặt với URL dưới đây:

```
http://localhost/yii/basic/web/index.php
```
với yii/basic là đường dẫn đến thư mục cài đặt yii bạn

 ![image](https://user-images.githubusercontent.com/91117385/140639530-f6ffa809-7b1a-4f3e-abee-7b3091f4b397.png)

 

Đăng nhập với
 
Username: admin

Password: admin

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

### 3. Các toán tử PHP được sử dụng phổ biến 
- Toán tử số học: PHP hỗ trị hầu hết các toán tử số học như cộng +, trừ -, nhân *, chia /, lũy thừa pow() và tính phần dư %.
- Toán tử gán giá trị
- Toán tử so sánh: dùng để so sánh hai giá trị dạng số hoặc dạng chuỗi với nhau.
- Toán tử tăng giảm : 1 đơn vị được sử dụng để tăng (hoặc giảm) giá trị của biến cho trước 1 đơn vị
- Toán tử logic : được dùng để thực hiện các phép toán về logic. Ba toán tử logic được sử dụng phổ biến trong lập trình đó là:
        && và and : Toán tử logic hợp
        || và or : Toán tử logic tuyển
- Toán tử nối chuỗi: Để nối chuỗi lại với nhau chúng ta dùng toán tử `.
- Toán tử nối chuỗi và gán .= sẽ thực hiện việc nối chỗi hiện tại với một chỗi mới rồi sau đó gán giá trị này cho chính chuỗi ban đầu.
### 4. Cú pháp
#### Thẻ PHP:
Mã lệnh PHP được đặt trong cặp mở <?php và thẻ đóng ?>. Ví dụ:

![1](https://user-images.githubusercontent.com/74582114/140648058-7c0d7101-4cfd-4f9e-aea3-64e8a85c67c0.png)

#### Câu lệnh:
Câu lệnh (hay statement) trong PHP được tạo ra để thực hiện một tác vụ nào, một câu lệnh thường được viết trong một dòng và kết thúc bởi dấu ;.
Câu lệnh không nhất thiết phải in ra một cái gì đó mà đơn giản nó thực hiện một hành động nhất định. Ví dụ câu lệnh dưới đây được dùng để thực hiện phép toán cộng giữa 2 số:

![ex1](https://user-images.githubusercontent.com/74582114/140649178-4ca8f52f-f0ad-4142-ad0c-1ee7ac58978c.png)

#### Chú thích:
Chú thích (hay comment) được dùng để giải thích tóm tắt nội dung hoặc mục đích của một hoặc một nhóm các câu lệnh.
Trong PHP bạn có thể viết comment theo 2 kiểu sử dụng ký tự // hoặc /* */ như sau:

![ex2](https://user-images.githubusercontent.com/74582114/140649217-fa6ff208-1211-4da1-944a-e1641fe72fa3.png)

Với các chú thích có độ dài 1 dòng thì chúng ta thường dùng kiểu comment //. Ngược lại các chú thích nhiều dòng sẽ thường được viết sử dụng kiểu /* */

### 5. Biến
Biến được sử dụng để lưu trữ dữ liệu tạm thời trong chương trình và giá trị của biến có thể được thay đối trong khi chạy chương trình.
#### Khởi tạo biến
Trước khi có thể sử dụng biến thì chúng ta cần khởi tạo biến. Trong PHP việc khởi tạo biến bao gồm đặt tên biến và sau đó gán một giá trị cho biến. Biến trong PHP được bắt đầu bằng ký tự $ và theo sau đó là tên biến.

![ex3](https://user-images.githubusercontent.com/74582114/140649256-0057b96c-270b-49d3-9bbb-f8c2e47c05fb.png)

#### Tên biến
Trong PHP, tên biến có thể bao gồm chữ cái (in hoa hoặc in thường: từ a-z hoặc A-Z), hoặc dấu gạch dưới. Tuy nhiên tên biến phải được bắt đầu bằng chữ cái hoặc dấu gạch dưới.

![ex4](https://user-images.githubusercontent.com/74582114/140649282-0825cac0-2b99-4da0-b790-8d4c33ff8ab7.png)

#### Kiểu dữ liệu của biến
PHP là ngôn ngữ kiểu động hay dynamic type. Điều này cho phép giá trị của biến có thể thay đổi kiểu dữ liệu ví dụ từ kiểu số sang kiểu chuỗi:

![ex5](https://user-images.githubusercontent.com/74582114/140649315-93a0c46a-0646-463e-8619-3b171e78540a.png)

### 6. echo và print trong PHP
Chúng ta có thể hiển thị dữ liệu ra màn hình bằng cách sử dụng echo hoặc print.
#### Câu lệnh echo:
Câu lệnh echo được sử dụng để hiển thị kết quả của một hoặc nhiều chuỗi ký tự, biến hoặc biểu thức toán học....

![ex6](https://user-images.githubusercontent.com/74582114/140649341-9eb90147-c2ea-4dd5-808f-77fcc3cc77e4.png)

Lưu ý: echo là một cấu trúc được cung cấp sẵn (language construct) bởi ngôn ngữ PHP và không phải là một hàm. Do đó khi sử dụng echo chúng ta không cần đặt giá trị cần hiển thị bên trong cặp dấu ngoặc như khi gọi hàm.

Chúng ta sẽ tìm hiểu chi tiết về hàm và cách sử dụng hàm trong các bài học sau.

Để nối chuối lại với nhau chúng ta sử dụng dấu chấm .:

![ex7](https://user-images.githubusercontent.com/74582114/140649357-5780ac27-ceb4-4986-b35d-0826be0f23dc.png)

Khi nối một chuỗi với một số (integer hoặc float) PHP sẽ tự động chuyển đổi giá trị số này về dạng chuỗi rồi thực hiện việc nối chuỗi như thông thường:

![ex8](https://user-images.githubusercontent.com/74582114/140649410-b38421d8-b958-4deb-8011-e57609edf18f.png)

#### Câu lệnh print:
Câu Lệnh print được dùng để hiển thị giá trị của một giá trị dạng chuỗi, biến hoặc kết quả của biểu thức...

![ex9](https://user-images.githubusercontent.com/74582114/140649429-062c113f-16ab-4608-a1eb-25fd444b6ed9.png)

Tương tự như echo thì print cũng không phải là hàm do đó khi sử dụng câu lệnh print chúng ta không cần đặt giá trị cần in bên trong cặp dấu ngoặc ().
### 7. Kiểu dữ liệu trong PHP
#### Kiểu chuỗi (String)
Kiểu dữ liệu chuỗi (hay string) trong PHP bao gồm tất cả các ký tự kể cả ký tự trắng và được đặt bên trong cặp dấu nháy kép " " hoặc cặp dấu nháy đơn ' ':

![ex10](https://user-images.githubusercontent.com/74582114/140649456-8e796448-a756-4c85-a050-2cd4d5002688.png)

#### Kiểu số nguyên (Integer)
Kiểu dữ liệu số nguyên (hay integer) trong PHP dùng để biểu diễn các số nguyên trong toán học:

![ex11](https://user-images.githubusercontent.com/74582114/140649476-4bd11e4b-5336-4d0a-b1c2-bb865ac6e6eb.png)

#### Kiểu Float
Kiểu dữ liệu float trong PHP dùng để biểu diễn các số thập phân (vô hạn hoặc hữu hạn) và số thực trong toán học nhưng không phải là số nguyên.

![float](https://user-images.githubusercontent.com/74582114/140649502-eca1ac11-fe44-46e1-b947-75c21c9241e4.png)

#### Kiểu mảng (Array)
Kiểu mảng (array) trong PHP là một kiểu dữ liệu đặc biệt có thể lưu trữ một hoặc nhiều giá trị bên trong nó bao gồm cả mảng.
Mảng bao gồm các phần từ khác nhau bên trong nó. Mỗi phần tử lưu trữ một giá trị và được đánh một khoá duy nhất để phân biệt với các phần tử khác trong cùng mảng.

![array](https://user-images.githubusercontent.com/74582114/140649533-88e71a38-0f08-4e79-8d42-11486d3883f3.png)

Ví dụ trên biến $top_car_brands có giá trị là một mảng gồm 5 phần tử khác nhau. Mỗi phần tử được đánh số thứ tự từ 0 cho tới 4. Các số thứ tự này cũng chính là khoá của phần tử.
Để truy cập giá trị của phần tử chúng ta sử dụng tới khoá của phần tử đó đặt bên trong cặp dấu ngoặc vuông []:

![arr](https://user-images.githubusercontent.com/74582114/140649566-50f01e97-e15e-4716-b93c-7edba39531fb.png)

#### Kiểu Boolean
Kiểu dữ liệu boolean trong PHP chỉ bao gồm hai giá trị là true và false:

![boolean](https://user-images.githubusercontent.com/74582114/140649588-5713cfe3-f5c3-4d83-b203-871799f0a0c7.png)

Dữ liệu kiểu boolean thường xuất hiện trong các phép toán logic như logic so sánh ngang bằng, nhỏ hơn, lớn hơn, logic phủ định, logic và, logic hoặc...:

![bl](https://user-images.githubusercontent.com/74582114/140649614-8711e6eb-4470-4c01-bb94-4bf52af0fa05.png)

#### Kiểu NULL
Kiểu dữ liệu NULL trong PHP khá đặc biệt bởi nó chỉ gồm một giá trị duy nhất là chính nó, khi một biến có giá trị là null thì điều này có ý nghĩa là chưa có giá trị nào được gán cho nó.

![null](https://user-images.githubusercontent.com/74582114/140649641-c53966bb-46d6-40e4-bcb2-2eefad1b7ef7.png)

Kiểu dữ liệu NULL phổ biến khi chúng ta truy vấn dữ liệu trong cơ sở dữ liệu và không có giá trị nào tương ứng trả về.
### 8. Hàm trong PHP
Cú pháp tổng quát khai báo hàm trong PHP là:

    function func_name($vars)
    {
        // các đoạn code
        return $val;
    }
Chúng ta cũng có thể định nghĩa hàm với nhiều đối số khác nhau:

    <?php
        function print_sum($number_1, $number_2) {
           print $number_1 + $number_2;
        }
        print_sum(2, 3);
    ?>
Hàm có thể trả về một giá trị khi được gọi. Để khai báo một hàm với giá trị trả về chúng ta sử dụng từ khoá return:

    function sum($num1, $num2) {
        return $num1 + $num2;
    }

### 9. Cấu Trúc Điều Khiển 
Trong lập trình, cấu trúc điều khiển hay còn gọi là control structure được sử dụng để điều khiển luồng chạy của chương trình.
PHP cung cấp các cấu trúc điều khiển sau đây:
    •	Câu lệnh if.
    •	Câu lệnh if...else.
    •	Câu lệnh if...elseif.
    •	Câu lệnh switch

#### Câu lệnh if else
    if (biểu thức điều kiện thứ nhất) { 
    // đoạn code được thực thi khi biểu thức điều kiện thử nhất có giá trị là true 
    } else if (biểu thức điều kiện thứ 2) { 
    // đoạn code được thực thi khi biểu thức điều kiện thứ nhất có giá trị là false // đồng thời biểu thức thứ hai có giá trị là true 
    } else { 
    // đoạn code được thực thi khi cả hai biểu thức điều kiện ở trên có giá trị là false 
    }

#### Câu lện switch case

    switch (biến_hoặc_biểu_thức) { 
    case giá_trị_so_sánh_1: 
    // code được thực thi nếu giá trị biểu thức bằng với giá_trị_so_sánh_1 
    break; 
    case giá_trị_so_sánh_2: 
    // code được thực thi nếu giá trị biểu thức bằng với giá_trị_so_sánh_2 
    break; 
    case giá_trị_so_sánh_3:
     // code được thực thi nếu giá trị biểu thức bằng với giá_trị_so_sánh_3 
    break; 
    ... default:
     // code được thực thi nếu giá trị biểu thức khác với  tất cả các giá trị so sánh ở trên
     break; }
### 10. Vòng lặp
Trong PHP chúng ta có các loại vòng lặp sau:
•	Vòng lặp while.
•	Vòng lặp do...while.
•	Vòng lặp for.
•	Vòng lặp foreach.

#### Vòng lặp for
    for ($bien_dieu_khien; $bieu_thuc_dieu_kien; $bieu_thuc_thay_doi_bien_dieu_khien)
    {
        // lệnh
    }

Trong đó
-	$bien_dieu_khien: là một câu lệnh gán giá trị ban đầu cho biến điều khiển trước khi thực hiên vòng lặp, hoặc là một biến có giá trị sẵn mà ta đã truyền vào cho nó trước khi tạo vòng lặp này, lệnh này được thực hiện duy nhất một lần.
-	$bieu_thuc_dieu_kien: là một biểu thức quan hệ xác định điều kiện thoát khỏi vòng lặp.
-	$bieu_thuc_thay_doi_bien_dieu_khien: Xác định biến điều khiển sẽ bị thay đổi như thế nào sau mỗi lần lặp được lặp lại (thường là tăng hoặc giảm giá trị của biến điều khiển).


#### Cấu trúc vòng lặp while
    while ($condition) {
        // dòng lệnh
    }
Trong đó $condition là điều kiện để dừng vòng lặp. Nếu $condition có giá trị false thì vòng lặp kết thúc, ngược lại vòng lặp sẽ tiếp tục lặp. Vòng lặp while sẽ lặp vô hạn nếu biểu thức điều kiện bạn truyền vào luôn luôn đúng.
#### Cấu trúc vòng lặp do while
Vòng lặp while sẽ kiểm tra điều kiện trước rồi thực hiện câu lệnh bên trong vòng lặp, còn vòng lặp do while thì ngược lại sẽ thực hiện câu lệnh bên trong vòng lặp trước rồi mới kiểm tra điều kiện. Nếu điều kiện đúng thì sẽ thực hiện tiếp vòng lặp kế tiếp, nếu điều kiện sai thì sẽ dừng vòng lặp. Vòng lặp do while trong php luôn luôn thực hiện ít nhất một lần lặp vì nó thực hiện trước rồi mới kiểm tra điều kiện.

    do {
        // dòng lệnh
    } while ($condition);
### 11. Cú pháp vòng lặp foreach trong PHP
Vòng lặp foreach tự động lặp qua các phần tử trong mảng, nó lặp cho khi nào tới phần tử cuối cùng thì thôi. 

	foreach ($array as $key => $value){
    // Các dòng lệnh
    }
Hoặc:

    foreach ($array as $value){
    // Các dòng lệnh
    }
Trong đó $array là mảng cần lặp, $key là số chỉ mục (mảng có chỉ mục) hoặc là key (trong mảng kết hợp), $value là giá trị của phần tử ở vị trí $key.

### 12. Mảng 
Mảng là kiểu dữ liệu cho phép chúng ta lưu trữ nhiều giá trị trong nó bao gồm việc lưu trữ giá trị của một hoặc nhiều mảng khác.

Mảng trong PHP được chia thành 3 loại khác nhau đó là:

- Mảng đánh số thứ tự (indexed array)
- Mảng kết hợp (associative array)
- Mảng đa chiều (multidimensional array)

Cả 3 loại trên đều có chung một cú pháp khi tạo mảng.

#### Cú Pháp Tạo Mảng
Để tạo mảng trong PHP chúng ta có thể sử dụng cú pháp:  array()
Với các phiên bản PHP từ 5.4 trở về sau chúng ta có thể sử dụng cú pháp ngắn gọn hơn như sau:   []
Ví dụ:

    $top_car_brands = array("Toyota", "Honda", "BMW", "Ford", "Hyundai");
    $top_car_brands =["Toyota", "Honda", "BMW", "Ford", "Hyundai"];
    
Đếm số lượng phần tử trong một mảng PHP chúng ta sử dụng hàm count().

Mảng đánh số thứ tự (indexed array) trong PHP là loại mảng mà các phần tử được đánh số thứ tự là các số tự nhiên.

Mảng dưới đây là một mảng đánh số thứ tự với các khoá là các số tự nhiên liên tiếp bắt đầu từ 0:

    <?php 
    $top_car_brands = array("Toyota", "Honda", "BMW", "Ford", "Hyundai"); 
    print_r($top_car_brands); 
    ?>
- Mảng Kết Hợp - Associative Array

- Mảng Đa Chiều (Multidimensional Array) là loại mảng mà nó chứa một mảng khác bên trong nó

- Thay Đổi Giá Trị Của Phần Tử trong Mảng: Để thay đổi giá trị của phần tử trong mảng chúng ta sử dụng toán tử gán giá trị cho phần tử đó

- Thêm Phần Tử Vào Mảng: Để thêm phần tử vào mảng chúng ta sử dụng toán tử gán giá trị với khoá tương ứng cho phần tử được thêm vào

- Thêm Phần Tử Vào Cuối Mảng : Khi thêm phần tử vào mảng mà không sử dụng khoá cho phần tử này thì nó sẽ tự động được thêm vào sau phần tử cuối mảng trong mảng hiện tại

- Xoá Phần Tử trong Mảng : Để xoá phần tử trong một mảng cho trước, chúng ta sử dụng hàm unset()

- Mảng Rỗng : Mảng rỗng là mảng mà không chứa bất cứ phần tử nào

## Tìm hiểu MySql

### Class Active Record
Để thể hiện và thao tác với bảng dữ liệu country, ta tạo mới class Country, và lưu vào file models/Country.php.
```php
<?php

namespace app\models;

use yii\db\ActiveRecord;

class Country extends ActiveRecord
{
}
```

### Create Action
Để hiển thị dữ liệu country tới người dùng, bạn cần tạo mới hành động. 
Thay vì đặt các hành động ở site controller, giống như đã làm ở phần trước, thì tạo controller mới có ý nghĩa hơn đặc biệt liên quan tới dữ liệu về coutry. 
Tên controller là CountryController, và tạo mới hành động index ở trong đó, bạn có thể tham khảo ở phần dưới.
Mục đích khi dùng đối tượng Pagination là:
- Thiết lập điều kiện offset và limit cho câu lệnh mỗi khi lấy liệu ra (mỗi lần chỉ hiển thị 5 kết quả).
- Dữ liệu được nhúng vào view để hiển thị số trang và bao gồm danh sách các button, sẽ được giải thích ở phần sau.

Lưu nội dung đoạn mã vào file controllers/CountryController.php.

```php
<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;

class CountryController extends Controller
{
    public function actionIndex()
    {
        $query = Country::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
}
```

### Create View
Trong thư mục views, bước một tạo thư mục con là country. 
Thư mực này được dùng để giữ những view được đổ ra từ controller country. 
Trong thư mục views/country, tạo mới file tên là index.php và chứa đoạn mã sau:
```php
<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Countries</h1>
<ul>
<?php foreach ($countries as $country): ?>
    <li>
        <?= Html::encode("{$country->name} ({$country->code})") ?>:
        <?= $country->population ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
```
View trên có 2 phần liên quan tới hiển thị dữ liệu về country. Phần đầu tiên, cung cấp danh sách country và in ra dưới dạng danh sách . 
Phần tiếp, một widget yii\widgets\LinkPager được sinh ra và dùng các thông tin truyển từ action xuống để phân trang. 
Đối tượng LinkPager là một widget có chức năng hiển thị danh sách các button. Mỗi khi click vào mỗi button này sẻ cập nhật lại dữ liệu country ở mỗi trang tương ứng.

### Result
Sau khi chạy file index.php trong thư mục country ta trên hostlocal sẽ được như sau:

![result](https://user-images.githubusercontent.com/84367730/140644724-c74dc0bd-4dbb-4e1a-8d4c-b2f03bfa608f.png)

