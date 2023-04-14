const onContinueButtonClicked = () => {
    window.location.href = "paymentDetail";
};

product1 = {
    "name" : "Glock-18",
    "price" : 299.99,
    "description" : "Glock is a brand of polymer-framed, short recoil-operated, locked-breech semi-automatic pistols designed and produced by Austrian manufacturer Glock Ges.m.b.H. Glock Ges.m.b.H. The firearm entered Austrian military and police service by 1982 after becoming the top performer in reliability and safety tests.",
    "image_url" : "https://img.freepik.com/premium-photo/gun-table-with-word-gun-it_771335-54080.jpg?w=1800",
    "alt_text" : "Black glock on table with bullets around",
    "subcategory_id" : 1,
    "license_needed" : true
}

product2 = {
    "name" : "P2000",
    "price" : 299.99,
    "description" : "The P2000 is a short recoil-operated locked breech pistol with a modified Browning-type linkless cam action with a vertically tilting barrel also employed in the USP series of self-loading pistols, as well as most modern linkless semi autos.",
    "image_url" : "https://img.freepik.com/free-photo/gun_74658-46.jpg?w=740&t=st=1681023873~exp=1681024473~hmac=d70f8dce10e10d98d0e15449a9e43a5f531a1f3e286d601df993fa597fa5a5d8",
    "alt_text" : "P2000 on white background",
    "subcategory_id" : 1,
    "license_needed" : true
}

products = {
    1: product1,
    2: product2
}


localStorage.setItem('cart', JSON.stringify(products));