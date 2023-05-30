

const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const menu_nav = $$('.menu_nav');

const content_tab_list_item = $$('.content_tab-list-item');

menu_nav.forEach((item,index) => {
    
    const tab = content_tab_list_item[index];

    item.onclick = function() {
        $('.content_tab-list-item.action').classList.remove('action');
        $('.menu_nav.action').classList.remove('action');

        this.classList.add('action');
        tab.classList.add('action');

    }

});


function signup(e){
    event.preventDefault();
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    
    //tao object de luu tai khoan len localStorage
    const user={
        username: username,
        email: email,
        password: password
    }
    // chuyen doi object user thanh kieu json
    const json = JSON.stringify(user);

    //lưu lên localStorage 
    // username là khóa
    // json là giá trị
    localStorage.setItem(username, json);

    alert("Đăng ký thành công");
}

function login(e){
    event.preventDefault();
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    //lay ra 
    const user = localStorage.getItem(username);
    //chuyen đổi kiểu json sang kiểu js là object
    const data = JSON.parse(user);

    if (user == null){
        alert("Bạn chưa đăng ký đúng không ?");
    }else if(data.username == username && data.password == password && data.email == email){
            alert("Đăng nhập thành công");
            window.location.href="index.html"
        }else{
            alert("Email hoặc mật khẩu không đúng");
        }

        
}
