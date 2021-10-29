# Shapepark

## Thay đổi vật liệu đối tượng

## Gán nhãn cho đối tượng ( khi click vào đối tương gán nhãn hiện popup thông tin đối tượng).

# Tìm hiểu thư viện Three JS

## Các khái niệm về ThreeJS
Hình ảnh vector và hình ảnh Raster
SVG là viết tắt của Scalable Vector Graphics, có cấu tạo là các vector. Hình ảnh vector nó là các "đường" có hướng, nối đường nối giữa 2 điểm, nên dù phóng to cũng ko bị vỡ ra bit, khả năng zoom vô tận mà ko làm mờ ảnh.

Hình ảnh raster được tạo ra bởi các điểm ảnh, mỗi màu khác nhau, sắp xếp để hiển thị một hình ảnh.
Sự khác biệt chính là các pixel hình ảnh raster không giữ lại được diện mạo khi kích thước tăng lên - khi bạn phóng to một bức ảnh lên, nó sẽ trở nên mờ vì lý do này. Hình ảnh Vector giữ lại hình dạng bất kể kích thước, vì các công thức toán học chỉ ra cách hiển thị hình ảnh.

Các khái niệm về ThreeJS
WebGL là một thư viện JavaScript để kết xuất đồ họa 2D và đồ họa 3D tương tác trong trình duyệt. Nó dựa trên kiến trúc của OpenGL . WebGL sử dụng ngôn ngữ đổ bóng GLSL với cú pháp C-. WebGL sử dụng phần tử HTML5 <canvas> để đưa đồ họa 3D vào trang trình duyệt.
    
