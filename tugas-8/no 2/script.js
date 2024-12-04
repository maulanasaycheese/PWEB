const products = {
    Desktop: ["Dell", "HP", "Lenovo"],
    Laptop: ["Apple", "Asus", "Acer"],
    Smartphone: ["Samsung", "Xiaomi", "Oppo"]
};

function updateBrands() {
    const productType = document.getElementById('product-type').value;
    const brandDropdown = document.getElementById('brand');

    brandDropdown.innerHTML = '<option value="">Pilih Merk</option>';

    if (productType) {
        const brands = products[productType];

        brands.forEach(brand => {
            const option = document.createElement('option');
            option.value = brand;
            option.text = brand;
            brandDropdown.add(option);
        });
    }
}