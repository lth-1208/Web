const baoquan = document.querySelector(".baoquan")
const chitiet = document.querySelector(".chitiet")
if(baoquan){
    baoquan.addEventListener("click", function(){
        document.querySelector(".content-chitiet").style.display = "none"
        document.querySelector(".content-huongdan").style.display = "none"
        document.querySelector(".content-baoquan").style.display = "block"
    })
}

if(chitiet){
    baoquan.addEventListener("click", function(){
        document.querySelector(".content-chitiet").style.display = "block"
        document.querySelector(".content-huongdan").style.display = "none"
        document.querySelector(".content-baoquan").style.display = "none"
    })
}

if(huongdan){
    baoquan.addEventListener("click", function(){
        document.querySelector(".content-chitiet").style.display = "none"
        document.querySelector(".content-huongdan").style.display = "block"
        document.querySelector(".content-baoquan").style.display = "none"
    })
}