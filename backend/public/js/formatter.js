class Formatter{
      static formatPrice(price) {
          return new Intl.NumberFormat("fr-FR", {
              style: "currency",
              currency: "EUR",
              minimumFractionDigits: 2,
              maximumFractionDigits: 2,
          }).format(price);
    }
}