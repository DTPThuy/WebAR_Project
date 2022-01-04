# Migrate DB
## 1.Sơ qua về Database migration
Database migrations, còn được gọi là di chuyển lược đồ, di chuyển lược đồ cơ sở dữ liệu hoặc đơn giản là di chuyển, là các tập hợp thay đổi được kiểm soát được phát triển để sửa đổi cấu trúc của các đối tượng trong cơ sở dữ liệu quan hệ. 

Di chuyển giúp chuyển tiếp lược đồ cơ sở dữ liệu từ trạng thái hiện tại của chúng sang trạng thái mong muốn mới, cho dù điều đó liên quan đến việc thêm bảng và cột, loại bỏ các phần tử, tách trường hoặc thay đổi loại và ràng buộc.

Migration là một tính năng của Actiᴠe record cho phép thaу đổi cả cấu trúc ᴠà dữ liệu trong databaѕe.

Thaу ᴠì thaу đổi trực tiếp ᴠào databaѕe thì Railѕ cho phép ѕử dụng Rubу DSL để mô tả ᴠiệc thaу đổi các table.

Migration là một cách thuận tiện để thay đổi cấu trúc bảng và dữ liệu trong database 1 cách dễ dàng. 

Bằng cách sử dụng Ruby DSL ta không cần phải viết SQL bằng tay, nó có thể giúp thay đổi database 1 cách độc lập. 

Tưởng tượng mỗi migration tương ứng vs 1 version của database. 

Ban đầu, schema là rỗng, và mỗi lần migration thì sẽ modify để add hoặc remove table, columns hoặc rows. Active record biết cách để update schema theo thời gian. Và từ bất cứ thời điểm nào trong quá khứ cũng có thể update version của schema đến bản mới nhất. Active record cũng sẽ update file db/schema.rb để làm cho thống nhất với cấu trúc mới nhất của database. Ví dụ về 1 migration:

```
class CreateProducts < ActiveRecord::Migration[5.0]
  def change
    create_table :products do |t|
      t.string :name
      t.text :description
      t.timestamps
    end
  end
end
```

Đây là 1 migration tạo bảng products trong database.

Có 2 trường đó là name và description. 

Một cột khóa chính là id cũng sẽ được thêm vào sau khi chạy migration này, đây là khóa chính mặc định cho tất cả model của Active Record. timestamps sẽ thêm vào bảng 2 cột đó là : created_at và updated_at. Các cột này sẽ được quản lý tự động bởi ActiveRecord nếu chúng tồn tại Trước khi thực hiện migration thì không tồn tại table nào cả. Run migration thì table sẽ được sinh ra. Và Active record cũng có cách để back lại cái migration lúc nãy bằng cách là Rollback lại cái migration đó thì bảng được tạo lúc trước sẽ bị xóa.

## 2.	Ưu điểm của các công cụ di chuyển là gì?

Việc di chuyển rất hữu ích vì chúng cho phép các lược đồ cơ sở dữ liệu phát triển khi các yêu cầu thay đổi. Chúng giúp các nhà phát triển lập kế hoạch, xác thực và áp dụng các thay đổi giản đồ một cách an toàn cho môi trường của họ. Những thay đổi được phân vùng này được xác định ở mức độ chi tiết và mô tả các phép biến đổi phải diễn ra để di chuyển giữa các "phiên bản" khác nhau của cơ sở dữ liệu.

## 3. Tạo migration
### 3.1 Tạo migration

Migration được lưu tại thành các file tại db/migrate. 

Tên của các file migration sẽ theo dạng ```YYYYMMDDHHMMSS_create_products.rb``` . 

File name kèm theo thời gian để phân biệt các version migration.

Ví dụ: 

file name là 20080906120000_create_products.rb thì class CreateProducts phải được định nghĩa. Rails sử dụng dấu thời gian này để xác định migration nào cần được chạy và theo thứ tự nào, do đó, nếu bạn đang sao chép migration từ một ứng dụng khác hoặc tự tạo ra một tệp tin, hãy nhận biết vị trí của nó theo thứ tự. Và tất nhiên, cứ mỗi lần tạo migration chúng ta k thể ngồi tính thời gian để tạo file dc. Active Record cung cấp một cách tạo đơn giản, dễ dàng:

