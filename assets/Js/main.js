import { Add_Employee } from "./add_Employee.js";
import { admin_dashboard } from "./admin_dashboard.js";
import { card_ani } from "./cards_ani.js";
import { Employee } from "./employee.js";
import { Login_Page } from "./Login_page.js";

document.addEventListener("DOMContentLoaded", function () {
  const page = document.body.dataset.page;

  if (page == "login") {
    Login_Page();
  }

  if (page == "admin") {
    
    Add_Employee();
    
  }

  card_ani();
   Employee();
  admin_dashboard();

 
});
