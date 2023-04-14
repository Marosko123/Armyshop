const onContinueButtonClicked = () => {
    if(!JSON.parse(localStorage.getItem("cart"))){ 
        alert("Add some products before checking out.");
        return;
    }
    window.location.href = "paymentDetail";
};

product1 = {
    "name": "Glock-18",
    "price": 10,
    "description": "Glock is a brand of polymer-framed, short recoil-operated, locked-breech semi-automatic pistols designed and produced by Austrian manufacturer Glock Ges.m.b.H. Glock Ges.m.b.H. The firearm entered Austrian military and police service by 1982 after becoming the top performer in reliability and safety tests.",
    "image_url": "https://img.freepik.com/premium-photo/gun-table-with-word-gun-it_771335-54080.jpg?w=1800",
    "alt_text": "Black glock on table with bullets around",
    "subcategory_id": 1,
    "license_needed": true,
    "count": 1
}

product2 = {
    "name": "P2000",
    "price": 20,
    "description": "The P2000 is a short recoil-operated locked breech pistol with a modified Browning-type linkless cam action with a vertically tilting barrel also employed in the USP series of self-loading pistols, as well as most modern linkless semi autos.",
    "image_url": "https://img.freepik.com/free-photo/gun_74658-46.jpg?w=740&t=st=1681023873~exp=1681024473~hmac=d70f8dce10e10d98d0e15449a9e43a5f531a1f3e286d601df993fa597fa5a5d8",
    "alt_text": "P2000 on white background",
    "subcategory_id": 1,
    "license_needed": true,
    "count": 2
}

product3 = {
    "name" : "P250",
    "price" : 399.99,
    "description" : "The SIG Sauer P250 is a semi-automatic pistol made by J.P. Sauer & Sohn, and SIG Sauer of Exeter, New Hampshire. The SIG Sauer P250 can be chambered in .357 SIG, .40 S&W, .45 ACP, and 9x19mm Parabellum. Like other SIG-Sauer pistols, the P250 pistol is a short recoil operated, locked breech pistol. It uses the typical SIG-Sauer cam-operated barrel, which locks into the ejection port on the slide.",
    "image_url" : "https://img.freepik.com/premium-photo/gun-wooden-table-with-word-gun-it_771335-54053.jpg?w=1800",
    "alt_text" : "P250 on the table",
    "subcategory_id" : 1,
    "license_needed" : true,
    "count": 5
}

product4 = {
    "name" : "Five-Seven",
    "price" : 499.99,
    "description" : "The Five-seven is a semi-automatic delayed blowback pistol chambered for FN's 5.7x28mm ammunition. The pistol has a concealed hammer. Polymer materials are used extensively in the pistol's design, and even the steel slide is encased in a polymer shell. This provides reduced weight and greater resistance to corrosion.",
    "image_url" : "https://img.freepik.com/free-vector/black-pistol-white_1308-36380.jpg?w=1800&t=st=1681023988~exp=1681024588~hmac=fd24948369a985299536b10cd218f40f3eb8b1c0723b26c7f5aad2ea7f714b2a",
    "alt_text" : "Five-Seven on white background",
    "subcategory_id" : 1,
    "license_needed" : true,
    "count": 3
}

product5 = {
    "name" : "Desert Eagle",
    "price" : 699.99,
    "description" : "The Desert Eagle is a gas-operated, semi-automatic pistol known for chambering the .50 Action Express, the largest centerfire cartridge of any magazine-fed, self-loading pistol. Detachable stick magazine; capacities: 9 rounds (.357) 8 rounds (.41 and .44)",
    "image_url" : "https://img.freepik.com/premium-photo/gun-wooden-table-with-word-gun-it_771335-54082.jpg?w=1800",
    "alt_text" : "Desert Eagle",
    "subcategory_id" : 1,
    "license_needed" : true,
    "count": 3
}

product6 = {
    "name" : "R8 Revolver",
    "price" : 599.99,
    "description" : "It is currently the heaviest handgun available, even heavier than many primary weapons. The revolver deals extremely high damage, able to instantly kill with a headshot to a very long range and regardless of armor due to its low damage dropoff and high armor penetration.",
    "image_url" : "https://img.freepik.com/premium-photo/airsoft-gun-white_69593-4705.jpg?w=740",
    "alt_text" : "R8 Revolver on white background",
    "subcategory_id" : 1,
    "license_needed" : true,
    "count": 2
}