```$ bin/rails generate migration AddPartNumberToProducts```

Câu lệnh sẽ tạo ra 1 migration mới:

```class AddPartNumberToProducts < ActiveRecord::Migration[5.0]
  def change
  end
end
```

Nếu migration tên có dạng ```"AddXXXToYYY"``` hoặc ```"RemoveXXXFromYYY"``` sẽ tạo ra các migration add_column hoặc remove_column.

Ta có thể thêm vào các column và type của chúng theo sau:

```$ bin/rails generate migration AddPartNumberToProducts part_number:string```

sẽ tạo ra:
```
class AddPartNumberToProducts < ActiveRecord::Migration[5.0]
  def change
    add_column :products, :part_number, :string
  end
end
```
Các migration có tên theo dạng CreateXXX và theo sau là danh sách các tên column và type của chúng sẽ tạo ra table có tên XXX với những column đã liệt kê. Ví dụ:

```$ bin/rails generate migration CreateProducts name:string part_number:string```

Sẽ tạo ra migration:

```class CreateProducts < ActiveRecord::Migration[5.0]
  def change
    create_table :products do |t|
      t.string :name
      t.string :part_number
    end
  end
end
```
### 3.2 Tạo model

Khi tạo model có thể tạo migration theo đó. Ví dụ chúng ta tạo 1 model mới tên là Product.

```$ bin/rails generate model Product name:string description:text```

Nó sẽ tạo ra 1 migration mới như sau:

```class CreateProducts < ActiveRecord::Migration[5.0]
  def change
    create_table :products do |t|
      t.string :name
      t.text :description
 
      t.timestamps
    end
  end
end
```
## 4. Chạy migration

Rails cung cấp 1 tập hợp của bin/rails tasks để chạy migration Đầu tiên câu lệnh chúng ta hay sử dụng nhất đó là rails db:migrate . 

Ở đây nó chỉ chạy các migration chưa chạy,các migration chạy rồi nó sẽ k chạy lại nữa. 

Nó sẽ chạy theo thứ tự thời gian Một lưu ý là khi chạy db:migrate nó cũng sẽ tự động chạy ```db:schema:dump``` để cập nhập file ```db/schema.rb``` cho trùng khớp với cấu trúc database của bạn Nếu bạn muốn chạy 1 migration cụ thể. chúng ta có thể chạy bằng cách lấy tên version là dãy số dài ở file migration và chạy:

```$ bin/rails db:migrate VERSION=20080906120000```

Nếu như version 20080906120000 lớn hơn version hiện tại, nó sẽ chạy những thay đổi (up method) của tất cả các migration bao gồm cả 20080906120000 và sẽ không chạy bất kì các migration sau nó.

### 4.1 Rolling back

Rollback được sử dụng khi chúng ta tạo sai 1 migration và muốn sửa chúng, muốn quay lại tại thời điểm chạy migration lỗi đó. 

Ta có thể quay lại migration trước bằng cách:
```$ bin/rails db:rollback```

Nó sẽ rollback tại thời điểm mới nhất của migration, nếumuốn rollback lại nhiều version trước đó nữa thì chỉ định parameter STEP. Ví dụ:

```$ bin/rails db:rollback STEP=3```

Nó sẽ revert 3 migration gần nhất. Ta dùng db:migrate:redo để chạy roll back và migration lại:

```$ bin/rails db:migrate:redo STEP=3```

Đây là các cách giúp chúng ta sửa sai các migration mà không cần phải reset migration.

### 4.2 Cài đặt database

Ta dùng db:setup sẽ giúp tạo ra database và load schema và khởi tạo chúng với seed.

### 4.3 Reset database

Dùng db:reset để dropdatabase và cài đặt lại nó. Nó tương đương với 2 câu lệnh: db:drop và db:setup.