ThreeJS là thư viện JS sử dụng WebGl để vẽ 3D. Tức là WebGL sẽ build hình ảnh 3D dựa theo code ThreeJS của bạn để vẽ các điểm, đường và tam giác. ThreeJS giúp chúng ta tạo nên các hình ảnh 3D trên brower chỉ bằng JS mà không cần phải tại platform, application nào để người dùng có thể trải nghiệm hình ảnh 3D.
Cấu trúc để build 3D three.js app
    
 ![image](https://user-images.githubusercontent.com/91117385/139472743-1a0fc5be-0dd2-424b-a9ea-40729389c41d.png)

Mọi app được xây dựng bằng ThreeJS (và hầu hết các real-time 3d app) sẽ có các thành phần chính như sau:
    
•	scene: khung cảnh (giống như sân khấu) để đặt các đối tượng lên(là nơi mà các 3D object tồn tại)
    
•	camera: tạo góc nhìn sẽ sử dụng nó để xem 'scene'
    
•	Canvas: Phần tử HTML canvas, cái này giống như 1 bức tranh (hay cái màn chiếu) trống, và threejs sẽ vẽ vời lên đây
    
•	renderer: bộ dựng hình, hiển thị scene sử dụng WebGL . Là một thứ 'máy móc' với input là camera và scene và output là vẽ những hình ảnh hiển thị trên canvas
    
    
Mesh
    
Tất cả những thứ scene, camera, canvas, và renderer đều không phải là thứ ta nhìn thấy trên màn hình điện thoại (Canvas là nơi chứa - tức màn hình điện thoại, không phải là hình ảnh trên màn hình). Những object hình ảnh trên màn hình chính là Mesh. Mesh thường được mô tả như lưới. Lưới càng dày càng chính xác.
    
1 đối tượng mesh là vỏ chứa hình geometry và chất liệu material của đối tượng và định nghĩa ra vị trí đối tượng trong không gian 3 chiều. Geometry là thứ định nghĩa tạo nên hình dạng cho đối tượng, còn Material cho hiệu ứng bề mặt của đối tượng trông sẽ như thế nào.


Xây dựng đối tượng đầu tiên
    
Cú pháp tạo như sau:
    
``` var scene = new THREE.Scene();
    var renderer = new THREE.WebGLRenderer();
    var camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
```
    
Camera

PerspectiveCamera : camera cần được khởi tạo perspective với cấu trúc như sau:
```
    PerspectiveCamera(fov : Number, aspect : Number, near : Number, far : Number)
```
    
•	Fov: (field of view) tham số này định nghĩa góc có thể nhìn được, tức là camera có thể nhìn được bao nhiêu sẽ dựa vào tham số này, có đơn vị đo góc là deg, range là 1 tới 179 deg. Nó cũng định nghĩa ra kích cỡ độ lớn của vật thể khi ở xa so với vật thể khi ở gần camera.
    
•	Aspect: Tham số chỉ ra tỉ lệ của camera (kiểu như kích cỡ của video phim chuẩn là tỉ lệ 16:9 ấy). Ở đây mình dùng chính tỉ lệ của màn hình web hiện tại làm tỉ lệ nên nó là: window.innerWidth / window.innerHeight
    
•	Far và near: Tham số tương tự như perepective trong css, chỉ ra giới hạn xa gần của camera. Far là điểm cực xa của camera (default là 2000), near là điểm cực gần của camera (default là 0.1). 
    
![image](https://user-images.githubusercontent.com/91117385/139472680-63e002c1-062b-491a-81c4-bf47c9dbd95e.png)

    
Thực tế trong ThreeJS có 2 loại camera:
    
•	PerspectiveCamera
    
•	OrthographicCamera
    
Cái phức tạp hơn là PerspectiveCamera sẽ cho hình ảnh khá 'thật' hơn.
    
 ![image](https://user-images.githubusercontent.com/91117385/139472655-c01bc43c-2da0-44d3-b7eb-03794ca578cf.png)

Renderer
    
Ngay sau khi khai báo renderer, cần thêm 1 bước mới hoàn thành khởi tạo renderer:
```
    renderer.setSize(window.innerWidth, window.innerHeight);
```
Bước này sẽ tạo 1 canvas để chứa các object của chúng ta với kích thước như mình set là bằng luôn kích cỡ màn hình web.
VD:

![k](https://user-images.githubusercontent.com/91117385/139477177-57101fa9-b40a-4fd0-875a-03dde54858b1.gif)

 
 các phần tử phía trên cùng canvas insert vào qua câu lệnh :
 ```
    document.body.appendChild(renderer.domElement);
 ```
Phương thức appendChild() gắn thêm nút con mới vào cuối danh sách nút con của một nút.
    
Thành phần con được tạo ra bằng appendChild() có thể là
    
•	Một thành phần mới.
    
•	Một thành phần đã tồn tại và thành phần này sẽ được di chuyển đến vị trí con cuối cùng.
    
Tương tự thì ta có phương thức
    
•	removeChild() dùng để xóa đi một thành phần con nào đó.
    
•	replaceChild() để thay thế một thành phần con nào đó bằng một thành phần mới.
    
    
Để thể hiện các vật thể trong scence, cần có các mesh, mesh thì bao gồm geometry và material. Trước khi add mesh vào scene, cần 2 khởi tạo thằng geometry và material.
```
    var geometry = new THREE.SphereGeometry( 5, 32, 32 );
```
Dòng này khai báo loại Geometry mà bạn định insert. 3 tham số bên trong chính là kích thước của object 3D này. Tùy hình dạng của Geometry sẽ có nhiều tham số khác nhau:
```
    var material = new THREE.MeshBasicMaterial( {color: 0xffff00} );
```
    
Ở đây sử dụng luôn basic material của ThreeJS, bên trong là mảng các tham số style cho lớp material bề mặt này, như ở đây là đường viền màu #ffff00 dưới dạng 0x - tức là dạng hexa. 
```
    var material = new THREE.MeshBasicMaterial( {color: 0xffffff, wireframe: true} );
```
    
Wireframe ở đây là 'khung' hay đường lưới mesh của vật thể. Đặt giá trị true sẽ bỏ qua material bề mặt và show cho ta thấy mesh trông như nào.
Bước cuối là tạo mesh từ geometry và material vừa có được rồi insert vào scene để có thể thấy trên canvas html
```
    var sphere = new THREE.Mesh( geometry, material );
    scene.add( sphere );
```
    
Sử dụng renderer để render ra mọi thứ đã tạo
Để có thể hiển thị được mọi thứ, cần phải sử dụng renderer để render từ input là scene và camera ra canvas html:
```
    renderer.render(scene, camera);
```
Để hiển thị mọi thứ cần thêm 1 thứ, là camera position.
Mặc định thì mọi thứ mà chúng ta tạo sẽ được đặt tâm tại điểm (0, 0, 0) trong hệ tọa độ 3D. Camera cũng vậy, hiện tại nó đang đặt ở vị trí (0, 0, 0) nên nếu muốn nhìn toàn bộ hình geometry vừa tạo, cần di chuyển camera ra xa vật thể.
set camera position theo 2 cách:
```
    //cách 1: set tất cả 2 tọa độ cùng lúc:
    camera.position.set( 0, 0, 10 );

    //cách 2: set lẻ tọa độ trong TH có tọa độ nào vẫn giữ nguyên tại vị trí default thì có thể bỏ qua:
    camera.position.x = 0;
    camera.position.y = 0;
    camera.position.z = 10;
```   



## Cài đặt Three JS và build 1 chương trình

### Cài đặt Three JS
- B1: Truy cập threejs.org -> Ấn Code github

![1](https://user-images.githubusercontent.com/84367730/139424430-fbddd7de-c7ce-44b4-b0fa-9a7dc82ef0d4.png)

- B2: Tải zip code 

![1 1](https://user-images.githubusercontent.com/84367730/139424483-f2b76c31-e873-4202-81ed-96a47014249f.png)


- B3: Sau vào extension của visual code để install Live Server (để làm host chạy được trên Web)

![1 3](https://user-images.githubusercontent.com/84367730/139424557-340092fe-6da6-4393-87c3-0f5f72c3cc58.png)


- B4: Mở Terminal trên Visual và chạy lệnh:
```bash
npm install @types/three
```

### Build 1 chương trình three js

Trong chương trình này mình sẽ build chương trình Cude

- B1:Tạo 1 folder trên Visual Studio Code. Và copy 2 file "three.js" và "three.min.js" vào visual code từ ./build (folder vừa tải)

![1 4](https://user-images.githubusercontent.com/84367730/139424631-619deb0c-4c58-4104-a5b1-c2fada36725a.png)


- B2: Tạo 1 file "index.html" (lưu code html)

```html
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Create Cube</title>
    <style>
        body {
            margin: 0;
        }
    </style>
</head>

<body>
    <script src="./three.js"></script>
    <script src="./index.js"></script>
</body>

</html>
```

- B3: Tạo file "index.js" (lưu code threeJS)

```threejs
const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);

const renderer = new THREE.WebGLRenderer();
renderer.setSize(window.innerWidth, window.innerHeight);
document.body.appendChild(renderer.domElement);

const geometry = new THREE.BoxGeometry();
const material = new THREE.MeshBasicMaterial({ color: 0x00ff00 });
const cube = new THREE.Mesh(geometry, material);
scene.add(cube);

camera.position.z = 5;

const animate = function () {
    requestAnimationFrame(animate);

    cube.rotation.x += 0.01;
    cube.rotation.y += 0.01;

    renderer.render(scene, camera);
};

animate();
```
- B4: Sau khi hoàn thành sẽ chạy chương trình trên Live Serve

![1 5](https://user-images.githubusercontent.com/84367730/139424725-12d2409e-eb7d-4e3e-95bf-43685fe9aee5.png)


- B5: Sau khi hoàn thành

![20211029_180520](https://user-images.githubusercontent.com/84367730/139424335-a6d9cacf-8ada-4c7c-b3cc-acbba1e25c22.gif)


# Tìm hiểu Github và cách merge code khi làm việc nhóm với Github
