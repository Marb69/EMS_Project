import { admin_dashboard } from "./admin_dashboard.js";
import { card_ani } from "./cards_ani.js";
import { Login_Page } from "./Login_page.js";

document.addEventListener("DOMContentLoaded", function () {
  card_ani();
  admin_dashboard();
  Login_Page();
});