### 4.4 Chạy 1 migration bất kì
Nếu bạn muốn chạy 1 migration với up hoặc down, ta có thể dùng db:migrate:up và db:migrate:down. Và thêm version đằng sau để xác định đó là file migration nào
```$ bin/rails db:migrate:up VERSION=20080906120000```
sẽ chạy 20080906120000 với những thay đổi (up method). 
Nó cũng kiểm tra xem migration này đã chạy chưa và sẽ không làm gì hết nếu Active Record xác định nó đã được chạy

4.5 Chạy migration trên các môi trường khác nhau

Mặc đinh nếu chạy db:migrate nó sẽ chạy trên môi trường development. 

Nếu bạn muốn nó chạy trên các môi trường khác thì chỉ cần thêm biến môi trường vào đằng sau đó là RAILS_ENV.

Ở đây mình muốn chạy migrate trên môi trường test:
```$ bin/rails db:migrate RAILS_ENV=test```
## 5. Schema
### 5.1 Mục đích

File schema sẽ giúp bạn có thể biết các thuộc tính của đối tượng Active Record có. 

Những thông tin này nó không có trong code model và thông qua các migration nó được tạo ra.

### 5.2 Các loại Schema Dump

Có 2 phương pháp để Dump schema. 

Cách dump thì được setting trong file config/application.rb của config.active_record.schema_format. 

Chỉ định sql hoặc là :ruby Nếu chỉ định :ruby thì schema sẽ được lưu ở db/schema.rb. 

Mở file này có chắc chắn có thể nhìn thấy giống như là 1 bảng migration lớn.
```
ActiveRecord::Schema.define(version: 20080906171750) do
  create_table "authors", force: true do |t|
    t.string   "name"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  create_table "products", force: true do |t|
    t.string   "name"
    t.text     "description"
    t.datetime "created_at"
    t.datetime "updated_at"
    t.string   "part_number"
  end
end
```
## 6. Migration và Seed data

Migration có thể sử dụng để thêm hoặc sửa data. Nó rất hữu dụng với 1 database đã tồn tại sẵn và không thể xóa hoặc tạo lại, ví dụ như production database. Ta có thể viết như sau:
```
class AddInitialProducts < ActiveRecord::Migration[5.0]
  def up
    5.times do |i|
      Product.create(name: "Product ##{i}", description: "A product.")
    end
  end
 
  def down
    Product.delete_all
  end
end
```
Để thêm dữ liệu sau khi database được tạo. 


Rails có một tính năng có thể giúp quá trình này trở nên nhanh chóng.

Bằng cách thêm code vào db/seeds.rb và chạy rails db:seed.

# MVC
## 1.Mô hình MVC là gì? Các thành phần của MVC

MVC là từ viết tắt bởi 3 từ Model – View – Controller. 

Đây là mô hình thiết kế sử dụng trong kỹ thuật phần mềm. 

Mô hình source code thành 3 phần, tương ứng mỗi từ. Mỗi từ tương ứng với một hoạt động tách biệt trong một mô hình.

Mô hình MVC (MVC pattern) thường được dùng để phát triển giao diện người dùng. 

Nó cung cấp các thành phần cơ bản để thiết kế một chương trình cho máy tính hoặc điện thoại di động, cũng như là các ứng dụng web.
 
Mô hình MVC gồm 3 loại chính là thành phần bên trong không thể thiếu khi áp dụng mô hình này:

•	Model: Một model là dữ liệu được sử dụng bởi chương tình. Đây có thể là cơ sở dữ liệu, file hay một đối tượng đơn giản. 

Chẳng hạn như biểu tượng hay là một nhân vật trong game.

•	View: View là phương tiện hiển thị các đối tượng trong một ứng dụng.

Chẳng hạn như hiển thị một cửa sổ, nút hay văn bản trong một cửa sổ khác.

Nó bao gồm bất cứ thứ gì mà người dùng có thể nhìn thấy được.

•	Controller: Một controller bao gồm cả Model lẫn View. Nó nhận input và thực hiện các update tương ứng.