products = {
    1: product1,
    2: product2,
    3: product3,
    4: product4,
    5: product5,
    6: product6
}

localStorage.setItem('cart', JSON.stringify(products));

const shippingCost = 10;

window.addEventListener('load', function () {
    data = JSON.parse(localStorage.getItem("cart"));
    console.log(data);

    listElement = document.getElementById("products");

    if (!data) 
        listElement.innerHTML = "<li>Shopping cart is empty...</li>";

    for (let key in data) {
        product = document.createElement("li");
        product.setAttribute("id", "product_" + key);
        product.innerHTML = `
        <div class="item">
          <!-- image source: unsplash.com -->
          <img class="img" src="${data[key].image_url}" alt="${data[key].alt_text}">
          <div class="desc">
            <div class="title-remove">
              <h3>${data[key].name}
              </h3>
              <button class="remove-button" id="remove-button_${key}">
                <!-- image source: flaticon.com -->
                <img class="remove-button-img" src="../../images/shoppingCartImages/3515498.png">
              </button>
            </div>
            <div class="prices">
              <p class="singularPrice">${data[key].price}€</p>
              <div class="multiple">
                <div class="countControls">
                  <button class="countControlButtons" id="minusButton_${key}">-</button>
                  <input id="count_${key}" type="number" value="${data[key].count}">
                  <button class="countControlButtons" id="plusButton_${key}">+</button>
                </div>
                <p class="multiplePrice" id="multiplePrice_${key}">${(data[key].price * data[key].count).toFixed(2)}€</p>
              </div>
            </div>
          </div>
        </div>`

        listElement.appendChild(product);
        
        document.getElementById(`count_${key}`).addEventListener('change', function () {
            input = document.getElementById(`count_${key}`);
            if(input.value<0) input.value = 0;
            else if(input.value >999) input.value = 999;

            handleProductCountChange(key, false, false, input.value);
        });

        document.getElementById(`plusButton_${key}`).addEventListener('click', function () {
            input = document.getElementById(`count_${key}`)
            if (input.value < 999) 
                handleProductCountChange(key, true, false, null);
            
        });

        document.getElementById(`minusButton_${key}`).addEventListener('click', function () {
            input = document.getElementById(`count_${key}`)
            if (input.value > 1) 
                handleProductCountChange(key, false, true, null);
        });

        document.getElementById(`remove-button_${key}`).addEventListener('click', function () {
            if(!confirm("Do you really want to remove this product?")) return;

            data = JSON.parse(localStorage.getItem("cart"));
            delete data[key];
            localStorage.setItem("cart", JSON.stringify(data));

            calculateSummary(data);

            console.log(localStorage.getItem("cart"));
            if(localStorage.getItem("cart") === "{}") {
                localStorage.removeItem('cart');

                listElement.innerHTML = "<li>Shopping cart is empty...</li>";
                return;
            }

            var product = document.getElementById(`product_${key}`);
            product.parentNode.removeChild(product);
        });
    }
    calculateSummary(data);
});

function handleProductCountChange(key, increment, decrement, value){
    data = JSON.parse(localStorage.getItem("cart"));

    if(increment)
        data[key].count = parseInt(data[key].count) + 1;
    else if(decrement)
        data[key].count = parseInt(data[key].count) - 1;
    else if(value)
        data[key].count = value;
        
    input = document.getElementById(`count_${key}`)
    input.value = parseInt(data[key].count);

    document.getElementById(`multiplePrice_${key}`).innerText = (data[key].price * data[key].count).toFixed(2) + '€';

    calculateSummary(data);

    localStorage.setItem("cart", JSON.stringify(data));
}

function calculateSummary(data){
    subtotal = 0;
    for (let key in data) 
        subtotal += (data[key].price * data[key].count);
    
    document.getElementById(`subtotal`).innerText = subtotal.toFixed(2) + '€';
    document.getElementById(`shipping`).innerText = shippingCost + '€';
    document.getElementById(`total`).innerText = (subtotal + shippingCost).toFixed(2) + '€';
}