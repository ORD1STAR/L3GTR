
/*const tableBtn = document.getElementById("tableBtn");  // first buttons (to delete)
const taskBtn = document.getElementById("taskBtn");*/

const edtPART = document.getElementsByClassName("edtPART")[0];
const taskPART = document.getElementsByClassName("taskPART")[0];

const switchDiv = document.getElementsByClassName("switchBtn")[0];
const switchBtn = document.getElementById("switchBtn");

let tableOnScreen = true;



switchBtn.addEventListener("click", () => {
    if (tableOnScreen) {
        taskPART.classList.add("taskVISIBLE");
        taskPART.classList.remove("taskINVISIBLE");
        edtPART.classList.add("edtINVISIBLE");
        edtPART.classList.remove("edtVISIBLE");

        switchDiv.classList.add("switchBtnLeft");
        switchDiv.classList.remove("switchBtnRight");
        tableOnScreen = false;
    } else {
        taskPART.classList.remove("taskVISIBLE");
        taskPART.classList.add("taskINVISIBLE");
        edtPART.classList.remove("edtINVISIBLE");
        edtPART.classList.add("edtVISIBLE");

        switchDiv.classList.add("switchBtnRight");
        switchDiv.classList.remove("switchBtnLeft");
        tableOnScreen = true;
    }
});


// Admin btn menu Popup Animation
const adminBtn = document.getElementsByClassName("admin_connect")[0];
const adminMenu = document.getElementsByClassName("adminMenu")[0];

const adminMenuClose = document.getElementsByClassName("exitBtn")[0];

adminBtn.addEventListener("click", () => {
    console.log(adminMenu);
    adminMenu.classList.add("admin_menu_visible");
})

adminMenuClose.addEventListener("click", () => {
    adminMenu.classList.remove("admin_menu_visible");
})