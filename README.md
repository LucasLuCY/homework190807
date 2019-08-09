# homework190807
Shopping Cart Program
本購物車樣板採用 https://colorlib.com/wp/template/winkel/

# ------新增項目------
# MySQL
1. 相關資料放置於MySQL資料夾
2. Database: shopping_mall(utf8)
3. Table: user_data, product

# config.php
1. 定義資料庫連線資料

# login.php 
1. 使用PDO方式連線置資料庫進行帳戶驗證
2. 使用cookie保存使用者username資料
3. 使用session儲存使用者驗證狀態
4. 成功或失敗接跳出提醒視窗提醒使用怎目前驗證狀態
5. 當該次驗證成功或是有以往session紀錄則自動跳轉index.php

# index.php
1. navbar 新增 login, logout, member info三個新標籤
2. 在未登入時, 只顯示login而登入後則顯示logout, member info
3. 點擊member info跳出目前會員資料彈, 並用ajax取目前資料
4. 在member info彈窗中可以點擊Save Changes修改會員資料
5. 使用LocalStorage儲存目前購物車所購買的總數量顯示於購物車上
6. 點擊index頁面的商品加入選項會在購物車以及LocalStorage儲存新的每項產品數量

# getMemberInfo.php
1. 建立供其他頁面呼叫會員個人資訊API(json)

# setMemberInfo.php
1. 修改個人頁面資料
2. 檢查如果沒有通過驗證自動跳轉回index

# cart.php
1. 取得用戶在購物車購買的商品
2. 取得資料庫中的商品資訊
3. 使用vue重複迴圈顯示商品
4. 點擊送出，跳出成功訊息並清除LocalStorage
