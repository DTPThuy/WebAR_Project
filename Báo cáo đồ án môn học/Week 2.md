# Shapepark

## Thay đổi vật liệu đối tượng

## Gán nhãn cho đối tượng ( khi click vào đối tương gán nhãn hiện popup thông tin đối tượng).

# Tìm hiểu thư viện Three JS

## Các khái niệm về ThreeJS

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
