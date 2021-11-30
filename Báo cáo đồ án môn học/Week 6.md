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
