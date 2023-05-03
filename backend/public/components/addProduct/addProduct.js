
categoryOptions = document.querySelectorAll('.cat-option')
subcategoryContainer = document.getElementById('product_subcategory')
categoryOptions.forEach(option => {
    option.addEventListener('click', () => {
        subcategories = SubcategoriesMap.getSubcategories(option.innerHTML)
        subcategoryContainer.innerHTML = ''
        subcategories.forEach(subcategory => {
            if (subcategory.category == option.innerHTML) {
                subcategoryContainer.innerHTML += `<option>${subcategory.subcategory}</option>`
            }
        })
    })
})