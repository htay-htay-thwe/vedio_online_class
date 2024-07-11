<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Class</title>
</head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
rel="stylesheet"
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
crossorigin="anonymous"
/>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
crossorigin="anonymous"
/>
<!-- box-icon links -->
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
<style>

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  background: linear-gradient(
    80.4deg,
    rgb(247, 234, 247) 10%,
    rgb(243, 234, 251) 70%
  );
  position: relative;
  min-height: 100vh;
  width: 100%;
  overflow-y: auto; /* Enables vertical scrolling only */
overflow-x: hidden;
}
.sidebar {
  height: 100%;
  width: 78px;
  position: fixed;
  top: 0;
  left: 0;
  background: #11101d;
  padding: 6px 14px;
  transition: all 0.5s ease;
}
.sidebar.active .logo_content .logo {
  opacity: 1;
  pointer-events: none;
}
.sidebar.active {
  width: 240px;
}
.sidebar .logo_content .logo {
  color: #fff;
  display: flex;
  height: 50px;
  width: 100%;
  align-items: center;
  opacity: 0;
  pointer-events: none;
  transition: all 0.5s ease;
}
.logo_content .logo i {
  font-size: 28px;
  margin-right: 5px;
}
.logo_content .logo .logo_name {
  font-size: 20px;
  font-weight: 400;
}
.sidebar #btn {
  position: absolute;
  color: #fff;
  left: 50%;
  top: 6px;
  font-size: 20px;
  height: 50px;
  width: 50px;
  text-align: center;
  line-height: 50px;
  transform: translateX(-50%);
}
.sidebar.active #btn {
  left: 90%;
}
.sidebar ul {
  margin-top: 20px;
}
.sidebar ul li {
  position: relative;
  list-style: none;
  line-height: 35px;
  border-radius: 12px;
  right: 20px;
}
.sidebar ul li a {
  min-width: 45px;
  padding: 3px 13px;
  color: #fff;
  display: flex;
  text-align: center;
  text-decoration: none;
  transition: all 0.4s ease;
  border-radius: 12px;
  white-space: nowrap;
  z-index: 1;
}
.sidebar ul li input {
  position: absolute;
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
  border-radius: 12px;
  outline: none;
  border: none;
  background: #11101d;
  padding-left: 50px;
  font-size: 18px;
  color: #fff;
  z-index: 2;
}
.sidebar ul li .bx-search {
  position: relative;
  z-index: 99;
  color: #fff;
  font-size: 21px;
  margin: 0px 0px 0px 7px;
  transition: all 0.5s ease;
}
.sidebar ul li .bx-search:hover {
  padding: 3px 12px;
  background: #fff;
  color: #1d1b31;
}
.sidebar ul li a:hover {
  text-align: center;
  background: #fff;
  color: #1d1b31;
}