## 2.Sự tương tác giữa các thành phần

•	Controller tương tác với qua lại với View

•	Controller tương tác qua lại với Model

•	Model và View không có sự tương tác với nhau mà nó tương tác với nhau thông qua Controller.

## 3. Luồng xử lý trong MVC

Luồng xử lý trong của mô hình MVC, bạn có thể hình dung cụ thể và chi tiết qua từng bước dưới đây:

•	Khi một yêu cầu của từ máy khách (Client) gửi đến Server. Thì bị Controller trong MVC chặn lại để xem đó là URL request hay sự kiện.

•	Sau đó, Controller xử lý input của user rồi giao tiếp với Model trong MVC.

•	Model chuẩn bị data và gửi lại cho Controller.

•	Cuối cùng, khi xử lý xong yêu cầu thì Controller gửi dữ liệu trở lại View và hiển thị cho người dùng trên trình duyệt.

Ở đây, View không giao tiếp trực tiếp với Model.

Sự tương tác giữa View và Model sẽ chỉ được xử lý bởi Controller.

## 4.Ưu và Nhược điểm của MVC

Ưu điểm MVC

•	Trình tự xử lý rất rõ ràng

•	Mô hình MVC quy hoạch các class/function vào các thành phần riêng biêt Controller - Model - View, việc đó làm cho quá trình phát triển - quản lý - vận hành - bảo trì web diễn ra thuận lợi hơn, tạo ra được các chức năng chuyên biệt hoá đồng thời kiểm soát được luồng xử lý.

•	Tạo mô hình chuẩn cho dự án, khi người có chuyên môn ngoài dự án tiếp cận với dự án dễ dàng hơn.

•	Mô hình đơn giản, dễ hiểu, xử lý những nghiệp vụ đơn giản, và dễ dàng triển khai với các dự án nhỏ.

Nhược điểm mô hình MVC

•	Đối với các dự án có tính phức tạp cao thì mô hình MVC trở nên không khả dụng.

## 5.Một số mô hình khác MVC được sử dụng trong lập trình web
### 1. MVP

Bao gồm 3 thành phần chính: Model, View, và Presenter.

Mô hình MVP có sự phân tách rõ ràng giữa Model và View. 

Mối liên kết duy nhất giữa View và Presenter là thông qua các dữ liệu.

Trong MVP, View là bộ phận có chức năng ủy thác đầu vào cho Presenter.

Mỗi View đều có một liên kết với Presenter tương ứng thông qua giao diện.

Mô hình này thường được sử dụng khi không thể binding dữ liệu qua DataContext.

### 2. MVVM

Là mô hình bao gồm các thành phần: Model, View, ViewModel. 

Mô hình này có khả năng ràng buộc dữ liệu giữa 2 thành phần của hệ thống là View và ViewModel. 

Đây là chức năng giúp tách biệt rõ ràng giữa giao diện của người dùng và ứng dụng một cách logic.

MVVM thích hợp với WPF và Silverlight. 

Khi sử dụng MVVM cho WPF hay Silverlight, sẽ không có các thao tác xử lý sự kiện điển hình vốn được dùng trong code giao diện. 

Nó được sử dụng khi có thể binding dữ liệu qua DataContext.

Riêng đối với MVC, mô hình này được sử dụng khi MVVM hay MVP không phát huy hiệu quả trong quá trình lập trình web. 

Đa phần đó là tình huống mà View và những phần còn lại của chương trình không phải luôn luôn ở trạng thái available


### Sử dụng Gii để sinh code

Yii cung cấp Gii như một module. 

Bạn có thể nhúng Gii bằng việc cấu hình các thuộc tính của ứng dụng ở phần modules . 

Tùy thuộc vào ứng dụng của bạn, bạn có thể nhìn thấy được những đoạn mã sau được cung cấp trong file cấu hình config/web.php:
$config = [ ... ];
```
if (YII_ENV_DEV) {
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}
```

