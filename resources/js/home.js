
let btn = document.querySelector("#btn");
let sidebar = document.querySelector(".sidebar");
let searchBtn = document.querySelector(".bx-search");
btn.onclick = function () {
  sidebar.classList.toggle("active");
};
searchBtn.onclick = function () {
  sidebar.classList.toggle("active");
};
ClassicEditor.create(document.querySelector("#editor"), {
  width: "100%", // Adjust width as needed
  height: "1200px", // Adjust height as needed
}).catch((error) => {
  console.error(error);
});
