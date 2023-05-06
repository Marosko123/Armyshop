class Formatter{
    static formatPrice(price) {
        return new Intl.NumberFormat("fr-FR", {
            style: "currency",
            currency: "EUR",
            minimumFractionDigits: 2,
            maximumFractionDigits: 2,
        }).format(price);
    }

    static formatPriceMillions(price) {
        if (price > 1000000) {
          price = (price / 1000000).toFixed(2) + "M";
        } else if (price > 100000) {
            price = price / 1000 + "K";
        }
        return price;
    }
}