Phần cấu hình trên được đề cập ở mục Môi trường phát triển, ứng dụng bao gồm module tên là gii, nằm ở lớp yii\gii\Module.

Nếu bạn xem qua file entry script web/index.php trong ứng dụng của bạn, bạn sẽ thấy dòng sau, Điều này chủ yếu thiết lập tham số YII_ENV_DEV có giá trị true.
```
defined('YII_ENV') or define('YII_ENV', 'dev');
```

Dựa vào dòng này, ứng dụng sẽ được thiết lập ở chế độ phát triển, và sẵn sàng nhúng Gii vào ứng dụng, ở mỗi cấu hình trên. 

Bây giờ bạn có thể truy cập Gii qua đường dẫn:
```http://hostname/index.php?r=gii```

Lưu ý: Nếu bạn muốn truy cập Gii không chỉ từ localhost mà còn từ các máy khác, mặc định các truy cập sẽ bị từ chối để đảm bảo sự an toàn hơn. 

Bạn có thể cấu hình Gii bằng việc thêm địa chỉ IP được phép gọi như sau,
```
'gii' => [
    'class' => 'yii\gii\Module',
    'allowedIPs' => ['127.0.0.1', '::1', '192.168.0.*', '192.168.178.20'] // thêm những địa chỉ ip
],
```
Sinh các lớp Active Record

Để dùng gii cho việc sinh các lớp Active Record, chọn "Model Generator" (bằng việc click vào link trên trang chính của Gii). Và điền các thông tin vào form như sau:

•	Tên bảng: country

•	Tên lớp: Country
 
Tiếp đến, nhấn vào nút "Preview". 

Bạn sẽ thấy class models/Country.php ở danh sách các class được tạo ra. Bạn phải chọn vào tên class để xem nội dung.

Khi sử dụng Gii, nếu bạn đã tạo file tương tự và cần được ghi đè lên,nhấp vào nút diff bên cạnh tên tập tin để thấy sự khác biệt giữa các mã được tạo ra và các phiên bản hiện tại.
 
Khi bạn muốn ghi đè vào file đã có, kiểm tra tiếp ở ô "overwrite" và click vào nút "Generate". Nếu bạn tạo mới file, bạn chỉ việc click vào nút "Generate".

Tiếp theo, bạn sẽ thấy một trang xác nhận cho thấy các mã đã được tạo thành công. Nếu đã tồn tại file, 
bạn cũng sẽ thấy một thông báo rằng nó đã được ghi đè bằng các mã mới được tạo ra.

Sinh các mã nguồn CRUD

CRUD là chuẩn cho việc Tạo mới (Create), Xem (Read), Cập nhật (Update), và Xóa (Delete), representing the four common tasks taken with data on most Web sites. 

To create CRUD functionality using Gii, select the "CRUD Generator" (bằng việc nhấn vào). Ví dụ với bảng "country", điền các thông tin vào form như sau:

•	Lớp Model: app\models\Country

•	Lớp Search Model: app\models\CountrySearch

•	Lớp Controller: app\controllers\CountryController
 
Tiếp đến, chọn vào nút "Preview". Bạn sẽ thấy một danh sách các tập tin được tạo ra, như hình dưới.
 
Nếu bạn đã tạo các file controllers/CountryController.php và views/country/index.php trước đó (trong phần hướng dẫn về CSDL), 
kiểm tra nút "overwrite" để thay thế file đó. (Các phiên bản trước không hỗ trợ để sinh CRUD.)

Xem kết quả, dùng trình duyệt truy cập vào đường dẫn sau:
```
http://hostname/index.php?r=country/index
```
Bạn sẽ thấy dữ liệu bảng được hiển thị chứa các thông tin trong CSDL country. 

Bạn có thể sắp xếp các bảng, hoặc lọc nội dụng bằng việc nhập các điều kiện cần lọc ở phần đầu bảng.

Mỗi dữ liệu country được hiển thị trên bảng, bạn có thể chọn để xem chi tiết, cập nhật, hoặc xóa. Bạn cũng có thể "tạo mới Country", click vào button ở phần trên cùng của bảng.
 
 
Danh sách các file sau được sinh bởi Gii, bạn có thể dùng trong ứng dụng, hoặc chỉnh sửa chúng:

