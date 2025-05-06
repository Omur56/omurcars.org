const profil_link = document.querySelector(".profil_link");
const login_btn_link = document.querySelector(".login_btn_link");

login_submit_btn.addEventListener("click", () => {
  profil_link.style.display = "block";
  login_btn_link.style.display = "none";
});