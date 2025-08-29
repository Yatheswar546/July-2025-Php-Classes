$(document).ready(function() {
    
    const addBtn = $("#addBtn");
    const itemInput = $("#itemInput");
    const itemList = $("#itemList");

    // console.log(addBtn.html());
    // addBtn.html("Add Value");

    // itemList.append("<li>List Item 1</li>");
    // itemList.append("<li>List Item 2</li>");
    // itemList.append("<li>List Item 3</li>");

    // const listItems = $("#itemList li");

    // itemList.remove();
    // $("#itemList li:eq(1)").remove();

    // console.log(addBtn.css("background-color"));
    // console.log(itemInput.css("padding"));

    // console.log(itemInput.css("padding", "30px"));

    // listItems.css({
    //     "font-size": "24px",
    //     "color" : "red",
    //     "padding" : "18px"
    // });

    // $("#itemInput").addClass("bgColor");
    // $("#itemInput").removeClass("bgColor");
    // const Container = $('.container');
    // Container.toggleClass("container1");

    let itemCount = 0;

    addBtn.click(function() {

        const value = itemInput.val().trim();

        if (value !== "") {
            itemCount++;

            itemList.append(`<li id="${itemCount}">${value}</li>`);
            itemInput.val("");
        }

    });

});



// window.onload = function () {
//     console.log("Page loaded");

//     const addBtn = document.getElementById("addBtn");
//     const itemInput = document.getElementById("itemInput");
//     const itemList = document.getElementById("itemList");

//     let itemCount = 0; 

//     addBtn.addEventListener("click", () => {
//       const value = itemInput.value.trim();
//     //   console.log(value);

//       if (value !== "") {
//         itemCount++; 

//         const li = document.createElement("li");
//         // console.log(li)

//         li.textContent = value;
//         // console.log(li.textContent)

//         li.id = itemCount; 
//         // console.log(id)

//         itemList.appendChild(li);
//         itemInput.value = "";
//       }

//     });
// };