•	Controller: controllers/CountryController.php

•	Models: models/Country.php and models/CountrySearch.php

•	Views: views/country/*.php

Thông tin: Công cụ Gii được xây dụng lên với việc phát triển ứng dụng nhanh và dễ mở rộng.

Sử dụng nó một cách thích hợp rất có thể đẩy nhanh tốc độ phát triển ứng dụng của bạn. 

Biết thêm thông tin, xem thêm ở phần Gii


# Asset Bundle

Assets được định nghĩa là tài sản nghĩa là những thứ có thể tham chiếu đến trong 1 trang web như css,js,ảnh ,video nói chung 
là những thứ dùng cho trang web ngoài code thì đặt trong assets .

## 1 Asset Bundles

Yii quản lý tài khoản thông qua gói asset bundle .Asset buldle đơn giản là quản lý 1 các phần trong 1 thư mục
```
<?php
namespace backend\assets;
use yii\web\AssetBundle;
/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
```

AppAsset quy định các mục lưu trữ đều nằm trong thư mục basePaath @webroot tương ứng với baseUrl @web

## 2. Cách dùng Asset Bundles

Để sử dụng css ,js hay image thì ta phải khai báo trước trong file view để dùng qua phương thức 

yii\web\AssetBundle::register()

.Ví dụ
```
use app\assets\AppAsset;

AppAsset::register($this);  // $this represents the view object
```

# Query database
Các hệ thống database đa dạng mongodb, sql, mysql chúng ta sẽ dễ dàng liên kết với yii2 với việc config 1 cách đơn giản và hiệu quả. Sau đây là hướng dẫn viết về liên kết dưới dạng mysql server:
Đầu tiên phải config database ở file main-local.php như sau:
```
'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=api',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
```
        
Kết nối đến database ở localhost với tên database là api, username là root, pass không có. Có thể chỉnh sửa phần này phù hợp với thông số của mình.

Xong phần config, giờ chúng ta đi tìm hiểu đến việc sử dụng nó.

Đầu tiên cần phải tạo models trong common để sử dụng được ở cả backend và frontend

```
<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "link".
 *
 * @property integer $id
 * @property string $link
 * @property integer $created_at
 * @property integer $user_id
 */
