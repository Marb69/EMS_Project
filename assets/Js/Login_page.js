export const Login_Page = () => {
  const roleBtn = document.querySelectorAll(".role-btn");

  roleBtn.forEach((btn) => {
    btn.addEventListener("click", function () {
      const role = this.dataset.role;

      setRole(role);
    });
  });
  function setRole(role) {
    document.getElementById("roleInput").value = role;
    document
      .getElementById("btnEmployee")
      .classList.toggle("active", role === "employee");
    document
      .getElementById("btnAdmin")
      .classList.toggle("active", role === "admin");
  }

  const errMsg = document.getElementById("errorMsg");
  const errText = document.getElementById("errorText");
  if (errText && errText.textContent.trim()) errMsg.style.display = "flex";

  const togglePw = document.getElementById("togglePw");
  const pwInput = document.getElementById("password");
  const eyeIcon = document.getElementById("eyeIcon");
  const eyeOpen = `<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>`;
  const eyeOff = `<path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/>`;

  togglePw.addEventListener("click", () => {
    const hidden = pwInput.type === "password";
    pwInput.type = hidden ? "text" : "password";
    eyeIcon.innerHTML = hidden ? eyeOff : eyeOpen;
  });

  document.getElementById("loginForm").addEventListener("submit", (e) => {
    if (!document.getElementById("username").value.trim() || !pwInput.value) {
      e.preventDefault();
      errText.textContent = "Please enter your username and password.";
      errMsg.style.display = "flex";
    }
  });
};
