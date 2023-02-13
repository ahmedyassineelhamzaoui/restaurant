// header menu 
let headerMenu=document.querySelector(".header-menu");
let navPages=document.querySelector("#nav-page");
let navCompt=document.querySelector("#nav-compt");
if(headerMenu){
    headerMenu.onclick=()=>{
        console.log("ok");
        navCompt.classList.toggle("active");
        navPages.classList.toggle("active");
        headerMenu.classList.toggle("active");
    }
}
// dashboard asidebar
let iconLeft = document.querySelector(".icon-left")
let iconRight = document.querySelector(".icon-right")
let sideBar = document.querySelector(".side-bar")
let words = document.querySelectorAll(".words")
let mySection = document.querySelector(".my-section")
let navBar = document.querySelector(".nav-bar")
let BlogText = document.querySelector(".Blog-text")
words.forEach(word => {
    word.style.display = "none";
})
if (iconLeft) {
    iconLeft.onclick = () => {
        iconLeft.classList.add("hidden");
        iconRight.classList.remove("hidden")
        sideBar.style.width = "70px";
        words.forEach(word => {
            word.style.display = "none";
        })
        BlogText.style.display = "none"
    }
}
if (iconRight) {
    iconRight.onclick = () => {
        iconRight.classList.add("hidden")
        iconLeft.classList.remove("hidden")
        sideBar.style.width = "270px";
        words.forEach(word => {
            word.style.display = "block";
        })
        BlogText.style.display = "block"
    }
}
let tergetAddForm=document.querySelector("#target-addForm")
let addPlat=document.querySelector("#add-Plat") 
let closeAddPlatModal=document.querySelector("#closeAddPlat-modal")
let declineAddPlat=document.querySelector("#decline-addPlat")
if(tergetAddForm){
    tergetAddForm.onclick=()=>{
        addPlat.classList.add('flex');
        addPlat.classList.remove('hidden')
    }
    closeAddPlatModal.onclick=()=>{
        addPlat.classList.add('hidden');
        addPlat.classList.remove('flex')
    }
    declineAddPlat.onclick=()=>{
        addPlat.classList.add('hidden');
        addPlat.classList.remove('flex')
    }
}
if(document.querySelector("#closeUpdatePlat-modal")){
    document.querySelector("#closeUpdatePlat-modal").onclick=()=>{
        document.querySelector("#edit-modal").classList.add('hidden')
    }
}
// function editPlat(id,platName,platDescreption,platDay,platCategory)
// {
//     console.log(id,platName,platDescreption,platDay,platCategory)
//     document.querySelector("#edit-modal").classList.remove('hidden')
//     // document.querySelector("#plat_id").value=id
//     // document.querySelector("#Uname_dishes").value=platName
//     // document.querySelector("#Udescreption_dishes").textContent=platDescreption
//     // document.querySelector("#Uday_dishes").value=platDay
//     // document.querySelector("#Ucategory_dishes").value=platCategory
  
//     $.ajax({
//         type: "PUT",
//         url: "/dashboard/" + id,
//         data: {
//           id: id,
//           platName: platName,
//           platDescreption: platDescreption,
//           platDay: platDay,
//           platCategory: platCategory
//         },
//         success: function(response) {
//           console.log(response);
//         },
//         error: function(error) {
//           console.error(error);
//         }
//       });
// }