class Link extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'link';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['link', 'created_at', 'user_id'], 'required'],
            [['created_at', 'user_id'], 'integer'],
            [['link'], 'string', 'max' => 5000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'link' => Yii::t('app', 'Link'),
            'created_at' => Yii::t('app', 'Created At'),
            'user_id' => Yii::t('app', 'User ID'),
        ];
    }

    /**
     * @inheritdoc
     * @return LinkQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LinkQuery(get_called_class());
    }
}
```

Ở đây mình dùng ActiverRecord để dùng truy vấn. 

Chúng ta truy vấn data trong active record 1 cách đơn giản thông qua hàm find():
```
// return a single article whose article_id is 123
// SELECT * FROM `article` WHERE `article_id` = 123
$article = article::find()
    ->where(['article_id' => 123])
    ->one();

// return all active customers and order them by their IDs
// SELECT * FROM `article` WHERE `status` = 1 ORDER BY `article_id`
$customers = article::find()
    ->where(['status' => article::STATUS_ACTIVE])
    ->orderBy('article_id')
    ->all();

// return the number of active customers
// SELECT COUNT(*) FROM `article` WHERE `status` = 1
$count = article::find()
    ->where(['status' => article::STATUS_ACTIVE])
    ->count();

// return all customers in an array indexed by article IDs
// SELECT * FROM `article`
$customers = article::find()
    ->indexBy('article_id')
    ->all();
```

Chúng ta thấy rằng quá trình xử lý find() rất đơn giản.

Dưới đây chúng ta sẽ đi tìm hiểu cách dùng hàm find() rút gọn bằng 2 hàm findOne() và findAll():
```
// returns a single article whose article_id is 123
// SELECT * FROM `article` WHERE `article_id` = 123
$article = article::findOne(123);

// returns article whose article_id is 100, 101, 123 or 124
// SELECT * FROM `article` WHERE `article_id` IN (100, 101, 123, 124)
$article = article::findAll([100, 101, 123, 124]);

// returns an active article whose article_id is 123
// SELECT * FROM `article` WHERE `article_id` = 123 AND `status` = 1
$article = article::findOne([
    'article_id' => 123,
    'status' => article::STATUS_ACTIVE,
]);

// returns all inactive article
// SELECT * FROM `article` WHERE `status` = 0
$article = article::findAll([
    'status' => article::STATUS_INACTIVE,
]);
```

Các hàm trong find nếu không để gì nó sẽ mặc định tìm theo khóa chính của bảng Active Record có đầy đủ hàm xử lý như thêm, cập nhật, xóa, thay thế dữ liệu bên cạnh đó còn có vài chức năng nâng cao. 

## Cấu trúc view, layout trong Yii2

### 1.	View

•	Tạo view:
View đơn giản là một file php kết hợp sự trộn lẫn giữa php và html. Php tạo ra các nội dung động và html có nhiệm vụ sắp xếp các nội dung đó đúng vị trí của nó

•	Bảo mật:

Để tránh trường hợp bị tấn công XSS, Yii2 thường dùng bảo mật với hai phương thức là html:
 
encode và htmlPurifier ở phần view nhằm tránh hiện tượng bị chèn js để tấn công website
•	Render trong controller:

Đây là phương thức render cơ bản, có các kiểu render như sau:


-	Render() render tên view và áp dụng trực tiếp với layout hiện tại

-	renderPartial(): renders với view hiện tại nhưng áp dụng với các layout bất kỳ

-	renderAjax(): renders với bất kỳ layout nào nhưng đã bị hủy bỏ đi tất cả các js với css

-	renderFile(): render ra views đặc biệt với 1 đường link nào đó

-	renderContent(): render ra 1 chuỗi tính gắn vào 1 layout nào đó

•	Render view trong Widgets:

Giống như widget khi sử dụng trong worrdpress, chúng ta có thể tách từng phần ra một.
 
Dưới đây là 1 demowidget trong mục common/widget mẫu:

```
<?php
namespace common\widgets;
use yii\base\Widget;

class Demowidget extends Widget
{
	public function run()
	{
		return $this->render('demowidget');
	}
}
```
Tạo folder view trong folder widgets rồi tạo 1 file php có tên là demowidget.php

<a>Đây là demo widget dùng trong yii</a>

Cách dùng: chỉ cần gọi hàm <?= Demowidget::widget();?>. 

Lưu ý trước đó phải import bằng lệnh:
use common\widgets\Demowidget;

•	Render view trong view:

Hiểu đơn giản nghĩa là lồng view này vào view kia. Ở đây có 3 kiểu lồng vào nhau:

-	Lồng view kiểu render
-	Lồng view kiểu ajax dùng khi xử lý dữ liệu, check dữ liệu bằng ajax
-	Lồng view kiểu renderFile()
### 2.	Layouts trong Yii2
Layouts là một kiểu views đặc biệt bao gồm nhiều views trong nó. Ví dụ nso bào gồm những thứ như head hay footer. 

Cấu trúc chung bao gồm:

```
<?php $this->beginPage()?>
<?php $this->head()?>
<?php $this->beginBody()?>
<?php $this->endBody()?>
<?php $this->endPage()?>
Các thành phần khác trong layout:
	<title><?= Html::encode($this->title) ?></title>
	
	<?php
$this->registerMetaTag(['name' => 'keywords', 'content' => 'yii, framework, php']);
?>
	
$this->registerLinkTag([
    'title' => 'Live News for Yii',
    'rel' => 'alternate',
    'type' => 'application/rss+xml',
    'href' => 'http://www.yiiframework.com/rss.xml/',
]);
```



