# Phân quyền bằng Rbac trong yii2 advanced
Rbac trong yii2 giúp chúng ta dễ dàng trong việc phân quyền người dùng trong hệ thống lớn. Ví dụ admin có toàn quyền, sub có những quyền nào, người viết có quyền nào và người dùng có quyền nào.
Đầu tiên chúng ta cần tạo Database phân quyền rbac:
* Vào file main.php trong console/config/ thêm authManager:
```
return [
  'id' => 'app-console',
  'basePath' => dirname(__DIR__),
  'bootstrap' => ['log'],
  'controllerNamespace' => 'console\controllers',
  'components' => [
    'authManager' => [
      'class' => 'yii\rbac\DbManager',
      // 'defaultRoles' => ['guest'],
      ],
      'log' => [
        'targets' => [
          [
            'class' => 'yii\log\FileTarget',
            'levels' => ['error', 'warning'],
          ],
        ],
      ],
    ],
    'params' => $params,
];
```
Sau đó chạy lệnh sau:
```
yii migrate --migrationPath=@yii/rbac/migrations
```
Và bây giờ vào database chúng ta sẽ thấy có thêm 4 bảng dữ liệu mới là:
- auth_rule
- auth_item_child
- auth_item
- auth_asignment
Vậy là bạn vừa tạo xong bảng dữ liệu phân quyền
Sau khi đã có bảng phân quyền, chúng ta cần biết cách sử dụng nó trong code
Đầu tiên chúng ta cần đến phần common/config/main.php hoặc backend/config/main.php
Thêm dòng sau vào component
```
return [
    // ...
    'components' => [
        // ...
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
    ],
    // ...
];
```
Cách dùng là cho bào phần rules() trong behavios() của mỗi controller.
Ví dụ:
```
<?php
namespace backend\controllers;
use yii\web\Controller;
use common\models\Article;
use yii\filters\AccessControl;

class CkeditorController extends Controller
{
	public function behaviors()
	{
		return [
				'access'=>
				[
						'class' =>AccessControl::className(),
						'rules'=>
						[
								[
									'allow' =>TRUE,
									'actions'=>['index'],
									'roles'=>['ads_view'],
								],
						]
				]
		];
	}
	public function actionIndex()
	{
		$model = new Article();
		return $this->render('index',['model'=>$model]);
	}
}
```
Luôn để Rbac ở trong phần behavios() có nhiệm vụ check quyền đăng nhập vào controller này thông qua rules access. Rules access này được lấy từ component AccessControl(). Với hệ thống phần quyền này chúng ta sẽ chỉ truy cập được vào controller này khi có quyền permisson là ads_view. Nếu bạn không có quyền ads_view này thì bạn không thể vào xem được.
## Set up quyền mặc định:
Thường khi người dùng đăng kí thành viên vào web. Bạn muốn có 1 cái quyền cơ bản nào đó như là quyền tác giả, quyền được xem các mục chỉ có thành viên đăng kí mới xem đcượ. Khi đó chúng ta cần sử dụng 1 dòng code trong phần đăng kí để cấp quyền mặc định cho người dùng. Bạn vào phần: Frontend/controllers/SiteController chỉnh actionSignup()
```
public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }
        return $this->render('signup', [
            'model' => $model,
        ]);
    }
    ```
    Thành như sau:
    ```
    if ($this->validate()) {
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->save(false);

        // the following three lines were added:
        $auth = \Yii::$app->authManager;
        $authorRole = $auth->getRole('user');
        $auth->assign($authorRole, $user->getId());

        return $user;
    }

    return null;
    ```
    
# Chức năng hiển thị thông tin và khoảng cách của sản phẩm

Để sử dụng chức năng hiển thị thông tin và khoảng cách em sẽ sử dụng API của Shapespark. Đồng thời sẽ sửa tên của các sản phẩm theo đúng tên của nó.
Tạo các file tương ứng lần lượt là node-click.js và fronted-end.css để tiện phát triển và sửa đổi fronted-end.

- node-click.js
```js
var viewer = WALK.getViewer();
viewer.onNodeTypeClicked(function (node, position, distance) {
  var nodeTypePath = [];
  while (node) {
    nodeTypePath.push(node.type);
    node = node.parent;
  }
  document.getElementById("nodes").innerHTML = nodeTypePath.join(" > ");
  document.getElementById("distance").innerHTML = distance.toFixed(2);
  return true;
});
```

- fronted-end.css
```css
#click-info {
  position: absolute;
  top: 0px;
  padding: 16px;
  background-color: rgba(0, 0, 0, 0.3);
  font-size: 1.5em;
  z-index: 10;
}
#nodes, #distance {
  font-weight: bold;
}

```

- Thêm file js vào trước </head> vào index.html 
```html
<link
      href="2021-11-22-14-36-20/api/fronted-end.css"
      rel="stylesheet"
      type="text/css"
/>
```
- Thêm css trước </body> vào index.html và tạo 1 thẻ div để hiển thị
```html
<div id="click-info">
   Sản phẩm: <span id="nodes">-</span><br/>
   Khoảng cách: <span id="distance">-</span> m
</div>
```

![Screenshot 2021-11-30 222304](https://user-images.githubusercontent.com/84367730/144075590-2482d579-5108-46eb-b3fd-99d757022d6d.png)

Sau khi hoàn thành và chạy trên server và click vào sản phẩm sẽ hiển thị như trên hình vẽ:

![1](https://user-images.githubusercontent.com/84367730/144075005-d0d4d0f1-c9e9-427a-8b44-8b997a296a90.png)