.sidebar ul li i {
  line-height: 50px;
  border-radius: 12px;
  line-height: 50px;
  text-align: center;
}
.sidebar .profile_content {
  position: absolute;
  color: #fff;
  bottom: 0;
  left: 0;
  width: 100%;
}
.sidebar .profile_content .profile {
  position: relative;
  padding: 10px 6px;
  height: 60px;
  background: #1d1b31;
  transition: all 0.4s ease;
}
.profile_content .profile .profile_details {
  display: flex;
  align-items: center;
  opacity: 0;
  pointer-events: none;
  white-space: nowrap;
}
.sidebar.active .profile .profile_details {
  opacity: 1;
  pointer-events: auto;
}
.profile .profile_details img {
  height: 45px;
  width: 45px;
  object-fit: cover;
  border-radius: 12px;
}
.profile .profile_details .name_job {
  margin-left: 10px;
}
.profile .profile_details .name {
  font-size: 15px;
  font-weight: 400;
}
.profile .profile_details .job {
  font-size: 12px;
}
.profile #log_out {
  position: absolute;
  left: 50%;
  bottom: 5px;
  transform: translateX(-50%);
  min-width: 50px;
  line-height: 50px;
  font-size: 20px;
  border-radius: 12px;
  text-align: center;
  transition: all 0.4s ease;
  background: #1d1b31;
}
.sidebar.active .profile #log_out {
  left: 88%;
}
.home_content {
  position: absolute;
  height: 100%;
  width: calc(100% - 280px);
  left: 78px;
  transition: all 0.5s ease;
  top: 70px;
}
.text {
  width: calc(100% - 0px);
  left: 78px;
  font-size: 25px;
  font-weight: 500;
  color: #1d1b31;
  left: 78px;
  position: absolute;
  background: linear-gradient(
    80.4deg,
    rgb(248, 52, 246) 10%,
    rgb(152, 38, 252) 70%
  );
  transition: all 0.5s ease;
  padding: 7px 7px;
}
.card {
  border: 1px solid black;
  text-align: center;
  background: linear-gradient(0deg, rgba(249,149,192,1) 33%, rgba(193,159,246,1) 70%);
}
.card-two{
  border: 1px solid black;
  text-align: center;
  background: linear-gradient(0deg, rgba(102,249,91,0.9866071428571429) 34%, rgba(87,245,128,1) 57%);
}
.first-chart {
  display: flex;
  font-size: 20px;
}
.grid-container {
  display: grid;
  justify-content: space-evenly;
  grid-template-columns: 200px 200px 200px 200px;
}
/*.sidebar ul li .tooltip {
  position: absolute;
  height: 35px;
  left: 122px;
  top: 0;
  transform: translate(-50%, -50%);
  border-radius: 6px;
  width: 122px;
  height: 35px;
  text-align: center;
  color: white;
  background: black;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  transition: 0s;
  opacity: 0;
  pointer-events: none;
  display: block;
  padding: 6px 0px 0px 0px;
  z-index: 1;
  display: none;
}*/
.sidebar.active .links_name {
  opacity: 1;
  pointer-events: auto;
  margin-top: 8px;
  margin-left: 20px;
}
.sidebar .links_name {
  opacity: 0;
  pointer-events: none;
  transition: all 0.5s ease;
}
/*.sidebar.active ul li .tooltip {
  display: none;
}
.sidebar ul li:hover .tooltip {
  transition: all 0.5s ease;
  top: 50%;
  opacity: 1;
  display: block;
}*/
.sidebar.active .profile_content .profile {
  background: none;
}
.sidebar.active .profile #log_out {
  background: #1d1b31;
}
.sidebar.active ~ .home_content {
  width: calc(100% - 280px);
  left: 240px;
}
.sidebar.active ~ .text {
  width: calc(100% - 0px);
  left: 240px;
}
.editor {
  width: 100%; /* Adjust width as needed */
  height: 20px; /* Adjust height as needed */
}
label {
  font-size: 18px;
}

</style>
<body>
    <div class="sidebar">
        <div class="logo_content">
          <div class="logo">
            <box-icon type="logo" name="c-plus-plus"></box-icon>
            <div class="logo_name">CodingLab</div>
          </div>
          <i class="bx bx-menu" id="btn"></i>
        </div>
        <ul class="nav_list">
          <li>
            <i class="bx bx-search"></i>
            <input type="text" placeholder="Search..." />
          </li>

          <li>
            <a href="#">
              <i class="bx bxs-user"></i>
              <span class="links_name">User</span>
            </a>
          </li>

          <li>
            <a href="#">
              <i class="bx bx-chat"></i>
              <span class="links_name">Chat</span>
            </a>
          </li>

          <li>
            <a href="#">
              <i class="bx bx-folder"></i>
              <span class="links_name">Posts</span>
            </a>
          </li>

          <li>
            <a href="#">
              <i class="bx bx-cog"></i>
              <span class="links_name">Setting</span>
            </a>
          </li>
        </ul>

        <div class="profile_content">
          <div class="profile">
            <div class="profile_details">
              <img src="profile.jpg" alt="" />
              <div class="name_job">
                <div class="name">Prem</div>
                <div class="job">Web designer</div>
              </div>
            </div>
            <form method="post" action="{{ route('logout') }}">
                                                    @csrf
                                                    <div class="account-dropdown__footer">
                                                        <a><button type="submit" class="col-12 btn btn-danger"> <i class="bx bx-log-out" id="log_out"></i></button></a>
                                                    </div>
                                                </form>

          </div>
        </div>
    </div>
    @yield('scriptSource')
    @yield('content')


</body>
<script>let btn = document.querySelector("#btn");
let sidebar = document.querySelector(".sidebar");
let searchBtn = document.querySelector(".bx-search");
btn.onclick = function () {
sidebar.classList.toggle("active");
};
searchBtn.onclick = function () {
sidebar.classList.toggle("active");
};
// ClassicEditor.create(document.querySelector("#editor"), {
// width: "100%",
// height: "20px",
// }).catch((error) => {
// console.error(error);
// });
</script>
{{-- bootstrap --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
crossorigin="anonymous"
></script>
{{-- fontawesome --}}
<script
src="https://kit.fontawesome.com/930e3b0b55.js"
crossorigin="anonymous"
></script>
{{-- ckeditor --}}
<script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
</html>
