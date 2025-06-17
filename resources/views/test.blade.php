const searchInput = document.getElementById('searchInput');
const items-card = document.querrySlecterAll('items-card');

searchInput.addEventListner("input" , () function{
    const serchTerm = this.value.toLowerCase();

    items.forEach(item =>{
        const itemName = document.querySelector(".itemName").textContent.toLowerCase();
        if(itemName.include(searchTerm)){
            item.classList.remove("hidden");
        }
        else{
            item.classList.add("hidden");
        }
    });
});
